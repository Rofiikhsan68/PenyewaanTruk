<?php

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelCheckout');
        $this->load->model('ModelCart');
        $this->load->model('ModelTransaction');
        $this->load->model('ModelUsers');
    }
    public function processCheckout()
    {
        $id_user = $this->session->userdata('id_user');
        $numberIdentity = $this->input->post('number_identity');
        $fullName = $this->input->post('full_name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');

        $id_cart = $this->input->post('id_cart');
        $total_price = $this->input->post('total_price');
        $destination = $this->input->post('destination');
        $note = $this->input->post('note');
        $goods_name = $this->input->post('goods_name');
        $weight = $this->input->post('weight');
        $id_transaction = "TRN" . date('ymd') . rand(1111, 9999);



        //update data users
        $updateDataUsers = array(
            'email' => $email
        );
        $updateDetailUsers = array(
            'full_name' => $fullName,
            'phone'     => $phone,
            'nik'       => $numberIdentity
        );
        $this->ModelUsers->updateDataUsers($updateDataUsers, 'tbl_user', $id_user);
        $this->ModelUsers->updateDataUsers($updateDetailUsers, 'tbl_detailuser', $id_user);

        for ($i = 0; $i < count($id_cart); $i++) {
            $dataTransaction = array([
                'id_transaction' => $id_transaction,
                'id_cart'        => $id_cart[$i],
                'transaction_date' => date('y-m-d'),
                'transaction_time' => date('H:i:s'),
                'total_price' => $total_price,
                'destination' => $destination,
                'note' => $note
            ]);
            $this->ModelCheckout->insertDataTransaction($dataTransaction);
        }
        $getDataTransaction = $this->ModelTransaction->getDataTransactionRow($id_transaction);
        $numberTransaction = $getDataTransaction['number'];
        for ($x = 0; $x < count($goods_name); $x++) {
            $dataGoods = array([
                'goods_name'    => $goods_name[$x],
                'weight'        => $weight[$x],
                'number_transaction'    => $numberTransaction
            ]);
            $this->ModelTransaction->insertGoodsBatch($dataGoods);
        }
        $dataStatus = array(
            'status' => 1,
        );
        $this->ModelCart->updateDataCart($dataStatus, $id_user);
        redirect(base_url('home/confirmation/' . $id_transaction));
    }
    public function update_alamat()
    {
        $id_user = $this->session->userdata('id_user');
        $address = $this->input->post('address');

        if ($address != null) {
            $data = array(
                'address' => $address,
            );
            $this->ModelCheckout->update_alamat($data, $id_user);
            $this->session->set_flashdata("pesan", "Berhasil Memperbarui Alamat");
            $this->session->set_flashdata("title", "Berhasil !!");
            $this->session->set_flashdata("type", "success");
            redirect(base_url('home/checkout'));
        } else {

            $this->session->set_flashdata("pesan", "Gagal Memperbarui Alamat");
            $this->session->set_flashdata("title", "Gagal!!");
            $this->session->set_flashdata("type", "warning");
            redirect(base_url('home/checkout'));
        }
    }
}
