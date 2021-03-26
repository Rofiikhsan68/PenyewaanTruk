<?php

class ModelTransaction extends CI_Model
{
    public function getDataTransactionRow($id_transaction)
    {
        return $this->db->get_where('tbl_transaksi', array('id_transaction' => $id_transaction))->row_array();
    }

    public function insertGoodsBatch($dataGoods)
    {
        return $this->db->insert_batch('tbl_barang', $dataGoods);
    }
    public function getDataTransaction($id_transaction)
    {
        $sql = "SELECT * FROM tbl_transaksi,tbl_cart,tbl_user,tbl_product,tbl_detailuser WHERE
                        tbl_transaksi.id_cart = tbl_cart.id_cart AND
                        tbl_cart.id_user = tbl_user.id_user AND
                        tbl_cart.id_product = tbl_product.id_product AND
                        tbl_detailuser.id_user = tbl_user.id_user AND
                        tbl_transaksi.id_transaction = ?
                        ";

        return $this->db->query($sql, $id_transaction)->result_array();
    }
    public function getDataTransactionGroup($id_transaction)
    {
        $sql = "SELECT * FROM tbl_transaksi,tbl_cart,tbl_user,tbl_product,tbl_detailuser WHERE
            tbl_transaksi.id_cart = tbl_cart.id_cart AND
            tbl_cart.id_user = tbl_user.id_user AND
            tbl_cart.id_product = tbl_product.id_product AND
            tbl_detailuser.id_user = tbl_user.id_user AND
            tbl_transaksi.id_transaction = ? GROUP BY id_transaction";

        return $this->db->query($sql, $id_transaction)->row_array();
    }
}
