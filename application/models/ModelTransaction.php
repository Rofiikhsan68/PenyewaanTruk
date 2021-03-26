<?php

    class ModelTransaction extends CI_Model{
        public function getDataTransactionRow($id_transaction){
            return $this->db->get_where('tbl_transaksi',array('id_transaction'=>$id_transaction))->row_array();
        }

        public function insertGoodsBatch($dataGoods){
            return $this->db->insert_batch('tbl_barang',$dataGoods);
        }
    }