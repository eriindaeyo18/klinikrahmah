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
                        <td>Bulan</td>
                        <td>Tahun</td>
                        <td>Total Pendapatan</td>
                   </tr> 
                </thead>
                <tbody>
                    <?php
                    static $no = 1;
                    foreach ($value as $value) {
                        
                        ?>
                       <tr>
                           <td><?= $value->bulan ?></td>
                           <td><?= $value->tahun ?></td>

                           <td><?= "Rp ".number_format($value->total_pendapatan,'0', ',', '.') ?></td>
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