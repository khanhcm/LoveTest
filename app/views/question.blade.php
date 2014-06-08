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
	<h3 style="margin-left:500px">Các câu hỏi dành cho bạn</h3>
	<form action = "{{Asset('question')}}" method="post" style="border:none; width:60%" >
		@foreach ($uslhb as $ulh)
			<?php
				$questions = Question::where("HOBBYID","=",$ulh->HOBBYID)->get();
			?>
			@foreach ($questions as $question)
					<font style="font-size:17pt; color: #2f17e4"><u>Câu hỏi:</u> {{$question->QUESTIONNAME}}</font><br>
					<?php
					$answers = Answer::where("QUESTIONID","=",$question->ID)->get();
				?>	
					@foreach ($answers as $answer)
						{{Form::radio("question".$question->ID,"answer".$answer->ID,"",array("style"=>"display:inline"))}}<h3 style="display:inline">{{"  ".$answer->ANSWERNAME}}</h3><br>
					@endforeach
			@endforeach
		@endforeach
		<br>
		<input type="submit" value="Trả lời" class="form-controller"/>
	</form>
@endsection