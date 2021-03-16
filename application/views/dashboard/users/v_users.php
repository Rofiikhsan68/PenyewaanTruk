<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
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
                            <h3 class="card-title"><?= $title ?></h3>
                            <!-- <button onClick="add_product('<?= base_url() ?>product/add_product')" data-toggle="modal" data-target="#modaltambah" style="float: right;position:relative;bottom:2px;" class="btn btn-primary">Tambah Data</button> -->
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
                                            <center>Username</center>
                                        </th>
                                        <th>
                                            <center>Nama Lengkap</center>
                                        </th>
                                        <th>
                                            <center>Email</center>
                                        </th>
                                        <th>
                                            <center>NIK</center>
                                        </th>
                                        <th>
                                            <center>No Telepon</center>
                                        </th>
                                        <th>
                                            <center>Alamat</center>
                                        </th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($data_users as $row) { ?>
                                        <tr>
                                            <td>
                                                <center><?= $i++; ?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['username'] ?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['full_name'] ?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['email'] ?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['nik'] ?></center>
                                            </td>
                                           
                                            <td>
                                                <center><?= $row['phone'] ?></center>
                                            </td>
                                            <td>
                                                <center><?= $row['address'] ?></center>
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
                                            <center>Username</center>
                                        </th>
                                        <th>
                                            <center>Nama Lengkap</center>
                                        </th>
                                        <th>
                                            <center>Email</center>
                                        </th>
                                        <th>
                                            <center>NIK</center>
                                        </th>
                                        <th>
                                            <center>No Telepon</center>
                                        </th>
                                        <th>
                                            <center>Alamat</center>
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

</div>