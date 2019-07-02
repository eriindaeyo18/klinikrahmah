<div class="panel panel-default">
    <div class="panel-heading text-uppercase">
        transaksi pasien
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-uppercase">nama pasien</label>
                    <p class="text-uppercase"><?= $value[0]->nama_pasien ?></p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">jenis kelamin</label>
                    <p class="text-uppercase">
                        <?php
                        if ($value[0]->jenis_kelamin == 1) {
                            echo 'laki-laki';
                        } else {
                            echo 'perempuan';
                        }
                        ?>
                    </p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">tgl lahir</label>
                    <p class="text-uppercase"><?= $value[0]->tgl_lahir; ?></p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">status</label>
                    <p class="text-uppercase">
                        <?php
                        if ($value[0]->status == 1) {
                            echo 'menikah';
                        } else {
                            echo 'belum menikah';
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-uppercase">alamat</label>
                    <p class="text-uppercase"><?= $value[0]->Alamat ?></p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">pekerjaan</label>
                    <p class="text-uppercase"><?= $value[0]->Pekerjaan ?></p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">tanggal periksa</label>
                    <p class="text-uppercase"><?= $value[0]->tgl_periksa ?></p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">anamnesa</label>
                    <p class="text-uppercase"><?= $value[0]->anamnesa ?></p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">treatment</label>
                    <p class="text-uppercase"><?= $value[0]->treatment ?></p>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="text-center text-uppercase">
                        obat
                    </th>
                    <th class="text-center text-uppercase">
                        jumlah/satuan
                    </th>
                    <th class="text-center text-uppercase">
                        harga
                    </th>
                    <th class="text-center text-uppercase">
                        total
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($value as $value) { ?>
                    <tr>
                        <td>
                            <?= $value->nama_obat ?>
                        </td>
                        <td>
                            <?= $value->qty . '/' . $value->satuan ?>
                        </td>
                        <td>
                            Rp. <?= number_format($value->harga) ?>
                        </td>
                        <td>
                            Rp. <?= number_format($value->qty * $value->harga) ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-center text-uppercase">ppn 10%</th>
                    <td>Rp. <?= number_format($value->total * 0.1); ?></td>
                </tr>
                <tr>
                    <th colspan="3" class="text-center text-uppercase">grand total</th>
                    <td>Rp. <?php
                        $ppn = $value->total * 0.1;
                        echo number_format($value->total + $ppn);
                        ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="panel-footer">
        <div class="btn-group" role="group">
            <button type="button" class="text-uppercase btn btn-default">print</button>
            <button type="button" class="text-uppercase btn btn-default">back</button>
        </div>
    </div>
</div>