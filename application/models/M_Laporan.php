<?php
class M_Laporan extends CI_Model{

	function getAll($key, $limit='', $offset='') {

        $this->db->select("users.id_user, users.username, member.nama, member.rfid_card, transaksi.kode_transaksi, transaksi.tanggal_transaksi, produk.nama_produk, transaksi.qty, transaksi.harga_jual, transaksi.diskon, transaksi.diskon_amount, transaksi.total, transaksi.type_pembayaran, transaksi.bayar_cash, mutasi.amount, mutasi.note, mutasi.jenis");

		$this->db->join("mutasi","transaksi.trans_mut = mutasi.trans_mut","left");
		$this->db->join("produk","produk.id_produk = transaksi.id_produk","left");
		$this->db->join("member","member.id_member = transaksi.id_member","left");
		$this->db->join("users","users.id_user = transaksi.id_user","left");
		$this->db->where('transaksi.tanggal_transaksi >= ', $key['date_start']);
		$this->db->where('transaksi.tanggal_transaksi <= ', $key['date_end']);


		if($key['rfid_card']!=""){
			$this->db->where('member.rfid_card = ', $key['rfid_card']);			
		}

		if($key['produk']!=""){
			$this->db->like("produk.nama_produk", $key['produk']);	
		}

		/*$this->db->where('transaksi.tanggal', $date);
		$this->db->where('mutasi.note', $date);
		$this->db->where('produk.nama_produk', $date);
*/


        if(!$limit && !$offset){
            $query = $this->db->get('transaksi');
        }
        else{
            $query = $this->db->get('transaksi', $limit, $offset);
        }
        
        return $query;
        $query->free_result();
    }
    
    function getCount($key) {

        $this->db->select("users.id_user, users.username, member.nama, member.rfid_card, transaksi.kode_transaksi, transaksi.tanggal_transaksi, produk.nama_produk, transaksi.qty, transaksi.harga_jual, transaksi.diskon, transaksi.diskon_amount, transaksi.total, transaksi.type_pembayaran, transaksi.bayar_cash, mutasi.amount, mutasi.note, mutasi.jenis");
        $this->db->from("transaksi");
		$this->db->join("mutasi","transaksi.trans_mut = mutasi.trans_mut","left");
		$this->db->join("produk","produk.id_produk = transaksi.id_produk","left");
		$this->db->join("member","member.id_member = transaksi.id_member","left");
		$this->db->join("users","users.id_user = transaksi.id_user","left");
		$this->db->where('transaksi.tanggal_transaksi >= ', $key['date_start']);
		$this->db->where('transaksi.tanggal_transaksi <= ', $key['date_end']);

		if($key['rfid_card']!=""){
			$this->db->where('member.rfid_card = ', $key['rfid_card']);			
		}

		if($key['produk']!=""){
			$this->db->like("produk.nama_produk", $key['produk']);	
		}

        
        $query = $this->db->get();
        
        return $query->num_rows();
        $query->free_result();
    }

}