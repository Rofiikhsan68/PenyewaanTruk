<?php 

    class Home extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelMerk');
            $this->load->model('ModelProduct');
        }

        public function index(){
            $data = array(
                "active_home"   => "active",
                "title" => "Home"
                
            );
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/layout/homepage');
            $this->load->view('home/layout/footer');
            
        }
        public function all_product(){
            $data = array(
                "active_allproduct"     => "active",
                "data_merk"         => $this->ModelMerk->getDataMerk(),
                "title"             => "Semua Produk"
            );
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/product/v_all_product');
            $this->load->view('home/layout/footer');
        }

        public function detail_product(){
            $id  = $this->uri->segment(3);
            $data = array(
                "active_allproduct"     => "active",
                "title"                 => "Detail Produk",
                "data_product"          => $this->ModelProduct->getDetailProduct($id)
            );
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/product/detail_product');
            $this->load->view('home/layout/footer');
        }

        public function profile(){
            // $id  = $this->uri->segment(3);
            $data = array(
                "active_allproduct"     => "active",
                "title"                 => "Profile",
            );
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/profile/v_profile');
            $this->load->view('home/layout/footer');
        }
    }