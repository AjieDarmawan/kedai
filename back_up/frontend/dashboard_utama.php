<!DOCTYPE HTML>
<html>	
<head>
<title>Kedai Seribu Bukit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('assets/gretong/css/bootstrap.min.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/gretong/css/style.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/gretong/css/font-awesome.css')?>" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url('assets/gretong/css/icon-font.min.css');?>" type='text/css' />
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.css');?>"/>

<script src="<?php echo base_url('assets/gretong/js/jquery-1.10.2.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js');?>"></script>
<script src="<?php echo base_url('assets/numeral/min/numeral.min.js')?>"></script>
<script src="<?php echo base_url('assets/gretong/js/jquery.nicescroll.js');?>"></script>
<script src="<?php echo base_url('assets/gretong/js/scripts.js');?>"></script>
<script src="<?php echo base_url('assets/gretong/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/gretong/js/jquery.flot.js');?>"></script>
<script src="<?php echo base_url('assets/gretong/js/jquery.fn.gantt.js');?>"></script>
<script src="<?php echo base_url('assets/gretong/js/menu_jquery.js')?>"></script>




</head> 
<body>
   <div class="page-container sidebar-collapsed">
	   	<!-- content-inner-->
		<div class="left-content">
		   	<div class="inner-content">
				<div class="header-section">
					<div class="top_bg">
						<div class="header_top">
							<div class="top_right">
								<ul>
									<li><a href="contact.html">help</a></li>|
									<li><a href="contact.html">Contact</a></li>|
									<li><a href="checkout.html">Delivery information</a></li>| 
									<li><a href="<?php echo base_url('logout');?>">Logout</a></li>
								</ul>
							</div>
							<div class="top_left">
								<h2><span></span> Call us : 032 2352 782</h2>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>

				
						<!-- //header-ends -->

					<?php 
						$cek=$this->session->userdata('logged_in');

	                    if(!empty($cek)){
	                        echo $contents;

	                    }else{
	                        redirect('login');
	                    }

					?>

					<?php //echo $contents; ?>
			</div>
		</div>
	
		<div class="sidebar-menu">
			<header class="logo1">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
			</header>
			<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
				<div class="menu">
					<ul id="menu" >
						<!-- <li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Home</span></a></li> -->
						<li id="menu-academico" >
							<a href="#"><i class="fa fa-shopping-cart"></i> <span> Transaksi</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						   	<ul id="menu-academico-sub" >
								<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url('app')?>">Member</a></li>
								<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url('app/nonmember')?>">Non Member</a></li>
						  	</ul>
						</li>
						<li><a href="<?php echo base_url('app/topup_saldo')?>"><i class="fa fa-credit-card"></i> <span>Topup Saldo</span></a></li>
						<li id="menu-academico">
							<a href="#"><i class="fa fa-table"></i> <span> Laporan</span> <span class="fa fa-angle-right" style="float: right"></span></a>
							<ul id="menu-academico-sub" >
								<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url('laporan/laporan_transaksi_kasir');?>">Laporan Transaksi Penjualan</a></li>
								<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url('laporan/laporan_mutasi_kasir');?>"">Laporan Mutasi</a></li>
							</ul>
						</li>
						<li id="menu-academico" >
							<a href="#"><i class="fa fa-wrench"></i> <span> Setting</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						   	<ul id="menu-academico-sub" >
								<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url('member')?>">Tambah Member</a></li>
								<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url('user/setting_akun/'.$this->session->userdata('id_user'))?>">Pengaturan Akun</a></li>
						  	</ul>
						</li>

			  		</ul>
				</div>
		</div>
		<div class="clearfix"></div>	
	</div>
<script>
	var toggle = true;						
	$(".sidebar-icon").click(function() {                
		if (toggle){
			$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
			$("#menu span").css({"position":"absolute"});
		}else{
			$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
			setTimeout(function() {
				$("#menu span").css({"position":"relative"});
			}, 400);
		}
		toggle = !toggle;
	});
</script>
<!--js -->

</body>
</html>