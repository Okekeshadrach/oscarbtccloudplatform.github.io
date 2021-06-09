<?php
session_start();
require 'en/int.php';
 $class = new paywase_engine;
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<!-- Document Meta

    ============================================= -->
    <style media="screen">
      body{
          background: rgb(6, 205, 255);
          color: #fff;
      }
      .sr_flash {
        animation : flash linear 3s infinite;
      }
      @keyframes flash {
        0% {
          opacity: 1;
        }
        50% {
          opacity: -1;
        }
        100% {
          opacity: 1;
        }
      }
    </style>
<!--<meta charset="utf-8">-->
<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--IE Compatibility Meta-->
<!--<meta name="author" content="zytheme"/>-->
<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->
<!--<meta name="description" content="Bitcoin And Crypto Currency Html5 Template">-->
<link href="assets/images/favicon/main_icon1.png" rel="icon">

<!-- Fonts
    ============================================= -->
<link href="http://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600,600i,700%7CRoboto:300i,400,400i,500,500i,700" rel="stylesheet" type="text/css">

<!-- Stylesheets
    ============================================= -->
<link href="assets/css/external.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title>LOGIN  | Oscar Bitcoin cloud platform </title>
</head>
<body>
<div class="preloader">
	<div class="signal"></div>
</div><!-- Document Wrapper
	============================================= -->


<div id="wrapper" class="wrapper clearfix">















<header id="navbar-spy" class="header header-1 header-transparent header-bordered header-fixed">
	<nav id="primary-menu" class="navbar navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="logo" href="index.php">
					
					<img class="logo-light" src="assets/images/logo/logo-lighty12.png" alt="Enrmous Logo" style="width: 250px;">
					<img class="logo-dark" src="assets/images/logo/logo-darky12.png" alt="Enrmous Logo" style="width: 250px;">
				</a>
			</div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
	<ul class="nav navbar-nav navbar-left nav-pos-right">
	
		<li>
			<a href="index.php" class="dropdown-toggle menu-item">HOME</a>
		</li>
		
		<li>
			<a href="news.php" class="dropdown-toggle menu-item">NEWS</a>
		</li>
		<li>
			<a href="faq.php" class="dropdown-toggle menu-item">F.A.Q</a>
		</li>
		<li>
			<a href="contact-us.php" class="dropdown-toggle menu-item">CONTACT US</a>
		</li>
		<li>
			<a href="about-us.php" class="dropdown-toggle menu-item">ABOUT US</a>
		</li>
		<li>
			<a href="login.php" class="dropdown-toggle menu-item">LOGIN</a>
		</li>
	</ul>
								<!-- Module Consultation  -->
	<div class="module module-consultation pull-left">
		<a href="signup.php" class="btn btn--white btn--bordered btn--rounded sr_flash">SIGN UP</a>
	</div>	
</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
</header>









<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax" style="height:100px;">
	<div class="bg-section">
		<img src="assets/images/page-titles/2.jpg" alt="Background"/>
	</div>
	<div class="container">
		
	</div><!-- .container end -->
</section><!-- #page-title end -->

<!-- Contact Info
============================================= -->

<!-- #contactInfo end -->

<!-- Consultation #1
============================================= -->
<section id="consultation" class="consultation consultation-1 pb-0">
	<div class="bg-section">
		<img src="assets/images/background/7.jpg" alt="Background"/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="heading heading-2 mb-50">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<h2 class="heading--title text-white" style="font-weight:bold;"><span class="text-theme">CONTACT</span><span class="text-white"> US</span></h2>
						</div>
					</div><!-- .row end -->
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- #consultation end -->


<section id="clients1" class="clients clients-1 pt-60 pt-90 bg-gray">
	<div class="container">
		<div class="row row-clients">
			<div class="col-xs-12" style="background-color:#7a7a7a;padding:20px;">
			


			<form class="mb-0" method="POST">
				<?php
					if(isset($_POST['send_mail'])){
						$fullname = $_POST['f1'];
						$email = $_POST['f2'];
						$mess = nl2br($_POST['f3']);

						$to = $email;
			            $subject = 'PLEASE I NEED HELP FROM '.$fullname.' ';
			            $message = '

			          <section>
			              <div class="container" style="background-color:#efefef;padding-top:10px;padding-right:6px;padding-left:6px;">
			                          <p style="color:#717070;font-size:12px;">
			                              Dear Admin, <br /><br />

			                             I ('.$fullname.'), 
			                             <br /><br />
			                              '.$mess.'
			                          </p>
			                         

			                          <br /> 
			              </div>
			          </section><br />
			                        ';

			            $headers = 'From: oscarbitcoincloudplatform@gmail.com' . "\n" .
			                        'Reply-To: oscarbitcoincloudplatform@gmail.com' . "\n" .
			                        'Content-type: text/html; charset=iso-8859-1' . "\n" .
			                        "X-Mailer: PHP";

			        mail($to, $subject, $message, $headers);
			        echo '<script>window.alert("Mail sent!")</script>';
			        // echo '<div class="alert alert-success"><b>Sent!</b> Mail sent</div><br />';
						
					}

				?>
                            
                        <div class="row">
                            <div class="col-lg-6">
    <input type="text" name="f1" class="form-control" placeholder="enter fullname" style="padding:30px;color:#001656;font-weight:bold;" required>
                            </div>
                            <div class="col-lg-6">
    <input type="mail" name="f2" class="form-control" placeholder="enter valid mail" style="padding:30px;color:#001656;font-weight:bold;" required>
                            </div>
                             <div class="col-lg-12">
    <textarea name="f3" placeholder="Enter message...." style="color:#001656;font-weight:bold;width:100%;padding:20px;" rows="10" required></textarea><br /><br />
                            </div>
							<div class="col-xs-4">
								<input type="submit" name="send_mail" class="btn btn-warning" value="SEND MAIL">
							</div>

							<div class="col-xs-12">
                       <br /><br />
                   </div>



                        </div>
                        <!-- .row end -->
                 </form>


			</div>
		</div>
	</div>
