<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb banner-bg">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first color-black">
                <h1 class="color-black">REKOMENDASI PRODUK</h1>
                <nav class="d-flex align-items-center ">
                    <a class="color-black" href="<?= base_url() ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a class="color-black" href="#">Rekomendasi Produk<span class="lnr lnr-arrow-right"></span></a>
                </nav>
            </div>

        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <center>
                <h4>Silahkan isi form rekomendasi sesuai dengan keinginan anda.</h4>
            </center>
            <form action="<?= base_url() ?>product/search_recomendation" method="post">
                <div class="col-md-12 mt-5">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Merk Truk</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="merk">
                                <option value="">-- Pilih Merk --</option>
                                <?php foreach($data_merk as $row){ ?>
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
                                <?php foreach($data_type as $row){ ?>
                                <option value="<?= $row['id_type'] ?>"><?= $row['type_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
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
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" name="price" class="form-control" placeholder="Harga ...">
                            </div>
                        </div>
                    </div>
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
</div>