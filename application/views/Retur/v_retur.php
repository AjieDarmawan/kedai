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
                        
                        <th>Nama Supplier</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th width="70">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                

                </tbody>
            </table>

            </div>
        </div>
    </div>
                                

                                
                                

         </div>    

        </div>
    </div>
</div>


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






