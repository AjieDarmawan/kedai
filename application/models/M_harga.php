<?php


class M_harga extends CI_Model {


function get(){
				$query = $this->db->query("SELECT p.*,hp.level_harga,hp.harga_jual FROM `produk` as p
				inner join harga_produk as hp
				on p.id_produk = hp.id_produk");
        return $query->result();
}




}
