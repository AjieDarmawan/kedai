<style type="text/css">
    .pagination > li > a, .pagination > li > span{
        color: #028d00!important;
    }
    .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
        color: white !important;
        background-color: #028d00!important;
        border-color: #028d00!important;
    }
</style>

<?php $no = ($paging['limit']*$paging['current'])-$paging['limit']; 
    $no++; 
    if($list->num_rows() > 0 ) { ?> 

    <table class="table table-striped table-bordered table-hover" id="editable" width="100%">
        <thead>
            <tr>
                <th style="width: 200px !important; text-align: center;">Nama</th>
                <th style="text-align: center;">Alamat</th>
                <th style="text-align: center;">Jenis Kelamin</th>
                <th style="text-align: center;">RFID Card</th>
                <th style="text-align: center;">Level</th>
                <th style="text-align: center;">Status</th>
                <th style="text-align: center;">Tanggal Member</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            
            foreach($list->result() as $row){?>

            <tr>
                <td><?php echo $row->nama;?></td>
                <td><?php echo $row->alamat;?></td>
                <td align="center"><?php echo $row->jenis_kelamin;?></td>
                <td align="center"><?php echo $row->rfid_card;?></td>
                <td align="center"><?php echo $row->level_group;?></td>
                <td align="center"><?php if($row->status_member==1){echo "Aktif";}else{echo "Tidak Aktif";}?></td>
                <td align="center"><?php echo date('d-m-Y',strtotime($row->tanggal_member));?></td>
                <td align="center"><button data-rel="tooltip" id="mybtn" data-toggle="modal" data-target="#edit" data-id="<?php echo $row->id_member;?>" data-nama="<?php echo $row->nama;?>" data-alamat="<?php echo $row->alamat;?>" data-jk="<?php echo $row->jenis_kelamin; ?>" data-no="<?php echo $row->no_telp;?>" data-level="<?php echo $row->id_group;?>" data-status="<?php echo $row->status_member;?>" data-rfid="<?php echo $row->rfid_card;?>" title="Edit" class="btn btn-success btn-xs id">
                    <i class="fa fa-edit "></i></button>
                    <a href="<?php echo base_url('member/delete/'.$row->id_member);?>" class="" onclick="return confirm('Yakin menghapus data ini ?')"><button data-rel="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-user"><i class="fa fa-trash"></i></button></a>
                </td>
            </tr>
        <?php
            
            } 
        ?>
        </tbody>
    </table>
    <input type='hidden' id='current' name='current' value='<?php echo $paging['current'] ?>'>

    <div class='row'>
        <div class='col-sm-4 col-xs-12' style='margin-top:5px;margin-bottom:10px; color: #028d00'>
            <?php echo "Page ".$paging['current']." of ".$paging['count_page']." showing ".$paging['limit']." record out of ".$paging['count_row']." Total";?> 
        </div>
        <div class='col-sm-8 col-xs-12 pull-right' style='margin-top:5px;margin-bottom:10px'>
            <?php echo $paging['list']; ?>
        </div>
    </div>
    
<?php }else{ ?>
    <table class="table table-striped table-bordered table-hover" id="editable" width="100%" >
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>RFID Card</th>
                <th>Level</th>
                <th>Status</th>
                <th>Tanggal Member</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="show_data">
            
        </tbody>
    </table>
<?php } ?>

<script type="text/javascript">
    $(".id").click(function(){
        var a = $(this).attr('data-id');  
        var input =  document.getElementById("id");
        input.value = a;

        var b = $(this).attr('data-nama');  
        var input =  document.getElementById("e_nama_member");
        input.value = b;

        var c = $(this).attr('data-alamat');  
        var input =  document.getElementById("e_alamat");
        input.value = c;

        var d = $(this).attr('data-jk');
        //id="e_jk_l"
        if(d=="laki-laki"){
            document.getElementById("e_jk_l").checked = true;
        }else{
            document.getElementById("e_jk_p").checked = true;
        }

        var f = $(this).attr('data-no');  
        var input =  document.getElementById("e_no_telp");
        input.value = f;

        var g = $(this).attr('data-level');  
        var input =  document.getElementById("e_id_group");
        input.value = g;

        var h = $(this).attr('data-status');
        if(h=="1"){
            document.getElementById("e_a").checked = true;
        }else{
            document.getElementById("e_n").checked = true;
        }
        
        var i = $(this).attr('data-rfid');  
        var input =  document.getElementById("e_rfid_card");
        input.value = i;

    });
</script>