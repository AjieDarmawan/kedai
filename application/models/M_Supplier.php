<?php


class M_Supplier extends CI_Model {


function get(){
		$query = $this->db->query("SELECT * from supplier order by id_supplier desc ");
        return $query->result();
}


 

}