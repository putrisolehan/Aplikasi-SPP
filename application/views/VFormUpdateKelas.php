<form action="<?php echo site_url('Welcome/UpdateDataKelas'); ?>" method="post">
<table>
	<tr>
		<td>ID Kelas</td>
		<td>:</td>
		<td><input type="hidden" name="id_kelas" value="<?php echo $detail['id_kelas']; ?>">
			<input type="text" name="id_kelas" value="<?php echo $detail['id_kelas']; ?>">
		</td>
	</tr>
	<tr>
		<td>Nama Kelas</td>
		<td>:</td>
		<td>
			<input type="text" name="nama_kelas" value="<?php echo $detail['nama_kelas']; ?>">
		</td>
	</tr>
	<tr>
		<td>ID KK</td>
		<td>:</td>
		<td>
			<input type="text" name="id_kk" value="<?php echo $detail['id_kk']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
