<?php 

class Cart extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelCart');
    }
}