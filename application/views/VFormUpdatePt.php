<form action="<?php echo site_url('Welcome/UpdateDataPt'); ?>" method="post">
<table>
	<tr>
		<td>ID Petugas</td>
		<td>:</td>
		<td><input type="hidden" name="id_petugas" value="<?php echo $detail['id_petugas']; ?>">
			<input type="text" name="id_petugas" value="<?php echo $detail['id_petugas']; ?>">
		</td>
	</tr>
	<tr>
		<td>Nama Petugas</td>
		<td>:</td>
		<td>
			<input type="text" name="nama_petugas" value="<?php echo $detail['nama_petugas']; ?>">
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
