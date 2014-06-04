<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLikeHobbyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('USER_LIKE_HOBBY',function($table){
			$table->integer('HOBBYID')->unsigned();
			$table->integer('USERID')->unsigned();
			$table->primary(array('HOBBYID','USERID'));
			$table->foreign('USERID')->references('ID')->on('USERS');
			$table->foreign('HOBBYID')->references('ID')->on('HOBBIES');
			$table->timestamps();
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('USER_LIKE_HOBBY');
	}

}
