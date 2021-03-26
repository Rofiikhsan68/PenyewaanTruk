<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb banner-bg">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1 class="color-black"><?= $title ?></h1>
                <nav class="d-flex align-items-center  ">
                    <a class="color-black" href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a class="color-black" href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                    <a class="color-black" href="single-product.html"><?= $title ?></a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Menunggu Konfirmasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="pembayaran" aria-selected="false">Diproses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="profile-tab" data-toggle="tab" href="#pembayaran" role="tab" aria-controls="profile" aria-selected="false">Menunggu Pembayaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="profile-tab" data-toggle="tab" href="#selesai" role="tab" aria-controls="selesai" aria-selected="false">Selesai</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="cart_inner">
                    <div class="table-responsive">
                        <form action="<?= base_url() ?>cart/updateCart/" method="post">
                            <table class="table table-transaksi">
                                <thead>
                                    <tr>
                                        <th scope="col">No Transaksi</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Waktu</th>
                                        <th scope="col">Destinasi</th>
                                        <th scope="col">Catatan</th>
                                        <th scope="col">Detail Transaksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($waiting_process as $waiting) { ?>
                                        <tr>
                                            <td><span class="btn btn-primary btn-sm"><?= $waiting['id_transaction'] ?></span></td>
                                            <td><?= date_format(date_create($waiting['transaction_date']), 'd F Y') ?></td>
                                            <td><?= $waiting['transaction_time'] ?></td>
                                            <td><?= $waiting['destination'] ?></td>
                                            <td><?= $waiting['note'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-outline-primary btn-sm"> <i class="fa fa-info-circle"></i> Lihat Detail</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="cart_inner">
                    <div class="table-responsive">
                        <form action="<?= base_url() ?>cart/updateCart/" method="post">
                            <table class="table table-transaksi">
                                <thead>
                                    <tr>
                                        <th scope="col">No Transaksi</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Waktu</th>
                                        <th scope="col">Destinasi</th>
                                        <th scope="col">Catatan</th>
                                        <th scope="col">Detail Transaksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($process_transaction as $process) { ?>
                                        <tr>
                                            <td><span class="btn btn-primary btn-sm"><?= $process['id_transaction'] ?></span></td>
                                            <td><?= date_format(date_create($process['transaction_date']), 'd F Y') ?></td>
                                            <td><?= $process['transaction_time'] ?></td>
                                            <td><?= $process['destination'] ?></td>
                                            <td><?= $process['note'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-outline-primary btn-sm"> <i class="fa fa-info-circle"></i> Lihat Detail</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="pembayaran" role="tabpanel" aria-labelledby="pembayaran-tab">
                <div class="cart_inner">
                    <div class="table-responsive">
                        <form action="<?= base_url() ?>cart/updateCart/" method="post">
                            <table class="table table-transaksi">
                                <thead>
                                    <tr>
                                        <th scope="col">No Transaksi</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Waktu</th>
                                        <th scope="col">Destinasi</th>
                                        <th scope="col">Catatan</th>
                                        <th scope="col">Status Pembayaran</th>
                                        <th scope="col">Detail Transaksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($waiting_payment as $payment) { ?>
                                        <tr>
                                            <td><span class="btn btn-primary btn-sm"><?= $payment['id_transaction'] ?></span></td>
                                            <td><?= date_format(date_create($payment['transaction_date']), 'd F Y') ?></td>
                                            <td><?= $payment['transaction_time'] ?></td>
                                            <td><?= $payment['destination'] ?></td>
                                            <td><?= $payment['note'] ?></td>
                                            <td>
                                                <?php if ($payment_status == 0) { ?>
                                                    <span class="btn btn-outline-warning btn-sm">Menunggu DP</span>
                                                <?php } else { ?>
                                                    <span class="btn btn-outline-warning btn-sm">Menunggu Pelunasan</span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-primary btn-sm"> <i class="fa fa-info-circle"></i> Lihat Detail</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="selesai" role="tabpanel" aria-labelledby="selesai-tab">
                <div class="cart_inner">
                    <div class="table-responsive">
                        <form action="<?= base_url() ?>cart/updateCart/" method="post">
                            <table class="table table-transaksi">
                                <thead>
                                    <tr>
                                        <th scope="col">No Transaksi</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Waktu</th>
                                        <th scope="col">Destinasi</th>
                                        <th scope="col">Catatan</th>
                                        <th scope="col">Detail Transaksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($done_transaction as $done) { ?>
                                        <tr>
                                            <td><span class="btn btn-primary btn-sm"><?= $done['id_transaction'] ?></span></td>
                                            <td><?= date_format(date_create($done['transaction_date']), 'd F Y') ?></td>
                                            <td><?= $done['transaction_time'] ?></td>
                                            <td><?= $done['destination'] ?></td>
                                            <td><?= $done['note'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-outline-primary btn-sm"> <i class="fa fa-info-circle"></i> Lihat Detail</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--================End Product Description Area =================-->