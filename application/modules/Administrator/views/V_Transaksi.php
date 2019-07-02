<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="text-center">data transaksi</h4>
    </div>
    <div class="panel-body">
        <!--        <div class="form-group text-right">
                    <a href="<?= base_url('Administrator/Transaksi/Tambah'); ?>" class="text-uppercase btn btn-default btn-primary">tambah</a>
                </div>-->
        <table class="table table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal lahir</th>
                    <th>Status</th>
                    <th>Pekerjaan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($index as $u) {
                    ?>
                    <tr>
                        <td class="text-uppercase"><?php echo $u->nama_pasien ?></td>
                        <td class="text-uppercase text-center">
                            <?php
                            if ($u->jenis_kelamin == 1) {
                                echo 'laki-laki';
                            } else {
                                echo 'perempuan';
                            }
                            ?>
                        </td>
                        <td class="text-center"><?= $u->tgl_lahir ?></td>
                        <td class="text-uppercase">
                            <?php
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
                            <div class="btn-group btn-group-xs" role="group">
                                <a href="<?= base_url('Administrator/Transaksi/Tambah/' . $u->id_pp . ''); ?>" class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="tambah transaksi"><i class="glyphicon glyphicon-plus"></i></a>
                                <a href="<?= base_url('Administrator/Transaksi/edit'); ?>" class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit transaksi"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="<?= base_url('Administrator/Transaksi/hapus'); ?>" class="btn btn-xs btn-default btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="hapus transaksi"><i class="glyphicon glyphicon-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="panel-footer">

    </div>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            "dom": 'lBfrtip',
            responsive: true,
            buttons: [
                'colvis','copy', 'excel', 'pdf','csv','print'
            ]
        });
        $('[data-toggle="tooltip"]').tooltip();
    };
</script>