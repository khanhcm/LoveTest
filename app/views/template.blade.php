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
	<link rel="stylesheet" href="assets/css/jquery-ui-1.10.4.custom.css">
	<link rel="stylesheet" type="text/css" href="assets/buttons/buttons.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="assets/slide/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/slide/css/elastislide.css" />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
	<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui-1.10.4.custom.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui-1.10.4.custom.min.js"></script>
	<script type="text/javascript" src="assets/slide/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="assets/slide/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="assets/slide/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="assets/slide/js/gallery.js"></script>
	<noscript>
		<style>
			.es-carousel ul{
				display:block;
			}
		</style>
	</noscript>
	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
		<div class="rg-image-wrapper">
			
				<div class="rg-image-nav">
					<a href="#" class="rg-image-nav-prev">Previous Image</a>
					<a href="#" class="rg-image-nav-next">Next Image</a>
				</div>
			
			<div class="rg-image"></div>
			<div class="rg-loading"></div>
			<div class="rg-caption-wrapper">
				<div class="rg-caption" style="display:none;">
					<p></p>
				</div>
			</div>
		</div>
	</script>
	<script>
		$(function(){
			$('#birthday').datepicker({dateFormat: 'dd/mm/yy'});
		});
	</script>
	</head>
	<body class="page1" id="top">
		@include('templates.header')
		<section id="content">
			@yield('content')
		</section>
		@include('templates.footer')
	</body>
</html>