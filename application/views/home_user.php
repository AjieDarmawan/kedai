<!--

    Application : E-konstruksi,
    Email       : nul.hamidi@gmail.com,
    Powered     : NGS Tech,
-->

<!DOCTYPE html>

<html>



<head>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>I-Cons | <?php echo$this->session->userdata('title');?></title>

    <link rel="shortcut icon" href="<?php echo base_url();?>assets/image/icon-login.png" >



    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">



    <link href="<?php echo base_url();?>assets/css/plugins/chosen/chosen.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/plugins/select2/select2.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">



    <link href="<?php echo base_url();?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">



    <link href="<?php echo base_url();?>assets/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">

    <!-- Toastr style -->

    <link href="<?php echo base_url();?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">



     <link href="<?php echo base_url();?>assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">



    <!-- Data Tables -->

    <link href="<?php echo base_url();?>assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">



   



    <link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/codemirror/codemirror.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/codemirror/ambiance.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/custom-style.css') ?>" rel="stylesheet">

    <?php

      //$this->load->view('nama_bulan');



      $this->load->view('pop_css');

      date_default_timezone_set('Asia/Jakarta');

    ?>



    <style type="text/css">

        .loaders {position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;background: url('<?php echo base_url();?>loaders/loadingggggggggggggggg.gif') 50% 50% no-repeat #f2f2f2;opacity: 0.9;filter: alpha(opacity=90);

    }

   .header_user{

    position: fixed;

    z-index:9999;

    top: 0;

    left: 0;

    width: 100%;

    background-color: #00A2E9;

    border-bottom: 1px solid #ccc;

  }

  .kotak_menu{

    width: 100%;

    height: auto;

    color: #82352a;

    background-color: #fff00f;

    border: 1px solid #82352a;

   font-size: 13px;

    padding: 8px 10px 8px 10px;

    border-radius: 5px 5px 5px 5px;

    font-weight: bold;

  }

  .kotak_menu:hover{

    background-color: #82352a;

    color: #fff00f;

  }

  .button_{

  

    height: auto;

    color: #82352a;

    background-color: #fff00f;

    border: 1px solid #82352a;

   font-size: 13px;

    padding: 2px 2px 2px 2px;

    border-radius: 2px 2px 2px 2px;

  }

  .button_:hover{

    color: #fff00f;

    background-color: #82352a;

    border: 1px solid #fff00f;

    border-radius: 2px 2px 2px 2px;

  }



  .button_dark{

    height: auto;

    color: #fff00f;

    background-color: #82352a;

    border: 1px solid #fff00f;

   font-size: 13px;

    padding: 2px 2px 2px 2px;

    border-radius: 2px 2px 2px 2px;

  }

  .button_:hover{

    color: #fff00f;

    background-color: #82352a;

    border: 1px solid #fff00f;

    border-radius: 2px 2px 2px 2px;

  }

 

  .isi_content{

    font-size: 11px;

    width: 100%;

    margin-left: 10px;

    margin-right: 10px;

    padding: 10px 17px 10px 0px;

   

    /*background-color: #eae9d9;*/

     background-color: white;

    

  }

  .isi_content-white{

    font-size: 11px;

    width: 100%;

    margin-left: 10px;

    margin-right: 10px;

    padding: 10px 17px 10px 0px;

   

    background-color: white;

    

  }

  

    table, td, th {

    border-color: #ccc;

    padding:2px;

  }



  .page-heading{

    margin-bottom: 10PX;

  }



  .footer_menu{

    z-index:9999;

    bottom: 20px;

    width: 100%;

    background-color: white;

    padding: 5px;

    

  }

  .footer_border{

    border-bottom: 1px dashed #82352a; 

    padding: 3px;

    

  }

  .content_border{

    border-bottom: 2px dashed #82352a; 

    padding-top: 3px;

    padding-bottom: 3px;

    

  }

  .footer_border{

    border-bottom: 2px dashed #82352a; 

    padding: 3px;

  }

  .footer_user{

    position: relative;

    z-index:9999;

    bottom: 0;

    width: 100%;

    background-color: transparent;

    padding: 5px 10px 2px 10px;

  }



  </style>



</head>



