<h3 class="box-title">Data Siswa</h3>

              <a href="<?php echo site_url('Welcome/VFormAddSiswa'); ?>">Add</a>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" border="1px">
	<tr>
		<th>NISN</th>
		<th>NIS</th>
		<th>Nama</th>
		<th>ID Kelas</th>
		<th>Alamat</th>
		<th>Nomor Telepon</th>
		<th>ID SPP</th>
		<th>ID Login</th>
		
	</tr>
	<?php
	if(!empty($DataSiswa))
	{
		foreach($DataSiswa as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->nisn; ?></td>
		<td><?php echo $ReadDS->nis; ?></td>
		<td><?php echo $ReadDS->nama; ?></td>
		<td><?php echo $ReadDS->id_kelas; ?></td>
		<td><?php echo $ReadDS->alamat; ?></td>
		<td><?php echo $ReadDS->no_telp; ?></td>
		<td><?php echo $ReadDS->id_spp; ?></td>
		<td><?php echo $ReadDS->id_login; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataSiswa/'.$ReadDS->nisn.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataSiswa/'.$ReadDS->nisn) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
