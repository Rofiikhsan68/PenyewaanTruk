<?php 


    class ModelProduct extends CI_Model{
        public function getDetailProduct($id){
            return $this->db->get_where('tbl_product',array('id_product' => $id))->row_array();
        }
    }