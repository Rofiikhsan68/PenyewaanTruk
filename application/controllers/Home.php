<?php

Class Home extends CI_Controller{
 
    public function __construct()
    {
        parent::__construct();

    }
    public function index(){
     $this->load->view('home/kontol');
     $this->load->view('home/navbar');
    }
}