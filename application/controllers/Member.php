<?php
error_reporting(0);

date_default_timezone_set('Asia/Jakarta');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->model(array('M_danatalangan','M_kontraktor','M_Gallery','M_seksi','M_ruas','M_fleet','M_material'));
        $this->load->model(array('M_member'));

    }

    public function silver()
    {

        $data = array(
          'silver'=>$this->M_member->get_member(1),
        );

            $ses_data = array(
                'act_menu' => 'Silver',
                'title' => 'Silver',
                 'breadcrumb' =>'Silver',
            );

            $this->session->set_userdata($ses_data);
        $this->template->load('home','Member/v_silver',$data);

    }

    public function gold()
    {
      $ses_data = array(
          'act_menu' => 'Gold',
          'title' => 'Gold',
           'breadcrumb' =>'Gold',
      );
        $this->session->set_userdata($ses_data);
      $data = array(
        'gold'=>$this->M_member->get_member(2),
      );
        $this->template->load('home','Member/v_gold',$data);

    }

    public function platinum()
    {
      $data = array(
        'platinum'=>$this->M_member->get_member(3),
      );

      $ses_data = array(
          'act_menu' => 'Platinum',
          'title' => 'Platinum',
           'breadcrumb' =>'Platinum',
      );
        $this->session->set_userdata($ses_data);
        $this->template->load('home','Member/v_platinum',$data);

    }

    function simpan_member(){

            $data = array(
              'nama'=>$this->input->post('nama'),
              'alamat'=>$this->input->post('alamat'),
              'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
              'tanggal_member'=>date('Y-m-d'),
              'id_group'=>$this->input->post('group_id'),
              'rfid_card'=>$this->input->post('no_id'),
              'saldo'=>0,
              'status_member'=>1,
            );
            $this->db->insert('member',$data);
            $this->session->set_flashdata('message', 'Data Berhasil Disimpan');

            if($this->input->post('group_id')==1){
                redirect('Member/silver');
            }elseif($this->input->post('group_id')==2){
                  redirect('Member/gold');
            }else{
                redirect('Member/platinum');
            }



    }



    function edit_member(){

            $data = array(
              'nama'=>$this->input->post('nama'),
              'alamat'=>$this->input->post('alamat'),
              'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
              'tanggal_member'=>date('Y-m-d'),
              // 'id_group'=>$this->input->post('group_id'),
              'rfid_card'=>$this->input->post('no_id'),
              // 'saldo'=>0,
              'status_member'=>1,
            );
            $this->db->where('id_member',$this->input->post('id'));
            $this->db->update('member',$data);
            $this->session->set_flashdata('message', 'Data Berhasil Disimpan');

            if($this->input->post('group_id')==1){
                redirect('Member/silver');
            }elseif($this->input->post('group_id')==2){
                  redirect('Member/gold');
            }else{
                redirect('Member/platinum');
            }



    }



    function delete($id,$group_id){
        $this->db->where('id_member',$id);
        $this->db->delete('member');
        $this->session->set_flashdata('message', 'Data telah dihapus');

        if($group_id==1){
            redirect('Member/silver');
        }elseif($group_id==2){
              redirect('Member/gold');
        }else{
            redirect('Member/platinum');
        }


    }

    function isi_saldo(){

      $ses_data = array(
          'act_menu' => 'Isi_Saldo',
          'title' => 'Isi Saldo',
           'breadcrumb' =>'Isi Saldo',
      );
        $this->session->set_userdata($ses_data);

        $isi = $this->input->post('cek');


        if($isi){
           $saldo = $this->M_member->isi_saldo($isi);

           $data =array(
             'isi_saldo'=>$saldo,
           );

             $id_member = $this->input->post('id_member');
            $this->template->load('home','Isi_Saldo/v_saldo',$data);

           if($id_member){
             $saldo =  $this->input->post('saldo');
             $isi_saldo =  $this->input->post('isi_saldo');

             $total = $saldo+$isi_saldo;
             $data1 = array(
               'saldo'=>$total,
             );

             $this->db->where('id_member',$this->input->post('id_member'));
             $this->db->update('member',$data1);
             $this->session->set_flashdata('message', 'Saldo Berhasil di isi');
             redirect('Member/isi_saldo');
           }


        }else{
              $data =array(
                'isi_saldo'=>'',
              );
                $this->template->load('home','Isi_Saldo/v_saldo',$data);
        }






    }

    // function edit_isi_saldo(){
    //
    //     $saldo =  $this->input->post('saldo');
    //     $isi_saldo =  $this->input->post('isi_saldo');
    //
    //     $total = $saldo+$isi_saldo;
    //     $data = array(
    //       'saldo'=>$total,
    //     );
    //
    //     $this->db->where('id_member',$this->input->post('id_member'));
    //     $this->db->update('member',$data);
    //     $this->session->set_flashdata('message', 'Saldo Berhasil di isi');
    //     redirect('Member/isi_saldo');
    // }







}



/* End of file user.php */

/* Location: ./application/controllers/user.php */
