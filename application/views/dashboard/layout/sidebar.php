<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= base_url() ?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
      <div class="image">
        <img src="<?= base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu">
          <a href="<?= base_url() ?>dashboard" class="nav-link active">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>dashboard/data_product" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Produk
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">

            <i class="nav-icon fas fa-list"></i>
            <p>
              Data Transaksi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="http://localhost/fikfish_web/dashboard/list_pemesanan/" class="nav-link ">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Data Pemesanan</p>
                <span class="badge bg-color-primary right">0</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://localhost/fikfish_web/dashboard/list_pembayaran/" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Data Pembayaran</p>
                <span class="badge bg-color-primary right">0</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://localhost/fikfish_web/dashboard/list_pengemasan/" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Data Pengemasan</p>
                <span class="badge bg-color-primary right">0</span>
              </a>
            </li>


            <li class="nav-item">
              <a href="http://localhost/fikfish_web/dashboard/list_pengiriman/" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Data Pengiriman</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>dashboard/data_product" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Data Pelanggan
            </p>
          </a>
        </li>
        <li class="nav-header">lain-lain</li>
        <li class="nav-item">
          <a href="<?= base_url() ?>dashboard/data_merk" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Merk
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>dashboard/data_type" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Type
            </p>
          </a>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>