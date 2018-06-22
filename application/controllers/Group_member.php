<?php
date_default_timezone_set('Asia/Jakarta');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Group_member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_group'));
        //$this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta');
    }


    public function index()
    {

      $ses_data = array(
          'act_menu' => 'Group_member',
          'title' => 'Group_member',

      );
        $this->session->set_userdata($ses_data);

        $data = array(
          'group'=>$this->M_group->get(),
        );
        $this->template->load('home','Group_member/v_gm',$data);
    }


    function simpan(){
      $data = array(
        'level_group'=>$this->input->post('nama'),
        'diskon_member	'=>$this->input->post('diskon'),
      );

      $this->db->insert('group_member',$data);
      $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
      redirect('Group_member');
    }


    function edit(){
      $data = array(
        'level_group'=>$this->input->post('nama'),
        'diskon_member	'=>$this->input->post('diskon'),
      );

      $this->db->where('id_group',$this->input->post('id'));
      $this->db->update('group_member',$data);
      $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
      redirect('Group_member');
    }


    function delete($id){
        $this->db->where('id_group',$id);
        $this->db->delete('group_member');
        $this->session->set_flashdata('message', 'Data telah dihapus');
        redirect('Group_member');
    }



}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
