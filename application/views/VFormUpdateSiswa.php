<form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
<table>
	<tr>
		<td>NISN</td>
		<td>:</td>
		<td><input type="hidden" name="nisn" value="<?php echo $detail['nisn']; ?>">
			<input type="text" name="nisn" value="<?php echo $detail['nisn']; ?>">
		</td>
	</tr>
	<tr>
		<td>NIS</td>
		<td>:</td>
		<td>
			<input type="text" name="nis" value="<?php echo $detail['nis']; ?>">
		</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
			<input type="text" name="nama" value="<?php echo $detail['nama']; ?>">
		</td>
	</tr>
	<tr>
		<td>ID Kelas</td>
		<td>:</td>
		<td>
			<input type="text" name="id_kelas" value="<?php echo $detail['id_kelas']; ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>
			<input type="text" name="alamat" value="<?php echo $detail['alamat']; ?>">
		</td>
	</tr>
	<tr>
		<td>Nomor Telepon</td>
		<td>:</td>
		<td>
			<input type="text" name="no_telp" value="<?php echo $detail['no_telp']; ?>">
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
		<td>ID Login</td>
		<td>:</td>
		<td>
			<input type="text" name="id_login" value="<?php echo $detail['id_login']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
