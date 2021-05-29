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
						<h6>Gratis Ongkir</h6>
						<p>Khusus untuk Pembelanjaan Minimal Rp 150.000</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url() ?>assets/home/img/features/f-icon5.png" alt="">
						</div>
						<h6>COD</h6>
						<p>Dapat Melakukan Pembayaran dengan Cash On Delivery</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url() ?>assets/home/img/features/f-icon3.png" alt="">
						</div>
						<h6>Layanan 24/7</h6>
						<p>Didukung Layanan 24 Jam</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url() ?>assets/home/img/features/f-icon4.png" alt="">
						</div>
						<h6>100% Original</h6>
						<p>Produk dijamin original</p>
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
				<?php foreach($latest_product as $row) { ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img  style="height: 255px; width:255px;" class="img-fluid" src="<?= base_url() ?>assets/home/foto_produk/<?= $row['photo'] ?>" alt="">
							<div class="product-details">
								<h6><?= $row['product_name']?></h6>
								<div class="price">
									<h6>RP. <?= number_format($row['price'], 0, ",", ".") ?></h6>
									<!-- <h6 class="l-through">$210.00</h6> -->
								</div>
								<div class="prd-bottom">

									<a href="<?= base_url() ?>cart/add_cart/<?= $row['id_product']?>" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									
									<a href="<?= base_url() ?>home/detail_product/<?= $row['id_product']?>" class="social-info">
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