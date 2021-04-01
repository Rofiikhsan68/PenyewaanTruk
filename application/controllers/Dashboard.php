<?php

Class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMerk');
        $this->load->model('ModelType');
        $this->load->model('ModelProduct');
        $this->load->model('ModelUsers');
        $this->load->model('ModelTransaction');
       
        if($this->session->userdata('username') == null || $this->session->userdata('admin') != true){
            redirect(base_url());
        }

    }
    public function index(){
        $data = [
            'title' => "Dashboard",
            'active_home'   => "active",
            "data_type"     => $this->ModelType->getDataType(),
            "data_merk"     => $this->ModelMerk->getDataMerk(),
            "data_product"  => $this->ModelProduct->getDataProduct(),
            "data_customer" => $this->ModelUsers->getAllDataUsers(0)
        ];
        $this->load->view('dashboard/layout/header',$data);
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/content');
        $this->load->view('dashboard/layout/footer');
    }
    public function data_merk(){
        $data =  array(
            "active_merk" => "active",
            "data_merk"   => $this->ModelMerk->getDataMerk(),
            'title' => "Data Merk"
        );
        
        $this->load->view('dashboard/layout/header',$data);
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/merk/data_merk');
        $this->load->view('dashboard/layout/footer');
    }


    public function data_product(){
        $data = array(
            "active_product" => "active",
            "data_type"     => $this->ModelType->getDataType(),
            "data_merk"     => $this->ModelMerk->getDataMerk(),
            "data_product"  => $this->ModelProduct->getDataProduct(),
            'title' => "Data Produk"
        );
        
        $this->load->view('dashboard/layout/header',$data);
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/product/data_product');
        $this->load->view('dashboard/layout/footer');
    }
    public function data_type(){
        $data = array(
            "active_type" => "active",
            "title" => "Data Type",
            "data_type" => $this->ModelType->getDataType(),
            'title' => "Data Tipe Truk"
        );

        $this->load->view('dashboard/layout/header',$data);
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/type/data_type');
        $this->load->view('dashboard/layout/footer');
    }

    public function data_customers(){
        $data = array(
            "active_customers" => "active",
            "title" => "Data Pelanggan",
            "data_users"    => $this->ModelUsers->getAllDataUsers(0)
        );
        $this->load->view('dashboard/layout/header',$data);
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/users/v_users');
        $this->load->view('dashboard/layout/footer');
    }
    public function data_penyewaan(){
        $data = array(
            "active_leasing" => "active",
            "title" => "Data Penyewaan",
            "data_penyewaan" => $this->ModelTransaction->getDataTransactionByStatus(0),
        );
      
        $this->load->view('dashboard/layout/header',$data);
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/penyewaan/data_penyewaan');
        $this->load->view('dashboard/layout/footer');
    }
}