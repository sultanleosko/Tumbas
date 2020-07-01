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
								<ul class="nav tabs-nav" role="tablist">
									<li class="tabs-nav-title">
										<img class="img-circle" src="<?php echo base_url(); ?>assets/img/<?php echo $detail_karyawan->foto_kasir ?>">
									</li>
									<li role="presentation" class="h5 active">
										<a href="#ld-tab-pane-1" aria-expanded="false" aria-controls="ld-tab-pane-1" role="tab" data-toggle="tab">Menu</a>
									</li>
									<li role="presentation" class="h5">
										<a href="#ld-tab-pane-2" aria-expanded="false" aria-controls="ld-tab-pane-2" role="tab" data-toggle="tab"><?php $keranjang = 'Cart &nbsp; <span class="badge-edit badge-secondary">'.$this->cart->total_items().'</span>' ?><?php echo $keranjang ?></a>
									</li>
									<!--
									<li role="presentation" class="h5">
										<a href="#ld-tab-pane-3" aria-expanded="false" aria-controls="ld-tab-pane-3" role="tab" data-toggle="tab">Account</a>
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
												<div class="liquid-filter-items justify-content-between" id="portdolio-grid-1">
													<div class="liquid-filter-items-inner">
														<h2 class="mt-0">Menu</h2>
									
														<ul class="filter-list text-uppercase ltr-sp-1 filter-list-inline size-sm font-weight-bold">
															<li class="active" data-filter="*"><span>All Categories</span></li>
															<li data-filter=".Foods"><span>Foods</span></li>
															<li data-filter=".Drinks"><span>Drinks</span></li>
														</ul>
													</div>
												</div>
											</div>
										</div>


										<div class="row liquid-portfolio-list-row" data-liquid-masonry="true" data-masonry-options='{ "filtersID": "#portdolio-grid-1" }'>

										<?php foreach($tabel_menu as $tm) {
											echo '
												<div class="lqd-column text-center col-md-3 col-sm-6 masonry-item '.$tm->kategori.'">
													<article class="liquid-lp mb-40">
														<figure class="liquid-lp-media">
															<img src="'.base_url().'assets/img/'.$tm->foto_menu.'" alt="'.$tm->nama_menu.'">
														</figure>
													
														<header class="liquid-lp-header">
															<h2 class="liquid-lp-title text-center h4 font-size-16">'.$tm->nama_menu.'</h2>
															<h2 class="liquid-lp-title text-center h4 font-size-16 pt-2">Rp. '.number_format($tm->harga).'</h2>
														</header>
													
														<footer class="liquid-lp-footer">
															<div class="btn-cart">
																'.anchor('general/add_cart/'.$tm->id_menu, '<div class="btn btn-default circle btn-bordered text-uppercase font-weight-bold font-size-12 border-thin lh-15 mb-2">
																	<span>
																		<span class="btn-txt">Add Cart</span>
																	</span>
																</div>').'
															</div>
														</footer>
													</article>
												</div>
											';
										} ?>
											
											<!--
											<div class="lqd-column col-md-3 col-sm-6 masonry-item makanan">
												<article class="liquid-lp mb-40">
													<figure class="liquid-lp-media">
														<img src="<?php echo base_url(); ?>assets/demo/blog/blog-19.jpg" alt="Lates Post">
													</figure>
												
													<header class="liquid-lp-header">
														<h2 class="liquid-lp-title text-center h4 font-size-16"><a href="#">Bakmi Ayam Teriyaki</a></h2>
													</header>
												
													<footer class="liquid-lp-footer">
														<div class="number-input-container">
											                <button type="button" class="button-decrement" onclick="setNumber(event)" data-input-id="bakmi" data-operation="decrement"
											                ></button>
											                <div class="number-input">
											                    <input type="number" id="bakmi" name="bakmi" class="number-input-text-box" value="0" min="0" max="100" oninput="handleNumberInput()" onblur="handleNumberInputBlur(event)" data-step="1"/>
											                </div>
											                <button type="button" class="button-increment" onclick="setNumber(event)" data-input-id="bakmi" data-operation="increment"
											                ></button>
											            </div>
													</footer>
												</article>
											</div>
											-->
										</div>
									</div>

									<div id="ld-tab-pane-2" role="tabpanel" class="tabs-pane pl-md-5 fade">
										<div class="row">
											<div class="lqd-column col-xs-12">
												<div class="liquid-filter-items justify-content-between" id="portdolio-grid-10">
													<div class="liquid-filter-items-inner">
														<h2 class="mt-0">Cart</h2>
									
														<ul class="filter-list text-uppercase ltr-sp-1 filter-list-inline size-sm font-weight-bold">
															<li><span><a href="<?php echo base_url(); ?>general/delete_all_cart">Delete All</a></span></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="lqd-column col-md-12 masonry-item">
											<div class="row">
												<div class="lqd-column col-md-12">
													<div class="fancy-box fancy-box-offer fancy-box-offer-header">
														<div class="fancy-box-cell fancy-box-header" style="flex-grow: 1;">
															<p>Menu Name</p>
														</div>
														<div class="fancy-box-cell" style="flex-grow: 0.5;">
															<p>Qty</p>
														</div>
														<div class="fancy-box-cell">
															<p>Price</p>
														</div>
														<div class="fancy-box-cell">
															<p>Sub Total</p>
														</div>
														<div class="fancy-box-cell">
															<p>&nbsp;</p>
														</div>
													</div>

													<?php foreach ($this->cart->contents() as $items) {
														echo '
															<div class="fancy-box fancy-box-offer fancy-box-heading-sm">
																<div class="fancy-box-cell fancy-box-header" style="flex-grow: 1;">
																	
																	<h3>
																		'.$items['name'].'
																	</h3>
																</div>
															
																<div class="fancy-box-cell" data-text="Quantity" style="flex-grow: 0.5;">
																	<h5>
																		'.$items['qty'].'
																	</h5>
																</div>

																<div class="fancy-box-cell" data-text="Price">
																	<h5>
																		Rp. '.number_format($items['price']).'
																	</h5>
																</div>

																<div class="fancy-box-cell" data-text="Price">
																	<h5>
																		Rp. '.number_format($items['subtotal']).'
																	</h5>
																</div>
																
																<div class="fancy-box-cell" data-text="Availability">
																	<a href="'.base_url('general/delete_cart/'.$items['rowid']).'" class="btn btn-sm circle btn-bordered text-uppercase font-weight-bold lh-15">
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
															';
														} 
													?>
												</div>
												<div class="lqd-column col-md-6">
													<h5 class="my-2 font-weight-bold">
														Grand Total : Rp. <?php echo number_format($this->cart->total()); ?>
													</h5>
												</div>
												<div class="lqd-column col-md-6 text-right">
													<a href="#" class="btn btn-default circle btn-bordered text-uppercase font-weight-bold font-size-12 border-thin lh-15 mb-2" data-toggle="modal" data-target="#CheckoutModal">
														<span>
															<span>Checkout&nbsp;</span>
															<svg class="bi bi-arrow-right-short" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																 <path fill-rule="evenodd" d="M8.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.793 8 8.146 5.354a.5.5 0 0 1 0-.708z"/>
																 <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5H11a.5.5 0 0 1 0 1H4.5A.5.5 0 0 1 4 8z"/>
															</svg>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>

									<div id="ld-tab-pane-3" role="tabpanel" class="tabs-pane pl-md-5 fade">
										<h2 class="mt-0">Account</h2>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<div class="modal fade" id="CheckoutModal" data-backdrop="static" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" style="overflow: hidden;">
		  	<div class="modal-dialog modal-dialog-centered">
			    <div class="modal-content">
				    <div class="modal-header">
				        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Checkout</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          	<span aria-hidden="true">&times;</span>
				        </button>
				    </div>
				    <div class="modal-body modal-edit">
					    <form action="<?php echo base_url(); ?>general/checkout" method="post">
					    	<?php 
								echo form_open(base_url('general/checkout'));
								$idtransaksi = date('dmY').strtoupper(random_string('alnum', 8));
							?>
						    <div class="tabs tabs-nav-centered tabs-nav-items-bordered tabs-nav-active-filled mt-10">
								<ul class="nav tabs-nav text-uppercase ltr-sp-175 font-weight-bold" role="tablist">
									<li role="presentation" class="h5 text-uppercase active">
										<a href="#cash" aria-expanded="false" aria-controls="cash" role="tab" data-toggle="tab"> Cash </a>
									</li>
									<li role="presentation" class="h5 text-uppercase">
										<a href="#debit" aria-expanded="false" aria-controls="debit" role="tab" data-toggle="tab"> Debit </a>
									</li>
								</ul>
								<div class="tabs-content">
									<div id="cash" role="tabpanel" class="tabs-pane fade active in">
										<div class="form-group">
											<label for="id_transaksi">ID Transaction</label>
				    						<input type="text" class="form-control" name="id_transaksi" id="id_transaksi" value="<?php echo $idtransaksi ?>" readonly>
										</div>
										<div class="form-group form-row">
											<div class="col-md-6">
												<label for="uang_bayar">Pay Money</label>
												<div class="input-group">
												    <div class="input-group-prepend">
												      	<div class="input-group-text">Rp.</div>
												    </div>
				    								<input type="number" class="form-control" name="uang_bayar" id="uang_bayar">
				    							</div>
											</div>
											<div class="col-md-6">
												<label for="uang_kembali">Change Money</label>
												<div class="input-group">
												    <div class="input-group-prepend">
												      	<div class="input-group-text">Rp.</div>
												    </div>
				    								<input type="number" class="form-control" name="uang_kembali" id="uang_kembali" value="" readonly>
				    							</div>
											</div>
										</div>
										<div class="form-group">
										    <label for="grand_total">Grand Total</label>
										    <input type="text" id="menu_name" value="Rp. <?php echo number_format($this->cart->total()); ?>" readonly class="form-control-plaintext font-size-18">
										</div>
									</div>
									<div id="debit" role="tabpanel" class="tabs-pane fade">
										<div class="form-group">
											<label for="id_transaksi">ID Transaction</label>
				    						<input type="text" class="form-control" name="id_transaksi" id="id_transaksi" value="<?php echo $idtransaksi ?>" readonly>
										</div>
										<div class="form-group form-row">
											<div class="col-md-6">
												<label for="pemegang_kartu">Card Holder Name</label>
				    							<input type="text" class="form-control" name="pemegang_kartu" id="pemegang_kartu" placeholder="Card Holder Name">
											</div>
											<div class="col-md-6">
												<label for="nomor_kartu">Card Number</label>
				    							<input type="text" class="form-control" name="nomor_kartu" id="nomor_kartu" placeholder="Card Number">
											</div>
										</div>
										<div class="form-group">
										    <label for="grand_total">Grand Total</label>
										    <input type="text" id="menu_name" value="Rp. <?php echo number_format($this->cart->total()); ?>" readonly class="form-control-plaintext font-size-18">
										</div>
									</div>
								</div>
							</div>
						    <div class="modal-footer">
						        <input class="btn btn-default circle btn-bordered text-uppercase font-weight-bold border-thin font-size-14 lh-15 px-4 py-2 mx-0" type="submit" name="submit_checkout" value="Checkout">
						    </div>
						</form>
					</div>
				</div>
		  	</div>
		</div>

		<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCUnWOSK2b5WtvMOAI8j55OHhS_sNv2VfA"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/theme-vendors.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/theme.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/liquidAjaxContactForm.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/liquidAjaxMailchimp.min.js"></script>
	</body>
</html>