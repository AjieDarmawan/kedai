<?php
error_reporting(0);

date_default_timezone_set('Asia/Jakarta');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
       
        $this->load->model(array('M_Supplier'));
        
    }

    public function index()
    {   
        $data = array(
            'supplier'=>$this->M_Supplier->get(),
         );
       
        $this->template->load('home','Supplier/v_supplier',$data);
          
    }

    function simpan_supplier(){
        $data = array
        (
            'nama_supplier'=>$this->input->post('nama_supplier'),
            'alamat'=>$this->input->post('alamat'),
            'kontak'=>$this->input->post('kontak'),
            'nama_barang_supplier'=>$this->input->post('nama_barang_supplier'),
            'qty_barang_supplier'=>$this->input->post('qty'),
            'harga_supplier'=>$this->input->post('harga_supplier'),
        );
        $this->db->insert('supplier',$data);
        redirect('Supplier');


    }


    function edit_supplier(){
        $data = array
        (
            'nama_supplier'=>$this->input->post('nama_supplier'),
            'alamat'=>$this->input->post('alamat'),
            'kontak'=>$this->input->post('kontak'),
            'nama_barang_supplier'=>$this->input->post('nama_barang_supplier'),
            'qty_barang_supplier'=>$this->input->post('qty'),
            'harga_supplier'=>$this->input->post('harga_supplier'),
        );
        $this->db->where('id_supplier',$this->input->post('id'));
        $this->db->update('supplier',$data);
        redirect('Supplier');


    }

    function delete($id){
        $this->db->where('id_supplier',$id);
        $this->db->delete('supplier');
        redirect('Supplier');
    }
    
   

}



/* End of file user.php */

/* Location: ./application/controllers/user.php */