<?php
 
  header("Content-type: application/vnd-ms-excel");
 
  header("Content-Disposition: attachment; filename=rekap_spp  user.xls");
 
  header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>








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

                        <th>RUAS</th>

                        <th>USERNAME</th>

                        <th>EMAIL</th>

                      <!--   <th>Login Terakhir</th> -->

                        <th>STATUS</th>

                        

                    </tr>

                </thead>

                <tbody>

                    <?php

                    $start = 0;

                    foreach ($user_data as $user) {

                        $start++;

                        if($user->status_akun=="1")

                        {

                            $status_akun="<button data-rel='tooltip' data-placement='bottom' title='Aktif' class='btn btn-primary btn-xs'><i class='fa fa-check'></i></button>";

                        }

                        else

                        {

                            $status_akun="<button data-rel='tooltip' data-placement='bottom' title='Block' class='btn btn-danger btn-xs'><i class='fa fa-times'></i></button>";

                        }



                       if($user->status_user==1){

                            $status="Admin";

                        }

                         elseif($user->status_user==2){

                             $status="Admin Ruas";

                        }

                         elseif($user->status_user==3){

                             $status="User";

                        }elseif($user->status_user==4){

                             $status="User Ruas";

                        }



                        if($user->id_ruas==0){

                            $ruas="BPJT";

                        }

                         else{

                             $ruas=$user->NamaRuas;

                         }

                        

                        

                       



                        ?>

                        <tr data-id="<?php echo$user->id_user;?>">

                          

                            <td class='center'><?php echo$start?>  </td>

                            <td><?php echo $ruas ?></td>

                            <td><?php echo $user->username ?></td>

                            <td><?php echo $user->email ?></td>

                          <!--   <td><?php echo $user->last_login ?></td> -->

                            <td><?php echo $status.' '.$status_akun  ?></td>

                           

                            <!--<td><?php echo $status_akun ?></td>-->

                            

                           

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













