<?php
date_default_timezone_set('Asia/Jakarta');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array(''));
        //$this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta');
    }


    public function index()
    {
      $ses_data = array(
          'act_menu' => 'Dashboard',
          'title' => 'Dashboard',

      );
        $this->session->set_userdata($ses_data);
        $this->template->load('home','Dashboard');
    }



}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
