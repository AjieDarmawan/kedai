<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I-Cons | <?php echo$this->session->userdata('title');?></title>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/image/favicon.jpg" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/newcss/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/newcss/responsive.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/newcss/custom.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/newcss/scrollbar.css') ?>">

    <style type="text/css">
    .text-red-grafik{
        color:red;
        font-size: 14px;
    }
    .text-orange-grafik{
        color:#fbd01d;
        font-size: 14px;
    }

    .blink-warning {
    animation-name: anim;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-timing-function: linear;
    background-color:  #fff44f;
    color: #000;
    text-shadow: 0 0 3px #fff;
    animation-name: anim-half;  
    animation-timing-function: steps(1,end);
    }

    .blink-orange {
    animation-name: anim;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-timing-function: linear;
    /*background-color: #dc153d;*/
    background-color: #ff7f50;  
    color: #000;
    text-shadow: 0 0 3px #fff;
    animation-name: anim-half;  
    animation-timing-function: steps(1,end);
    }

    .blink-merah {
    animation-name: anim;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-timing-function: linear;
    /*background-color: #dc153d;*/
     background-color: #dc153d;  
    color: #000;
    text-shadow: 0 0 3px #fff;
    animation-name: anim-half;  
    animation-timing-function: steps(1,end);
    }

    .blink-hijau {
        background-color: #a4ff99;  
    }
    .blink-biru {
        background-color: #66d7ff;  
    }
 
.bezier {
    animation-timing-function: cubic-bezier(.8,0,.2,1);
}
.steps {
    animation-name: anim-half;  
    animation-timing-function: steps(1,end);
}

@keyframes anim {
    to {
        background-color: #ffa501;
    }
}
@keyframes anim-half {
    50% {
        background-color: transparent;
    }
}
  


.navbar-nav > li:hover > .dropdown-menu {
    display: block;
}
/*.dropdown-submenu:active {
    position: relative;
}*/
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
    width: 290px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
  </style>
    
</head>

