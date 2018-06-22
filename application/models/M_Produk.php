<?php
class M_Produk extends CI_Model{
	

	function getbarang($where){
		$data = $this->db->query('select * from produk p left join harga_produk hp on p.id_produk = hp.id_produk where hp.level_harga = 1 '.$where);
		/*$data = $sql->result();
		print_r($data);*/
		return $data->result();
	}

	function getbarangnonmember(){
		$data = $this->db->query('select * from produk p left join harga_produk hp on p.id_produk = hp.id_produk where hp.level_harga = 0');
		/*$data = $sql->result();
		print_r($data);*/
		return $data->result();
	}

	function getbarangsortir($kategori_menu, $where, $level_harga){
		$data = $this->db->query("select * from produk p left join harga_produk hp on p.id_produk = hp.id_produk where hp.level_harga = '$level_harga' and kategori_menu like '".$kategori_menu."' ".$where);
		/*$data = $sql->result();
		print_r($data);*/
		return $data->result();
	}

}