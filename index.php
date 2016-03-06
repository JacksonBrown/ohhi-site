<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vaughn Development and Administration</title>

	<!-- Load fonts -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

	<!-- Load css styles -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>
	<div class="jumbotron home home-fullscreen" id="home">
		<div class="mask"></div>
		<!--
		<a href="#" class="logo">
			<i class="fa fa-cloud logo-font" style="color: #fff;"></i>
		</a>
		-->
		<a href="" class="menu-toggle" id="nav-expander" style="position: fixed;"><i class="fa fa-bars"></i></a>
		<!-- Offsite navigation -->
		<nav class="menu">
			<a href="#" class="close"><i class="fa fa-close"></i></a>
			<h3>Site Map</h3>
			<ul class="nav">
				<li><a data-scroll href="#home">Home</a></li>
				<li><a data-scroll href="#services">About</a></li>
				<li><a data-scroll href="#contact">Contact</a></li>
			</ul>
			<ul class="social-icons">
				<li><a href=""><i class="fa fa-twitter"></i></a></li>
				<li><a href="http://github.com/JacksonBrown/"><i class="fa fa-github"></i></a></li>
			</ul>
		</nav>
		<div class="container">
			<div class="header-info">
				<h1>Hey, We're Vaughn</h1>
				<p>We develop websites, applications, and administor Linux and Windows Systems. <br />
					Need to contact us? Message our github.
				</p>
				<a href="http://github.com/JacksonBrown" class="btn btn-primary" target="_blank">Our Github</a>
			</div>
		</div>
	</div>
	<!-- Services section start -->
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="service-item">
						<div class="icon"><i class="fa fa-thumbs-up"></i></div>
						<h3>We Are Professional</h3>
						<p>
						The tasks we do will be accomplished with swift finesse. We accompany to the needs of our clients and put
						them first.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<div class="icon"><i class="fa fa-adjust"></i></div>
						<h3>Our Work Is Affordable</h3>
						<p>
						Our set price is $12.50 per hour, however we are open to discuss any decrease in the cost. We do not wish to
						allow our price to detriment relationships with our clients.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<div class="icon"><i class="fa fa-life-ring"></i></div>
						<h3>We Love To Help</h3>
						<p>
						We love to aid in projects. We're proficient in web development and python development. We also administor
						Linux systems and Windows systems.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->
	<!-- Portfolio section start 
	<section id="portfolio" class="darker">
		<div class="container">
			<header>
				<h2>Our Projects and Certifications</h2>
				<p>
				We've worked on web development and python development projects, along with obtaining certifications in Linux and A+.
				</p>
			</header>
			<div id="single-project"></div>
			<div class="row">
				<figure class="portfolio-item col-md-4 col-sm-6" >
					<img class="img-responsive" src="img/projects/project-thumbnail-1.png" alt="Adena icons pack" />
					<figcaption class="mask">
						<a href="projects/project-1.html">
							<i class="glyphicon glyphicon-plus"></i>
						</a>
					</figcaption>
				</figure>
				<figure class="portfolio-item col-md-4 col-sm-6" >
					<img class="img-responsive" src="img/projects/project-thumbnail-1.png" alt="Adena icons pack" />
					<figcaption class="mask">
						<a href="projects/project-1.html">
							<i class="glyphicon glyphicon-plus"></i>
						</a>
					</figcaption>
				</figure>
			</div>
		</div>
	</section>
	-->
	<!-- Portfolio section end -->
	<!-- Contact section start -->
	<section id="contact">
		<div class="container">
			<header>
				<h2>Contact us</h2>
				<p>
				Send us an email, we'll reply immediately!
				</p>
			</header>
			<div class="map-wrapper">
				<div class="map-canvas" id="map-canvas">106 Tommye Ln Tahlequah Oklahoma</div>
				<div class="marker">
					<span>We Are Here</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<form class="row" name="contact-form" method="post" action="email_send.php">
						<div class="form-group col-md-6">
							<input name="name" type="text" placeholder="Your Name" class="form-control" />
						</div>
						<div class="form-group col-md-6">
							<input name="mail" type="email" placeholder="Your Email" class="form-control" />
						</div>
						<div class="form-group col-md-12">
							<input name="subject" type="text" placeholder="Type Message Here..." class="form-control" />
						</div>
						<div class="form-group col-md-12">
							<textarea name="message" class="form-control" rows="10" placeholder="Message"></textarea>
						</div>
						<div class="form-group col-md-12">
							<!--
							<button class="btn btn-lg btn-primary">Send</button>
							-->
							<input type="submit" value="Send" class="btn btn-lg btn-primary">
						</div>
					</form>
				</div>
				<div class="col-md-3 col-md-offset-1">
					<address>
						<span>Our Address</span>
						<p>
							106 Tommye Ln<br>
							Tahlequah, OK 74464<br>
							United States
						</p>
					</address>
					<address>
						<span>Email</span>
						<p>jacksonconnerbrown@gmail.com</p>
					</address>
					<address>
						<span>Phone</span>
						<p>+00 918-931-7486</p>
					</address>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->
	<!-- Footer start -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p>&copy; Vaughn 2016</p>
				</div>
				<div class="col-md-4">
					<ul class="social-icons">
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-github"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer end  -->

	<!-- Load jQuery -->
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

	<!-- Load Booststrap -->
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script type="text/javascript" src="js/smooth-scroll.js"></script>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- Load custom js for theme -->
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
