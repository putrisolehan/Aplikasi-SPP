<h3 class="box-title">SPP</h3>

              <a href="<?php echo site_url('Welcome/VFormAddSpp'); ?>">Add</a>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" border="1px">
	<tr>
		<th>ID SPP</th>
		<th>Tahun</th>
		<th>Nominal</th>
	</tr>
	<?php
	if(!empty($DataSPP))
	{
		foreach($DataSPP as $ReadDS)
		{
	?>

	<tr> 
		<td><?php echo $ReadDS->id_spp; ?></td>
		<td><?php echo $ReadDS->tahun; ?></td>
		<td><?php echo $ReadDS->nominal; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataSPP/'.$ReadDS->id_spp.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataSPP/'.$ReadDS->id_spp) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
