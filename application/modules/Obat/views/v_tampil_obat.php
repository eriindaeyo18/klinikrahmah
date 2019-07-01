
	<center><h1></tr></h1></center>
	<center><?php echo anchor('Datapasien/tambah','Tambah Data'); ?></center>
	<table style="margin:25px auto;" class="table table-bordered" border="1">
		<thead><tr>
			<th>No.</th>
			<th>Nama Obat</th>
			<th>Harga</th></thead>
		<?php 
		$no = 1;
		foreach($index as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_obat?></td>
			<td><?php echo $u->stok?></td>
			<td><?php echo $u->harga?></td>
		
	
						<td>
			      <?php echo anchor('Obat/edit/'.$u->id_pp,'Edit'); ?>
                              <?php echo anchor('Obat/hapus_data/'.$u->id_pp,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>

