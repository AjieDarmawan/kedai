<div class="header_bg">
	<div class="header">
		<div class="head-t">
			<div class="logo">
				<!-- Kedai Safwah -->
				<a href="index.html">
					<img src="<?php echo base_url('assets/gretong/')?>images/logo.jpeg" class="img-responsive" alt="" style="width: 200px">
				</a>
			</div>
			<div class="header_right">
				<div class="rgt-bottom">
					<div class="log">
						<div class="login">
							<div id="loginContainer"><a id="loginButton" class=""><!-- <span>Login</span> --></a>
								<div id="loginBox" style="display: none;">                
									<form id="loginForm">
											<fieldset id="body">
												<fieldset>
													  <label for="email">Email Address</label>
													  <input type="text" name="email" id="email">
												</fieldset>
												<fieldset>
														<label for="password">Password</label>
														<input type="password" name="password" id="password">
												 </fieldset>
												<input type="submit" id="login" value="Sign in">
												<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
											</fieldset>
										<span><a href="#">Forgot your password?</a></span>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="reg">
						<!-- <a href="register.html">REGISTER</a> -->
					</div>
					<div class="cart box_1">
						<a href="checkout.html">
							<!-- <h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="<?php echo base_url('assets/gretong/')?>images/bag.png" alt=""></h3> -->
						</a>	
						<p><a href="javascript:;" class="simpleCart_empty">&nbsp;&nbsp;&nbsp;</a></p>
						<div class="clearfix"> </div>
					</div>
					<div class="create_btn">
						<!-- <a href="checkout.html">CHECKOUT</a> -->
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="search">
					<form action="" method="POST">
						<input type="text" value="" placeholder="search..." name="search">
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<!--content-->
<div class="content">
	<div class="col-md-3 skil">
		<div class="continue">Detail Pembelian</div>
		<!-- <div class="col-md-12" style="margin-bottom: 1em">
			<div class="radio-inline"><label><input type="radio" name="status" id="member"> Member</label></div>
			<div class="radio-inline"><label><input type="radio" name="status" id="nonmember"> Non Member</label></div>
		</div> -->
		<form method="post" id="transaksi">
			<div class="col-md-12" style="margin-bottom: 1em">
				<!-- <input type="text" class="form-control" name="rfid_card" placeholder="Barcode Scanner" style="" id="barcode" onkeydown="getmember(this.value)"> -->
				<input type="text" class="form-control" name="rfid_card" placeholder="Barcode Scanner" style="" id="barcode" onkeydown="getmember(this.value)">
			</div>
			<div class="clearfix"></div>
			<div class="price-details">
				
					<table class="table table-hover table-responsive" style="font-size: 12px;">
					    <thead>
							<tr>
								<th style="width:10px"></th>
								<th>Barang</th>
								<th>Qty</th>
								<th>Price</th>
							</tr>
					    </thead>
					    <tbody id="content-table">
							   
					     
					    </tbody>
					    <tfoot style="font-size: 15px; font-weight: bold;" id="footer-table">
							<tr>
								<td colspan='2' class='text-right' style='font-size: 15px'>Total</td>
								<td align='center' id='total-qty'><input type="hidden" name="itotalisi" class="itotalisi" value="0"></td>
								<td id='total-harga'>Rp. </td>
							</tr>
					    </tfoot>
					 </table>
				
					<div style="background: #f0f0f0">
						<h3>Pembayaran</h3>
						<span>Total</span>
						<span class="total1">Rp. 0</span>
						<span>Discount</span>
						<span class="diskon">---</span>
						<span>Discount Amount</span>
						<span class="diskonamount">---</span>
						<!-- 
						<span>&nbsp;</span>
						<span>&nbsp;</span> -->
						
						<!-- <span>&nbsp;</span>
						<span>&nbsp;</span> -->
						<!-- <span>Delivery Charges</span>
						<span class="total1">150.00</span> -->
						<div class="clearfix"></div>				 
					</div>
					<table>
						<tr>
							<td><h4>GRANT TOTAL</h4></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td style="font-size: 1.5em"><span id="granttotal">Rp. 0</span></td>
						</tr>
						<tr>
							<td><label>Type Pembayaran</label></td>
							<td></td>
							<td><input type="checkbox" name="type_pembayaran" value="type" id="type_pembayaran" onclick="myFunction()"> Cash</td>
						<tr>
							<!-- <span class="bayar">Bayar</span>
						<span class="bayar1"><input type="text" id="ibayar" name="bayar" class="form-input"></span> -->

							<td><h4>Bayar</h4></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td class="bayar1" ><input type="text" id="ibayar" name="bayar" class="form-input"  readonly="readonly"></td>
						</tr>
						<tr>
							<!-- <span class="kembali">Kembali</span>
						<span class="kembali1"><input type="text" id="ikembali" name="kembali" readonly="readonly"></span> -->

							<td><h4>Kembali</h4></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td class="kembali1" ><input type="text" id="ikembali" name="kembali" readonly="readonly"></td>
						</tr>
					</table>
					<div class="clearfix"> </div>
					<!-- <ul class="total_price">
						<li class="last_price"> <h4>GRANT TOTAL</h4></li>	
						<li style="font-size: 1.5em"><span id="granttotal">Rp. 0</span></li>
						<div class="clearfix"> </div>
					</ul> -->
			</div>

			<div class="col-md-6 text-center" style="margin-top: 2em">
		 		<button type="button" class="btn btn-danger col-md-12" id="batal">Batal</button>
		 	</div>
		 	<div class="col-md-6 text-center" style="margin-top: 2em">
		 		<button type="button" class="btn btn-success col-md-12" id="bayar">Bayar</button>
		 	</div>
		 	<!-- <div class="col-md-6 text-center" style="margin-top: 2em">
		 		<button type="button" class="btn btn-success col-md-12" id="test" onclick="cetak_struk('0009581598','INV/20180611/9581598/015937')">Test Print</button>
		 	</div> -->
	 	</form>
		
	 	
	 	<div class="clearfix"></div>
	</div>

	<div class="col-md-8 mid-content-top">
		<div class="check">	 
			
		 	<div class="col-md-12 cart-items">
				<div id="tabs" class="tabs">
					<!-- <div class="graph"> -->
						<nav>
							<ul>
								<li class="tab-current"><a href="#section-1" class="icon-shop"><span>Semua</span></a></li>
								<li><a href="#section-2" class="icon-cup"><span>Makanan Utama</span></a></li>
								<li><a href="#section-3" class="icon-food"><span>Sarapan</span></a></li>
								<li><a href="#section-4" class="icon-food"><span>Minuman Hangat Sehat</span></a></li>
								<li><a href="#section-5" class="icon-food"><span>Jus Sehat</span></a></li>
							</ul>
						</nav>
						<div class="content tab">
							<section id="section-1" class="content-current">
								<div class="grids_of_4">
								<?php foreach($semua as $b){?>
									
										<div class="grid1_of_4">
											<div class="content_box">
												<a href="details.html">

							
							<?php
                                $i = base_url('file_uploads/makanan/'.$b->gambar.'');
                            ?>
										   	   		<img src="<?php echo $i;?>" class="img-responsive" alt="" style="width: 250px; height: 180px">
										   	   	</a>
											    <h4 style="height:20px !important"><a href="details.html"><?php echo $b->nama_produk;?></a></h4>
											    <!--  <p>It is a long established fact that</p> -->
												<div class="grid_1 simpleCart_shelfItem">
													<div class="item_add"><span class="item_price"><h6>Rp. <?php echo number_format($b->harga_jual);?></h6></span></div>
													<div class="item_add"><span class="item_price"><button id="<?php echo $b->kode_produk;?>" onclick="hitung(this.id, '<?php echo $b->nama_produk;?>','<?php echo $b->harga_jual;?>','<?php echo $b->id_produk;?>')"><i class="fa fa-shopping-cart"></i> Beli</button></span></div>
													<input type="hidden" id="<?php echo $b->kode_produk;?>count" value="0" class="kode_produkhapus"/>
												 </div>
										   	</div>
										</div>
									
								<?php } ?>
								</div>

							</section>
								
							<section id="section-2">
								<div class="grids_of_4">
								<?php foreach($mu as $m){?>
									
										<div class="grid1_of_4">
											<div class="content_box">
												<a href="details.html">
										   	   		<img src="<?php echo base_url($m->gambar)?>" class="img-responsive" alt="" style="width: 250px; height: 180px">
										   	   	</a>
											    <h4 style="margin-bottom:20px !important"><a href="details.html"><?php echo $m->nama_produk;?></a></h4>
											    <!--  <p>It is a long established fact that</p> -->
												<div class="grid_1 simpleCart_shelfItem">
													<div class="item_add"><span class="item_price"><h6>Rp. <?php echo number_format($m->harga_jual);?></h6></span></div>
													<div class="item_add"><span class="item_price"><button id="<?php echo $m->kode_produk;?>" onclick="hitung(this.id, '<?php echo $m->nama_produk;?>','<?php echo $m->harga_jual;?>','<?php echo $m->id_produk;?>')"><i class="fa fa-shopping-cart"></i> Beli</button></span></div>
													<input type="hidden" id="<?php echo $m->kode_produk;?>count" value="0" class="kode_produkhapus"/>
												 </div>
										   	</div>
										</div>
									
								<?php } ?>
								</div>
							</section>

							<section id="section-3">
								<div class="grids_of_4">
								<?php foreach($srp as $s){?>
									
										<div class="grid1_of_4">
											<div class="content_box">
												<a href="details.html">
										   	   		<img src="<?php echo base_url($s->gambar)?>" class="img-responsive" alt="" style="width: 250px; height: 180px">
										   	   	</a>
											    <h4 style="height:20px !important"><a href="details.html"><?php echo $s->nama_produk;?></a></h4>
											    <!--  <p>It is a long established fact that</p> -->
												<div class="grid_1 simpleCart_shelfItem">
													<div class="item_add"><span class="item_price"><h6>Rp. <?php echo number_format($s->harga_jual);?></h6></span></div>
													<div class="item_add"><span class="item_price"><button id="<?php echo $b->kode_produk;?>" onclick="hitung(this.id, '<?php echo $s->nama_produk;?>','<?php echo $b->harga_jual;?>','<?php echo $s->id_produk;?>')"><i class="fa fa-shopping-cart"></i> Beli</button></span></div>
													<input type="hidden" id="<?php echo $s->kode_produk;?>count" value="0" class="kode_produkhapus"/>
												 </div>
										   	</div>
										</div>
									
								<?php } ?>
								</div>
							</section>

							<section id="section-4">
								<div class="grids_of_4">
								<?php foreach($mhs as $mh){?>
									
										<div class="grid1_of_4">
											<div class="content_box">
												<a href="details.html">
										   	   		<img src="<?php echo base_url($mh->gambar)?>" class="img-responsive" alt="" style="width: 250px; height: 180px">
										   	   	</a>
											    <h4 style="height:20px !important"><a href="details.html"><?php echo $mh->nama_produk;?></a></h4>
											    <!--  <p>It is a long established fact that</p> -->
												<div class="grid_1 simpleCart_shelfItem">
													<div class="item_add"><span class="item_price"><h6>Rp. <?php echo number_format($mh->harga_jual);?></h6></span></div>
													<div class="item_add"><span class="item_price"><button id="<?php echo $mh->kode_produk;?>" onclick="hitung(this.id, '<?php echo $mh->nama_produk;?>','<?php echo $mh->harga_jual;?>','<?php echo $mh->id_produk;?>')"><i class="fa fa-shopping-cart"></i> Beli</button></span></div>
													<input type="hidden" id="<?php echo $mh->kode_produk;?>count" value="0" class="kode_produkhapus"/>
												 </div>
										   	</div>
										</div>
									
								<?php } ?>
								</div>
							</section>

							<section id="section-5">
								<div class="grids_of_4">
								<?php foreach($jus_sehat as $jus){?>
									
										<div class="grid1_of_4">
											<div class="content_box">
												<a href="details.html">
										   	   		<img src="<?php echo base_url($jus->gambar)?>" class="img-responsive" alt="" style="width: 250px; height: 180px">
										   	   	</a>
											    <h4 style="height:20px !important"><a href="details.html"><?php echo $jus->nama_produk;?></a></h4>
											    <!--  <p>It is a long established fact that</p> -->
												<div class="grid_1 simpleCart_shelfItem">
													<div class="item_add"><span class="item_price"><h6>Rp. <?php echo number_format($jus->harga_jual);?></h6></span></div>
													<div class="item_add"><span class="item_price"><button id="<?php echo $jus->kode_produk;?>" onclick="hitung(this.id, '<?php echo $jus->nama_produk;?>','<?php echo $jus->harga_jual;?>','<?php echo $jus->id_produk;?>')"><i class="fa fa-shopping-cart"></i> Beli</button></span></div>
													<input type="hidden" id="<?php echo $jus->kode_produk;?>count" value="0" class="kode_produkhapus"/>
												 </div>
										   	</div>
										</div>
									
								<?php } ?>
								</div>
							</section>

						</div><!-- /content -->
					<!-- </div> -->
				</div>
				<script src="<?php echo base_url('assets/gretong/js/cbpFWTabs.js');?>"></script>
				<script>
					new CBPFWTabs( document.getElementById( 'tabs' ) );
				</script>
				</div>
			

			<div class="clearfix"> </div>
	 	</div>

			<div class="clearfix"></div>
	</div>


