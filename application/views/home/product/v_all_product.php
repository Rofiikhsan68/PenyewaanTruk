<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb banner-bg">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first color-black">
                <h1 class="color-black">All Product</h1>
                <nav class="d-flex align-items-center ">
                    <a class="color-black" href="<?= base_url() ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a class="color-black" href="#">All Product<span class="lnr lnr-arrow-right"></span></a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5 mb-5">
            <div class="sidebar-categories">
                <div class="head">Browse Categories</div>
                <ul class="main-categories">
                    <li class="main-nav-list"><a href="<?= base_url() ?>home/all_product/">All<span class="number">(<?= count($data_merk) ?>)</span></a></li>
                    <?php foreach ($data_merk as $merk) { ?>
                        <li class="main-nav-list"><a href="<?= base_url() ?>home/all_product/<?= $merk['id_merk']?>"><?= $merk['merk_name'] ?><span class="number">(<?= count($data_merk) ?>)</span></a></li>
                    <?php } ?>

            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7 mb-5">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting mr-auto">

                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>k
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Filter Bar -->
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <!-- single product -->
                    <?php foreach($data_product as $product) { ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <!-- <img style="height: 255px; width:255px;" class="img-fluid" src="<?= base_url() ?>assets/foto_produk/<?= $row['foto'] ?>" alt=""> -->
                            <img style="height: 255px; width:255px;" class="img-fluid" src="<?= base_url() ?>assets/home/foto_produk/<?= $product['photo'] ?>" alt="">
                            <div class="product-details">
                                <h6><?= $product['product_name']?></h6>
                                <div class="price">
                                    <h6>Rp <?= number_format($product['price'], 0, ".", ".") ?>/hari</h6>
                                    <!-- <h6 class="l-through">$210.00</h6> -->
                                </div>
                                <div class="prd-bottom">

                                <a onClick="tambah_cart('<?= base_url() ?>cart/add_cart/<?= $product['id_product']?>')" data-target="#modal_hari" data-toggle="modal" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">add to bag</p>
                                    </a>

                                    <a href="<?= base_url() ?>home/detail_product/<?= $product['id_product']?>" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view Detail</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting mr-auto">

                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Filter Bar -->
        </div>
    </div>
</div>

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