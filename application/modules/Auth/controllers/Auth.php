<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(['M_login', 'M_User']);
    }

    function Login() {
        if ($this->session->userdata('username') == '') {
            $this->load->View('v_login');
        } else {
            if ($this->session->userdata('lvl') == 1) {
                redirect('Dokter/Dashboard/index', 'refresh');
            } elseif ($this->session->userdata('lvl') == 2) {
                redirect('Administrator/Dashboard/index', 'refresh');
            } elseif ($this->session->userdata('lvl') == 3) {
                redirect('Perawat/Dashboard/index', 'refresh');
            } else {
                $this->load->View('v_login');
            }
        }
    }

    function Proses() {
        $data = ['username' => $this->input->post('username'), 'password' => $this->input->post('password')];
        $panggil = $this->M_login->login($this->security->xss_clean($data));
        if ($panggil == true) {
            $session = ['id' => $panggil[0]->id, 'username' => $panggil[0]->username, 'lvl' => $panggil[0]->level];
            $this->session->set_userdata($session);
            $response = [
                'status' => 200,
                'lvl' => $panggil[0]->level
            ];
        } else {
            $response = [
                'status' => 201,
                'message' => 'Maaf, username dan password Anda salah. Harap periksa kembali username dan password Anda.'
            ];
        }
        $this->output->set_status_header($response['status'])->set_content_type('application/json', 'utf-8')->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
        exit;
    }

    function Logout() {
        $this->session->sess_destroy();
        redirect('Auth/Login', 'refersh');
    }

}
