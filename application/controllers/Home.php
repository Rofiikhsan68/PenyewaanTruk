<?php 

    class Home extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        }

        public function index(){
            $this->load->view('home');
        }

        public function login(){
            $this->load->('contoh nih bim,ntar apus yee');
        }
    }