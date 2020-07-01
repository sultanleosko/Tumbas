<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="theme-color" content="#3ed2a7">
		
		<link rel="shortcut icon" href="./favicon.png" />
		
		<title>Tumbas - Register</title>
		
		<link href="https://fonts.googleapis.com/css?family=Roboto%7cRubik:300,400" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		
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

						<form id="regForm" action="<?php echo site_url(); ?>general/register" method="post">
							<?php
	                            if(!empty($this->session->flashdata('notif_register'))) {
	                                echo $this->session->flashdata('notif_register');
	                            }
	                        ?>
						  	<!--<h2 class="my-0 blank-space pb-40 pt-20" data-fittext="true" data-fittext-options='{ "compressor": 0.6, "maxFontSize": 45, "minFontSize": 48 }'>
								<strong>Create Account Agen</strong>
							</h2>-->
						  	<div class="tab">
						  		<p class="font-weight-bold">Hello, what's your name?</p>
						  		<div class="form-group">
									<input class="form-control bg-athens-gray px-4" type="text" name="namadepan" placeholder="First Name" required>
								</div>
								<div class="form-group">
									<input class="form-control bg-athens-gray px-4" type="text" name="namabelakang" placeholder="Last Name" required>
								</div>
						  	</div>
						  	<!--<div class="tab">
						  		<p class="font-weight-bold">What's your gender?</p>
						  		<div class="inputGroup">
								    <input class="input-checkbox" id="radio1" name="radio" type="radio"/>
								    <label for="radio1">&nbsp;Male</label>
								</div>
								<div class="inputGroup">
								    <input class="input-checkbox" id="radio2" name="radio" type="radio"/>
								    <label for="radio2">&nbsp;Female</label>
								</div>
								<div class="inputGroup mb-25">
								    <input class="input-checkbox" id="radio3" name="radio" type="radio"/>
								    <label for="radio3">&nbsp;Rather not say</label>
								</div>
						  	</div>-->
						  	<div class="tab">
						  		<p class="font-weight-bold">What's your restaurant?</p>
						  		<div class="form-group">
									<input class="form-control bg-athens-gray px-4" type="text" name="restoname" placeholder="Restaurant Name" required>
								</div>
								<div class="form-group">
									<input class="form-control bg-athens-gray px-4" type="text" name="restoaddress" placeholder="Restaurant Address" required>
								</div>
						  	</div>
						  	<div class="tab">
						  		<p class="font-weight-bold">What's your email?</p>
						  		<div class="form-group">
									<input class="form-control bg-athens-gray px-4" type="text" name="email" placeholder="Email" required>
								</div>
						  	</div>
						  	<div class="tab">
						  		<p class="font-weight-bold">What's your username will be?</p>
						  		<div class="form-group">
									<input class="form-control bg-athens-gray px-4" type="text" name="username" placeholder="Username" required>
								</div>
							</div>
						  	<div class="tab">
						  		<p class="font-weight-bold">What's your password will be?</p>
						  		<div class="form-group">
									<input class="form-control bg-athens-gray px-4" type="password" name="password" placeholder="Password" required>
								</div>
								<div class="form-group">
									<input class="form-control bg-athens-gray px-4" type="password" name="repassword" placeholder="Repassword">
								</div>
								<!--
								<div class="form-group">
									<input class="form-control bg-athens-gray px-4" type="password" name="repassword" placeholder="Repassword" required>
								</div>
								-->
						  	</div>
						  	<!--<div class="tab">
						  		<p style="color: #606060;" class="font-weight-bold font-size-19">Tanggal Lahir Anda?</p>
						  		<p style="color: #606060;">Tanggal Lahir</p>
							    <p><input type="date" placeholder="Tanggal Lahir" oninput="this.className = ''" name="tanggal_lahir"></p>
						  	</div>
						  	<div class="tab">
						  		<div class="inputGroup">
								    <input class="input-checkbox" id="option1" name="option1" type="checkbox"/>
								    <label for="option1">Mobil</label>
								</div>
								<div class="inputGroup">
									<input class="input-checkbox" id="option2" name="option2" type="checkbox"/>
								    <label for="option2">Motor</label>
								</div>
								<div class="inputGroup">
								    <input class="input-checkbox" id="option3" name="option3" type="checkbox"/>
								    <label for="option3">Lain Lain</label>
								</div>
								<div class="inputGroup mb-20">
									<input class="input-checkbox" id="option4" name="option4" type="checkbox"/>
								    <label for="option4">Tidak Ada</label>
								</div>
						  	</div>
						  	<div class="tab">
						  		<p style="color: #606060;" class="font-weight-bold font-size-19">Upload Foto KTP</p>
							    <p><input type="file"></p>
						  	</div>-->
						 	<div class="text-center">
						      	<button class="btn btn-default circle btn-bordered text-uppercase font-weight-bold border-thin font-size-14 lh-15 px-4 py-2" type="button" id="prevBtn" onclick="nextPrev(-1)">Back</button>
						      	<input class="btn btn-default circle btn-bordered text-uppercase font-weight-bold border-thin font-size-14 lh-15 px-4 py-2 mx-0" type="submit" name="submit_daftar" id="nextBtn" onclick="nextPrev(1)" value="Next">

							    <!--<div style="float: left">
							    	* <a style="text-decoration: underline;" href="#modal-1" data-lity="#modal-1">Syarat dan Ketentuan Agen</a>
							    </div>-->
						  	</div>
						  	<div class="mt-40" style="text-align: center;">
							    <span class="step"></span>
							    <span class="step"></span>
							    <span class="step"></span>
							    <span class="step"></span>
							    <span class="step"></span>
						  	</div>
						  	<div class="text-center mt-4">
						  		<!--<p class="font-size-12 lh-15">By signing up, you agree to Tumbas's <a href="#">Term of Services</a> and have read Tumbas's <a href="#">Privacy Policy</a></p>-->
								<hr>
								<p class="font-size-12">Already have Tumbas's account? <a href="<?php echo base_url(); ?>general/laman_login">Sign In</a></p>
						  	</div>

						  	<div id="modal-1" class="lqd-modal lity-hide">
								<div class="lqd-modal-inner">
									<div class="lqd-modal-head"></div>
									<div class="lqd-modal-content">
										<div class="row">
											<div class="lqd-column col-md-12 px-4 pt-45 pb-30">
												<div class="row d-flex flex-wrap align-items-center">
													<div class="lqd-column col-md-6 col-md-offset-1">
														<header class="fancy-title">
															<h2 class="font-weight-bold">Syarat dan Ketentuan</h2>
														</header>
													</div>
												</div>
					
												<div class="row">
													<div class="lqd-column col-md-10 col-md-offset-1">
														<div class="row d-flex flex-wrap">
															<div class="lqd-column col-md-12 mb-20">
																<p class="font-weight-bold">Pasal 1<br>Penjelasan Para Pihak</p>
																<p>1. Pihak pertama adalah Caz Indonesia, Pihak kedua adalah yang akan menyetujui syarat dan ketentuan ini.</p>
																<p class="font-weight-bold">Pasal 2<br>Penjelasan Akad</p>
																<p class="lh-20">
																	1. Akad yang berlaku antara pihak pertama dan kedua adalah akad wakalah (keagenan)<br>
																	2. Akad ini bertujuan untuk menghindari transaksi jual-beli yang mana penjual tidak dalam memiliki 	(menguasai secara penuh) produk atau objek jual belinya, maka jual-beli ini adalah jual beli yang 	diharamkan oleh syariat Islam.<br>
																	3. Oleh sebab itu maka pihak kedua wajib tunduk kepada syarat dan ketentuan yang diberlakukan 	oleh pihak pertama
																</p>
																<p class="font-weight-bold">Pasal 3<br>Hak dan Kewajiban Pihak Kedua</p>
																<p class="lh-20">
																	1. Pihak kedua wajib mematuhi segala syarat dan ketentuan yang diajukan pihak pertama.<br>
																	2. Pihak kedua wajib menjaga kualitas produk tetap bagus<br>
																	3. Pihak kedua wajib mengetahui cara penyimpanan dan pengetahuan seputar produk Caz Indonesia (Pihak pertama)<br>
																	4. Pembelian pertama oleh pihak kedua adalah minimal 15 botol cazmilk maupun cazcoffee. Untuk pembelian selanjutnya tidak ada minimal kuantitasnya.<br>
																	5. Pihak kedua wajib membayar biaya transport pengantaran produk kepada pihak pertama kecuali ada beberapa kemudahan yang ditawarkan pihak pertama, seperti:<br>

																</p>
															</div>
															<div class="lqd-column col-md-6">
																<p>Setuju dengan Syarat dan Ketentuan Agen</p>
															</div>
														</div>
														<div class="contact-form-result hidden"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="lqd-modal-foot"></div>
								</div>
							</div>
						</form>
					</div>
				</section>
			</main>
		</div>

		<script src="<?php echo base_url(); ?>assets/vendors/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/theme-vendors.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/theme.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/liquidAjaxContactForm.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/liquidAjaxMailchimp.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/js/wizard-form.js"></script>
	</body>
</html>