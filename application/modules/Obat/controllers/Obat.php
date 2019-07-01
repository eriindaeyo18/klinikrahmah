<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Obat extends MY_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Obat');

	}
	 
	public function index(){
		$data['index'] = $this->M_obat->tampil_data()->result();
		$data['content'] = $this->load->view('v_tampil_obat',$data, True);
		$data['sidebar'] =$this->load->view('sidebar','', TRUE);
		$this->load->view('template',$data);
		
	}

	function tambah(){
		$data['content'] = $this->load->view('v_input_obat','', True);
		$data['sidebar'] =$this->load->view('sidebar','', TRUE);
		$this->load->view('template',$data);
	}

	function tambah_aksi(){
		$nama_obat = $this->input->post('nama_obat');
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');		

	$data = array(
		'nama_obat' => $nama_obat,
		'stok' => $stok, 
		'harga' => $harga,
	
	);

	$this->M_datapasien->input_data($data,'Obat');
	redirect('Obat/index');

	}

	function delete(){
		$where = array('id_obat' => $id_obat);
		$this->M_Datapasien->hapus_data($where,'Obat');
		redirect('Obat/index');

	}

	function edit(){
		
	}
}