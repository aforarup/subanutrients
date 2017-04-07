<!DOCTYPE html>
<!--[if IE 8]> 	<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>{{$title}} | Suba Nutrients</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
	<!-- Smallipop CSS - Tooltips -->
	<link rel="stylesheet" href="{!! url('/plugins/smallipop/css/contrib/animate.min.css') !!}" type="text/css" media="all" title="Screen" />
	<link rel="stylesheet" href="{!! url('/plugins/smallipop/css/jquery.smallipop.css') !!}" type="text/css" media="all" title="Screen" />

	<link rel="dns-prefetch" href="https://maps.googleapis.com/" />
	<!-- Default CSS -->
	<link rel="stylesheet" href="{!! url('/css/normalize.css') !!}" />
	<link rel="stylesheet" href="{!! url('/css/foundation.css') !!}" />
	<link rel="stylesheet" href="{!! url('/css/fgx-foundation.css') !!}" />
	<!--[if IE 8]><link rel="stylesheet" href="{!! url('/css/ie8-grid-foundation-4.css') !!}" /><![endif]-->

	<!-- Font Awesome - Retina Icons -->
	<link rel="stylesheet" href="{!! url('/plugins/fontawesome/css/font-awesome.min.css') !!}">
	<link rel="stylesheet" href="{!! url('/css/nivo-slider.css') !!}" />
	<link rel="stylesheet" href="{!! url('/css/themes/default/default.css') !!}" />
	<link rel="stylesheet" href="{!! url('/css/datepicker/metallic.css') !!}" />
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{!! url('/css/style.css') !!}" />

	<!-- Main JS Files -->
	<script src="{!! url('/js/vendor/jquery.js') !!}"></script>
	<script src="{!! url('/js/vendor/custom.modernizr.js') !!}"></script>
</head>
<body @yield('body-on-load')>

<!-- Begin Main Wrapper -->
<div class="main-wrapper">
	<!-- Main Navigation -->  
	<header class="row main-navigation">
		<div class="large-3 columns">	
			<a href="{!! url('/') !!}" id="logo"><img src="{!! url('/images/logo-2-01.svg') !!}" alt="Suba Logo"/></a>
		</div>
		<div class="large-9 columns">			
			<nav class="top-bar">
				<ul class="title-area">
				  <!-- Title Area -->
				  <li class="name"></li>
				  <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				  <li class="toggle-topbar menu-icon"><a href="#"><span>Main Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
					<!-- Left Nav Section -->
					  <ul class="right">
						<li><a href="{!! url('/#') !!}" @yield('home')>Home</a>
						</li>
						<li class="has-dropdown"><a href="{!! url('/products/#') !!}"  @yield('category')>Products</a>
						  <ul class="dropdown">
                              @foreach ($categories as $category)
                                  <li><a href="{!! url('/products/'.$category->slug) !!}">{{$category->name}}</a></li>
                              @endforeach
						  </ul>
						</li>
						
						{{--<li class="has-dropdown"><a href="#">Shortcodes</a>--}}
						  {{--<ul class="dropdown">--}}
                          	{{--<li><a href="shortcodes.html">Main elements</a></li>--}}
							{{--<li><a href="alert-boxes.html">Alert Boxes</a></li>--}}
							{{--<li><a href="panels.html">Panels</a></li>--}}
							{{--<li><a href="pricing-tables.html">Pricing Tables</a></li>--}}
							{{--<li><a href="bars.html">Progress Bars</a></li>--}}
							{{--<li><a href="tables.html">Tables</a></li>--}}
							{{--<li><a href="thumbnails.html">Thumbnails</a></li>--}}
							{{--<li><a href="flex-video.html">Flex Video</a></li>--}}
							{{----}}
						  {{--</ul>--}}
						{{--</li>                    --}}
						{{--<li class="has-dropdown"><a href="#">Add-ons</a>--}}
						  {{--<ul class="dropdown">--}}
							{{--<li><a href="icons.html">Retina Icons - Font Awesome</a></li>--}}
						  {{--</ul>--}}
						{{--</li>--}}
						{{--<li class="has-dropdown"><a href="#">Portfolio</a>                                       --}}
						  {{--<ul class="dropdown"> --}}
                          		{{--<li><a href="portfolio.html">Portfolio 4 Columns</a> </li>                       --}}
								{{--<li><a href="portfolio2.html">Portfolio 3 Columns</a></li>--}}
								{{--<li><a href="portfolio-single.html">Single item</a></li>--}}
							{{--</ul>--}}
						{{--</li>--}}
						{{--<li class="has-dropdown"><a href="#">Blog</a>                    --}}
						  {{--<ul class="dropdown">--}}
							{{--<li><a href="blog.html">1 Column, Default</a></li>--}}
							{{--<li><a href="blogalt.html">1 Column, Alternative</a></li>--}}
							{{--<li><a href="blog-2column.html">2 Columns</a></li>--}}
							{{--<li><a href="blog-3column-no-sidebar.html">3 Columns, No sidebar</a></li>--}}
							{{--<li><a href="blog-4column-no-sidebar.html">4 Columns, No sidebar</a></li>--}}
							{{--<li><a href="blog-single.html">Blog Inner</a></li>--}}
						  {{--</ul>--}}
						{{--</li>--}}
                          <li><a href="{!! url('/about-us') !!}" @yield('about')>About Us</a></li>
                          <li><a href="{!! url('/core-strength') !!}" @yield('strength')>Core Strength</a></li>
                          <li><a href="{!! url('/news') !!}" @yield('news')>News</a></li>
                          <li><a href="{!! url('/contact-us') !!}" @yield('contact')>Contact</a></li>
					  </ul>
					  <!-- End Left Nav Section -->					 
				</section>
			</nav>
		</div>
	</header>
	<!-- Start Main Slider -->
