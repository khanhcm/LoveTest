<?php
class RegisterController extends BaseController{
	public function register(){
		$rules = array(
			'user_name' => 'required|min:5',
			'password' => 'required|min:6',
			'email' => 'email|required',
			'full_name' => 'required',
			'birthday' => 'required'
		 );
		if(!Validator::make(Input::all(),$rules)->fails()){
			if(User::check_user(Input::get('user_name')) && User::check_email(Input::get('email'))){
				$user = new User();
				$user->FULLNAME = Input::get('full_name');
				$user->USERNAME = Input::get('user_name');
				$user->PASSWORD = md5(sha1(Input::get('password')));
				$user->EMAIL = Input::get('email');
				$user->BIRTHDAY =  Input::get('birthday');
				$user->AVATAR  = 'default_avatar.jpg';
				if(Input::get('male',true))
					$user->GENDER = "Nam";
				else $user->GENDER = "Nữ";
				$user->save();
				Session::put("register_success",Input::get('user_name')." đã đăng ký thành công!");
				return Redirect::to('login');
			}
		}
		return Redirect::to('register')->with("error_register","Các trường dữ liệu nhập vào không đúng");
	}
}