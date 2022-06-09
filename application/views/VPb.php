<h3 class="box-title">Pembayaran</h3>

              <a href="<?php echo site_url('Welcome/VFormAddPb'); ?>">Add</a>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" border="1px">
	<tr>
		<th>ID Pembayaran</th>
		<th>ID Petugas</th>
		<th>NISN</th>
		<th>Tanggal bayar</th>
		<th>Bulan dibayar</th>
		<th>Tahun dibayar</th> 
		<th>ID SPP</th>
		<th>Jumlah bayar</th>
	</tr>
	<?php
	if(!empty($DataPb))
	{ 
		foreach($DataPb as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->id_pembayaran; ?></td>
		<td><?php echo $ReadDS->id_petugas; ?></td>
		<td><?php echo $ReadDS->nisn; ?></td>
		<td><?php echo $ReadDS->tgl_bayar; ?></td>
		<td><?php echo $ReadDS->bulan_dibayar; ?></td>
		<td><?php echo $ReadDS->tahun_dibayar; ?></td>
		<td><?php echo $ReadDS->id_spp; ?></td>
		<td><?php echo $ReadDS->jumlah_bayar; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataPb/'.$ReadDS->id_pembayaran.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataPb/'.$ReadDS->id_pembayaran) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
