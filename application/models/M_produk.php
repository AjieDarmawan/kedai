<?php


class M_produk extends CI_Model {


function get(){
		$query = $this->db->query("SELECT * from produk   order by id_produk desc ");
        return $query->result();
}




}
