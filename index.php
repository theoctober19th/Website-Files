<?php
	if(isset($_POST['submit'])) {
	    $errors = '';
		$myemail = 'theoctober19th@gmail.com';//<-----Put Your email address here.
		if(empty($_POST['name'])  ||
		   empty($_POST['email']) ||
		   empty($_POST['subject']) ||
		   empty($_POST['message']))
		{
		    $errors .= "\n Error: all fields are required";
		}

		$name = $_POST['name'];
		$email_address = $_POST['email'];
		$message = $_POST['message'];

		if (!preg_match(
		"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
		$email_address))
		{
		    $errors .= "\n Error: Invalid email address";
		}


		if( empty($errors))

		{

			$to = $myemail;

			$email_subject = "Contact form submission: $name";

			$email_body = "You have received a new message. ".

			" Here are the details:\n Name: $name \n ".

			"Email: $email_address\n Message \n $message";

			$headers = "From: $myemail\n";

			$headers .= "Reply-To: $email_address";

			mail($to,$email_subject,$email_body,$headers);

		}
	} else {
	    // Display the Form and the Submit Button
	}

 ?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bikalpa Dhakal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Bikalpa Dhakal is a mobile app, web application and desktop application developer based on Kathmandu, Nepal" />
	<meta name="keywords" content="theoctober19th bikalpa dhakal BikalpaDhakal ios mobile android application python django web development nepal kathmandu developer bikalpaCodes" />
	<meta name="author" content="Bikalpa Dhakal" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content="Bikalpa Dhakal"/>
	<meta property="og:image" content="http://bkalpa.com.np/images/about.jpg"/>
	<meta property="og:url" content="bkalpa.com.np"/>
	<meta property="og:site_name" content="Bikalpa Dhakal"/>
	<meta property="og:description" content="Bikalpa Dhakal (theoctober19th) is a mobile app, web application and desktop application developer based on Kathmandu, Nepal"/>
	<meta name="twitter:title" content="Bikalpa Dhakal" />
	<meta name="twitter:image" content="http://bkalpa.com.np/images/about.jpg" />
	<meta name="twitter:url" content="bkalpa.com.np" />
	<meta name="twitter:card" content="http://bkalpa.com.np/images/img_bg_1.jpg" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="icon" href="favicon.ico">
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">



