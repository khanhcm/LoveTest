<?php
class UserController extends BaseController{
	public function insertUser($id, $name, $age, $avatar){
		$user = new User();
		$user->userid = $id;
		$user->username = $name;
		$user->age = $age;
		$user->avatar = $avatar;
		$row = DB::table('users')->where('userid', '=', $id)->first();
		if ($row == null)
			$user->save();
	}

}