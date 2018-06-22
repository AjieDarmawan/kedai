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
                                <th>Kode Transaksi</th>
                                <th>RFID</th>
                                <th>Nama Produk</th>
                                <th>Tanggal</th>
                                <th>Qty</th>
                                <th>Harga Jual</th>
                                <th>Diskon</th>
                                <th>Diskon Amount</th>
                                <th>Total</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $total ="";
                            foreach($list->result() as $row){?>

                            <tr>
                                <td style="width: 30px !important"><?php echo $row->kode_transaksi;?></td>
                                <td><?php echo $row->rfid_card;?></td>
                                <td><?php echo $row->nama_produk;?></td>
                                <td><?php echo date('d-m-Y',strtotime($row->tanggal_transaksi));?></td>
                                <td><?php echo $row->qty;?></td>
                                <td><?php echo "Rp. ".number_format($row->harga_jual);?></td>
                                <td><?php if($row->diskon!=0){ echo $row->diskon."%"; }else{echo "0%";}?></td>
                                <td><?php echo "Rp. ".number_format($row->diskon_amount);?></td>
                                <td><?php echo "Rp. ".number_format($row->total);?></td>
                                
                            </tr>
                        <?php 
                            $total+=$row->total; 
                            
                            } 
                        ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="8" align="center" style="color: red">Total</td>
                                <td style="color: red"><?php echo "Rp. ".number_format($total);?></td>
                            </tr>
                        </tfoot>
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
                        <th>Kode Transaksi</th>
                        <th>Nama Produk</th>
                        <th>Qty</th>
                        <th>Harga Jual</th>
                        <th>Diskon</th>
                        <th>Diskon Amount</th>
                        <th>Total</th>
                        <th>Tanggal Transaksi</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
<?php } ?>

