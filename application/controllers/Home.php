<?php 

    class Home extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelMerk');
            $this->load->model('ModelType');
            $this->load->model('ModelProduct');
            $this->load->model('ModelUsers');
            $this->load->model('ModelCart');
            $this->load->model('ModelCheckout');
            $this->load->model('ModelTransaction');
        }

        public function index(){
            $data = array(
                "active_home"   => "active",
                "title" => "Home",
                "latest_product"    => $this->ModelProduct->getDataProductLatest(),
                
            );
          
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/layout/homepage');
            $this->load->view('home/layout/footer');
            
        }
        public function all_product(){
            $data = array(
                "active_allproduct"     => "active",
                "data_merk"         => $this->ModelMerk->getDataMerk(),
                "data_product"      => $this->ModelProduct->getDataProduct(),
                "title"             => "Semua Produk"
            );
            
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/product/v_all_product');
            $this->load->view('home/layout/footer');
        }

        public function detail_product(){
            $id  = $this->uri->segment(3);
            $data = array(
                "active_allproduct"     => "active",
                "title"                 => "Detail Produk",
                "data_product"          => $this->ModelProduct->getDetailProduct($id)
            );
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/product/detail_product');
            $this->load->view('home/layout/footer');
        }

        public function profile(){
            $id_user = $this->session->userdata('id_user');

            if($id_user == null){
                redirect(base_url('home'));
            }

            $data = array(
                "active_allproduct"     => "active",
                "title"                 => "Profile",
                "data_detail"           => $this->ModelUsers->getDataDetail($id_user)
            );
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/profile/v_profile');
            $this->load->view('home/layout/footer');
        }

        public function cart(){
            $id_user = $this->session->userdata('id_user');
            $dataCart = $this->ModelCart->getDataByIdUsers($id_user);

            if($id_user == null){
                redirect(base_url('home'));
            }

            $data = array(
                "active_cart"           => "active",
                "title"                 => "Daftar Keranjang",
                "data_cart"             => $this->ModelCart->getDataCart($id_user),
                "count_cart"            => count($dataCart)
            );
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/product/v_cart');
            $this->load->view('home/layout/footer');
        }

        public function checkout(){
            $id_user = $this->session->userdata('id_user');
           $data = array(
            "active_checkout"       => "active",
            "title"                 => "Checkout",
            "data_checkout"         => $this->ModelCheckout->getDataCheckout($id_user),
            "data_customer"         => $this->ModelCheckout->getDataCustomer($id_user)
           ); 
          
           $this->load->view('home/layout/header',$data);
           $this->load->view('home/layout/navbar');
           $this->load->view('home/checkout/checkout');
           $this->load->view('home/layout/footer');
        }
        public function list_transaction()
        {
            $idUser = $this->session->userdata('id_user');
            $data = array(
                "active_transaction"    => "active",
                "title"                 => "Riwayat Transaksi",
                "waiting_process"       => $this->ModelTransaction->getDataTransactionByStatusUser(0,$idUser),
                "waiting_payment"   => $this->ModelTransaction->getDataTransactionBy2StatusUser(1,2,$idUser),
                "done_transaction"      => $this->ModelTransaction->getDataTransactionByStatusUser(3,$idUser),
            );
            // var_dump($data['waiting_payment']);die;
            $this->load->view('home/layout/header', $data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/transaction/v_transaction');
            $this->load->view('home/layout/footer');
        }
    
        public function recommendation(){
            $data = array(
                "active_recommendation" => "active",
                "title"                 => "Rekomendasi",
                'data_merk'             => $this->ModelMerk->getDataMerk(),
                'data_type'             => $this->ModelType->getDataType()
            );
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/product/rekomendasi_product');
            $this->load->view('home/layout/footer');
        }
    
        public function confirmation(){
            $id_transaction = $this->uri->segment(3);
            $get_datatransaction = $this->ModelTransaction->getNumberByIdTransaksi($id_transaction);
            $number = $get_datatransaction['number'];

            $data = array(
                "active_confirmation"       => "active",
                "title"                 => "Konfirmasi",
                "data_transaction"      => $this->ModelTransaction->getDataTransaction($id_transaction),
                "data_transaction_group" => $this->ModelTransaction->getDataTransactionGroup($id_transaction),
                "data_barang"           => $this->ModelTransaction->getDataBarangByNumber($number)
               ); 
            
               $this->load->view('home/layout/header',$data);
               $this->load->view('home/layout/navbar');
               $this->load->view('home/confirmation/confirmation');
               $this->load->view('home/layout/footer');
        }
    }