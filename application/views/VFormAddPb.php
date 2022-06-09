<form action="<?php echo site_url('Welcome/AddDataPb'); ?>" method="post">
	ID Pembayaran<input type="text" name="id_pembayaran"><br>
	ID Petugas<input type="text" name="id_petugas"><br>
	NISN<input type="text" name="nisn"><br>
	Tanggal bayar<input type="text" name="tgl_bayar"><br>
	Bulan dibayar<input type="text" name="bulan_dibayar"><br>
	Tahun dibayar<input type="text" name="tahun_dibayar"><br>
	ID SPP<input type="text" name="id_spp"><br>
	Jumlah bayar<input type="text" name="jumlah_bayar"><br>
	<input type="submit" name="simpan" value="Simpan">
</form>