<?php
class FacebookLoginController extends BaseController{
	public function getCallback(){
		$code = Input::get('code');
		if(strlen($code)==0) return Redirect::to('/')->with('message','There is an error when communicate with facebook');
		$facebook = new Facebook(Config::get('facebook'));
		$uid = $facebook->getUser();
		if($uid == 0) return Redirect::to('/')->with('message','There is an error');
		$me = $facebook->api('/me');
		$userController = new UserController();
		if(array_key_exists('birthday', $me)){
			$dob = $me['birthday'];
			$yob = (int)$dob->format("Y");
			$dt = new DateTime();
			$now = (int)($dt->format("Y"));
			$age = $now - $yob;
		}
		else{
			$age = null;
		}
		$userController->insertUser($me['id'],$me['name'],$age,"http://graph.facebook.com/".$me['id']."/picture?type=large");


	}
	public function getLogin(){
		$facebook = new Facebook(Config::get('facebook'));
		$param = array(
			'redirect_uri' => url('login-fb/callback'),
			'scope' => array('email','user_likes')
		);
		return Redirect::to($facebook->getLoginUrl($param));		
	}

	public function getLogout(){
		
	}

	public function getLoginState(){
		return $this->loginStatus;
	}
	
	public function getAvatar(){
		//return $this->userAvatar;
	}
}