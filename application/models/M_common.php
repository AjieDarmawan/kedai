<?php


class M_common extends CI_Model {



    function __construct()

    {

        parent::__construct();

    }



    function get_all_makanan(){
        $data = $this->db->query('select * from makanan');
        return $data->result();
    }

    function get_all_minuman(){
        $data = $this->db->query('select * from minuman');
        return $data->result();
    }


}