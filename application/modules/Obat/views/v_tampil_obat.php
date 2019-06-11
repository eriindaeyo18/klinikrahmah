
	<center><h1></tr></h1></center>
	<center><?php echo anchor('Obat/tambah','Tambah Data'); ?></center>
	<table style="margin:25px auto;" class="table table-bordered" border="1">
		<thead style="background: ;" ><tr>
			<th>No.</th>
			<th>Nama Obat</th>
			<th>Stok</th>
			<th>Harga</th>
		<?php 
		$no = 1;
		foreach($index as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_obat?></td>
			<td><?php echo $u->Stok?></td>
			<td><?php echo $u->Harga?></td>

						<td>
			      <?php echo anchor('Obat/edit/'.$u->id_obat,'Edit'); ?>
                              <?php echo anchor('Obat/hapus_data/'.$u->id_obat,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>

