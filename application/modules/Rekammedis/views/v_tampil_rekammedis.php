<div class="container-fluid">
	<table class="table table-bordered" border="1">
		<thead>
			<tr>
			<th>No.</th>
			<th>Nama Pasien</th>
			<th>tanngal periksa</th>
			<th>anamnesa</th>
			<th>Treatmen</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach($index as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td class="text-uppercase"><?php echo $u->nama_pasien?></td>
			<td><?php echo $u->tgl_periksa?></td>
			<td class="text-uppercase"><?php echo $u->anamnesa?></td>
			<td class="text-uppercase"><?php echo $u->treatment?></td>
	
		</tr>
		<?php } ?>
	</tbody>
	</table>
</div>