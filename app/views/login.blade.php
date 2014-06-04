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
	<form action="login" method="post" name="login_frm"><br/>
		<h2>Đăng nhập</h2>
		<input type="text" name="user_name"  placeholder="Username" class="form-control"/><br>
		<input type="password" name="password"placeholder="Password" class="form-control"/><br>
		<button class="btn btn-lg btn-primary btn-block"/>Đăng nhập</btn>
	</form>
@endsection