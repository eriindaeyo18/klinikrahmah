<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Dashboard extends MY_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('M_datadash');
	}
	

	public function index(){
//		$data['index'] = $this->M_datadash->tampil_data()->result();
		$data['content'] = $this->load->view('v_dashboard','', True);
		$data['sidebar'] =$this->load->view('sidebar','', TRUE);
		$this->load->view('template',$data);
	}
		
}