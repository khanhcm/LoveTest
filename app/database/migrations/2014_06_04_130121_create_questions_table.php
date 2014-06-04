<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('QUESTIONS',function($table){
			$table->increments('ID');
			$table->text('QUESTIONNAME');
			$table->integer('HOBBYID')->unsigned();
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
		Schema::drop('QUESTIONS');
	}

}
