<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

class Login extends CI_Controller {

	function __construct(){

		parent::__construct();

		$this->load->model(array('M_user'));

	}
	

	public function index(){	
		$cek = $this->session->userdata('logged_in');
		$status_user=$this->session->userdata('status_user');

		if(empty($cek)){
			$this->load->view("login");
		}else{
			switch ($status_user) {
                case '0' : redirect('Dashboard/super_admin'); break;
                case '1' : redirect('Dashboard/admin'); break;
                case '2' : redirect('App'); break;
                //default : redirect('Aspp'); break;
            }

		}

	}

	public function act(){	

		$username=$this->input->post('username');
		$password=$this->input->post('password',TRUE);

		$data=array(
			'username'=>$username,
			'password' => hash('sha512',md5($password.$this->config->item('key_login'))),
		);

		//print_r($data);

		$cek=$this->M_user->m_aksi($data);

		//print_r($cek);
		//exit();
		if($cek["result"] == 1){
			$ses_data = array(
				'username' 		=> $cek["data"]->username,
				'id_user' 		=> $cek["data"]->id_user,
				'status_user' 	=> $cek["data"]->status_user,
				'logged_in' 	=> true,
				'id_outlet' 	=> $cek["data"]->id_outlet
			);

			$this->session->set_userdata($ses_data);
			date_default_timezone_set('Asia/Jakarta');

			$date=date('Y-m-d H:i:s');

			$status_user=$this->session->userdata('status_user');
			//$id_user = $this->session->userdata('id_user');
					
			//print_r($ses_data);
			
			//Super Admin / IT
			if($status_user=='0'){
				redirect('Dashboard/super_admin');

			//Admin	
			} else if($status_user=='1'){
				redirect('Dashboard/admin');

			//Kasir
			} else if($status_user=='2'){
                redirect('App');
			}

			$data = array('last_login' => $date);
			$this->db->where('id_user', $id_user);
			$this->db->update('users', $data);

		}else{
		    $this->session->set_flashdata('message', 'Username / Password yang Anda masukkan Salah');
			redirect('login');					
		}
		

	}



	function get_email(){

		error_reporting(0);

		$data='';

		$email=$this->input->post('email');

        $row=$this->M_user->get_email_lp($email);

        $data.=$row->email;
 
        echo$data;	

	}

	function lupa_password(){
		$data= array('action' => site_url('login/send'), );
		$this->load->view('lupa_password',$data);	
	}



	function action_lupa_password(){

		//error_reporting(0);



		date_default_timezone_set('Asia/Jakarta');



		$panjang=6;

		function random($panjang)

		{

		   $pengacak = 'ABCDEFGHIJKLMNOPQRSTUVXWYZ1234567890';

		   $string = '';

		   for($i = 0; $i < $panjang; $i++) {

		   $pos = rand(0, strlen($pengacak)-1);

		   $string .= $pengacak{$pos};

		   }

		    return $string;

		}



		$password=random(6);



		$dat=date("d-m-Y H:i:s"); 



		$username=$this->input->post('username');



		$email=$this->input->post('email');



		$message="Salam Hormat<br>

		Berikut ini data akun anda : <br><br>

		

		password baru : ".$password."<br>

		

		

		<br>

		Dibuat oleh : Admin Kartini 99<br>

		Pengirim: admin@paradisobali.com;

		Pada Tanggal : $dat";

		

		$row=$this->M_user->lupa_password($email);

		if($row)

		{

			 $this->load->helper(array('form', 'url'));

            $this->load->library('upload');

            $this->load->library('email');



            

            //konfigurasi email

            $config = array();

            $config['charset'] = 'utf-8';

            $config['useragent'] = 'Codeigniter';

            $config['protocol']= "smtp";

            $config['mailtype']= "html";

            $config['smtp_host']= "ssl://iix04.whmbox.com";

            $config['smtp_port']= "465";

            $config['smtp_timeout']= "465";

            $config['smtp_user']= "admin@pu-imeco.co.id";

            $config['smtp_pass']= "mutiara123";

            $config['crlf']="\r\n"; 

            $config['newline']="\r\n"; 

            $config['wordwrap'] = TRUE;

            $this->email->initialize($config);
            $this->email->from('admin@paradisobali.com');
            $this->email->to($email);
            $this->email->subject('Permintaan Password');
            $this->email->message($message);
            $this->email->send();

			$data = array('password' => hash('sha512',md5($password.$this->config->item('key_login'))),);
			$this->M_user->update($row->id_user, $data);
			if($this->email->send()){
                $this->session->set_flashdata('message', '<span style="color:green">Permintaan Password telah dikirim silahkan cek email</span>');
				redirect('login/lupa_password?em=1#konfirmasi');
            }else{
                show_error($this->email->print_debugger());
                redirect('login/lupa_password?em=error#konfirmasi');
            }

		}else{
			$this->session->set_flashdata('message', '<span style="color:red">Username dan Email tidak terdaftar</span>');
			redirect('login/lupa_password?em=0#konfirmasi');
		}

	}



