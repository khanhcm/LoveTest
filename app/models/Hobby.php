<?php
class Hobby extends Eloquent{
	protected $table = "hobbies";

	public static function checkHobby($hobbyname){
		if(Hobby::where("hobbyname","=",$hobbyname)->count()>0) return false;
		else return true;
	}
}