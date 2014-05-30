<?php
class UserMatchController extends BaseController{

	public function user_match($userid1, $userid2){
		$hobby1 = UserLikeHobby::where("userid","=",$userid1)->get();
		$hobby2 = UserLikeHobby::where("userid","=",$userid2)->get();
		$hobbySame = var_dump(array_intersect($hobby1, $hobby2))
		foreach ($hobbySame as $key => $value) {
			$questions = HobbyHasQuestion::where("HOBBYID","=",$value->HOBBYID)->get();
			foreach ($questions as $key => $value) {
			}
		}
	}
}