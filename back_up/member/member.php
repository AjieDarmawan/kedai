<div class="content">
	<div class="women_main">
		<div class="col-md-12 graph-2 second">
			<div class="panel panel-primary two">
				<div class="panel-heading">Data Member</div>
				<div class="panel-body ont two" id="transaksi">
						<div class="col-lg-12">         
					        <?php
					        
					            if($this->session->flashdata('message_success')){
					                echo"<div class='alert alert-success alert-dismissable'>
					                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>               
					                        <strong><i class='icon-ok'></i>".$this->session->flashdata('message_success')."</strong> .
					                    </div>";
					            }
					            if($this->session->flashdata('message_error')){
					                echo"<div class='alert alert-danger alert-dismissable'>
					                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>               
					                        <strong><i class='icon-ok'></i>".$this->session->flashdata('message_error')."</strong>.
					                    </div>";
					            }
					        ?>
					    </div>
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
		                    <div class="col-md-8"></div>
		                    <div class="col-md-2" style="text-align: right;">
		                    	<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"> Tambah</i></button>
		                    </div>

		                </div><br>
		               <div class="row">
		                	<form method="post" id="search" action="">
		                    	<div class="col-md-3">

		                        	<div class="input-group">
		                        		<label>Nama Member</label>
		                            	<input type="text" name="nama_member" id="nama_member" class="form-control" placeholder="Nama Member" value="<?php echo $this->session->userdata('nama');?>" style="width: 250px">
			                    	</div>
			                    </div>
			                    <div class="col-md-3">
			                    	<div class="input-group">
			                    		<label>RFID Card</label>
			                    		<input type="text" name="rfid_card" id="rfid_card" class="form-control" placeholder="RFID Card" value="<?php echo $this->session->userdata('rfid_card');?>" style="width: 250px">
			                    	</div>
			                    </div>
			                    <div class="col-md-2">
			                    	<div class="input-group">
			                    		<label>Level</label>
			                    		<select class="form-control" name="level" style="width: 160px !important">
			                    			<option value=""></option>
			                    			<?php if($this->session->userdata('level')=="1"){?>
			                    				<option value="1" selected="selected">Silver</option>
			                    			<?php }else{ ?>
			                    				<option value="1">Silver</option>
			                    			<?php } ?>
			                    			<?php if($this->session->userdata('level')=="2"){?>
			                    				<option value="2" selected="selected">Gold</option>
			                    			<?php }else{ ?>
			                    				<option value="2">Gold</option>
			                    			<?php } ?>
			                    			<?php if($this->session->userdata('level')=="3"){?>
			                    				<option value="3" selected="">Platinum</option>
			                    			<?php }else{ ?>
			                    				<option value="3">Platinum</option>
			                    			<?php } ?>
			                    		</select>
			                    	</div>
			                    </div>
			                    <div class="col-md-2">
			                    	<div class="input-group">
			                    		<label>Status</label>
			                    		<select class="form-control" name="status" style="width: 160px !important">
			                    			<option value=""></option>
			                    			<?php if($this->session->userdata('status')=="1"){?>
			                    				<option value="1" selected="selected">Aktif</option>
			                    			<?php }else{ ?>
			                    				<option value="1">Aktif</option>
			                    			<?php } ?>
			                    			<?php if($this->session->userdata('status')=="0"){?>
			                    				<option value="0" selected="selected">Tidak Aktif</option>
			                    			<?php }else{ ?>
			                    				<option value="0">Tidak Aktif</option>
			                    			<?php } ?>
			                    		</select>
			                    	</div>
			                    </div>
			                    <div class="col-md-2">
			                    	<label>&nbsp;</label>
			                    	<button type="submit" class="btn btn-success">Cari</button>&nbsp;&nbsp;&nbsp;
			                    	<a href="#" class="btn btn-danger" onclick="reset_form();">Bersihkan</a>
			                    </div>
			                </form>
			            </div>
			            <hr>
			            <div class="row">
		                    <div class="col-md-12">
		                        <br/>
		                        <div id="listMember"></div>
		                    </div>
		                </div>

            		<input type="hidden" id="page_active">
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<?php $this->load->view('member/add_member'); ?>
<?php $this->load->view('member/edit_member'); ?>

<script type="text/javascript">

	$(document).ready(function(){
		pageLoad(1);
		$("#search").bind("keypress", function(e) {
          	if (e.keyCode == 13) {
            	return false;
          	}
       	});  

	});

	function cekrfid(rfid_card){
        //0009568515
        if(rfid_card.length==10){
            $.ajax({
                url     : 'member/cek_rfid/'+rfid_card,
                type    : 'post',
                dataType: 'html',
                beforeSend : function(){
                    
                },
                success : function(result){
                    if(result=="No RFID Telah Digunakan"){
                        alert(result);
                    }
                }
            })
        }else{

        }
        //  alert(rfid_card);
    }

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
        
        $.ajax({
            url     : 'member/member_data/'+i,
            type    : 'post',
            dataType: 'html',
            /*data    : {limit:limit,cari:cari},*/
            data    : {limit:limit},
            beforeSend : function(){
                
            },
            success : function(result){
                $('#listMember').html(result);
                $("#page_active").val(i);
            }
        })
    }
</script>