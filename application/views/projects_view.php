<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
<!-- meta charec set -->
<meta charset="utf-8">
<!-- Always force latest IE rendering engine or request Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Page Title -->
<title>project</title>
<!-- Meta Description -->
<meta name="description" content="project page">
<meta name="keywords"
	content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
<meta name="author" content="------------**jackie chen**------------">
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Google Font -->

<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'
	rel='stylesheet' type='text/css'>

<!-- CSS
		================================================== -->
<!-- Fontawesome Icon font -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/font-awesome.min.css">
<!-- Twitter Bootstrap css -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<!-- jquery.fancybox  -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/jquery.fancybox.css">
<!-- animate -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/animate.css">
<!-- Main Stylesheet -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/main.css">
<!-- media-queries -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/media-queries.css">
<!-- project pic css -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/project.css">


<!-- ajax -->
<script>
 
<!-- load -->
$(document).ready(function(){
    $("#search_result").load('<?php echo base_url();?>'+'index.php/projects/search/0/0');


    $('.search_styles').click(function(){ 
        $("#search_result").load('<?php echo base_url();?>'+'index.php/projects/search/3/'+$(this).attr("index"));    	
    	list = document.getElementsByClassName("search_styles");
    	for (key in list){
        	if (typeof list[key].setAttribute === 'undefined' )
        	{break;}       	
			list[key].setAttribute('class','search_styles');
        };
        $(this).attr('class','search_styles active');
		
    });
    
});
</script>
</head>

<body id="body">

	<!-- preloader -->
	<div id="preloader">
		<img src="<?php echo base_url();?>assets/img/preloader.gif"
			alt="Preloader">
	</div>
	<!-- end preloader -->

	<!-- 
        Fixed Navigation
        ==================================== -->
	<header id="navigation" class="navbar-fixed-top navbar">
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <i
						class="fa fa-bars fa-2x"></i>
				</button>
				<!-- /responsive nav button -->

				<!-- logo -->
				<a class="navbar-brand" href="index.html">
					<h1 id="logo">
						<img src="<?php echo base_url();?>assets/img/logo.png"
							alt="Brandi">
					</h1>
				</a>

				<!-- /logo -->
			</div>

			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				<ul id="nav" class="nav navbar-nav">
					<li class="current"><a href="#body">Home</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>

				<ul id="nav1" class="nav navbar-nav">
					<li><a href="<?php echo base_url();?>index.php/users/user_profile">profile</a></li>
					<li><a href="<?php echo base_url();?>index.php/projects/create">Create</a></li>
					<li><a href="<?php echo base_url();?>index.php/verification/logout">Logout</a></li>
				</ul>
			</nav>
			<!-- /main nav -->

		</div>
	</header>
	<!--
        End Fixed Navigation
        ==================================== -->






	<!--
        Our Works
        ==================================== -->

	<section id="works" class="works clearfix">
		<div class="container">
			<div class="row">

				<div class="sec-title text-center">
					<h2>All Projects</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>

				<div class="sec-sub-title text-center">

					<p>We are recommened the most popular projects with different style
						as follow.</p>
				</div>

				<div class="work-filter1 wow fadeInUp animated"
					data-wow-duration="500ms">

					<ul class="text-center">
						<li><a href="#" class="active">All</a></li>
						<li><a href="#" class="">Women</a></li>
						<li><a href="#" class="">Men</a></li>


					</ul>
				</div>

				<div class="work-filter wow fadeInUp animated"
					data-wow-duration="500ms">

					<ul class="text-center">
						<li><a href="#" id="search_all"  class="search_styles active" index="0">All</a></li>
						<li><a href="#" id="search_work" class="search_styles" index="1">work</a></li>
						<li><a href="#" id="search_nightlife" class="search_styles" index="2">nightlife</a></li>
						<li><a href="#" id="search_weekend" class="search_styles" index="3">weekend</a></li>
						<li><a href="#" id="search_street" class="search_styles" index="4">street</a></li>
						<li><a href="#" id="search_travel" class="search_styles" index="5">travel</a></li>
						<li><a href="#" id="search_sport" class="search_styles" index="6">sport</a></li>

					</ul>
				</div>

			</div>

		</div>


		<div class="project-wrapper">
			<div id="search_result">
			</div>
		</div>


	</section>

	<!--
        End Our Works
        ==================================== -->





	<!--
        End Contact Us
        ==================================== -->


	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated"
					data-wow-duration="500ms">
					<div class="footer-single">
						<img src="<?php echo base_url();?>assets/img/footer-logo.png"
							alt="">
						<p>eusmod tempor incididunt ut labore et dolore magna aliqua. Ut
							enim ad minim veniam, quis nostrud exercitation ullamco laboris
							nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated"
					data-wow-duration="500ms" data-wow-delay="300ms">
					<div class="footer-single">
						<h6>Subscribe</h6>
						<form action="#" class="subscribe">
							<input type="text" name="subscribe" id="subscribe"> <input
								type="submit" value="&#8594;" id="subs">
						</form>
						<p>eusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated"
					data-wow-duration="500ms" data-wow-delay="600ms">
					<div class="footer-single">
						<h6>Explore</h6>
						<ul>
							<li><a href="#">Inside Us</a></li>
							<li><a href="#">Flickr</a></li>
							<li><a href="#">Google</a></li>
							<li><a href="#">Forum</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated"
					data-wow-duration="500ms" data-wow-delay="900ms">
					<div class="footer-single">
						<h6>Support</h6>
						<ul>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Market Blog</a></li>
							<li><a href="#">Help Center</a></li>
							<li><a href="#">Pressroom</a></li>
						</ul>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="copyright text-center">
						Copyright @ 2015 <a href="http://themefisher.com/">Themefisher</a>.
						All rights reserved. Designed & developed by <a
							href="http://themefisher.com/">Themefisher</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<a href="javascript:void(0);" id="back-top"><i
		class="fa fa-angle-up fa-3x"></i></a>

	<!-- Essential jQuery Plugins
		================================================== -->
	<!-- Main jQuery -->
	<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
	<!-- Single Page Nav -->
	<script
		src="<?php echo base_url();?>assets/js/jquery.singlePageNav.min.js"></script>
	<!-- Twitter Bootstrap -->
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<!-- jquery.fancybox.pack -->
	<script src="<?php echo base_url();?>assets/js/jquery.fancybox.pack.js"></script>
	<!-- jquery.mixitup.min -->
	<script src="<?php echo base_url();?>assets/js/jquery.mixitup.min.js"></script>
	<!-- jquery.parallax -->
	<script
		src="<?php echo base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
	<!-- jquery.countTo -->
	<script src="<?php echo base_url();?>assets/js/jquery-countTo.js"></script>
	<!-- jquery.appear -->
	<script src="<?php echo base_url();?>assets/js/jquery.appear.js"></script>
	<!-- Contact form validation -->
	<script
		src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
	<script
		src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
	<!-- Google Map -->
	<script type="text/javascript"
		src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<!-- jquery easing -->
	<script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
	<!-- jquery easing -->
	<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
	<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script>
	<!-- Custom Functions -->
	<script src="<?php echo base_url();?>assets/js/custom.js"></script>

	<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
</body>
</html>
