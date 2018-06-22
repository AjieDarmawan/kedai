<div class="fh-breadcrumb">

    <div class="full-height">
        <div class="full-height-scroll white-bg border-left">

            <div class="row">
                      <div class="col-lg-12">
                      <?php
                       if($this->session->flashdata('message'))
                          {
                              echo"<div class='alert alert-success alert-dismissable'>
                                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                      <strong>
                                          <i class='icon-ok'></i>
                                      SUKSES !
                                      </strong> ".$this->session->flashdata('message')." .
                                  </div>";


                          }

                      ?>
                      </div>

                          <div class="col-md-8" style="margin:40px">
                                <form action="<?php echo base_url('Member/isi_saldo')?>" method="post">
                                  <input type="text" name="cek" id="isi saldo" class="form-control" placeholder="Tap Kartu Anda">
                                  <p></p>
                                  <button  type="submit" class="btn btn-primary btn-xs pull-right hidden">Cek</button>
                              </form>

                                    <br><br><br>

                                           <table class="table table-striped table-bordered table-hover"  >


                                             <tr><th width="50%">Jenis Kartu Member</th><td><?php echo $isi_saldo->level_group?></td></tr>
                                             <tr><th>Nama Lengkap </th><td><?php echo $isi_saldo->nama?></td></tr>
                                             <tr><th>Jenis Kelamin </th><td><?php echo $isi_saldo->jenis_kelamin?></td></tr>
                                             <tr><th>Tangal Member </th><td><?php echo $isi_saldo->tanggal_member?></td></tr>
                                             <tr><th>Alamat </th><td><?php echo $isi_saldo->alamat?></td></tr>
                                             <tr><th>Saldo </th><td><?php
                                                                                if($isi_saldo->saldo!=null){echo "Rp.".$isi_saldo->saldo;}else{"";}

                                                                          ?></td></tr>

                                          </table>

                                                <?php
                                                    if($isi_saldo->saldo!=null){?>
                                                                  <button class="btn btn-primary btn-xs"  data-toggle="modal" data-target="#isi_Saldo">Isi Saldo </button>
                                                    <?php
                                                  }else{?>
                                                                    <button class="btn btn-primary btn-xs" disabled data-toggle="modal" data-target="#isi_Saldo">Isi Saldo </button>

                                                    <?php
                                                      }
                                                    ?>



                          </div>




            </div>
        </div>

    </div>
</div>

<!-- Modal ADD -->
<div id="isi_Saldo" class="modal fade" role="dialog">
                                              <div class="modal-dialog">
                                                  <!-- konten modal-->
                                                  <div class="modal-content">
                                                      <!-- heading modal -->
                                                      <div class="modal-header">
                                                      <table width="100%">
                                                        <tr>
                                                            <td width="95%"><h4 class="blue bigger"
                                                            style="background-color:#1f7093;padding:10px 10px; width:100%;color:white">Isi Saldo</h4> </td>
                                                            <td><a class="btn btn-danger btn-outline close" data-dismiss="modal"
                                                             ><b>X</b></a></td>
                                                        </tr>
                                                      </table>

                                                      </div>
                                                      <!-- body modal -->
                                                    <div class="modal-body">
                                                      <form id="target_rencana1" action="<?php echo base_url('Member/isi_saldo')?>"
                                                       method="post" class="form-horizontal" enctype="multipart/form-data">



                                                            <div class="form-group">
                                                                <div class="col-sm-5">Nama Lengkap</div>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control input-sm" disabled id="edit_nama_produk" name="nama_produk" value="<?php echo $isi_saldo->level_group?>" >
                                                               </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="col-sm-5">Jenis Kartu Member</div>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control input-sm" disabled id="edit_nama_produk" name="nama_produk" value="<?php echo $isi_saldo->nama?>">
                                                               </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="col-sm-5">Isi Saldo</div>
                                                                <div class="col-sm-7">
                                                                    <input type="number" required class="form-control input-sm" id="saldo" placeholder="Masukan Nominal Saldo" name="isi_saldo" >
                                                               </div>
                                                            </div>

                                                            <input type="hidden" name="id_member" value="<?php echo $isi_saldo->id_member?>" />
                                                              <input type="hidden" name="saldo"  value="<?php echo $isi_saldo->saldo?>" />
                                                                    <input type="hidden" name="cek" id="isi saldo" class="form-control"  value="<?php echo $isi_saldo->rfid_card?>" />

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
