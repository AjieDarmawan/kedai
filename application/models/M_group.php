<?php


class M_group extends CI_Model {


function get(){
		   $query = $this->db->query("SELECT * from group_member   order by id_group desc ");
        return $query->result();
}




}
