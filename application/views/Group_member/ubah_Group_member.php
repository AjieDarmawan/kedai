  <!-- Modal ADD -->
  <div id="ubah_makanan" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- konten modal-->
                                                    <div class="modal-content">
                                                        <!-- heading modal -->
                                                        <div class="modal-header">
                                                        <table width="100%">
                                                          <tr>
                                                              <td width="95%"><h4 class="blue bigger"
                                                              style="background-color:#1f7093;padding:10px 10px; width:100%;color:white">Ubah Group Member</h4> </td>
                                                              <td><a class="btn btn-danger btn-outline close" data-dismiss="modal"
                                                               ><b>X</b></a></td>
                                                          </tr>
                                                        </table>

                                                        </div>
                                                        <!-- body modal -->
                                                      <div class="modal-body">
                                                        <form id="target_rencana1" action="<?php echo base_url('Group_member/edit')?>"
                                                         method="post" class="form-horizontal" enctype="multipart/form-data">


                                                          <div class="form-group">
                                                              <div class="col-sm-5">Nama Group</div>
                                                              <div class="col-sm-7">
                                                                  <input type="text" class="form-control input-sm" id="edit_nama" name="nama" >
                                                             </div>
                                                          </div>

                                                            <div class="form-group">
                                                              <div class="col-sm-5">Diskon</div>
                                                              <div class="col-sm-7">
                                                                  <input type="number" class="form-control input-sm" id="edit_diskon" name="diskon" >
                                                             </div>
                                                          </div>

                                                          <input type="hidden" name="id" id="id">
                                                          <input type="hidden" name="edit_gambar" id="edit_gambar">


                                                            <div class="hr-line-dashed"></div>
                                                          <div class="form-group">

                                                           <div class="col-sm-12">

                                                              <button  type="submit" id="simpan" class="btn btn-info btn-sm pull-right" >Simpan</button>

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
      $("#target_rencana1").validate({
        rules: {
         nama_makanan  :'required',

         harga   :'required',

         Deviasi    :'required',
             Tanggal    :'required',


        },

        messages: {
            harga: {
            required: '<i class="fa fa-times"></i>. Harus diisi',
          },


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
