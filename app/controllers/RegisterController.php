<?php
class RegisterController extends BaseController{
	public function register(){
		$rules = array(
			'user_name' => 'required|min:7',
			'password' => 'required|min:6',
			'email' => 'email|required'
		 );
		if(!Validator::make(Input::all(),$rules)->fails()){
			if(User::check_user(Input::get('user_name')) && User::check_email('email'=>Input::get('email'))){
				$user = new User();
				$user->fullname = Input::get('full_name')
				$user->username = Input::get('user_name');
				$user->password = md5(sha1(Input::get('password')));
				$user->email = Input::get('email');
				if(Input::get('male',true))
					$user->gender = "Nam";
				else $user->gender = "Nữ";
				$user->save();
				Session::put("register_success",Input::get('user_name')." đã đăng ký thành công!");
				return Redirect::to('login');
			}
		}
		return Redirect::to('register')->with("error_register","Các trường dữ liệu nhập vào không đúng");
	}
}