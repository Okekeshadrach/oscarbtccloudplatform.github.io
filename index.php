<?php
session_start();
require 'en/int.php';
 $class = new paywase_engine();

 $days_online = date('d/m/y');

   if ($class->exist_dater('paywase_daysonline', 'days_online', $days_online) == true) {
    //    echo '<script>window.alert("not!")</script>';
   } elseif ($class->paywase_Countdays($days_online)) {
    //    echo '<script>window.alert("day sent!")</script>';
   }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<style media="screen">
      body{
          background: #111;
          color: #fff;
      }
      .sr_flash {
        animation : flash linear 1s infinite;
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
<!-- Document Meta
    ============================================= -->
<!--<meta charset="utf-8">-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<!--<meta name="author" content="zytheme"/>-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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

<!-- RS5.0 Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css"> 

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title>Trade Wiser</title>
</head>
<body>


 




<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fa824d20a68960861bcda19/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



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

<!-- Hero Section  
====================================== -->
<section id="slider" class="slider slide-overlay-black">
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				<!-- slide 1 -->
				<li data-transition="zoomout" 
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="assets/images/sliders/slide-bg/1.jpg" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
				        data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-110','-100','-110','-110']" 
                        data-fontsize="['16','16','16','12']"
                        data-lineheight="['25','25','25','25']"
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
 						<div class="slide--subheadline">Exchange Cryptocurrency At The Best Rate</div>
 					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
				        data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-13','-13','-13','10']"
						data-fontsize="['60', '50', '40', '30']" 
                        data-lineheight="['60','60','60','60']"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 						data-splitin="none" 
						data-splitout="none" 
  						data-responsive_offset="on">
 						<div class="slide--headline">Start Trading The World's Most <br>Popular Cryptocurrencies!</div>
 					</div>		
 								
					<!-- LAYER NR. 3 -->
					<div class="tp-caption" 
				        data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['90','90','90','100']"
						data-fontsize="['16', '16', '16', '12']" 
                        data-lineheight="['25','25','25','25']"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
 						<div class="slide--bio">Just Enjoy Your Best Rates While We Are Doing The Rest For You</div>
 					</div>
					
					<!-- LAYER NR. 4 -->
					<div class="tp-caption" 
				        data-x="['left','left','left','left']" data-hoffset="['160','110','40','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['160','160','190','210']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
 						data-basealign="slide" 
						data-responsive_offset="on" 
						data-responsive="off">
						<div class="slide-action">
							<a class="btn btn--primary btn--rounded mr-30" href="#">Get Started</a>
							<a class="btn btn--video popup-video" href="https://youtu.be/fwSFQswgMQ4"><i class="fa fa-play"></i>Watch Video</a>
						</div>
					</div>
				</li>
				
				<!-- slide 2 -->
				<li data-transition="zoomin" 
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="assets/images/sliders/slide-bg/2.jpg" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
				        data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-110','-100','-110','-110']" 
                        data-fontsize="['16','16','16','12']"
                        data-lineheight="['25','25','25','25']"
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":750,"speed":750,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
 						<div class="slide--subheadline">Instant, Secure & Private</div>
 					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
				        data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-13','-13','-13','10']"
						data-fontsize="['60', '50', '40', '30']" 
                        data-lineheight="['60','60','60','60']"
						data-width="none"
						data-height="none"
						data-transform_idle="o:1;"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 						data-splitin="none" 
						data-splitout="none" 
 						data-responsive_offset="on">
 						<div class="slide--headline">Find & Compare The Best <br>Cryptocurrency Exchange Rates</div>
  					</div>		
 								
					<!-- LAYER NR. 3 -->
					<div class="tp-caption" 
				        data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['90','90','90','100']"
						data-fontsize="['16', '16', '16', '12']" 
                        data-lineheight="['60','60','60','60']"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
 						<div class="slide--bio">Buy And Sell Cryptocurrency Near You!</div>
 					</div>
					
					<!-- LAYER NR. 4 -->
					<div class="tp-caption" 
				        data-x="['left','left','left','left']" data-hoffset="['160','110','40','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['160','160','190','210']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
 						data-basealign="slide" 
						data-responsive_offset="on" 
						data-responsive="off">
						<div class="slide-action">
							<a class="btn btn--white btn--bordered btn--rounded" href="#">Get Started</a>
 						</div>
					</div>
				</li>
				
				<!-- slide 3 -->
				<li data-transition="slideoverleft"
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
 					<!-- MAIN IMAGE -->
					<img src="assets/images/sliders/slide-bg/3.jpg" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
				        data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-110','-100','-110','-110']" 
                        data-fontsize="['16','16','16','12']"
                        data-lineheight="['25','25','25','25']"
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'						data-splitin="none" 
						data-splitout="none" 
 						data-responsive_offset="on">
 						<div class="slide--subheadline">Instant, Secure & Private</div>
 					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
				        data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-13','-13','-13','10']"
						data-fontsize="['60', '50', '40', '30']" 
                        data-lineheight="['6','60','60','60']"
						data-width="none"
						data-height="none"
						data-transform_idle="o:1;"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
 						<div class="slide--headline">Find & Compare The Best <br>Cryptocurrency Exchange Rates</div>
  					</div>		
 								
					<!-- LAYER NR. 3 -->
					<div class="tp-caption" 
				        data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['90','90','90','100']"
						data-fontsize="['16', '16', '16', '12']" 
                        data-lineheight="['60','60','60','60']"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
 						<div class="slide--bio">Buy And Sell Cryptocurrency Near You!</div>
 					</div> 
					
					<!-- LAYER NR. 4 -->
					<div class="tp-caption" 
				        data-x="['left','left','left','left']" data-hoffset="['160','110','40','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['160','160','190','210']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
 						data-basealign="slide" 
						data-responsive_offset="on" 
						data-responsive="off">
						<div class="slide-action">
							<a class="btn btn--white btn--bordered btn--rounded" href="#">Get Started</a>
 						</div>
					</div>
				</li>

			</ul>
		</div>
		<!-- END REVOLUTION SLIDER -->
	</div>
	<!-- END OF SLIDER WRAPPER -->
</section>



















<!-- #hero end --> 
<!-- Featured #2
============================================= -->
<section id="featured2" class="featured featured-2 featured-5 pt-90 pb-50">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8">
			<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="heading heading-1 mb-60">
                        <h2 class="heading--title">We Compare the Trusted Exchanges Over the Internet.</h2>
                    </div>
                </div><!-- .col-md-12 end -->
            </div>
            <div class="row">
			<!-- Feature Card #1 -->
			<div class="col-xs-12 col-sm-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
				<div class="feature-card">
					<div class="feature-card-icon pt-10">
						<i class="icon-lock"></i>
					</div>
					<div class="feature-card-content">
						<h3 class="feature-card-title">REGISTER ACCOUNT</h3>
						<p  class="feature-card-desc">Fill in the quick registration form or use the normal page. Please do not forget to include your payment data.</p>
					</div>
				</div>
			</div><!-- .col-md-6 end -->
			<!-- Feature Card #2 -->
			<div class="col-xs-12 col-sm-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
				<div class="feature-card">
					<div class="feature-card-icon">
						<i class="icon-search"></i>
					</div>
					<div class="feature-card-content">
						<h3 class="feature-card-title">MAKE A DEPOSIT</h3>
						<p  class="feature-card-desc">Making an investment with Oscar Bitcoin cloud platform  is easy. Once you are a member you, log in to your account and choose Deposit Funds.</p>
					</div>
				</div>
			</div><!-- .col-md-6 end -->
			<!-- Feature Card #3 -->
			<div class="col-xs-12 col-sm-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
				<div class="feature-card">
					<div class="feature-card-icon">
						<i class="icon-recycle"></i>
					</div>
					<div class="feature-card-content">
						<h3 class="feature-card-title">RECEIVE EARNINGS</h3>
						<p  class="feature-card-desc">There are two daily plans and four term plans. Earnings are credited 24 hours after the time of deposit and paid instantly.</p>
					</div>
				</div>
			</div><!-- .col-md-6 end -->
		</div>
		<!-- .row end -->
			</div><!-- .col-md-8 end -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="bitcoin-calculator mb-30"></div>
				<div class="clearfix"></div>
				<div class="bitcoin-pricing mb-20"></div>
				<p class="italic">* Price & chart conversion through BTC</p>
			</div><!-- .col-md-4 end -->
		</div><!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #featured2 end -->







<!-- Counter #1
============================================= -->
<section id="counter1" class="counter counter-1 bg-theme">
	<div class="container">
		<div class="row">
			<!-- count #1 -->
			<!-- <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="count-box text-center">
					<div class="counting"><?php $class->PAYtotal_users_online(); ?></div>
					<div class="count-title">DAYS ONLINE</div>
				</div>
			</div> -->
			<!-- .col-md-3 end -->
			
			<!-- count #2 -->
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="count-box text-center">
					<div class="counting"><?php $class->PAY_total_users(); ?></div>
					<div class="count-title">TOTAL INVESTORS</div>
				</div>
			</div>
			<!-- .col-md-3 end -->
			
			<!-- count #3 -->
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="count-box text-center">
					<div class="counting"><?php $class->PAY_index_depost(); ?></div>
					<div class="count-title">TOTAL INVESTMENTS</div>
				</div>
			</div>
			<!-- .col-md-3 end -->
			
			<!-- count #4 -->
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="count-box text-center">
					<div class="counting"><?php $class->PAY_index_WITH(); ?></div>
					<div class="count-title">TOTAL WITHDRAWN</div>
				</div>
			</div>
			<!-- .col-md-3 end -->

		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #counter1 end -->
<!-- Footer #1







============================================= -->
<section id="featured3" class="featured featured-3  pb-0">
    <div class="bg-section">
        <img src="assets/images/background/6.jpg" alt="background">
    </div>
    <div class="container">
        <div class="row">
            <!-- Feature Card #1 -->
            <div class="col-sm-12 col-sm-12 col-md-12 wow fadeIn" data-wow-delay="100ms">
                <div class="feature-card">
                    <div class="feature-card-icon wow fadeInUp">
                        <i class="icon-briefcase"></i>
                    </div>
                    <div class="feature-card-content " style="margin-top: -70px;">
                        <h3 class="feature-card-title wow fadeInLeft">WELCOME TO OUR COMPANY!</h3>
                        <p class="feature-card-desc wow fadeInLeft">
                        Oscar Bitcoin cloud platform  serves large scale investors from Northern Europe and North America.Oscar Bitcoin cloud platform , offers the opportunity to small scale investors to take part in the trading on the world financial markets and earn significant profits.
                        <a href="#" class="read--more"><i class="fa fa-plus"></i>GO TO SERVICES</a>
                    </div>
                </div>
            </div>
         </div>
        <!-- .row end -->
		
    </div>
    <!-- .container end -->
</section>
<!-- #featured3 end -->





<!-- Pricing Table #1
============================================= -->
<section id="pricing1" class="pricing pricing-1 bg-gray pb-90">
	<div class="container">
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="heading heading-1 text--center mb-70">
					<p class="heading--subtitle">Invest Now!</p>
					<h2 class="heading--title">INVESTMENT PLATFORMS</h2>
					<p class="heading--desc mb-0">
					<!-- Invest now with us to earn every day and forever in your wallet. We accept Investment from all over the world. -->
				</p>
				</div>
			</div><!-- .col-md-8 end -->
		</div><!-- .row end -->
		<div class="row">
			<!-- Pricing Packge #1
			============================================= -->
			<div class="col-xs-12 col-sm-12 col-md-4 price-table wow fadeInUp" data-wow-delay="100ms">
				<div class="pricing-panel">
					<!--  Pricing heading  -->
					<div class="pricing--heading text--center">
						<div class="pricing--icon">
							<img src="assets/images/icons/BitcoinIcon4.png" alt="Bitcoin Icon">
						</div>
						<h4>SILVER PLAN</h4>
						<p>4<span class="currency">%</span></p>
						<!--  Pricing heading  -->
					<div class="pricing--desc">
						From $100 - $5,000<br /><br />
						After 24 Hours<br /><br />
					</div>
					<!--  Pricing Footer  -->
						
						<a class="btn btn--secondary btn--bordered btn--rounded" href="#">Invest Now</a>
					</div>
				</div>
			</div>
			<!-- .pricing-table End -->
			
			<!-- Pricing Packge #2
			============================================= -->
			<div class="col-xs-12 col-sm-12 col-md-4 price-table pricing-active  wow fadeInUp" data-wow-delay="200ms">
				<div class="pricing-panel">
					<!--  Pricing heading  -->
					<div class="pricing--heading text--center">
						<div class="pricing--icon">
							<img src="assets/images/icons/BitcoinIcon5.png" alt="Bitcoin Icon">
						</div>
						<h4>DIAMOND PLAN</h4>
						<p>15<span class="currency">%</span></p>

						<div class="pricing--desc">
						From $20,000 - infinity<br /><br />
						After 48 Hours<br /><br />
					</div>

						<a class="btn btn--white btn--bordered btn--rounded" href="#">Invest Now</a>
					</div>
				</div>
			</div>
			<!-- .pricing-table End -->
			
			<!-- Pricing Packge #3
			============================================= -->
			<div class="col-xs-12 col-sm-12 col-md-4 price-table wow fadeInUp" data-wow-delay="300ms">
				<div class="pricing-panel">
					<!--  Pricing heading  -->
					<div class="pricing--heading text--center">
						<div class="pricing--icon">
							<img src="assets/images/icons/BitcoinIcon4.png" alt="Bitcoin Icon">
						</div>
						<h4>GOLD PLAN</h4>
						<p>10<span class="currency">%</span></p>
						<div class="pricing--desc">
						From $5,000 - $20,000<br /><br />
						After 48 Hours<br /><br />
					</div>
						<a class="btn btn--secondary btn--bordered btn--rounded" href="#">Invest Now</a>
					</div>
					
				</div>
			</div>
			<!-- .pricing-table End -->
 		</div><!-- .row end -->
	
	</div><!-- .container end -->
</section><!-- #pricing1 end -->





<!-- Blog Grid
======================================= -->
<section id="blog" class="blog blog-grid pb-60">
	<div class="container">
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="heading heading-3 mb-50 text--center">
					<h2 class="heading--title">LIVE STOCK MARKET</h2>
				</div>
			</div><!-- .col-md-6 end -->
		</div>
		<div class="row">
			<!-- Blog Entry #1 -->
			<div class="col-xs-12 col-sm-12 col-md-12 wow fadeInUp" data-wow-delay="100ms">
				<div class="blog-entry">
					<iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0"></iframe>
				</div>
				<!-- .blog-entry end -->
			</div>
 		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #blog end -->



<!-- Featured #3
============================================= -->
<section id="featured3" class="featured featured-3  pb-0" >
    <div class="bg-section">
        <img src="assets/images/background/6.jpg" alt="background">
    </div>
    <div class="container" style="margin-top: -70px;">
        <div class="row">
            <!-- Feature Card #1 -->
            <div class="col-xs-12 col-sm-4 col-md-4 wow fadeIn" data-wow-delay="100ms">
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <i class="icon-briefcase"></i>
                    </div>
                    <div class="feature-card-content">
                        <h3 class="feature-card-title">Sign Up For Free</h3>
                        <p class="feature-card-desc">Create a digital currency wallet for free, where you can securely store all your digital currency.</p>
                        <!-- <a href="#" class="read--more"><i class="fa fa-plus"></i>Read More</a> -->
                    </div>
                </div>
            </div>
            <!-- .col-md-4 end -->
            <!-- Feature Card #2 -->
            <div class="col-xs-12 col-sm-4 col-md-4 wow fadeIn" data-wow-delay="200ms">
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <i class="icon-wallet"></i>
                    </div>
                    <div class="feature-card-content">
                        <h3 class="feature-card-title">Create Your Wallet</h3>
                        <p class="feature-card-desc">Bitcoin is received, stored, and sent using Bitcoin Wallet’. Download official Bitcoin Wallet for free.</p>
                        <!-- <a href="#" class="read--more"><i class="fa fa-plus"></i>Read More</a> -->
                    </div>
                </div>
            </div>
            <!-- .col-md-4 end -->
            <!-- Feature Card #3 -->
            <div class="col-xs-12 col-sm-4 col-md-4 wow fadeIn" data-wow-delay="300ms">
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <i class="icon-bargraph"></i>
                    </div>
                    <div class="feature-card-content">
                        <h3 class="feature-card-title">Buy & Sell Digital Currency</h3>
                        <p class="feature-card-desc">Buy some Bitcoin, Ethereum, or any other Digital Currency to begin using the future of money.</p>
                        <!-- <a href="#" class="read--more"><i class="fa fa-plus"></i>Read More</a> -->
                    </div>
                </div>
            </div>
            <!-- .col-md-4 end -->
         </div>
        <!-- .row end -->
		
    </div>
    <!-- .container end -->
</section>
<!-- #featured3 end -->

<!-- Testimonial #1
============================================= -->
<section id="testimonial1" class="testimonial testimonial-1 pt-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 wow fadeInUp" data-wow-delay="100ms">
				 <div id="testimonial-wide" class="carousel carousel-navs" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
					<?php $class->PAY_testimonyINDEX(); ?>
					
					
					
					
				</div>
			</div><!-- .col-md-12 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- #testimonial1 end -->



<section id="cta1" class="cta cta-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9">
                <h3>Take Your First Steps to Becoming an investor Today!</h3>
            </div>
            <!-- .col-md-9 -->
            <div class="col-xs-12 col-sm-12 col-md-3 text-right">
                <a href="login.php" class="btn btn--white btn--bordered btn--rounded">Get Started</a>
            </div>
            <!-- .col-md-3 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>



<!-- Consultation #1
============================================= -->
<section id="consultation" class="consultation consultation-1 pb-0">
	<div class="bg-section">
		<img src="assets/images/background/7.jpg" alt="Background"/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-2 mb-50">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6 wow flipInX" data-wow-delay="100ms">
							<!--<h2 class="heading--title text-white"><span class="text-theme">LATEST</span><span class="text-white"> DEPOSIT</span></h2>-->
						</div>


						<div class="col-xs-6 col-sm-6 col-md-6 wow flipInX" data-wow-delay="100ms">
							<!--<h2 class="heading--title text-white"><span class="text-theme">LATEST</span><span class="text-white"> WITHDRAWAL</span></h2>-->
						</div>


					</div><!-- .row end -->
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
						    	<h2 class="heading--title text-white"><span class="text-theme">LATEST</span><span class="text-white"> DEPOSIT</span></h2>
							<div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Reg. Date</th>
                                        <th>Deposit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php $class->PAY_showDepositINDEX(); ?>
                                   <!--  <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <br />
                        </div>
						</div>








						<div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight" data-wow-delay="200ms">
						    <h2 class="heading--title text-white"><span class="text-theme">LATEST</span><span class="text-white"> WITHDRAWAL</span></h2>
							<div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Reg. Date</th>
                                        <th>Deposit</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                	<?php $class->PAY_showWITHDRAWINDEX(); ?>
                                   <!--  <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>

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
<section id="clients1" class="clients clients-1 pb-85 bg-gray">
	<div class="container">
		<div class="row row-clients wow fadeInUp" data-wow-delay="100ms">
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



<!-- Featured #4
============================================= -->
<section id="featured4" class="featured featured-3 featured-4 bg-overlay bg-overlay-dark5 pb-0">
    <div class="bg-section"><img src="assets/images/background/3.jpg" alt="background"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                <div class="heading mb-60">
                    <h2 class="heading--title color-white">QUICK QUESTION</h2>
                    <p class="heading--desc color-white">COMMON QUESTIONS</p>
                </div>
                <!-- Feature Card #1 -->
                <div class="feature-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-card-icon">
                        <img src="assets/images/icons/BitcoinIcon1.png" alt="icon">
                    </div>
                    <div class="feature-card-content">
                        <h3 class="feature-card-title">How fast are payments processed?</h3>
                        <p class="feature-card-desc">All withdrawals to BitCoin are processed instantly.</p>
                    </div>
                </div>
                <!-- feature-card end -->
                <!-- Feature Card #2 -->
                <div class="feature-card wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-card-icon">
                        <img src="assets/images/icons/BitcoinIcon2.png" alt="icon">
                    </div>
                    <div class="feature-card-content">
                        <h3 class="feature-card-title">How do I open an account?</h3>
                        <p class="feature-card-desc">Please click here: Sign Up, fill out the form and click Create Account.</p>
                    </div>
                </div>
                <!-- feature-card end -->
                <!-- Feature Card #3 -->
                <div class="feature-card wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-card-icon">
                        <img src="assets/images/icons/BitcoinIcon3.png" alt="icon">
                    </div>
                    <div class="feature-card-content">
                        <h3 class="feature-card-title">Which e-currencies do you accept?</h3>
                        <p class="feature-card-desc">We accept Bitcoin only <a href=".www.blockchain.info">www.blockchain.info</a> </p>
                    </div>
                </div>
                <!-- feature-card end -->
            </div>
            <!-- .col-md-5 end -->            
            <div class="col-xs-12 col-sm-12 col-md-6 pr-0 wow fadeInRight" data-wow-delay="100ms">
               	<div class="featured-img">
					<img src="assets/images/mockups/mockup-2.png" alt="chart">
				</div>
            </div>
            <!-- .col-md-7 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #featured4 end -->
<p>Translate this page:</p>

<div id="google_translate_element"></div>
 <script type="text/javascript"> 
   function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<p>You can translate the content of this page by selecting a language in the select box.</p>

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
						<p>Oscar Bitcoin cloud platform  offers investors 3 investment plans for a minimum investment of $100 USD. The plans consist of 2 daily paying plans.</p>
						<div class="copyright">
							<a target="_blank" href="https://templateshub.net">oscarbitcoincloudplatform.com</a>
						</div>
					</div>
				</div><!-- .col-md-3 end -->
				<div class="col-xs-12 col-sm-4 col-md-2 footer--widget widget-links">
					<div class="widget-title">
						<h5>Company</h5>
					</div>
					<div class="widget-content">
						<ul>
							<li><a href="about-us.php">About Us</a></li>
							<li><a href="news.php">News</a></li>
							<li><a href="signup.php">Sign Up</a></li>
						</ul>
					</div>
				</div><!-- .col-md-2 end -->
				
				<div class="col-xs-12 col-sm-4 col-md-2 footer--widget widget-links">
					<div class="widget-title">
						<h5>Help & Support</h5>
					</div>
					<div class="widget-content">
						<ul>
							<li><a href="faq.php">FAQs</a></li>
							<li><a href="contact-us.php">Contact Us</a></li>
							<li><a href="login.php">Login</a></li>
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

				<div class="col-xs-12 col-sm-4 col-md-2 footer--widget widget-links">
					<div class="widget-title">
						<h5>How To</h5>
					</div>
					<div class="widget-content">
						<ul>
							<li><a href="#">call -  Bitcoin</a></li>
							<li><a href="#">Buy Ethereum</a></li>
							<li><a href="#">Buy Litecoin</a></li>
						</ul>
					</div>
				</div><!-- .col-md-2 end -->
				<div class="clearfix"></div>
			</div>
		</div><!-- .container end -->
	</div><!-- .footer-widget end -->
	
	
	<!-- Copyrights
	============================================= -->
	
</footer>









<!-- 

<div><div><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0"></iframe></div><div ><a href="https://coinlib.io" target="_blank">Cryptocurrency Prices</a>&nbsp;Coin cloud miners</div></div> -->










<div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>

 </div><!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/bitcoinCalculators.js"></script>
<script src="assets/js/bitcoinPrice.js"></script>
<script src="assets/js/bitcoinChart.js"></script>
<script src="assets/js/functions.js"></script>
<!-- RS5.0 Core JS Files -->
<script src="assets/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<!-- RS Configration JS Files -->
<script src="assets/js/rsconfig.js"></script>

<!-- Begin of Chaport Live Chat code -->
<script type="text/javascript">
    (function(w,d,v3){
    w.chaportConfig = {
    appId : '603c231cffa60458253da469'
    };
    
    if(w.chaport)return;v3=w.chaport={};v3._q=[];v3._l={};v3.q=function(){v3._q.push(arguments)};v3.on=function(e,fn){if(!v3._l[e])v3._l[e]=[];v3._l[e].push(fn)};var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://app.chaport.com/javascripts/insert.js';var ss=d.getElementsByTagName('script')[0];ss.parentNode.insertBefore(s,ss)})(window, document);
    </script>
    <!-- End of Chaport Live Chat code -->
</body>

</html>