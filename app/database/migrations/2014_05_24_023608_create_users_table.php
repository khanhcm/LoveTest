<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('USERS',function($table){
			$table->increments('USERID');
			$table->text('USERNAME');
			$table->text('FULLNAME');
			$table->text('USERADDRESS');
			$table->text('USERJOB');
			$table->text('EMAIL');
			$table->text('GENDER');
			$table->text('RELATIONSHIP');
			$table->date('BIRTHDAY')->nullable();
			$table->text('AVATAR')->nullable();
			$table->text('PASSWORD');
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
		Schema::drop('USERS');
	}

}
