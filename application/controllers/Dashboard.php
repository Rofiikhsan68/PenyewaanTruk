<?php

Class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

    }
    public function index(){
        $this->load->view('dashboard/layout/header');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/content');
        $this->load->view('dashboard/layout/footer');
    }
}