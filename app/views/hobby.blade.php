@extends('template')

@section('title')
	Lựa chọn sở thích
@endsection

@section('content')
<!-- <table class="table3">
    <thead>
        <tr>
            <th></th>
            <th scope="col" abbr="Starter">Chọn lĩnh vực mà bạn thích</th>
            
        </tr>
    </thead>

</table>	 -->
<form action="{{Asset('hobby')}}" method="post">
	Câu hỏi đầu tiên dành cho bạn? Bạn thích những gì?<br>
	<?php 
		$hobbies = Hobby::all();
		$userInfo = Session::get('user_info');
    	$userid = $userInfo[0]['ID'];
    	$ulbs = UserLikeHobby::where("USERID","=",$userid)->get();
	?>	
	@foreach($hobbies as $key => $hobby)
		<?php
			$check = false;
		?>
		@foreach($ulbs as $key => $ulb)
			@if($ulb->HOBBYID==$hobby->ID)
				<?php
					$check = true;
					break 1;
				?>
			@else
				<?php
					$check = false;
				?>
			@endif
		@endforeach		
		@if($check)
			{{Form::checkbox($hobby->HOBBYCODE,"yes","true",array("class"=>"form-control"))}}{{$hobby->HOBBYNAME}}
			<br>
		@else
			{{Form::checkbox($hobby->HOBBYCODE,"yes","",array("class"=>"form-control"))}}{{$hobby->HOBBYNAME}}<br>
		@endif
	@endforeach
	<input type="submit" value="Chọn sở thích" class="form-control">
</form>
@endsection

