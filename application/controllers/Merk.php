<?php

class Merk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('ModelMerk');
    }
    public function add_merk()
    {
        $merk_name = $this->input->post('merk_name');
        $score = $this->input->post('score');
        if ($merk_name != null && $score != null) {
            $data = array(
                'merk_name' => $merk_name,
                'score'     => $score,
            );
            $this->ModelMerk->addData($data);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Data Added Successfully');
            $this->session->set_flashdata('title', 'Was Successful!');
            redirect(base_url('dashboard/data_merk'));
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'data failed to add ');
            $this->session->set_flashdata('title', 'Failed!');
            redirect(base_url('dashboard/data_merk'));
        }
    }
    public function update_merk()
    {
        $id_merk = $this->input->post('id_merk');
        $merk_name = $this->input->post('merk_name');
        $score = $this->input->post('score');

        if ($merk_name != null && $score != null) {
            $data = array(
                'merk_name' => $merk_name,
                'score'     => $score
            );
            $this->ModelMerk->updateData($data,$id_merk);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'data has been changed successfully');
            $this->session->set_flashdata('title', 'Was Successful!');
            redirect(base_url('dashboard/data_merk'));
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'data failed to add ');
            $this->session->set_flashdata('title', 'Failed!');
            redirect(base_url('dashboard/data_merk'));
        }
    }
    public function delete_merk(){
        $id_merk = $this->uri->segment(3);

        $this->ModelMerk->deleteData($id_merk);
        $this->session->set_flashdata('type','success');
        $this->session->set_flashdata('pesan',' data deleted successfully');
        $this->session->set_flashdata('title','Was Successful!');
        redirect(base_url('dashboard/data_merk'));
    }
}
