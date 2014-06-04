@extends('template')

@section('title')
	Trả lời các câu hỏi
@endsection

@section('content')
	<?php
		$userInfo = Session::get('user_info');
    	$userid = $userInfo[0]['ID'];
		$uslhb = UserLikeHobby::where("USERID","=",$userid)->get();
	?>
	<form action = "{{Asset('question')}}" method="post">
		@foreach ($uslhb as $ulh)
			<?php
				$questions = Question::where("HOBBYID","=",$ulh->HOBBYID)->get();
			?>
			@foreach ($questions as $question)
				<label>Câu hỏi: {{$question->QUESTIONNAME}}</label><br>
				<?php
				$answers = Answer::where("QUESTIONID","=",$question->ID)->get();
			?>	
				@foreach ($answers as $answer)
					<input type=radio name="{{$question->QUESTIONID}}" value="{{$answer->ANSWERID}}">{{$answer->ANSWERNAME}}</input><br>
				@endforeach
			@endforeach	
		@endforeach
		<br>
	</form>
@endsection