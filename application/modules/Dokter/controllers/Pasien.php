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
        $this->load->model(array('M_User' => 'M_User', 'M_Pasien' => 'M_Pasien'));
        $this->result = $this->M_User->Checkuser();
    }

    function index() {
        $data = [
            'title' => 'Data Pasien | KLINIK RAHMAH',
            'value' => $this->M_Pasien->index()
        ];
        $data['content'] = $this->load->view('V_Pasien', $data, true);
        $this->load->view('template', $data);
    }

}
