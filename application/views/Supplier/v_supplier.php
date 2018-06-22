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
                    
                        
                            <button data-toggle="modal" data-target="#tambah_makanan" type="button" class="btn btn-xs btn-info btn-outline" data-toggle="modal" data-target="#myModal2">
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
                        
                        <th>Nama Supplier</th>
                        <th>Nama Barang Supplier</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th width="70">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $start = 1;
                    foreach ($supplier as $G) {
                         
                       
                    ?>


                        <tr >
                            <td width="10px;"><?php echo $start++ ?></td>
                            <td width="200px;"><?php echo $G->nama_supplier?></td>
                            <td width=""><?php echo $G->nama_barang_supplier	?></td>
                            <td width=""><?php echo $G->qty_barang_supplier?></td>
                            <td width=""><?php echo $G->harga_supplier?></td>
                            <td width=""><?php echo $G->kontak?></td>
                            <td width=""><?php echo $G->alamat?></td>
                          
                            
                          
                            <td style="text-align:center">
                                                  <?php
                                                      
                                                      ?>
                                                      <button data-rel="tooltip" id="mybtn" 
                                        data-toggle="modal" data-target="#edit_minuman"
                                        data-id="<?php echo $G->id_supplier ?>" 
                                        data-nama-supplier="<?php echo $G->nama_supplier?>" 
                                        data-nama-barang-supplier="<?php echo $G->nama_barang_supplier?>" 
                                        data-harga-supplier="<?php echo $G->harga_supplier?>" 
                                        data-qty-barang-supplier="<?php echo $G->qty_barang_supplier?>" 
                                        data-alamat="<?php echo $G->alamat?>" 
                                        data-kontak="<?php echo $G->kontak?>" 
                                                      
                                                    
                                                      data-placement="bottom" title="Edit" class="btn btn-success btn-xs id">
                                                      <i class="fa fa-edit "></i></a></button>
                                                      <?php
                                                      echo anchor(site_url('Supplier/delete/' . $G->id_supplier), '<button data-rel="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-user" ><i class="fa fa-trash"></i></button>', array('class' => '', 'onClick' => "javasciprt: return confirm('Yakin menghapus data ini ?')"));

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
          var b = $(this).attr('data-nama-supplier');
          var c = $(this).attr('data-alamat');
          var d = $(this).attr('data-kontak');

           var e = $(this).attr('data-nama-barang-supplier');
           var f = $(this).attr('data-harga-supplier');
           var g = $(this).attr('data-qty-barang-supplier');
            

             var harga =  document.getElementById("id");
             harga.value = a;

             var harga =  document.getElementById("edit_nama_supplier");
             harga.value = b;

               var harga =  document.getElementById("edit_kontak");
             harga.value = c;

               var harga =  document.getElementById("edit_alamat");
             harga.value = d;


                var harga =  document.getElementById("edit_nama_barang_supplier");
             harga.value = e;

               var harga =  document.getElementById("edit_harga_supplier");
             harga.value = f;

               var harga =  document.getElementById("edit_qty");
             harga.value = g;
         

            

    });



</script>

<?php
    $this->load->view('Supplier/Tambah_supplier');
    $this->load->view('Supplier/ubah_supplier');
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






