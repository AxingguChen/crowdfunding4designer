<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>Update Profile</title>		
		<!-- Meta Description -->
        <meta name="description" content="profile page">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="------------**jackie chen**------------">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="<?php echo base_url();?>assets/js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">
	
		<!-- preloader -->
		<div id="preloader">
			<img src="<?php echo base_url();?>assets/img/preloader.gif" alt="Preloader">
		</div>
		<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="index.html">
						<h1 id="logo">
							<img src="<?php echo base_url();?>assets/img/logo.png" alt="Brandi">
						</h1>
					</a>
					
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">info</a></li>
                        <li><a href="#contact">contact</a></li>
                        <li><a href="#background">background</a></li>
                        <li><a href="#purchased">purchased</a></li>
                    </ul>
                    
                    <ul id="nav1" class="nav navbar-nav">
                        <li class="current"><a href="/index.php/users/user_profile">profile</a></li>
                        <li class="current"><a href="/index.php/verification/logout">Logout</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		

		
       
		
		
        <!--
        info start
        ==================================== -->		
		
		<section id="info" class="contact">
			<div class="container">
				<div class="row mb50">
				<?php foreach ($rows as $r){?>
				<?php echo form_open("users/update_profile"); ?>
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2> info</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Update your profile here。</p>
					</div>
					
					
					
					<!-- contact form -->
					<div class="text-center wow fadeInDown  text-center animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form" >

								<div class="input-group row firstname-lastname">
									
									
									<div class="input-text-field col-md-1">Firstname:</div>
									<div class="input-field col-md-4">
										<input type="text" name="firstname" id="firstname" value="<?php echo $r->firstname;?>" placeholder="@firstname" class="form-control">
									</div>
									<div class="input-text-field col-md-1">Lastname:</div>
									<div class="input-field col-md-4">
										<input type="text" name="lastname" id="lastname" value="<?php echo $r->lastname;?>" placeholder="@lastname" class="form-control">
									</div>
									
								</div>
								
								
								
								<div class="input-group row">
									<div class="col-md-1">About:</div>
									<div class="col-md-10">
									<textarea name="about" id="about"  placeholder="@about" class="form-control"><?php echo $r->about;?></textarea>
									</div>
								</div>
							

						</div>
					</div>
					<!-- end contact form -->
					
				</div>
			</div>

		</section>
		
        <!--
        End info
        ==================================== -->
		
		
		    <!--
        Contact
        ==================================== -->		
		
		<section id="contact" class="contact">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Contact</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Update your contact here。</p>
					</div>
					
					
					
					<!-- contact form -->
					<div class="text-center wow fadeInDown  text-center animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form" >
	
								<div class="input-group row address-country">
									
									<div class="input-text-field col-md-1">City:</div>
									<div class="input-field col-md-4">
										<input type="text" name="city" id="city" value="<?php echo $r->city;?>" placeholder="@city" class="form-control">
									</div>
									
									<div class="input-text-field col-md-1">Country:</div>
									<div class="input-field col-md-4">
										<input type="text" name="country" id="country" value="<?php echo $r->country;?>" placeholder="@country" class="form-control">
									</div>
									
								</div>
								
								<div class="input-group row firstname-lastname">
									
									
									<div class="input-text-field col-md-1">Zipcode:</div>
									<div class="input-field col-md-4">
										<input type="text" name="zipcode" id="zipcode" value="<?php echo $r->zipcode;?>" placeholder="@zipcode" class="form-control">
									</div>
									
									
									<div class="input-text-field col-md-1">Address:</div>
									<div class="input-field col-md-4">
										<input type="text" name="address" id="address" value="<?php echo $r->address;?>" placeholder="@address" class="form-control">
									</div>
								</div>
								
								<div class="input-group row firstname-lastname">
									
									
									<div class="input-text-field col-md-1">Bank Account:</div>
									<div class="input-field col-md-4">
										<input type="text" name="bank_account" id="bank_account" value="<?php echo $r->bank_account;?>" placeholder="@bank_account" class="form-control">
									</div>
									<div class="input-text-field col-md-1">Bank Holder:</div>
									<div class="input-field col-md-4">
										<input type="text" name="bank_holder" id="bank_holder" value="<?php echo $r->bank_holder;?>" placeholder="@bank_holder" class="form-control">
									</div>
									
								</div>
								
								
								<div class="input-group row firstname-lastname">
									
									
									<div class="input-text-field col-md-1">Paypal:</div>
									<div class="input-field col-md-4">
										<input type="text" name="paypal" id="paypal" value="<?php echo $r->paypal;?>" placeholder="@paypal" class="form-control">
									</div>
									<div class="input-text-field col-md-1">Cellphone:</div>
									<div class="input-field col-md-4">
										<input type="text" name="cellphone" id="cellphone" value="<?php echo $r->cellphone;?>" placeholder="@cellphone" class="form-control">
									</div>
									
								</div>

						</div>
					</div>
					<!-- end contact form -->
					
				</div>
			</div>

		</section>
		
        <!--
        End Contact
        ==================================== -->
     
        
       <!--
        info start
        ==================================== -->		
		
		<section id="background" class="contact">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2> background</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Update your background here。</p>
					</div>
					
					
					
					<!-- contact form -->
					<div class="text-center wow fadeInDown  text-center animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form" >
	
								<div class="input-group row firstname-lastname">
									
									
									<div class="input-text-field col-md-1">School:</div>
									<div class="input-field col-md-4">
										<input type="text" name="school" id="school" value="<?php echo $r->school;?>" placeholder="@school" class="form-control">
									</div>
									<div class="input-text-field col-md-1">Major:</div>
									<div class="input-field col-md-4">
										<input type="text" name="major" id="major" value="<?php echo $r->major;?>" placeholder="@major" class="form-control">
									</div>
									
								</div>
								
								
								
								<div class="input-group row">
									<div class="col-md-2">Certificate File:</div>
									<div class="col-md-9">
									upload button
									</div>
								</div>
			
								<div class="input-group">
									<input type="submit" id="form-submit" class="pull-right" value="update profile">
								</div>
						</div>
					</div>
					<!-- end contact form -->
					<?php echo form_close(); ?>
					<?php }	?>
				</div>
			</div>

		</section>
		
