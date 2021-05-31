<?php

    class Type extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelType');
        }
        public function add_type(){
            $type_name = $this->input->post('type_name');
            $score = $this->input->post('score');

            if($type_name != null && $score != null){
                $data = array(
                    'type_name' => $type_name,
                    'score' => $score
                );
                $this->ModelType->addData($data);
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                $this->session->set_flashdata('title', 'Berhasil!');
                redirect(base_url('dashboard/data_type'));
            }else{
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('pesan', 'Data Tidak Boleh Kosong!');
                $this->session->set_flashdata('title', 'Gagal!');
                redirect(base_url('dashboard/data_type'));
            }
        }
        public function update_type(){
            $id_type = $this->input->post('id_type');
            $type_name = $this->input->post('type_name');
            $score = $this->input->post('score');

            if($type_name != null && $score != null){
                $data = array(
                    'type_name' => $type_name,
                    'score' => $score
                );
                $this->ModelType->UpdateDataType($data,$id_type);
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil Diubah');
                $this->session->set_flashdata('title', 'Berhasil!');
                redirect(base_url('dashboard/data_type'));
            }else{
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('pesan', 'Data Tidak Boleh Kosong');
                $this->session->set_flashdata('title', 'Gagal!');
                redirect(base_url('dashboard/data_type')); 
            }
        }
        public function delete_type(){
            $id_type = $this->uri->segment(3);
    
            $this->ModelType->deleteData($id_type);
            $this->session->set_flashdata('type','success');
            $this->session->set_flashdata('pesan',' Data Berhasil Dihapus');
            $this->session->set_flashdata('title','Berhasil!');
            redirect(base_url('dashboard/data_type'));
        }

    }