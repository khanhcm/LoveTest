@extends('template')

@section('title')
LoveTest.vn
@endsection

@section('content')

    	
		<div class="container">
			<div class="header">
				<h2>Có thể bạn biết những người này</h2>
				<span class="right_ab">
					
				</span>
				<div class="clr"></div>
			</div><!-- header -->
			
			<div class="content">
				
				<div id="rg-gallery" class="rg-gallery">
					
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">	
							<div class="rg-image-wrapper"> 	
								<?php 
									
									$users=DB::table("users")->get();
								?>	
								<ul>									
           						 @foreach ($users as $user)                					 	
               					 		<li><img data-large="uploads/images/{{$user->AVATAR}}" data-description="Tên đầy đủ {{$user->FULLNAME}}, giới tính {{$user->GENDER}}, nhà ở {{$user->USERADDRESS}}, hiện đang là {{$user->USERJOB}}, tỉ lệ trùng khớp:"/></a></li>
           						@endforeach									
								</ul>
							</div>
							
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					<!-- rg-thumbs -->
				</div><!-- rg-gallery -->
				
			</div><!-- content -->
		</div><!-- container -->
@endsection