<?php
error_reporting(0);

date_default_timezone_set('Asia/Jakarta');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->model(array('M_danatalangan','M_kontraktor','M_Gallery','M_seksi','M_ruas','M_fleet','M_material'));
        $this->load->model(array('M_produk'));

    }

    public function index()
    {
      $ses_data = array(
          'act_menu' => 'Produk',
          'title' => 'Produk',

      );
        $this->session->set_userdata($ses_data);
       $data = array(
           'makanan'=>$this->M_produk->get(),
        );
        $this->template->load('home','Makanan/v_makanan',$data);

    }

    function simpan(){

    $config['upload_path']   ='./file_uploads/makanan/.';
    $config['allowed_types'] ='jpg|png|gif|jpeg';
    $this->load->library('upload', $config);
    //print($this->upload->do_upload('userfile'));


    if (!$this->upload->do_upload('userfile')){
        $error = array('error' => $this->upload->display_errors());
        echo "Harap Menggunakan Format JPG / JPEG  / PNG / GIF ";
        // $this->load->view('v_upload', $error);
    }else{
        $data = array('upload_data' => $this->upload->data());
        //print_r($this->upload->data());
        //$this->load->view('v_upload_sukses', $data);
        $gambar = $data['upload_data']['file_name'];

        $data = array
        (
            'nama_produk'=>$this->input->post('nama_produk'),
            'kategori_menu'=>$this->input->post('kategori_menu'),
            'gambar'=>$gambar,
            'stok'=>$this->input->post('stok'),
            'kode_produk'=>$this->input->post('kode_produk'),
        );
            $this->db->insert('produk',$data);
            redirect('Produk');


    }


}


public function delete($id,$image){


    $delPath = 'file_uploads/makanan/'.$image;
     if(file_exists($delPath)){
         unlink($delPath);
          $this->db->where('id_produk',$id);
          $this->db->delete('produk');
          $this->session->set_flashdata('message', 'Data telah dihapus');
          redirect('Produk');

     }else{
        $this->db->where('id_produk',$id);
        $this->db->delete('produk');
        $this->session->set_flashdata('message', 'Data telah dihapus');
        redirect('Produk');
   }

  }


  public function edit(){





    $config['upload_path']   ='./file_uploads/makanan/.';
    $config['allowed_types'] ='jpg|jpeg|png|gif';
    $this->load->library('upload', $config);

    $id = $this->input->post('id');

     if ( ! $this->upload->do_upload('userfile')){
     $error = array('error' => $this->upload->display_errors());



     $data = array
     (
       'nama_produk'=>$this->input->post('nama_produk'),
       'kategori_menu'=>$this->input->post('kategori_menu'),
       //'gambar'=>$gambar,
       'stok'=>$this->input->post('stok'),
       'kode_produk'=>$this->input->post('kode_produk'),

     );

        $this->db->where('id_produk',$id);
        $this->db->update('produk',$data);
        $this->session->set_flashdata('message', 'Data Berhasil DiUpload');
        redirect('Produk');





     }else
     {

    $data = array('upload_data' => $this->upload->data());
    $gambar = $data['upload_data']['file_name'];
            $id = $this->input->post('id');
            $gambar_img  = $this->input->post('edit_gambar');


            $img = 'file_uploads/makanan/'.$gambar_img;
            if(file_exists($img)){
             unlink($img);
             $data = array
             (
               'nama_produk'=>$this->input->post('nama_produk'),
               'kategori_menu'=>$this->input->post('kategori_menu'),
               'gambar'=>$gambar,
               'stok'=>$this->input->post('stok'),
               'kode_produk'=>$this->input->post('kode_produk'),
             );

                $this->db->where('id_produk',$id);
                $this->db->update('produk',$data);
                $this->session->set_flashdata('message', 'Data Berhasil DiUpload');
                redirect('Produk');


                }else
                {


                    $data = array
                        (
                            'nama_barang'=>$this->input->post('nama_makanan'),
                            'harga'=>$this->input->post('harga'),

                        );

                    $this->db->where('id_barang',$id);
                    $this->db->update('barang',$data);
                    $this->session->set_flashdata('message', 'Data Berhasil DiUpload');
                    redirect('Makanan');

                }





        }

}






}



/* End of file user.php */

/* Location: ./application/controllers/user.php */
