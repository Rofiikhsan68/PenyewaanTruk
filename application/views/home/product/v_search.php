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
    <h3>Pencarian Anda <?= $search ?></h3>
    <div class="row">
        <div class="col-xl-12 col-lg-8 col-md-7 mb-5">
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <!-- single product -->
                    <?php if($data_product != null){ ?>
                    <?php foreach($data_product as $row){ ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img style="height: 255px; width:255px;" class="img-fluid" src="<?= base_url() ?>assets/home/foto_produk/<?= $row['photo'] ?>" alt="">
                            <div class="product-details">
                                <h6><?= $row['product_name'] ?></h6>
                                <div class="price">
                                    <h6>Rp <?= number_format($row['price'],0,".",".") ?></h6>
                                    <!-- <h6 class="l-through">$210.00</h6> -->
                                </div>
                                <div class="prd-bottom">

                                    <a href="" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">add to bag</p>
                                    </a>
                                   
                                    <a href="<?= base_url() ?>home/detail_product/<?= $row['id_product'] ?>" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view Detail</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php }else{ ?>
                        <h4 class="ml-3">Mohon maaf, Pencarian anda tidak ditemukan</h4>
                    <?php } ?>
                </div>
            </section>
            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
            <?php if($data_product != null){ ?>
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
            <?php } ?>
            <!-- End Filter Bar -->
        </div>
    </div>
</div>