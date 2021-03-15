
<body>

<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img style="height: 120px; width:110px;" src="<?= base_url() ?>assets/home/img/icon.png" alt=""></a>
                <h3>WeTrif Cloth</h3>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
              
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <div class="row ml-auto mr-4">
                    <div class="col search-boxxx"  style="float:right;">
                        <form method="post" action="<?= base_url() ?>home/search_product/">
                        <?php if($this->session->userdata('username')){ ?>
                        <input class="search-input" name="input_search" style="width: 300px;" placeholder="Cari Produk Disini..." type="text" name="search">
                        <?php }else{ ?>
                            <input class="search-input" style="width: 430px;" placeholder="Cari Produk Disini..." type="text" name="input_search">
                        <?php } ?>
                        <button type="submit" class="lnr lnr-magnifier"></button>
                        </form>
                    </div>
                </div>
                    <ul class="nav navbar-nav menu_nav ">
                        <?php if(isset($active_home)){ ?>
                        <li class="nav-item active mr-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                        <?php }else{ ?>
                            <li class="nav-item mr-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                        <?php } ?>
                        <?php if(isset($active_allproduct)){ ?>
                        <li class="nav-item active mr-item"><a class="nav-link" href="<?= base_url() ?>home/all_product/">All Product</a></li>
                        <?php }else{ ?>
                            <li class="nav-item mr-item"><a class="nav-link" href="<?= base_url() ?>home/all_product/">All Product</a></li>
                        <?php } ?>
                        <?php if($this->session->userdata('username')){ ?>
                        <li class="nav-item mr-item"><a class="nav-link" href="<?= base_url() ?>home/transaction">Transaction</a></li>
                        <?php } ?>
                        <li class="nav-item mr-item"><a class="nav-link" href="<?= base_url() ?>home/profile">Profile</a></li>
                        <?php if($this->session->userdata('username') == null){ ?>
                        <li class="nav-item mr-item"><a class="nav-link" href="<?= base_url() ?>login/">Login</a></li>
                        <?php }else{ ?>
                            <li class="nav-item "><a class="nav-link " href="<?= base_url() ?>login/logout">Logout</a></li>
                        <?php } ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if($this->session->userdata('username') != null){ ?>
                        <li class="nav-item ml-item"><a href="<?= base_url() ?>home/cart/" class="cart"><span class="ti-bag"></span></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input bg_search" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between" method="post" action="<?= base_url() ?>home/search_product/">
                <input type="text" class="form-control" name="input_search" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- End Header Area -->
<?php if ($this->session->flashdata('text')) { ?>
        <p style="display: none;" id="text"><?= $this->session->flashdata('text') ?></p>
        <p style="display: none;" id="title"><?= $this->session->flashdata('title') ?></p>
        <p style="display: none;" id="icon"><?= $this->session->flashdata('icon') ?></p>
    <?php } ?>
    <?php if ($this->session->flashdata('text_toastr')) { ?>
    <p style="display:none;" id="text_toastr"><?= $this->session->flashdata('text_toastr'); ?></p>
    <p style="display:none;" id="type_toastr"><?= $this->session->flashdata('type_toastr'); ?></p>
  <?php } ?>