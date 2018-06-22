<!--
	Application : Monitoring Progres tanah dan konstruksi Jalan Tol
    Author 		: Husnul Hmd
	Mail		: nul.hamidi@gmail.com
	
-->
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard BPJT | Login Page</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/image/icon-login.png" >

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/iCheck/custom.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

</head>

<body style="background:  #d5e9ef;">

    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;">

<div class="navbar-header">

   
   

</div>
       <center><h2 style="color:white"><b>   Kedai Seribu Bukit</b></h2></center>


 



</nav>

    <div class="middle-box  loginscreen animated fadeInDown" >
        
       <div style="background-color:transparent;">
            <div >

            <br><br>
<!--             
                <img  src='<?php echo base_url('assets/image/logolog.png');?>'  width="300px" height="auto"><br> -->

            </div>
             <div class="ibox-content" style="">
             <img alt="image" class="" src="<?php echo base_url();?>image/logo3.png" width="100%" />
            <h5 class="text-center text-white">SILAHKAN MASUKKAN <br>USERNAME DAN PASSWORD !</h5>
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
                 
               
            
          
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

               
                 <?php
                 echo anchor('login/lupa_password',"<span class='btn btn-sm btn-danger btn-outline btn-block'>Lupa  password <i class='icon-arrow-right'></i></span>");

                ?>
            </form>
          <br>
            <p class="text-white" align="center"> </p>
           
            <span style="color:blue"> <small>  Belum Punya Akun ? </small>Daftar </span>
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
