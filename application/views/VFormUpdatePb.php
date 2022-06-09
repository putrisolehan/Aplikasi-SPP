<form action="<?php echo site_url('Welcome/UpdateDataPb'); ?>" method="post">
<table>
	<tr>
		<td>ID Pembayaran</td>
		<td>:</td>
		<td>
			<input type="hidden" name="id_pembayaran" value="<?php echo $detail['id_pembayaran']; ?>">
			<input type="text" name="id_pembayaran" value="<?php echo $detail['id_pembayaran']; ?>">
		</td>
	</tr>
	<tr>
		<td>ID Petugas</td>
		<td>:</td>
		<td>
			<input type="text" name="id_petugas" value="<?php echo $detail['id_petugas']; ?>">
		</td>
	</tr>
	<tr>
		<td>NISN</td>
		<td>:</td>
		<td>
			<input type="text" name="nisn" value="<?php echo $detail['nisn']; ?>">
		</td>
	</tr>
	<tr>
		<td>Tanggal bayar</td>
		<td>:</td>
		<td>
			<input type="text" name="tgl_bayar" value="<?php echo $detail['tgl_bayar']; ?>">
		</td>
	</tr>
	<tr>
		<td>Bulan dibayar</td>
		<td>:</td>
		<td>
			<input type="text" name="bulan_dibayar" value="<?php echo $detail['bulan_dibayar']; ?>">
		</td>
	</tr>
	<tr>
		<td>Tahun dibayar</td>
		<td>:</td>
		<td>
			<input type="text" name="tahun_dibayar" value="<?php echo $detail['tahun_dibayar']; ?>">
		</td>
	</tr>
	<tr>
		<td>ID SPP</td>
		<td>:</td>
		<td>
			<input type="text" name="id_spp" value="<?php echo $detail['id_spp']; ?>">
		</td>
	</tr>
	<tr>
		<td>Jumlah bayar</td>
		<td>:</td>
		<td>
			<input type="text" name="jumlah_bayar" value="<?php echo $detail['jumlah_bayar']; ?>">
		</td>
	</tr>

	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
