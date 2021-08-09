<?php

class Payment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelTransaction');
    }

    public function payment_dp()
    {
        $amountPaid = $this->input->post('amount_paid_input');
        $idTransaction = $this->input->post('id_transaction');
        $totalPrice = $this->input->post('total_price');
        $cekPhoto = $_FILES['photo']['name'];
        if ($cekPhoto != null) {
            $config['upload_path']      = './assets/foto_bukti/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('photo')) {
                $data_file = array('upload_data' => $this->upload->data());
                $nama_file = $data_file['upload_data']['file_name'];

                $data = [
                    'payment_status'    => 2,
                    'down_payment'      => $amountPaid,
                    'remaining_payment' => $totalPrice - $amountPaid,
                    'bukti_dp'          => $nama_file
                ];
                $this->ModelTransaction->uploadDp($data, $idTransaction);
                $this->session->set_flashdata("pesan", "Bukti Pembayaran berhasil diupload,silahkan tunggu konfirmasi selanjutnya");
                $this->session->set_flashdata("title", "Pembayaran Menuggu Proses !");
                $this->session->set_flashdata("type", "info");
                redirect(base_url('home/list_transaction'));
            } else {
                $this->session->set_flashdata("pesan", "File Bukti pembayaran anda tidak sah !");
                $this->session->set_flashdata("title", "Pembayaran Gagal !");
                $this->session->set_flashdata("type", "warning");
                redirect(base_url('home/list_transaction'));
            }
        }
    }
    public function payment_last()
    {
        $idTransaction = $this->input->post('id_transaction');
        $cekPhoto = $_FILES['photo']['name'];
        $remainingPayment = $this->input->post('remaining_paid_input');
        if ($cekPhoto != null) {
            $config['upload_path']      = './assets/foto_bukti/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('photo')) {
                $data_file = array('upload_data' => $this->upload->data());
                $nama_file = $data_file['upload_data']['file_name'];

                $data = [
                    'payment_status'    => 2,
                    'bukti_lunas'       => $nama_file
                ];
                $this->ModelTransaction->uploadDp($data, $idTransaction);
                $this->session->set_flashdata("pesan", "Bukti Pembayaran berhasil diupload,silahkan tunggu konfirmasi selanjutnya");
                $this->session->set_flashdata("title", "Pembayaran Menuggu Proses !");
                $this->session->set_flashdata("type", "info");
                redirect(base_url('home/list_transaction'));
            } else {
                $this->session->set_flashdata("pesan", "File Bukti pembayaran anda tidak sah !");
                $this->session->set_flashdata("title", "Pembayaran Gagal !");
                $this->session->set_flashdata("type", "warning");
                redirect(base_url('home/list_transaction'));
            }
        } else {
            $this->session->set_flashdata("pesan", "Mohon masukan bukti pembayaran anda !");
            $this->session->set_flashdata("title", "Pembayaran Gagal !");
            $this->session->set_flashdata("type", "warning");
            redirect(base_url('home/list_transaction'));
        }
    }
    public function confirm_payment()
    {
        $number = $this->uri->segment(3);

        $data = array(
            'payment_status' => 1,
            'status'         => 2,
        );
        // $this->ModelTransaction->updateStatusByNumber($data, $number);
        $this->ModelTransaction->UpdateStatusPenyewaan($data, $number);
        
        $this->session->set_flashdata("pesan", "Pesanan berhasil dikonfirmasi !");
        $this->session->set_flashdata("title", "Pesanan dikonfirmasi");
        $this->session->set_flashdata("type", "success");
        redirect(base_url('dashboard/data_pembayaran'));
    }
    public function confirm_lastpayment()
    {
        $number = $this->uri->segment(3);

        $data = array(
            'payment_status' => 3,
            'status'         => 3,
        );
        $this->ModelTransaction->UpdateStatusPenyewaan($data, $number);
        $this->session->set_flashdata("pesan", "Pesanan berhasil dikonfirmasi !");
        $this->session->set_flashdata("title", "Pesanan dikonfirmasi");
        $this->session->set_flashdata("type", "success");
        redirect(base_url('dashboard/data_pembayaran'));
    }
}
