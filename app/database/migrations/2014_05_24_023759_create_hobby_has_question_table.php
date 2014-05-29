<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHobbyHasQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('HOBBY_HAS_QUESTION',function($table){
			$table->integer('HOBBYID')->unsigned();
			$table->integer('QUESTIONID')->unsigned();
			$table->primary(array('HOBBYID','QUESTIONID'));
			$table->foreign('HOBBYID')->references('HOBBYID')->on('HOBBIES');
			$table->foreign('QUESTIONID')->references('QUESTIONID')->on('QUESTIONS');
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
		Schema::drop('HOBBY_HAS_QUESTION');
	}

}
