<body>

    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img style="height: 120px; width:120px;" src="<?= base_url() ?>assets/home/img/logo.png" alt=""></a>
                    <h4>ESTU TRANSINDO</h4>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <div class="row ml-auto mr-4">
                            <div class="col search-boxxx" style="float:right;">
                                <form method="post" action="<?= base_url() ?>product/search_product/">
                                    <?php if ($this->session->userdata('username')) { ?>
                                        <input class="search-input" name="search" style="width: 200px;" placeholder="Cari Produk Disini..." type="text" name="search">
                                    <?php } else { ?>
                                        <input class="search-input" style="width: 400px;" placeholder="Cari Produk Disini..." type="text" name="search">
                                    <?php } ?>
                                    <input type="hidden" name="uri_first" value="<?= $this->uri->segment(1); ?>">
                                    <input type="hidden" name="uri_second" value="<?= $this->uri->segment(2); ?>">
                                    
                                    <button type="submit" class="lnr lnr-magnifier"></button>
                                </form>
                            </div>
                        </div>
                        <ul class="nav navbar-nav menu_nav ">
                            <?php if (isset($active_home)) { ?>
                                <li class="nav-item active mr-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                            <?php } else { ?>
                                <li class="nav-item mr-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                            <?php } ?>
                            <?php if (isset($active_allproduct)) { ?>
                                <li class="nav-item active mr-item"><a class="nav-link" href="<?= base_url() ?>home/all_product/">All Product</a></li>
                            <?php } else { ?>
                                <li class="nav-item mr-item"><a class="nav-link" href="<?= base_url() ?>home/all_product/">All Product</a></li>
                            <?php } ?>
                            <?php if (isset($active_recommendation)) { ?>
                            <li class="nav-item active mr-item"><a class="nav-link" href="<?= base_url() ?>home/recommendation">Rekomendasi</a></li>
                            <?php }else{ ?>
                                <li class="nav-item  mr-item"><a class="nav-link" href="<?= base_url() ?>home/recommendation">Rekomendasi</a></li>
                            <?php } ?>
                            <?php if ($this->session->userdata('username')) { ?>
                                <li class="nav-item mr-item"><a class="nav-link" href="<?= base_url() ?>home/list_transaction">Transaction</a></li>
                            <li class="nav-item mr-item"><a class="nav-link" href="<?= base_url() ?>home/profile">Profile</a></li>
                            <?php } ?>
                            <?php if ($this->session->userdata('username') == null) { ?>
                                <li class="nav-item mr-item"><a class="nav-link" href="<?= base_url() ?>login/">Login</a></li>
                            <?php } else { ?>
                                <li class="nav-item "><a class="nav-link " href="<?= base_url() ?>login/logout_process">Logout</a></li>
                            <?php } ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php if ($this->session->userdata('username') != null) { ?>
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
    <?php if ($this->session->flashdata('pesan')) { ?>
        <p style="display: none;" id="pesan"><?= $this->session->flashdata('pesan') ?></p>
        <p style="display: none;" id="type"><?= $this->session->flashdata('type') ?></p>
        <p style="display: none;" id="title"><?= $this->session->flashdata('title') ?></p>
    <?php } ?>
    <?php if ($this->session->flashdata('text_toastr')) { ?>
        <p style="display:none;" id="text_toastr"><?= $this->session->flashdata('text_toastr'); ?></p>
        <p style="display:none;" id="type_toastr"><?= $this->session->flashdata('type_toastr'); ?></p>
    <?php } ?>