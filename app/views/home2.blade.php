@extends('template')

@section('title')
LoveTest.vn
@endsection

@section('content')
	<div class="container_12">
		<div class="welcome">
			<img src="assets/images/favicon.png">
			<p><font face="Calibri Light">Chào mừng các bạn tham gia <font face="Nirmala UI" color="#2f17e4"><font color="#f11c8a">LOVE</font>TEST<font color="#f11c8a">.vn</font></font><br>Hãy cùng chúng tôi xây dựng một cộng đồng <br>kết bạn lớn nhất từ trước đến nay</font></p>
	  	</div>
	  	<div class="fb-login">
			<p>Các thành viên mới</p>
			<!--
				Code hiển thị hình ảnh của những người gần đây nhất đã đăng ký sử dụng trang web
			-->
			<ul>
				<?php
					$users = User::orderBy('created_at','DESC')->take(15)->get();
				?>
				@foreach ($users as $user)
					<li display=inline float=left><img src="uploads/images/{{$user->AVATAR}}" width="100px" height="150px"  /></li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection


