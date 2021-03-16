<?php 

    class Login extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelUsers');
        }

        public function index(){

            if($this->session->userdata('username')!= null){
                redirect(base_url('home'));
            }

            $data = array(
                'active_login' => 'active',
                'title' => 'Login/Register'
            );

            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('login/login');
            $this->load->view('home/layout/footer');
        }

        public function login_process(){
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if($username != null && $password != null){
                $data = $this->ModelUsers->getDataByUsername($username);
                
                if($data != null){
                    $db_password = $data['password'];
                    if(password_verify($password,$db_password)){
                        $db_role = $data['role'];
                        if($db_role > 0){
    
                            $this->session->set_userdata("username",$data['username']);
                            $this->session->set_userdata("email",$data['email']);
                            $this->session->set_userdata("id_user",$data['id_user']);
                            $this->session->set_userdata("admin",true);
                            redirect(base_url('dashboard'));
                        }else{
                            $this->session->set_userdata("username",$data['username']);
                            $this->session->set_userdata("email",$data['email']);
                            $this->session->set_userdata("id_user",$data['id_user']);
                            $this->session->set_userdata("admin",false);
                            redirect(base_url('home'));
                        }
                    }else{
                        $this->session->set_flashdata("pesan","Password Salah");
                        $this->session->set_flashdata("title","Login Gagal!!");
                        $this->session->set_flashdata("type","warning");
                        redirect(base_url('logi'));
                    }
               
                }else{
                    $this->session->set_flashdata("pesan","Username atau Email tidak ditemukan");
                    $this->session->set_flashdata("title","Login Gagal !!");
                    $this->session->set_flashdata("type","warning");
                    redirect(base_url('login'));
                }
            }else{
                    $this->session->set_flashdata("pesan","Username dan Password Tidak Boleh Kosong");
                    $this->session->set_flashdata("title","Login Gagal !!");
                    $this->session->set_flashdata("type","warning");
                    redirect(base_url('login'));
            }
        }
        public function logout_process(){
            session_destroy();
            redirect(base_url('home'));
        }
    }