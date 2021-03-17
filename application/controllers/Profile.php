<?php 

    class Profile extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelUsers');
        }

        public function changePicture(){
            $config['upload_path']      = './assets/home/foto_profile/';
            $config['allowed_types']    = 'gif|jpg|png';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('photo')) {
                $data_file = array('upload_data' => $this->upload->data());
                $nama_file = $data_file['upload_data']['file_name'];
                $updateProfile = [
                    'photo'     => $nama_file
                ];
                $id = $this->session->userdata('id_user');
                $this->ModelUsers->updateDataUsers($updateProfile,'tbl_detailuser',$id);
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('pesan', 'Foto Profil Berhasil diperbarui');
                $this->session->set_flashdata('title', 'Sukses');
                redirect(base_url('home/profile'));
            }else{
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('pesan', 'Foto Tidak Tersimpan');
                $this->session->set_flashdata('title', 'Gagal!');
                redirect(base_url('home/profile'));
            }
        }
        public function update_profile(){

            $id_user = $this->session->userdata('id_user');
            $email = $this->input->post('email');
            $full_name = $this->input->post('full_name');
            $nik = $this->input->post('nik');
            $alamat = $this->input->post('alamat');
            $phone = $this->input->post('phone');

            $data = array(
              
                'full_name' => $full_name,
                'nik'       => $nik,
                'address'    => $alamat,
                'phone'     => $phone,
            );
            $this->ModelUsers->updateDetailProfileByIdUser($data,$id_user);
            $data_email = array(
                'email'    => $email,
            );
            $this->ModelUsers->updateEmailByIdUsers($data_email,$id_user);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Profil Berhasil diperbarui');
            $this->session->set_flashdata('title', 'Sukses');
            redirect(base_url('home/profile'));
        }
    }