<!-- My CSS -->
<!-- Animate.css -->
<link rel="stylesheet" href="css/my_css.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url(images/about.jpg);"></div>
				<h1 id="colorlib-logo"><a href="index.html">Bikalpa Dhakal</a></h1>
				<span class="position">Android/Web Developer</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About Me</a></li>
						<li><a href="#" data-nav-section="services">Services</a></li>
						<li><a href="#" data-nav-section="skills">Skills</a></li>
						<li><a href="#" data-nav-section="education">Education</a></li>
						<!-- <li><a href="#" data-nav-section="experience">Experience</a></li> -->
						<li><a href="#" data-nav-section="work">Work</a></li>
						<li><a href="#" data-nav-section="blog">Blog</a></li>
						<li><a href="#" data-nav-section="contact">Contact</a></li>
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				<br>

				Social Media Profiles
				<ul>
					<li><a href="https://github.com/theoctober19th"><i class="icon-github"></i></a></li>
					<li><a href="https://facebook.com/theoctober19th"><i class="icon-facebook2"></i></a></li>
					<li><a href="https://twitter.com/theoctober19th"><i class="icon-twitter2"></i></a></li>
					<li><a href="https://instagram.com/theoctober19th"><i class="icon-instagram"></i></a></li>
					<li><a href="https://linkedin.com/in/theoctober19th"><i class="icon-linkedin2"></i></a></li>
				</ul>

				<br>
				<br>
				<!-- <p><small>&copy;
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->

		</aside>

		<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(images/img_bg_1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
						   					<h1>Android Native App<br>Development</h1>
						   					<h2></h2>
												<p><a class="btn btn-primary btn-learn" href="docs/BikalpaDhakalCV.pdf">View CV <i class="icon-download4"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(images/img_bg_2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>Web <br>Development</h1>
												<h2></h2>
												<p><a class="btn btn-primary btn-learn" href="docs/BikalpaDhakalCV.pdf">View CV<i class="icon-briefcase3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
						<li style="background-image: url(images/game_development_bg.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>Game <br>Development</h1>
												<h2></h2>
												<p><a class="btn btn-primary btn-learn" href="docs/BikalpaDhakalCV.pdf">View CV<i class="icon-briefcase3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
						<li style="background-image: url(images/ios_development_bg.png);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>iOS App <br>Development</h1>
												<h2></h2>
												<p><a class="btn btn-primary btn-learn" href="docs/BikalpaDhakalCV.pdf">View CV<i class="icon-briefcase3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>

			<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta">About Me</span>
										<h2 class="colorlib-heading">Who Am I?</h2>
										<p><strong>Hi there! I'm bikalpa.</strong> I am from Pokhara, Nepal. In the internet, I am known by the name <b>theoctober19th</b> most of the time.</p>
										<p>I have recently co-founded a tech startup <strong>Treasure Nepal</strong>, where I mostly see the technical matters.</p>
										<p>I love to travel places, watch movies, listen to music and write code. I occasionally ring some stuffs in my guitar -- but that's my sidekick. People say I talk a lot.</p>
										<p>Anything related to music, art and aviation fascinates me. I dream of joining flight school sometimes later in my life. A commercial pilot would be my profession had I not pursued IT.</p>
										<p>I am a die-hard fan of George RR Martin's 'A Song of Ice and Fire' (though extremely disappointed with 'Game of Thrones'). Other shows I love are Mr. Robot, Rick and Morty, Sacred Games and Sherlock.</p>
										<p>Of all things that is eccentric about me, I warn you these: my sarcasm level is beyond repair, and I practice dark magic :P</p>
										<!-- <p>My hometown is Pokhara.</p> -->
									</div>
								</div>
							</div>
							<!-- <div class="row">
								<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
									<div class="services color-4">
										<span class="icon2"><i class="icon-phone3"></i></span>
										<h3>Android Application Development</h3>
									</div>
								</div>

								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div class="services color-2">
										<span class="icon2"><i class="icon-globe-outline"></i></span>
										<h3>Web Development</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div class="services color-3">
										<span class="icon2"><i class="icon-data"></i></span>
										<h3>Software Development</h3>
									</div>
								</div>
							</div> -->
							<!-- <div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2>I am happy to know you <br>that 300+ projects done sucessfully!</h2>
										<a href="#" class="btn-hire">Hire me</a>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</section>



			<section class="colorlib-services" data-section="services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">What I do?</span>
							<h2 class="colorlib-heading">Here are some of my expertise</h2>
						</div>
					</div>
					<div class="row row-pt-md">
						<div class="col-md-4 text-center animate-box">
							<div class="services color-3">
								<span class="icon">
									<i class="icon-android"></i>
								</span>
								<div class="desc">
									<h3>Android Application Development</h3>
									<p></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-1">
								<span class="icon">
									<i class="icon-chrome"></i>
								</span>
								<div class="desc">
									<h3>Full Stack Web Development</h3>
									<p></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-4">
								<span class="icon">
									<i class="icon-appleinc"></i>
								</span>
								<div class="desc">
									<h3>iOS Application Development</h3>
									<p></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-2">
								<span class="icon">
									<i class="icon-appleinc"></i><i class="icon-windows"></i><i class="icon-tux"></i>
								</span>
								<div class="desc">
									<h3>Cross-Platform <br>Software Development</h3>
									<p></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-5">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>Cross-Platform <br>Game Development</h3>
									<p></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-6">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>Machine <br>Learning</h3>
									<p></p>
								</div>
							</div>
						</div>
						<!-- <div class="col-md-4 text-center animate-box">
							<div class="services color-4">
								<span class="icon">
									<i class="icon-layers2"></i>
								</span>
								<div class="desc">
									<h3>Graphic Design</h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-5">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>Software</h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-6">
								<span class="icon">
									<i class="icon-phone3"></i>
								</span>
								<div class="desc">
									<h3>Application</h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</section>

			<!-- <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="309" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Cups of coffee</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="356" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Projects</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Clients</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Partners</span>
						</div>
					</div>
				</div>
			</div> -->

			<section class="colorlib-skills" data-section="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Specialty</span>
							<h2 class="colorlib-heading animate-box">My Skills</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<p></p>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Java</h3>
								<div class="progress">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
								  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
								    <!-- <span>85%</span> -->
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Spring</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <!-- <span>80%</span> -->
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Kotlin</h3>
								<div class="progress">
								 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
								  	aria-valuemin="0" aria-valuemax="100" style="width:40%">
								    <!-- <span>40%</span> -->
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Android</h3>
								<div class="progress">
								 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="85"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <!-- <span>80%</span> -->
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Swift</h3>
								<div class="progress">
								 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="90"
								  	aria-valuemin="0" aria-valuemax="100" style="width:40%">
								    <!-- <span>90%</span> -->
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>iOS</h3>
								<div class="progress">
								 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="90"
								  	aria-valuemin="0" aria-valuemax="100" style="width:40%">
								    <!-- <span>90%</span> -->
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Python</h3>
								<div class="progress">
								 	<div class="progress-bar color-7" role="progressbar" aria-valuenow="70"
								  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
								    <!-- <span>70%</span> -->
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Django</h3>
								<div class="progress">
								 	<div class="progress-bar color-8" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <!-- <span>80%</span> -->
								  	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Education</span>
							<h2 class="colorlib-heading animate-box">Education</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<!-- <div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Master Degree Graphic Design
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div class="col-md-6">
										      			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
										      		</div>
										      		<div class="col-md-6">
										      			<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
										      		</div>
										      	</div>
									         </div>
									    </div>
									</div> -->
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bachelor's Degree in Computer Engineering
									            </a>
									        </h4>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">
									            <p><strong>Nepal College of Information Technology</strong>, Year <strong>2019</strong></p>
													<!-- <ul>
														<li>Separated they live in Bookmarksgrove right</li>
														<li>Separated they live in Bookmarksgrove right</li>
													</ul> -->
									        </div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
<!--
			<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Experience</span>
							<h2 class="colorlib-heading animate-box">Work Experience</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				         <div class="timeline-centered">
					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">

					               <div class="timeline-icon color-1">
					                  <i class="icon-pen2"></i>
					               </div>

					               <div class="timeline-label">
					                  <h2><a href="#">Full Stack Developer</a> <span>2017-2018</span></h2>
					                  <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
					               </div>
					            </div>
					         </article>


					         <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-2">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">Front End Developer at Google Company</a> <span>2017-2018</span></h2>
					                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-3">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">System Analyst</a> <span>2017-2018</span></h2>
					                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-4">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">Creative Designer</a> <span>2017-2018</span></h2>
					                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-5">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">UI/UX Designer at Envato</a> <span>2017-2018</span></h2>
					                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-none">
					               </div>
					            </div>
					         </article>
					      </div>
					   </div>
				   </div>
				</div>
			</section> -->

			<?php
			  //for example your user
			  $user = 'theoctober19th';

			  // A token that you could generate from your own github
			  // go here https://github.com/settings/applications and create a token
			  // then replace the next string
			  $token = 'b6a091b2d422dcbab2bac6c2b2d20957c6a8ffdf';

			  // We generate the url for curl
			  $curl_url = 'https://api.github.com/users/' . $user . '/repos?sort=updated_at';

			  // We generate the header part for the token
			  $curl_token_auth = 'Authorization: token ' . $token;

			  // We make the actuall curl initialization
			  $ch = curl_init($curl_url);

			  //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			  // We set the right headers: any user agent type, and then the custom token header part that we generated
			  curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: Awesome-Octocat-App'));
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

				// We execute the curl
				$output = curl_exec($ch);

				// And we make sure we close the curl
 				curl_close($ch);

			  // Then we decode the output and we could do whatever we want with it
			  $output = json_decode($output);

			?>



			<section class="colorlib-work" data-section="work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Work</span>
							<h2 class="colorlib-heading animate-box">Recent Work</h2>
						</div>
					</div>

					<?php
						if (!empty($output)) {

								// now you could just foreach the repos and show them
								$counter = 0;
								$color = 1;
								foreach ($output as $repo) {
									$counter++;
											if($counter % 2 == 0){
												$color = $color * -1;
											}
					?>

					<div class="card-container animate-box">
					  <div class="card <?php echo $color==1?'':'card--dark'; ?>"><a href="<?php echo $repo->html_url; ?>" target="_blank">
					      <div class="card--display"><i class="material-icons"><?php echo $repo->language ; ?></i>
					        <h2 <?php echo $color==1?'':'style="color:white;"' ?>><?php echo $repo->name ?></h2>
					      </div>
					      <div class="card--hover">
					        <h2 <?php echo $color==1?'':'style="color:white;"' ?>><?php echo $repo->name ?></h2>
					        <p><?php echo $repo->description ?></p>
					        <p class="link">Click to see project</p>
					      </div></a>
					    <div class="card--border"></div>
					  </div>
					</div>

						<?php
									if($counter > 5){
										break;
									}
							  }
							}
						 ?>


					<div class="row">
						<div class="col-md-12 animate-box">
							<p><a href="https://github.com/theoctober19th" target="_blank" class="btn btn-primary btn-lg btn-load-more">View More on Github <i class="icon-reload"></i></a></p>
						</div>
					</div>
					</div>
			</section>

			<?php
				require($_SERVER['DOCUMENT_ROOT'] . '/blog/wp-load.php');
				$args = array(
				// 'cat' => 3, // Only source posts from a specific category
				'posts_per_page' => 3 // Specify how many posts you'd like to display
				);
				$latest_posts = new WP_Query( $args );
			?>

			<section class="colorlib-blog" data-section="blog">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Read</span>
							<h2 class="colorlib-heading">Recent Blog</h2>
						</div>
					</div>
					<div class="row">

						<?php
							if ( $latest_posts->have_posts() ) {
								while ( $latest_posts->have_posts() ) {
									$latest_posts->the_post(); ?>

						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="<?php the_permalink(); ?>" class="blog-img">
									<img style="max-width:250px; max-height:250px;" src="<?php the_post_thumbnail_url();?>"/>
								</a>
								<div class="desc">
									<span><small> <?php the_time('l jS F, Y') ?> </small> </span>
									<h3><a href="<?php the_permalink(); ?>" target="_blank">  <?php the_title(); ?> </a></h3>
									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						</div>

						<?php

							}
						}
						?>
					</div>

					<div class="row">
						<div class="col-md-12 animate-box">
							<p><a href="https://blog.bkalpa.com.np" target="_blank" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
						</div>
					</div>

				</div>
			</section>




			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Get in Touch</span>
							<h2 class="colorlib-heading">Contact</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#">theoctober19th@gmail.com</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p>Pokhara, Nepal</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="tel://">+977 9805886844</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">

									<form action="" name="contact_form" method="post">
										<div class="form-group">
											<input name="name" type="text" class="form-control" placeholder="Name">
										</div>
										<div class="form-group">
											<input name="email" type="text" class="form-control" placeholder="Email">
										</div>
										<div class="form-group">
											<input name="subject" type="text" class="form-control" placeholder="Subject">
										</div>
										<div class="form-group">
											<textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
										</div>
										<div class="form-group">
											<input name="submit" type="submit" class="btn btn-primary btn-send-message" value="Send Message">
										</div>
									</form>
									<br>
									<?php echo $errors; ?>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>

		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	<!-- Contact Form Validator -->
	<script language="JavaScript">
		var frmvalidator  = new Validator("contactform");
		frmvalidator.addValidation("name","req","Please provide your name");
		frmvalidator.addValidation("email","req","Please provide your email");
		frmvalidator.addValidation("email","req","Please provide a subject");
		frmvalidator.addValidation("email","email",
		  "Please enter a valid email address");
	</script>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>


	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
