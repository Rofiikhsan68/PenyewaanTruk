<?php 


    class ModelProduct extends CI_Model{
        public function getDetailProduct($id){
            return $this->db->get_where('tbl_product',array('id_product' => $id))->row_array();
        }
        public function getDataProductLatest(){
            $sql = "SELECT * from tbl_product,tbl_merk,tbl_type
                WHERE
                tbl_product.id_merk = tbl_merk.id_merk and
                tbl_product.id_type = tbl_type.id_type order by id_product DESC LIMIT 4 ";
                return $this->db->query($sql)->result_array();
                    
        }
    }