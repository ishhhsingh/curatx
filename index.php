<?php
session_start();

if(!isset($_SESSION['email'])) {
    header("Location: loginpage.php");
    exit;
}

$username = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Curation</title>
	
    <!-- css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	
	<section class="hero" id="intro">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="food.html"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
					<div class="animatedParent">
						<h1 class="animated fadeInDown">CURATX</h1>
						<p class="animated fadeInUp">Ideas To Sparkle Your Creativity</p>
					</div>
			   </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#about" class="learn-more-btn btn-scroll">Learn more</a>
                </div>
              </div>
            </div>
    </section>
	
	
    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2">
                                                   <div class="site-logo">
                                                            <a href="index.html" class="brand">CURATX</a>
                                                    </div>
                                          </div>
                                          

                                          <div class="col-md-10">
                         
                                                      <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                  <li class="active"><a href="#intro">Home</a></li>
                                                                  <li><a href="#about">About Us</a></li>
																   <li><a href="#service">Services</a></li>
                                                                  <li><a href="#works">Works</a></li>
																  <li><a href="loginpage.html">Login</a></li>				                                                                  
                                                                  
                                                                  <li><a href="#contact">Contact</a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                             
                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div> 
    <!-- /Navigation -->  

	<!-- Section: about -->
    <section id="about" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center animated bounceInDown">
					<h2 class="h-bold">About our Curation team</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

		
        <div class="row">
		
		
            <div class="col-lg-8 col-lg-offset-2 animatedParent">		
				<div class="text-center">
					<p>
						Welcome to Curation, where passion meets curation.
					</p>
					<p>
						At Curation, we're more than just enthusiasts; we're connoisseurs of the extraordinary. Our platform is a labor of love, meticulously crafted to celebrate the artistry and craftsmanship that permeate through the realms of fashion photography, culinary excellence, and beyond.
					</p>
					<p>
						Join us as we embark on a journey of discovery, where every image tells a story, and every dish is a masterpiece waiting to be savored. Welcome to Curation-where art, culture, and creativity converge to inspire and delight.


					</p>
					<a href="#service" class="btn btn-skin btn-scroll">What we do</a>
				</div>
            </div>
		

        </div>		
		</div>

	</section>
	<!-- /Section: about -->
	
	
	<!-- Section: services -->
    <section id="service" class="home-section color-dark bg-gray">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="section-heading text-center">
					<h2 class="h-bold">What we can do for you</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="text-center">
		<div class="container">

        <div class="row animatedParent">
            <div class="col-xs-6 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-briefcase fa-2x"></span> 
					</div>
					<div class="service-desc">						
						<h5>Fashion</h5>
						<div class="divider-header"></div>
						<p>
							What you wear is how you present yourself to the world, especially today, when human contacts are so quick. Fashion is instant language.
						</p>
						<a href="fashion.html" class="btn btn-skin">Learn more</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft slow">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-camera fa-2x"></span> 
					</div>
					<div class="service-desc">
						<h5>Photography</h5>
						<div class="divider-header"></div>
						<p>
							Photography is all about secrets. The secrets we all have and will never tell.
						</p>
						<a href="photography.php" class="btn btn-skin">Learn more</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft slower">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-cutlery	fa-2x"></span> 
					</div>
					<div class="service-desc">
						<h5>Food</h5>
						<div class="divider-header"></div>
						<p>
							Your diet is a bank account. Good food choices are good investments.
						</p>
						<a href="food.html" class="btn btn-skin">Learn more</a>
					</div>
                </div>
				</div>
            </div>

        </div>		
		</div>
		</div>
	</section>
	<!-- /Section: services -->
	

	<!-- Section: works -->
    <section id="works" class="home-section color-dark text-center bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">What we have done</h2>
					<div class="divider-header"></div>
					</div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

            <div class="row animatedParent">
                <div class="col-sm-12 col-md-12 col-lg-12" >

                    <div class="row gallery-item">
                        <div class="col-md-3 animated fadeInUp">
							<a href="img/works/bg1.jpeg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/bg1.jpeg" class="img-responsive" alt="img">
							</a>
						</div>
						<div class="col-md-3 animated fadeInUp slow">
							<a href="img/works/bg2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/bg2.jpg" class="img-responsive" alt="img">
							</a>
						</div>
						<div class="col-md-3 animated fadeInUp slower">
							<a href="img/works/bg3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/bg3.jpg" class="img-responsive" alt="img">
							</a>
						</div>
						<div class="col-md-3 animated fadeInUp">
							<a href="img/works/bg3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/bg4.jpg" class="img-responsive" alt="img">
							</a>
						</div>
					</div>
	
                </div>
            </div>	
		</div>

	</section>
	<!-- /Section: works -->

	<!-- Section: contact -->
    <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">Get in touch with us</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="container">

			<div class="row marginbot-80">
				<div class="col-md-8 col-md-offset-2">
						<form id="contact-form">
						<div class="row marginbot-20">
							<div class="col-md-6 xs-marginbot-20">
								<input type="text" class="form-control input-lg" id="name" placeholder="Enter name" required="required" />
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control input-lg" id="email" placeholder="Enter email" required="required" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
										<input type="text" class="form-control input-lg" id="subject" placeholder="Subject" required="required" />
								</div>
								<div class="form-group">
									<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Message"></textarea>
								</div>						
								<button type="submit" class="btn btn-skin btn-lg btn-block" id="btnContactUs">
									Send Message</button>
							</div>
						</div>
						</form>
				</div>
			</div>	


		</div>
	</section>
	<!-- /Section: contact -->


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul class="footer-menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">Press release</a></li>
					</ul>
				</div>
				<div class="col-md-6 text-right">
					<p>&copy;Copyright 2014 - Bocor. <a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste</p>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Bocor
                    -->
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	
    <script src="js/custom.js"></script>
	<script src="js/css3-animate-it.js"></script>

</body>

</html>
