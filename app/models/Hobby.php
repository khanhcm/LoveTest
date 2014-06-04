<?php
class Hobby extends Eloquent{
	protected $table = "hobbies";
	protected $questions;

	public static function checkHobby($hobbyname){
		if(Hobby::where("hobbyname","=",$hobbyname)->count()>0) return false;
		else return true;
	}

	public function getQuestions(){
		return $this->questions;
	}

	public function setQuestions($value){
		$this->questions = $value;
	}
}