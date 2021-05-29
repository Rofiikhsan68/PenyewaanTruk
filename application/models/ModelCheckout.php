<?php

class ModelCheckout extends CI_Model
{
    public function getDataCheckout($id_user){
        $sql ="SELECT * FROM tbl_cart,tbl_product,tbl_type,tbl_merk
                WHERE
                tbl_cart.id_product = tbl_product.id_product and
                tbl_product.id_type = tbl_type.id_type and
                tbl_product.id_merk = tbl_merk.id_merk and
                status = 0 and tbl_cart.id_user = ?";
                return $this->db->query($sql,$id_user)->result_array();
    }
    public function getDataCustomer($id_user){
        $sql="SELECT * FROM tbl_user,tbl_detailuser
            WHERE
            tbl_detailuser.id_user = tbl_user.id_user and
            tbl_user.id_user = ?";
            return $this->db->query($sql,$id_user)->row_array();
    }
    public function inserDataTransaction($dataTransaction){
        return $this->db->insert_batch('tbl_transaksi', $dataTransaction);
    }
public function update_alamat($data,$id_user){
    return $this->db->update('tbl_detailuser', $data ,array('id_user' => $id_user));
}
}