<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Medis
 *
 * @author casug
 */
class M_Medis extends CI_Model {

    function tampil_data() {
        $exec = $this->db->select('pasien.nama_pasien,karyawan.nama AS Dokter,rekam_medis.tgl_periksa,rekam_medis.anamnesa,rekam_medis.treatment')
                ->from('transaksi')
                ->join('rekam_medis', 'transaksi.id_rekammedis = rekam_medis.id_rm', 'left')
                ->join('pasien', 'rekam_medis.id_pasien = pasien.id_pp', 'left')
                ->join('karyawan', 'rekam_medis.id_dokter = karyawan.id', 'left')
                ->group_by('rekam_medis.id_rm')
                ->get()
                ->result();
        return $exec;
    }

}
