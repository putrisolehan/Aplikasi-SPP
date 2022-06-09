<h3 class="box-title">Kelas</h3>

              <a href="<?php echo site_url('Welcome/VFormAddKelas'); ?>">Add</a>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" border="1px">
	<tr>
		<th>ID Kelas</th> 
		<th>Nama Kelas</th>
		<th>ID Kompetensi Keahlian</th>
	</tr>
	<?php
	if(!empty($DataKelas))
	{
		foreach($DataKelas as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->id_kelas; ?></td>
		<td><?php echo $ReadDS->nama_kelas; ?></td>
		<td><?php echo $ReadDS->id_kk; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataKelas/'.$ReadDS->id_kelas.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataKelas/'.$ReadDS->id_kelas) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
