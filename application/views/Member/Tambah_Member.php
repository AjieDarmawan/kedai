  <!-- Modal ADD -->
  <div id="tambah_makanan" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- konten modal-->
                                                    <div class="modal-content">
                                                        <!-- heading modal -->
                                                        <div class="modal-header">
                                                        <table width="100%">
                                                          <tr>
                                                              <td width="95%"><h4 class="blue bigger"
                                                              style="background-color:#1f7093;padding:10px 10px; width:100%;color:white">Tambah Member</h4> </td>
                                                              <td><a class="btn btn-danger btn-outline close" data-dismiss="modal"
                                                               ><b>X</b></a></td>
                                                          </tr>
                                                        </table>

                                                        </div>
                                                        <!-- body modal -->
                                                      <div class="modal-body">
                                                        <form id="target_rencana" action="<?php echo base_url('Member/simpan_member')?>"
                                                         method="post" class="form-horizontal" enctype="multipart/form-data">


                                                          <div class="form-group">
                                                              <div class="col-sm-5">Nama Member</div>
                                                              <div class="col-sm-7">
                                                                  <input type="text" class="form-control input-sm" id="nama" name="nama" >
                                                             </div>
                                                          </div>


                                                          <div class="form-group">
                                                            <div class="col-sm-5">Jenis Kelamin</div>
                                                            <div class="col-sm-7">
                                                                      <select name="jenis_kelamin"   class="form-control">
                                                                      <option value="laki-laki"> Laki - Laki </option>
                                                                        <option value="perempuan">Perempuan </option>
                                                                  </select>
                                                           </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-sm-5">No ID</div>
                                                            <div class="col-sm-7">
                                                                <input type="text" class="form-control input-sm" id="no_id" name="no_id" >
                                                           </div>
                                                        </div>

                                                            <div class="form-group">
                                                              <div class="col-sm-5">Alamat</div>
                                                              <div class="col-sm-7">
                                                                  <textarea  class="form-control input-sm" id="alamat" name="alamat" ></textarea>
                                                             </div>
                                                          </div>

                                                            <?php
                                                                if($this->uri->segment(2)=="silver"){
                                                                  ?>
                                                                      <input type="hidden" class="form-control input-sm" id="group_id" name="group_id" value="1" >
                                                              <?php  }elseif ($this->uri->segment(2)=="gold") { ?>
                                                                    <input type="hidden" class="form-control input-sm" id="group_id" name="group_id" value="2" >
                                                            <?php    }else{ ?>
                                                                  <input type="hidden" class="form-control input-sm" id="group_id" name="group_id" value="3" >
                                                              <?php
                                                            }
                                                             ?>





                                                            <div class="hr-line-dashed"></div>
                                                          <div class="form-group">

                                                           <div class="col-sm-12">

                                                              <button  type="submit" id="simpan" class="btn btn-info btn-sm pull-right" >Tambah</button>

                                                          </div>
                                                        </div>
                                                    </form>

                                                        </div>
                                                        <!-- footer modal -->

                                                    </div>
                                                </div>
                                           </div>

      <script>
            $(function() {
                $("#Tanggal_target").datepicker( {
                format: "mm-yyyy",
              viewMode: "months",
              minViewMode: "months"
          });
        });
  </script>



    <script type="text/javascript">
    $(document).ready(function() {
      $("#target_rencana").validate({
        rules: {
         nama_makanan  :'required',

         no_id   :'required',
         jenis_kelamin    :'required',
         alamat    :'required',
         Tanggal    :'required',
         // JumlahPekerja: {
           //  required: true,
             //number: true,
          //},

        },

        messages: {
            harga: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
          },

          userfile    :'required',
          Realisasi: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
          },
          nama_makanan: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
          //  number   : '<i class="fa fa-times"></i>. Harus Angka'
          },
           Deviasi: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
          //  number   : '<i class="fa fa-times"></i>. Harus Angka'
          },
           Tanggal: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
          //  number   : '<i class="fa fa-times"></i>. Harus Angka'
          },
         },

      });
    });
  </script>
