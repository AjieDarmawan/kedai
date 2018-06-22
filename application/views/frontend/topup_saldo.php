<div class="content">
	<div class="women_main">
		<h3 class="inner-tittle">Topup Saldo </h3>
		<div class="col-md-6 graph-2">
			<div class="panel panel-primary two">
				<div class="panel-heading">Member Topup</div>
				<div class="panel-body ont two" style="height: 250px">
					<form method="post" id="topup-form">
						<div class="col-md-12" style="margin-bottom: 1em">
							<label for="rfid_member">Kartu RFID</label>
							<input type="text" class="form-control" name="rfid_card" placeholder="Barcode Scanner" style="" id="barcode" onkeyup="getmember(this.value)">
						</div>
						<div class="col-md-12" style="margin-bottom: 1em">
							<label for="rfid_member">Nominal Topup</label>
							<input type="text" class="form-control" name="nominal" placeholder="Nominal Topup" style="" id="nominal">
						</div>
						<div class="col-md-12 text-center" style="margin-top: 2em">
					 		<button type="button" class="btn btn-success col-md-12" id="topup">Topup</button>
					 	</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6 graph-2 second">
			<div class="panel panel-primary two">
				<div class="panel-heading">Detail Member</div>
				<div class="panel-body ont two" id="detail_member" style="height: 250px">
					
				</div>
			</div>
		</div>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<div class="col-md-12 graph-2 second">
			<div class="panel panel-primary two">
				<div class="panel-heading">Mutasi Topup</div>
				<div class="panel-body ont two" id="mutasi_topup">
					
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>


<script>
	$("document").ready(function(){
		$("#nominal").keyup(function(){
            $("#nominal").val(numeral($("#nominal").val()).format('0,0')); 
        });
	
		$("#topup").click(function(){
        	$.ajax({
		        type : "POST",
		        url  : "<?php echo base_url('app/topup_proses');?>",
		        data : $("#topup-form").serialize(),
		        success:function(data){
		        	alert(data);
		        	//$('#myModal').modal('show');
		        	refreshtable($("#topup-form").serialize());
		        	reset();
		        },
		        error: function() {
        			alert('Terjadi Kesalahan');
    			}
      		});
      		//location.reload();
        });

	});

	function reset(){
		$("#topup-form")[0].reset();
	}


	function getmember(rfid_number){
		$.post('<?php echo base_url("app/getmember/");?>'+rfid_number,
			{},
			function(response, status){
                if(status=="success"){
                    //alert(response);
                    if(response=="Data RFID Tidak Ditemukan"){
                    	alert(response);
                    }else{
	                    var split = response.split("=");
	                    //1-faizal-jakarta-laki-laki-Silver-5-0008924558-100000
	                    
	                    $("#detail_member").html(
	                    	"<table class='table table-responsive table-hover' width='100%'>"+
	                    		"<tr>"+
	                    			"<td>Nama</td>"+
	                    			"<td align='center'>&nbsp;:&nbsp;</td>"+
	                    			"<td>"+split[1]+"</td>"+
	                    		"</tr>"+
	                    		"<tr>"+
	                    			"<td>Alamat</td>"+
	                    			"<td align='center'>&nbsp;:&nbsp;</td>"+
	                    			"<td>"+split[2]+"</td>"+
	                    		"</tr>"+
	                    		"<tr>"+
	                    			"<td>Jenis Kelamin</td>"+
	                    			"<td align='center'>&nbsp;:&nbsp;</td>"+
	                    			"<td>"+split[3]+"</td>"+
	                    		"</tr>"+
	                    		"<tr>"+
	                    			"<td>RFID Card</td>"+
	                    			"<td align='center'>&nbsp;:&nbsp;</td>"+
	                    			"<td>"+split[6]+"</td>"+
	                    		"</tr>"+
	                    		"<tr>"+
	                    			"<td>Saldo</td>"+
	                    			"<td align='center'>&nbsp;:&nbsp;</td>"+
	                    			"<td>Rp. "+number_format(split[7])+"</td>"+
	                    		"</tr>"+
	                    	"</table>"
	                    );
	                }

                }else{

                }
            } 

		);
	}

	function refreshtable(data){
		console.log("masuk kuy");
		var split = data.split("&");
		var removechar = split[0].split("=");
		var rfid_number = removechar[1];

		console.log(rfid_number);
		$.post('<?php echo base_url("app/get_last_mutasi/");?>'+rfid_number,
			{},
			function(response, status){
                if(status=="success"){
                	console.log(response);
                    //alert(response);
                    if(response=="Data RFID Tidak Ditemukan"){
                    	alert(response);
                    }else{

                    	//alert(response);
	                    $("#mutasi_topup").html(response);
	                }

                }else{

                }
            } 

		);
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
</script>