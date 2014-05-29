<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionHasAnswerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('QUESTION_HAS_ANSWER',function($table){
			$table->integer('QUESTIONID')->unsigned();
			$table->integer('ANSWERID')->unsigned();
			$table->primary(array('QUESTIONID','ANSWERID'));
			$table->foreign('ANSWERID')->references('ANSWERID')->on('ANSWERS');
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
		Schema::drop('QUESTION_HAS_ANSWER');
	}

}
