<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="text-uppercase">
            tambah data pasien
        </h4>
    </div>
    <div class="panel-body">
        <form action="<?= base_url('Administrator/Pasien/Simpan'); ?>" method="post">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="text-uppercase">nama pasien</label>
                        <input type="text" class="form-control" name="nama" required="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">jenis kelamin</label>
                        <select class="form-control text-uppercase" name="jkel" required="">
                            <option value="">pilih jenis kelamin</option>
                            <option value="1">laki-laki</option>
                            <option value="2">perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">tanggal lahir</label>
                        <div class="input-group date" id="tgllahir">
                            <input type="text" name="lahir" class="form-control" readonly="">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="text-uppercase">status</label>
                        <select class="form-control text-uppercase" name="menikah" required="">
                            <option value="">status perkawinan</option>
                            <option value="1">menikah</option>
                            <option value="2">belum menikah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">pekerjaan</label>
                        <input type="text" class="form-control" name="gawe" required="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">alamat</label>
                        <textarea class="form-control" name="alamat" required=""></textarea>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="form-group btn-group" role="group">
                <button type="submit" class="btn btn-default btn-success text-uppercase">simpan</button>
                <button type="reset" class="btn btn-default btn-danger text-uppercase">batal</button>
            </div>
        </form>
    </div>
    <div class="panel-footer">

    </div>
</div>
<script type="text/javascript">
    window.onload = function () {
        $(function () {
            $('#tgllahir').datetimepicker();
        });
    };
</script>