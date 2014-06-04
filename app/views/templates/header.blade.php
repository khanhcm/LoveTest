<header>
	<table>
		<tr>
			<td width="75%">
				<div class="logo_block">
					<div class="grid_12">
						<a href="#">
							<img src="images/logo.png" alt="LoveTest.vn">
						</a>
					</div>
					<div class="slogan">
						<br>
						<p>&nbsp</p><p>&nbsp</p>
					  	<p style="margin-top:-10px">Find your love with a simple test!</p>
					</div>
				</div>
			</td> 
			<td>
				<div class="menu_block">
					<nav>
						@if(Session::has('login_success'))
							<ul class="sf-menu" style="left:-300px; top:-20px">
								<li><a href="{{Asset('home1')}}">Trang chủ</a></li>
								<li><a href="{{Asset('personal')}}">Cá nhân</a></li>
								<li style="position:relative; left:280px; top: -36px"><a href="{{Asset('hobby')}}">Câu hỏi</a></li>
								<li style="position:relative; left:280px; top: -36px"><a href="{{Asset('logout')}}">Đăng xuất</a></li>
							</ul>
						@else
							<ul class="sf-menu">
								<li><a href="{{Asset('login')}}">Đăng nhập</a></li>
								<li><a href="{{Asset('register')}}">Đăng ký</a></li>
							</ul>
						@endif
						
					</nav>
				</div>
			</td>
		</tr>
	</table>
</header>		
		
