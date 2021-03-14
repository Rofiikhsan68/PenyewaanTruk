<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Produk</li>
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
                            <h3 class="card-title">Data Produk</h3>
                            <button onClick="add_product('<?= base_url() ?>product/add_product')" data-toggle="modal" data-target="#modaltambah" style="float: right;position:relative;bottom:2px;" class="btn btn-primary">Tambah Data</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>No</center>
                                        </th>
                                        <th>
                                            <center>Nama Produk</center>
                                        </th>
                                        <th>
                                            <center>Merk</center>
                                        </th>
                                        <th>
                                            <center>Type</center>
                                        </th>
                                        <th>
                                            <center>Deskripsi</center>
                                        </th>
                                        <th>
                                            <center>Kapasitas</center>
                                        </th>
                                        <th>
                                            <center>Radius</center>
                                        </th>
                                        <th>
                                            <center>Action</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        <tr>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                                        <button onClick="" data-toggle="modal" data-target="#modaltambah" type="button" class="btn btn-primary btn-circle btn-icon">
                                                            <i class="fa fa-edit"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                             
                                                        <button onClick="" data-toggle="modal" data-target="#modal_delete" type="button" class="btn btn-danger btn-circle btn-icon">
                                                            <i class="fa fa-trash"></i></button>
                                                    </span>
                                                </center>
                                            </td>
                                        </tr>
                                     
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>
                                            <center>No</center>
                                        </th>
                                        <th>
                                            <center>Nama Produk</center>
                                        </th>
                                        <th>
                                            <center>Merk</center>
                                        </th>
                                        <th>
                                            <center>Type</center>
                                        </th>
                                        <th>
                                            <center>Deskripsi</center>
                                        </th>
                                        <th>
                                            <center>Kapasitas</center>
                                        </th>
                                        <th>
                                            <center>Radius</center>
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

<!-- Modal -->
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_merk" id="id_merk" class="form-control">
                        <label for="">Nama Merk</label>
                        <input type="text" placeholder="Masukkan Nama Merk" id="merk_name" name="merk_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nilai</label>
                        <input type="text" placeholder="Masukkan Nilai" id="score" name="score" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="button" class="btn btn-primary"></button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="modal_delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_title">Form Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      Anda yakin ingin menghapus data?
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a  id="buttondelete" class="btn btn-primary">Hapus Data</a>
      </div>
    </div>
  </div>
</div>
</div>