<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="text-uppercase">tambah data transaksi</h4>
    </div>
    <div class="panel-body">
        <form method="post" action="<?= base_url('Administrator/Transaksi/Simpan/'); ?>">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-uppercase">pasien</label>
                        <input type="hidden" name="idpasien" value="<?= $pasien[0]->id_pp ?>">
                        <input type="text" value="<?= $pasien[0]->nama_pasien ?>" class="form-control text-uppercase" readonly="" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-uppercase">dokter</label>
                        <select class="form-control" name="dokter" required="">
                            <option value="">pilih data dokter</option>
                            <?php
                            foreach ($dokter as $value) {
                                echo '<option value="' . $value->id . '">dr. ' . $value->nama . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-uppercase">anamnesa</label>
                        <input type="text" class="form-control" name="anamnesa" required="" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-uppercase">treatment</label>
                        <input type="text" class="form-control" name="treatment" required="" autocomplete="off">
                    </div>
                </div>
            </div>
            <hr>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase">
                            nama
                        </th>
                        <th class="text-center text-uppercase">
                            stok
                        </th>
                        <th class="text-center text-uppercase">
                            satuan
                        </th>
                        <th class="text-center text-uppercase">
                            harga
                        </th>
                        <th class="text-center text-uppercase">
                            jumlah
                        </th>
                        <th class="text-center text-uppercase">
                            action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($obat as $obat) { ?>
                        <tr>
                            <td>
                                <?= $obat->nama_obat ?>
                            </td>
                            <td class="text-center text-uppercase">
                                <?= $obat->stok ?>
                            </td>
                            <td class="text-center">
                                <?= $obat->satuan ?>
                            </td>
                            <td>
                                Rp. <?= number_format($obat->harga); ?>
                            </td>
                            <td class="text-center" id="<?= 'qty' . $obat->id_obat; ?>">

                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <button type="button" id="<?= 'obat' . $obat->id_obat ?>" class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="tambah dalam transaksi" onclick="Tambah(<?= $obat->id_obat; ?>)"><i class="glyphicon glyphicon-plus"></i></button>
                                    <button type="button" class="btn btn-xs btn-default btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="batal pilih" onclick="Batal(<?= $obat->id_obat; ?>)"><i class="glyphicon glyphicon-remove"></i></button>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="form-group" id="obt">
            </div>
            <div class="btn-group" role="group">
                <button type="submit" class="btn btn-success btn-default text-uppercase"><i class="glyphicon glyphicon-ok"></i> simpan</button>
                <a href="<?= base_url('Administrator/Transaksi/index'); ?>" class="btn btn-default btn-danger text-uppercase"><i class="glyphicon glyphicon-remove"></i> batal</a>
            </div>
        </form>
    </div>
    <div class="panel-footer">

    </div>
</div>
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
    function Tambah(id) {
        $("<div style='clear:both;margin:10px 0px;'></div>").appendTo('#obt');
        $('<input type="hidden" id=' + 'obattxt' + id + ' name="obat[]" required="" value=' + id + '>').appendTo('#obt');
        $('<input type="text" id=' + 'qtytxt' + id + ' style="width:100%;" name="qty[]" value="0" autocomplete="off" class="form-control" onkeypress="return isNumberKey(event)">').appendTo('#qty' + id + '');
        $('#obat' + id + '').addClass('btn-success');
    }
    function Batal(id) {
        document.getElementById("obattxt" + id + "").remove();
        document.getElementById("qtytxt" + id + "").remove();
        $('#obat' + id + '').removeClass('btn-success');
    }
    window.onload = function () {
        $('.table').dataTable({});
        $('[data-toggle="tooltip"]').tooltip();
    };
</script>