</div>

@yield('content')

<footer class="footer_wrapper">
	<div class="row footer-part">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-3 columns">
					<h4 class="footer-title">About Us</h4>
					<div class="divdott"></div>
					<img class="botlogo" src="{!! url('/images/logo-gs-2-01.svg') !!}" alt="" />
					<div class="footer_part_content">
						<p>Multi National Animal Health organization, engaged in innovation, research, manufacturing & marketing of nutraceuticals and animal health products.</p>
					</div>
				</div>
				<div class="large-3 columns">
					<h4 class="footer-title">Latest Posts</h4>
					<div class="divdott"></div>
					<div class="footer_part_content">
						<ul class="latest-posts">
							<li>
								Update: WordPress Theme Submission Requirements
								<div class="divline"><span></span></div>
							</li>
							<li>
								Envato's Most Wanted - $5,000 Reward for the First 15 Hosting Templates
								<div class="divline"><span></span></div>
							</li>
							<li>
								Does a well designed thumbnail increase your sales?
								<div class="divline"><span></span></div>
							</li>
						</ul>
					</div>
				</div>
				

				<div class="large-3 columns">
					<h4 class="footer-title">Contact info</h4>
					<div class="divdott"></div>
					<div class="footer_part_content">
						<p>We operate globally from 3 locations - Atlanta (United States of America), Ajman (United Arab Emirates) and Mumbai (India).</p>
						<ul class="about-info">
							<li><i class="fa fa-envelope"></i>&nbsp;<a href="mailto:info@subanutrients.com">info@subanutrients.com</a></li>
						</ul>

					</div>
				</div>
					
				<div class="large-3 columns"> 
					<h4 class="footer-title">Quick Contact</h4>
					<div class="divdott"></div>
					<form method="POST" action="#" id="footer-contact-form">
						<div class="footer_part_content">
							<div class="row">
								<div class="large-6 columns">
									<input type="text" placeholder="Name"  name="name" />
								</div>
								<div class="large-6 columns">
									<input type="text" placeholder="E-mail" name="email" />
								</div>
								<div class="large-12 columns">
									<textarea cols="10" rows="15"  name="message" placeholder="Message"></textarea>
								</div>
								<div class="large-12 columns text-right">
									<input type="submit" class="button" value="Send" name="send" />
								</div>	
							</div>
						</div>
					</form>
				</div> 
			</div>
		</div>
	</div>
	
	<div class="privacy footer_bottom">
		<div class="footer-part">
			<div class="row">
				<div class="large-10 columns copyright">
					<p>&copy; 2017 Suba Nutrients, All Rights Reserved. Made with ❤︎</p>
				</div>
				<div class="large-2 columns">
					<div id="back-to-top"><a href="#top"></a></div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="{!! url('/js/foundation.min.js') !!}"></script>
<script src="{!! url('js/foundation/foundation.js') !!}"></script>
<script src="{!! url('js/foundation/foundation.topbar.js') !!}"></script>

<!-- Scripts Initialize -->
<script type="text/javascript" src="{!! url('/js/app-head-calls.js') !!}"></script>

<script>
    $(document).foundation();
</script>

<!-- Smallipop JS - Tooltips -->
<script type="text/javascript" src="{!! url('/plugins/smallipop/lib/contrib/prettify.js') !!}"></script>
<script type="text/javascript" src="{!! url('/plugins/smallipop/lib/jquery.smallipop.js') !!}"></script>

@yield('footer')
<!-- Initialize JS Plugins -->
<script src="{!! url('/js/app-bottom-calls.js') !!}"></script>

<!-- End Main Wrapper -->
</body>
</html>