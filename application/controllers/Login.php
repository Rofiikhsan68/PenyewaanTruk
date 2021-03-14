<?php 

    class Login extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        }

        public function index(){

            $data = array(
                'active_login' => 'active',
                'title' => 'Login/Register'
            );

            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('login/login');
            $this->load->view('home/layout/footer');
        }
    }