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
<title>Update Project</title>
<!-- Meta Description -->
<meta name="description" content="home page">
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

<!-- Modernizer Script for old Browsers -->
<script src="<?php echo base_url();?>assets/js/modernizr-2.6.2.min.js"></script>

<!-- ajax for  -->
<script type="text/javascript">
var xmlhttp;
function loadXMLDoc(url)
{
xmlhttp=null;
if (window.XMLHttpRequest)
  {// code for IE7, Firefox, Opera, etc.
  xmlhttp=new XMLHttpRequest();
  }
else if (window.ActiveXObject)
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
if (xmlhttp!=null)
  {
  xmlhttp.onreadystatechange=state_Change;
  xmlhttp.open("GET",url,true);
  xmlhttp.send(null);
  }
else
  {
  alert("Your browser does not support XMLHTTP.");
  }
}

function state_Change()
{
if (xmlhttp.readyState==4)
  {// 4 = "loaded"
  if (xmlhttp.status==200)
    {// 200 = "OK"

    document.getElementById('type_id').innerHTML=xmlhttp.responseText;
    }
  else
    {
    alert("Problem retrieving XML data:" + xmlhttp.statusText);
    }
  }
}

var xmlhttp1;
function loadXMLDoc1(url)
{
xmlhttp1=null;
if (window.XMLHttpRequest)
  {// code for IE7, Firefox, Opera, etc.
  xmlhttp1=new XMLHttpRequest();
  }
else if (window.ActiveXObject)
  {// code for IE6, IE5
  xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
  }
if (xmlhttp1!=null)
  {
  xmlhttp1.onreadystatechange=state_Change1;
  xmlhttp1.open("GET",url,true);
  xmlhttp1.send(null);
  }
else
  {
  alert("Your browser does not support XMLHTTP.");
  }
}

function state_Change1()
{
if (xmlhttp1.readyState==4)
  {// 4 = "loaded"
  if (xmlhttp1.status==200)
    {// 200 = "OK"

    document.getElementById('style_id').innerHTML=xmlhttp1.responseText;
    }
  else
    {
    alert("Problem retrieving XML data:" + xmlhttp1.statusText);
    }
  }
}
</script>

</head>

