<?php
class UserMatchController extends BaseController{

	public static function findSameMember($arr1, $arr2){
		return var_dump(array_intersect($arr1, $arr2));
	}

	public static function answerMatch($usr1,$usr2){
		$user1 = UserAnswerQuestion::where("USERID","=",$usr1)->get();
		$user2 = UserAnswerQuestion::where("USERID","=",$usr2)->get();
		$answer1 = null;
		$answer2 = null;
		foreach ($user1 as $key => $value) {
			array_insert($answer1,0,$value->ANSWERID);
		}
		foreach ($user2 as $key => $value) {
			array_insert($answer2,0,$value->ANSWERID);
		}
		return count(findSameMember($answer1,$answer2));
	}

	public static function questionMatch($usr1,$usr2){
		$user1 = UserLikeHobby::where("USERID","=",$usr1)->get();
		$user2 = UserLikeHobby::where("USERID","=",$usr2)->get();
		$question1 = null;
		$question2 = null;
		foreach ($user1 as $key => $value) {
			$hobby1 = Question::where("HOBBYID","=",$value->HOBBYID)->get()
			foreach ($hobby1 as $key => $value) {
				array_insert($question1,0,$value->ID);
			}
		}
		foreach ($user2 as $key => $value) {
			$hobby2 = Question::where("HOBBYID","=",$value->HOBBYID)->get()
			foreach ($hobby2 as $key => $value) {
				array_insert($question2,0,$value->ID);
			}
		}
		return count(findSameMember($question1,$question2));
	}

	public static function answerMatch($usr1,$usr2){
		return answerMatch($user1,$user2)/questionMatch($usr1,$usr2);
	}

	public static function array_insert(&$array, $position, $insert)
	{
	    if (is_int($position)) {
	        array_splice($array, $position, 0, $insert);
	    } else {
	        $pos   = array_search($position, array_keys($array));
	        $array = array_merge(
	            array_slice($array, 0, $pos),
	            $insert,
	            array_slice($array, $pos)
	        );
	    }
	}
}