	<!-- start banner Area -->
	<section class="banner-area banner-bg">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">

					<!-- single-slide -->
					<div class="row single-slide align-items-center d-flex mt-5">
						<div class="col-lg-7">
							<div class="banner-img">
								<img style="width: 450px;height: 200px;" class="img-fluid mt-5" src="<?= base_url() ?>assets/home/img/logo.png" alt="">
							</div>
						</div>
						<div class="col-lg-5 col-md-6">
							<div class="banner-content">
								<h1>Estu<br>Transindo</h1>
								<p style="font-size: 17px;">Estu Transindo merupakan bisnis yang bergerak dibidang penyewaan truk, kami mengedepankan penyewaan truk bagus dan berkualitas</p>
								<!-- <div class="add-bag d-flex align-items-center">
	                                <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
	                                <span class="add-text text-uppercase">Add to Bag</span>
	                            </div> -->
							</div>
						</div>

					</div>
					<!-- single-slide -->
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url() ?>assets/home/img/features/f-icon1.png" alt="">
						</div>
						<h6>Pengiriman Cepat</h6>
						<p>Unit milik sendiri menjadikan layanan kami cepat, aman dan amanah untuk sampai tujuan.</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url() ?>assets/home/img/features/f-icon5.png" alt="">
						</div>
						<h6>Handle With Care</h6>
						<p>Percayakan pengiriman anda pada kami, kami akan handle barang anda dengan sangat hati - hati.</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url() ?>assets/home/img/features/f-icon3.png" alt="">
						</div>
						<h6>Layanan 24/7</h6>
						<p>Layanan support Customer Service yang responsif.</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url() ?>assets/home/img/features/f-icon4.png" alt="">
						</div>
						<h6>Harga Terjangkau</h6>
						<p>Harga Kami boleh dibandingkan dengan yang lain.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->


	<!-- start product Area -->
	<section class="owl-carousel">
		<!-- single product slide -->

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Produk Terbaru</h1>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
	                            dolore
	                            magna aliqua.</p> -->
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single product -->
				<?php foreach ($latest_product as $row) { ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img style="height: 255px; width:255px;" class="img-fluid" src="<?= base_url() ?>assets/home/foto_produk/<?= $row['photo'] ?>" alt="">
							<div class="product-details">
								<h6><?= $row['product_name'] ?></h6>
								<div class="price">
									<h6>RP. <?= number_format($row['price'], 0, ",", ".") ?>/hari</h6>
									<!-- <h6 class="l-through">$210.00</h6> -->
								</div>
								<div class="prd-bottom">

									<a onClick="tambah_cart('<?= base_url() ?>cart/add_cart/<?= $row['id_product']?>')" data-target="#modal_hari" data-toggle="modal" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>

									<a href="<?= base_url() ?>home/detail_product/<?= $row['id_product'] ?>" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view details</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- end product Area -->
	<div class="modal fade" id="modal_hari" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Input hari
					 </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container mt-3" style="padding-right: 50px; padding-left:50px;">
						<form action="" id="form" method="post" enctype="multipart/form-data">
							<div class="form-group row">
								<div class="col-sm-10">
									<div class="form-group row">
										<label for="" class="col-sm-3 col-form-label">Input Hari Sewa</label>
										<div class="col-sm-9">
											<input type="date" value="" id="hari_sewa" required name="hari_sewa" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label for="" class="col-sm-3 col-form-label">Input Hari Selesai</label>
										<div class="col-sm-9">
											<input type="date" value="" id="hari_selesai" required name="hari_selesai" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<input type="hidden" name="id_transaction" id="id_transaction2">
							<input type="hidden" name="remaining_paid_input" id="remaining_paid_input">

					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" id="btn_proccess" class="btn btn-primary">Save changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script>
	function tambah_cart(base_url){
		document.getElementById('form').action = base_url; 
	}
	</script>