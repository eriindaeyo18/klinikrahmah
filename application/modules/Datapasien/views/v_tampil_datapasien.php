
	<center><h1></tr></h1></center>
	<center><?php echo anchor('Datapasien/tambah','Tambah Data'); ?></center>
	<table style="margin:25px auto;" class="table table-bordered" border="1">
		<thead style="background: ;" ><tr>
			<th>No.</th>
			<th>Nama Pasien</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal lahir</th>
			<th>Status</th>
			<th>Pekerjaan</th>
			<th>Alamat</th>
			<th>Aksi</th></thead>
		<?php 
		$no = 1;
		foreach($index as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_pasien?></td>
			<td><?php echo $u->jenis_kelamin?></td>
			<td><?php echo $u->tgl_lahir?></td>
			<td><?php echo $u->status?></td>
			<td><?php echo $u->Pekerjaan?></td>
			<td><?php echo $u->Alamat?></td>
	
						<td>
			      <?php echo anchor('Datapasien/edit/'.$u->id_pp,'Edit'); ?>
                              <?php echo anchor('Datapasien/hapus_data/'.$u->id_pp,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>

