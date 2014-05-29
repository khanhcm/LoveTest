@extends('template')

@section('title')
Đăng nhập
@endsection

@section('content')
	@if(Session::has('register_success'))
		<div id='register_success'>{{Session::get('register_success')}}</div>
		<?php Session::forget('register_success');?>
	@endif
	@if(Session::has('login-error'))
		<div id='login-error'>{{Session::get('login-error')}}</div>
		<?php Session::forget('login-error');?>
	@endif
	<form action="login" method="post" name="login_frm">
		Tên đăng nhập: <input type="text" name="user_name"><br>
		Mật khẩu: <input type="password" name="password"><br>
		<input type="submit" value="Đăng nhập" >
	</form>
@endsection