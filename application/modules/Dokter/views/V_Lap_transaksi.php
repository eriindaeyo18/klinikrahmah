<div class="panel panel-default">
    <div class="panel-heading text-uppercase text-bold">
        laporan transaksi
    </div>
    <div class="panel-body">
        <div class="form-group text-right">
            <button type="button" name="addbtn" class="btn btn-md btn-default">Add</button>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" style="width:100%;">
                <thead>
                    <tr>
                        <th class="text-uppercase text-bold text-center text-teal">
                            pasien
                        </th>
                        <th class="text-uppercase text-bold text-center text-teal">
                            Dokter
                        </th>
                        <th class="text-uppercase text-bold text-center text-teal">
                            tanggal
                        </th>
                        <th class="text-uppercase text-bold text-center text-teal">
                            anamnesa
                        </th>
                        <th class="text-uppercase text-bold text-center text-teal">
                            treatment
                        </th>
                        <th class="text-uppercase text-bold text-center text-teal">
                            action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    static $no = 1;
                    foreach ($value as $value) {
                        ?>
                        <tr>
                            <td class="text-uppercase">
                                <?= $value->nama_pasien ?>
                            </td>
                            <td class="text-uppercase">
                                <?= $value->Dokter ?>
                            </td>
                            <td class="text-center text-uppercase">
                                <?= date('Y-m-d', strtotime($value->tgl_periksa)) ?>
                            </td>
                            <td class="text-uppercase">
                                <?= $value->anamnesa ?>
                            </td>
                            <td class="text-uppercase">
                                <?= $value->treatment ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('Dokter/Lap_transaksi/Detail/' . $value->id . ''); ?>" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                            </td>
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
            "dom": 'lBfrtip',
            responsive: true
        });
    };
</script>