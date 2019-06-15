<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pasien extends CI_Model {

    function index() {
        $exec = $this->db->select('data_pasien.id_pp,data_pasien.nama_pasien,data_pasien.jenis_kelamin,(YEAR(CURDATE()) - YEAR(data_pasien.tgl_lahir) ) AS umur,data_pasien.`status`,data_pasien.Pekerjaan,data_pasien.Alamat')
                ->from('data_pasien')
                ->get()
                ->result();
        return $exec;
    }

}