<!--
        Our Works
        ==================================== -->

	<section id="upload" class="works clearfix">
		<div class="container">
			<div class="row">

				<div class="sec-title text-center">
					<h2>Update File</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>

				<div class="sec-sub-title text-center">
					<p>We are recommened the most popular projects with different style
						as follow.</p>
				</div>

				<!-- file submit -->
				<?php $attributes = array('class' => 'technical_drawing', 'id' => 'technical_drawing_file');?>
				<?php echo form_open_multipart('upload/upload_certificate_file',$attributes);?>
				<input type="file" name="userfile" size="20" /> <br />
				<br /> <input type="submit" value="upload" />

				</form>
				<!-- end submit button -->

				<!-- end file submit  -->



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
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
							<img src="<?php echo base_url();?>assets/img/footer-logo.png" alt="">
							<p>eusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="footer-single">
							<h6>Subscribe </h6>
							<form action="#" class="subscribe">
								<input type="text" name="subscribe" id="subscribe">
								<input type="submit" value="&#8594;" id="subs">
							</form>
							<p>eusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
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
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
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
							Copyright © 2015 <a href="http://themefisher.com/">Themefisher</a>. All rights reserved. Designed & developed by <a href="http://themefisher.com/">Themefisher</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="<?php echo base_url();?>assets/js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="<?php echo base_url();?>assets/js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="<?php echo base_url();?>assets/js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="<?php echo base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="<?php echo base_url();?>assets/js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="<?php echo base_url();?>assets/js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
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
