<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Rekammedis extends MY_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('M_rekammedis');

	}
	
	public function index(){
		$data['index'] = $this->M_rekammedis->tampil_data();
		$data['content'] = $this->load->view('v_tampil_rekammedis',$data, True);
		$data['sidebar'] =$this->load->view('sidebar','', TRUE);
		$this->load->view('template',$data);
		
	}
}