<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller
{
    private $CI;
    function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
        $this->load->model(array('M_Produk'));
        $this->load->library('ReceiptPrint');

        //$this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta');
    }


    public function index(){
        if($this->input->post('search')!=''){
            $search = "and nama_produk like '%".$this->input->post('search')."%'";
        }else{
            $search = '';
        }

        $semua = $this->M_Produk->getbarang($search);
        /*echo "<pre"; print_r($semua);echo "</pre>";*/
        $mu = $this->M_Produk->getbarangsortir('makanan utama', $search, '1');
        $srp = $this->M_Produk->getbarangsortir('sarapan', $search, '1');
        $js = $this->M_Produk->getbarangsortir('jus sehat', $search, '1');
        $mhs = $this->M_Produk->getbarangsortir('minuman hangat sehat', $search, '1');
        //print_r($barang);
        $data = array('semua' => $semua, 'mu' => $mu, 'srp' => $srp, 'jus_sehat' => $js, 'mhs' => $mhs);
        $this->template->load('frontend/dashboard_utama','frontend/index_kasir_member',$data);
    }
    
    public function nonmember(){
        if($this->input->post('search')!=''){
            $search = "and nama_produk like '%".$this->input->post('search')."%'";
        }else{
            $search = '';
        }
        $semua = $this->M_Produk->getbarangnonmember($search);
        /*echo "<pre"; print_r($semua);echo "</pre>";*/
        $mu = $this->M_Produk->getbarangsortir('makanan utama', $search, '0');
        $srp = $this->M_Produk->getbarangsortir('sarapan', $search, '0');
        $js = $this->M_Produk->getbarangsortir('jus sehat', $search, '0');
        $mhs = $this->M_Produk->getbarangsortir('minuman hangat sehat', $search, '0');
        //print_r($barang);
        $data = array('semua' => $semua, 'mu' => $mu, 'srp' => $srp, 'jus_sehat' => $js, 'mhs' => $mhs);
        $this->template->load('frontend/dashboard_utama','frontend/index_kasir_nonmember',$data);
    }


    public function getmember($rfid_card){


        $query = $this->db->query("select * from member m left join group_member gb on gb.id_group = m.id_group where m.rfid_card = '".$rfid_card."'");
        $data = $query->result();

        if(count($data)>0){
            foreach ($data as $key) {
                echo $key->id_member.'='.$key->nama.'='.$key->alamat.'='.$key->jenis_kelamin.'='.$key->level_group.'='.$key->diskon_member.'='.$key->rfid_card.'='.$key->saldo;
            }
        }else{
            echo "Data RFID Tidak Ditemukan";
        }
        
    }

    public function getmemberid($rfid_card){


        $query = $this->db->query("select * from member m left join group_member gb on gb.id_group = m.id_group where m.rfid_card = '".$rfid_card."'");
        $data = $query->result();

        if(count($data)>0){
            foreach ($data as $key) {
                $value = $key->id_member.'='.$key->nama.'='.$key->alamat.'='.$key->jenis_kelamin.'='.$key->level_group.'='.$key->diskon_member.'='.$key->rfid_card.'='.$key->saldo;
            }
        }else{
            $value = "Data RFID Tidak Ditemukan";
        }
        
        return $value;
    }

    public function transaksi(){
        /*echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        exit();*/


        $post_id_produk = $_POST['id_produk'];
        $post_qty = $_POST['qty'];
        $post_harga_asli = $_POST['harga_asli'];
        $post_total_harga = $_POST['itotalharga'];
        $post_bayar = str_replace(',', '', $_POST['bayar']);
        $post_kembali = str_replace(',', '', $_POST['kembali']);
        $post_diskon = $_POST['diskon'];
        $post_diskon_amount = $_POST['diskonamount'];
        $post_rfid = $this->getmemberid($_POST['rfid_card']);
        $granttotal = $post_total_harga - $post_diskon_amount;

        

        /*echo "post total harga ".$post_total_harga."\n";
        echo "post diskonamount ".$post_diskon_amount."\n";
        echo $granttotal;
        exit(0);*/

        //echo "data rfid : ".$post_rfid;

        $split_rfid = preg_split("/[\s=]+/", $post_rfid);
        //print_r($split_rfid);
        //exit();
        $id_member = $split_rfid[0];

        $saldo = $split_rfid[8]-$granttotal;

        $kode_transaksi =  "INV/".date('Ymd')."/".substr($_POST['rfid_card'],3)."/".date('his');

        $trans_mut = substr($_POST['rfid_card'],6)."".date('dmhis');
        //15981006040110
        //2000000000

        /*echo $post_rfid."\n";
        echo $split_rfid[8]."\n";
        echo $granttotal."\n";
        echo $saldo;
        exit();*/

        if(empty($post_bayar)){
            $type_pembayaran = "Potong Saldo RFID";
            $bayar_cash = 0;
            $note = 'Transaksi Produk';
            $diskon = $post_diskon;
            $diskonamount = array();
            $total = array();
            $data = array();
            for($i=0; $i<count($post_id_produk); $i++){
                $diskonamount[$i] = ($post_qty[$i] * $post_harga_asli[$i] * $diskon)/100;
                $total[$i] = ($post_qty[$i] * $post_harga_asli[$i]) - $diskonamount[$i];
                $data[] = array(
                    'tanggal_transaksi' => date('Y-m-d h:i:s'),
                    'kode_transaksi' => $kode_transaksi,
                    'id_produk' => $post_id_produk[$i],
                    'qty' => $post_qty[$i],
                    'harga_jual' => $post_harga_asli[$i],
                    'diskon' => $diskon,
                    //'diskon_amount'=>$post_diskon_amount,
                    'diskon_amount'=> $diskonamount[$i],
                    'total' => $total[$i],
                    'type_pembayaran' => $type_pembayaran,
                    'bayar_cash' => $bayar_cash,
                    'id_member' => $id_member,
                    'id_user' => $this->session->userdata('id_user'),
                    'id_outlet' => $this->session->userdata('id_outlet'),
                    'trans_mut' => $trans_mut."".$i

                );   
            }

            $count = count($data);

            /*echo "rfid saldo ".$split_rfid[7]."\n";
            echo "post total harga ".$post_total_harga."\n";
            exit();*/

            if($split_rfid[8]<$granttotal){
                echo "Saldo User Tidak Mencukupi, Silahkan Melakukan Topup Saldo!";
            }else{

                if($this->db->insert_batch('transaksi', $data)){
                    
                    /*$first_id = $this->db->insert_id();
                    $last_id = $first_id + ($count-1);
                    $id_transaksi = array();
                    for($x=$first_id; $x<=$last_id; $x++){
                        $id_transaksi[] = array($x);
                    }*/

                    $this->db->trans_start(); 
                    $this->db->trans_strict(FALSE);

                    $datamutasi = array();
                    $diskonnominal = array();
                    $amount = array();
                    $last_amount ='';
                    for($i=0; $i<count($post_id_produk); $i++){
                        $diskonnominal[$i] = ($post_qty[$i] * $post_harga_asli[$i] *$post_diskon)/100;
                        $amount[$i] = ($post_qty[$i] * $post_harga_asli[$i]) - $diskonnominal[$i];
                        if($i==0){
                            $last_amount = $split_rfid[8];
                        }else{
                            $last_amount = $last_amount;
                        }
                        
                        $first_Array = $last_amount - $amount[$i];
                        $last_amount = $first_Array;

                        $datamutasi[] =array(
                            'amount' => '-'.$amount[$i],
                            'jenis' => 'D',
                            'note' => $note,
                            'tanggal_mutasi' => date('Y-m-d h:i:s'),
                            'kode_transaksi' => $kode_transaksi,
                            'trans_mut' => $trans_mut."".$i,
                            'id_member' => $id_member,
                            'id_user' => $this->session->userdata('id_user'),
                            'id_outlet' => $this->session->userdata('id_outlet'),
                            'last_amount' => $last_amount
                        );
                    }



                    $this->db->insert_batch('mutasi', $datamutasi); # Inserting data

                    $update_amount_member = array('saldo' => $saldo);
                    
                    $this->db->where('id_member', $id_member);
                    $this->db->update('member', $update_amount_member); 

                    $this->db->trans_complete(); # Completing transaction

                    /*Optional*/

                    if ($this->db->trans_status() === FALSE) {
                        # Something went wrong.
                        echo "Terjadi Masalah, Silahkan Ulangi Kembali";
                        log_message();
                        $this->db->trans_rollback();
                        return FALSE;
                    } 
                    else {
                        # Everything is Perfect. 
                        # Committing data to the database.
                        echo "Transaksi Sukses-".$kode_transaksi;
                        $this->db->trans_commit();
                        return TRUE;
                    }

                }else{
                    echo "Transaksi Gagal";
                }
            }



        }else{
            $type_pembayaran = "Cash";
            $bayar_cash = $post_bayar;
            $note = 'Transaksi Produk With Cash';
            $diskon = 0;
            $total = array();
            $data = array();
            for($i=0; $i<count($post_id_produk); $i++){
                $total[$i] = ($post_qty[$i] * $post_harga_asli[$i]);
                $data[] = array(
                    'tanggal_transaksi' => date('Y-m-d h:i:s'),
                    'kode_transaksi' => $kode_transaksi,
                    'id_produk' => $post_id_produk[$i],
                    'qty' => $post_qty[$i],
                    'harga_jual' => $post_harga_asli[$i],
                    'diskon' => $diskon,
                    //'diskon_amount'=>$post_diskon_amount,
                    'diskon_amount'=> 0,
                    'total' => $total[$i],
                    'type_pembayaran' => $type_pembayaran,
                    'bayar_cash' => $bayar_cash,
                    'id_member' => $id_member,
                    'id_user' => $this->session->userdata('id_user'),
                    'id_outlet' => $this->session->userdata('id_outlet'),
                    'trans_mut' => $trans_mut."".$i

                );   
            }

            $count = count($data);

            /*if($split_rfid[8]<$post_total_harga){
                echo "Saldo User Tidak Mencukupi, Silahkan Melakukan Topup Saldo!";
            }else{
            */
                if($this->db->insert_batch('transaksi', $data)){
                    
                    /*$first_id = $this->db->insert_id();
                    $last_id = $first_id + ($count-1);
                    $id_transaksi = array();
                    for($x=$first_id; $x<=$last_id; $x++){
                        $id_transaksi[] = array($x);
                    }*/

                    $this->db->trans_start(); 
                    $this->db->trans_strict(FALSE);

                    $datamutasi = array();
                    $amount = array();
                    $last_amount = ''; 
                    for($i=0; $i<count($post_id_produk); $i++){
                        $amount[$i] = ($post_qty[$i] * $post_harga_asli[$i]);
                        $amount[$i] = ($post_qty[$i] * $post_harga_asli[$i]) - $diskonnominal[$i];
                        if($i==0){
                            $last_amount = $split_rfid[8];
                        }else{
                            $last_amount = $last_amount;
                        }
                        
                        $first_Array = $last_amount - $amount[$i];
                        $last_amount = $first_Array;

                        $datamutasi[] =array(
                            'amount' => '-'.$amount[$i],
                            'jenis' => 'D',
                            'note' => $note,
                            'tanggal_mutasi' => date('Y-m-d h:i:s'),
                            'kode_transaksi' => $kode_transaksi,
                            'trans_mut' => $trans_mut."".$i,
                            'id_member' => $id_member,
                            'id_user' => $this->session->userdata('id_user'),
                            'id_outlet' => $this->session->userdata('id_outlet'),
                            'last_amount' => $last_amount
                        );
                    }



                    $this->db->insert_batch('mutasi', $datamutasi); # Inserting data

                    $this->db->trans_complete(); # Completing transaction

                    /*Optional*/

                    if ($this->db->trans_status() === FALSE) {
                        # Something went wrong.
                        echo "Terjadi Masalah, Silahkan Ulangi Kembali";
                        log_message();
                        $this->db->trans_rollback();
                        return FALSE;
                    } 
                    else {
                        # Everything is Perfect. 
                        # Committing data to the database.
                        echo "Transaksi Sukses Tanpa Diskon-".$kode_transaksi;
                        $this->db->trans_commit();
                        return TRUE;
                    }

                }else{
                    echo "Transaksi Gagal";
                }
            /*}*/

        }

        //0009581598
        
        //INV/20180606/9581598/01.36
     
    }

    public function transaksi_nonmember(){
        /*echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        exit();*/


        $post_id_produk = $_POST['id_produk'];
        $post_qty = $_POST['qty'];
        $post_harga_asli = $_POST['harga_asli'];
        $post_total_harga = $_POST['itotalharga'];
        $post_bayar = str_replace(',', '', $_POST['bayar']);
        $post_kembali = str_replace(',', '', $_POST['kembali']);
        $granttotal = $post_total_harga;

        $kode_transaksi =  "INV/".date('Ymd')."/NONMEMBER/".$this->session->userdata('id_outlet')."/".date('his');

        $trans_mut = $this->session->userdata('id_outlet')."".date('dmhis');
        /*echo($trans_mut);
        exit();*/
        //15981006040110
        //2000000000

        /*echo $post_rfid."\n";
        echo $split_rfid[8]."\n";
        echo $granttotal."\n";
        echo $saldo;
        exit();*/

    
            $type_pembayaran = "Cash";
            $bayar_cash = $post_bayar;
            $note = 'Transaksi Produk With Cash';
            $diskon = 0;
            $total = array();
            $data = array();
            for($i=0; $i<count($post_id_produk); $i++){
                $total[$i] = ($post_qty[$i] * $post_harga_asli[$i]);
                $data[] = array(
                    'tanggal_transaksi' => date('Y-m-d h:i:s'),
                    'kode_transaksi' => $kode_transaksi,
                    'id_produk' => $post_id_produk[$i],
                    'qty' => $post_qty[$i],
                    'harga_jual' => $post_harga_asli[$i],
                    'diskon' => $diskon,
                    //'diskon_amount'=>$post_diskon_amount,
                    'diskon_amount'=> 0,
                    'total' => $total[$i],
                    'type_pembayaran' => $type_pembayaran,
                    'bayar_cash' => $bayar_cash,
                    'id_member' => $id_member,
                    'id_user' => $this->session->userdata('id_user'),
                    'id_outlet' => $this->session->userdata('id_outlet'),
                    'trans_mut' => $trans_mut."".$i

                );   
            }

            $count = count($data);

            /*if($split_rfid[8]<$post_total_harga){
                echo "Saldo User Tidak Mencukupi, Silahkan Melakukan Topup Saldo!";
            }else{
            */
                if($this->db->insert_batch('transaksi', $data)){
                    
                    /*$first_id = $this->db->insert_id();
                    $last_id = $first_id + ($count-1);
                    $id_transaksi = array();
                    for($x=$first_id; $x<=$last_id; $x++){
                        $id_transaksi[] = array($x);
                    }*/

                    $this->db->trans_start(); 
                    $this->db->trans_strict(FALSE);

                    $datamutasi = array();
                    $amount = array();
                    $last_amount = ''; 
                    for($i=0; $i<count($post_id_produk); $i++){
                        $amount[$i] = ($post_qty[$i] * $post_harga_asli[$i]);
                        $amount[$i] = ($post_qty[$i] * $post_harga_asli[$i]) - $diskonnominal[$i];
                        if($i==0){
                            $last_amount = $split_rfid[8];
                        }else{
                            $last_amount = $last_amount;
                        }
                        
                        $first_Array = $last_amount - $amount[$i];
                        $last_amount = $first_Array;

                        $datamutasi[] =array(
                            'amount' => '-'.$amount[$i],
                            'jenis' => 'D',
                            'note' => $note,
                            'tanggal_mutasi' => date('Y-m-d h:i:s'),
                            'kode_transaksi' => $kode_transaksi,
                            'trans_mut' => $trans_mut."".$i,
                            'id_member' => $id_member,
                            'id_user' => $this->session->userdata('id_user'),
                            'id_outlet' => $this->session->userdata('id_outlet'),
                            'last_amount' => $last_amount
                        );
                    }



                    $this->db->insert_batch('mutasi', $datamutasi); # Inserting data

                    $this->db->trans_complete(); # Completing transaction

                    /*Optional*/

                    if ($this->db->trans_status() === FALSE) {
                        # Something went wrong.
                        echo "Terjadi Masalah, Silahkan Ulangi Kembali";
                        log_message();
                        $this->db->trans_rollback();
                        return FALSE;
                    } 
                    else {
                        # Everything is Perfect. 
                        # Committing data to the database.
                        echo "Transaksi Sukses Tanpa Diskon-".$kode_transaksi;
                        $this->db->trans_commit();
                        return TRUE;
                    }

                }else{
                    echo "Transaksi Gagal";
                }
            /*}*/

        

        //0009581598
        
        //INV/20180606/9581598/01.36
     
    }


    public function topup_saldo(){
        $data = array('id_user' => $this->session->userdata('id_user'));
        $this->template->load('frontend/dashboard_utama','frontend/topup_saldo',$data);
    }

    public function topup_proses(){
        $post_rfid = $_POST['rfid_card'];
        $post_nominal = str_replace(",", "", $_POST['nominal']);

        $query = $this->db->query("select id_member, saldo from member where rfid_card='$post_rfid'");
        $data = $query->row_array();
        $last_amount = $data['saldo']; 
        /*print_r($data);
        exit();*/
        if($data['saldo']!=null){
            $newsaldo = $data['saldo'] + $post_nominal;
            $member = array('saldo' => $newsaldo);
            $this->db->where('id_member', $data['id_member']);
            if($this->db->update('member', $member)){
                $mutasidata = array(
                    'amount' => $post_nominal,
                    'jenis' => 'K',
                    'note' => 'Topup Saldo ',
                    'tanggal_mutasi' => date('Y-m-d h:i:s'),
                    'kode_transaksi' => '',
                    'id_member' => $data['id_member'],
                    'last_amount' => $last_amount,
                    'id_outlet' => $this->session->userdata('id_outlet'),
                    'id_user' => $this->session->userdata('id_user')
                );
                
                if($this->db->insert('mutasi', $mutasidata)){
                    echo "Berhasil Di Topup";
                }else{
                    echo "Gagal Di Topup";
                }

            }else{

            }
        }else{
            echo "Data Tidak Ditemunukan";
        }
    }


    public function get_last_mutasi($rfid_card){
        $query = $this->db->query("select mt.amount, mt.note, mt.jenis, mt.tanggal_mutasi, m.nama, m.rfid_card, m.saldo 
            from mutasi mt
                inner join member m on m.id_member = mt.id_member
            where m.rfid_card = '$rfid_card' and mt.note = 'Topup Saldo' order by mt.tanggal_mutasi desc limit 1");
        $data = $query->result();


        echo "<table class='table table-responsive table-hover' width='100%'>
                    <tr>
                        <td>Nama</td>
                        <td>RFID CARD</td>
                        <td>Mutasi Note</td>
                        <td>Mutasi Jenis</td>
                        <td>Mutasi Amount</td>
                        <td>Tanggal</td>
                        <td>Saldo Akhir</td>
                    </tr>";

        $no= 1;
        foreach ($data as $key) {
            $warna=($no % 2 == 0) ? "#f9f9f9" : "#ffffff";
            echo "<tr bgcolor=$warna>
                <td>$key->nama</td>
                <td>$key->rfid_card</td>
                <td>$key->note</td>
                <td>$key->jenis</td>
                <td>Rp. ".number_format($key->amount)."</td>
                <td>".date('d-m-Y',strtotime($key->tanggal_mutasi))."</td>
                <td>Rp. ".number_format($key->saldo)."</td>
            </tr>";
            $no++;
        }
        echo "</table>";
    }


    public function cetak_struk(){
        $rfid_card = $_POST['rfid_card'];
        $kode_transaksi = $_POST['kode_transaksi'];



        $query = $this->db->query("select users.id_user, users.username, member.nama, member.rfid_card, transaksi.kode_transaksi, transaksi.tanggal_transaksi, produk.nama_produk, transaksi.qty, transaksi.harga_jual, transaksi.diskon, transaksi.diskon_amount, transaksi.total, transaksi.type_pembayaran, transaksi.bayar_cash, mutasi.amount, mutasi.note, mutasi.jenis
            from transaksi 
                left join mutasi on transaksi.trans_mut = mutasi.trans_mut
                left join produk on produk.id_produk = transaksi.id_produk 
                left join member on member.id_member = transaksi.id_member
                left join users on users.id_user = transaksi.id_user
            where transaksi.id_user = ".$this->session->userdata('id_user')." and member.rfid_card = '$rfid_card' and transaksi.kode_transaksi = '$kode_transaksi'
            order by transaksi.tanggal_transaksi desc");

        /*echo "select users.id_user, users.username, member.nama, member.rfid_card, transaksi.kode_transaksi, transaksi.tanggal_transaksi, produk.nama_produk, transaksi.qty, transaksi.harga_jual, transaksi.diskon, transaksi.diskon_amount, transaksi.total, transaksi.type_pembayaran, transaksi.bayar_cash, mutasi.amount, mutasi.note, mutasi.jenis
            from transaksi 
                left join mutasi on transaksi.trans_mut = mutasi.trans_mut
                left join produk on produk.id_produk = transaksi.id_produk 
                left join member on member.id_member = transaksi.id_member
                left join users on users.id_user = transaksi.id_user
            where transaksi.id_user = ".$this->session->userdata('id_user')." and member.rfid_card = '$rfid_card' and transaksi.kode_transaksi = '$kode_transaksi'
            order by transaksi.tanggal_transaksi desc";*/
        $data = $query->result();

        $x = array();
        $kasir = "";
        $tgl_transaksi = "";
        $diskon = 0;
        $diskon_amount = 0;
        $total = 0;
        $bayar = 0;
        $kode_transaksi ='';
        $rfid_card = '';
        foreach ($data as $key) {
            //echo $key->diskon_amount."<br>";
            $x[] = array(
                'kode_transaksi' => $key->kode_transaksi,
                'nama_produk' => $key->nama_produk,
                'qty' => $key->qty,
                'harga_jual' => $key->harga_jual,
                'bayar_cash' => $key->bayar_cash,
                'diskon' => $key->diskon,
                'diskonamount' => $key->diskon_amount
            );

            if($key->type_pembayaran=="Potong Saldo RFID"){
                $bayar +=$key->total; 
            }else{
                $bayar = $key->bayar_cash;
            }   
            
            $diskon = $key->diskon;
            $diskon_amount+=$key->diskon_amount;
            $total += $key->qty*$key->harga_jual;
            
            $kasir = $key->username;
            $tgl_transaksi = $key->tanggal_transaksi;
            $kode_transaksi = $key->kode_transaksi;
            $rfid_card = $key->rfid_card;
        }


        //echo $diskon_amount."<br>";

        $datas = array('struk' => $x, 'kasir' => $kasir, 'tgl_transaksi' => $tgl_transaksi, 'diskon' => $diskon, 'diskon_amount' => $diskonamount, 'total' => $total, 'bayar' => $bayar, 'kode_transaksi' => $kode_transaksi, 'rfid_card' => $rfid_card);
        $this->load->view('frontend/print_struk', $datas);

        try {
            
            $this->receiptprint->connect("/dev/usb/lp0");
            $this->receiptprint->print_test_receipt($x, $kasir, $tgl_transaksi, $diskon, $diskon_amount, $total, $bayar);
        } catch (Exception $e) {
            log_message("error", "Error: Could not print. Message ".$e->getMessage());
            $this->receiptprint->close_after_exception();
        }

       
    }
    
    public function cetak_ulang_struk(){
        $rfid_card = $_POST['rfid_card'];
        $kode_transaksi = $_POST['kode_transaksi'];



        $query = $this->db->query("select users.id_user, users.username, member.nama, member.rfid_card, transaksi.kode_transaksi, transaksi.tanggal_transaksi, produk.nama_produk, transaksi.qty, transaksi.harga_jual, transaksi.diskon, transaksi.diskon_amount, transaksi.total, transaksi.type_pembayaran, transaksi.bayar_cash, mutasi.amount, mutasi.note, mutasi.jenis
            from transaksi 
                left join mutasi on transaksi.trans_mut = mutasi.trans_mut
                left join produk on produk.id_produk = transaksi.id_produk 
                left join member on member.id_member = transaksi.id_member
                left join users on users.id_user = transaksi.id_user
            where transaksi.id_user = ".$this->session->userdata('id_user')." and member.rfid_card = '$rfid_card' and transaksi.kode_transaksi = '$kode_transaksi'
            order by transaksi.tanggal_transaksi desc");

      
        $data = $query->result();

        $x = array();
        $kasir = "";
        $tgl_transaksi = "";
        $diskon = 0;
        $diskon_amount = 0;
        $total = 0;
        $bayar = 0;
        foreach ($data as $key) {
            //echo $key->diskon_amount."<br>";
            $x[] = array(
                'kode_transaksi' => $key->kode_transaksi,
                'nama_produk' => $key->nama_produk,
                'qty' => $key->qty,
                'harga_jual' => $key->harga_jual,
                'bayar_cash' => $key->bayar_cash,
                'diskon' => $key->diskon,
                'diskonamount' => $key->diskon_amount
            );

            if($key->type_pembayaran=="Potong Saldo RFID"){
                $bayar +=$key->total; 
            }else{
                $bayar = $key->bayar_cash;
            }   
            
            $diskon = $key->diskon;
            $diskon_amount+=$key->diskon_amount;
            $total += $key->qty*$key->harga_jual;
            
            $kasir = $key->username;
            $tgl_transaksi = $key->tanggal_transaksi;
        }

        //echo $diskon_amount."<br>";

        try {
            
            $this->receiptprint->connect("/dev/usb/lp0");
            $this->receiptprint->print_test_receipt($x, $kasir, $tgl_transaksi, $diskon, $diskon_amount, $total, $bayar);
        } catch (Exception $e) {
            log_message("error", "Error: Could not print. Message ".$e->getMessage());
            $this->receiptprint->close_after_exception();
        }
    }


    
}

