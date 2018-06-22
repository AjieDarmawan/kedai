<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I-Cons | <?php echo$this->session->userdata('title');?></title>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/image/favicon.jpg" >
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
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
    <link href="<?php echo base_url('assets/newcss/style.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/newcss/responsive.css');?>">
    <!-- <script src="app.js"></script> -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') ?>"></script>
    <script src="<?php echo base_url();?>loaders/loading.js"></script>
    <script src="<?php echo base_url('assets/js/plugins/chosen/chosen.jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jasny/jasny-bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/select2/select2.full.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/validate/jquery.validate.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/html2canvas/html2canvas.js');?>"></script>
    <script src="<?php echo base_url('assets/js/FileSaver/FileSaver.min.js');?>"></script>
    <!-- Data picker -->
    <script src="<?php echo base_url('assets/js/plugins/datapicker/bootstrap-datepicker.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/dataTables/jquery.dataTables.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.bootstrap.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.responsive.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.tableTools.min.js');?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/js/inspinia.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js');?>"></script>
</head>

<body class="hidden">

    <div class="container">
        <header>
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div id="header-container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                            <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/newimage/logo.png');?>" alt=""></a>
                        </div>
                    </div>



                    <?php
                        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                        if($this->uri->segment(2)==null){
                                $active1 = "active";
                        }else if($this->uri->segment(2)=='TargetJalantol'){
                                 $tj = "active";
                        }else if($this->uri->segment(2)=='analisa_progres'){
                                 $ap = "active";
                        }else if($this->uri->segment(2)=='TargetOperasi'){
                                 $to = "active";
                        }else if($this->uri->segment(2)=='danatalangan'){
                                 $dt = "active";
                        }else if($this->uri->segment(2)=='drone'){
                                 $drone = "active";
                        }else if($this->uri->segment(2)=='gallery'){
                                 $gallery = "active";
                        }else if($this->uri->segment(2)=='Peta'){
                                 $peta = "active";
                        }
                        else{
                             $active1 = " ";
                        }
                    ?>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            
                            <li class="<?php echo $active1; ?>"><a href="<?php echo base_url('app')?>">Dashboard</a></li>
                            <li class="<?php echo $tj; ?>"><a href="<?php echo base_url('app/TargetJalantol')?>">Target Jalan Tol 2015-2019</a></li>
                             <li class="<?php echo $ap; ?>"><a href="<?php echo base_url('app/analisa_progres')?>">Analisa Progres</a></li>
                            <li class="<?php echo $to; ?>"><a href="<?php echo base_url('app/TargetOperasi')?>">Target Operasi</a></li>
                            <li class="<?php echo $dt; ?>"><a href="<?php echo base_url('app/danatalangan')?>">Dana Talangan</a></li>
                             <li class="<?php echo $drone; ?>"><a href="<?php echo base_url('app/drone')?>">Drone</a></li>
                          
                            <li class="<?php echo $gallery; ?>"><a href="<?php echo base_url('app/gallery')?>">Gallery</a></li>
                            <li class="<?php echo $peta; ?>"><a href="<?php echo base_url('app/Peta')?>">Peta</a></li>
                            <li><a href="<?php echo base_url('login/logout')?>">Logout </a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </header>

        <!-- Content -->
        <section id="content">
            <?php
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

        <footer>
            <div class="footer-padding">
                <!-- <div class="row footer-menu">
                    <div class="col-md-4 hidden-xs">
                        <h3 class="title">Tentang Kami</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero facilis consequatur ipsam atque iusto aliquid, laborum sed similique numquam neque odit alias dignissimos assumenda deserunt, ad quod labore rem sint.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero facilis consequatur ipsam atque iusto aliquid, laborum sed similique numquam neque odit alias dignissimos assumenda deserunt, ad quod labore rem sint.</p>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <h3 class="title">Informasi</h3>
                        <ul>
                            <li><a href="#">Nineque Sapien</a></li>
                            <li><a href="#">Ornare Felist</a></li>
                            <li><a href="#">Fusce Sollicitudin</a></li>
                            <li><a href="#">Velit Ateleifend</a></li>
                            <li><a href="#">Laoreet Duiturpis</a></li>
                            <li><a href="#">Pulvinar Justo</a></li>
                            <li><a href="#">Nunca Aliquet</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <h3 class="title">Disclaimer</h3>
                        <ul>
                            <li><a href="#">Nineque Sapien</a></li>
                            <li><a href="#">Ornare Felist</a></li>
                            <li><a href="#">Fusce Sollicitudin</a></li>
                            <li><a href="#">Velit Ateleifend</a></li>
                            <li><a href="#">Laoreet Duiturpis</a></li>
                            <li><a href="#">Pulvinar Justo</a></li>
                            <li><a href="#">Nunca Aliquet</a></li>
                        </ul>
                    </div>
                    <div class="clearfix-xs"></div>
                    <div class="col-md-4">
                        <h3 class="title">Contact</h3>
                        <strong>Gedung Setia Nugraha</strong> <br />Jl. Cimenyan 3 No.84 Cidumay Bandung<br />
                        <ul class="contact-info">
                            <li><span class="glyphicon glyphicon-envelope"></span> info@bptj.com</li>
                            <li><span class="glyphicon glyphicon-phone-alt"></span> 022 752 3625 </li>
                            <li><span class="glyphicon glyphicon-phone"></span> 0812 1235 2335</li>
                        </ul>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- <div class="clearfix"></div> -->

                <div class="copyright">
                    &copy; Copyright BPTJ 2017. All Right Reserved
                </div>
            </div>
        </footer>
    </div>



    <div class="modal animated pulse" id="modalForm" role="dialog" style="z-index: 1200; margin-top: 100px">
        <div class="modal-dialog">
            <div class="modal-content">
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

    <!-- <script src="<?php echo base_url('assets/js/jquery-2.1.1.js') ?>"></script> -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('body').removeClass("hidden");

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
                    }
                });
            });

            var windowEl = $(document);

            function cekBar() {
                element = $(".navbar");
                var insHeight = 0;
                var navOffset = 360;
                var topOffset = '100px';
                var nav = $(".navbar");
                var padding = $(".navbar").find("#header-container");
                if (windowEl.width() <= 768) {
                    if (windowEl.scrollTop() <= parseInt(topOffset)) {
                        element.css({ 'margin-top': 0, 'transition': 'none' });
                        element.removeClass("navbar-fixed-top");
                        padding.addClass("pad-header");
                    } else {
                        element.css({ 'margin-top': 0, 'transition': 'none' });
                        element.addClass("navbar-fixed-top");
                        padding.addClass("pad-header");
                    }
                } else {
                    if (windowEl.scrollTop() <= parseInt(topOffset)) {
                        element.css({ 'margin-top': 0, 'transition': 'none' });
                        element.css('margin-bottom', 0);
                        element.removeClass("navbar-fixed-top");
                        padding.removeClass("pad-header");
                    } else if (windowEl.scrollTop() > parseInt(topOffset) && windowEl.scrollTop() < navOffset) {
                        element.css({ 'margin-top': 0, 'transition': 'none' });
                        element.css('margin-bottom', parseInt(topOffset) + "px");
                        element.addClass("navbar-fixed-top");
                        padding.addClass("pad-header");
                    } else {
                        if (!element.hasClass("navbar-fixed-top")) {
                            element.css({ 'margin-top': 0, 'transition': 'none' });
                            element.css('margin-bottom', parseInt(topOffset) + "px");
                            element.addClass("navbar-fixed-top");
                            padding.addClass("pad-header");
                        }
                        element.css({ 'margin-top': 0, 'transition': 'all .5s ease-in-out' });
                    }
                }
            }
            windowEl.scroll(function() {
                cekBar();
            });
            cekBar();

        });
    </script>

</body>

</html>