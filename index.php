<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Events in Malaysia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site">www.evento.com.my</p>
						<p class="num">Call: +6018 963 7923</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="https://www.instagram.com/malaysiaevent/"><i class="icon-instagram"></i></a></li>
							
							<!--<li><a href="#"><i class="icon-github"></i></a></li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo "> <a href="index.php"> <img src="images/logo.png" style="width: 150px; height: 50px;"></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="blog.html">Browse event</a></li>
							<?php
							if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { 
							 echo '<li>Welcome back, ' . $_SESSION['username'] . '</li>
							  <li class="btn-cta"><a href="event_details.php"><span>Create an event</span></a></li>
							 <li class="btn-cta"><a href="logout.php"><span>Logout</span></a></li>';
							} else{
								echo'
							<li class="btn-cta"><a href="index3.php"><span>Login</span></a></li>
							<li class="btn-cta"><a href="sign-up3.php"><span>Create an event</span></a></li>'; 
							}
							?>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	
	<div id="fh5co-register" style="background-image: url(images/malaysia1.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Register now and get 50% discount for any event</h2>
					<h3>By Dias Aidarkhan</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<h3><strong>Limited Offer, Hurry Up!</strong></h3>
					<p><a href="sign-up3.php" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
				</div>
			</div>
		</div>
	</div>

	

	<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Special Promotions</h2>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-ticket"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Buy 1 ticket and get 1 free</a></h3>
							<p>A person who buy tickets through our website will get 1 more ticket for free.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-bubble3"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Prize for best story in Malaysia</a></h3>
							<p>A person who publish a story about his most exciting adventure in Malaysia will get a special prize.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-pencil"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Organizing an Event</a></h3>
							<p>A person who organize own event will get 2 tickets to Langkawi island.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<div id="fh5co-gallery" class="fh5co-bg-section">
		<div class="row text-center">
			<h2><span>Instagram Gallery</span></h2>
		</div>
		<div class="row">
			<div class="col-md-3 col-padded">
				<a href="https://www.instagram.com/malaysiaevent/" class="gallery" style="background-image: url(images/music.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="https://www.instagram.com/malaysiaevent/" class="gallery" style="background-image: url(images/project-2.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="https://www.instagram.com/malaysiaevent/" class="gallery" style="background-image: url(images/project-3.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="https://www.instagram.com/malaysiaevent/" class="gallery" style="background-image: url(images/fitness.jpg);"></a>
			</div>
		</div>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Browse an event by categories</h2>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/music.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Music</a></h3>
							<p>Many festivals are annual, or repeat at some other interval. Some, including many rock festivals, are held only once. Some festivals are organized as for-profit concerts and others are benefits for a specific cause. </p>
							<span><a href="blog.html" class="btn btn-primary btn-sm btn-course">Learn more</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Food & Drink </a></h3>
							<p>A food festival is a festival, usually held annually, that uses food. These festivals have always been a means of uniting communities through celebrations of harvests and giving thanks for a plentiful growing season. </p>
							<span><a href="blog.html" class="btn btn-primary btn-sm btn-course">Learn more</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-3.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Art</a></h3>
							<p>An art exhibition is traditionally the space in which art objectsmeet an audience. The exhibit is universally understood to be for some temporary period unless, as is rarely true, it is stated to be a "permanent exhibition"</p>
							<span><a href="blog.html" class="btn btn-primary btn-sm btn-course">Learn more</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/fitness.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Sport</a></h3>
							<p>A multi-sport event is an organized sports event, often held over multiple days, featuring competition in many different sports between organized teams of athletes from nation states.</p>
							<span><a href="blog.html" class="btn btn-primary btn-sm btn-course">Learn more</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Recent events for you in Malaysia</h2>
					
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="blog.html" class="blog-img-holder" style="background-image: url(images/project-2.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">BFM ENTERPRISE TAKEAWAY</a></h3>
							<span class="posted_on">March. 15th</span>
							<!--<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>-->
							<p>BFM is Malaysia's only independent radio station, focused on business news and current affairs. BFM's purpose is to build a better Malaysia by championing rational, evidence-based discourse as a key element of good policy decisions. BFM can be heard on frequency 89.9 MHz in Wilayah Persekutuan, Selangor, and parts of Negeri Sembilan and Melaka.</p>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="blog.html" class="blog-img-holder" style="background-image: url(images/fitness.jpg);"></a>
						<div class="blog-text">
							<h3><a href="blog.html">Great Eastern Viper Challenge</a></h3>
							<span class="posted_on">March. 27th</span>
							<!--<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>-->
							<p>Set to take place at an entirely new location, the preeminent Great Eastern Viper Challenge will rock Cyberjaya on Saturday, 2nd of Dec 2017 as thousands of fitness enthusiasts end the Viper Challenge 2017 series by tackling its 20km route with 20 uniquely awesome obstacles.</p>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="blog.html" class="blog-img-holder" style="background-image: url(images/project-3.jpg);"></a>
						<div class="blog-text">
							<h3><a href="blog.html">FOLIOR FEST 4</a></h3>
							<span class="posted_on">March. 31th</span>
							<!--<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>-->
							<p>FOLIOR FEST 4 is a design exhibition cum art market that showcases conceptual designs & artisan products as a fun shopping experience. Besides presenting the latest design graduates projects from Dasein Academy of Art, Folior Fest 4 is proud to introduce UNKNOWN ASIA from Japan for the first time in Malaysia!</p>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About Event</h3>
					<p>The Evento is a strategic, creative, one-stop shop for comprehensive meeting and event planning. With 28 years of award-winning special event planning experience, we’ll see that your event is flawless, whether it’s a corporate meeting or a fundraiser for a nonprofit.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Categories</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Music</a></li>
						<li><a href="#">Art</a></li>
						<li><a href="#">Sport</a></li>
						<li><a href="#">Food & Drink</a></li>
						<li><a href="#">Networking</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learn &amp; Grow</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Engage us</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Legal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2017 Limkokwing. All Rights Reserved.</small> 
						<small class="block">Designed by Dias Aidarkhan</small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 50 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

