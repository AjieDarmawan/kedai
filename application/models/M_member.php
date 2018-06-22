<?php


class M_member extends CI_Model {


function get_member($id){
		$query = $this->db->query("SELECT m.*,gp.* FROM `group_member` as gp
      left join member as m ON
      gp.id_group = m.id_group
      WHERE gp.id_group = '".$id."' ORDER by gp.id_group desc");
        return $query->result();
}

function isi_saldo($id){
	$query = $this->db->query("SELECT m.*,gp.* FROM `group_member` as gp
		left join member as m ON
		gp.id_group = m.id_group
		WHERE m.rfid_card = '".$id."' ");
		return $query->row();
}

}
