<?php
error_reporting(0);

date_default_timezone_set('Asia/Jakarta');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Retur extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->model(array('M_danatalangan','M_kontraktor','M_Gallery','M_seksi','M_ruas','M_fleet','M_material'));
        $this->load->model(array('M_makanan'));
        
    }

    public function index()
    {   

     
        $this->template->load('home','Retur/v_retur');
          
    }


}



/* End of file user.php */

/* Location: ./application/controllers/user.php */