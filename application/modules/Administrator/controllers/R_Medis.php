<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of R_Medis
 *
 * @author casug
 */
class R_Medis extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_User' => 'M_User', 'M_Medis' => 'M_Medis']);
        $this->result = $this->M_User->Checkuser();
    }

    function index() {
        $data = ['title' => 'Rekam Medis | KLINIK RAHMAH', 'formtitle' => '', 'value' => $this->M_Medis->tampil_data()];
        $data['content'] = $this->load->view('v_tampil_rekammedis', $data, true);
        $this->load->view('template', $data);
    }

}
