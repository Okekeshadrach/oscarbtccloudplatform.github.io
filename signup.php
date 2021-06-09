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
<meta name="author" content="zytheme"/>
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
<title>CREATE ACCOUNT | Oscar Bitcoin cloud platform </title>
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
							<h2 class="heading--title text-white" style="font-weight:bold;"><span class="text-theme">CREATE</span><span class="text-white"> ACCOUNT</span></h2>
						</div>
					</div><!-- .row end -->
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">

							<form class="mb-0" method="POST">

								 <?php

                            if(isset($_POST['send_user'])){
                                 // reg_id
                            $reg_id = rand(1111, 99999999);
                            $reg_date = date("d/m/Y");
                            $reg_time = date("h:i:sa");
                            $reg_downlineID = rand(1111, 99999);

                            // user info
                            $f1 = trim($_POST['f1']);
                            $f2 = trim($_POST['f2']);
                            $f3 = trim($_POST['f3']);

                            $f4 = trim($_POST['f4']);
                            $f5 = trim($_POST['f5']);

                            $f6 = trim($_POST['f6']);
                            $f7 = trim($_POST['f7']);
                            // $f8 = trim($_POST['f8']);
                            $f9 = trim($_POST['f9']);

                            // main downline $_SERVER['HTTP_CLIENT_IP'];
                            $main_down = $f3.''.$reg_downlineID;
                            $ip_address = '';

                            // for admin
                            $status = 'active';

                            // last seen
                            $last_seen = $reg_date.' by '.$reg_time;
                            
                            // get user referral
                            $downline_fullname = '-';

                           if(isset($_GET['ref'])){
                                $refID =  $_GET['ref'];
                                 $f8 = $refID;
                                 // $f9 = trim($_POST['f9']);
                                            // echo $refID;
                                        }



                            if(empty($f4)){
                                echo "empty";   
                        }else if($class->paywase_member($reg_id,$reg_date,$reg_time,$main_down,$f1,$f2,$f3,$f4,$f6,$f7,$f8,$f9,$ip_address,$status,$last_seen,$downline_fullname)){
                                echo '<script>window.location="registration-succces.php?user='.$f1.'&downline='.$main_down.'&refID='.$refID.'"</script>';
                            }else{
                              echo '<div style="padding:19px; background-color:#ff7d7d;color:#870303;" class="sr_flash">
                            <b>INFORMATION NOT SAVED!</b> try again</a>
                        </div><br /><br />';
                            }

                           }
                           

                            ?>

                            
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
    <input type="text" name="f1" class="form-control" required placeholder="FULL NAME" style="padding:30px;color:#001656;font-weight:bold;">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
    <input type="email" name="f2" class="form-control" required placeholder="E-MAIL ADDRESS" style="padding:30px;color:#001656;font-weight:bold;">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
    <input type="text" name="f3" class="form-control" required placeholder="USERNAME" style="padding:30px;color:#001656;font-weight:bold;">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
    <input type="password" name="f4" class="form-control" required placeholder="PASSWORD" style="padding:30px;color:#001656;font-weight:bold;">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
    <input type="password" name="f5" class="form-control" required placeholder="RE-TYPE PASSWORD" style="padding:30px;color:#001656;font-weight:bold;">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
    <input type="text" name="f6" class="form-control" required placeholder="SECURITY QUESTION" style="padding:30px;color:#001656;font-weight:bold;">
                            </div>
                             <div class="col-xs-12 col-sm-12 col-md-12">
    <input type="text" name="f7" class="form-control" required placeholder="ANSWER" style="padding:30px;color:#001656;font-weight:bold;">
                            </div>
    <!--                        <div class="col-xs-12 col-sm-12 col-md-6">-->
    <!--<input type="text" name="f8" class="form-control" placeholder="DOWNLINE CODE (optional)" style="padding:30px;color:#001656;font-weight:bold;">-->
    <!--                        </div>-->
                            <div class="col-xs-12 col-sm-12 col-md-12">
    <input type="text" name="f9" class="form-control" placeholder="BITCOIN WALLET ADDRESS (optional)" style="padding:30px;color:#001656;font-weight:bold;">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="checkbox" required /> &nbsp; <b style="color:#ffffff;"> I Agree to the Terms of Service &amp; Policy</b>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                       <br /><br /></div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input type="submit" value="REGISTER ME" name="send_user" class="btn btn--primary btn--block">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="contact-result"></div>
                            </div>
                        </div>
                        <!-- .row end -->
                    </form>













						</div>
					</div><!-- .row end -->
				</div><!-- .heading end -->
			</div>







				<div class="col-xs-12">
				<div class="heading heading-2 mb-50">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<h2 class="heading--title text-white"><span class="text-theme">WELCOME</span></h2>
							<p class="heading--desc">Oscar Bitcoin cloud platform  serves large scale investors from Northern Europe <br />and North America.Oscar Bitcoin cloud platform , offers the opportunity to small scale investors to take part in the trading on the world financial markets and earn significant profits.<br /><br /><br />
							</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<h2 class="heading--title text-white"><span class="text-theme">REGISTER</span><span class="text-white"> ACCOUNT</span></h2>
					<p class="heading--desc">
					Fill in the quick registration form or use the normal page. Please do not forget to include your payment data</p>
					<br />
					<!-- <img src="assets/images/sliders/slide-bg/1.jpg" alt="Slide Background Image"  width="100%"> -->
						</div>
					</div><!-- .row end -->
				</div><!-- .heading end -->
			</div>








		</div>
		<!-- .row end -->
	
	</div>
	<!-- .container end -->
