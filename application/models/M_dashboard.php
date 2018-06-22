<?php


class M_dashboard extends CI_Model {


function get_all(){
		$query = $this->db->query("SELECT * from users  ");

        return $query->result();
}


 function get_all_admin_pusat_dashboard()
    {
        $query = $this->db->query("SELECT * from users where status_user = 1 ");
        return $query->result();
    }


     function get_all_admin_bujt()
    {
        $query = $this->db->query("SELECT * from users where status_user = 2 ");
        return $query->result();
    }

    function get_all_user_pusat()
    {    
        $query = $this->db->query("SELECT * from users where status_user = 3 ");
        return $query->result(); 

    }

    function get_all_user_bujt_dashboard()
    {
        $query = $this->db->query("SELECT * from users where status_user = 4 ");
        return $query->result();
    }

    function get_all_seksi(){
    	 $query = $this->db->query("SELECT * from seksi ");

        return $query->result();
    }


    function seksi_get($id){
		$query = $this->db->query("select a.* from seksi a 
									join ruas b on a.id_ruas = b.id_ruas
									join region c on b.id_region = c.id_region
									where c.id_region = '".$id."'");
        return $query->result();

    }

    function get_all_issue(){

    	 $query = $this->db->query("select d.*,b.NamaRuas,c.NamaRegion,a.Seksi from seksi a 
                                    join ruas b on a.id_ruas = b.id_ruas
                                    join region c on b.id_region = c.id_region
                                    join issue d on d.id_seksi = a.id_seksi
                                    where d.status='1' ");

        return $query->result();

    }

    function issue_get_peregion($id){

    	 $query = $this->db->query("select a.* from seksi a 
									join ruas b on a.id_ruas = b.id_ruas
									join region c on b.id_region = c.id_region
                                    join issue d on d.id_seksi = a.id_seksi
									where c.id_region = '".$id."' and d.status='1'");

        return $query->result();

    }

     function ruas_status ($status){
        $data = $this->db->query("SELECT count(id_ruas) as jumlah, round(sum(Panjang),2) as panjang FROM `ruas` WHERE Status = ".$status." and id_ruas<>'57' ");
        return $data->row();
    }
    
    function seksi_status ($status){
        $data = $this->db->query('SELECT * FROM `seksi` WHERE  StatusPengerjaan = "'.$status.'"');
        return $data->result();
    }


}