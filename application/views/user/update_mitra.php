<?php 
date_default_timezone_set('Asia/Jakarta');
$panjang=6;
    function random($panjang)
    {
       $pengacak = 'ABCDEFGHIJKLMNOPQRSTUVXWYZ1234567890';
       $string = '';
       for($i = 0; $i < $panjang; $i++) {
       $pos = rand(0, strlen($pengacak)-1);
       $string .= $pengacak{$pos};
       }
        return $string;
    }

    $time=date('ms');
    $kode_mitra="MITRA".$time.random(2);

?>
<div class="fh-breadcrumb">

    <div class="full-height">
        <div class="full-height-scroll white-bg border-left">

<div class="row">
      <div class="ibox float-e-margins">
         <div class="col-sm-12">
        <div class="ibox-title">
                            <h5>Tambah Mitra</h5>
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
            <label class="col-sm-2 control-label">Email<span class="text-danger">*</span></label>
              <div class="col-sm-4">
               <input type="text" class="form-control" name="username" id="username" maxlength="20" placeholder="username" value="<?php echo $username; ?>" >
              </div>

          </div>
       <div class="hr-line-dashed"></div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Password<span class="text-danger">*</span></label>
              <div class="col-sm-4">
               <input type="password" class="form-control" name="password" id="password" maxlength="20" placeholder="password" value="<?php //echo $password; ?>" >
                <span>*Kosongkan jika tdk dirubah</span>
              </div>
          </div>
         <div class="hr-line-dashed"></div>
         <div class="form-group">
            <label class="col-sm-2 control-label">Nama Lengkap<span class="text-danger">*</span></label>
              <div class="col-sm-6">
               <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo $nama; ?>" >
              </div>
          </div>
            <div class="hr-line-dashed"></div>
         <div class="form-group">
            <label class="col-sm-2 control-label">Alamat KTP<span class="text-danger">*</span></label>
              <div class="col-sm-10">
               <textarea class="form-control" name="alamat"><?php echo$alamat_ktp;?></textarea>
              </div>
          </div>
        <div class="hr-line-dashed"></div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Outlet<span class="text-danger">*</span></label>
              <div class="col-sm-6">
               <input type="text" class="form-control" name="nama_outlet" id="nama_outlet" placeholder="Nama Lengkap" value="<?php echo $nama_outlet; ?>" >
              </div>
          </div>
            <div class="hr-line-dashed"></div>
         <div class="form-group">
            <label class="col-sm-2 control-label">Alamat Outlet<span class="text-danger">*</span></label>
              <div class="col-sm-10">
               <textarea class="form-control" name="alamat_outlet"><?php echo$alamat_outlet;?></textarea>
              </div>
          </div>
         <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label class="col-sm-2 control-label">No. Telp<span class="text-danger">*</span></label>
              <div class="col-sm-2">
               <input type="text" class="form-control" name="telp" id="telp" maxlength="12" placeholder="...(angka) " value="<?php echo $telp; ?>" >
              </div>

              <label class="col-sm-2 control-label">Status Akun<span class="text-danger">*</span></label>
              <div class="col-sm-1">
                <div class="i-checks"><label> <input type="radio"   name="status_akun" value="1" <?php if($status_akun=="1") {echo "checked";}?>> <i></i>Aktif</label></div>
              </div>
              <div class="col-sm-1">
                <div class="i-checks"><label> <input type="radio"   name="status_akun" value="0" <?php if($status_akun=="0") {echo "checked";}?>> <i></i> Blok</label></div>
              </div>
            
          </div>
          
     
      <input type="hidden" class="" name="id_user" id="id_user"   value="<?php echo$id_user;?>" >
      
      <div class="form-group">
         <div class="col-sm-4 col-sm-offset-2">
             <a href="<?php echo site_url('user/tambah_mitra') ?>" class="btn btn-default">Batal</a>

            <button type="submit" class="btn btn-info" type="submit">Simpan</button>
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
          
          inisial: "required",
         
          username: {        
            required: true,
            email: true,
          },
          
        
      password: {
             required: false,
             minlength: 6,
             maxlength: 20,
          },  
        telp: {
             required: true,
             number: true,
            
          }, 
         
      
          status:"required",
         

        },
      
        messages: { 
         
          NamaUser: {
            required: '<i class="fa fa-times"></i>. Harus diisi',  
          },
          inisial: {
            required: '<i class="fa fa-times"></i>. Harus diisi',  
          },
        status: {
            required: '<i class="fa fa-times"></i>. Harus diisi',  
          },
          telp: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
            number   : '<i class="fa fa-times"></i>. Harus Angka'
          },
         username: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
            email   : '<i class="fa fa-times"></i>. Harus Benar'
          },
         
         
         password: {
            required : '<i class="fa fa-times"></i>. Harus diisi',
            minlength: '<i class="fa fa-times"></i>. Harus 6-20 karakter'
          },
        
        
        

         },
         
        
      });
    });
  </script>