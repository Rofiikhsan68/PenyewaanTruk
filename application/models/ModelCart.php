<?php

    class ModelCart extends CI_Model{

        public function getDataCart($id_user){
            $sql = "SELECT * FROM tbl_cart 
                        JOIN tbl_product ON tbl_cart.id_product = tbl_product.id_product 
                        WHERE id_user = ? AND
                              status = 0";
            return $this->db->query($sql,$id_user)->result_array();
        }
    }