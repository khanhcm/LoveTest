@extends('template')

@section('title')
	Trả lời các câu hỏi
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
<form>
<a class="button big orange"><b>Chọn lĩnh vực mà bạn thích</b></a>

	<?php 
		Hobby::createHobbies();
		$hobbies = Hobby::all();
	?>	
	
	 
					
				
					@foreach($hobbies as $key => $hobby)
									
					<a href="hobby?type={{$hobby->HOBBYCODE}}" class="button big green">{{$hobby->HOBBYNAME}}</a>					
					
					@endforeach
				
				
	
	@if(Input::get('type') == 'am-thuc')
		
	@endif
</form>
@endsection

