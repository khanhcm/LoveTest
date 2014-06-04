<?php
class UserMatchController extends BaseController{

	public static function findSameMember($arr1, $arr2){
		return var_dump(array_intersect($arr1, $arr2));
	}
}