<?php

    class ModelUsers extends CI_Model{

        public function getRowData($id){
            return $this->db->get_where('tbl_user',array('id_user'=>$id))->row_array();
        }

        public function insertUsers($insertUsers,$table){
            return $this->db->insert($table,$insertUsers);
        }

        public function getDetailLast(){
            $sql = "SELECT * FROM tbl_user ORDER BY id_user DESC";
            return $this->db->query($sql)->row_array();
        }
    }