<form action="<?php echo site_url('Welcome/UpdateDataSPP'); ?>" method="post">
<table>
	<tr>
		<td>ID SPP</td>
		<td>:</td>
		<td><input type="hidden" name="id_spp" value="<?php echo $detail['id_spp']; ?>">
			<input type="text" name="id_spp" value="<?php echo $detail['id_spp']; ?>">
		</td>
	</tr>
	<tr>
		<td>Tahun</td>
		<td>:</td>
		<td>
			<input type="text" name="tahun" value="<?php echo $detail['tahun']; ?>">
		</td>
	</tr>
	<tr>
		<td>Nominal</td>
		<td>:</td>
		<td>
			<input type="text" name="nominal" value="<?php echo $detail['nominal']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
