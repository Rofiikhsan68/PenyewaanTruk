<?php

    class ModelTransaction extends CI_Model{
        public function getDataTransactionRow($id_transaction){
            return $this->db->get_where('tbl_transaksi',array('id_transaction'=>$id_transaction))->row_array();
        }

        public function insertGoodsBatch($dataGoods){
            return $this->db->insert_batch('tbl_barang',$dataGoods);
        }

        public function getDataTransactionByStatus($status){
            $sql = "SELECT *,TR.status as status_transaksi FROM tbl_transaksi TR
            JOIN tbl_cart C ON TR.id_cart = C.id_cart 
            JOIN tbl_product PR ON C.id_product = PR.id_product 
            JOIN tbl_user US ON C.id_user = US.id_user 
            JOIN tbl_detailuser DU ON US.id_user = DU.id_user
            WHERE TR.status = ? GROUP BY TR.id_transaction";
            return $this->db->query($sql,$status)->result_array();
        }

        public function getDataTransactionBy2Status($status1,$status2){
            $sql = "SELECT * FROM tbl_transaksi TR
                        JOIN tbl_cart C ON TR.id_cart = C.id_cart 
                        JOIN tbl_product PR ON C.id_product = PR.id_product 
                        JOIN tbl_user US ON C.id_user = US.id_user 
                        WHERE TR.status = ? OR TR.status = ? GROUP BY TR.id_transaction ";
            return $this->db->query($sql,array($status1,$status2))->result_array();
        }
    }