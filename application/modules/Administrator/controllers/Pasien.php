<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pasien
 *
 * @author casug
 */
class Pasien extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_User' => 'M_User', 'M_datapasien' => 'M_datapasien']);
        $this->result = $this->M_User->Checkuser();
    }

    function index() {
        $data = ['title' => 'Data Pasien', 'index' => $this->M_datapasien->tampil_data()];
        $data['content'] = $this->load->view('v_tampil_datapasien', $data, True);
        $this->load->view('template', $data);
    }

    function tambah() {
        $data = [
            'title' => 'Tambah Data Pasien',
            'content' => $this->load->view('v_input_datapasien', '', True)
        ];
        $this->load->view('template', $data);
    }

    function Simpan() {
        $data = [
            'nama_pasien' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jkel'),
            'tgl_lahir' => $this->input->post('lahir'),
            'status' => $this->input->post('menikah'),
            'pekerjaan' => $this->input->post('gawe'),
            'alamat' => $this->input->post('alamat')
        ];
        $exec = $this->M_datapasien->Simpan($data);
        if ($exec == true) {
            echo '<script>alert("data pasien berhasil ditambah !");</script>';
        } else {
            echo '<script>alert("data pasien berhasil ditambah !");</script>';
        }
    }

}
