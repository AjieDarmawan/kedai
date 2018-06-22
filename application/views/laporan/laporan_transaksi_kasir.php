<div class="content">
	<div class="women_main">
		
		<div class="col-md-12 graph-2 second">
			<div class="panel panel-primary two">
				<div class="panel-heading">Laporan Transaksi Penjualan</div>
				<div class="panel-body ont two" id="transaksi">
		                <div class="row">
		                    <div class="col-md-2">
		                        <select name='limit' id='limit' class="form-control col-sm-3 col-md-3 col" onchange='pageLoad(1)'>
		                            <option value='0' >Limit Of Page</option>
		                            <option value='5' >5 rows</option>
		                            <option value='10' >10 rows</option>
		                            <option value='25' >25 rows</option>
		                            <option value='50' >50 rows</option>
		                            <option value='100' >100 rows</option>
		                        </select>
		                    </div>

		                </div><br>
		                <div class="row">
		                	<form method="post" id="search" action="">
		                    	<div class="col-md-2">
		                    		
		                        	<div class="input-group">
		                        		<label>Tanggal Awal</label>

		                        		<?php 
		                        			$split_start = explode(" ", $this->session->userdata('date_start'));
		                        			//echo $split[0];
		                        			if($split_start[0]==date("Y-m-d")){
		                        				$placeholder_start = ''; 
		                        			}else{
		                        				$placeholder_start = $split_start[0]; 
		                        			}
		                        		?>

		                            	<input type="text" name="date_start" id="date_start" class="form-control" placeholder="<?php echo date('Y-m-d');?>" value="<?php echo $placeholder_start;?>">
			                    	</div>
			                    </div>
			                    <div class="col-md-2">
			                    	<div class="input-group">
			                    		<label>Tanggal Akhir</label>
			                    		<?php 
		                        			$split_end = explode(" ", $this->session->userdata('date_end'));
		                        			//echo $split[0];
		                        			if($split_end[0]==date("Y-m-d")){
		                        				$placeholder_end = ''; 
		                        			}else{
		                        				$placeholder_end = $split_end[0]; 
		                        			}
		                        		?>
			                    		<input type="text" name="date_end" id="date_end" class="form-control" placeholder="<?php echo date('Y-m-d');?>" value="<?php echo $placeholder_end;?>">
			                    	</div>
			                    </div>
			                    <div class="col-md-3">
			                    	<div class="input-group">
			                    		<label>RFID Card</label>
			                    		<?php if($this->session->userdata('rfid_card')!=""){
		                        				$placeholder_rfid = $this->session->userdata('rfid_card'); 
		                        			}else{
		                        				$placeholder_rfid = ""; 
		                        			}
		                        		?>
			                    		<input type="text" name="rfid_card" id="rfid" class="form-control" placeholder ="RFID Card" value="<?php echo $placeholder_rfid;?>" style="width: 250px!important">
			                    	</div>
			                    </div>
			                    <div class="col-md-3">
			                    	<div class="input-group">
			                    		<label>Produk</label>
			                    		<?php if($this->session->userdata('produk')!=""){
		                        				$placeholder_produk = $this->session->userdata('produk'); 
		                        			}else{
		                        				$placeholder_produk = ""; 
		                        			}
		                        		?>
			                    		<input type="text" name="produk" id="produk" class="form-control" placeholder="Nama Produk" value="<?php echo $placeholder_produk;?>" style="width: 250px!important">
			                    	</div>
			                    </div>
			                    <div class="col-md-2">
			                    	<label>&nbsp;</label>
			                    	<button type="submit" class="btn btn-success">Cari</button>
			                    	<a href="#" class="btn btn-danger" onclick="reset_form();">Bersihkan</a>
			                    </div>
			                </form>
			            </div>
			            <hr>
			            <div class="row">
		                    <div class="col-md-12">
		                        <br/>
		                        <div id="listTransaksi"></div>
		                    </div>
		                </div>

            		<input type="hidden" id="page_active">
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<script type="text/javascript">

	$(document).ready(function(){
		pageLoad(1);
		$("#date_start").datepicker({
			format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true,
		});
		$("#date_end").datepicker({
			format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true,
        });
        $("#search").bind("keypress", function(e) {
          	if (e.keyCode == 13) {
            	return false;
          	}
       });

        

	});


	function reset_form(){
		//alert();
		window.location.href=window.location.href
	}

	function pageLoad(i){
		//alert();
        /*var limit   = $('#limit').val();*/
        var limit = '';
        if($("#limit").val()>0){
            limit = $("#limit").val();
        }else{
            limit = 10;    
        }
        
        var cari    = $('#cari').val();
        $.ajax({
            url     : 'laporan_transaksi_kasir_data/'+i,
            type    : 'post',
            dataType: 'html',
            /*data    : {limit:limit,cari:cari},*/
            data    : {limit:limit},
            beforeSend : function(){
                
            },
            success : function(result){
                $('#listTransaksi').html(result);
                $("#page_active").val(i);
            }
        })
    }
</script>