<div class="panel panel-default">
    <div class="panel-heading text-uppercase text-bold">
        laporan transaksi
    </div>
    <div class="panel-body">
        <div class="form-group text-right">
            <button type="button" name="addbtn" class="btn btn-md btn-default">Add</button>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-uppercase text-bold text-center text-teal">
                            #
                        </th>
                        <th class="text-uppercase text-bold text-center text-teal">
                            nama
                        </th>
                        <th class="text-uppercase text-bold text-center text-teal">
                            tanggal perawatan
                        </th>
                        <th class="text-uppercase text-bold text-center text-teal">
                            Treatment
                        </th>
                        <th class="text-uppercase text-bold text-center text-teal">
                            obat
                        </th>
                        <th class="text-uppercase text-bold text-center text-teal">
                            harga
                        </th>
                        <th class="text-uppercase text-bold text-center text-teal">
                            total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    static $no = 1;
                    foreach ($value as $value) {
                        ?>
                        <tr>
                            <td>
                                <?= $no++ ?>
                            </td>
                            <td class="text-uppercase">
                                <?= $value->nama_pasien ?>
                            </td>
                            <td class="text-center text-uppercase">
                                <?= date('Y-m-d', strtotime($value->tgl_periksa)) ?>
                            </td>
                            <td class="text-center text-uppercase">
                                <?= $value->treatment ?>
                            </td>
                            <td>
                                <?= $value->nama_obat ?>
                            </td>
                            <td>
                                <?= $value->Harga ?>
                            </td>
                            <td>
                                <?= $value->tot_harga ?>
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
            "scrollY": "200px",
            responsive: true
        });
    };
</script>