<!--<body class="pace-done body-small" style="background:#222 url('<?php echo base_url('assets/image/bg_a.jpg');?>');no-repeat center center;background-size:cover; background-attachment:fixed;">
-->
<body class="pace-done body-small" style="background-color:#e6e7fb ">

    <div id="wrapper">
    <!-- loaders -->
  <div class="loaders"></div>
    <!-- /loaders -->
    <div class="container">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-12">
				
                    </div>
                   </div> 


                   
                     <div class="breadcrumb">
                       <div class="header_user" style="color: #FFFFFF ; ">
                        <div class="pull-left"  >
                          <?php echo anchor('',"<img src='".base_url()."assets/image/logo.png'  width='200px' height:'20px' >");?>
                       </div>
                             <?php 
                               if($this->session->userdata('status_user')==3){
                            ?>
                                <div class="pull-right" style="padding-top:10px;"> 
                         <div class="col-xs-2" style=" width: 60px;text-align:center; " >
                           <?php echo anchor('app','<p style=color:#FFFFFF>New </p>'); ?>
                       </div>
                        <div class="col-xs-2" style=" width: 60px;text-align:center; " >
                           <?php echo anchor('User_app','<p style=color:#FFFFFF>HOME</p>'); ?>
                       </div>
                        <div class="col-xs-2" style="width: 225px;text-align:center;">
                            <?php echo anchor('User_app/TargetJalantol','<p style=color:#FFFFFF>TARGET JALAN TOL 2015-2019</p>'); ?>
                       </div>
                       <div class="col-xs-2" style="width: 155px;text-align:center;  " >
                               <?php echo anchor('User_app/Analisa_progres','<p style=color:#FFFFFF> ANALISA PROGRES </p>'); ?>
                      </div>
                       <div class="col-xs-2" style="width: 150px;text-align:center;">
                            <?php echo anchor('User_app/TargetOperasi','<p style=color:#FFFFFF>TARGET OPERASI</p>'); ?>
                       </div>
                        <div class="col-xs-2" style="width: 150px;text-align:center;">
                            <?php echo anchor('User_app/danatalangan','<p style=color:#FFFFFF>DANA TALANGAN</p>'); ?>
                       </div>
                        <div class="col-xs-2" style="width: 60px;text-align:center; ">
                             <?php echo anchor('User_app/drone','<p style=color:#FFFFFF>DRONE</p>'); ?>
                       </div>
                        <div class="col-xs-2" style=" width: 70px;text-align:center; ">
                             <?php echo anchor('User_app/gallery','<p style=color:#FFFFFF>GALLERY</p>'); ?>
                       </div>
                       <div class="col-xs-2" style="width: 60px;text-align:center;  " >
                               <?php echo anchor('User_app/Peta','<p style=color:#FFFFFF> PETA </p>'); ?>
                       </div>
                         <!-- <div class="col-xs-2" style="width: 60px;text-align:center;  " >
                               <?php echo anchor('User_app/Smk3','<p style=color:#FFFFFF> SMK3 </p>'); ?>
                       </div> -->
                        
                      <div class="col-xs-2" style="width: 100px;text-align:center; ">
                             <?php echo anchor('login/logout','<p style=color:#FFFFFF>LOGOUT</p>'); ?>
                       </div> 
                      
                        </div> 
                              <?php 
                            }else if($this->session->userdata('status_user')==4){?>
                                 <div class="col-xs-10 text-right" >
                                <?php echo anchor('login/logout','<p style=color:#FFFFFF;>LOGOUT</p>'); 
                              
                                ?>
                              
                                </div>


                            <?php
                            } 
                            ?>
                          
                       
                    </div> 
                </div>
                
            </div>
            </div>

            
            <?php
                $cek=$this->session->userdata('logged_in_bpjt');
                    if(!empty($cek))
                    {
                        echo $contents;
                    }
                    else
                    {
                        redirect('login/login');
                    }


            ?>
      
        </div>
        </div>






    <!-- Mainly scripts -->

    <!-- <script src="<?php echo base_url('assets/js/jquery-2.1.1.js') ?>"></script> -->

    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') ?>"></script>



    <script src="<?php echo base_url();?>loaders/loading.js"></script>

    <script src="<?php echo base_url('assets/js/plugins/chosen/chosen.jquery.js');?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/jasny/jasny-bootstrap.min.js');?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/select2/select2.full.min.js');?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/jquery-ui/jquery-ui.min.js');?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/validate/jquery.validate.min.js');?>"></script>

    <!-- Data picker -->

    <script src="<?php echo base_url('assets/js/plugins/datapicker/bootstrap-datepicker.js');?>"></script>



    <script src="<?php echo base_url('assets/js/plugins/dataTables/jquery.dataTables.js');?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.bootstrap.js');?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.responsive.js');?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.tableTools.min.js');?>"></script>



    <!-- <script src="<?php echo base_url('assets/code/highcharts.js'); ?>"></script>

    <script src="<?php echo base_url('assets/code/modules/funnel.js'); ?>"></script>

    <script src="<?php echo base_url('assets/code/modules/exporting.js'); ?>"></script> -->



    <!-- Custom and plugin javascript -->

    <script src="<?php echo base_url('assets/js/inspinia.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js');?>"></script>

    

     



</body>



</html>