</section>
<!-- #consultation end -->

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

<!-- Testimonial #1
============================================= -->
<section id="testimonial1" class="testimonial testimonial-1 pt-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
				 <div id="testimonial-wide" class="carousel carousel-navs" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
					<!-- Testimonial #1 -->
					<div class="testimonial-panel">
					<div class="testimonial--icon"></div><!-- .testimonial-icon end -->
						<div class="testimonial--body">
							<p>“Highly recommended & a great experience. The process was simple and easy to understand. Trading was straight forward, supports all major cryptocurrencies and the entire process was super smooth!”</p>
						</div><!-- .testimonial-body end -->
						
						<div class="testimonial--meta">
							<div class="testimonial--meta-img">
								<img src="assets/images/testimonial/2.png" alt="Testimonial Author">
							</div>
							<h4>Mahmoud Baghagho</h4>
							<p>7oroof Agency</p>
						</div><!-- .testimonial-meta end -->
					</div><!-- .testimonial-panel end -->
					
					<!-- Testimonial #2 -->
					<div class="testimonial-panel">
						<div class="testimonial--icon"></div><!-- .testimonial-icon end -->
						<div class="testimonial--body">
							<p>“Highly recommended & a great experience. The process was simple and easy to understand. Trading was straight forward, supports all major cryptocurrencies and the entire process was super smooth!”</p>
						</div><!-- .testimonial-body end -->
						
						<div class="testimonial--meta">
							<div class="testimonial--meta-img">
								<img src="assets/images/testimonial/1.png" alt="Testimonial Author">
							</div>
							<h4>ayman fikry</h4>
							<p>zytheme</p>
						</div><!-- .testimonial-meta end -->
					</div><!-- .testimonial-panel end -->
					
					<!-- Testimonial #3 -->
					<div class="testimonial-panel">
						<div class="testimonial--icon"></div><!-- .testimonial-icon end -->
						<div class="testimonial--body">
							<p>“Highly recommended & a great experience. The process was simple and easy to understand. Trading was straight forward, supports all major cryptocurrencies and the entire process was super smooth!”</p>
						</div><!-- .testimonial-body end -->
						
						<div class="testimonial--meta">
							<div class="testimonial--meta-img">
								<img src="assets/images/testimonial/3.png" alt="Testimonial Author">
							</div>
							<h4>Fouad badawy</h4>
							<p>Tie Labs Inc</p>
						</div><!-- .testimonial-meta end -->
					</div><!-- .testimonial-panel end -->
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
	<div class="footer-widget">
		<div class="container">
			<div class="row clearfix">
				<div class="col-xs-12 col-sm-4 col-md-3 footer--widget widget-about">
					<div class="widget-content">
						<img class="footer-logo" src="assets/images/logo/logo-darky12.png" alt="logo">
						<p>Oscar Bitcoin cloud platform  offers investors 3 investment plans for a minimum investment of $100 USD. The plans consist of 2 daily paying plans and 4 expiry plans.</p>
						<div class="copyright">
							<a target="_blank" href="https://templateshub.net">Oscar Bitcoin cloud platform .net</a>
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