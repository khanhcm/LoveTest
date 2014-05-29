<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Trước khi chạy phải migrate database

//Kiểm tra đăng nhập, nếu còn lưu session thì vô thẳng home, không thì dẫn về login
Route::get('/', function()
{
    if(Session::has('login_success')){
        return Redirect::to('home');
    }
    else return Redirect::to('login');
});


Route::get('login',function(){
    return View::make('login');
});

Route::get('register',function(){
    return View::make('register');
});

Route::get('home',function(){
    return View::make('home');
});

Route::post('register','RegisterController@register');

Route::post('login',function(){
    if(User::check_login(Input::get("user_name"),md5(sha1(Input::get("password")))))
    {
        Session::put('login_success',Input::get('user_name')." đã đăng nhập thành công");
        return Redirect::to('home1');
    }
    else {
        return Redirect::to('login')->with('login-error',"Tên tài khoản hoặc mật khẩu không đúng")->withInput();        
    }
});

Route::get('logout',function(){
    if(Session::has('login_success')){
        Session::forget('login_success');
        return Redirect::to('login');
    }
});

//Kiểm tra username với email trùng bằng ajax
Route::group(array("prefix"=>"check"),function(){
    Route::post("check-username",function(){
        if(User::check_user(Input::get('user_name'))) return "true";
        else return "false";
    });
    Route::post("check-email",function(){
        if(User::check_email(Input::get('email'))) return "true";
        else return "false";
    });
});