<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard BPJT | Login Page</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>asset/image/favicon.jpg" >

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/iCheck/custom.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

</head>

<body style="background:#222 url('<?php echo base_url('assets/image/bg.jpg');?>');no-repeat center center;background-size:cover; background-attachment:fixed; "  >
    <div class="middle-box  loginscreen animated fadeInDown" >
        <!--<div style="background-color:#eaead8;opacity:0.8;border:1px solid #dbd9a3">-->
       <div style="background-color:transparent;">
            <div >

                <!--<h1 class="logo-name">PLN</h1>-->
                <img src='<?php echo base_url('assets/image/logo.jpg');?>'  width="100%" height="auto"><br>

            </div>
             <div class="ibox-content" style="background-color:transparent;">
            <h5 class="text-center">SILAHKAN MASUKKAN <br>USERNAME DAN PASSWORD !</h5>
            <div class="col-lg-12">         
        <?php
         if($this->session->flashdata('message'))
            {
                echo"<div class='alert alert-danger alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>               
                         ".$this->session->flashdata('message')." .
                    </div>";

                    
            }

        ?>
        </div>  
           
               
           
           


             <?php echo form_open('login/act'); ?>
           
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                 
                <!-- <div class="form-group">
                   <table width="100%">
                   
                        <tr><td>
                       <div class="i-checks"><label> <input type="radio"   name="akses" value="user" required  autocomplete="off"> <i></i>User</label></div>
                        </td><td>
                        <div class="i-checks"><label> <input type="radio"   name="akses" value="admin" required autocomplete="off"> <i></i>Administrator</label></div>
                        </td></tr>
                    </table>  
                 </div>-->
            
          
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

               
                 <?php
                 echo anchor('login/lupa_password',"<span class='btn btn-sm btn-danger btn-outline btn-block'>Lupa  password <i class='icon-arrow-right'></i></span>");

                ?>
            </form>
          <br>
            <p align="center">V. mb2-01</p>
        
           <!-- <div class="text-center" style="left:20%">Powered by <img src='<?php echo base_url();?>assets/image/NGS.png' width='50px' height='25px'></div>-->
            <!--<p class="m-t" align="justify"> <small>  <b>[user]</b> diperuntukan bagi karyawan PLN TJB, username menggunakan NIP. <br> <b>[Administrator]</b> untuk diperuntukan bagi adminkpi, admincsr, adminrisk. </small> </p>-->
            </div>
        </div>
        
    </div>

    
   <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>

    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js"></script>
   
     <script>
        $(document).ready(function() {

             $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
                /* Init DataTables */
           
           

        });
        
    </script>

</body>

</html>
