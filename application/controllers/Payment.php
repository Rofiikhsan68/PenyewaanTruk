<?php

    class Payment extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelTransaction');
        }

        public function payment_dp(){
            $amountPaid = $this->input->post('amount_paid_input');
            $idTransaction = $this->input->post('id_transaction');
            $totalPrice = $this->input->post('total_price');
            $cekPhoto = $_FILES['photo']['name'];
            if($cekPhoto != null){
                $config['upload_path']      = './assets/foto_bukti/';
                $config['allowed_types']    = 'gif|jpg|png|jpeg';
                $this->upload->initialize($config);
                if($this->upload->do_upload('photo')){
                    $data = [
                        'payment_status'    => 2,
                        'down_payment'      => $amountPaid,
                        'remaining_payment' => $totalPrice-$amountPaid
                    ];
                    $this->ModelTransaction->uploadDp($data,$idTransaction);
                    $this->session->set_flashdata("pesan","Bukti Pembayaran berhasil diupload,silahkan tunggu konfirmasi selanjutnya");
                    $this->session->set_flashdata("title","Pembayaran Menuggu Proses !");
                    $this->session->set_flashdata("type","info");
                    redirect(base_url('home/list_transaction'));
                }else{
                    $this->session->set_flashdata("pesan","File Bukti pembayaran anda tidak sah !");
                    $this->session->set_flashdata("title","Pembayaran Gagal !");
                    $this->session->set_flashdata("type","warning");
                    redirect(base_url('home/list_transaction'));
                }
            }else{
                $this->session->set_flashdata("pesan","Mohon masukan bukti pembayaran anda !");
                $this->session->set_flashdata("title","Pembayaran Gagal !");
                $this->session->set_flashdata("type","warning");
                redirect(base_url('home/list_transaction'));
            }
        }
    }