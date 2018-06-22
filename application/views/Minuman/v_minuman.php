<div class="fh-breadcrumb">

    <div class="full-height">
        <div class="full-height-scroll white-bg border-left">

            <div class="row">


                    <div class="col-lg-12">
                    <?php
                     if($this->session->flashdata('message'))
                        {
                            echo"<div class='alert alert-success alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    <strong>
                                        <i class='icon-ok'></i>
                                    SUKSES !
                                    </strong> ".$this->session->flashdata('message')." .
                                </div>";


                        }

                    ?>
                    </div>

<?php
//echo "<pre>";
//print_r($user_data);
//echo "</pre>";
?>
    <div class="ibox-content">
        <div style="overflow-x:scroll">
            <div class="col-sm-12">
                <p align="right">


                <button data-toggle="modal" data-target="#tambah_minuman" type="button" class="btn btn-xs btn-info btn-outline" data-toggle="modal" data-target="#myModal2">
                               Tambah
                            </button>
                </p>
            </div>

            <div class="col-sm-12">

             <table class="table table-striped table-bordered table-hover" id="editable" >
                <thead>
                  <tr>
                      <th class="center">
                           No
                      </th>
                      <th>Kategori Menu</th>
                      <th>Kode Produk</th>
                      <th>Nama Produk</th>
                      <th>Stok</th>
                      <th>Harga</th>
                      <th>Level</th>
                      <th>Gambar</th>
                      <th width="70">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $start = 1;
                    foreach ($minuman as $G) {


                    ?>

                    <tr>
                        <td width="10px;"><?php echo $start++ ?></td>
                        <td width="200px;"><?php echo $G->kategori_menu?></td>
                        <td width="200px;"><?php echo $G->kode_produk?></td>
                        <td width=""><?php echo $G->nama_produk?></td>
                        <td width=""><?php echo $G->stok?></td>
                        <td width=""><?php echo $G->harga_jual?></td>
                          <td width=""><?php  if($G->level_harga==1)
                                {
                                  echo "Member";
                                }else{
                                  echo "Non Member";
                                }
                                ?></td>

                        <?php
                            $i = base_url('file_uploads/makanan/'.$G->gambar.'');
                        ?>

                        <td width="150px;"><?php echo "<img width='100%' height='60px'; src='$i'>"?></td>
                        <td style="text-align:center">
                                              <?php

                                                  ?>
                                                  <button data-rel="tooltip" id="mybtn"
                                                  data-toggle="modal" data-target="#ubah_makanan"
                                                  data-id="<?php echo $G->id_produk ?>"
                                                  data-nama-makanan="<?php echo $G->nama_barang?>"
                                                  data-harga="<?php echo $G->harga?>"
                                                  data-gambar="<?php echo $G->gambar?>"
                                                  data-placement="bottom" title="Edit" class="btn btn-success btn-xs id">
                                                  <i class="fa fa-edit "></i></a></button>
                                                  <?php
                                                  echo anchor(site_url('Produk/delete/' . $G->id_produk.'/'.$G->gambar), '<button data-rel="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-user" ><i class="fa fa-trash"></i></button>', array('class' => '', 'onClick' => "javasciprt: return confirm('Yakin menghapus data ini ?')"));

                                                  ?>
                                          </td>
                    </tr>






                    <?php
                }
                ?>


                </tbody>
            </table>

            </div>
        </div>
    </div>





         </div>

        </div>
    </div>
</div>

<script type="text/javascript">


 $(".id").click(function(){

          var a = $(this).attr('data-id');
          var b = $(this).attr('data-nama-minuman');
          var c = $(this).attr('data-harga');
          var d = $(this).attr('data-gambar');


             var input =  document.getElementById("id");
            input.value = a;

             var makanan =  document.getElementById("edit_nama_minuman");
             makanan.value = b;

             var harga =  document.getElementById("edit_harga");
             harga.value = c;

               var harga =  document.getElementById("edit_gambar");
             harga.value = d;



    });



</script>

<?php
    $this->load->view('Minuman/Tambah_minuman');
    $this->load->view('Minuman/ubah_minuman');
?>
<script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>


<script>
        $(document).ready(function() {

                /* Init DataTables */
           var oTable = $('#editable').DataTable();

             var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }




        });




    </script>
