<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Transaksi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Transaksi</li>
                        <li class="breadcrumb-item active">Data Transaksi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Data Transaksi</h5>
                        </div>
                        <div class="card-body">

                            <div class="tab-content" id="myTabContent">
                                <div style="border: 1px solid #eee;padding:20px" class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <table id="example1" class="table table-bordered table-striped dataTable js-exportable max-width100">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <center>No</center>
                                                </th>
                                                <th>
                                                    <center>ID Order</center>
                                                </th>
                                                <th>
                                                    <center>Nama Penyewa</center>
                                                </th>
                                                <th>
                                                    <center>Tanggal</center>
                                                </th>
                                                <th>
                                                    <center>Uang Muka</center>
                                                </th>
                                                <th>
                                                    <center>Pelunasan</center>
                                                </th>
                                                <th>
                                                    <center>Status</center>
                                                </th>
                                                <th>
                                                    <center>Action</center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($data_transaction as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <center><?= $i++ ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $row['id_transaction'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $row['full_name'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= date('d F Y', strtotime($row['transaction_date'])) ?></center>
                                                    </td>
                                                    <td>
                                                        <center>Rp <?= number_format($row['down_payment']) ?></center>
                                                    </td>
                                                    <td>
                                                        <center>Rp <?= number_format($row['remaining_payment']) ?></center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <?php if ($row['payment_status'] == 3) { ?>
                                                                <span class="badge badge-success pt-1">Selesai</span>
                                                            <?php } ?>
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Bukti Pembayaran">
                                                            <button onClick="showDp('<?= base_url() ?>','<?= $row['bukti_dp'] ?>','<?= $row['bukti_lunas'] ?>')" data-toggle="modal" data-target="#modalBukti" type="button" class="btn btn-success btn-circle btn-icon btn-sm">
                                                                <i class="fa fa-credit-card"></i></button>
                                                        </span>
                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Surat Jalan">
                                                            <a target="_blank" href="<?= base_url() ?>penyewaan/surat_jalan/<?= $row['number'] ?>" class="btn btn-info btn-circle btn-icon btn-sm">
                                                                <i class="fa fa-file"></i></a>
                                                        </span>

                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Penyewa">
                                                            <button onClick="data_penyewa('<?= base_url() ?>','<?= $row['nik']?>','<?= $row['full_name']?>','<?= $row['email']?>','<?= $row['address']?>','<?= $row['phone']?>')" data-toggle="modal" data-target="#modalUsersDetail" type="button" class="btn btn-primary btn-circle btn-icon btn-sm">
                                                                <i class="fa fa-user"></i></button>
                                                        </span>
                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Pesanan">
                                                            <button onClick="detailpesanan('<?= $row['id_transaction'] ?>','<?= base_url() ?>')" data-toggle="modal" data-target="#modal_pesanan" type="button" class="btn btn-danger btn-circle btn-icon btn-sm">
                                                                <i class="fa fa-book"></i></button>
                                                        </span>
                                                        </center>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    <center>No</center>
                                                </th>
                                                <th>
                                                    <center>Nama Penyewa</center>
                                                </th>
                                                <th>
                                                    <center>ID Order</center>
                                                </th>
                                                <th>
                                                    <center>Tanggal</center>
                                                </th>
                                                <th>
                                                    <center>Uang Muka</center>
                                                </th>
                                                <th>
                                                    <center>Pelunasan</center>
                                                </th>
                                                <th>
                                                    <center>Status</center>
                                                </th>
                                                <th>
                                                    <center>Action</center>
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                               

                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modalBukti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Form Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <h4 class="text-center">Bukti Pembayaran Uang Muka</h4>
                        <center>
                        <img class="mt-2" src="" style="width: 200px; height:200px;" id="img_dp" alt="">
                        </center>
                    </div>
                    <div class="col-6">
                        <h4 class="text-center">Bukti Pembayaran Akhir</h4>
                        <center>
                        <img src="" id="img_lunas" class="mt-2" alt="" style="width: 200px; height:200px;">
                        </center>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>

<div class="modal fade" id="modalUsersDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Form Detail Penyewa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>
                                <center>NIK</center>
                            </th>
                            <th>
                                <center>Nama Lengkap</center>
                            </th>
                            <th>
                                <center>Email</center>
                            </th>
                            <th>
                                <center>Alamat</center>
                            </th>
                            <th>
                                <center>No Handphone</center>
                            </th>


                        </tr>
                        <tr>
                            <td id="nik"></td>
                            <td id="nama"></td>
                            <td id="email"></td>
                            <td id="alamat"></td>
                            <td id="hp"></td>


                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>


   
    <div class="modal fade" id="modal_pesanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_title">Detail Pesanan</h5>
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
    </div>
    <script>
        function showDp(baseUrl,buktiDp,buktiLunas){
            document.getElementById("img_dp").src = baseUrl+'assets/foto_bukti/' + buktiDp;
            document.getElementById("img_lunas").src = baseUrl+'assets/foto_bukti/' + buktiLunas;
        }
    </script>