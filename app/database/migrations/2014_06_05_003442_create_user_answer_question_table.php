<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAnswerQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('USER_ANSWER_QUESTION',function($table){
			$table->integer('USERID')->unsigned();
			$table->integer('ANSWERID')->unsigned();
			$table->primary(array('USERID','ANSWERID'));
			$table->foreign('USERID')->references('ID')->on('USERS');
			$table->foreign('ANSWERID')->references('ID')->on('ANSWERS');
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
		Schema::drop('USER_ANSWER_QUESTION');
	}

}
