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
    <div class="row justify-content-center mt-5">
        <div class="col-md-9">
            <center>
                <h4>Silahkan isi form rekomendasi sesuai dengan keinginan anda.</h4>
            </center>
            <form action="<?= base_url() ?>product/search_recomendation" method="post">
                <div class="col-md-12 mt-5">
                    <!-- <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Merk Truk</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="merk">
                                <option value="">-- Pilih Merk --</option>
                                <?php foreach ($data_merk as $row) { ?>
                                <option value="<?= $row['id_merk'] ?>"><?= $row['merk_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tipe Truk</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="type">
                                <option value="">-- Pilih Tipe --</option>
                                <?php foreach ($data_type as $row) { ?>
                                <option value="<?= $row['id_type'] ?>"><?= $row['type_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Kapasitas</label>
                        <div class="col-sm-10">
                            <!-- <input type="password" class="form-control" id="inputPassword"> -->
                            <div class="input-group">
                                <input type="number" name="capacity" class="form-control" placeholder="Kapasitas ...">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Kg</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Radius</label>
                        <div class="col-sm-10">
                            <!-- <input type="password" class="form-control" id="inputPassword"> -->
                            <div class="input-group">
                                <input type="number" name="radius" class="form-control" placeholder="Radius ...">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Km</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <!-- <input type="password" class="form-control" id="inputPassword"> -->
                            <div class="input-group">
                                <!-- <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div> -->
                                <!-- <input type="number" name="price" class="form-control" placeholder="Harga ..."> -->
                                <select name="price" class="form-control" id="">
                                    <option value="">-- Pilih Range Harga --</option>
                                    <option value="1000000-2000000">Rp 1.000.0000 - Rp 2.000.000</option>
                                    <option value="2000000-3000000">Rp 2.000.0000 - Rp 3.000.000</option>
                                    <option value="3000000-4000000">Rp 3.000.0000 - Rp 4.000.000</option>
                                    <option value="lainnya">Lebih dari Rp 4.000.000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Parameter K</label>
                        <div class="col-sm-10">
                            <input type="number" name="k" class="form-control" placeholder="Jumlah Parameter K ...">
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button class="btn-primary" style="padding: 5px 10px 5px 10px; border-radius:5px;">Cari Produk</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-7 mb-5">
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <!-- single product -->
                    <?php $l = 1;
                    for ($i = 0; $i < 4; $i++) { ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <p class="btn btn-outline-primary">Pilihan <?= $l++; ?></p>
                                <!-- <img style="height: 255px; width:255px;" class="img-fluid" src="<?= base_url() ?>assets/foto_produk/<?= $row['foto'] ?>" alt=""> -->
                                <img style="height: 255px; width:255px;" class="img-fluid" src="<?= base_url() ?>assets/home/foto_produk/<?= $recomended[$i]['data']['photo'] ?>" alt="">
                                <div class="product-details">
                                    <h6><?= $recomended[$i]['data']['product_name'] ?></h6>
                                    <div class="price">
                                        <h6>Rp <?= number_format($recomended[$i]['data']['price'], 0, ".", ".") ?></h6>
                                        <p><?= $recomended[$i]['distance'] ?></p>
                                        <!-- <h6 class="l-through">$210.00</h6> -->
                                    </div>
                                    <div class="prd-bottom">


                                        <a onClick="tambah_cart('<?= base_url() ?>cart/add_cart/<?= $recomended[$i]['data']['id_product'] ?>')" data-target="#modal_hari" data-toggle="modal" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">add to bag</p>
                                        </a>

                                        <a href="<?= base_url() ?>home/detail_product/<?= $recomended[$i]['data']['id_product'] ?>" class="social-info">
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
        </div>
    </div>
</div>
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
    function tambah_cart(base_url) {
        document.getElementById('form').action = base_url;
    }
</script>