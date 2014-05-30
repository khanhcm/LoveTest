@extends('template')

@section('title')
	Trả lời các câu hỏi
@endsection

@section('content')
	<h1>Chọn lĩnh vực mà bạn thích</h1>
	<?php 
		Hobby::createHobbies();
		$hobbies = Hobby::all();
	?>	
	@foreach($hobbies as $key => $hobby)
		<a href="hobby?type={{$hobby->HOBBYCODE}}" >{{$hobby->HOBBYNAME}}</a><br>
	@endforeach
	@if(Input::get('type') == 'am-thuc')
		
	@endif
@endsection