	public function sendmail_vendor(){

        $ci = get_instance();

        $ci->load->library('email');

        $config['protocol']        = "smtp";

        $config['smtp_host']       = "ssl://smtp.gmail.com";

        $config['smtp_port']       =  "465";

        $config['smtp_user']       = "saiful@eyekatcher.com";

        $config['smtp_pass']       = "gabelpo95";

        $config['charset']         = "utf-8";

        $config['mailtype']        = "html";

       // $config['smtp_crypto']     = "tls";   

        $config['newline']         = "\r\n";

        

        $ci->email->initialize($config);

       	date_default_timezone_set('Asia/Jakarta');



		$panjang=6;

		function random($panjang)

		{

		   $pengacak = 'ABCDEFGHIJKLMNOPQRSTUVXWYZ1234567890';

		   $string = '';

		   for($i = 0; $i < $panjang; $i++) {

		   $pos = rand(0, strlen($pengacak)-1);

		   $string .= $pengacak{$pos};

		   }

		    return $string;

		}



		$password=random(6);



		$dat=date("d-m-Y H:i:s"); 



		$username=$this->input->post('username');



		$email=$this->input->post('email');



		$message="Salam Hormat<br>

		Berikut ini data akun anda : <br><br>

		

		password baru : ".$password."<br>

		

		

		<br>

		Dibuat oleh : Admin Kartini 99<br>

		Pengirim: admin@paradisobali.com;

		Pada Tanggal : $dat";



        $ci->email->from('noreply@eyekatcher.com', $ket_from);

//        $list = array('nndg.ace3@gmail.com','nndg.m94@gmail.com','nandangfb17@gmail.com');

        $ci->email->to($to);

//        $this->email->reply_to('noreply@eyekatcher.com', 'Explendid Videos');

        $ci->email->subject($ket_subject);

        $ci->email->message(''.$mesg);

        $ci->email->send();


    }




  function ganti_password_lupa(){

  //	$id = $this->input->post('id');



  	//$data = array('id_user'=>$id);

  	$this->load->view('lupa_password_ganti');

  }	



  public function send()  

