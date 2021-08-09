<?php 


    class ModelProduct extends CI_Model{
        public function getDetailProduct($id){
            $sql = "SELECT * FROM tbl_product,tbl_merk,tbl_type
                    WHERE
                    tbl_product.id_merk = tbl_merk.id_merk and
                    tbl_product.id_type = tbl_type.id_type and
                    tbl_product.id_product = ? ";
                    return $this->db->query($sql,$id)->row_array();
        }
        public function getDataProductLatest(){
            $sql = "SELECT * from tbl_product,tbl_merk,tbl_type
                WHERE
                tbl_product.id_merk = tbl_merk.id_merk and
                tbl_product.id_type = tbl_type.id_type order by id_product DESC LIMIT 8 ";
                return $this->db->query($sql)->result_array();
                    
        }
        public function addDataProduct($data){
            return $this->db->insert('tbl_product', $data);
        }
        public function getDataProduct(){
            $sql = "SELECT * from tbl_product,tbl_merk,tbl_type
            WHERE
            tbl_product.id_merk = tbl_merk.id_merk and
            tbl_product.id_type = tbl_type.id_type order by id_product DESC";
            return $this->db->query($sql)->result_array();
        }
        public function updateProduct($data,$id_product){
            return $this->db->update('tbl_product',$data, array('id_product' => $id_product));
        }
        public function deleteData($id_product){
            return $this->db->delete('tbl_product', array('id_product' => $id_product));
        }

        public function getDataBySearch($productSearch){
            $sql = "SELECT * FROM tbl_product 
                        JOIN tbl_merk ON tbl_product.id_merk = tbl_merk.id_merk
                        JOIN tbl_type ON tbl_product.id_type = tbl_type.id_type
                        WHERE
                            product_name LIKE '%$productSearch%'";
            return $this->db->query($sql,$productSearch)->result_array();
        }

        public function getDataProductTrainNew($mulai,$end){
            $sql = "SELECT id_product,product_name,photo,capacity,radius,price,PR.id_merk as n_m, PR.id_type as n_t
                        FROM tbl_product PR
                            JOIN tbl_merk MR on PR.id_merk = MR.id_merk 
                            JOIN tbl_type TP on PR.id_type = TP.id_type
                            WHERE price >= ? AND price <= ?";
            return $this->db->query($sql,[$mulai,$end])->result_array();
        }
        public function getDataProductTrainElse($mulai,$end){
            $sql = "SELECT id_product,product_name,photo,capacity,radius,price,PR.id_merk as n_m, PR.id_type as n_t
                        FROM tbl_product PR
                            JOIN tbl_merk MR on PR.id_merk = MR.id_merk 
                            JOIN tbl_type TP on PR.id_type = TP.id_type
                            WHERE price >= ";
            return $this->db->query($sql,$mulai)->result_array();
        }

        public function getDataProductTrain(){
            $sql = "SELECT id_product,product_name,photo,capacity,radius,price,PR.id_merk as n_m, PR.id_type as n_t
                        FROM tbl_product PR
                            JOIN tbl_merk MR on PR.id_merk = MR.id_merk 
                            JOIN tbl_type TP on PR.id_type = TP.id_type";
            return $this->db->query($sql)->result_array();
        }
        public function getDataProductByIdMerk($id_merk){
            $sql = "SELECT * from tbl_product,tbl_merk WHERE
                    tbl_product.id_merk = tbl_merk.id_merk AND
                    tbl_product.id_merk = ?
                    ORDER BY id_product DESC ";
        return $this->db->query($sql, $id_merk)->result_array();
        }
    }