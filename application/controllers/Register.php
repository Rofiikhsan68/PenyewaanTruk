<?php

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUsers');
    }

    public function index()
    {
        $data = array(
            'active_login' => 'active',
            'title' => 'Register'
        );

        $this->load->view('home/layout/header', $data);
        $this->load->view('home/layout/navbar');
        $this->load->view('login/v_register');
        $this->load->view('home/layout/footer');
    }

    public function processRegister()
    {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirmPassword = $this->input->post('confirm_password');

        if ($username != null && $email != null && $password != null && $confirmPassword != null) {
            if ($confirmPassword == $password) {
                $cekUsername = $this->ModelUsers->getRowData($username);
                if ($cekUsername != null) {
                    $this->session->set_flashdata('type', 'error');
                    $this->session->set_flashdata('pesan', 'Mohon Maaf, Username sudah digunakan');
                    $this->session->set_flashdata('title', 'Daftar Akun Gagal!');
                    redirect(base_url('register/'));
                }
                $cekEmail = $this->ModelUsers->getRowData($email);
                if($cekEmail != null){
                    $this->session->set_flashdata('type', 'error');
                    $this->session->set_flashdata('pesan', 'Mohon Maaf, Email sudah digunakan');
                    $this->session->set_flashdata('title', 'Daftar Akun Gagal!');
                    redirect(base_url('register/'));
                }
                $insertUsers = [
                    'username'  => $username,
                    'email'     => $email,
                    'password'  => md5($password)
                ];
                $this->ModelUsers->insertUsers($insertUsers,'tbl_user');
                $getDataDetail = $this->ModelUsers->getDetailLast();
                $insertDetail = [
                    'full_name' => $getDataDetail['username'],
                    'id_user'   => $getDataDetail['id_user']
                ];
                $this->ModelUsers->insertUsers($insertDetail,'tbl_detailuser');
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('pesan', 'Pendaftaran akun berhasil, Silahakan login');
                $this->session->set_flashdata('title', 'Daftar Akun Sukses!');
                redirect(base_url('register/'));
            } else {
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('pesan', 'Password dengan Konfirmasi password tidak sama');
                $this->session->set_flashdata('title', 'Daftar Akun Gagal!');
                redirect(base_url('register/'));
            }
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Mohon lengkapi data terlebih dahulu');
            $this->session->set_flashdata('title', 'Daftar Akun  Gagal!');
            redirect(base_url('register/'));
        }
    }
}
