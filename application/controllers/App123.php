<?php
date_default_timezone_set('Asia/Jakarta');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_common'));
        //$this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta');
    }

    
    public function index()
    {

        $data = array(
            'makanan'=>$this->M_common->get_all_makanan(),
            'minuman'=>$this->M_common->get_all_minuman(),
        );
       
        $this->template->load('site_user/frond_end','site_user/dashboard_utama',$data);
    }


    function member(){


        $this->template->load('site_user/frond_end','site_user/member_info');
    }
   
    

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */