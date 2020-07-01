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

	<body>
		<main id="content" class="content">
			<section class="vc_row pt-50 fullheight">
				<div class="container">
					<div class="row">
						<div class="lqd-column col-md-12">
							<?php
	                            if(!empty($this->session->flashdata('notifikasi'))) {
	                                echo $this->session->flashdata('notifikasi');
	                            }
	                        ?>
						</div>
						<div class="lqd-column col-md-12">
							<div class="tabs tabs-nav-side tabs-nav-shadowed">
								<ul class="nav tabs-nav manajer" role="tablist">
									<li class="tabs-nav-title">
										<img class="img-circle" src="<?php echo base_url(); ?>assets/img/manager_photo_default.jpg">
									</li>
									<li role="presentation" class="h5 active">
										<a href="#ld-tab-pane-1" aria-expanded="false" aria-controls="ld-tab-pane-1" role="tab" data-toggle="tab">Dashboard</a>
									</li>
									<li role="presentation" class="h5">
										<a href="#ld-tab-pane-2" aria-expanded="false" aria-controls="ld-tab-pane-2" role="tab" data-toggle="tab">Menus</a>
									</li>
									<li role="presentation" class="h5">
										<a href="#ld-tab-pane-3" aria-expanded="false" aria-controls="ld-tab-pane-3" role="tab" data-toggle="tab">Employees</a>
									</li>
									<!--
									<li role="presentation" class="h5">
										<a href="#ld-tab-pane-4" aria-expanded="false" aria-controls="ld-tab-pane-4" role="tab" data-toggle="tab">Transaction</a>
									</li>
									<li role="presentation" class="h5">
										<a href="#ld-tab-pane-5" aria-expanded="false" aria-controls="ld-tab-pane-5" role="tab" data-toggle="tab">Suppliers</a>
									</li>
									<li role="presentation" class="h5">
										<a href="#ld-tab-pane-6" aria-expanded="false" aria-controls="ld-tab-pane-6" role="tab" data-toggle="tab">Account</a>
									</li>
									-->
									<li role="presentation" class="h5">
										<a href="<?php echo base_url(); ?>general/logout">Logout</a>
									</li>
								</ul>

								<div class="tabs-content">
									<div id="ld-tab-pane-1" role="tabpanel" class="tabs-pane pl-md-5 fade active in">
										<div class="row">
											<div class="lqd-column col-xs-12">
												<h2 class="mt-0">Dashboard</h2>

												<div class="row liquid-portfolio-list-row">
													<div class="lqd-column col-md-12">
														<div class="dashjer-table dashjer-table-minimal">
															<h4 class="text-white">Hello Manager, <?php echo $this->session->userdata('namadepan'); ?></h4>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!--
										<div class="row d-flex flex-wrap align-items-center mt-50">
											<div class="lqd-column col-md-3 col-xs-6 text-center">
												<div class="liquid-counter liquid-counter-default liquid-counter-md liquid-counter-has-hover-gradient">
													<div class="liquid-counter-element " data-enable-counter="true" data-counter-options='{"targetNumber":"0","blurEffect":true}'>
														<div class="liquid-counter-element liquid-counter-element-hover">
															<span>0</span>
														</div>
														<span class="text-dark">0</span>
													</div>
													<span class="liquid-counter-text liquid-text-bottom text-dark font-size-18">TRANSACTION</span>
												</div>
											</div>

											<div class="lqd-column col-md-3 col-xs-6 text-center">
												<div class="liquid-counter liquid-counter-default liquid-counter-md liquid-counter-has-hover-gradient">
													<div class="liquid-counter-element " data-enable-counter="true" data-counter-options='{"targetNumber":"0","blurEffect":true}'>
														<div class="liquid-counter-element liquid-counter-element-hover">
															<span>0</span>
														</div>
														<span class="text-dark">0</span>
													</div>
													<span class="liquid-counter-text liquid-text-bottom text-dark font-size-18">MENUS</span>
												</div>
											</div>

											<div class="lqd-column col-md-3 col-xs-6 text-center">
												<div class="liquid-counter liquid-counter-default liquid-counter-md liquid-counter-has-hover-gradient">
													<div class="liquid-counter-element " data-enable-counter="true" data-counter-options='{"targetNumber":"0","blurEffect":true}'>
														<div class="liquid-counter-element liquid-counter-element-hover">
															<span>0</span>
														</div>
														<span class="text-dark">0</span>
													</div>
													<span class="liquid-counter-text liquid-text-bottom text-dark font-size-18">EMPLOYEES</span>
												</div>
											</div>

											<div class="lqd-column col-md-3 col-xs-6 text-center">
												<div class="liquid-counter liquid-counter-default liquid-counter-md liquid-counter-has-hover-gradient">
													<div class="liquid-counter-element " data-enable-counter="true" data-counter-options='{"targetNumber":"0","blurEffect":true}'>
														<div class="liquid-counter-element liquid-counter-element-hover">
															<span>0</span>
														</div>
														<span class="text-dark">0</span>
													</div>
													<span class="liquid-counter-text liquid-text-bottom text-dark font-size-18">SUPPLIERS</span>
												</div>
											</div>
										</div>
										-->
									</div>

									<div id="ld-tab-pane-2" role="tabpanel" class="tabs-pane pl-md-5 fade">
										<div class="row">
											<div class="lqd-column col-xs-12">
												<div class="liquid-filter-items justify-content-between">
													<div class="liquid-filter-items-inner">
														<h2 class="mt-0">Menus</h2>
									
														<ul class="filter-list text-uppercase ltr-sp-1 filter-list-inline size-sm font-weight-bold">
															<li><span><a href="#" data-toggle="modal" data-target="#TambahMenuModal">Add Menu</a></span></li>
														</ul>
													</div>
												</div>

												<div class="row liquid-portfolio-list-row">
													<div class="lqd-column col-md-12">
														<div class="fancy-box fancy-box-offer fancy-box-offer-header">
															<div class="fancy-box-cell fancy-box-header" style="flex-grow: 1.5;">
																<p>Menu Name</p>
															</div>
															<div class="fancy-box-cell" style="flex-grow: 0.5;">
																<p>Qty</p>
															</div>
															<div class="fancy-box-cell">
																<p>Price</p>
															</div>
															<div class="fancy-box-cell">
																<p>&nbsp;</p>
															</div>
														</div>

														<?php foreach ($tabel_menu as $tm) { ?>
															<div class="fancy-box fancy-box-offer fancy-box-heading-sm">
																<div class="fancy-box-cell fancy-box-header" style="flex-grow: 1.5;">
																	<figure class="fancy-box-image">
																		<img src="<?php echo base_url(); ?>/assets/img/<?php echo $tm->foto_menu; ?>" alt="<?php echo $tm->nama_menu; ?>">
																	</figure>
																	<h3>
																		<?php echo $tm->nama_menu; ?>
																		<small><?php echo $tm->kategori; ?></small>
																	</h3>
																</div>

																<div class="fancy-box-cell" data-text="Quantity" style="flex-grow: 0.5;">
																	<h5>
																		<?php echo $tm->kuantitas; ?>
																	</h5>
																</div>
															
																<div class="fancy-box-cell" data-text="Price">
																	<h5>
																		Rp. <?php echo number_format($tm->harga); ?>
																	</h5>
																</div>
																
																<div class="fancy-box-cell" data-text="Availability">
																	<a href="#" class="btn btn-sm circle btn-bordered text-uppercase font-weight-bold lh-15" data-toggle="modal" data-target="#EditMenuModal<?=$tm->id_menu;?>">
																		<span>
																			<span class="btn-txt">
																				<svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																					<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
																					<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
																				</svg>
																			</span>
																		</span>
																	</a>
																	<a href="#" class="btn btn-sm circle btn-bordered text-uppercase font-weight-bold lh-15" data-toggle="modal" data-target="#DeleteMenuModal<?=$tm->id_menu;?>">
																		<span>
																			<span class="btn-txt">
																				<svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																					<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
																					<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
																				</svg>
																			</span>
																		</span>
																	</a>
																</div>
															</div>
														<?php } ?>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div id="ld-tab-pane-3" role="tabpanel" class="tabs-pane pl-md-5 fade">
										<div class="row">
											<div class="lqd-column col-xs-12">
												<div class="liquid-filter-items justify-content-between">
													<div class="liquid-filter-items-inner">
														<h2 class="mt-0">Employees</h2>
									
														<ul class="filter-list text-uppercase ltr-sp-1 filter-list-inline size-sm font-weight-bold">
															<li><span><a href="#" data-toggle="modal" data-target="#TambahKaryawanModal">Add Employee</a></span></li>
														</ul>
													</div>
												</div>
												
												<div class="row liquid-portfolio-list-row">
													<div class="lqd-column col-md-12">
														<div class="fancy-box fancy-box-offer fancy-box-offer-header">
															<div class="fancy-box-cell fancy-box-header" style="flex-grow: 1;">
																<p>Employees Name</p>
															</div>
															<div class="fancy-box-cell" style="flex-grow: 1;">
																<p>Salary</p>
															</div>
															<div class="fancy-box-cell" style="flex-grow: 1.5;">
																<p>&nbsp;</p>
															</div>
														</div>

														<?php foreach ($tabel_karyawan as $tk) { ?>
															<div class="fancy-box fancy-box-offer fancy-box-heading-sm">
																<div class="fancy-box-cell fancy-box-header" style="flex-grow: 1;">
																	<figure class="fancy-box-image">
																		<img src="<?php echo base_url(); ?>/assets/img/<?php echo $tk->foto_kasir ?>" alt="Photo Employee">
																	</figure>
																	<h3>
																		<?php echo $tk->nama_depan ?>
																		<small><?php echo $tk->nama_belakang ?></small>
																	</h3>
																</div>
															
																<div class="fancy-box-cell" data-text="Price" style="flex-grow: 1;">
																	<h5>
																		Rp. <?php echo number_format($tk->gaji) ?>
																	</h5>
																</div>
																
																<div class="fancy-box-cell" data-text="Availability" style="flex-grow: 1.5;">
																	<!--
																	<a href="#" class="btn btn-sm circle btn-bordered text-uppercase font-weight-bold lh-15" data-toggle="tooltip" title="More Info">
																		<span>
																			<span class="btn-txt">
																				<svg class="bi bi-info-circle" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																				  	<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
																				  	<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
																				  	<circle cx="8" cy="4.5" r="1"/>
																				</svg>
																			</span>
																		</span>
																	</a>
																	-->
																	<a href="#" class="btn btn-sm circle btn-bordered text-uppercase font-weight-bold lh-15" data-toggle="modal" data-target="#EditKaryawanModal<?=$tk->id_kasir;?>" title="Edit Employee">
																		<span>
																			<span class="btn-txt">
																				<svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																					<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
																					<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
																				</svg>
																			</span>
																		</span>
																	</a>
																	<a href="#" class="btn btn-sm circle btn-bordered text-uppercase font-weight-bold lh-15" data-toggle="modal" data-target="#DeleteKaryawanModal<?=$tk->id_kasir;?>" title="Delete Employee">
																		<span>
																			<span class="btn-txt">
																				<svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																					<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
																					<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
																				</svg>
																			</span>
																		</span>
																	</a>
																</div>
															</div>
														<?php } ?>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div id="ld-tab-pane-4" role="tabpanel" class="tabs-pane pl-md-5 fade">
										<h2 class="mt-0">Transaction</h2>
										
									</div>

									<div id="ld-tab-pane-5" role="tabpanel" class="tabs-pane pl-md-5 fade">
										<h2 class="mt-0">Suppliers</h2>

									</div>

									<div id="ld-tab-pane-6" role="tabpanel" class="tabs-pane pl-md-5 fade">
										<h2 class="mt-0">Account</h2>

										<div class="dashjer-table dashjer-table-minimal mb-30">
											<h4 class="text-white">Edit Profile</h4>
											<form>
											  	<div class="form-group row">
											    	<p for="inputEmail3" class="col-sm-2 col-form-label">Email</p>
											    	<div class="col-sm-7">
											      		<input type="email" class="form-control" value="" id="inputEmail3" readonly required>
											    	</div>
											  	</div>
											</form>
										</div>
										<div class="dashjer-table dashjer-table-minimal">
											<h4 class="text-white">Membership</h4>
											<p>Nama</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCUnWOSK2b5WtvMOAI8j55OHhS_sNv2VfA"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/theme-vendors.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/theme.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/liquidAjaxContactForm.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/liquidAjaxMailchimp.min.js"></script>

		

		<div class="modal fade" id="TambahKaryawanModal" data-backdrop="static" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" style="overflow: hidden;">
		  	<div class="modal-dialog modal-dialog-centered modal-lg">
			    <div class="modal-content">
				    <div class="modal-header">
				        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Add Employee</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          	<span aria-hidden="true">&times;</span>
				        </button>
				    </div>
				    <?php echo form_open_multipart('general/add_employee'); ?>
					    <div class="modal-body modal-edit">
					    	<div class="row">
					    		<div class="col-md-6">
					    			<div class="form-group form-row">
						       	 		<div class="col-md-6">
						       	 			<label for="first_name">First Name</label>
									    	<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
									  	</div>

									  	<div class="col-md-6">
									  		<label for="last_name">Last Name</label>
									    	<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
									  	</div>
									</div>
									<div class="form-group">
										<label for="email">Email</label>
			    						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
									</div>
									<div class="form-group form-row">
						       	 		<div class="col-md-6">
						       	 			<label for="username">Username</label>
									    	<input type="text" class="form-control" name="username" id="username" placeholder="Username">
									  	</div>

									  	<div class="col-md-6">
									  		<label for="password">Password</label>
									    	<input type="password" class="form-control" name="password" id="password" placeholder="Password">
									  	</div>
									</div>
					    		</div>
					    		<div class="col-md-6">
					    			<div class="form-group">
									    <label for="salary">Salary</label>
								    	<div class="input-group">
										    <div class="input-group-prepend">
										      	<div class="input-group-text">Rp.</div>
										    </div>
											<input type="number" class="form-control" name="salary" id="salary" placeholder="Employee Salary">
										</div>
									</div>
									<div class="form-group">
										<label for="employee_photo">Employee Photo</label>
			    						<input type="file" class="form-control" name="employee_photo">
									</div>
					    		</div>
					    	</div>
					    </div>
					    <div class="modal-footer">
					        <input class="btn btn-default circle btn-bordered text-uppercase font-weight-bold border-thin font-size-14 lh-15 px-4 py-2 mx-0" type="submit" name="submit_addemployee" value="Add Employee">
					    </div>
					</form>
				</div>
		  	</div>
		</div>

		<div class="modal fade" id="TambahMenuModal" data-backdrop="static" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" style="overflow: hidden;">
		  	<div class="modal-dialog modal-dialog-centered">
			    <div class="modal-content">
				    <div class="modal-header">
				        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Add Menu</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          	<span aria-hidden="true">&times;</span>
				        </button>
				    </div>
				    <?php echo form_open_multipart('general/add_menu'); ?>
					    <div class="modal-body modal-edit">
				       	 	<div class="form-group">
							    <label for="menu_name">Menu Name</label>
							    <input type="text" class="form-control" name="menu_name" id="menu_name" placeholder="Menu Name">
							</div>
							<div class="form-group form-row">
								<div class="col-md-6">
								    <label for="menu_price">Price</label>
								    <div class="input-group">
									    <div class="input-group-prepend">
									      	<div class="input-group-text">Rp.</div>
									    </div>
									    <input type="number" class="form-control" name="menu_price" id="menu_price" placeholder="Menu Price">
								  	</div>
							  	</div>

							  	<div class="col-md-6">
								  	<label for="menu_qty">Quantity</label>
									<input type="number" class="form-control" name="menu_qty" id="menu_qty" placeholder="Menu Quantity">
							  	</div>
							</div>
							<div class="form-group">
								<label for="menu_photo">Menu Photo</label>
	    						<input type="file" class="form-control" name="menu_photo">
							</div>
					    </div>
					    <div class="modal-footer">
					        <input class="btn btn-default circle btn-bordered text-uppercase font-weight-bold border-thin font-size-14 lh-15 px-4 py-2 mx-0" type="submit" name="submit_addmenu" value="Add Menu">
					    </div>
					</form>
				</div>
		  	</div>
		</div>

		<?php foreach ($tabel_karyawan as $tk) { ?>
			<div class="modal fade" id="EditKaryawanModal<?=$tk->id_kasir;?>" data-backdrop="static" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" style="overflow: hidden;">
			  	<div class="modal-dialog modal-dialog-centered modal-lg">
				    <div class="modal-content">
					    <div class="modal-header">
					        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Edit Employee</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          	<span aria-hidden="true">&times;</span>
					        </button>
					    </div>
					    <?php echo form_open_multipart(base_url('general/edit_employee/'.$tk->id_kasir)); ?>
						    <div class="modal-body modal-edit">
						    	<div class="row">
						    		<div class="col-md-6">
						    			<div class="form-group form-row">
							       	 		<div class="col-md-6">
							       	 			<label for="first_name">First Name</label>
										    	<input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $tk->nama_depan ?>">
										  	</div>

										  	<div class="col-md-6">
										  		<label for="last_name">Last Name</label>
										    	<input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $tk->nama_belakang ?>">
										  	</div>
										</div>
										<div class="form-group">
											<label for="email">Email</label>
				    						<input type="email" class="form-control" name="email" id="email" value="<?php echo $tk->email ?>">
										</div>
										<div class="form-group form-row">
							       	 		<div class="col-md-6">
							       	 			<label for="username">Username</label>
										    	<input type="text" class="form-control" name="username" id="username" value="<?php echo $tk->username ?>">
										  	</div>

										  	<div class="col-md-6">
										  		<label for="password">Password</label>
										    	<input type="text" class="form-control" name="password" id="password" value="<?php echo $tk->password ?>">
										  	</div>
										</div>
						    		</div>
						    		<div class="col-md-6">
						    			<div class="form-group">
										    <label for="salary">Salary</label>
									    	<div class="input-group">
											    <div class="input-group-prepend">
											      	<div class="input-group-text">Rp.</div>
											    </div>
												<input type="number" class="form-control" name="salary" id="salary" value="<?php echo $tk->gaji ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="employee_photo">Employee Photo</label>
				    						<input type="file" class="form-control" name="employee_photo">
										</div>
						    		</div>
						    	</div>
						    </div>
						    <div class="modal-footer">
						        <input class="btn btn-default circle btn-bordered text-uppercase font-weight-bold border-thin font-size-14 lh-15 px-4 py-2 mx-0" type="submit" name="submit_editemployee" value="Edit Employee">
						    </div>
						</form>
					</div>
			  	</div>
			</div>
		<?php } ?>
		
		<?php foreach ($tabel_menu as $tm) { ?>
			<div class="modal fade" id="EditMenuModal<?=$tm->id_menu;?>" data-backdrop="static" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" style="overflow: hidden;">
			  	<div class="modal-dialog modal-dialog-centered">
				    <div class="modal-content">
					    <div class="modal-header">
					        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Edit Menu</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          	<span aria-hidden="true">&times;</span>
					        </button>
					    </div>
					    <?php echo form_open_multipart(base_url('general/edit_menu/'.$tm->id_menu)); ?>
						    <div class="modal-body modal-edit">
					       	 	<div class="form-group">
								    <label for="menu_name">Menu Name</label>
								    <input type="text" class="form-control" id="menu_name" name="menu_name" value="<?php echo $tm->nama_menu ?>" required>
								</div>
								<div class="form-group form-row">
									<div class="col-md-6">
									    <label for="menu_price">Price</label>
									    <div class="input-group">
										    <div class="input-group-prepend">
										      	<div class="input-group-text">Rp.</div>
										    </div>
										    <input type="number" class="form-control" id="menu_price" name="menu_price" value="<?php echo $tm->harga ?>">
									  	</div>
								  	</div>

								  	<div class="col-md-6">
									  	<label for="menu_qty">Quantity</label>
										<input type="number" class="form-control" id="menu_qty" name="menu_qty" value="<?php echo $tm->kuantitas ?>">
								  	</div>
								</div>
								<div class="form-group">
									<label for="menu_photo">Menu Photo</label>
		    						<input type="file" class="form-control" id="menu_photo" name="menu_photo">
								</div>
						    </div>
						    <div class="modal-footer">
						        <input class="btn btn-default circle btn-bordered text-uppercase font-weight-bold border-thin font-size-14 lh-15 px-4 py-2 mx-0" type="submit" name="submit_editmenu" value="Edit Menu">
						    </div>
						</form>
					</div>
			  	</div>
			</div>
		<?php } ?>

		<?php foreach ($tabel_menu as $tm) { ?>
			<div class="modal fade" id="DeleteMenuModal<?=$tm->id_menu;?>" tabindex="1" role="dialog" aria-labelledby="DeleteMenuModal" style="overflow: hidden;">
			  	<div class="modal-dialog modal-dialog-centered modal-sm">
				    <div class="modal-content">
					    <div class="modal-header">
					    	
					    </div>
					    <div class="modal-body modal-edit">
					    	<p class="text-center font-size-16">Are you sure want to delete <b><?php echo $tm->nama_menu ?></b>?</p>
					    </div>
					    <div class="modal-footer" style="justify-content: center;">
					        <a href="<?php echo base_url(); ?>general/delete_menu/<?php echo $tm->id_menu ?>" class="btn btn-default circle btn-bordered text-uppercase font-weight-bold border-thin font-size-12 lh-15 mx-0">
								<span>
									<span class="btn-txt">Yes</span>
								</span>
							</a>
							&nbsp; &nbsp;
							<a href="#" data-dismiss="modal" class="btn btn-default circle btn-bordered text-uppercase font-weight-bold border-thin font-size-12 lh-15 mx-0">
								<span>
									<span class="btn-txt">No</span>
								</span>
							</a>
					    </div>
					</div>
			  	</div>
			</div>
		<?php } ?>

		<?php foreach ($tabel_karyawan as $tk) { ?>
			<div class="modal fade" id="DeleteKaryawanModal<?=$tk->id_kasir;?>" tabindex="1" role="dialog" aria-labelledby="DeleteKaryawanModal" style="overflow: hidden;">
			  	<div class="modal-dialog modal-dialog-centered modal-sm">
				    <div class="modal-content">
					    <div class="modal-header">
					    	
					    </div>
					    <div class="modal-body modal-edit">
					    	<p class="text-center font-size-16">Are you sure want to delete <b><?php echo $tk->nama_depan ?> <?php echo $tk->nama_belakang ?></b>?</p>
					    </div>
					    <div class="modal-footer" style="justify-content: center;">
					        <a href="<?php echo base_url(); ?>general/delete_employee/<?php echo $tk->id_kasir ?>" class="btn btn-default circle btn-bordered text-uppercase font-weight-bold border-thin font-size-12 lh-15 mx-0">
								<span>
									<span class="btn-txt">Yes</span>
								</span>
							</a>
							&nbsp; &nbsp;
							<a href="#" data-dismiss="modal" class="btn btn-default circle btn-bordered text-uppercase font-weight-bold border-thin font-size-12 lh-15 mx-0">
								<span>
									<span class="btn-txt">No</span>
								</span>
							</a>
					    </div>
					</div>
			  	</div>
			</div>
		<?php } ?>
	</body>
</html>