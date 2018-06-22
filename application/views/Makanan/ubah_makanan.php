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
                                                              style="background-color:#1f7093;padding:10px 10px; width:100%;color:white">Ubah Makanan</h4> </td>
                                                              <td><a class="btn btn-danger btn-outline close" data-dismiss="modal"
                                                               ><b>X</b></a></td>
                                                          </tr>
                                                        </table>

                                                        </div>
                                                        <!-- body modal -->
                                                      <div class="modal-body">
                                                        <form id="target_rencana1" action="<?php echo base_url('Produk/edit')?>"
                                                         method="post" class="form-horizontal" enctype="multipart/form-data">


                                                         <div class="form-group">
                                                             <div class="col-sm-5">Kode Barang</div>
                                                             <div class="col-sm-7">
                                                              <input type="text" class="form-control input-sm" id="edit_kode_produk" name="kode_produk" >
                                                            </div>
                                                        </div>

                                                             <div class="form-group">
                                                                 <div class="col-sm-5">Kategori Menu</div>
                                                                 <div class="col-sm-7">
                                                                          <select name="kategori_menu" id="edit_kategori_produk" class="form-control">
                                                                              <option value="Makanan Utama">Makanan Utama</option>
                                                                              <option value="Minuman Hangat Sehat">Minuman Hangat Sehat</option>
                                                                              <option value="Sarapan">Sarapan</option>
                                                                              <option value="Jus Sehat">Jus Sehat</option>

                                                                          </select>
                                                                </div>
                                                             </div>



                                                              <div class="form-group">
                                                                  <div class="col-sm-5">Nama Produk</div>
                                                                  <div class="col-sm-7">
                                                                      <input type="text" class="form-control input-sm" id="edit_nama_produk" name="nama_produk" >
                                                                 </div>
                                                              </div>




                                                              <div class="form-group">
                                                                  <div class="col-sm-5">Stok</div>
                                                                  <div class="col-sm-7">
                                                                      <input type="number" class="form-control input-sm" id="edit_stok" name="stok" >
                                                                 </div>
                                                              </div>

                                                          <input type="hidden" name="id" id="id">
                                                          <input type="hidden" name="edit_gambar" id="edit_gambar">



                                                           <div class="form-group">
                                                            <div class="col-sm-5">Gambar</div>
                                                            <div class="col-sm-7">
                                                                <input type="file" class="form-control input-sm" name="userfile" id="userfile"  placeholder=""   >

                                                              </div>
                                                          </div>






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
