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
        $this->load->model('M_User');
        $this->result = $this->M_User->Checkuser();
    }

    function index() {
        $data = ['title' => 'Dashboard Dokter | KLINIK RAHMAH'];
        $data['content'] = $this->load->view('v_dashboard', '', true);
        $this->load->view('template', $data);
    }

}
