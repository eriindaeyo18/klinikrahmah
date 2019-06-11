
    <center>
        <h1>DATA OBAT</h1>
        <h3>Tambah Data Baru</h3>

    </center>
    <form action="<?php echo base_url('Obat/tambah_aksi')?>" method="POST">
        <table style="margin:20px auto;">
            <tr>
                <td>Nama Obat</td>
                <td><input type="text" name="nama_obat"></td>
            </tr>
            <tr>
              <td>Harga</td>
              <td><input type="text" name="Harga"></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" value="tambah"></td>
            </tr>
      </table>
    </form>
