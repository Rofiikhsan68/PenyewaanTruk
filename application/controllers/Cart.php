<?php


    class Cart extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelCart');
        }

        public function add_cart()
        {
            $id_product = $this->uri->segment(3);
            $id_user = $this->session->userdata('id_user');
    
            $cekproduct = $this->ModelCart->getDataByUsers($id_product,$id_user);
            if ($id_user != null) {
                $statuscart = $cekproduct['status'];
                if ($cekproduct != null && $statuscart == 0) {
    
                    $id_cart = $cekproduct['id_cart'];
                    $beforamount = $cekproduct['qty'];
                    $afteramount = $beforamount + 1;
    
                    $data = array(
                        'id_product'    => $id_product,
                        'id_user'      => $id_user,
                        'qty'           => $afteramount,
                    );
                    $this->ModelCart->updateDataCartByIdUsers($data,$id_cart);
                    $this->session->set_flashdata('type', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah Ke Cart');
                    $this->session->set_flashdata('title', 'Berhasil!!!');
                    redirect(base_url());
                }else{
                    $data = array(
                        'id_product'    => $id_product,
                        'id_user'      => $id_user,
                        'qty'           => 1,
                    );
                    $this->ModelCart->insertDataCartByIdUsers($data);
                    $this->session->set_flashdata('type', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah Ke Cart');
                    $this->session->set_flashdata('title', 'Berhasil!!!');
                    redirect(base_url());
                }
            } else {
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('pesan', 'Login Terlebih Dahulu');
                $this->session->set_flashdata('title', 'Gagal!!!');
                redirect(base_url());
            }
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