<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="text-uppercase">
            data pasien
        </h4>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-uppercase text-center">nama</th>
                        <th class="text-uppercase text-center">jenis kelamin</th>
                        <th class="text-uppercase text-center">umur</th>
                        <th class="text-uppercase text-center">status</th>
                        <th class="text-uppercase text-center">alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($value as $value) { ?>
                        <tr>
                            <td class="text-uppercase"><?= $value->nama_pasien ?></td>
                            <td class="text-uppercase">
                                <?php
                                if ($value->jenis_kelamin == 1) {
                                    echo 'LAKI-LAKI';
                                } else {
                                    echo 'PEREMPUAN';
                                }
                                ?>
                            </td>
                            <td class="text-uppercase"><?= $value->umur ?></td>
                            <td class="text-uppercase"><?= $value->status ?></td>
                            <td><?= $value->Alamat ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            "dom": 'lBfrtip'
        });
    };
</script>