<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="theme-color" content="#3ed2a7">
		
		<link rel="shortcut icon" href="./favicon.png" />
		
		<title>Tumbas</title>
		
		<link href="https://fonts.googleapis.com/css?family=Roboto%7cRubik:300,400" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/liquid-icon/liquid-icon.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-vendors.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes/opus.css" />

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/edit.css" />
		
		<!-- Head Libs -->
		<script async src="<?php echo base_url(); ?>assets/vendors/modernizr.min.js"></script>
		
	</head>

	<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="center" data-mobile-nav-style="minimal" data-mobile-nav-scheme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">
		<div id="wrap">
			<header class="main-header main-header-overlay" data-sticky-header="true" data-sticky-options='{ "stickyTrigger": "first-section" }'>
				<div class="mainbar-wrap">
					<div class="container mainbar-container">
						<div class="mainbar">
							<div class="row mainbar-row align-items-lg-stretch px-4">
								<div class="col-auto">
									<div class="navbar-header">
										<a class="navbar-brand" href="<?php echo base_url(); ?>general" rel="home">
											<span class="navbar-brand-inner">
												<img class="logo-dark" src="<?php echo base_url(); ?>assets/img/logo/tumbas-dark.svg" alt="Ave HTML Template">
												<img class="logo-sticky" src="<?php echo base_url(); ?>assets/img/logo/tumbas-dark.svg" alt="Ave HTML Template">
												<img class="mobile-logo-default" src="<?php echo base_url(); ?>assets/img/logo/tumbas-dark.svg" alt="Ave HTML Template">
												<img class="logo-default" src="<?php echo base_url(); ?>assets/img/logo/tumbas.svg" alt="Tumbas">
											</span>
										</a>
										<button type="button" class="navbar-toggle collapsed nav-trigger style-mobile" data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false" data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
											<span class="sr-only">Toggle navigation</span>
											<span class="bars">
												<span class="bar"></span>
												<span class="bar"></span>
												<span class="bar"></span>
											</span>
										</button>
									</div><!-- /.navbar-header -->
								</div><!-- /.col -->
								
								<div class="col px-6">
									<div class="collapse navbar-collapse" id="main-header-collapse">
										<ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-start" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }'>
											<li>
												<a href="<?php echo base_url(); ?>general">
													<span class="link-icon"></span>
													<span class="link-txt">
														<span class="link-ext"></span>
														<span class="txt">
															Home
															<span class="submenu-expander">
																<i class="fa fa-angle-down"></i>
															</span>
														</span>
													</span>
												</a>
											</li>
											<li>
												<a href="<?php echo base_url(); ?>general">
													<span class="link-icon"></span>
													<span class="link-txt">
														<span class="link-ext"></span>
														<span class="txt">
															Harga
															<span class="submenu-expander">
																<i class="fa fa-angle-down"></i>
															</span>
														</span>
													</span>
												</a>
											</li>
											<li>
												<a href="<?php echo base_url(); ?>general">
													<span class="link-icon"></span>
													<span class="link-txt">
														<span class="link-ext"></span>
														<span class="txt">
															Blog
															<span class="submenu-expander">
																<i class="fa fa-angle-down"></i>
															</span>
														</span>
													</span>
												</a>
											</li>
											<li>
												<a href="<?php echo base_url(); ?>general/laman_faq">
													<span class="link-icon"></span>
													<span class="link-txt">
														<span class="link-ext"></span>
														<span class="txt">
															FAQ
															<span class="submenu-expander">
																<i class="fa fa-angle-down"></i>
															</span>
														</span>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>

								<div class="col text-right">
									<?php if($this->session->userdata('login') == TRUE) { ?>
										<div class="header-module">
											<ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-end" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }'>
												<li>
													<?php if($this->session->userdata('tipepengguna') == "kasir") { ?>
														<a href="<?php echo base_url(); ?>general/laman_kasir">
													<?php } else { ?> 
														<a href="<?php echo base_url(); ?>general/laman_manajer">
													<?php } ?>
														<span class="link-icon"></span>
														<span class="link-txt">
															<span class="link-ext"></span>
															<span class="txt">
																Welcome, <?php echo $this->session->userdata('namadepan'); ?>
															</span>
														</span>
													</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>general/logout">
														<span class="link-icon"></span>
														<span class="link-txt">
															<span class="link-ext"></span>
															<span class="txt">
																Logout
															</span>
														</span>
													</a>
												</li>
											</ul>
										</div>										
									<?php } else { ?>
										<div class="header-module">
											<ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-end" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }'>
												<li>
													<a href="<?php echo base_url(); ?>general/laman_login">
														<span class="link-icon"></span>
														<span class="link-txt">
															<span class="link-ext"></span>
															<span class="txt">
																Sign In
															</span>
														</span>
													</a>
												</li>
											</ul>
										</div>
										<div class="header-module">
											<a href="<?php echo base_url(); ?>general/laman_register" class="btn btn-solid text-uppercase btn-sm circle border-thin btn-white font-size-12 text-uppercase ltr-sp-15 px-2">
												<span>
													<span class="btn-txt">Join Us</span>
												</span>
											</a>
										</div>
										<div class="header-module">
											<a href="<?php echo base_url(); ?>general/laman_register" class="btn btn-solid text-uppercase btn-sm circle border-thin btn-white font-size-12 text-uppercase ltr-sp-15 px-2">
												<span>
													<span class="btn-txt">Join Us</span>
												</span>
											</a>
										</div>
									<?php } ?>
								</div>
							</div><!-- /.mainbar-row -->
						</div><!-- /.mainbar -->
					</div><!-- /.mainbar-container -->
				</div><!-- /.mainbar-wrap -->
			</header><!-- /.main-header -->

			<main id="content" class="content">

				<section class="vc_row py-5 fullheight d-flex flex-wrap align-items-center bg-cover bg-center-top" style="background-image: url(<?php echo base_url(); ?>assets/img/2418.jpg);">
					<div class="container">
						<div class="row">

							<div
								class="lqd-column col-md-10 col-md-offset-1 text-center"
								data-custom-animations="true"
								data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"150", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'
							>

								<h2
									class="text-white mt-0 mb-30"
									data-split-text="true"
									data-split-options='{"type":"lines"}'
									data-fittext="true"
									data-fittext-options='{"compressor": 0.75, "maxFontSize": 60}'>Mengatur Kasir lebih Mudah <br> dengan <b>Tumbas</b>
								</h2>

								<div class="row">
									<div class="lqd-column col-md-10 col-md-offset-1 px-5">
										<p class="font-size-18 lh-165 text-fade-white-07 px-md-7 mb-50">Kami membantu bisnis Anda mempercepat proses penjualan dengan aplikasi kasir Tumbas</p>

										<!--<a href="#" target="_blank" class="btn btn-solid text-uppercase btn-md circle border-thin font-size-13 text-uppercase ltr-sp-15 px-3 lh-175 py-1 mb-2">
											<span>
												<span class="btn-txt">Discover Ave</span>
											</span>
										</a>

										<a href="#" target="_blank" class="btn btn-bordered text-uppercase btn-md circle border-thin btn-icon-left btn-white-fade-border font-size-13 text-uppercase ltr-sp-15 px-3 lh-175 py-1 mb-2">
											<span>
												<span class="btn-txt">See how it works</span>
												<span class="btn-icon">
													<i class="fa fa-play"></i>
												</span>
											</span>
										</a>-->
									</div>
								</div>
							</div><!-- /.col-md-8 col-md-offset-2 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</section>

		<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCUnWOSK2b5WtvMOAI8j55OHhS_sNv2VfA"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/theme-vendors.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/theme.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/liquidAjaxContactForm.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/liquidAjaxMailchimp.min.js"></script>

	</body>
</html>