<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pembayaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Transaksi</li>
                        <li class="breadcrumb-item active">Data Pembayaran</li>
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
                            <h5>Data Pembayaran</h5>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Pembayaran Uang Muka</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data Pembayaran Akhir</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div style="border: 1px solid #eee;padding:20px" class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <table id="example1" class="table table-bordered table-striped dataTable js-exportable max-width100">
                                        <thead>
                                            <tr>
                                                <th><center>No</center></th>
                                                <th><center>ID Order</center></th>
                                                <th><center>Nama Penyewa</center></th>
                                                <th><center>Tanggal</center></th>
                                                <th><center>Nominal</center></th>
                                                <th><center>Bukti</center></th>
                                                <th><center>Status</center></th>
                                                <th><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($data_dp as $row){ ?>
                                            <tr>
                                                <td><center><?= $i++ ?></center></td>
                                                <td><center><?= $row['id_transaction'] ?></center></td>
                                                <td><center><?= $row['full_name'] ?></center></td>
                                                <td><center><?= date('d F Y',strtotime($row['transaction_date'])) ?></center></td>
                                                <td><center>Rp <?= number_format($row['down_payment']) ?></center></td>
                                                <td>
                                                    <?php if($row['payment_status'] == 2){ ?>
                                                        <?php if($row['bukti_dp'] != null){ ?>
                                                        <a href="<?= base_url() ?>assets/foto_bukti/<?= $row['bukti_dp'] ?>" target="_blank" class="badge badge-info">Klik untuk lihat</a>
                                                        <?php }else{ ?>
                                                        <span href="" class="badge badge-danger">Belum Bayar</span>
                                                        <?php  } ?>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php if($row['payment_status'] == 0){ ?>
                                                        <span class="badge badge-warning">Menunggu <br> Pembayaran</span>
                                                        <?php }else{ ?>
                                                        <span class="badge badge-warning">Belum Diproses</span>
                                                        <?php } ?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php if($row['payment_status'] == 2){ ?>
                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Konfirmasi Penyewaan">
                                                            <button onClick="konfirmasi_pembayaran('<?= base_url()?>payment/confirm_payment/<?= $row['number']?>')" data-toggle="modal" data-target="#modal_konfirmasi" type="button" class="btn btn-success btn-circle btn-icon btn-sm">
                                                                <i class="fa fa-check"></i></button>
                                                        </span>
                                                        <?php } ?>
                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Penyewa">
                                                            <button onClick="" data-toggle="modal" data-target="#modalUsersDetail" type="button" class="btn btn-primary btn-circle btn-icon btn-sm">
                                                                <i class="fa fa-user"></i></button>
                                                        </span>
                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Pesanan">
                                                            <button onClick="detailpesanan('<?= $row['id_transaction'] ?>','<?= base_url() ?>')" data-toggle="modal" data-target="#modal_pesanan" type="button" class="btn btn-outline-info btn-circle btn-icon btn-sm">
                                                                <i class="fa fa-book"></i></button>
                                                        </span>
                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                            <button onClick="" data-toggle="modal" data-target="#modal_delete" type="button" class="btn btn-outline-danger btn-circle btn-icon btn-sm">
                                                                <i class="fa fa-trash"></i></button>
                                                        </span>
                                                    </center>
                                                </td>
                                            </tr>
                                            <?php } ?>        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th><center>No</center></th>
                                                <th><center>Nama Penyewa</center></th>
                                                <th><center>ID Order</center> </th>
                                                <th> <center>Tanggal</center> </th>
                                                <th><center>Nominal</center> </th>
                                                <th><center>Bukti</center></th>
                                                <th><center>Status</center></th>
                                                <th><center>Action</center></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="tab-pane fade" style="border: 1px solid #eee;padding:20px;" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <table id="example1" class="table table-bordered table-striped dataTable js-exportable max-width100">
                                        <thead>
                                            <tr>
                                                <th><center>No</center></th>
                                                <th><center>ID Order</center></th>
                                                <th><center>Nama Penyewa</center></th>
                                                <th><center>Tanggal</center></th>
                                                <th><center>Nominal</center> </th>
                                                <th><center>Bukti</center></th>
                                                <th><center>Status</center></th>
                                                <th><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; foreach($data_akhir as $row){ ?>
                                            <tr>
                                                <td><center><?= $i++ ?></center></td>
                                                <td><center><?= $row['id_transaction'] ?></center></td>
                                                <td><center><?= $row['full_name'] ?></center></td>
                                                <td><center><?= date('d F Y',strtotime($row['transaction_date'])) ?></center></td>
                                                <td><center>Rp <?= number_format($row['down_payment']) ?></center></td>
                                                <td>
                                                    <?php if($row['bukti_lunas'] != null){ ?>
                                                    <a href="<?= base_url() ?>assets/foto_bukti/<?= $row['bukti_lunas'] ?>" target="_blank" class="badge badge-info">Klik untuk lihat</a>
                                                    <?php }else{ ?>
                                                    <span href="" class="badge badge-danger">Belum Bayar</span>
                                                    <?php  } ?> 
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php if($row['payment_status'] == 1){ ?>
                                                        <span class="badge badge-warning">Menunggu <br> Pembayaran</span>
                                                        <?php }else{ ?>
                                                        <span class="badge badge-warning">Belum Diproses</span>
                                                        <?php } ?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php if($row['payment_status'] == 2){ ?>
                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Konfirmasi Penyewaan">
                                                            <button onClick="konfirmasi_pembayaran('<?= base_url()?>payment/confirm_payment/<?= $row['number']?>')" data-toggle="modal" data-target="#modal_konfirmasi" type="button" class="btn btn-success btn-circle btn-icon btn-sm">
                                                                <i class="fa fa-check"></i></button>
                                                        </span>
                                                        <?php } ?>
                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Penyewa">
                                                            <button onClick="" data-toggle="modal" data-target="#modalUsersDetail" type="button" class="btn btn-primary btn-circle btn-icon btn-sm">
                                                                <i class="fa fa-user"></i></button>
                                                        </span>
                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Pesanan">
                                                            <button onClick="detailpesanan('<?= $row['id_transaction'] ?>','<?= base_url() ?>')" data-toggle="modal" data-target="#modal_pesanan" type="button" class="btn btn-outline-info btn-circle btn-icon btn-sm">
                                                                <i class="fa fa-book"></i></button>
                                                        </span>
                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                            <button onClick="" data-toggle="modal" data-target="#modal_delete" type="button" class="btn btn-outline-danger btn-circle btn-icon btn-sm">
                                                                <i class="fa fa-trash"></i></button>
                                                        </span>
                                                    </center>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th><center>No</center></th>
                                                <th><center>ID Order</center></th>
                                                <th><center>Nama Penyewa</center></th>
                                                <th> <center>Tanggal</center></th>
                                                <th><center>Nominal</center> </th>
                                                <th><center>Bukti</center></th>
                                                <th><center>Status</center></th>
                                                <th><center>Action</center></th>
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

<<div class="modal fade" id="modalUsersDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


    <div class="modal fade" id="modal_delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_title">Form Pembatalan Penyewaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    Anda yakin ingin membatalkan penyewaan?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a id="buttondelete" class="btn btn-primary">Hapus Data</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_konfirmasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_titel">Form Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    Apakah anda yakin memproses penyewaan tersebut ?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a type="button" id="button" class="btn btn-primary">Submit</a>
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
  function konfirmasi_pembayaran(base_url){
    document.getElementById('button').href = base_url;

  }  
    
    </script>