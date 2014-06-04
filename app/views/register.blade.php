@extends('template')

@section('title')
Đăng ký
@endsection

@section('content')
	<form action="{{Asset('register')}}" method="post" id="register_frm"><br/>
		<h3>Đăng ký</h3>
		Họ và tên(*): <input type="text" name="full_name" id="full_name" placeholder="Fullname"class="form-control"/><br/>
		Tên đăng nhập(*): <input type="text" name="user_name" id="user_name" placeholder="Username" class="form-control"/><br/>
		Mật khẩu(*): <input type="password" name="password" id="password" placeholder="Password" class="form-control"/><br/>
		Nhập lại mật khẩu(*): <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-Password" class="form-control"/><br/>
		Email(*): <input type="email" name="email" id="email" placeholder="Email" class="form-control"/><br/>
		Nhập lại email(*): <input type="email" name="re_email" id="re_email" placeholder="Re-Email" class="form-control"/><br/>
		Ngày sinh(*): <input type="text" id="birthday" name="birthday" /><br/>
		Giới tính: <input type="radio" name="gender" value="male" id="gender" style="margin-left:30px">Nam</input>
		<input type="radio" name="gender" value="female" id="gender" style="margin-left:30px">Nữ</input><br/>
		Điều khoản sử dụng:
		<br/>
		<textarea id="txt_rules"></textarea>
		<br/>
		<input type="checkbox" name="cb_rules" id="cb_rules">Tôi đã đọc và đồng ý với điều khoản sử dụng</input><br/>
		<label id="lblError"></label>
		<button class="btn btn-lg btn-primary btn-block"/>Đăng ký</btn>
	</form>
	<script type="text/javascript">
		$("#register_frm").validate({
			errorLabelContainer:$("#lblError"),
			rules:{
				full_name:{
					required:true
				},
				user_name:{
					required:true,
					minlength:5,
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
				},
				gender:{
					required:true
				},
				birthday:{
					required:true
				}
			},
			messages:{
				full_name:{
					required:"* Bạn chưa nhập họ và tên<br>"
				},
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
				},
				gender:{
					required:"* Bạn phải lựa chọn giới tính<br>"
				},
				birthday:{
					required:"* Bạn chưa nhập ngày tháng năm sinh<br>"
				}
			}
		});
	</script>
@endsection

