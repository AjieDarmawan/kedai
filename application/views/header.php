<!--

    Application : Monitoring Jalan Tol,
	Powered		: PT. Ngs Tech,

    Author      : Husnul Hmd,






-->

<!DOCTYPE html>

<html>



<head>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSB | <?php echo$this->session->userdata('title');?></title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/gretong/')?>images/logo.jpeg" >
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url();?>assets/css/plugins/switchery/switchery.css" rel="stylesheet"> -->
    <link href="<?php echo base_url();?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="<?php echo base_url();?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <!-- Data Tables -->
    <link href="<?php echo base_url();?>assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/codemirror/codemirror.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/codemirror/ambiance.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    <style type="text/css">

  		.loaders {position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;background: url('<?php echo base_url();?>loaders/ajax-loader1.gif') 50% 50% no-repeat #f2f2f2;opacity: 0.9;filter: alpha(opacity=90);

 	}
   table, td, th {

    border-color: #ccc;

    padding:2px;

  }

  </style>
</head>

<body class="fixed-sidebar no-skin-config full-height-layout">
    <div id="wrapper">
    <!-- loaders -->
     <!--  <div class="loaders"></div> -->
    <!-- /loaders -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                             <img alt="image" class="" src="<?php echo base_url();?>image/logo3.png" width="100%" />
                             </span>
                             <!-- <h3 style="color:blue;">Kedai Seribu Bukit</h3> -->
                         <br> <br> <br>
                         <strong class="font-bold"><?php echo$this->session->userdata('nama_user');?></strong>
                    </div>
                    <div class="logo-element">
                        NGS
                    </div>
                </li>
                <?php
                	error_reporting(0);
                        $status_user=$this->session->userdata('status_user');
                        $act_menu=$this->session->userdata('act_menu');
                        if($act_menu=='user')
                        {
                           $user='active';
                        }
                         elseif($act_menu=='Group_member')
                        {
                            $Group_member="active";
                        }
						               elseif($act_menu=='Dashboard')
                        {
                            $Dashboard="active";
                        }
                         elseif($act_menu=='kontraktor')
                        {
                            $kontraktor="active";
                        }
                         elseif($act_menu=='Silver')
                        {
                            $sb    ="active";
                            $silver="active";
                        }
                        elseif($act_menu=='Gold')
                       {
                           $sb    ="active";
                           $gold="active";
                       } elseif($act_menu=='Platinum')
                       {
                           $sb    ="active";
                           $platinum="active";
                       }

                         elseif($act_menu=='Isi_Saldo')

                        {

                            $Isi_Saldo="active";

                        }
                        elseif($act_menu=='issue')
                        {
                            $issue="active";
                        }
                        elseif($act_menu=='Harga')
                        {
                            $hrg='active ';
                            $Harga="active";
                        }
                        elseif($act_menu=='Produk')
                        {
                            $hrg='active ';
                            $menu_harga="active";
                        }
						                elseif($act_menu=='profil')
                        {
                            $profil="active";
                        }

                         elseif($act_menu=='Danatalangan')
                        {

                           $dana="active open";
                           $pembayaran='active';
                        }
                        elseif($act_menu=='Danatalangan')
                        {
                            $dana="active open";
                           $penagihan='active';

                        }
                         elseif($act_menu=='biaya produksi')
                        {
                            $biaya_pro="active";
                        }
			            elseif($act_menu=='Sumber Dana')
                        {
                           $Sumber_dana='active';
                        }
                         elseif($act_menu=='issue')
                        {
                            $issue="active";
                        }
                        elseif($act_menu=='Peta')
                        {
                           $peta='active';
                        }
                        elseif($act_menu=='ruas')
                        {
                           $mon='active';
                        }
			             elseif($act_menu=='Data Peralatan' )
                        {
                           $m='active ';
                           $a = 'active';
                        }

                         elseif($act_menu=='Data Material' )
                        {
                           $m='active';
                           $s = 'active';
                        }
						elseif($act_menu=='Rekapspp' )
                        {
                           $rekap='active';
                           $spp = 'active';
                        }
                        elseif($act_menu=='Rekaplman' )
                        {
                           $rekap='active';
                           $lman = 'active';
                        }
						 elseif($act_menu=='Dashboard')
                        {

                            $Dashboard="active";

                        }elseif($act_menu=='kontrak_kerja')

                        {

                            $kontrak_kerja="active";

                        } elseif($act_menu=='riwayat_update')
                        {
                            $riwayat_update="active";

                        } elseif($act_menu=='Stuktur')
                        {
                            $st='active';
                            $sa = 'active';
                        }
                         elseif($act_menu=='Input_Stuktur' )
                        {
                           $st='active';
                           $s = 'active';
                        }elseif($act_menu=='Grup Peralatan' )
                        {
                           $m='active';
                           $d = 'active';
                        }
                        elseif($act_menu=='pmi' )
                        {
                           $konsultan='active';
                           $pmi = 'active';
                        }
                        elseif($act_menu=='supervisi' )
                        {
                           $konsultan='active';
                           $supervisi = 'active';
                        }
                        elseif($act_menu=='status_tanah' )
                        {
                           $status_tanah='active';
                           // $supervisi = 'active';
                        }
						elseif($act_menu=='status_update' )
                        {
                           $status_update='active';
                        }
						elseif($act_menu=='Sisa Tanah')
                        {
                            $Sisa_Tanah="active";

						} else if($act_menu=="RTA Asistensi"){
							$rta = "active";
							$rta_ass = "active";
						}
                        elseif($act_menu=='m_progres_subkon')
                        {
                            $sb="active";
                            $m_progres_subkon ="active";
                        }
                        elseif($act_menu=='m_pembayaran_subkon')
                        {
                            $sb="active";
                            $m_pembayaran_subkon ="active";
                        }
                        else
                        {
                          $beranda="active";
                        }





                        if($this->session->userdata('status_user')==1){

                            echo "<li class='".$Dashboard."' >".anchor('Dashboard',"<i class='fa fa-dashboard'></i>  <span class='nav-label'>Dashboard</span>")."</li>";
                            echo "<li class='".$user."' >".anchor('User',"<i class='fa fa-user'></i>  <span class='nav-label'>Users</span>")."</li>";

                            echo "<li class='".$Group_member."' >".anchor('Group_member',"<i class='fa fa-group'></i>  <span class='nav-label'>Group Member</span>")."</li>";



                         }

                ?>

                <?php if($this->session->userdata('status_user')==1){ ?>


                  <li class='<?php echo $hrg?>'>
                      <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Produk</span><span class="fa arrow"></span></a>
                      <ul class='nav nav-second-level collapse '>
                          <?php
                              echo"<li class='".$menu_harga."' >".anchor('Produk',"<i class='icon-double-angle-right'></i>Menu Produk")."</li>

                                  <li class='".$Harga."' >".anchor('Harga',"<i class='icon-double-angle-right'></i>Setting Harga")."</li>";
                          ?>
                      </ul>
                  </li>

                    <li class='<?php echo $sb?>'>
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Member</span><span class="fa arrow"></span></a>
                        <ul class='nav nav-second-level collapse '>
                            <?php
                                echo"<li class='".$silver."' >".anchor('Member/silver',"<i class='icon-double-angle-right'></i>Silver")."</li>
                                    <li class='".$gold."' >".anchor('Member/gold',"<i class='icon-double-angle-right'></i>Gold")."</li>
                                    <li class='".$platinum."' >".anchor('Member/platinum',"<i class='icon-double-angle-right'></i>Platinum")."</li>";
                            ?>
                        </ul>
                    </li>



                      <li class='<?php echo $rta?>'>
                        <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">Laporan</span><span class="fa arrow"></span></a>
                        <ul class='nav nav-second-level collapse '>
                            <?php
                                echo"<li class='".$konsultan_rta."' >".anchor('Penjualan',"<i class='icon-double-angle-right'></i>Penjualan")."</li>
                                    <li class='".$rta_dok."' >".anchor('Pemasukan',"<i class='icon-double-angle-right'></i>Pemasukan")."</li>";

                            ?>
                        </ul>
                    </li>


                     <?php
                      echo "<li class='".$Isi_Saldo."' >".anchor('Member/isi_saldo',"<i class='fa fa-money'></i>  <span class='nav-label'>Isi Saldo</span>")."</li>";
                     echo "<li class='".$Dashboard."' >".anchor('Supplier',"<i class='fa fa-dashboard'></i>  <span class='nav-label'>Supplier</span>")."</li>";
                     echo "<li class='".$user."' >".anchor('Retur',"<i class='fa fa-group'></i>  <span class='nav-label'>Retur</span>")."</li>";
                     ?>


				<?php }?>





            </ul>



        </div>

    </nav>
