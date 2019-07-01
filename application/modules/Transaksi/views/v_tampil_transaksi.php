
	<center><h1></tr></h1></center>
	<center><?php echo anchor('Transaksi/tambah','Tambah Data'); ?></center>
	<table style="margin:25px auto;" class="table table-bordered" border="1">
		<thead><tr>
			<th>No.</th>
			<th>Nama Pasien</th>
			<th>Tanggal Perawatan</th>
			<th>Treatment</th>
			<th>Obat</th>
			<th>Harga</th>
			<th>Total Harga</th>
		
		<?php 
		$no = 1;
		foreach($index as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_pasien?></td>
			<td><?php echo $u->tgl_periksa?></td>
			<td><?php echo $u->treatment?></td>
			<td><?php echo $u->nama_obat?></td>
			<td><?php echo $u->Harga?></td>
			<td><?php echo $u->tot_harga?></td>
	
	
		</tr>
		<?php } ?>
	</table>

