<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb banner-bg">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first color-black">
                <h1 class="color-black"><?= $title ?></h1>
                <nav class="d-flex align-items-center ">
                    <a class="color-black" href="<?= base_url() ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a class="color-black" href="#"><?= $title ?><span class="lnr lnr-arrow-right"></span></a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container mt-3">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5 mb-5">
            <div class="sidebar-categories">
                <div class="head">Foto Profile</div>
                <center>
                    <form action="<?= base_url() ?>profile/changePicture" method="post" enctype="multipart/form-data">
                    <?php if($data_detail['photo'] == null){ ?>
                    <img class="mt-3 " style="width: 100px;height:100px;" src="<?= base_url() ?>assets/home/user.png" alt="">
                    <?php }else{ ?>
                    <img class="mt-3 " style="width: 100px;height:100px;" src="<?= base_url() ?>assets/home/foto_profile/<?= $data_detail['photo'] ?>" alt="">
                    <?php } ?>
                    <input type="file" name="photo" id="actual-btn" hidden /><br>
                    <label class="btn_upload" for="actual-btn">Choose file</label> <span id="file-chosen">No file chosen</span><br>
                    <button type="submit" class="btn btn-outline-primary btn-sm mt-3">Ubah Foto</button>
                    </form>
                </center>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7 mb-5">
            <div class="sidebar-categories">
                <div class="head">User Profile</div>
                <div class="container mt-3">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Detail Profile</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Ubah Profile</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Ubah Password</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row container mt-3">
                                <div class="col-sm-6 mt-3">
                                
                                    <?php if ($this->session->userdata('username')) { ?>
                                        <div class="form-group row">
                                            <span class="col-sm-4 ">Username</span>
                                            <span class="col-sm-8 font-weight-bold"> : <?= $this->session->userdata('username') ?> </span>
                                        </div>
                                    <?php } ?>
                                    <div class="form-group row">
                                        <span class="col-sm-4">Email</span>
                                        <span class="col-sm-8 font-weight-bold"> : <?= $data_detail['email'] ?> </span>
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-sm-4">Nama Lengkap</span>
                                        <span class="col-sm-8 font-weight-bold"> : <?= $data_detail['full_name'] ?> </span>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-3">
                                    <div class="form-group row">
                                        <span class="col-sm-4 ">NIK</span>
                                        <span class="col-sm-8 font-weight-bold"> : <?= $data_detail['nik'] ?> </span>
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-sm-4">Alamat</span>
                                        <span class="col-sm-8 font-weight-bold"> : <?= $data_detail['address'] ?> </span>
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-sm-4">No Telepon</span>
                                        <span class="col-sm-8 font-weight-bold"> : <?= $data_detail['phone'] ?> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row container mt-3">
                                <div class="col-sm-6 mt-3">
                                <form action="<?= base_url()?>profile/update_profile" method="post">
                                    <div class="form-group row">
                                        <label class="col-sm-4">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="username" value="<?= $data_detail['username']?>" readonly class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-sm-4">Email</span>
                                        <div class="col-sm-8">
                                            <input type="text" name="email" value="<?= $data_detail['email']?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-sm-4">Nama Lengkap</span>
                                        <div class="col-sm-8">
                                            <input type="text" name="full_name" value="<?= $data_detail['full_name']?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-sm-4"></span>
                                        <div class="col-sm-8">
                                            <button class="btn btn-outline-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-3">
                                    <div class="form-group row">
                                        <span class="col-sm-4 ">NIK</span>
                                        <div class="col-sm-8">
                                            <input type="text" name="nik" value="<?= $data_detail['nik']?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-sm-4">Alamat</span>
                                        <div class="col-sm-8">
                                            <input type="text" name="alamat" value="<?= $data_detail['address']?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-sm-4">No Telepon</span>
                                        <div class="col-sm-8">
                                            <input type="text" name="phone" value="<?= $data_detail['phone']?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="container mt-3">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2">Password Lama</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="old_password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2">Password Baru</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="new_password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2">Konfirmasi Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="confirm_password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-10">
                                        <button class="btn btn-outline-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const actualBtn = document.getElementById('actual-btn');

    const fileChosen = document.getElementById('file-chosen');

    actualBtn.addEventListener('change', function() {
        fileChosen.textContent = this.files[0].name
    })
</script>