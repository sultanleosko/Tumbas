<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="theme-color" content="#3ed2a7">
		
		<link rel="shortcut icon" href="./favicon.png" />
		
		<title>Tumbas - Login</title>
		
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
							<div class="row mainbar-row align-items-lg-stretch">
								<div class="col text-left py-4">
									<div class="header-module">
										<ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-end" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }'>
											<li>
												<a href="<?php echo base_url(); ?>general">
													<span class="link-icon"></span>
													<span class="link-txt">
														<span class="link-ext"></span>
														<span class="txt">
															Back to Home
															<span class="submenu-expander">
																<i class="fa fa-angle-down"></i>
															</span>
														</span>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div><!-- /.col -->
							</div>
						</div>
					</div>
				</div>
			</header>

			<main id="content" class="content">
				<section class="vc_row fullheight d-flex flex-wrap align-items-center" style="background-color: #5683f8;">
					<div class="container">
						<div class="logreg-table logreg-table-minimal logreg-table-shadowed">
							<!--<div class="contact-form contact-form-inputs-filled contact-form-button-circle">-->
								<form action="<?php echo site_url(); ?>general/login" method="post">
									<div class="row">
										<div class="col-md-12">
											<?php
					                            if(!empty($this->session->flashdata('notif_login'))) {
					                                echo $this->session->flashdata('notif_login');
					                            }
					                        ?>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input class="form-control bg-athens-gray px-4" type="text" name="username" placeholder="Username">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input class="form-control bg-athens-gray px-4" type="password" name="password" placeholder="Password">
											</div>
										</div>
										<div class="col-md-12">
											<input class="btn btn-default circle btn-bordered text-uppercase font-weight-bold border-thin font-size-14 lh-15 px-4 py-2 mx-0" type="submit" name="submit_masuk" value="Sign In">
										</div><!-- /.col-md-12 -->
										<div class="col-md-12">
											<hr>
											<p class="font-size-12">Don't have Tumbas's account? <a href="<?php echo base_url(); ?>general/laman_register">Sign Up</a></p>
										</div>
									</div><!-- /.row -->
								</form>
							</div>						
						<!--</div>-->
					</div>
				</section>
			</main>
		</div>

		<script src="<?php echo base_url(); ?>assets/vendors/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/theme-vendors.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/theme.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/liquidAjaxContactForm.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/liquidAjaxMailchimp.min.js"></script>
	</body>
</html>