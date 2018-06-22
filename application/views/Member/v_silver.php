<div class="fh-breadcrumb">



    <div class="full-height">
        <div class="full-height-scroll white-bg border-left">

            <div class="row">

                <?php
                  // echo "<pre>";
                  // print_r($silver);
                  // echo "</pre>";
                 ?>

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
                        <th>ID </th>
                        <th>Nama </th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal member</th>
                        <th>Saldo</th>
                        <th>Status</th>
                        <th width="70"></th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                      $start = 1;
                      foreach ($silver as $G) {
                      ?>
                          <tr >
                              <td width="10px;"><?php echo $start++ ?></td>
                              <td width="200px;"><?php echo $G->rfid_card?></td>
                              <td width=""><?php echo $G->nama?>   </td>
                              <td width=""><?php echo $G->alamat?>   </td>
                              <td width=""><?php echo $G->jenis_kelamin?>   </td>
                              <td width=""><?php echo $G->tanggal_member?>   </td>
                              <td width=""><?php echo $G->saldo?>   </td>
                              <td width=""><?php if($G->status_member==1){echo "Active";}else{echo "Tidak Active";} ?>   </td>
                              <td style="text-align:center">
                                                    <?php
                                                        ?>
                                                        <button data-rel="tooltip" id="mybtn"
                                                        data-toggle="modal" data-target="#ubah_makanan"
                                                        data-id="<?php echo $G->id_member ?>"
                                                        data-nama="<?php echo $G->nama?>"
                                                        data-alamat="<?php echo $G->alamat?>"
                                                        data-jenis-kelamin="<?php echo $G->jenis_kelamin ?>"
                                                        data-no-rfid="<?php echo $G->rfid_card ?>"
                                                        data-group-id="<?php echo $G->id_group ?>"

                                                        data-placement="bottom" title="Edit" class="btn btn-success btn-xs id">
                                                        <i class="fa fa-edit "></i></a></button>
                                                        <?php
                                                        echo anchor(site_url('Member/delete/' .$G->id_member.'/'.$G->id_group), '<button data-rel="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-user" ><i class="fa fa-trash"></i></button>', array('class' => '', 'onClick' => "javasciprt: return confirm('Yakin menghapus data ini ?')"));

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
          var b = $(this).attr('data-nama');
          var c = $(this).attr('data-alamat');
          var d = $(this).attr('data-jenis-kelamin');
          var e = $(this).attr('data-no-rfid');
          var f = $(this).attr('data-group-id');

             var input =  document.getElementById("id");
            input.value = a;

             var makanan =  document.getElementById("edit_nama");
             makanan.value = b;

             var harga =  document.getElementById("edit_alamat1");
             harga.value = c;
            //

              var harga =  document.getElementById("edit_group_id");
              harga.value = f;

              var harga =  document.getElementById("edit_no_id1");
              harga.value = e;

              var harga =  document.getElementById("edit_jenis_kelamin");
              harga.value = d;






    });



</script>


<?php
    $this->load->view('Member/Tambah_Member');
    $this->load->view('Member/ubah_Member');
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
