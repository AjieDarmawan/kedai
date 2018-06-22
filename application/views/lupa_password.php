<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BUJT| Reset Password</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>image/favicon.ico" >

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

</head>

<body style="background:#222 url('<?php echo base_url('assets/image/bg2.jpg');?>');no-repeat center center;background-size:cover; background-attachment:fixed; "  >

    <div class="passwordBox loginscreen animated fadeInDown">
   <!-- <div class="passwordBox animated fadeInDown">-->
        <div >
            <div>

                <!--<h1 class="logo-name">IMC</h1>-->
        <!--<div style="color:#ccc;font-size:95px"><b>IMECO</b></div>-->
                    <img  src='<?php echo base_url('assets/image/logo.png');?>'  width="300px" height="auto"><br>
        

            </div>
                        
            <div class="ibox-content " style="background-color:black;opacity:0.7">
            <h2><b>Reset Password</b></h2>
             <p>
                        Masukkan alamat email Anda , kami akan mereset Password Lama Anda dan Password baru akan dikirimkan via Email.
              </p>


            <?php
         if($this->session->flashdata('message'))
            {
                echo"
                        <b>".$this->session->flashdata('message')."</b> .
                    ";

                    
            }

        ?>


            <form id="form1" class="m-t" role="form" method="post" action="<?php echo $action;?>">
               
               <!--<div class="form-group">
                    <input type="text" id="username" name="username" class="form-control" placeholder="username" autocomplete="off" >
                     
                </div>-->
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" autocomplete="off" >
                     <span id="pesan"></span>
                </div>
                <button type="submit" id="b" class="btn btn-danger block full-width m-b">GANTI PASSWORD</button>

                
                <p class="text-muted text-center"><small>================================</small></p>
                <?php
                 echo anchor('login/login',"<span class='btn btn-sm btn-white btn-block'>Kembali Ke halaman Login <i class='icon-arrow-right'></i></span>");

                ?>
            </form>

            <br>
            <p class="text-white" align="center">Powered By <img  src='<?php echo base_url('assets/image/NGS.png');?>'  width="50px" height="auto"></p>
        
           <!--<div class="text-center">Powered by <img src='<?php echo base_url();?>assets/image/NGS.png' width='40px' height='20px'></div>-->
           <!--<p class="m-t"> <small>PT. IMECO INTER SARANA APP &copy; 2016</small> </p>-->
           </div>
        </div>
    </div>

   

    <!-- Mainly scripts -->
    
   <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- Jquery Validate -->
    <script src="<?php echo base_url();?>assets/js/plugins/validate/jquery.validate.min.js"></script>

<script type="text/javascript">
  
    $(document).ready(function() {
      $("#form1").validate({
        rules: {
          username: "required",
          email: "required",
         
         
           harga: {        
            required: true,
            number: true
          },
       
          status:"required",
         

        },
      
        messages: { 
         
          username: {
            required: '<i class="fa fa-times"></i>. Data tidak boleh kosong, harus diisi',  
          },
          email: {
            required: '<i class="fa fa-times"></i>. Data tidak boleh kosong, harus diisi',  
          },
       
          harga: {
            required: '<i class="fa fa-times"></i>. Data tidak boleh kosong, harus diisi',
            number   : '<i class="fa fa-times"></i>. Harus Angka'
          },
                 

         },
         
        
      });
    });
  </script>
<script>
$(document).ready(function(){
 $("#email").keyup(function(){ 
    $('#pesan').html("<img src='<?php echo base_url();?>/img/loader.gif' /> Proses pengecekan ..."); 
    var email=$("#email").val();

    $.ajax({
      type : "POST",
      url  : "<?php echo base_url();?>index.php/login/get_email",
      data : "email="+email,
      success:function(data){
         if((data!=email) || (data=='')){
          $("#pesan").html('<img src="<?php echo base_url();?>/img/cross.png"><span style="color:maroon;left:1px;"><b>Email tidak terdaftar</b></span>'); 
          $('#email').css('border', '3px #C33 solid'); 
           document.getElementById("b").disabled = true;
       }  
       else{
          $("#pesan").html('<img src="<?php echo base_url();?>/img/tick.png"><span style="color:green;left:1px;"><b>Email terdaftar</b></span>');      
          $('#email').css('border', '3px #090 solid'); 
            $("#b").removeAttr('disabled');
       }
       //$("#pesan").html(email); 
      }

    });
  });

 /* $("#id_prosedur").change(function() {
    var id_prosedur=$("#id_prosedur").val();
    $.ajax({
      type : "POST",
      url  : "<?php echo base_url();?>index.php/kpi/getDataDm",
      data : "id_prosedur="+id_prosedur,
      success:function(data){
        $("#id_user").html(data);
      }

    });
  });*/

});
</script>

</body>

</html>
