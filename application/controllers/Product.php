<?php
require_once FCPATH.'vendor/autoload.php';
use Phpml\Math\Distance\Euclidean;
use Phpml\Classification\KNearestNeighfbors;
use Phpml\Metric\ClassificationReport;
use Phpml\Metric\Accuracy;
use Phpml\Metric\ConfusionMatrix;
use Phpml\Dataset\CsvDataset;
use Phpml\Dataset\ArrayDataset;
use Phpml\Classification\KNearestNeighbors;

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelProduct');
    }
    public function add_product()
    {
        $product_name = $this->input->post('product_name');
        $price = $this->input->post('price');
        $merk_name = $this->input->post('merk_name');
        $type_name = $this->input->post('type_name');
        $description = $this->input->post('description');
        $capacity = $this->input->post('capacity');
        $radius = $this->input->post('radius');

        if ($product_name != null && $price != null & $merk_name != null && $type_name != null && $capacity != null && $description != null && $radius != null) {
            $config['upload_path']      = './assets/home/foto_produk/';
            $config['allowed_types']    = 'gif|jpg|png';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('photo')) {
                $data_file = array('upload_data' => $this->upload->data());
                $nama_file = $data_file['upload_data']['file_name'];

                $data = array(
                    'product_name'  => $product_name,
                    'price'         => $price,
                    'id_merk'       => $merk_name,  
                    'id_type'       => $type_name,
                    'description'   => $description,
                    'capacity'      => $capacity,
                    'radius'        => $radius,
                    'photo'         => $nama_file

                );
                $this->ModelProduct->addDataProduct($data);
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                $this->session->set_flashdata('title', 'Berhasil!');
                redirect(base_url('dashboard/data_product'));
            } else {
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('pesan', 'Foto Tidak Tersimpan');
                $this->session->set_flashdata('title', 'Gagal!');
                redirect(base_url('dashboard/data_product'));
            }
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Data Gagal Ditambahkan');
            $this->session->set_flashdata('title', 'Gagal!');
            redirect(base_url('dashboard/data_product'));
        }
    }
    public function update_product(){
        $product_name = $this->input->post('product_name');
        $price = $this->input->post('price');
        $id_product = $this->input->post('id_product');
        $merk_name = $this->input->post('merk_name');
        $type_name = $this->input->post('type_name');
        $description = $this->input->post('description');
        $capacity = $this->input->post('capacity');
        $radius = $this->input->post('radius');

        if ($product_name != null && $price != null & $merk_name != null && $type_name != null && $capacity != null && $description != null && $radius != null) {
            $config['upload_path']      = './assets/home/foto_produk/';
            $config['allowed_types']    = 'gif|jpg|png';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('photo')) {
                $data_file = array('upload_data' => $this->upload->data());
                $nama_file = $data_file['upload_data']['file_name'];

                
            } else {
                $dataFile = $this->ModelProduct->getDetailProduct($id_product);
                $nama_file = $dataFile['photo'];
            }
            $data = array(
                'product_name'  => $product_name,
                'price'         => $price,
                'id_merk'       => $merk_name,
                'id_type'       => $type_name,
                'description'   => $description,
                'capacity'      => $capacity,
                'radius'        => $radius,
                'photo'         => $nama_file

            );
            $this->ModelProduct->updateProduct($data,$id_product);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah');
            $this->session->set_flashdata('title', 'Berhasil!');
            redirect(base_url('dashboard/data_product'));
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Data Gagal Diubah');
            $this->session->set_flashdata('title', 'Gagal!');
            redirect(base_url('dashboard/data_product'));
        }
    }
    public function delete_product(){
        $id_product = $this->uri->segment(3);

        $this->ModelProduct->deleteData($id_product);
        $this->session->set_flashdata('type','success');
        $this->session->set_flashdata('pesan',' Data Berhasil Dihapus');
        $this->session->set_flashdata('title','Berhasil!');
        redirect(base_url('dashboard/data_product'));
    }

    public function search_product(){
        $uriFirst = $this->input->post('uri_first');
        $uriSecond = $this->input->post('uri_second');
        $productSearch = $this->input->post('search');
        if($productSearch != null){
            $data_product = $this->ModelProduct->getDataBySearch($productSearch);
            $data = [
                'data_product'  => $data_product,
                'title'         => "Pencarian Produk",
                'search'        => $productSearch
            ];
            $this->load->view('home/layout/header',$data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/product/v_search');
            $this->load->view('home/layout/footer');
        }else{
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Mohon lengkapi data untuk pencarian produk anda !');
            $this->session->set_flashdata('title', 'Gagal!');;
            if($uriFirst == null){

                redirect(base_url());
            }else{
                redirect(base_url($uriFirst.'/'.$uriSecond));
            }
        }
    }

    public function search_recomendation(){
        $labels = array();
        $trainData = $this->ModelProduct->getDataProductTrain();
        for($i = 0; $i < count($trainData); $i++){
            $labels[$i] = $trainData[$i]['product_name'];
        }
        $dataSet = new ArrayDataset($trainData,$labels);
        $dataSet->removeColumns([null]);
        $dataSet->removeColumns([0,1,2,5]);
        $samples = $dataSet->getSamples();
        $labels = $dataSet->getTargets();
        $merk = $this->input->post('merk');
        $type = $this->input->post('type');
        $capacity = $this->input->post('capacity');
        $price = $this->input->post('price');
        $radius = $this->input->post('radius');
        // $k = $this->input->post('k');
        $k = 3;

        if($merk != null && $type != null && $capacity != null && $price != null && $radius != null){
          

        $predictLabels;
        for($i = 0; $i < count($samples);$i++){
            $classifier = new KNearestNeighbors($k);
            $classifier->train($samples,$labels);
            $predict = $classifier->predict([$samples[$i]]);
            $predictLabels[$i] = $predict[0];
        }

        $report = new ClassificationReport($labels,$predictLabels);
        $data['accuracy'] = Accuracy::score($labels,$predictLabels)*100;
        $data['average']  = $report->getAverage();
        
        $input = [$capacity,$radius];
        $newData = [];
        $euclidean = new Euclidean();
        for($i = 0; $i<= count($samples)-1; $i++){
            $distance = $euclidean->distance($samples[$i], $input);
            $newData [$i]["distance"] = round($distance,2);
            $newData [$i]["data"] = $trainData[$i]; 
        }
        $data = [
            // "recomended" => $newData,
            "jumlah_data" => 4 ,
            "title"             => "Semua Produk"
        ];
        $data['recomended'] = $newData;
        sort($data['recomended']);
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/product/search_recomendation');
        $this->load->view('home/layout/footer');

    }else{
        $this->session->set_flashdata('type', 'warning');
        $this->session->set_flashdata('pesan', 'Mohon lengkapi data untuk pencarian produk anda !');
        $this->session->set_flashdata('title', 'Gagal!');;
        redirect(base_url('home/recommendation'));
    }

    }
}