  {  



  	

  	    date_default_timezone_set('Asia/Jakarta');



		$panjang=6;

		function random($panjang)

		{

		   $pengacak = 'ABCDEFGHIJKLMNOPQRSTUVXWYZ1234567890';

		   $string = '';

		   for($i = 0; $i < $panjang; $i++) {

		   $pos = rand(0, strlen($pengacak)-1);

		   $string .= $pengacak{$pos};

		   }

		    return $string;

		}



		$password=random(6);



		$dat=date("d-m-Y H:i:s"); 



		//$username=$this->input->post('username');



		$email = $this->input->post('email');

		//$to = $this->input->post('email');



  	     $id = $this->M_user->id_ganti_password($email);

  	     $id_user = $id[0]['id_user'];

  	



        $ci = get_instance();

        $ci->load->library('email');

        $config['protocol']        = "smtp";

        $config['smtp_host']       = "ssl://smtp.gmail.com";

        $config['smtp_port']       =  "465";

        $config['smtp_user']       = "iconsbpjt@gmail.com";

        $config['smtp_pass']       = "Puyengpuyeng2";

        $config['charset']         = "utf-8";

        $config['mailtype']        = "html";

       // $config['smtp_crypto']     = "tls";   

        $config['newline']         = "\r\n";

        

   	    $ci->email->initialize($config); 

   		$this->email->set_newline("\r\n");  

   		$this->email->from('recodeku@gmail.com', 'Admin BPJT');   

   	    $this->email->to($email);   

   		$this->email->subject('Ganti Password');



   		$this->email->message('<div style="margin:0;padding:10px 0;background-color:#ebebeb;font-size:14px;line-height:20px;font-family:Helvetica,sans-serif;width:100%;text-align:center">

            <div class="adM">

                <br>

            </div>

            <table style="width:600px;margin:0 auto;background-color:#ebebeb" border="0" cellpadding="0" cellspacing="0">

                <tbody>

                    <tr>

                        <td colspan="3" style="background-color:#fff;border-bottom:1px solid #ddd; font-size:14px;line-height:20px;font-family:Helvetica,sans-serif;color:#fff;padding-top:10px;padding-left:10px;padding-bottom:10px;text-align:center">

                            <a href="" target="_blank">

                                <img src="'.base_url('assets/image/favicon.jpg').'" alt="" class="">

                            </a>

                        </td>

                    </tr>

                    <tr>

                        <td></td>

                        <td style="background-color:#fff;padding:0 30px;color:#333;vertical-align:top">

                            <br>

                            <div style="font-family:Proxima Nova Semi-bold,Helvetica,sans-serif;font-weight:bold;font-size:24px;line-height:24px;color:#2196f3">

                                Setting Password

                            </div>

                            <div style="font-family:Proxima Nova Reg,Helvetica,sans-serif">

                                <div style="max-width:600px;margin:30px 0;display:block;font-size:14px;text-align:left!important">

                                    <strong style="color:blue;">ANDA </strong>

                                    Telah didaftarkan oleh Admin <strong style="color:blue;"></strong>,<br>

                                    dengan email : '.$email.'.

                                    <br><br>

                                    Password Baru anda adalah : <br>

                                    <div style="text-decoration:none;color:#fff;background-color:#ff5722;border:0;line-height:2;font-weight:bold;margin-right:10px;text-align:center;display:inline-block;border-radius:3px;padding:6px 12px;font-size:14px" target="_blank">'.$password.'</div>

                                   

                                    <br><br><br>

                                    <p style="color:#EB6936;"><i>*) Jangan dibalas, e-mail ini dikirim secara otomatis</i> </p>

                                </div>

                        </td>

                        <td></td>

                    </tr>

                    <tr>

                        <td colspan="3">

                            <div style="background-color:#fff;border-top:1px solid #ddd; ">

                                    <p style="color:#b7b0b0;font-size:0.9em;padding-bottom:10px;">Powered by : Developer

                                    </p>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>');  

   



   if (!$this->email->send()) {  

    show_error($this->email->print_debugger());

    //$this->session->set_flashdata('message', 'Server Sibuk Silahkan tunggu beberapa saat lagi');

    //redirect('ngs_17');



   }else{  

    //echo 'Success to send email'; 

  	 $data = array(

    'password' => hash('sha512',md5($password.$this->config->item('key_login'))),

     );





  	$this->db->where('id_user',$id_user);

  	$this->db->update('users',$data);



    $this->session->set_flashdata('message', 'Silahkan Cek Email Anda');

    redirect('ngs_17');



   } 

  }



}

