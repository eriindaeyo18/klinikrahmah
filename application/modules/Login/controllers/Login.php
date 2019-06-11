<?php

/**
 * 
 */
class Login extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	function index(){
		
		$data['content'] = $this->load->view('v_login');
	}

	function proses(){
		$data = array('username' => $this->input->post('username'), 'password' => $this->input->post('password'));
		$panggil = $this->M_login->login($data);
		$session = array('username' =>$panggil[0]->username,'lvl'=>$panggil[0]->level);
		$this->session->set_userdata($session);
		if ($panggil == true) {
			if ($panggil[0]->level == 1) {
				redirect('Dokter/Dashboard');
			}elseif ($panggil[0]->level == 2) {
				redirect('Perawat/Dashboard');
			}else{
				redirect('FO/Dashboard');
			}
		}
		else {
			redirect('Login/index','refersh');
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Login','refersh');
	}
		
}
?>