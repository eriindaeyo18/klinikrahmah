<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lap_transaksi
 *
 * @author casug
 */
class Lap_transaksi extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_User' => 'Auth', 'M_Lap_transaksi' => 'trans']);
        $this->result = $this->Auth->Checkuser();
    }

    function index() {
        $data = ['title' => 'Dashboard Dokter | KLINIK RAHMAH', 'value' => $this->trans->index()];
        $data['content'] = $this->load->view('V_Lap_transaksi', $data, true);
        $this->load->view('template', $data);
    }

    function Detail($id) {
        $data = ['title' => 'Dashboard Dokter | KLINIK RAHMAH', 'value' => $this->trans->Detail($id)];
        $data['content'] = $this->load->view('V_detailtrans', $data, true);
        $this->load->view('template', $data);
    }
    function lapBulanan(){
       
            $data = ['title' => 'Dashboard Dokter | KLINIK RAHMAH', 'value' => $this->trans->Bulanan()];
            $data['content'] = $this->load->view('v_lapBulanan', $data, true);
            // var_dump($data);
            $this->load->view('template', $data);
    }

}
