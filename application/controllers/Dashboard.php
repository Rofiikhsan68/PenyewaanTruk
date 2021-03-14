<?php

Class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMerk');

    }
    public function index(){
        $this->load->view('dashboard/layout/header');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/content');
        $this->load->view('dashboard/layout/footer');
    }
    public function data_merk(){
        $data =  array(
            "active_merk" => "active",
            "data_merk"   => $this->ModelMerk->getDataMerk()
        );
        
        $this->load->view('dashboard/layout/header',$data);
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/merk/data_merk');
        $this->load->view('dashboard/layout/footer');
    }
<<<<<<< HEAD

    public function data_product(){
        $data = array(
            "active_product" => "active",
        
        );
        $this->load->view('dashboard/layout/header',$data);
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/product/data_product');
=======
    public function data_type(){
        $data = array(
            "active_type" => "active",
            "title" => "Data Type"
        );

        $this->load->view('dashboard/layout/header',$data);
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/type/data_type');
>>>>>>> 160f731d7aae015a46737dbf01449c355b381e09
        $this->load->view('dashboard/layout/footer');
    }
}