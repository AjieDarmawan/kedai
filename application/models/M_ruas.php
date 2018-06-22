<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class M_ruas extends CI_Model

{



    public $table = 'ruas';

    public $id = 'id_ruas';

    public $urutan = 'urutan';

    public $table1 = 'region';

    public $id_region = 'id_region';

     public $table2 = 'pemegangsaham';

    public $id_saham = 'id_saham';

    public $asc = 'ASC';

    public $desc = 'DESC';



    function __construct()

    {

        parent::__construct();

    }


    function get_ruaskonstruksi()
    {
        $query = $this->db->query("SELECT id_ruas,NamaRuas,BadanUsaha,Alias,spmk FROM `ruas` where Status='5'  order by  id_region,urutan ASC   ");
        return $query->result();
    }
   
    function count_ruas($id_region)
    {
        $query = $this->db->query("SELECT count(id_ruas) as jumlah_ruas FROM $this->table WHERE id_region='$id_region'   ");
        return $query->row();
    }
    // get all
	 function get_nama_ruas()
    {
        $query = $this->db->query("Select id_ruas,NamaRuas from $this->table   ");
        return $query->result();
    }
    function get_all()

    {

        $query = $this->db->query("Select r.*,reg.NamaRegion from $this->table r left join region reg on r.id_region=reg.id_region  ");

        return $query->result();

    }



    
     function get_ruas_tranjawa()

    {

        $query = $this->db->query("Select id_ruas,NamaRuas,PSN,urutan,Status from $this->table where id_region='1' order by urutan ASC ");

        return $query->result();

    }



     function get_ruas_nontranjawa()

    {

        $query = $this->db->query("Select id_ruas,NamaRuas,PSN,urutan,Status from $this->table where id_region='2' order by urutan ASC ");

        return $query->result();

    }



    function get_ruas_jabodetabek()

    {

        $query = $this->db->query("Select id_ruas,NamaRuas,PSN,urutan,Status from $this->table where id_region='3' order by urutan ASC ");

        return $query->result();

    }



     function get_ruas_sumatra()

    {

        $query = $this->db->query("Select id_ruas,NamaRuas,PSN,urutan,Status from $this->table where id_region='4' order by urutan ASC ");

        return $query->result();

    }



    function get_biaya()

    {

        $query = $this->db->query("SELECT sum(BiayaKonstruksi) BiayaKon, sum(BiayaTanah) BiayaTan FROM `ruas`  ");

        return $query->row();

    }

    

    

    // get data by id

    function get_by_id($id)

    {

        $this->db->where($this->id, $id);

        return $this->db->get($this->table)->row();

    }



    function get_by_urutan($urutan)

    {

        $this->db->where($this->urutan, $urutan);

        return $this->db->get($this->table)->row();

    }

    

    // insert data

    function insert($data)

    {

        $this->db->insert($this->table, $data);

    }



    // update data

    function update($id, $data)

    {

        $this->db->where($this->id, $id);

        $this->db->update($this->table, $data);

    }

    



    // delete data

    function delete($id)

    {

        $this->db->where($this->id, $id);

        $this->db->delete($this->table);

    }



    function get_all_region()

    {

        return $this->db->get($this->table1)->result();

    }



    function get_all_saham()

    {

        return $this->db->get($this->table2)->result();

    }

function get_all_total_ruas_tanah($id_ruas)
    {
         $query = $this->db->query("Select * from total_progres_tanah where id_ruas = '".$id_ruas."' order by id_total_progres desc");
        return $query->result();
    }

    function get_log_aktiviatas(){
            $query = $this->db->query("Select a.*,b.NamaRuas,c.username,c.last_login from log_activity  a 
         left join ruas b on a.id_ruas = b.id_ruas
         join users c on c.id_user =a.id_user 
         where a.status=0
         order by a.tanggal desc");
        return $query->result();
    }
	
	function get_log_aktiviatas_total(){
         $query = $this->db->query("Select a.*,b.NamaRuas,c.username,c.last_login from log_activity  a 
         left join ruas b on a.id_ruas = b.id_ruas
         join users c on c.id_user =a.id_user order by a.tanggal desc");
        return $query->result();
    }

    
     function updatestatuslog($id_log, $data){
        $this->db->where('id_log', $id_log);
        $this->db->update('log_activity', $data);
    }

    function riwayat(){
           $query = $this->db->query("SELECT id_ruas,NamaRuas FROM 
        ruas 
      
        WHERE STATUS ='5' Group by NamaRuas order by id_ruas asc");
          return $query->result();
    }

    function kontraktor($id_ruas){
        $query = $this->db->query("select count(id_kontraktor) as Jumlahkontraktor from kontraktor where id_ruas = '".$id_ruas."'");
          return $query->row();
    }

     function subkontraktor($id_ruas){
        $query = $this->db->query("select count(id_subkon) as Jumlahsubkon from sub_kontraktor where id_ruas = '".$id_ruas."'");
          return $query->row();
    }

     function sumberdana($id_ruas){
        $query = $this->db->query("select count(id_sumber_dana) as Jumlahsumberdana from sumber_dana where id_ruas = '".$id_ruas."'");
          return $query->row();
    }

    function issue($id_ruas){
        $query = $this->db->query("SELECT a.waktu FROM `issue` a
                                  join seksi b on a.id_seksi = b.id_seksi
                                  left JOIN Ruas c on c.id_ruas = b.id_ruas  where c.id_ruas = '".$id_ruas."'");
          return $query->row();
    }

    function drone($id_ruas){
        $query = $this->db->query("SELECT Tanggal_upload FROM `drone` WHERE id_ruas = '".$id_ruas."' ORDER by Tanggal_upload desc limit 1");
          return $query->row();
    }

     function gallery($id_ruas){
        $query = $this->db->query("SELECT tanggal FROM `gallery` WHERE id_ruas = '".$id_ruas."' ORDER by tanggal desc limit 1");
          return $query->row();
    }

    function kontak_kerja($id_ruas){
        $query = $this->db->query("SELECT Tanggal FROM `progres_waktu` WHERE id_ruas = '".$id_ruas."' ORDER by Tanggal desc limit 1");
          return $query->row();
    }

    function alat($id_ruas){
        $query = $this->db->query("SELECT c.id_ruas,a.Tanggal FROM `penggunaanalat` a
                join seksi b on a.id_seksi = b.id_seksi
                left JOIN Ruas c on c.id_ruas = b.id_ruas where c.id_ruas = '".$id_ruas."' ORDER by a.Tanggal desc limit 1");
          return $query->row();
    }


    function material($id_ruas){
        $query = $this->db->query("SELECT c.id_ruas,a.Tanggal FROM `penggunaanmaterial` a
                join seksi b on a.id_seksi = b.id_seksi
                left JOIN Ruas c on c.id_ruas = b.id_ruas where c.id_ruas = '".$id_ruas."' ORDER by a.Tanggal desc limit 1");
          return $query->row();
    }

      function progres_subkon($id_ruas){
        $query = $this->db->query("SELECT c.id_ruas,a.tanggal FROM `progres_pekerjaan_subkon` a
                join seksi b on a.id_seksi = b.id_seksi
                left JOIN Ruas c on c.id_ruas = b.id_ruas where c.id_ruas = '".$id_ruas."' ORDER by a.tanggal desc limit 1");
          return $query->row();
    }

    function tanah($id_ruas){
        $query = $this->db->query("SELECT c.id_ruas,a.Tanggal FROM `progrestanah` a
                join seksi b on a.id_seksi = b.id_seksi
                left JOIN Ruas c on c.id_ruas = b.id_ruas where c.id_ruas = '".$id_ruas."' ORDER by a.Tanggal desc limit 1");
          return $query->row();
    }
    function waktu($id_ruas){
        $query = $this->db->query("SELECT c.id_ruas,a.waktu FROM `Seksi` a     
                left JOIN Ruas c on c.id_ruas = a.id_ruas where c.id_ruas = '".$id_ruas."' ORDER by a.waktu desc limit 1");
          return $query->row();
    }
     function pembayaran_subkon($id_ruas){
        $query = $this->db->query("SELECT c.id_ruas,a.tanggal FROM `pembayaran_subkon` a
                join seksi b on a.id_seksi = b.id_seksi
                left JOIN Ruas c on c.id_ruas = b.id_ruas where c.id_ruas = '".$id_ruas."' ORDER by a.tanggal desc limit 1");
          return $query->row();
    }
    function progres_kontruksi($id_ruas){
        $query = $this->db->query("SELECT c.id_ruas,a.Tanggal FROM `progreskontruksi` a
                join seksi b on a.id_seksi = b.id_seksi
                left JOIN Ruas c on c.id_ruas = b.id_ruas where c.id_ruas = '".$id_ruas."' ORDER by a.Tanggal desc limit 1");
          return $query->row();
    }

    function master_Struktur(){
        $query = $this->db->query("SELECT * FROM master_sturuktur");
          return $query->result();
    }

    function get_struktur($id_ruas){
         $query = $this->db->query("SELECT a.*,b.nama_struktur FROM sturuktur a
           join master_sturuktur b on a.id_master_struktur=b.id_master_struktur where a.id_ruas = '52'");
          return $query->result();
    }


   function struktur($id_ruas){
          $query = $this->db->query("SELECT a.*,b.nama_struktur,b.satuan,s.seksi,s.id_seksi FROM sturuktur a
            left join master_sturuktur b on a.id_master_struktur=b.id_master_struktur
            left join seksi s on a.id_seksi=s.id_seksi where a.id_ruas='$id_ruas'" );
            return $query->result();
    }

    function progres_struktur($id_ruas){
          $query = $this->db->query("SELECT a.id_progres_struktur,a.id_ruas,a.id_seksi,a.id_struktur,a.selesai,a.tanggal,b.nama_struktur,b.satuan,c.keterangan,s.seksi,s.id_seksi,realisasi_persen,volume_sisa,sisa_persen FROM progres_struktur a
            inner join seksi s on a.id_seksi=s.id_seksi 
            inner join sturuktur c on a.id_struktur=c.id_struktur 
            inner join master_sturuktur b on c.id_master_struktur=b.id_master_struktur where a.id_ruas='".$id_ruas."' order by a.id_progres_struktur desc ");
          return $query->result();
    }

    function get_target_rencana($id_ruas){
         $query = $this->db->query("select * from target_rencana_kedepan where id_ruas = '".$id_ruas."' order by id_rencana_kedepan asc");
          return $query->result();
    }

     function get_sub_struktur($id_master_struktur){
          $query = $this->db->query("select satuan from master_sturuktur where id_master_struktur = '".$id_master_struktur."' ");
          return $query->result_array();
    }

    function get_struktur_perseksi($id_seksi){
          $query = $this->db->query("SELECT `id_struktur`, nama_struktur,satuan FROM `sturuktur` s inner join master_sturuktur ms on  s.id_master_struktur=ms.`id_master_struktur` where s.id_seksi='$id_seksi'");
          return $query->result();
    }
    
    function insert_riwayat_status($data)
    {

      $this->db->insert('riwayat_status_ruas', $data);

    }

      function last_drone($id_ruas){
      $query = $this->db->query('SELECT bulan,Tanggal_upload,Tahun FROM `drone` where id_ruas = "'.$id_ruas.'" ORDER BY Tanggal_upload DESC limit 1');
      return $query->row();
    }
    function count_drone($id_ruas,$bulan){
      $query = $this->db->query('SELECT COUNT(drone)as drone FROM `drone` where id_ruas = "'.$id_ruas.'" and  Bulan = "'.$bulan.'" ');
      return $query->row();
    }

    function total_progres_konstruksi($id_ruas){
    $query = $this->db->query("Select * from total_progres_konstruksi where id_ruas = '".$id_ruas."' order by id_progres desc");
        return $query->result();
  }

  function max_total_progres_konstruksi($id_ruas){
    $query = $this->db->query("Select * from total_progres_konstruksi where id_ruas = '".$id_ruas."' order by tanggal desc limit 1");
        return $query->row_array();
  }
    









}



/* End of file Pelanggan_model.php */

/* Location: ./application/models/Pelanggan_model.php */