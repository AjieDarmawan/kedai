<?php
date_default_timezone_set('Asia/Jakarta');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_user','M_ruas'));
        //$this->load->library('form_validation');
    }

    
    public function index()
    {
        // $cek=$this->session->userdata('logged_in_bpjt');
        // if(!empty($cek))
        // {
            $user = $this->M_user->get_all();

            $data = array(
                'user_data' => $user
            );

            $ses_data = array(
                'act_menu' => 'user',
                'title' => 'Data User',
                'breadcrumb' => 'Data User',
            );

            $this->session->set_userdata($ses_data);

            $this->template->load('home','user/v_user', $data);
        // }
        // else
        // {
        //     $this->load->view("Login");
        // }
        //$this->load->view('user/v_user',$data);
    }

    public function cek(){
	
	
	$user = $this->M_user->get_all();

            $data = array(
                'user_data' => $user
            );

            $ses_data = array(
                'act_menu' => 'user',
                'title' => 'Data User',
                'breadcrumb' => 'Data User',
            );

            $this->session->set_userdata($ses_data);

            //$this->template->load('home','user/v_user', $data);
			$this->load->view('user/v_user_cetak',$data);
	}

    
    public function tambah() 
    {
       
        error_reporting(0);
        $ruas = $this->M_user->get_all();
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('user/create_action'),
            'ruas' => $ruas,
               
        
    );
        $this->template->load('home','user/tambah_user', $data);
        
    }
    
    public function create_action() 
    {
    
            $data = array(
               
                'username' => $this->input->post('username',TRUE),
                'password' => hash('sha512',md5($this->input->post('password',TRUE).$this->config->item('key_login'))),
                'email' => $this->input->post('email',TRUE),
              
                'status_user' => $this->input->post('status_user',TRUE),
        );

            $this->M_user->insert($data);
            $this->session->set_flashdata('message', 'Data User telah disimpan');



           
            redirect(site_url('User'));
       
    }
    
    public function update($id) 
    {
        error_reporting(0);
        $row = $this->M_user->get_by_id($id);
       
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user/update_action'),

       
        'id_user' => set_value('id_user', $row->id_user),
        'id_ruas' => set_value('id_ruas', $row->id_ruas),
        'email' => set_value('email', $row->email),
        'username' => set_value('username', $row->username),
        'password' => set_value('password', $row->password),
        'status_akun' => set_value('status_akun', $row->status_akun),
        'status_user' => set_value('Status', $row->status_user),
       
        );
            $this->template->load('home','user/update_user', $data);
        } 
    }
    
    public function update_action() 
    {

              
        
            if($this->input->post('password',TRUE)=='')
            {
                $data = array(
              
                'username' => $this->input->post('username',TRUE),
                
                'email' => $this->input->post('email',TRUE),
                'status_user' => $this->input->post('status_user',TRUE),
				);
            }
            else
            {
               $data = array(
                
                'username' => $this->input->post('username',TRUE),
                'password' => hash('sha512',md5($this->input->post('password',TRUE).$this->config->item('key_login'))),
                 'email' => $this->input->post('email',TRUE),
               
                'status_user' => $this->input->post('status_user',TRUE),
                );
            }

            
            $this->M_user->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Data User Telah disimpan');

            

            redirect(site_url('User'));
             
    }


    
    public function delete($id) 
    {
        $row = $this->M_user->get_by_id($id);


        


        if ($row) {
            $this->M_user->delete($id);
            $this->session->set_flashdata('message', 'Data telah dihapus');
            redirect(site_url('User'));
        } else {
            $this->session->set_flashdata('message', 'Data Tidak ditemukan');
            redirect(site_url('User'));
        }
    }

    public function update_profil($id) 
    {
        error_reporting(0);
        $row = $this->M_user->get_by_id($id);
        

         $ses_data = array(
                'act_menu' => 'user',
                'title' => 'Ganti Password',
                'breadcrumb' =>'Ganti password</strong>',
            );

            $this->session->set_userdata($ses_data);

        if ($row) {
            $data = array(
		'id_user' => set_value('id_user', $id),
        'username' => set_value('username', $row->username),
        'password' => set_value('password', $row->password),
        
       
        );
            $this->template->load('home','user/update_profil', $data);
        } 
    }
    
    public function update_action_profil() 
    {
        
            if($this->input->post('password',TRUE)=='')
            {
                $data = array(
                
                'username' => $this->input->post('username',TRUE),
               
                
                );
            }
            else
            {
               $data = array(
                
                'username' => $this->input->post('username',TRUE),
                'password' => hash('sha512',md5($this->input->post('password',TRUE).$this->config->item('key_login'))),
                
                
                );
            }

            
            $this->M_user->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Data User Telah disimpan');




            $data_rwt = array(
                'id_ruas'=>$this->session->userdata('id_ruas',TRUE),
                'id_user'=>$this->session->userdata('id_user'),
                'activity'=>"Mengedit user ",
                'ket'=>'',
				'status'=>0,
                'tanggal'=>date('Y-m-d h:i:s'),
                );
            $this->db->insert('log_activity',$data_rwt);

            redirect(site_url('User/update_profil/'.$this->input->post('id_user', TRUE)));
             
    }

   
    public function ganti_password($id){
            $user = $this->M_user->get_all_user_bujt_user($id);

           


           $pass_lama = hash('sha512',md5($this->input->post('password_lama',TRUE).$this->config->item('key_login')));
          if($pass_lama==$user[0]['password'] ){
              

                     $data = array(
                   // 'username' => $this->input->post('nama',TRUE),
                    'password' => hash('sha512',md5($this->input->post('password',TRUE))),
                );

                 $this->db->where('id_user',$id);
                 $this->db->update('users',$data);
                
                 $this->session->unset_userdata('logged_in_benhil');
                 $this->session->sess_destroy();
                 $this->session->set_flashdata('message', 'Data password Berhasil diubah');
                 redirect('Login');



          }else{
                   $this->session->set_flashdata('message', 'Data password Lama Anda Salah');
                   redirect(site_url('User/update_profil/'.$id));
          }



                
            }
    public function user_bujt($id_ruas,$Namaruas){

    
            $user = $this->M_user->get_all_user_bujt($id_ruas,$Namaruas);

            $data = array(
                'user_data' => $user
            ); 
            $ses_data = array(
                'act_menu' => 'user',
                'title' => 'Data User',
                'breadcrumb' => 'Data USER Bujt '.$Namaruas.'',
            );

            $this->session->set_userdata($ses_data);

            $this->template->load('home','user/user_bujt/v_user_bujt',$data);
       

    } 
    function tambah_user_bujt($id_ruas,$Namaruas){
         error_reporting(0);
        $ruas = $this->M_ruas->get_all();

        $ses_data = array(
                'act_menu' => 'user',
                'title' => 'Data User',
                'breadcrumb' => 'TAMBAH USER BUJT '.$Namaruas,
            );

            $this->session->set_userdata($ses_data);



        $data = array(
            'button' => 'Tambah',
            'action' => site_url('user/create_action_bujt'),
            'ruas' => $ruas,
               
        
    );
        $this->template->load('home','user/user_bujt/tambah_user_bujt', $data);
        
    } 
    public function create_action_bujt() 
    {
            $id_ruas = $this->input->post('id_ruas',TRUE);
            $Namaruas = $this->input->post('Namaruas',TRUE); 
    
            $data = array(
                'id_ruas'     => $id_ruas,
                'username'    => $this->input->post('username',TRUE),
                'password'    => hash('sha512',md5($this->input->post('password',TRUE).$this->config->item('key_login'))),
                'email'       => $this->input->post('email',TRUE),
                'status_akun' => '1',
                'status_user' => $this->input->post('status_user',TRUE),
        );

            $this->M_user->insert($data);
            $this->session->set_flashdata('message', 'Data User telah disimpan');


             $data_rwt = array(
                'id_ruas'=>$id_ruas,
                'id_user'=>$this->session->userdata('id_user'),
                'activity'=>"Menambahkan user bujt ",
                'ket'=>'',
				'status'=>0,
                'tanggal'=>date('Y-m-d h:i:s'),
                );
            $this->db->insert('log_activity',$data_rwt);
            redirect(site_url('User/user_bujt/'.$id_ruas.'/'.$Namaruas));
       
    }
    public function update_bujt($id,$id_ruas,$Namaruas) 
    {
        error_reporting(0);
        $row = $this->M_user->get_all_user_bujt_by_id($id,$id_ruas);

         $ses_data = array(
                'act_menu' => 'user',
                'title' => 'Data User',
                'breadcrumb' => 'Data USER Bujt '.$Namaruas.'',
            );
       $this->session->set_userdata($ses_data);
        $data = array('row'=>$row);

            $this->template->load('home','user/user_bujt/update_user_bujt', $data);
       
    }
    
    public function update_action_bujt($id,$id_ruas,$Namaruas) 
    {
             $data_rwt = array(
                'id_ruas'=>$id_ruas,
                'id_user'=>$this->session->userdata('id_user'),
                'activity'=>"Mengedit user Bujt ",
                'ket'=>'',
				'status'=>0,
                'tanggal'=>date('Y-m-d h:i:s'),
                );
            $this->db->insert('log_activity',$data_rwt);
            if($this->input->post('password',TRUE)=='')
            {
                $data = array(
                
                'username' => $this->input->post('username',TRUE),
                
                 'email' => $this->input->post('email',TRUE),
                
                
                'status_user' => $this->input->post('status_user',TRUE),
                );
            }
            else
            {
               $data = array(
                
                'username' => $this->input->post('username',TRUE),
                'password' => hash('sha512',md5($this->input->post('password',TRUE).$this->config->item('key_login'))),
                 'email' => $this->input->post('email',TRUE),
               
                'status_user' => $this->input->post('status_user',TRUE),
                );
            }
            $id_ruas = $this->input->post('id_ruas',TRUE);
            $Namaruas = $this->input->post('Namaruas',TRUE); 
            
            //$this->M_user->update($this->input->post('id_user', TRUE), $data);
            $this->db->where('id_user',$id);
            $this->db->update('users',$data);
            $this->session->set_flashdata('message', 'Data User Ruas Berhasil diEdit');

            redirect(site_url('User/user_bujt/'.$id_ruas.'/'.$Namaruas));
             
    }
    public function delete_bujt($id,$id_ruas,$Namaruas){
            $this->db->where('id_user',$id);
            $this->db->delete('users');



             $data_rwt = array(
                'id_ruas'=>$id_ruas,
                'id_user'=>$this->session->userdata('id_user'),
                'activity'=>"Menghapus user Bujt ",
                'ket'=>'',
				'status'=>0,
                'tanggal'=>date('Y-m-d h:i:s'),
                );
            $this->db->insert('log_activity',$data_rwt);
          redirect(site_url('User/user_bujt/'.$id_ruas.'/'.$Namaruas));
    }
	
	function help(){

  			$ses_data = array(
                'act_menu' => 'user',
                'title' => 'Manual User',
                'breadcrumb' => 'Manual User',
            );
		$this->session->set_userdata($ses_data);


  		  $this->template->load('home','seksi/HELP');


  }
  
  function last_login(){

    $user = $this->M_user->get_all_last_login();

            $data = array(
                'user_data' => $user
            );
        $ses_data = array(
                'act_menu' => 'Last Login',
                'title' => 'Last Login',
                'breadcrumb' => 'Last Login',
            );

            $this->session->set_userdata($ses_data);

        
    $this->template->load('home','user/last_login',$data);

  }




}

/* End of file user.php */
/* Location: ./application/controllers/user.php */