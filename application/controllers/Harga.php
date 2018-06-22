<?php
error_reporting(0);

date_default_timezone_set('Asia/Jakarta');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Harga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->model(array('M_danatalangan','M_kontraktor','M_Gallery','M_seksi','M_ruas','M_fleet','M_material'));
        $this->load->model(array('M_harga','M_produk'));

    }

    public function index()
    {

      $ses_data = array(
          'act_menu' => 'Harga',
          'title' => 'Harga',

      );
        $this->session->set_userdata($ses_data);

        $data = array(
            'minuman'=>$this->M_harga->get(),
            'produk'=>$this->M_produk->get(),
         );

        $this->template->load('home','Minuman/v_minuman',$data);

    }

    function simpan(){



            $data = array
            (
                'id_produk'=>$this->input->post('id_produk'),
                'harga_jual'=>$this->input->post('harga'),
                'level_harga'=>$this->input->post('level'),

            );
                $this->db->insert('harga_produk',$data);
                $this->session->set_flashdata('message', 'Data Berhasil disimpan');
                redirect('Harga');


        }




    public function delete($id,$image){


          $delPath = 'file_uploads/minuman/'.$image;
           if(file_exists($delPath)){
               unlink($delPath);
                $this->db->where('id_barang',$id);
                $this->db->delete('barang');
                $this->session->set_flashdata('message', 'Data telah dihapus');
                redirect('Minuman');

           }else{
            $this->db->where('id_barang',$id);
            $this->db->delete('barang');
            $this->session->set_flashdata('message', 'Data telah dihapus');
            redirect('Minuman');
         }

        }


        public function edit_minuman(){


            $config['upload_path']   ='./file_uploads/minuman/.';
            $config['allowed_types'] ='jpg|png|gif|jpeg';
            $this->load->library('upload', $config);

            $id = $this->input->post('id');

             if ( ! $this->upload->do_upload('userfile')){
             $error = array('error' => $this->upload->display_errors());



             $data = array
             (
                 'nama_barang'=>$this->input->post('nama_minuman'),
                 'harga'=>$this->input->post('harga'),

             );

                $this->db->where('id_barang',$id);
                $this->db->update('barang',$data);
                $this->session->set_flashdata('message', 'Data Berhasil DiUpload');
                redirect('Minuman');





             }else
             {

            $data = array('upload_data' => $this->upload->data());
            $gambar = $data['upload_data']['file_name'];
                    $id = $this->input->post('id');
                    $gambar_img  = $this->input->post('edit_gambar');


                    $img = 'file_uploads/minuman/'.$gambar_img;
                    if(file_exists($img)){
                     unlink($img);
                     $data = array
                     (
                         'nama_barang'=>$this->input->post('nama_minuman'),
                         'harga'=>$this->input->post('harga'),
                         'gambar'=>$gambar,
                     );

                        $this->db->where('id_barang',$id);
                        $this->db->update('barang',$data);
                        $this->session->set_flashdata('message', 'Data Berhasil DiUpload');
                        redirect('Minuman');


                        }else
                        {


                            $data = array
                                (
                                    'nama_barang'=>$this->input->post('nama_minuman'),
                                    'harga'=>$this->input->post('harga'),

                                );

                            $this->db->where('id_barang',$id);
                            $this->db->update('barang',$data);
                            $this->session->set_flashdata('message', 'Data Berhasil DiUpload');
                            redirect('Minuman');

                        }





                }

            }

}



/* End of file user.php */

/* Location: ./application/controllers/user.php */
