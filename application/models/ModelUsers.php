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
        public function getDataByUsername($username){
            $sql = "SELECT * FROM tbl_user WHERE username = ? OR email = ?";
            return $this->db->query($sql,array($username,$username))-> row_array();
        }
        public function getDataDetail($id_user){
            $sql = "SELECT * FROM tbl_user,tbl_detailuser WHERE 
            tbl_detailuser.id_user = tbl_user.id_user AND
            tbl_user.id_user = ? ";
            return $this->db->query($sql,$id_user)->row_array();
        }

        public function getAllDataUsers($role){
            $sql = "SELECT * FROM tbl_user 
                        JOIN tbl_detailuser ON tbl_user.id_user = tbl_detailuser.id_user 
                        WHERE role = ?";
            return $this->db->query($sql,$role)->result_array();
        }

        public function updateDataUsers($updateProfile,$table,$id){
            return $this->db->update($table,$updateProfile,array('id_user' => $id));
        }
        public function updateDetailProfileByIdUser($data,$id_user){
            return $this->db->update('tbl_detailuser',$data,array('id_user' => $id_user));
        }
        public function updateEmailByIdUsers($data_email,$id_user){
            return $this->db->update('tbl_user',$data_email,array('id_user' => $id_user));
        }
        public function updatePasswordById($data, $id){
            return $this->db->update('tbl_user', $data,array('id_user' => $id));
        }
    }