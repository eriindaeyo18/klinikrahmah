<div class="panel panel-default">
    <div class="panel-heading">

    </div>
    <div class="panel-body">
        <div class="text-right">
            <a href="<?= base_url('Administrator/Pasien/tambah') ?>" class="btn btn-default btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered">
            <thead><tr>
                    <th class="text-uppercase text-uppercase">No.</th>
                    <th class="text-uppercase text-uppercase">Nama Pasien</th>
                    <th class="text-uppercase text-uppercase">Jenis Kelamin</th>
                    <th class="text-uppercase text-uppercase">Tanggal lahir</th>
                    <th class="text-uppercase text-uppercase">Status</th>
                    <th class="text-uppercase text-uppercase">Pekerjaan</th>
                    <th class="text-uppercase text-uppercase">Alamat</th>
                    <th class="text-uppercase text-uppercase">Aksi</th></thead>
            <?php
            $no = 1;
            foreach ($index as $u) {
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td class="text-uppercase"><?php echo $u->nama_pasien ?></td>
                    <td class="text-uppercase"><?php
                        if ($u->jenis_kelamin == 1) {
                            echo 'Laki-Laki';
                        } else {
                            echo 'perempuan';
                        }
                        ?>
                    </td>
                    <td class="text-center"><?= $u->tgl_lahir ?></td>
                    <td class="text-uppercase"><?php
                        if ($u->status == 1) {
                            echo 'menikah';
                        } else {
                            echo 'belum menikah';
                        }
                        ?>
                    </td>
                    <td><?php echo $u->Pekerjaan ?></td>
                    <td><?php echo $u->Alamat ?></td>
                    <td>
                        <div class="btn-group btn-group-xs" role="group" aria-label="...">
                            <a href="#" class="btn btn-default btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="#" class="btn btn-default btn-danger"><i class="glyphicon glyphicon-trash"></i></a>

                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="panel-footer">

    </div>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            "dom": 'lBfrtip',
            responsive: true
        });
    };
</script>