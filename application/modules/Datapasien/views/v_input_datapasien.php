
    <center>
        <h1>INPUT DATA SEKOLAH</h1>
        <h3>Tambah Data Baru</h3>

    </center>
    <form action="<?php echo base_url('Datapasien/tambah_aksi')?>" method="POST">
        <table style="margin:20px auto;">
            <tr>
                <td>Nama Pasien</td>
                <td><input type="text" name="nama_pasien"></td>
            </tr>
         
            <tr>
              <td>Jenis Kelamin</td>
              <td><input type="text" name="jenis_kelamin"></td></tr>
            </tr>

            <tr>
              <td>Tanggal Lahir</td>
              <td><input type="text" name="tgl_lahir"></td>
            </tr>

            <tr>
              <td>Status</td>
              <td><input type="text" name="status"></td>
            </tr>
            <tr>
              <td>Pekerjaan</td>
              <td><input type="text" name="Pekerjaan"></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td><input type="text" name="Alamat"></td>
            </tr>


            <tr>
              <td></td>
              <td><input type="submit" value="tambah"></td>
            </tr>
      </table>
    </form>
