<div class="fh-breadcrumb">

    <div class="full-height">
        <div class="full-height-scroll white-bg border-left">

<div class="row">
      <div class="ibox float-e-margins">
         <div class="col-sm-12">
        <div class="ibox-title">
                            <h5>Tambah User</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
      <div class="ibox-content">
        <form id="form1" action="<?php echo $action; ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
	        <div class="form-div">
     
        <div class="form-group">
            <label class="col-sm-2 control-label">Username<span class="text-danger">*</span></label>
              <div class="col-sm-4">
               <input type="text" class="form-control" name="username" autocomplete="off" id="username" maxlength="20" placeholder="username" value="<?php echo $username; ?>" >
              </div>

              <label class="col-sm-2 control-label">Password<span class="text-danger">*</span></label>
              <div class="col-sm-4">
               <input type="password" class="form-control" autocomplete="off" name="password" id="password" maxlength="20" placeholder="password" value="<?php echo $password; ?>" >
              </div>
          </div>

       
            
        <div class="hr-line-dashed"></div>
         <div class="form-group">
            <label class="col-sm-2 control-label">Email<span class="text-danger">*</span></label>
              <div class="col-sm-6">
               <input type="text" class="form-control" name="email"autocomplete="off"  id="email" placeholder="ex : ronaldo@gmail.com" value="<?php echo $email; ?>" >
                 <span id="pesan"></span>
              </div>
          </div>
           
        <div class="hr-line-dashed"></div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Status User<span class="text-danger">*</span></label>
            
              <div class="col-sm-2">
                  <div class="i-checks"><label> <input type="radio"   name="status_user" value="Admin" required> <i></i>Admin </label></div>
              </div>
              <div class="col-sm-2">
                 <div class="i-checks"><label> <input type="radio"   name="status_user" value="Kasir" required> <i></i>Kasir</label></div>
              </div>
            
              
             
              
            
          </div>
        <div class="hr-line-dashed"></div> 
        
     
       
      <div class="form-group">
         <div class="col-sm-4 col-sm-offset-2">
             <a href="<?php echo site_url('user/tambah') ?>" class="btn btn-default">Batal</a>

            <button type="submit" class="btn btn-info" id="b" type="submit">Simpan</button>
        </div>
      </div>
  </div>
	</form>
    </div>
    </div>
</div>
</div>

 </div>
    </div>
</div>
<!-- Mainly scripts -->
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Jquery Validate -->
    <script src="<?php echo base_url();?>assets/js/plugins/validate/jquery.validate.min.js"></script>

<script type="text/javascript">
  
    $(document).ready(function() {
      $("#form1").validate({
        rules: {
          nama: "required",
          NamaUser: "required",
          username: "required",
          id_ruas: "required",
          
         
          email: {        
            required: true,
            email: true
          },
          
        username: {
             required: true,
             minlength: 5,
             maxlength: 20,
          }, 
      password: {
             required: true,
             minlength: 6,
             maxlength: 20,
          },  
        
         
      
          status:"required",
         

        },
      
        messages: { 
         
          NamaUser: {
            required: '<i class="fa fa-times"></i>. Harus diisi',  
          },
          id_ruas: {
            required: '<i class="fa fa-times"></i>. Harus diisi',  
          },
        status: {
            required: '<i class="fa fa-times"></i>. Harus diisi',  
          },
         email: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
            email   : '<i class="fa fa-times"></i>. Harus Benar'
          },
          username: {
            required : '<i class="fa fa-times"></i>. Harus diisi',
            minlength: '<i class="fa fa-times"></i>. Harus 5-20 karakter'
          },
         
         password: {
            required : '<i class="fa fa-times"></i>. Harus diisi',
            minlength: '<i class="fa fa-times"></i>. Harus 6-20 karakter'
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
          $("#pesan").html('<img src="<?php echo base_url();?>/img/cross.png"><span style="color:maroon;left:1px;"><b></b></span>'); 
        
           $('#email').css('border', '3px #090 solid'); 
           $("#b").removeAttr('disabled');
       }  
       else{
          $("#pesan").html('<img src="<?php echo base_url();?>/img/tick.png"><span style="color:green;left:1px;"><b>Email Sudah Terdaftar</b></span>');  
            $('#email').css('border', '3px #C33 solid'); 
            document.getElementById("b").disabled = true;
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