<body>
    <div id="loading"></div>
    <div class="container hidden">
        <header>
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div id="header-container" >
                    <div class="navbar-header" style="z-index: 3004 !important">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                            <a class="navbar-brand" href="<?php echo base_url('app')?>"><img src="<?php echo base_url('assets/newimage/logo.png');?>" alt=""></a>
                        </div>
                    </div>
                     <?php
                        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                        if($this->uri->segment(2)==null){
                                $dash = "active"; $active1 = "active";
                        }else if($this->uri->segment(2)=='TargetJalantol'){
                                 $tj = "active";
                        }else if($this->uri->segment(2)=='analisa_progres'){
                                 $ap = "active";
                        }else if($this->uri->segment(2)=='TargetOperasi'){
                                 $to = "active";
                        }else if($this->uri->segment(2)=='danatalangan'){
                                 $dt = "active";
                        }else if($this->uri->segment(2)=='Zona_Merah'){
                                 $zm = "active";
                        }else if($this->uri->segment(2)=='jadwal_asistensi'){
                                 $ja = "active";
                        }else if($this->uri->segment(2)=="detail"){
                            $ps ="active";
                        }else if($this->uri->segment(2)=="drone" || $this->uri->segment(2)=="gallery" || $this->uri->segment(2)=="Peta"){
                            $gl ="active";
                        }else{
                             $active1 = " ";
                        }
                        //echo $this->uri->segment(2);

                        $transJawa          = $this->M_common->getruasbyegion(1);
                        $transNontranJawa   = $this->M_common->getruasbyegion(2);
                        $transJabotabek     = $this->M_common->getruasbyegion(3);
                        $transsumatra       = $this->M_common->getruasbyegion(4);
                    ?>
                      <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            
                            <!-- <li class="<?php echo $active1; ?>"><a href="<?php echo base_url('app')?>">Dashboard</a></li> -->
                            <li style="z-index: 3001 !important" class="dropdown <?php echo $active1; ?>">
                                <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Dashboard<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="" ><a href="<?php echo base_url('app')?>">Dashboard Nasional</a></li>
                                    <li class=""><a href="<?php echo base_url('app/TransJawa')?>">Trans Jawa</a></li>
                                    <li class=""><a href="<?php echo base_url('app/NonTransJawa')?>">Non Trans Jawa</a></li>
                                    <li class=""><a href="<?php echo base_url('app/jbdtk')?>">Jabodetabek</a></li>
                                    <li class=""><a href="<?php echo base_url('app/Sumatera')?>">Trans Sumatera</a></li>
                                     <li class=""><a href="<?php echo base_url('app/kuadran1')?>">Kuadran Nasional</a></li>
    
                                </ul>
                            </li>
                            <li style="z-index: 3001 !important" class="dropdown <?php echo $ps; ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil Ruas<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Trans Jawa</a>
                                        <!-- <ul class="dropdown-menu" style="margin-top: 33px !important"> -->
                                        <ul class="dropdown-menu">
                                            <?php foreach($transJawa as $key){?>
                                            <li><a href="<?php echo base_url('app/detail/')."".$key->id_ruas?>"><?php echo $key->NamaRuas;?></a></li> 
                                            <?php } ?>                                  
                                            
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Non Trans Jawa</a>
                                        <!-- <ul class="dropdown-menu" style="margin-top: -9px !important"> -->
                                        <ul class="dropdown-menu">
                                            <?php foreach($transNontranJawa as $key){?>
                                            <li><a href="<?php echo base_url('app/detail/')."".$key->id_ruas?>"><?php echo $key->NamaRuas;?></a></li> 
                                            <?php } ?>                                  
                                            
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Jabodetabek</a>
                                        <!-- <ul class="dropdown-menu" style="margin-top: -52px !important"> -->
                                        <ul class="dropdown-menu">
                                            <?php foreach($transJabotabek as $key){?>
                                            <li><a href="<?php echo base_url('app/detail/')."".$key->id_ruas?>"><?php echo $key->NamaRuas;?></a></li> 
                                            <?php } ?>                                  
                                            
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Trans Sumatera</a>
                                        <!-- <ul class="dropdown-menu" style="margin-top: -95px !important"> -->
                                        <ul class="dropdown-menu">
                                            <?php foreach($transsumatra as $key){?>
                                            <li><a href="<?php echo base_url('app/detail/')."".$key->id_ruas?>"><?php echo $key->NamaRuas;?></a></li> 
                                            <?php } ?>                                  
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </li>
							<li class="<?php echo $zm; ?>"><a href="<?php echo base_url('app/Zona_Merah')?>">Monitoring Waktu</a></li>
                            <li class="<?php echo $ja; ?>"><a href="<?php echo base_url('app/jadwal_asistensi')?>">Jadwal asistensi</a></li>
                            <!--<li class="<?php echo $tj; ?>"><a href="<?php echo base_url('app/TargetJalantol')?>">Target Jalan Tol 2015-2019</a></li>-->
							  
                             <!--<li class="<?php echo $ap; ?>"><a href="<?php echo base_url('app/analisa_progres')?>">Analisa Progres</a></li>-->
                            <li class="<?php echo $to; ?>"><a href="<?php echo base_url('app/TargetOperasi')?>">Target Operasi</a></li>
                            <li class="<?php echo $dt; ?>"><a href="<?php echo base_url('app/danatalangan')?>">Dana Talangan</a></li>
                            <li class="dropdown <?php echo $gl; ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class=""><a href="<?php echo base_url('app/drone')?>">Drone</a></li>
                                    <li class=""><a href="<?php echo base_url('app/gallery')?>">Gallery</a></li>
                                    <li class=""><a href="<?php echo base_url('app/Peta')?>">Peta</a></li>
                                    
                                </ul>
                            </li>

                            
                             <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Drone<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li> -->
                            <li><a href="<?php echo base_url('login/logout')?>">Logout </a></li>
                        </ul>
                    </div>

                  
                   
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </header>
        <section id="content">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="<?php echo base_url('assets/code/modules/funnel.js'); ?>"></script>
        <script src="https://code.highcharts.com/highcharts-more.js"></script>
        <script src="https://code.highcharts.com/modules/series-label.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
        <script src="<?php echo base_url('assets/newjs/app.js');?>"></script>
        <script src="<?php echo base_url('assets/newjs/menu.js');?>"></script>
       <!--  <script src="<?php echo base_url('assets/newjs/print.js');?>"></script> -->
            
             <?php
                //$this->load->view('nama_bulan');
                $cek=$this->session->userdata('logged_in_bpjt');
                    if(!empty($cek))
                    {
                        echo $contents;
                    }
                    else
                    {
                        redirect('login/login');
                    }

            ?>
        </section>
        
        <footer style="z-index: 4013;">
            <div class="footer-padding">
                <div class="row footer-menu">
                    <div class="col-md-4 hidden-xs">
                        <h3 class="title">Tentang Kami</h3>
                        <p align="justify" style="font-size:10px">Badan Pengatur Jalan Tol (BPJT) adalah badan yang berwenang untuk melaksanakan sebagian penyelenggaraan jalan tol meliputi pengaturan, pengusahaan dan pengawasan Badan Usaha Jalan Tol.</p>
                       
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <h3 class="title">Syarat dan Ketentuan</h3>
                        <p align="justify" style="font-size:10px">Segala informasi dan materi yang terdapat dalam situs dan halaman yang ada didalamnya, termasuk persyaratan, ketentuan, dan deskripsi yang ditampilkan, dapat berubah. BPJT tidak bertanggung jawab atas materi yang ditampilkan ataupun yang dibuat oleh situs web lain namun terhubung dengan situs BPJT.  Adanya resiko dari akses dan penggunaan situs-situs lain tersebut merupakan risiko daripada para pengunjung situs.</p>
                    </div>
                  
                    <div class="clearfix-xs"></div>
                    <div class="col-md-4">
                        <h3 class="title">Contact</h3>
                        <strong style="font-size:10px">Jl. Pattimura 20</strong> <br /> <span style="font-size:10px">Kebayoran Baru Jakarta Selatan 12110</span><br />
                        <ul class="contact-info" style="font-size:10px">
                            <li><span class="glyphicon glyphicon-envelope"></span> bpjt_teknik@yahoo.com</li>
                            <li><span class="glyphicon glyphicon-phone-alt"></span>(021) 7258063 </li>
                            <!-- <li><span class="glyphicon glyphicon-phone"></span> 0812 1235 2335</li> -->
                        </ul>
                        <ul class="social" >
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="copyright">
                    Copyright &copy; 2017 Badan Pengatur Jalan Tol (BPJT)
                     <!-- Copyright &copy; 2017 Badan Pengatur Jalan Tol (BPJT) Jl. Pattimura 20, Kebayoran Baru Jakarta Selatan 12110 - (021) 7258063 -->
                </div>
            </div>
        </footer>
    </div>
    <button onclick="topFunction()" id="top-btn" title="Go to top"></button>
    

   
    <style type="text/css">
  .respon{
      width: 70%;
      margin-left: auto;
      margin-right: auto;
     
}


