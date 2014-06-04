<?php

class User extends Eloquent{
	protected $table = "users";
	public static function check_login($username, $password){
		$check = User::where("username","=",$username)->where("password","=",$password)->count();
		if($check > 0) return true;
		else return false;
	}

	public static function check_user($username){
		if(User::where("username","=",$username)->count()>0) return false;
		else return true;
	}

	public static function check_email($email){
		if(User::where("email","=",$email)->count()>0) return false;
		else return true;
	}
	public static function avatar()
	{		
		$users=DB::table("users")->get();
			foreach ($users as $user) {
				$results=$user->USERNAME;
			}

   		 return $results;

	}
	
}