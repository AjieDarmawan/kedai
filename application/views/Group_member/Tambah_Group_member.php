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
                                                              style="background-color:#1f7093;padding:10px 10px; width:100%;color:white">Tambah Group </h4> </td>
                                                              <td><a class="btn btn-danger btn-outline close" data-dismiss="modal"
                                                               ><b>X</b></a></td>
                                                          </tr>
                                                        </table>

                                                        </div>
                                                        <!-- body modal -->
                                                      <div class="modal-body">
                                                        <form id="target_rencana" action="<?php echo base_url('Group_member/simpan')?>"
                                                         method="post" class="form-horizontal" enctype="multipart/form-data">


                                                          <div class="form-group">
                                                              <div class="col-sm-5">Nama Group</div>
                                                              <div class="col-sm-7">
                                                                  <input type="text" class="form-control input-sm" id="nama_makanan" name="nama" >
                                                             </div>
                                                          </div>



                                                            <div class="form-group">
                                                              <div class="col-sm-5">Diskon</div>
                                                              <div class="col-sm-7">
                                                                  <input type="number" class="form-control input-sm" id="harga" name="diskon" >
                                                             </div>
                                                          </div>



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

         harga   :'required',
         userfile    :'required',
         Deviasi    :'required',
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
