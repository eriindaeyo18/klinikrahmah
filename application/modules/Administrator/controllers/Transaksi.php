<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transaksi
 *
 * @author casug
 */
class Transaksi extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_User' => 'M_User', 'M_Transaksi' => 'M_Transaksi']);
        $this->result = $this->M_User->Checkuser();
    }

    function index() {
        $data = ['title' => 'Data Transaksi | KLINIK RAHMAH', 'formtitle' => '', 'index' => $this->M_Transaksi->tampil_data()];
        $data['content'] = $this->load->view('V_Transaksi', $data, true);
        $this->load->view('template', $data);
    }

    function Tambah($idpasien) {
        $data = ['title' => 'Tambah Data Transaksi | KLINIK RAHMAH', 'formtitle' => '', 'pasien' => $this->M_Transaksi->Pasien($idpasien), 'dokter' => $this->M_Transaksi->Dokter(), 'obat' => $this->M_Transaksi->Obat()];
        $data['content'] = $this->load->view('V_transaksitambah', $data, true);
        $this->load->view('template', $data);
    }

    function Simpan() {
        $data = [
            'id_rm' => '',
            'tgl_periksa' => date("Y-m-d H:i:s"),
            'anamnesa' => $this->input->post('anamnesa'),
            'treatment' => $this->input->post('treatment'),
            'id_pasien' => $this->input->post('idpasien'),
            'id_dokter' => $this->input->post('dokter')
        ];
        $transaksi = [
            'id_obat' => $this->input->post('obat'),
            'qty' => $this->input->post('qty')
        ];
        $rm = $this->M_Transaksi->Tambah($data, $transaksi);
        if ($rm == true) {
            echo '<script>alert("simpan rekam medis berhasil");window.location.href="https://localhost/klinikrahmah/Administrator/R_Medis/index";</script>';
        } else {
            echo '<script>alert("Error, data gagal disimpan !");;window.location.href="https://localhost/klinikrahmah/Administrator/Transaksi/index";</script>';
        }
    }

    function Obat($obat) {
        $this->M_Transaksi->Harga($obat);
    }

}
