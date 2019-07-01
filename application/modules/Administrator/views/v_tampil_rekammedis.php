<div class="panel panel-default">
    <div class="panel-heading">

    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <table class="table table-bordered" border="1">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase">Nama Pasien</th>
                        <th class="text-center text-uppercase">dokter</th>
                        <th class="text-center text-uppercase">tanngal periksa</th>
                        <th class="text-center text-uppercase">anamnesa</th>
                        <th class="text-center text-uppercase">Treatmen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($value as $value) { ?>
                        <tr>
                            <td class="text-uppercase">
                                <?= $value->nama_pasien ?>
                            </td>
                            <td class="text-uppercase">
                                dr. <?= $value->Dokter ?>
                            </td>
                            <td>
                                <?= $value->tgl_periksa ?>
                            </td>
                            <td class="text-uppercase">
                                <?= $value->anamnesa ?>
                            </td>
                            <td class="text-uppercase">
                                <?= $value->treatment ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
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