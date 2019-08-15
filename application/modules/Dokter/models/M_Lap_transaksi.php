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
        $exec = $this->db->select('transaksi.id, transaksi.id_rekammedis as rm, pasien.nama_pasien,karyawan.nama AS Dokter,rekam_medis.tgl_periksa,rekam_medis.anamnesa,rekam_medis.treatment,obat.nama_obat,transaksi.qty,obat.harga')
                ->from('transaksi')
                ->join('rekam_medis', 'transaksi.id_rekammedis = rekam_medis.id_rm', 'LEFT')
                ->join('obat', 'transaksi.id_obat = obat.id_obat', 'LEFT')
                ->join('pasien', 'rekam_medis.id_pasien = pasien.id_pp', 'LEFT')
                ->join('karyawan', 'rekam_medis.id_dokter = karyawan.id', 'LEFT')
                ->where('rekam_medis.id_dokter', $this->session->userdata('id'), false)
                ->group_by('transaksi.id_rekammedis')
                ->get()
                ->result();
        return $exec;
    }

    function Detail($id) {
        $exec = $this->db->select('pasien.nama_pasien,pasien.jenis_kelamin,pasien.tgl_lahir,pasien.`status`,pasien.Pekerjaan,pasien.Alamat,rekam_medis.tgl_periksa,rekam_medis.anamnesa,rekam_medis.treatment,karyawan.nama AS dokter,karyawan.telepon,transaksi.qty,obat.nama_obat,obat.harga,(SELECT SUM(obat.harga * transaksi.qty) FROM transaksi LEFT JOIN obat ON transaksi.id_obat = obat.id_obat WHERE transaksi.id_rekammedis=' . $id . ') AS total,obat.satuan')
                ->from('transaksi')
                ->join('rekam_medis', 'transaksi.id_rekammedis = rekam_medis.id_rm', 'LEFT')
                ->join('pasien', 'rekam_medis.id_pasien = pasien.id_pp', 'LEFT')
                ->join('karyawan', 'rekam_medis.id_dokter = karyawan.id', 'LEFT')
                ->join('obat', 'transaksi.id_obat = obat.id_obat', 'LEFT')
                ->where('transaksi.id_rekammedis', $id)
                ->get()
                ->result();
        return $exec;
    }
    public function Bulanan(){
        $data = $this->db->select('concat(MONTHNAME(b.tgl_periksa), " " ,Year(b.tgl_periksa)) as "tahun/bulan", MONTHNAME(b.tgl_periksa) as bulan, Year(b.tgl_periksa) as tahun,  sum(c.harga*a.qty) as total_pendapatan')
                        ->from('transaksi a')
                        ->join('rekam_medis b','a.id_rekammedis = b.id_rm', 'LEFT')
                        ->join('obat c', 'a.id_obat = c.id_obat','Left')
                        ->group_by('concat(MONTHNAME(b.tgl_periksa), " " ,Year(b.tgl_periksa))')
                        ->get();
        return $data->result();
    }

}
