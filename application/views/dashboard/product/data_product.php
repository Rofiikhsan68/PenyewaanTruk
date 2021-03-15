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
                                            <center>Foto</center>
                                        </th>
                                        <th>
                                            <center>Action</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $i=1; foreach($data_product as $row) { ?>
                                        <tr>
                                            <td>
                                                <center><?= $i++; ?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['product_name']?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['merk_name']?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['type_name']?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['description']?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['capacity']?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['radius']?></center>
                                            </td>
                                            <td>
                                                <center><a href="<?= base_url()?>assets/home/foto_produk/<?= $row['photo']?>"><img src="<?= base_url()?>assets/home/foto_produk/<?= $row['photo']?>" style="height: 50px; width:50px;" alt=""></a></center>
                                            </td>
                                            <td>
                                                <center>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                                        <button onClick="update_product('<?= base_url()?>product/update_product','<?= $row['product_name']?>','<?= $row['id_merk']?>','<?= $row['id_type']?>','<?= $row['description']?>','<?= $row['capacity']?>','<?= $row['radius']?>','<?= $row['photo']?>','<?= $row['id_product']?>')" data-toggle="modal" data-target="#modaltambah" type="button" class="btn btn-primary btn-circle btn-icon">
                                                            <i class="fa fa-edit"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                             
                                                        <button onClick="delete_product('')" data-toggle="modal" data-target="#modal_delete" type="button" class="btn btn-danger btn-circle btn-icon">
                                                            <i class="fa fa-trash"></i></button>
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
                                            <center>Foto</center>
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
                <form action="" id="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id_product" id="id_product" class="form-control">
                        <label for="">Nama Porduk</label>
                        <input type="text" placeholder="Masukkan Nama Produk" id="product_name" name="product_name" class="form-control">
                    </div>
                  <div class="form-group">
                    <label for="">Merk</label>
                    <select class="form-control" name="merk_name" id="merk_name">
                      <option value="">--Pilih Merk--</option>
                      <?php foreach($data_merk as $merk) {?>
                     <option value="<?= $merk['id_merk']?>"><?= $merk['merk_name']?></option>
                     <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Type</label>
                    <select class="form-control" name="type_name" id="type_name">
                      <option value="">--Pilih Type--</option>
                      <?php foreach($data_type as $type ){ ?>
                     <option value="<?= $type['id_type']?>"><?= $type['type_name']?></option>
                     <?php } ?>
                    </select>
        
                  </div>
                  <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea class="form-control" name="description" id="description" cols="50" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Kapasitas</label>
                        <input class="form-control" type="text" placeholder="Masukkan Kapasitas" id="capacity" name="capacity" class="form-control">
                    </div>
                    <div class="form-group">
                       <label for="">Radius</label>
                        <input class="form-control" type="text" placeholder="Masukkan Radius" id="radius" name="radius" class="form-control">
                    </div>
                  <div class="form-group">
                    <label>Foto</label>
                      <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                        <label id="photo" class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
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