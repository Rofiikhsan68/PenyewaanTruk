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

        return $this->db->query($sql,$id_transaction)->result_array();
    }
    public function getDataTransactionGroup($id_transaction)
    {
        $sql = "SELECT * FROM tbl_transaksi,tbl_cart,tbl_user,tbl_product,tbl_detailuser WHERE
            tbl_transaksi.id_cart = tbl_cart.id_cart AND
            tbl_cart.id_user = tbl_user.id_user AND
            tbl_cart.id_product = tbl_product.id_product AND
            tbl_detailuser.id_user = tbl_user.id_user AND
            tbl_transaksi.id_transaction = ? GROUP BY id_transaction";

        return $this->db->query($sql,$id_transaction)->row_array();
    }
    public function getDataTransactionByStatus($status){
        $sql = "SELECT *,TR.status as status_transaksi FROM tbl_transaksi TR
        JOIN tbl_cart C ON TR.id_cart = C.id_cart 
        JOIN tbl_product PR ON C.id_product = PR.id_product 
        JOIN tbl_user US ON C.id_user = US.id_user 
        JOIN tbl_detailuser DU ON US.id_user = DU.id_user
        WHERE TR.status = ?  GROUP BY TR.id_transaction order by number desc";
        return $this->db->query($sql,$status)->result_array();
    }
    public function getDataTransactionByStatusUser($status,$idUser){
        $sql = "SELECT *,TR.status as status_transaksi FROM tbl_transaksi TR
        JOIN tbl_cart C ON TR.id_cart = C.id_cart 
        JOIN tbl_product PR ON C.id_product = PR.id_product 
        JOIN tbl_user US ON C.id_user = US.id_user 
        JOIN tbl_detailuser DU ON US.id_user = DU.id_user
        WHERE TR.status = ? AND
                C.id_user = ? GROUP BY TR.id_transaction ";
        return $this->db->query($sql,array($status,$idUser))->result_array();
    }

    public function getDataTransactionBy2Status($status1,$status2){
        $sql = "SELECT *,TR.status as status_transaksi FROM tbl_transaksi TR
                    JOIN tbl_cart C ON TR.id_cart = C.id_cart 
                    JOIN tbl_product PR ON C.id_product = PR.id_product 
                    JOIN tbl_user US ON C.id_user = US.id_user 
                    JOIN tbl_detailuser DS ON US.id_user = DS.id_user
                    WHERE TR.status = ? OR TR.status = ? GROUP BY TR.id_transaction ";
        return $this->db->query($sql,array($status1,$status2))->result_array();
    }
    public function getDataTransactionBy2StatusUser($status1,$status2,$idUser){
        $sql = "SELECT *,TR.status as status_transaksi FROM tbl_transaksi TR
                    JOIN tbl_cart C ON TR.id_cart = C.id_cart 
                    JOIN tbl_product PR ON C.id_product = PR.id_product 
                    JOIN tbl_user US ON C.id_user = US.id_user 
                    JOIN tbl_detailuser DS ON US.id_user = DS.id_user
                    WHERE C.id_user = ? AND TR.status = ? OR TR.status = ?  GROUP BY TR.id_transaction ";
        return $this->db->query($sql,array($idUser,$status1,$status2))->result_array();
    }
    public function cancelTransactionById($data,$id_transaction){
        return $this->db->update('tbl_transaksi', $data, array('id_transaction' => $id_transaction));
    }
    public function UpdateStatusPenyewaan($data,$id_transaction){
        return $this->db->update('tbl_transaksi',$data,array('id_transaction' => $id_transaction));
    }

    public function uploadDp($data,$id_transaction){
        return $this->db->update('tbl_transaksi',$data,['id_transaction' => $id_transaction]);
    }
    public function getDataBarangByNumber($number){
        $sql ="SELECT * FROM tbl_transaksi,tbl_barang
                WHERE
                tbl_barang.number_transaction = tbl_transaksi.number AND
                tbl_barang.number_transaction = ? ";
                return $this->db->query($sql,$number)->result_array();
    }
    public function getNumberByIdTransaksi($id_transaction){
        return $this->db->get_where('tbl_transaksi', array('id_transaction' => $id_transaction))->row_array();
    }
    public function updateStatusByNumber($data,$number){
        return $this->db->update('tbl_transaksi', $data, array('number' => $number));
    }
    public function updateStatusLastPayment($data,$number){
        return $this->db->update('tbl_transaksi', $data, array('number' => $number));
    }
    public function getDataAllTransaksi($status){
        $sql = "SELECT * FROM tbl_transaksi,tbl_user,tbl_detailuser,tbl_product,tbl_merk,tbl_type,tbl_barang,tbl_cart
                WHERE
                tbl_detailuser.id_user = tbl_user.id_user and
                tbl_product.id_type    = tbl_type.id_type and
                tbl_product.id_merk    = tbl_merk.id_merk and
                tbl_cart.id_user       = tbl_user.id_user and
                tbl_product.id_product = tbl_product.id_product and
                tbl_transaksi.id_cart  = tbl_cart.id_cart and
                tbl_barang.number_transaction = tbl_transaksi.number and
                payment_status = ? GROUP BY id_transaction ORDER BY number DESC";
                return $this->db->query($sql,$status)->result_array();
    }

    public function getProfit($status){
        $sql = "SELECT total_price  FROM tbl_transaksi
                    WHERE status = ? GROUP BY id_transaction ";
        return $this->db->query($sql,$status)->result_array();
    }
}
