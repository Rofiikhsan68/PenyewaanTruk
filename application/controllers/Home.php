<?php 

    class Home extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        }

        public function index(){
            $data = array(
                "active_home"   => "active",

            );
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/layout/homepage');
            $this->load->view('home/layout/footer');
            
        }
        public function product(){
            $data = array(
            "active_allproduct"     => "active",

            );
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            
            $this->load->view('home/layout/footer');
        }
    }