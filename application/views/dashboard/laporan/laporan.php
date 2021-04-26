<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Transaksi</li>
                        
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

                        <!-- /.card-header -->

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Laporan</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped dataTable js-exportable max-width100">
                                <thead>
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
                                            <center>Total Transaksi</center>
                                        </th>
                                        <th>
                                            <center>Uang Muka</center>
                                        </th>
                                        <th>
                                            <center>Uang Pelunasan</center>
                                        </th>
                                        <th>
                                            <center>Status</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $i=1; $y=0; foreach($data_laporan as $row) { ?>
                                   <?php $y=+ $row['down_payment'] + $row['remaining_payment'] ?>
                                        <tr>
                                            <td>
                                                <center><?= $i++ ?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['full_name']?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['id_transaction']?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['transaction_date']?></center>
                                            </td>
                                            <td>
                                                <center><?= $y ?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['down_payment']?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['remaining_payment']?></center>
                                            </td>
                                            <td>
                                                <center>
                                                
                                                   <span class="badge badge-warning">Belum Diproses</span> 
                                                
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
                                            <center>Total Transaksi</center>
                                        </th>
                                        <th>
                                            <center>Uang Muka</center>
                                        </th>
                                        <th>
                                            <center>Uang Pelunasan</center>
                                        </th>
                                        <th>
                                            <center>Status</center>
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
                            <th><center>NIK</center></th>
                            <th><center>Nama Lengkap</center></th>
                            <th><center>Email</center></th>
                            <th><center>Alamat</center></th>
                            <th><center>No Handphone</center></th>


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
        <a  id="buttondelete" class="btn btn-primary">Hapus Data</a>
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
</div>