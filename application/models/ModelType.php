<?php

    class ModelType extends CI_Model{

        public function addData($data){
            return $this->db->insert('tbl_type',$data);
        }
        public function getDataType(){
            return $this->db->get('tbl_type')->result_array();
        }
        public function UpdateDataType($data,$id_type){
            return $this->db->update('tbl_type',$data,array('id_type' => $id_type));
        }
    }
