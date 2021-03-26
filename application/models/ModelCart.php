<?php

    class ModelCart extends CI_Model{

        public function getDataCart($id_user){
            $sql = "SELECT * FROM tbl_cart 
                        JOIN tbl_product ON tbl_cart.id_product = tbl_product.id_product 
                        WHERE id_user = ? AND
                              status = 0";
            return $this->db->query($sql,$id_user)->result_array();
        }
        public function getDataByUsers($id_product,$id_users){
            $sql = "SELECT * FROM tbl_cart WHERE id_user = ? and id_product = ? order by id_cart desc";
            return $this->db->query($sql,array($id_users, $id_product))->row_array();
        }
        public function updateDataCartByIdUsers($data,$id_cart){
            return $this->db->update('tbl_cart', $data, array('id_cart' => $id_cart));
        }
        public function insertDataCartByIdUsers($data){
            return $this->db->insert('tbl_cart', $data);
        }
        public function DeleteDataCart($id_cart){
            return $this->db->delete('tbl_cart',array('id_cart' => $id_cart));
        }
        public function updateDataCart($dataStatus,$id_user){
            return $this->db->update('tbl_cart', $dataStatus,array('id_user' => $id_user));
        }
    }