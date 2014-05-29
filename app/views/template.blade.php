<!DOCTYPE html>
<html lang="en">
	<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" type="image/png" href="assets/images/favicon.png" />
	<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />
	<link rel="stylesheet" href="assets/css/form.css">
	<link rel="stylesheet" href="assets/css/thumbs.css">
	<link rel="stylesheet" href="assets/css/slider.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/jquery.validate.js"></script>
	</head>
	<body class="page1" id="top">
		@include('templates.header')
		<section id="content">
			@yield('content')
		</section>
		@include('templates.footer')
	</body>
</html>