<!DOCTYPE html>
<html>
	<head>
		<title>ZAHIRA</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap -->
		<?php wp_head() ; ?>
	</head>
	<body>
		<!-- menu canvas slide responsive -->
		<nav class="pushy pushy-left">
			<div class="wrap_canvas_avatar">
				<div class="canvas_avatar">
					<img src="images/280x280.jpg" alt="">
				</div>
				<div class="canvas_author">
					Zahira Salsabila
				</div>
			</div>
			<div class="text-menu-canvas">Menu</div>
			<div class="wrap-menu-canvas">
	            <ul class="menu-canvas">
	                <li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>	
					<li class="menu-item-has-children"><a href="#">Post Formats</a>
						<ul>
							<li><a href="#">Audio Post Format</a></li>
							<li><a href="#">Aside Post Format</a></li>
							<li><a href="#">Gallery Post Format</a></li>
							<li><a href="#">Video Post Format</a></li>
							<li><a href="#">Quote Post Format</a></li>
							<li><a href="#">Link Post Format</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="#">Feature</a>
						<ul>
							<li><a href="#">Left Sidebar</a></li>
							<li><a href="#">Right SIdebar</a></li>
							<li><a href="#">Full Width</a></li>
							<li><a href="#">Masonry</a></li>
						</ul>
					</li>
					<li><a href="#">Gallery</a></li>
	            </ul>
            </div>
        </nav>

        <!-- overlay pusy menu canvas -->
		<div class="site-overlay">
			<div class="overlay-close">
				<i class="fa fa-times"></i>
			</div>
		</div>

		<!-- container	pusy canvas slide -->
		<div id="container">
		<!-- ======================================== HEADER ======================================= -->
			<!-- Header -->
			<div class="wrap-logo">
				<div class="container">
					<div class="logo-top">
						<a href="#">
							<img src="images/logo.png" alt="">
						</a>
					</div>
					<div class="desc-logo-head">
						<a href="#">
							Wordpress Personal Blog
						</a>
					</div>
				</div>
			</div>

			<!-- menu -->
			<div class="wrap-mn-border">
				<div class="wrap-menu wrap-border-mn">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="ol-bt-menu2">
									<div class="row">
										<div class="col-xs-6">
											<div class="wrap-ol-bt2">
												<span class="ol-bt2 menu-btn"><i class="fa fa-bars"></i></span>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="wrap-ol-search">
												<span class="ol-search bt_search-res"><i class="fa fa-search"></i></span>
											</div>
										</div>
									</div>
									<div class="wrap-input-search wrap-input-search-res">
									<div class="container">
										<input class="input-search input-search-res" name="" placeholder="Search Here & Hit Enter...">
									</div>
								</div>
									
								</div>
								<nav class="ol-nav-menu2">
									<ul class="ol-menu2">
										<li><a href="#">Home</a></li>
										<li><a href="#">About</a></li>	
										<li class="menu-item-has-children"><a href="#">Post Formats</a>
											<ul>
												<li><a href="#">Audio Post Format</a></li>
												<li><a href="#">Aside Post Format</a></li>
												<li><a href="#">Gallery Post Format</a></li>
												<li><a href="#">Video Post Format</a></li>
												<li><a href="#">Quote Post Format</a></li>
												<li><a href="#">Link Post Format</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children"><a href="#">Feature</a>
											<ul>
												<li><a href="#">Left Sidebar</a></li>
												<li><a href="#">Right SIdebar</a></li>
												<li><a href="#">Full Width</a></li>
												<li><a href="#">Masonry</a></li>
											</ul>
										</li>
										<li><a href="#">Gallery</a></li>
										<li><i class="fa fa-search bt_search"></i></li>
									</ul>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>

			<!-- search -->
			<div class="wrap-input-search">
				<div class="container">
					<input class="input-search" name="" placeholder="Search Here & Hit Enter...">
				</div>
			</div>

			<!-- Featured Slider -->
			<div class="wrap-slider1">
				<!-- head title slider -->
				<div class="featured-title">
					<span class="ol-prev-slider-1"><i class="fa fa-angle-left"></i></span>
						Featured Post
					<span class="ol-next-slider-1"><i class="fa fa-angle-right"></i></span>
				</div>
				<div class="slider1">

					<div class="item">
						<div class="slide-image">
							<img src="images/450x500.jpg" alt="">
							<div class="overlay-date">
								<span class="meta-date">04</span> 
								<span class="meta-month">May 2015</span>
							</div>
							<div class="overlay-text-slider">								
							</div>
							<div class="text-slider">
								<div class="meta-post-by">Posted By <a href="#">Zahira</a></div>
								<a href="#">Traveling to Raja Ampat Indonesia With beautiful </a>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="slide-image">
							<img src="images/450x500-2.jpg" alt="">
							<div class="overlay-date">
								<span class="meta-date">23</span> 
								<span class="meta-month">May 2015</span>
							</div>
							<div class="overlay-text-slider">								
							</div>
							<div class="text-slider">
								<div class="meta-post-by">Posted By <a href="#">Zahira</a></div>
								<a href="#">Traveling to Raja Ampat Indonesia Beach </a>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="slide-image">
							<img src="images/450x500-3.jpg" alt="">
							<div class="overlay-date">
								<span class="meta-date">01</span> 
								<span class="meta-month">May 2015</span>
							</div>
							<div class="overlay-text-slider">								
							</div>
							<div class="text-slider">
								<div class="meta-post-by">Posted By <a href="#">Zahira</a></div>
								<a href="#">Traveling to Raja Ampat Indonesia With beautiful beach & Scenery </a>
							</div>
						</div>
					</div>		
				</div>
			</div>

			<!-- Featured Static -->
			<div class="wrap-featured-post">
				<div class="container">
					<div class="featured-post-head">
						Other Post
						<hr class="line-head">
					</div>
					<div class="row">
						<!-- featured 1 -->
						<div class="col-md-4">
							<div class="f-post-1">
								<div class="f-post-1-img">
									<img src="http://placehold.it/375x375" alt="">
									<div class="overlay-f-post-1">
										<div class="overlay-f-post-1-title">
											<div class="f-post-1-title">
												<a href="#">Family Adventure Holidays in Moliets - Ideal for Surf Lovers</a>
											</div>
											<div class="f-post-1-cat">
												On <a href="#">Fashion</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- featured 2 -->
						<div class="col-md-4">
							<div class="f-post-1">
								<div class="f-post-1-img">
									<img src="http://placehold.it/375x375" alt="">
									<div class="overlay-f-post-1">
										<div class="overlay-f-post-1-title">
											<div class="f-post-1-title">
												<a href="#">Family Adventure Holidays in Moliets - Ideal for Surf Lovers</a>
											</div>
											<div class="f-post-1-cat">
												On <a href="#">Fashion</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- featured 3 -->
						<div class="col-md-4">
							<div class="f-post-1">
								<div class="f-post-1-img">
									<img src="http://placehold.it/375x375" alt="">
									<div class="overlay-f-post-1">
										<div class="overlay-f-post-1-title">
											<div class="f-post-1-title">
												<a href="#">Family Adventure Holidays in Moliets - Ideal for Surf Lovers</a>
											</div>
											<div class="f-post-1-cat">
												On <a href="#">Fashion</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- text header -->
			<div class="text-header">
				<div class="intro-header">Hi there, i'm <b>Zahira</b> welcome to my blog, i'm <b>designer</b> & <b>freelancer</b></div>
				<div class="text-header-line"></div>
			</div>