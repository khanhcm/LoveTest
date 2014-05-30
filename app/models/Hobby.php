<?php
class Hobby extends Eloquent{
	protected $table = "hobbies";

	public static function createHobbies(){
		$hb = new Hobby();
		$hb->hobbyname = "Ẩm thực";
		$hb->hobbycode = 'am-thuc';
		if(Hobby::checkHobby("Ẩm thực"))
			$hb->save();
		$hb = new Hobby();
		$hb->hobbyname = "Âm nhạc";
		$hb->hobbycode = 'am-nhac';
		if(Hobby::checkHobby("Âm nhạc"))
			$hb->save();p
		$hb = new Hobby();
		$hb->hobbyname = "Thể thao";
		$hb->hobbycode = 'the-thao';
		if(Hobby::checkHobby("Thể thao"))
			$hb->save();
		$hb = new Hobby();
		$hb->hobbyname = "Sách";
		$hb->hobbycode = 'sach';
		if(Hobby::checkHobby("Sách"))
			$hb->save();
		$hb = new Hobby();
		$hb->hobbyname = "Phong cách";
		$hb->hobbycode = 'phong-cach';
		if(Hobby::checkHobby("Phong cách"))
			$hb->save();
		$hb = new Hobby();
		$hb->hobbyname = "Tính cách";
		$hb->hobbycode = 'tinh-cach';
		if(Hobby::checkHobby("Tính cách"))
			$hb->save();
		$hb = new Hobby();
		$hb->hobbyname = "Công việc";
		$hb->hobbycode = 'cong-viec';
		if(!Hobby::checkHobby("Công việc"))
			$hb->save();

		return Redirect::to('answer');
	}

	public static function checkHobby($hobbyname){
		if(Hobby::where("hobbyname","=",$hobbyname)->count()>0) return false;
		else return true;
	}
}