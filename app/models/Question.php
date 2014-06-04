<?php

class Question extends Eloquent{
	protected $table = 'questions';
	protected $answers;

	public function getAnswers(){
		return $this->answers;
	}

	public function setAnswers($value){
		$this->answers = $value;
	}
}

