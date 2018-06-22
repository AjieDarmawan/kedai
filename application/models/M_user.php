<?php
if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class M_user extends CI_Model{

    function akun($id_akun){
        $this->db->select('*');
        $this->db->where('id_user',$id_akun);
        $data = $this->db->get('users')->result();

        return $data;
    }

     function get_all()

    {

        //$this->db->order_by($this->id, $this->order);

        //return $this->db->get($this->table)->result();
	
	$query = $this->db->query("select * from users ");

        return $query->result();

        

    }



     function get_all_admin()

    {

        $query = $this->db->query("Select * from $this->table where status_user<>'3' ");

        return $query->result();

    }



     function get_all_mitra()

    {

         $this->db->where($this->status_user, 3);

        return $this->db->get($this->table)->result();

    }



    // get data by id

    function get_by_id($id)

    {

        $this->db->where($this->id, $id);

        return $this->db->get($this->table)->row();

    }





    

     // get data by id

    /*function getDmx($id)

    {

      $wher="status_user='DM' and id_subid='$id' ";

       //$this->db->where('id_subid',$id);

      $this->db->where($wher);

       $result=$this->db->get('users');

       if($result->num_rows() > 0){

        return $result->result_array();

       }

       else

       {

        return array();

       }

    }*/



    



    function lupa_password($email)

    {

        $query = $this->db->query("select * from users where email='$email' ");

        return $query->row();

        //return $query->num_rows();

    }



    function get_email_lp($email)

    {

        $query = $this->db->query("select * from users where  email='$email' ");

        return $query->row();

        //return $query->num_rows();

    }

    

    // get total rows

    function total_rows() {

        $this->db->from($this->table);

        return $this->db->count_all_results();

    }



    function locked_user($data)

    {

        $this->db->update($this->table, $data);

    }



   

    



    // insert data

    function insert($data)

    {

        $this->db->insert($this->table, $data);

    }



    // update data

    function update($id, $data)

    {

        $this->db->where($this->id, $id);

        $this->db->update($this->table, $data);

    }

    function update_deadline($status_user,$data)

    {

        $this->db->where($this->status_user, $status_user);

        $this->db->update($this->table, $data);

    }



    // delete data

    function delete($id)

    {

        $this->db->where($this->id, $id);

        $this->db->delete($this->table);

    }

    function get_all_user_bujt($id_ruas){

        $data = $this->db->query('SELECT * FROM users WHERE id_ruas = "'.$id_ruas.'"  order by id_user desc');

        return $data->result(); 

    }



     function get_all_user_bujt_by_id($id,$id_ruas){

        $data = $this->db->query('SELECT * FROM users WHERE id_ruas = "'.$id_ruas.'" and id_user ="'.$id.'" ');

        return $data->result_array(); 

    }



    function id_ganti_password($email){

        $data = $this->db->query('select * from users where email = "'.$email.'"');

        return $data->result_array();

    }

   function ganti_email($id_user,$email){
        $data = $this->db->query('select * from users where  id_user = "'.$id_user.'" and email = "'.$email.'"');
         return $data->result_array();
    }

    function get_all_user_bujt_user($id){
        $data = $this->db->query('SELECT * FROM users WHERE id_user = "'.$id.'"  ');
        return $data->result_array(); 
    }
	
	function get_all_last_login()

    {

        //$this->db->order_by($this->id, $this->order);

        //return $this->db->get($this->table)->result();
    
    $query = $this->db->query("SELECT u.*,r.NamaRuas FROM `users` u left join ruas r on u.id_ruas=r.id_ruas order by u.last_login desc ");

        return $query->result();

        

    }



}
