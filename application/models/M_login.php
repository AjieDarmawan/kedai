<?php
class M_login extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	function m_aksi($data){	
		$d = $this->db->get_where('users',$data);

		if(count($d->result())>0)
		{
			
			$data["result"] = $d->num_rows();
			$data["data"] = $d->row();
			return $data;
		}
		else
		{
			$this->session->set_flashdata('result_login', 'Username atau Password yang anda masukkan salah.');
			header('location:'.base_url().'login');
		}
	
	}

	/*public function getLoginData($usr,$psw)
	{
		$u = mysql_real_escape_string($usr);
		$p=mysql_real_escape_string($psw);
		//$p = md5(mysql_real_escape_string($psw.$this->config->item("key_login")));
		$q_cek_login = $this->db->get_where('user', array('username' => $u, 'password' => $p));
		if(count($q_cek_login->result())>0)
		{
			foreach($q_cek_login->result() as $qck)
			{
				foreach($q_cek_login->result() as $qad)
				{
					$sess_data['logged_in'] = 'yesGetMeLogin';
					$sess_data['username'] = $qad->username;
					//$sess_data['nama_pengguna'] = $qad->nama_pengguna;
					$this->session->set_userdata($sess_data);
				}
				header('location:'.base_url().'login/sukses');
			}
		}
		else
		{
			$this->session->set_flashdata('result_login', 'Username atau Password yang anda masukkan salah.');
			header('location:'.base_url().'app_admin');
		}
	}*/
}
?>