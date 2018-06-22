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





    <div class="ibox-content">

        <div style="overflow-x:scroll">

            <div class="col-sm-12">

                <p align="right"> 

                        <?php echo anchor(site_url('User/tambah'), '<button class="btn btn-info btn-sm"><i class="fa fa-plus"></i>Tambah</button>', 'class=""');?>

                </p>
                

            </div>



            <div class="col-sm-12">

                

             <table class="table table-striped table-bordered table-hover" id="editable" >

                <thead>

                    <tr>

                        <th class="center">

                             No

                        </th>

                      

                        <th>USERNAME</th>

                        <th>EMAIL</th>

                       <th>Login Terakhir</th> 

                        <th>STATUS</th>

                        <th width="70">Aksi</th>

                    </tr>

                </thead>

                <tbody>
                <?php
                    $start = 1;
                    foreach ($user_data as $G) {
                         
                       
                    ?>


                        <tr >
                            <td width="10px;"><?php echo $start++ ?></td>
                            <td width="200px;"><?php echo $G->username?></td>
                            <td width=""><?php echo $G->email?></td>
                            <td width=""><?php echo $G->last_login?></td>
                            <td width="">
                                    <?php echo $G->status_user?>
                            </td>
                              
                       
                         
                            <td style="text-align:center">
                                                  <?php
                                                       echo anchor(site_url('User/update/' . $G->id_user), '<button data-rel="tooltip" data-placement="bottom" title="Edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>', array('class' => ''));
                                                      ?>
                                                      
                                                     
                                                      
                                                    
                                                   
                                                      <?php
                                                      echo anchor(site_url('User/delete/' . $G->id_user), '<button data-rel="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-user" ><i class="fa fa-trash"></i></button>', array('class' => '', 'onClick' => "javasciprt: return confirm('Yakin menghapus data ini ?')"));

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













