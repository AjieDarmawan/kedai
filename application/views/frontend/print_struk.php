<table width="30%">
	<tbody>
		<tr>
			<td align="center" colspan="4">Kedai Seribu Bukit</td>
		</tr>
		<tr>
			<td align="center" colspan="4">Sehat Halal Terjangkau</td>
		</tr>
		<tr>
			<td align="center" colspan="4">Jl....................</td>
		</tr>
		<tr>
			<td align="center" colspan="4">No. Telp..............</td>
		</tr>
		<tr>
			<td colspan="4">----------------------------------------------------------------------------------------------------------------------------------------------<td>
		</tr>
		<tr>
			<td>Kasir</td>
			<td colspan="3">: <?php echo $kasir;?></td>
		</tr>
		<tr>
			<td>Date</td>
			<td colspan="3">: <?php echo $tgl_transaksi;?></td>
		</tr>
		<tr>
			<td colspan="4">----------------------------------------------------------------------------------------------------------------------------------------------<td>
		</tr>
		<tr>
			<td colspan="4">===============================================================</td>
		</tr>
		<?php foreach($struk as $key){?>
			<tr>
				<td colspan="4"><?php echo $key['nama_produk'];?></td>
			<tr>
			<tr>
				<td width="150px"><?php echo $key['qty'];?></td>
				<td>X</td>
				<td width="100px"><?php echo $key['harga_jual'];?></td>
				<td><?php echo $key['qty']*$key['harga_jual'];?></td>
			<tr>
		<?php } ?>
		<tr>
			<td colspan="4">===============================================================</td>
		</tr>
		<tr>
			<td>Sub Total</td>
			<td>:</td>
			<td>Rp. &nbsp;&nbsp;<?php echo number_format($total);?></td>
		</tr>
		<tr>
			<td>Diskon</td>
			<td>:</td>
			<td>Rp. &nbsp;&nbsp;<?php echo number_format($diskon);?></td>
		</tr>
		<tr>
			<td>Diskon Amount</td>
			<td>:</td>
			<td>Rp. &nbsp;&nbsp;<?php echo number_format($diskon_amount);?></td>
		</tr>
		<tr>
			<td>Total</td>
			<td>:</td>
			<td>Rp. &nbsp;&nbsp;<?php echo number_format($total-$diskon_amount);?></td>
		</tr>
		<tr>
			<td>Bayar</td>
			<td>:</td>
			<td>Rp. &nbsp;&nbsp;<?php echo number_format($bayar);?></td>
		</tr>
		<tr>
			<td>Kembali</td>
			<td>:</td>
			<td>Rp. &nbsp;&nbsp;<?php echo number_format($bayar-($total-$diskon_amount));?></td>
		</tr>
		<tr>
			<td colspan="4">===============================================================</td>
		</tr>
		<tr>
			<td colspan="4" align="center">*Terima Kasih*</td>
		</tr>
		<tr>
			<td colspan="4" align="center">*Selamat Datang Kembali*</td>
		</tr>
	</tbody>
</table>

<div class="col-md-12 text-center">
	<button type="button" class="btn btn-success col-md-12" id="test" onclick="cetak_ulang_struk('<?php echo $rfid_card;?>','<?php echo $kode_transaksi;?>')">Print Ulang</button>
</div><br><br>