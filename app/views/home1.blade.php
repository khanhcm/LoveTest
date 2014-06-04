@extends('template')

@section('title')
LoveTest.vn
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Responsive Image Gallery</title>
		
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="assets/slide/css/style.css" />
		<link rel="stylesheet" type="text/css" href="assets/slide/css/elastislide.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
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

    </head>
    <body>
    	
    	<div class="container_12">
		<div class="welcome">
			<img src="assets/images/favicon.png">
			<p><font face="Calibri Light">Chào mừng các bạn tham gia <font face="Nirmala UI" color="#2f17e4"><font color="#f11c8a">LOVE</font>TEST<font color="#f11c8a">.vn</font></font><br>Hãy cùng chúng tôi xây dựng một cộng đồng <br>kết bạn lớn nhất từ trước đến nay</font></p>
	  	</div>	  
	  

				
	</div>
		<div class="container">
			<div class="header">
				<h2>Tham gia gần đây</h2>
				<span class="right_ab">
					
				</span>
				<div class="clr"></div>
			</div><!-- header -->
			
				
		</div><!-- container -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="assets/slide/js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="assets/slide/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="assets/slide/js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="assets/slide/js/gallery.js"></script>
		
    </body>
</html>
@endsection