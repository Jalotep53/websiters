<?php // 
/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>RS Sint Lucia</title>
		
		<!-- Favicon -->
        <link rel="icon" href="theme/mediplus/img/icon.ico">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="theme/mediplus/css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="theme/mediplus/css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="theme/mediplus/css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="theme/mediplus/css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="theme/mediplus/css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="theme/mediplus/css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="theme/mediplus/css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="theme/mediplus/css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="theme/mediplus/css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="theme/mediplus/css/normalize.css">
        <link rel="stylesheet" href="theme/mediplus/style.css">
        <link rel="stylesheet" href="theme/mediplus/css/responsive.css">
		
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		
		
		
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>+62 852-6190-2900</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:rssintlucia@gmail.com">rssintlucia@gmail.com</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="theme/mediplus/img/logo_rssl.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="#">Home </a>
												
											</li>
											<li><a href='<?=Url::base()?>/index.php?r=dokter/index'>Dokter </a></li>
											
											<li><a href="#">Tentang Kami <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="404.html">Profil RS</a></li>
													<li><a href="404.html">Visi Misi</a></li>
													<li><a href="404.html">Lambang</a></li>
													<li><a href="404.html">Struktur Organisasi</a></li>
													<li><a href="404.html">Indikator Mutu</a></li>
													
												</ul>
											</li>
                                                                                        <li><a href="contact.html">Layanan</a></li>
                                                                                        <li><a href="contact.html">Jadwal Dokter</a></li>
											<li><a href="#">Blogs <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="blog-single.html">Blog Details</a></li>
												</ul>
											</li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="appointment.html" class="btn">Book Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		
		<!--/ End Feautes -->
		
		
		<!--/ End service -->
		
			
		<!--/ End Pricing Table -->
		
		
		
		<!-- Start Blog Area -->
		
		<!-- End Blog Area -->
		
		<!-- Start clients -->
		
		<!--/Ens clients -->
		
		<!-- Start Appointment -->
		
		<!-- End Appointment -->
		
		<!-- Start Newsletter Area -->
		
		<!-- /End Newsletter Area -->
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			
                  
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024  |  RS Sint Lucia </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="theme/mediplus/js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="theme/mediplus/js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="theme/mediplus/js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="theme/mediplus/js/easing.js"></script>
		<!-- Color JS -->
		<script src="theme/mediplus/js/colors.js"></script>
		<!-- Popper JS -->
		<script src="theme/mediplus/js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="theme/mediplus/js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="theme/mediplus/js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="theme/mediplus/js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="theme/mediplus/js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="theme/mediplus/js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="theme/mediplus/js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="theme/mediplus/js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="theme/mediplus/js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="theme/mediplus/js/steller.js"></script>
		<!-- Wow JS -->
		<script src="theme/mediplus/js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="theme/mediplus/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="theme/mediplus/js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="theme/mediplus/js/main.js"></script>
    </body>
</html>