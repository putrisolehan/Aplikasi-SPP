<h3 class="box-title">Petugas</h3>

              <a href="<?php echo site_url('Welcome/VFormAddPt'); ?>">Add</a>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" border="1px">
	<tr>
		<th>ID Petugas</th>
		<th>Nama Petugas</th>
		<th>ID Login</th>
		
	</tr>
	<?php
	if(!empty($DataPt)) 
	{
		foreach($DataPt as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->id_petugas; ?></td>
		<td><?php echo $ReadDS->nama_petugas; ?></td>
		<td><?php echo $ReadDS->id_login; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataPt/'.$ReadDS->id_petugas.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataPt/'.$ReadDS->id_petugas) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
