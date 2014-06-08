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
<h3 style="margin-left:400px">Câu hỏi đầu tiên dành cho bạn? Bạn thích những gì?</h3><br>
<form action="{{Asset('hobby')}}" method="post">
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
			<div class="form-control" style="border:none">
				{{Form::checkbox($hobby->HOBBYCODE,"yes","true",array("style"=>"display:inline"))}}<h3 style="display:inline">{{"  ".$hobby->HOBBYNAME}}</h3>
			</div>
			<br>
		@else
			<div class="form-control" style="border:none">
				{{Form::checkbox($hobby->HOBBYCODE,"yes","",array("style"=>"display:inline"))}}<h3 style="display:inline">{{"  ".$hobby->HOBBYNAME}}</h3><br>
			</div>
			<br>
		@endif
	@endforeach
	<input type="submit" value="Chọn sở thích của bạn" class="form-control">
</form>
@endsection

