<?php
class LoginController extends BaseController{
	public function login(){
		$gottenUser = array(
			'username'=>Input::get('user_name'),
			'password'=>Input::get('password')
			);
		if(Auth::attempt($gottenUser)){
			return Redirect::to('home1');
		}
		return Redirect::to('login')->withInput();
	}
}