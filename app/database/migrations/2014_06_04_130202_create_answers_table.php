<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('ANSWERS',function($table){
			$table->increments('ID');
			$table->text('ANSWERNAME');
			$table->integer('QUESTIONID')->unsigned();
			$table->foreign('QUESTIONID')->references('ID')->on('QUESTIONS');
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
		Schema::drop('ANSWERS');
	}


}
