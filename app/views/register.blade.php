@extends('template')

@section('title')
LoveTest.vn
@endsection

@section('content')
	<form action="{{URL::asset('register')}}" method='post' id='register_frm'><br/>
		Tên đăng nhập(*): <input type='text' name='user_name' id='user_name' /><br/>
		Mật khẩu(*): <input type='password' name='password' id='password' /><br/>
		Nhập lại mật khẩu(*): <input type='password' name='re_password' id='re_password' /><br/>
		Email(*): <input type='email' name='email' id='email' /><br/>
		Nhập lại email(*): <input type='email' name='re_email' id='re_email'/><br/>
		Ngày sinh: <input type=>
		Điều khoản sử dụng:
		<br/>
		<textarea id="txt_rules"></textarea>
		<br/>
		<input type='checkbox' name='cb_rules' id='cb_rules'>Tôi đã đọc và đồng ý với điều khoản sử dụng</input><br/>
		<label id="lblError"></label>
		<input type='submit' value='Đăng ký' id='register' />
	</form>
	<script type="text/javascript">
		$("#register_frm").validate({
			errorLabelContainer: $("#lblError"),
			rules:{
				user_name:{
					required:true,
					minlength:7,
					remote:{
						url:"{{Asset('check/check-username')}}",
						type:"POST"
					}
				},
				password:{
					required:true,
					minlength:6
				},
				re_password:{
					required:true,
					minlength:6,
					equalTo:"#password"
				},
				email:{
					required:true,
					email:true,
					remote:{
						url:"{{Asset('check/check-email')}}",
						type:"POST"
					}
				},
				re_email:{
					required:true,
					email:true,
					equalTo:"#email"
				},
				cb_rules:{
					required: true
				}
			},
			messages:{
				user_name:{
				required:"* Tên đăng nhập còn thiếu<br>",
				minlength:"* Tên đăng nhập phải từ 7 kí tự trở lên<br>",
				remote: "* Tên đăng nhập đã tồn tại<br>"
				},
				password:{
					required:"* Password còn thiếu<br>",
					minlength:"* Password phải từ 6 kí tự trở lên<br>"
				},
				re_password:{
					required:"* Password nhập lại còn thiếu<br>",
					minlength:"* Password nhập lại phải từ 6 kí tự trở lên<br>",
					equalTo:"* Password chưa khớp<br>"
				},
				email:{
					required:"* Địa chỉ email còn thiếu<br>",
					email:"* Địa chỉ email không chính xác<br>",
					remote:" * Địa chỉ email đã tồn tại<br>"
				},
				re_email:{
					required:"* Địa chỉ email nhập lại còn thiếu<br>",
					email:"* Địa chỉ email nhập lại không chính xác<br>",
					equalTo:"* Địa chỉ email này không khớp<br>"
				},
				cb_rules:{
					required:"* Bạn phải đồng ý với điều khoản sử dụng để đăng ký<br>"
				}
			},
		});
	</script>
@endsection