</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cetak Struk</h4>
        </div>
        <div class="modal-body" id="cetak_struk">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!--content-->

<script type="text/javascript">
	$("document").ready(function(){

		$("#ibayar").keyup(function(){
            /*if ($("#grandTotal").html().replace(/,/g, '')*1>0) {
                $("#kembalian").html(numeral($("#txtBayar").val().replace(/,/g, '')*1-$("#grandTotal").html().replace(/,/g, '')*1).format('0,0'));
            }*/

            var split = $("#granttotal").html().split(" ");
            var gt = split[1];
            $("#ibayar").val(numeral($("#ibayar").val()).format('0,0'));
            $("#ikembali").val(numeral($("#ibayar").val().replace(/,/g, '')*1 - gt.replace(/,/g, '')*1).format('0,0'));
        });

        $("#bayar").click(function(){
        	if($("#barcode").val()!=""){
	      		$.post('<?php echo base_url('app/transaksi');?>',$("#transaksi").serialize(),
					function(response, status){
		                if(status=="success"){
		                    //alert(response);
		              		if(response=="    Saldo User Tidak Mencukupi, Silahkan Melakukan Topup Saldo!"){
		              			alert(response);
		              		}else{
		              			var split = response.split("-");
		              			alert(split[0]);
		              			cetak_struk($("#barcode").val(), split[1]);

		              			//reset();
		              		}   
		                }else{

		                }
		            } 
				);
	        }else{
	        	alert("Scan Kartu RFID!");
	        	$("#barcode").focus();
	        }
      		//location.reload();
        });

        $("#batal").click(function(){
        	var txt;
		    var r = confirm("Yakin ingin membatalkan transaksi?");
		    if (r == true) {
		        reset();
		        alert("Transaksi Dibatalkan");
		    } else {
		        
		    }
			        	
        });

		/*$('#member').click(function() {
	 		$("#barcode").show();
	 		$(".bayar").hide();
	 		$(".bayar1").hide();
	 		$(".kembali").hide();
	 		$(".kembali1").hide();
		});
		$('#nonmember').click(function() {
	 		$("#barcode").hide();
	 		$(".bayar").show();
	 		$(".bayar1").show();
	 		$(".kembali").show();
	 		$(".kembali1").show();
		});*/
	});

	var simpantemp = new Array();

	function myFunction() {
	    var checkBox = document.getElementById("type_pembayaran");
	   
	    if (checkBox.checked == true){
	       // alert();
			$("#ibayar").attr("readonly", false);
			$(".diskon").html("---");
			$(".diskonamount").html("Rp. 0 <input type='hidden' value='0' name='diskonamount' class='idiskon_amount'>");
			refreshgranttotal();
	    } else {
	    	$("#ibayar").attr("readonly", true); 
	    }
	}

	
	function cetak_struk(rfid_card, kode_transaksi){
		//alert();
		$.post('<?php echo base_url("app/cetak_struk/");?>',
			{
				rfid_card : rfid_card,
				kode_transaksi : kode_transaksi
			},
			function(response, status){
                if(status=="success"){
                	//alert("Asdasd");
                    alert(response);
              		$("#cetak_struk").html(response);    
                }else{

                }
            } 
		);
		$('#myModal').modal('show');
	}

	function cetak_ulang_struk(rfid_card, kode_transaksi){
		//alert();
		$.post('<?php echo base_url("app/cetak_ulang_struk/");?>',
			{
				rfid_card : rfid_card,
				kode_transaksi : kode_transaksi
			},
			function(response, status){
                if(status=="success"){
                    //alert(response);    
                }else{

                }
            } 
		);
		$('#myModal').modal('show');
	}
	

	function getmember(rfid_number){
		console.log(rfid_number.length)
		if(rfid_number.length==10){
			$.post('<?php echo base_url("app/getmember/");?>'+rfid_number,
				{},
				function(response, status){
	                if(status=="success"){
	                    //alert(response);
	                    if(response=="Data RFID Tidak Ditemukan"){
	                    	$(".diskon").html("---");
	                    	alert(response);
	                    }else{
		                    var split = response.split("=");
		                    //1-faizal-jakarta-laki-laki-Silver-5-0008924558-100000
		                    var diskon = split[5];
		                    
		                    //console.log("total harga "+$("#itotalharga").val());
		                    //console.log("diskon "+split[5]);
		                    if($("#barcode").val()=="" || $("#barcode").val()==null){
		                    	$(".diskon").html("---");
		                    }else{
		                    	$(".diskon").html(diskon+"%"+"<input type='hidden' value='"+diskon+"' name='diskon' class='idiskon'>");
		                    }
		                }
	                    totalfooter();
	                }else{

	                }
	            } 

			)
		}

	}

	/*function total(){
		console.log("masuk kuy");
		var a = 0;
		var b = 0;

		var split = $(".diskon").html().split("%");
		var diskon = split[0];

		$('td .iqty').each(function(){
			//alert($(this).val());
			a+=parseInt($(this).val());
			//console.log($(this).val());
			 
		});
		$('td .iharga_kali').each(function(){
			//alert($(this).val());
			b+=parseInt($(this).val());
			//console.log($(this).val());
			 
		});
		$('#total-qty').html(a);
		$('.itotalisi').val(a);

		//alert("duitnya "+b);

		//$('#total-harga').html("Rp. "+number_format(b)+"<input type='hidden' name='total-harga' id='itotalharga' value='"+b+"'");
		$('#total-harga').html("Rp. "+number_format(b)+"<input type='hidden' value='"+b+"' name='itotalharga' id='itotalharga'>");
		$(".total1").html("Rp. "+number_format(b));

		if($(".diskon").html()==="---"){
			$(".diskonamount").html("---");
		}else{
			$(".diskonamount").html("Rp. "+number_format($("#itotalharga").val()*diskon/100));
		}
		

		refreshgranttotal();
	}*/

	function refreshgranttotal(){
		//alert("refreshgranttotal");
		/*var split = $(".diskon").html().split("%");
		var diskon = split[0];*/
		//console.log("diskon "+diskon);
		var diskon = $(".idiskon").val();
		var totalharga = $("#itotalharga").val();
		//console.log(totalharga);

		var diskonamount = totalharga * diskon / 100;
		var granttotal = totalharga - diskonamount;
		//console.log(granttotal);

		if($('.diskon').html()=="---"){
			$("#granttotal").html("Rp. "+number_format(totalharga));
		}else{
			$("#granttotal").html("Rp. "+number_format(granttotal));
		}
		
	}



	function hapus(id, idcount){
		//alert(id);
		//alert(idcount);
		$("#" + id).remove();
		$(idcount).val(0);
		totalfooter();
	}

	function reset(){

		$(".brgisi").remove();
		$(".kode_produkhapus").val(0);
		$("#transaksi")[0].reset();
		$("#total-qty").html('<input type="hidden" name="itotalisi" class="itotalisi" value="0">');
		//alert($("#total-harga").html());
		$('#total-harga').html("Rp. 0 <input type='hidden' value='0' name='itotalharga' id='itotalharga'>");
		//alert($("#total-harga").html());
		$(".total1").html('Rp. 0');
		$(".diskon").html('---');
		//$(".diskonamount").html('---');
		$(".diskonamount").html("Rp. 0 <input type='hidden' value='0' name='diskonamount' class='idiskon_amount'>");
		$("#granttotal").html('Rp. 0');
		$("#ibayar").val('');
		$("#ibayar").attr("readonly", true);
		$("#ikembali").val('');

	}

	function hitung(kode_produk, nama_produk, harga_asli, id_produk){

		//alert(id);
		var jml = parseInt($("#" + kode_produk + "count").val());
		var ttlqty = parseInt($(".itotalisi").val());
		var tot = jml + 1;


		//console.log("total : "+tot);
		
		$("#" + kode_produk + "count").val(tot);
		var harga_kali = parseInt($("#" + kode_produk + "count").val()) * harga_asli;
		//alert(harga_kali);
		//alert($("#" + id + "count").val());

		var kodecount = "#" + kode_produk + "count";

		if($("#" + kode_produk + "count").val()==1){
			$("#content-table").append(
				"<tr id='" + kode_produk + "body' class='brgisi'>"+
					"<td><a onclick=hapus(this.id,'"+kodecount+"')  id='"+ kode_produk +"body'><i class='fa fa-trash-o' style='font-size:15px'></i></a></td>"+
					"<td><input type='hidden' name='id_produk[]' value='"+id_produk+"'>"+nama_produk+"</td>"+
					"<td align='center'><input type='text' value='"+tot+"' size='1' name='qty[]' class='iqty' onkeyup=editqty(this.value,'"+harga_asli+"','tdharga"+kode_produk+"') ></td>"+
					"<td id='tdharga"+kode_produk+"'> Rp. "+number_format(harga_asli)+" <input type='hidden' value='"+harga_asli+"' name='harga_asli[]' class='iharga_asli'><input type='hidden' value='"+harga_kali+"' name='harga_kali[]' class='iharga_kali'></td>"+
				"</tr>"
			);

		}else{

			$("#" + kode_produk + "body").html(
				"<td><a onclick=hapus(this.id,'"+kodecount+"')  id='"+ kode_produk +"body'><i class='fa fa-trash-o' style='font-size:15px'></i></a></td>"+
				"<td><input type='hidden' name='id_produk[]' value='"+id_produk+"'>"+nama_produk+"</td>"+
				"<td align='center'><input type='text' value='"+tot+"' size='1' name='qty[]' class='iqty' onkeyup=editqty(this.value,'"+harga_asli+"','tdharga"+kode_produk+"')></td>"+
				"<td id='tdharga"+kode_produk+"'> Rp. "+number_format(harga_kali)+" <input type='hidden' value='"+harga_asli+"' name='harga_asli[]' class='iharga_asli'><input type='hidden' value='"+harga_kali+"' name='harga_kali[]' class='iharga_kali'></td>"
			);
		}

		$(".itotalisi").val(tot);

		
		totalfooter();

		//alert($('.iqty').val());

		//$("#" + id + "stat").html("diklik: " + tot + " kali");

	}

	function number_format(nStr){
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		return x1 + x2;
	}


	function editqty(total, harga, idtd){
		//console.log("editqty");
		//console.log(value);
		//console.log(harga);
		var substr = idtd.substr(7)+"count";
		$("#"+substr).val(total);

		var kali = parseInt(total * harga);
		
		//console.log(kali);
		$("#" + idtd).html("Rp. "+number_format(kali)+" <input type='hidden' value='"+kali+"' name='harga_kali[]' class='iharga_kali'><input type='hidden' value='"+harga+"' name='harga_asli[]' class='iharga_asli'>");
		totalfooter();
		
	}


	function totalfooter(){
		console.log("masuk kuy");
		var a = 0;
		var b = 0;

		/*var split = $(".diskon").html().split("%");
		var diskon = split[0];*/

		var diskon = $(".idiskon").val();

		$('td .iqty').each(function(){
			//alert($(this).val());
			a+=parseInt($(this).val());
			//console.log($(this).val());
			 
		});
		$('td .iharga_kali').each(function(){
			//alert($(this).val());
			b+=parseInt($(this).val());
			//console.log($(this).val());
			 
		});
		$('#total-qty').html(a);
		$('.itotalisi').val(a);

		//alert("duitnya "+b);

		//$('#total-harga').html("Rp. "+number_format(b)+"<input type='hidden' name='total-harga' id='itotalharga' value='"+b+"'");
		$('#total-harga').html("Rp. "+number_format(b)+"<input type='hidden' value='"+b+"' name='itotalharga' id='itotalharga'>");
		$(".total1").html("Rp. "+number_format(b));

		if($(".diskon").html()==="---"){
			$(".diskonamount").html("---");
		}else{
			$(".diskonamount").html("Rp. "+number_format($("#itotalharga").val()*diskon/100)+"<input type='hidden' value='"+$("#itotalharga").val()*diskon/100+"' name='diskonamount' class='idiskon_amount'>");
		}
		

		refreshgranttotal();
	}

	

	
</script>