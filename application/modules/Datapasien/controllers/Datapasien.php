<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Datapasien extends MY_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('M_datapasien');

	}
	

	public function index(){
		$data['index'] = $this->M_datapasien->tampil_data()->result();
		$data['content'] = $this->load->view('v_tampil_datapasien',$data, True);
		$data['sidebar'] =$this->load->view('sidebar','', TRUE);
		$this->load->view('template',$data);
		
	}

	function tambah(){
		$data['content'] = $this->load->view('v_input_datapasien','', True);
		$data['sidebar'] =$this->load->view('sidebar','', TRUE);
		$this->load->view('template',$data);
	}

	function tambah_aksi(){
		$nama_pasien = $this->input->post('nama_pasien');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$status = $this->input->post('status');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = $this->input->post('Alamat');

		

	$data = array(
		'nama_pasien' => $nama_pasien,
		'jenis_kelamin' => $jenis_kelamin, 
		'tgl_lahir' => $tgl_lahir,
		'status' => $status,
		'Pekerjaan' => $Pekerjaan,
		'Alamat' => $Alamat,
	
	
	);

	$this->M_datapasien->input_data($data,'data_pasien');
	redirect('Datapasien/index');

	}

	function delete(){
		$where = array('id' => $id);
		$this->M_Datapasien->hapus_data($where,'data_pasien');
		redirect('Datapasien/index');

	}

	function edit(){
		
	}
}