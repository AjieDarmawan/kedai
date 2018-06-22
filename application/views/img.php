<!--
    Application : Mitra Baksi Benhil,
    Author      : Husnul Hmd,
    Email       : nul.hamidi@gmail.com,


-->
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BPJT | <?php echo$this->session->userdata('title');?></title>
    <link rel="shortcut icon" href="<?php echo base_url();?>image/favicon.ico" >

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
    <?php
      $this->load->view('nama_bulan');

      $this->load->view('pop_css');
      date_default_timezone_set('Asia/Jakarta');
    ?>

    <style type="text/css">
        .loaders {position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;background: url('<?php echo base_url();?>loaders/ajax-loader1.gif') 50% 50% no-repeat #f2f2f2;opacity: 0.9;filter: alpha(opacity=90);
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

<body class="pace-done body-small" style="background-color:#F5F5F5;font-size:12px">

    <div id="wrapper">
    <!-- loaders -->
     <div class=""></div>
    <!-- /loaders -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-12">
                   
                    <ol class="breadcrumb">
                        <table class="header_user" style="color: #FFFFFF">
                            <tr>
                              <td style="padding-left: 10px; ">
                                  <?php echo anchor('main/home',"<img src='".base_url()."assets/image/logo.png'  width='200px' height:'20px' >");
                                  ?>
                                  </td>
                              <td style="width: 60px;">
                                <?php echo anchor('user_app','<p style=color:#FFFFFF>HOME</p>'); ?>
                              </td>
                              <td  style="width: 60px;">
                               <?php echo anchor('region','<p style=color:#FFFFFF>REGION</p>'); ?>
                              </td>
                              <td style="width: 60px;">
                                <?php echo anchor('img/bujt','<p style=color:#FFFFFF>GALLERY</p>'); ?>
                              </td>
                              <td style="width: 60px;"">
                                <?php echo anchor('login/logout','<p style=color:#FFFFFF>SETTING</p>'); ?>
                              </td>
                              <td style="width: 50px; padding-right: 15px;">
                                <?php echo anchor('login/logout','<p style=color:#FFFFFF>LOGOUT</p>'); ?>
                              </td>
                            </tr>
                        </table>
                       
                    </ol>
                </div>
                
            </div>

            
              <?php echo $contents;  ?>































      
        </div>
        </div>



    <!-- Mainly scripts -->
    <!-- <script src="<?php echo base_url('assets/js/jquery-2.1.1.js') ?>"></script> -->
  
    
   

     

</body>

</html>