</section>


<!-- Clients #1
============================================= -->
<section id="clients1" class="clients clients-1 pt-60 pt-90 bg-gray">
	<div class="container">
		<div class="row row-clients">
			<!-- Client #1 -->
			<div class="col-xs-12 col-sm-6 col-md-2 client">
					<img class="center-block" src="assets/images/clients/1.png" alt="client">
				</div>
			<!-- .client end -->

			<!-- Client #2 -->
			<div class="col-xs-12 col-sm-6 col-md-2 client">
					<img class="center-block" src="assets/images/clients/2.png" alt="client">
				</div>
			<!-- .client end -->
			
			<!-- Client #3 -->
			<div class="col-xs-12 col-sm-6 col-md-2 client">
					<img class="center-block" src="assets/images/clients/3.png" alt="client">
				</div>
			<!-- .client end -->
			
			<!-- Client #4 -->
			<div class="col-xs-12 col-sm-6 col-md-2 client">
					<img class="center-block" src="assets/images/clients/4.png" alt="client">
				</div>
			<!-- .client end -->
			
			<!-- Client #5 -->
			<div class="col-xs-12 col-sm-6 col-md-2 client">
					<img class="center-block" src="assets/images/clients/5.png" alt="client">
				</div>
			<!-- .client end -->
			
			<!-- Client #6 -->
			<div class="col-xs-12 col-sm-6 col-md-2 client">
					<img class="center-block" src="assets/images/clients/6.png" alt="client">
				</div>
			<!-- .client end -->
			
		</div>
		<!-- .row-clients end -->
	</div>
	<!-- .container end -->
</section>
<!-- #clients1 end -->
<section id="testimonial1" class="testimonial testimonial-1 pt-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 wow fadeInUp" data-wow-delay="100ms">
				 <div id="testimonial-wide" class="carousel carousel-navs" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
					<?php $class->PAY_testimonyINDEX()?>
					
					
					
					
				</div>
			</div><!-- .col-md-12 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- #testimonial1 end -->

<!-- Footer #1
============================================= -->
<footer id="footer" class="footer footer-1">
	<!-- Copyrights
	============================================= -->
	<div class="footer--action">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="footer--action-container">
						<div class="row">
							<div class="col-xs-12 col-sm-7 col-md-6">
								<h3>Payment Platform Accessible</h3>
								<p>Accessible payments</p>
							</div>
							<div class="col-xs-12 col-sm-5 col-md-6">
								<div class="action-button">
									<a href="#">
										<img src="assets/images/footer/payments1.png" alt="app store">
									</a>
									
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div><!-- .container end -->
	</div><!-- .footer-action end -->
	
	<!-- Widget Section
	============================================= -->
	<div class="footer-widget">
		<div class="container">
			<div class="row clearfix">
				<div class="col-xs-12 col-sm-4 col-md-3 footer--widget widget-about">
					<div class="widget-content">
						<img class="footer-logo" src="assets/images/logo/logo-darky12.png" alt="logo">
						<p>Oscar Bitcoin cloud platform  offers investors 3 investment plans for a minimum investment of $100 USD. The plans consist of 2 daily paying plans and 4 expiry plans.</p>
						<div class="copyright">
							<a target="_blank" href="https://templateshub.net">Oscar Bitcoin cloud platform </a>
						</div>
					</div>
				</div><!-- .col-md-3 end -->
				<div class="col-xs-12 col-sm-4 col-md-2 footer--widget widget-links">
					<div class="widget-title">
						<h5>Company</h5>
					</div>
					<div class="widget-content">
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Sign Up</a></li>
						</ul>
					</div>
				</div><!-- .col-md-2 end -->
				
				<div class="col-xs-12 col-sm-4 col-md-2 footer--widget widget-links">
					<div class="widget-title">
						<h5>Help & Support</h5>
					</div>
					<div class="widget-content">
						<ul>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div>
				</div><!-- .col-md-2 end -->
				
				<div class="col-xs-12 col-sm-4 col-md-2 footer--widget widget-links">
					<div class="widget-title">
						<h5>How To</h5>
					</div>
					<div class="widget-content">
						<ul>
							<li><a href="#">Buy Bitcoin</a></li>
							<li><a href="#">Buy Ethereum</a></li>
							<li><a href="#">Buy Litecoin</a></li>
						</ul>
					</div>
				</div><!-- .col-md-2 end -->

				<div class="col-xs-12 col-sm-4 col-md-3 footer--widget widget-newsletter">
					<div class="widget-title">
						<h5>Stay Updated</h5>
					</div>
					<div class="widget-content">
						<form class="form-newsletter mailchimp">
							<input type="email" name="email" class="form-control" placeholder="Subscribe Our Newsletter">
							<button type="submit"><i class="fa fa-long-arrow-right"></i></button>
						</form>
						<div class="subscribe-alert"></div>
						<div class="clearfix"></div>
						<p>Get the latest updates and offers.</p>
						
					</div>
				</div><!-- .col-md-3 end -->
				<div class="clearfix"></div>
			</div>
		</div><!-- .container end -->
	</div><!-- .footer-widget end -->
	
	<!-- Copyrights
	============================================= -->

	
</footer>


<div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
 </div><!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>
</body>

</html>