<div class="panel panel-default">
    <div class="panel-heading">

    </div>
    <div class="panel-body">
        <table class="table-bordered table-hover table-striped table" style="width:100%;">
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
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="nama" class="form-control" style="width:100%;" autocomplete="off">
                    </td>
                    <td>
                        <input type="text" name="stok" class="form-control" style="width:100%;" autocomplete="off">
                    </td>
                    <td>
                        <input type="text" name="satuan" class="form-control" style="width:100%;" autocomplete="off">
                    </td>
                    <td>
                        <input type="text" name="harga" class="form-control" style="width:100%;" autocomplete="off">
                    </td>
                    <td class="text-center text-uppercase">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-xs btn-default" onclick="simpan()"><i class="glyphicon glyphicon-ok"></i></button>
                        </div>
                    </td>
                </tr>
                <?php foreach ($obat as $obat) { ?>
                    <tr>
                        <td>
                            <?= $obat->nama_obat; ?>
                        </td>
                        <td class="text-center text-uppercase">
                            <?= $obat->stok; ?>
                        </td>
                        <td class="text-center">
                            <?= $obat->satuan; ?>
                        </td>
                        <td>
                            Rp. <?= number_format($obat->harga); ?>
                        </td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#editModal" onclick="edit(<?= $obat->id_obat ?>)"><i class="glyphicon glyphicon-edit"></i></button>
                                <button type="button" class="btn btn-xs btn-danger" onclick="hapus(<?= $obat->id_obat; ?>)" data-toggle="modal" data-target="#hapusModal"><i class="glyphicon glyphicon-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="panel-footer">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit data obat</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?= base_url('Administrator/Obat/Update/'); ?>">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="text-uppercase">nama obat</label>
                                    <input type="hidden" class="form-control" name="id_obat">
                                    <input type="text" name="namaobat" class="form-control" required="" autocomplete="off">
                                </div>
                                <div class="col-md-3">
                                    <label class="text-uppercase">stok obat</label>
                                    <input type="text" name="stokobat" class="form-control" required="" autocomplete="off">
                                </div>
                                <div class="col-md-3">
                                    <label class="text-uppercase">satuan obat</label>
                                    <input type="text" name="satuanobat" class="form-control" required="" autocomplete="off">
                                </div>
                                <div class="col-md-3">
                                    <label class="text-uppercase">harga obat</label>
                                    <input type="text" name="hargaobat" class="form-control" required="" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group" style="clear:both;margin:10px 0px;">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit data obat</h4>
                    </div>
                    <div class="modal-body" id="msg">
                        <input type="hidden" name="modalobat">
                        <p id="msgobat"></p>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default text-uppercase" data-dismiss="modal">tidak</button>
                            <button type="button" class="btn btn-default text-uppercase" onclick="deleted()">ya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            "dom": 'lfrtip',
            responsive: true
        });
    };
    function simpan() {
        var a, b, c, d;
        a = $('input[name=nama]').val();
        b = $('input[name=stok]').val();
        c = $('input[name=satuan]').val();
        d = $('input[name=harga]').val();
        if (a === '' || b === '' || c === '' || d === '') {
            alert('lengkapi data obat !');
        } else {
            $.ajax({
                url: "<?= base_url('Administrator/Obat/Tambah'); ?>",
                type: 'POST',
                data: {nama_obat: a, stok: b, satuan: c, harga: d},
                statusCode: {
                    200: function (data) {
                        alert(data.msg);
                        location.reload(true);
                    },
                    201: function () {
                        alert(data.msg);
                        location.reload(true);
                    }
                }
            });
        }
    }
    function edit(id) {
        $.ajax({
            url: "<?= base_url('Administrator/Obat/Edit/'); ?>" + id,
            type: 'get',
            statusCode: {
                200: function (data) {
                    $('input[name=id_obat]').val(data['obat'][0]['id_obat']);
                    $('input[name=namaobat]').val(data['obat'][0]['nama_obat']);
                    $('input[name=stokobat]').val(data['obat'][0]['stok']);
                    $('input[name=satuanobat]').val(data['obat'][0]['satuan']);
                    $('input[name=hargaobat]').val(data['obat'][0]['harga']);
                },
                201: function (data) {
                    alert(data.msg);
                    location.reload(true);
                },
                500: function () {
                    alert('Error while load data !');
                }
            }
        });
    }
    function hapus(id) {
        $('input[name=modalobat]').val(id);
        document.getElementById("msgobat").innerHTML = "anda yakin ingin hapud data obat ";
    }
    function deleted() {
        var a;
        a = $('input[name=modalobat]').val();
        $.ajax({
            url: "<?= base_url('Administrator/Obat/Hapus/'); ?>",
            type: 'POST',
            data: {id_obat: a},
            statusCode: {
                200: function (data) {
                    alert(data.msg);
                    location.reload(true);
                }
            }
        });
    }
</script>