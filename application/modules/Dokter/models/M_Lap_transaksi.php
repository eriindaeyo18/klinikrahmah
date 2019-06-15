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
        $exec = $this->db->select('data_pasien.nama_pasien,rekam_medis.tgl_periksa,rekam_medis.treatment,obat.nama_obat,transaksi.qty,obat.Harga,SUM(obat.Harga * transaksi.qty) AS tot_harga')
                ->from('transaksi')
                ->join('data_pasien', 'transaksi.id_pasien = data_pasien.id_pp', 'LEFT')
                ->join('obat', 'transaksi.id_obat = obat.id_obat', 'LEFT')
                ->join('rekam_medis', 'transaksi.id_rm = rekam_medis.id_rm', 'LEFT')
                ->get()
                ->result();
        return $exec;
    }

}
