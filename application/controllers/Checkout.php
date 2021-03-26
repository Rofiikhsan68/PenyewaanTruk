<?php

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelCheckout');
        $this->load->model('ModelCart');
    }
    public function processCheckout()
    {
        $id_user = $this->session->userdata('id_user');

        $id_cart = $this->input->post('id_cart');
        $total_price = $this->input->post('total_price');
        $id_transaction = "TRN" . date('ymd') . rand(1111, 9999);
       
        for($i = 0; $i <count($id_cart);$i++){
            $dataTransaction = array([
                'id_transaction' => $id_transaction,
                'id_cart'        => $id_cart[$i],
                'transaction_date' => date('y-m-d'),
                'transaction_time' => date('H:i:s'),
                'total_price' => $total_price,
            ]);
            $this->ModelCheckout->inserDataTransaction($dataTransaction);
        }
        $dataStatus = array(
            'status' => 1,
        );
        $this->ModelCart->updateDataCart($dataStatus, $id_user);
        redirect(base_url('home/confirmation/' . $id_transaction));
    }
}
