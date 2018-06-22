<?php

class M_Member extends CI_Model{


	function getAll($key, $limit='', $offset='') {
		/*echo "<pre>";
		print_r($key);
		echo "</pre>";*/

        $this->db->select("*");
        $this->db->join("group_member", "group_member.id_group = member.id_group", "left");

        if($key['nama']){
        	$this->db->like('member.nama', $key['nama']);
        }
        if($key['rfid_card']){
        	$this->db->where('member.rfid_card', $key['rfid_card']);
        }
        if($key['level']){
        	$this->db->where('group_member.id_group', $key['level']);
        }
        if($key['status']){
        	$this->db->where('member.status', $key['status']);
        }


        if(!$limit && !$offset){
            $query = $this->db->get('member');
        }
        else{
            $query = $this->db->get('member', $limit, $offset);
        }
        
        return $query;
        $query->free_result();
    }
    
    function getCount($key) {

        $this->db->select("*");
        $this->db->join("group_member", "group_member.id_group = member.id_group", "left");

        if($key['nama']){
        	$this->db->like('member.nama', $key['nama']);
        }
        if($key['rfid_card']){
        	$this->db->where('member.rfid_card', $key['rfid_card']);
        }
        if($key['level']){
        	$this->db->where('group_member.id_group', $key['level']);
        }
        if($key['status']){
        	$this->db->where('member.status', $key['status']);
        }

        $query = $this->db->get("member");
        
        return $query->num_rows();
        $query->free_result();
    }
}