<?php
class RegisterController extends BaseController{
	public function register(){
		$rules = array(
			'user_name' => 'required|min:7',
			'password' => 'required|min:6',
			'email' => 'email|required'
		 );
		if(!Validator::make(Input::all(),$rules)->fails()){
			$gottenUser=array(
			'user_name'=>Input::get('user_name'),
			'password'=>Input::get('password'),
			'email'=>Input::get('email')
			);
			if(User::check_user($gottenUser['user_name']) && User::check_email($gottenUser['email'])){
				$user = new User();
				$user->username = $gottenUser['user_name'];
				$user->password = md5(sha1($gottenUser['password']));
				$user->email = $gottenUser['email'];
				$user->usertype='user';
				$user->save();
				Session::put("register_success",Input::get('user_name')." đã đăng ký thành công!");
				return Redirect::to('login');
			}
		}
		return Redirect::to('register')->with("error_register","Các trường dữ liệu nhập vào không đúng");
	}
}