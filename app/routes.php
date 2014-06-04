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
        return Redirect::to('home1');
    }
    else return Redirect::to('home2');
});

Route::filter("login_success",function(){
    if(Session::has('login_success'))
        return Redirect::to('home1');
});

Route::get('login',array('before'=>'login_success',function(){
    return View::make('login');
}));

Route::get('register',function(){
    return View::make('register');
});

Route::get('home',function(){
    return View::make('home');
});
Route::get('home1',function(){   
    return View::make('home1');
});

Route::post('register','RegisterController@register');

Route::post('login',function(){
    if(User::check_login(Input::get("user_name"),md5(sha1(Input::get("password")))))
    {
        Session::put('login_success',Input::get('user_name')." đã đăng nhập thành công");
        $user_info = User::where("username","=",Input::get("user_name"))->get()->toArray();
        Session::put("user_info",$user_info);
        return Redirect::to('home1');
    }
    else {
        return Redirect::to('login')->with('login-error',"Tên tài khoản hoặc mật khẩu không đúng")->withInput();        
    }
});

Route::get('logout',function(){
    if(Session::has('login_success')){
        Session::forget('login_success');
        if(Session::has('user_info'))
            Session::forget('user_info');
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

Route::get("personal",function(){
    return View::make("personal");
});

Route::post("personal", function(){
    $userInfo = Session::get('user_info');
    $userid = $userInfo[0]['ID'];
    Session::forget('user_info');
    $image = Input::file('avatar');
    if($image != null){
        $destinationPath = 'uploads/images/';
        $image = 'default_avatar.jpg';
        $filename = $image->getClientOriginalName();
        $upload_success = $image->move($destinationPath,$filename);  
    }
    else{
        $filename = 'default_avatar.jpg';
    }
    
    $affectedRows = User::where("id","=",$userid)->update(array(
        'FULLNAME'=>Input::get("full_name"),
        'BIRTHDAY'=>Input::get("date_of_birth"),
        'USERADDRESS'=>Input::get("user_address"),
        'AVATAR'=>$filename,
        'USERJOB'=>Input::get("user_job"),
        'RELATIONSHIP'=>Input::get("user_relationship")
        ));
    $user_info = User::where("id","=",$userid)->get()->toArray();
    Session::put('user_info',$user_info);
    return Redirect::to("personal");
});

Route::get('hobby',function(){
    return View::make('hobby');
});


Route::get('match', 'BaseController@user_match');

Route::get('home2', function(){
    return View::make('home2');
});

Route::post('hobby',function(){
    $hobbies = Hobby::all();
    $userInfo = Session::get('user_info');
    $userid = $userInfo[0]['ID'];
    foreach ($hobbies as $key => $hobby)
        if(UserLikeHobby::where("HOBBYID","=",$hobby->ID)->where("USERID","=",$userid)->count()<=0){
            if(Input::get($hobby->HOBBYCODE) === "yes"){
                $uslhb = new UserLikeHobby();
                $uslhb->USERID = $userid;
                $uslhb->HOBBYID = $hobby->ID;
                $uslhb->save();
            }
            else{
                $uslhbs = UserLikeHobby::where("HOBBYID","=",$hobby->ID)->where("USERID","=",$userid);
                foreach ($uslhbs as $key => $uslhb) {
                    $uslhb->delete();
                }
            }
        }
            
    return Redirect::to('question');
});

Route::get('question',function(){
    return View::make('question');
});