<body id="body">
	<!-- begin here -->


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

			<?php echo validation_errors(); ?>
			<?php foreach ($rows as $r){?>
			<?php echo form_open("projects/modify/$r->projects_id"); ?>
			
			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				<ul id="nav" class="nav navbar-nav">
					<li class="current"><a href="#comment">Home</a></li>
					<li><a href="#detailed">Details</a></li>
					<li><a href="#upload">Upload</a></li>

				</ul>

				<ul id="nav1" class="nav navbar-nav">
					<li><a href="<?php echo base_url();?>index.php/users/user_profile">profile</a></li>
					<li><a href="<?php echo base_url();?>index.php/projects/create">Create</a></li>
					<li><a href="<?php echo base_url();?>index.php/projects/project/<?php echo $r->projects_id; ?>">project</a></li>
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
        Contact Us
        ==================================== -->

	<section id="comment" class="contact">
		<div class="container">
			<div class="row mb50">

				<div class="sec-title text-center mb50 wow fadeInDown animated"
					data-wow-duration="500ms">
					<h2>Let’s Discuss</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>

				<div class="sec-sub-title text-center wow rubberBand animated"
					data-wow-duration="1000ms">
					<p>Welcome for any questions and suggestions</p>
				</div>



				<!-- contact form -->
				<div class="text-center wow fadeInDown  text-center animated"
					data-wow-duration="500ms" data-wow-delay="300ms">
					<div class="contact-form">
						<h3>update</h3>


						<div class="input-group row title-email">


							<div class="input-text-field col-md-1">Title:</div>
							<div class="input-field col-md-5">
								<input type="text" name="title" id="title"
									value="<?php echo $r->title; ?>" placeholder="title"
									class="form-control">
							</div>
							<div class="input-text-field col-md-1">Email:</div>
							<div class="input-field col-md-5">
								<input type="text" name="contact_email" id="contact_email"
									value="<?php echo $r->contact_email; ?>" placeholder="email"
									class="form-control">
							</div>

						</div>

						<div class="input-group row type-sex">

							<div class="input-text-field col-md-1">Type:</div>
							<div class="input-field col-md-5">
								<script type="text/javascript">
									loadXMLDoc("<?php echo base_url();?>"+ "index.php/clothes_type/index/" + <?php echo $r->projects_clothes_type_id ?>);
									loadXMLDoc1("<?php echo base_url();?>"+ "index.php/clothes_style/index/" + <?php echo $r->projects_clothes_style_id ?>);
								</script>
								<div id="type_id"></div>
							</div>
							<div class="input-text-field col-md-1">Style:</div>
							<div class="input-field col-md-5">
								<script type="text/javascript">
									loadXMLDoc1("<?php echo base_url();?>"+ "index.php/clothes_style");
								</script>
								<div id="style_id"></div>
							</div>
						</div>

						<div class="input-group row title-email">


							<div class="input-text-field col-md-1">Sex:</div>
							<div class="input-field col-md-5">
								<input type="text" name="sex" id="sex"
									value="<?php echo $r->sex; ?>" placeholder="sex"
									class="form-control">
							</div>

						</div>

						<div class="input-group row">
							<div class="col-md-1">Description:</div>
							<div class="col-md-10">
								<textarea name="description" id="description"
									placeholder="Description" class="form-control"><?php echo $r->description; ?></textarea>
							</div>
						</div>



					</div>
				</div>
				<!-- end contact form -->

			</div>
		</div>

	</section>

	<!--
        End Contact Us
        ==================================== -->




	<!--
        Features
        ==================================== -->

	<section id="detailed" class="features">
		<div class="container">
			<div class="row mb50">

				<div class="sec-title text-center mb50 wow bounceInDown animated"
					data-wow-duration="500ms">
					<h2>More Detailed</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>

				<!-- service item -->
				<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-recycle fa-2x"></i>
						</div>

						<div class="service-desc">
							<h3>Made Of</h3>
							<p>
								<input type="text" name="madeof" id="madeof"
									value="<?php echo $r->madeof; ?>" placeholder="madeof"
									class="form-control">
							</p>
						</div>
					</div>
				</div>
				<!-- end service item -->

				<!-- service item -->
				<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms"
					data-wow-delay="500ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-pencil fa-2x"></i>
						</div>

						<div class="service-desc">
							<h3>How To Wash</h3>
							<p>
								<input type="text" name="howtowash" id="howtowash"
									placeholder="howtowash" value="<?php echo $r->howtowash; ?>"
									class="form-control">
							</p>
						</div>
					</div>
				</div>
				<!-- end service item -->

				<!-- service item -->
				<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"
					data-wow-delay="900ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-bullhorn fa-2x"></i>
						</div>

						<div class="service-desc">
							<h3>Why Me</h3>
							<input type="text" name="whyme" id="whyme" placeholder="whyme"
								value="<?php echo $r->whyme; ?>" class="form-control">
						</div>
					</div>
				</div>
				<!-- end service item -->

			</div>
			<!-- submit button -->
			<div class="text-center wow fadeInDown  text-center animated"
				data-wow-duration="500ms" data-wow-delay="300ms">
				<div class="contact-form">
					<div class="input-group">
						<input type="submit" id="form-submit" class="pull-right"
							value="Update project">
					</div>
				</div>
			</div>
			<!-- submit button -->
		</div>
			<?php echo form_close(); ?>
			<div class="sec-sub-title text-center wow rubberBand animated"
			data-wow-duration="1000ms">
			<p><?php if(isset($exc_flag) && $exc_flag == 1) echo "Update Succeed";?></p>
		</div>
	</section>

	<!--
        End Features
        ==================================== -->


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
				
				<?php if(isset($error)) echo $error;?>
				<!-- file submit -->
				<?php $attributes = array('class' => 'technical_drawing', 'id' => 'technical_drawing');?>
				<?php echo form_open_multipart('upload/upload_technical_drawing/'.$r->projects_id,$attributes);?>
				<input type="file" name="technical_drawing" size="20" /> <br />
				<br /> <input type="submit" value="upload" />
				<?php if(isset($upload_flag) && $upload_flag == 1) echo "Update Succeed";?>
				</form>
				<!-- end submit button -->

				<!-- end file submit  -->



			</div>
		</div>





	</section>

	<!--
        End Our Works
        ==================================== -->
	<!-- end of foreach -->
		<?php } ?>

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

