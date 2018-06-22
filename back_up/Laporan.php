<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	function __construct(){
        parent::__construct();
        $this->load->model(array('M_Laporan'));
        $this->load->helper(array('url','pagination_helper'));
    }


	public function laporan_transaksi_kasir(){
		if($this->input->post('date_start')==''){
			$date_start = date('Y-m-d')." 00:00:00";
		}else if($this->input->post('date_start')=="null"){	
			$date_start = date('Y-m-d')." 00:00:00";
		}else{
			$date_start = date('Y-m-d', strtotime($this->input->post('date_start')))." 00:00:00";;
		}

		if($this->input->post('date_end')==''){
			$date_end = date('Y-m-d')." 23:59:59";
		}else if($this->input->post('date_end')=="null"){	
			$date_end = date('Y-m-d')." 23:59:59";
		}else{
			$date_end = date('Y-m-d', strtotime($this->input->post('date_end')))." 23:59:59";
		}

        if($this->input->post('produk')==''){

        }else if($this->input->post('produk')=='null'){

        }else{
        	$produk = $this->input->post('produk');
        }

        if($this->input->post('rfid_card')==''){
        
        }else if($this->input->post('rfid_card')=='null'){

        }else{
        	$rfid = $this->input->post('rfid_card');
        }

        /*print_r($this->input->post());
       	exit();*/

        $session = array(
        	'date_start' => $date_start,
        	'date_end' => $date_end,
        	'produk' => $produk,
        	'rfid_card' => $rfid
        );

        $this->session->set_userdata($session);

		$this->template->load('frontend/dashboard_utama','laporan/laporan_transaksi_kasir');
        
	}

	function laporan_transaksi_kasir_data($pg=''){

		if($this->session->userdata('date_start')){
			$date_start = $this->session->userdata('date_start');
		}

		if($this->session->userdata('date_end')){
			$date_end = $this->session->userdata('date_end');
		}

		if($this->session->userdata('produk')!=""){
			$produk = $this->session->userdata('produk');
		}

		if($this->session->userdata('rfid_card')!=""){
			$rfid = $this->session->userdata('rfid_card');
		}

		$key = array(
			'date_start' => $date_start,
			'date_end' => $date_end,
			'produk' => $produk,
			'rfid_card' => $rfid
		);

        $limit  = trim($this->input->post('limit',true));
        $offset = ($limit*$pg)-$limit;

        
        $page   = array();
        $page['limit']      = $limit;
        $page['count_row']  = $this->M_Laporan->getCount($key);

        $count = ceil($page['count_row']/$page['limit']);
        
        if($pg){
            $page['current']    = $pg;
        }else{
            $page['current']    = 1;
        }
        
        $page['list']       = gen_paging($page);
        $page['count_page'] = $count;

        $data['paging'] = $page;
        $data['list']   = $this->M_Laporan->getAll($key, $limit, $offset);
        
        $this->load->view('laporan/laporan_transaksi_kasir_data',$data);
    }



}