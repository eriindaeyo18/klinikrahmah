<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Obat
 *
 * @author casug
 */
class Obat extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_User' => 'M_User', 'M_Obat' => 'M_Obat']);
        $this->result = $this->M_User->Checkuser();
    }

    function index() {
        $data = ['title' => 'Data Obat | KLINIK RAHMAH', 'obat' => $this->M_Obat->index()];
        $data['content'] = $this->load->view('v_obat', $data, true);
        $this->load->view('template', $data);
    }

    function Tambah() {
        $data = [
            'nama_obat' => $this->input->post('nama_obat'),
            'stok' => $this->input->post('stok'),
            'satuan' => $this->input->post('satuan'),
            'harga' => $this->input->post('harga')
        ];
        $tambah = $this->M_Obat->Tambah($data);
        if ($tambah == true) {
            $response = array('status' => 200, 'msg' => 'Success, data obat berhasil disimpan');
        } else {
            $response = array('status' => 201, 'msg' => 'Error, data obat gagal disimpan');
        }
        $this->output
                ->set_status_header($response['status'])
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

    function Edit($id) {
        $obt = $this->M_Obat->Edit($id);
        if ($obt == true) {
            $response = ['status' => 200, 'obat' => $obt];
        } else {
            $response = ['status' => 201, 'msg' => 'Error while load data !'];
        }
        $this->output
                ->set_status_header($response['status'])
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

    function Update() {
        $data = [
            'id_obat' => $this->input->post('id_obat'),
            'nama_obat' => $this->input->post('namaobat'),
            'stok' => $this->input->post('stokobat'),
            'satuan' => $this->input->post('satuanobat'),
            'harga' => $this->input->post('hargaobat')
        ];
        $exec = $this->M_Obat->Update($data);
        if ($exec == true) {
            echo '<script>alert("data obat berhasil diperbarui");window.location.href="https://localhost/klinikrahmah/Administrator/Obat/index/";</script>';
        } else {
            echo '<script>alert("data obat gagal diperbarui");window.location.href="https://localhost/klinikrahmah/Administrator/Obat/index/";</script>';
        }
    }

}
