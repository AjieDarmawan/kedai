

<div class="fh-breadcrumb">

    <div class="full-height">
        <div class="full-height-scroll white-bg border-left">

<div class="row">

       <div class="col-lg-12">         
                    <?php
                     if($this->session->flashdata('message'))
                        {
                            echo"<div class='alert alert-danger alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>               
                                    <strong>
                                        <i class='icon-ok'></i>
                                    PERHATIAN !
                                    </strong> ".$this->session->flashdata('message')." .
                                </div>";

                                
                        }

                    ?>
                    </div>


      <div class="ibox float-e-margins">
         <div class="col-sm-12">
        <div class="ibox-title">
                            <h5>Ganti Password</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
          <?php
       $id_user = $this->uri->segment('3');
        ?>
      <div class="ibox-content">
        <form id="form1" method="post" class="form-horizontal" action="<?php echo base_url('User/ganti_password/'.$id_user)?>">
          <div class="form-div">
         <div class="form-group">
           
          

         <!--   <div class="form-group">
            <label class="col-sm-2 control-label">Username<span class="text-danger">*</span></label>
              <div class="col-sm-4">
               <input type="text" class="form-control" autocomplete="off"  name="nama" id="nama" maxlength="20" placeholder="" value="<?php //echo $password; ?>" >
               
              </div>
          </div> -->

          <div class="form-group">
            <label class="col-sm-2 control-label">Password Lama<span class="text-danger">*</span></label>
              <div class="col-sm-4">
               <input type="password" class="form-control"  autocomplete="off" name="password_lama" id="password" maxlength="20" placeholder="password Lama" value="<?php //echo $password; ?>" >
             
              </div>
          </div>

            <div class="form-group">
            <label class="col-sm-2 control-label">Password Baru<span class="text-danger">*</span></label>
              <div class="col-sm-4">
               <input type="password" class="form-control" minlength="5" autocomplete="off" required name="password" id="password" maxlength="20" placeholder="password Baru" value="<?php //echo $password; ?>" >
               
              </div>
          </div>

        

        
        
      
      <input type="hidden" name="id_user" value="<?php echo$id_user;?>" /> 
       
      <div class="form-group">
         <div class="col-sm-4 col-sm-offset-2">
             <a href="<?php echo site_url('User') ?>" class="btn btn-default">Batal</a>

            <button type="submit" class="btn btn-info" >Simpan</button>
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
        nama  :'required',    
       
       Password: {
      required: true,
      minlength: 6
    },
     password_lama: {
      required: true,
      minlength: 6
    }

         
        },
      
        messages: { 
           Password: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
            minlength:'Minimal 6 Karakter',
          }, 
           password_lama: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
            minlength:'Minimal 6 Karakter',
          }, 
           
          nama: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
          }, 
          Username: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
          //  number   : '<i class="fa fa-times"></i>. Harus Angka'
          }, 
            
         
                

         },
         
        
      });
    });
  </script>