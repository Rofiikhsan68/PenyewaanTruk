<?php


    class Cart extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelCart');
        }

        public function updateCart(){
            $idCart = $this->input->post('id_cart');
            $qty = $this->input->post('qty');

            for($i = 0; $i < count($idCart); $i++){
                $updateCart = array([
                    'id_cart'   => $idCart[$i],
                    'qty'       => $qty[$i]
                ]);
                $this->db->update_batch('tbl_cart',$updateCart,'id_cart');
            }
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Daftar Keranjang berhasil diperbarui');
            $this->session->set_flashdata('title', 'Berhasil!');
            redirect(base_url('home/cart'));
        }
    }