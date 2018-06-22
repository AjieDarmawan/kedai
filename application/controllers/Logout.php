
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

class Logout extends CI_Controller {
	function index(){

		date_default_timezone_set('Asia/Jakarta');
		$date=date('Y-m-d H:i:s');
		$this->session->unset_userdata('logged_in_benhil');
		$this->session->sess_destroy();

		redirect('login');

		//header('location:'.base_url().'');

	}
}