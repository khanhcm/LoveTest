<header>
	<nav>
		<ul>
			@if(Session::has('login_success'))
				<a href="{{Asset('home')}}" ><li>Home</li></a>
				<a href="{{Asset('personal')}}" ><li>Personal</li></a>
				<a href="{{Asset('hobby')}}" ><li>Question</li></a>
				<a href="{{Asset('logout')}}" ><li>Logout</li></a>
			@else
				<a href="{{Asset('login')}}" ><li>Login</li></a>
				<a href="{{Asset('register')}}"><li>Register</li></a>
			@endif
		</ul>
	</nav>
</header>		
		
