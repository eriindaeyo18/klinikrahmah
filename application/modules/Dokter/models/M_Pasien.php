<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pasien extends CI_Model {

    function index() {
        $exec = $this->db->select('pasien.id_pp,pasien.nama_pasien,pasien.jenis_kelamin,(YEAR(CURDATE()) - YEAR(pasien.tgl_lahir) ) AS umur,pasien.`status`,pasien.Pekerjaan,pasien.Alamat')
                ->from('pasien')
                ->get()
                ->result();
        return $exec;
    }

}
