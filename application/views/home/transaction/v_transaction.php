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
                                                <button onClick="detailpesanan('<?= $waiting['id_transaction'] ?>','<?= base_url() ?>')" data-toggle="modal" data-target="#modal_pesanan" type="button" class="btn btn-outline-primary btn-sm"> <i class="fa fa-info-circle"></i> Lihat Detail</button>
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
                                        <th scope="col">Action</th>
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
                                                <?php if ($payment['payment_status'] == 0) { ?>
                                                    <span class="btn btn-outline-warning btn-sm">Menunggu DP</span>
                                                <?php } else if ($payment['payment_status'] == 1) { ?>
                                                    <span class="btn btn-outline-warning btn-sm">Menunggu Pelunasan</span>
                                                <?php } else { ?>
                                                    <span class="btn btn-outline-success btn-sm">Menunggu Diproses</span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <button onClick="detailpesanan('<?= $payment['id_transaction'] ?>','<?= base_url() ?>')" data-toggle="modal" data-target="#modal_pesanan" type="button" type="button" class="btn btn-outline-primary btn-sm"> <i class="fa fa-info-circle"></i> Lihat Detail</button>
                                            </td>
                                            <td>
                                                <?php if ($payment['status_transaksi'] == 1) { ?>
                                                    <?php if ($payment['payment_status'] == 1) { ?>
                                                        <button onClick="getPrice('<?= $payment['id_transaction'] ?>','<?= $payment['total_price'] ?>')" data-toggle="modal" data-target="#modal-bayar" type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-money"></i> Bayar Uang Muka</button>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <?php if ($payment['payment_status'] == 1) { ?>
                                                        <button onClick="getLunas('<?= $payment['id_transaction'] ?>','<?= $payment['remaining_payment'] ?>')" data-toggle="modal" data-target="#modal-lunas" type="button" class="btn btn-outline-warning btn-sm"><i class="fa fa-money"></i> Bayar Lunas</button>
                                                    <?php } ?>
                                                <?php } ?>

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

<div class="modal fade" id="modal-bayar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Pembayaran DP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container mt-3" style="padding-right: 50px; padding-left:50px;">
                    <form action="<?= base_url() ?>payment/payment_dp/" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="" class="col-sm-2">Total Harga</label>
                            <div class="col-sm-10">
                                <input type="text" name="" id="total_price2" readonly class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2">Pilih DP</label>
                            <div class="col-sm-10">
                                <select style="font-size: 14px;" onchange="getDp()" name="percent_dp" id="percent_dp" class="form-control">
                                    <option value="">-- Pilih DP --</option>
                                    <option value="30">30%</option>
                                    <option value="50">50%</option>
                                    <option value="70">70%</option>
                                </select>
                                <span id="notif" hidden="true" style="color:red;">mohon pilih jumlah dp terlebih dahulu !</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2">Jumlah Bayar</label>
                            <div class="col-sm-10">
                                <input type="text" name="" id="amount_paid" readonly class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2">Bukti Bayar</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                    <label id="photo" class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id_transaction" id="id_transaction">
                        <input type="hidden" name="total_price" id="total_price">
                        <input type="hidden" name="amount_paid_input" id="amount_paid_input">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button hidden="true" type="submit" id="btn_proccess" class="btn btn-primary">Save changes</button>
                <button type="button" id="btn_notif" onClick="showNotif()" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-lunas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Pembayaran Lunas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container mt-3" style="padding-right: 50px; padding-left:50px;">
                    <form action="<?= base_url() ?>payment/payment_last/" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="" class="col-sm-2">Sisa Pembayaran</label>
                            <div class="col-sm-10">
                                <input type="text" name="" id="remaining_payment" readonly class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2">Bukti Bayar</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                    <label id="photo" class="custom-file-label" for="exampleInputFile">Choose file</label>
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

<div class="modal fade" id="modal_pesanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Detail Data Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="table-data" class="table table-bordered">
                    <thead class="bg-info">
                        <tr class="text-light">
                            <td>No</td>
                            <td>Nama Produk</td>
                            <td>Harga</td>
                            <td>Jumlah</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4">Sub Total</th>
                            <td id="sub_total">Rp 0</td>
                        </tr>
                        <tr>
                            <th colspan="4">Uang Muka</th>
                            <td id="down_payment">Rp 0</td>
                        </tr>
                        <tr>
                            <th colspan="4">Sisa Pembayaran</th>
                            <td id="remaining_payment">Rp 0</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function getPrice(idTransaction, totalPrice) {
        document.getElementById('id_transaction').value = idTransaction;
        document.getElementById('total_price').value = totalPrice;
        document.getElementById("total_price2").value = totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        document.getElementById('notif').hidden = true;
    }

    function getDp() {
        var totalPrice = document.getElementById('total_price').value;
        var percentDp = document.getElementById('percent_dp').value;
        var downPayment = 0;
        if (percentDp == "30") {
            downPayment = totalPrice * 0.3;
        } else if (percentDp == "50") {
            downPayment = totalPrice * 0.5;
        } else if (percentDp == "70") {
            downPayment = totalPrice * 0.7;

        }
        document.getElementById("amount_paid").value = downPayment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        document.getElementById("amount_paid_input").value = downPayment
        document.getElementById('btn_proccess').hidden = false;
        document.getElementById('btn_notif').hidden = true;
        document.getElementById('notif').hidden = true;
    }

    function getLunas(idTransaction, remainingPayment) {
        document.getElementById('id_transaction2').value = idTransaction;
        document.getElementById('remaining_paid_input').value = remainingPayment;
        document.getElementById('remaining_payment').value = "Rp " + remainingPayment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function showNotif() {
        document.getElementById('notif').hidden = false;
    }
</script>