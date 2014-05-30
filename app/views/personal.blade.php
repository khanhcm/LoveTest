@extends("template")

@section("title")
	Trang cá nhân
@endsection

@section("content")
	@if(Input::get('edit') !=1)
		<div id="personal_info">
			<h1>THÔNG TIN CÁ NHÂN</h1>
			<?php $userInfo = Session::get('user_info');?>
			Tên đăng nhập: {{$userInfo[0]['USERNAME']}}<br/>
			Họ và tên: {{$userInfo[0]['FULLNAME']}}<br/>
			Email: {{$userInfo[0]['EMAIL']}}<br/>
			Ngày sinh: {{$userInfo[0]['BIRTHDAY']}}<br/>
			Ảnh đại diện: <br>
			<img src="{{'uploads/images/'.$userInfo[0]['AVATAR']}}" width="150px" height="200px" alt=""><br/>
			Địa chỉ: {{$userInfo[0]['USERADDRESS']}}<br/>
			Nghề nghiệp: {{$userInfo[0]['USERJOB']}}<br/>
			Tình trạng mối quan hệ:{{$userInfo[0]['RELATIONSHIP']}}<br/>
			<a href="{{Asset('personal?edit=1')}}">Chỉnh sửa thông tin</a>
		</div>
	@else
		<h1>CHỈNH SỬA THÔNG TIN CÁ NHÂN</h1>
		<script>
			$(function(){
				$('#date_of_birth').datepicker({dateFormat: 'dd/mm/yy'});
			});
		</script>
		<form id="hobbies_frm" action="{{Asset('personal?edit=1')}}" method="post" enctype="multipart/form-data">
			<?php $userInfo = Session::get('user_info');?>
			Họ và tên: <input type=text name="full_name" id="full_name" value="{{$userInfo[0]['FULLNAME']}}" /><br/>
			Ngày sinh: <input type=text name="date_of_birth" id="date_of_birth" value="{{$userInfo[0]['BIRTHDAY']}}" /><br/>
			Ảnh đại diện: <input type=file name="avatar" id="avatar"><br/>
			Địa chỉ: <input type=text name="user_address" id="user_address" value="{{$userInfo[0]['USERADDRESS']}}"/><br/>
			Nghề nghiệp:<input type=text name="user_job" id="user_job" value="{{$userInfo[0]['USERJOB']}}"/><br/>
			Tình trạng mối quan hệ:<input type=text name="user_relationship" id="user_relationship" value="{{$userInfo[0]['RELATIONSHIP']}}" /><br/>
			<input type="submit" value="Chỉnh sửa thông tin" id="change_information" />
		</form>
	@endif
@endsection