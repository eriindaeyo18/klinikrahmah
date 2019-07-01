<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Lap_transaksi
 *
 * @author casug
 */
class M_Lap_transaksi extends CI_Model {

    function index() {
        $exec = $this->db->select('transaksi.id,pasien.nama_pasien,karyawan.nama AS Dokter,rekam_medis.tgl_periksa,rekam_medis.anamnesa,rekam_medis.treatment,obat.nama_obat,transaksi.qty,obat.harga')
                ->from('transaksi')
                ->join('rekam_medis', 'transaksi.id_rekammedis = rekam_medis.id_rm', 'LEFT')
                ->join('obat', 'transaksi.id_obat = obat.id_obat', 'LEFT')
                ->join('pasien', 'rekam_medis.id_pasien = pasien.id_pp', 'LEFT')
                ->join('karyawan', 'rekam_medis.id_dokter = karyawan.id', 'LEFT')
                ->where('karyawan.id', 'rekam_medis.id_dokter', false)
                ->group_by('transaksi.id_rekammedis')
                ->get()
                ->result();
        print_r($this->db->last_query());
        die;
        return $exec;
    }

}