</style>

    <div class="modal animated pulse" id="modalForm" role="dialog" style="z-index: 1200; margin-top: 100px">
        <div class="modal-dialog table-responsive respon">
            <div class="modal-content ">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Tutup</span>
                    </button>
                    <h4 class="modal-title" id="labelModalKu">Detail Ruas</h4>
                </div>
                <div class="modal-body" id="modalruas"></div>
            </div>
        </div>
    </div>
    
    


    <script type="text/javascript">
        $(document).ready(function() {
    $(document).find("#btn-print").on("click", function() {
        $("#btn-print>span").text("Loading....");
        html2canvas($("#print-area"), {
            onrendered: function(canvas) {
                canvas.toBlob(function(blob) {
                    saveAs(blob, "Dashboard.png");
                });
                setTimeout(
                    function() {
                        $("#btn-print>span").text("Print This Page");
                    }, 2000
                );
                alert("Download dashboard berhasil");
            }
        });
    });



    $(document).find("#btn-prints1").on("click", function() {
        $("#btn-prints1>span").text("Loading....");
        html2canvas($("#print-areas1"), {
            onrendered: function(canvas) {
                canvas.toBlob(function(blob) {
                    saveAs(blob, "Dashboard.png");
                });
                setTimeout(
                    function() {
                        $("#btn-prints1>span").text("Print This Page");
                    }, 2000
                );
                alert("Download dashboard berhasil");
            }
        });
    });

    $(document).find("#btn-prints3").on("click", function() {
        $("#btn-prints3>span").text("Loading....");
        html2canvas($("#print-areas3"), {
            onrendered: function(canvas) {
                canvas.toBlob(function(blob) {
                    saveAs(blob, "Dashboard.png");
                });
                setTimeout(
                    function() {
                        $("#btn-prints3>span").text("Print This Page");
                    }, 2000
                );
                alert("Download dashboard berhasil");
            }
        });
    });

      $(document).find("#btn-prints2").on("click", function() {
        $("#btn-prints2>span").text("Loading....");
        html2canvas($("#print-areas2"), {
            onrendered: function(canvas) {
                canvas.toBlob(function(blob) {
                    saveAs(blob, "Dashboard.png");
                });
                setTimeout(
                    function() {
                        $("#btn-prints2>span").text("Print This Page");
                    }, 2000
                );
                alert("Download dashboard berhasil");
            }
        });
    });

       $(document).find("#btn-prints4").on("click", function() {
        $("#btn-prints4>span").text("Loading....");
        html2canvas($("#print-areas7"), {
            onrendered: function(canvas) {
                canvas.toBlob(function(blob) {
                    saveAs(blob, "Dashboard.png");
                });
                setTimeout(
                    function() {
                        $("#btn-prints4>span").text("Print This Page");
                    }, 2000
                );
                alert("Download dashboard berhasil");
            }
        });
    });



    // $(document).find("#btn-print_aspek").on("click", function() {
    //     $("#btn-print_aspek>span").text("Loading....");
    //     html2canvas($("#print-area_aspek"), {
    //         onrendered: function(canvas) {
    //             canvas.toBlob(function(blob) {
    //                 saveAs(blob, "Aspek Teknis.png");
    //             });
    //             setTimeout(
    //                 function() {
    //                     $("#btn-print_aspek>span").text("Print This Page");
    //                 }, 2000
    //             );
    //             alert("Download dashboard berhasil");
    //         }
    //     });
    // }); 

    //  $(document).find("#btn-print_konstruksi").on("click", function() {
    //    alert('tes'); 
    //     $("#btn-print_kontruksi>span").text("Loading123....");
    //     html2canvas($("#print-area_kontruksi"), {
    //         onrendered: function(canvas) {
    //             canvas.toBlob(function(blob) {
    //                 saveAs(blob, "Kontruksi.png");
    //             });
    //             setTimeout(
    //                 function() {
    //                     $("#btn-print_kontruksi>span").text("Print This Page");
    //                 }, 2000
    //             );
    //             alert("Download Kontruksi berhasil");
    //         }
    //     });
    // });    

    //  $(document).find("#btn-print_lahan").on("click", function() {
    //     $("#btn-print_lahan>span").text("Loading....");
    //     html2canvas($("#print-area_lahan"), {
    //         onrendered: function(canvas) {
    //             canvas.toBlob(function(blob) {
    //                 saveAs(blob, "Lahan.png");
    //             });
    //             setTimeout(
    //                 function() {
    //                     $("#btn-print_lahan>span").text("Print This Page");
    //                 }, 2000
    //             );
    //             alert("Download Lahan berhasil");
    //         }
    //     });
    // }); 

    // $(document).find("#btn-print_spp").on("click", function() {
    //     $("#btn-print_spp>span").text("Loading....");
    //     html2canvas($("#print-area_lahan"), {
    //         onrendered: function(canvas) {
    //             canvas.toBlob(function(blob) {
    //                 saveAs(blob, "Spp.png");
    //             });
    //             setTimeout(
    //                 function() {
    //                     $("#btn-print_spp>span").text("Print This Page");
    //                 }, 2000
    //             );
    //             alert("Download Spp berhasil");
    //         }
    //     });
    // });

    // $(document).find("#btn-print_drone").on("click", function() {
    //     $("#btn-print_kontruksi>span").text("Loading....");
    //     html2canvas($("#print-area_spp"), {
    //         onrendered: function(canvas) {
    //             canvas.toBlob(function(blob) {
    //                 saveAs(blob, "Spp.png");
    //             });
    //             setTimeout(
    //                 function() {
    //                     $("#btn-print_kontruksi>span").text("Print This Page");
    //                 }, 2000
    //             );
    //             alert("Download Spp berhasil");
    //         }
    //     });
    // }); 

    // $(document).find("#btn-print_subkon").on("click", function() {
    //     $("#btn-print_kontruksi>span").text("Loading....");
    //     html2canvas($("#print-area_drone"), {
    //         onrendered: function(canvas) {
    //             canvas.toBlob(function(blob) {
    //                 saveAs(blob, "Gallery/Drone.png");
    //             });
    //             setTimeout(
    //                 function() {
    //                     $("#btn-print_kontruksi>span").text("Print This Page");
    //                 }, 2000
    //             );
    //             alert("Download Gallery/Drone berhasil");
    //         }
    //     });
    // }); 

    // $(document).find("#btn-print_kontruksi").on("click", function() {
    //     $("#btn-print_kontruksi>span").text("Loading....");
    //     html2canvas($("#print-area_subkon"), {
    //         onrendered: function(canvas) {
    //             canvas.toBlob(function(blob) {
    //                 saveAs(blob, "Subkon.png");
    //             });
    //             setTimeout(
    //                 function() {
    //                     $("#btn-print_kontruksi>span").text("Print This Page");
    //                 }, 2000
    //             );
    //             alert("Download Subkon berhasil");
    //         }
    //     });
    // });    
});
    </script>
</body>

</html>