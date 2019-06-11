<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Transaksi extends MY_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('M_transaksi');

	}
	

	public function index(){
		$data['index'] = $this->M_transaksi->tampil_data()
		$data['content'] = $this->load->view('v_tampil_transaksi',$data, True);
		$data['sidebar'] =$this->load->view('sidebar','', TRUE);
		$this->load->view('template',$data);
		
	}

	function tambah(){
		$data['content'] = $this->load->view('v_input_transaksi','', True);
		$data['sidebar'] =$this->load->view('sidebar','', TRUE);
		$this->load->view('template',$data);
	}

	function tambah_aksi(){
	$data = array(
		'id_pasien' => $this->input->post('nama_pasien'),
		'tgl_periksa' => $this->input->post('tgl_periksa'), 
		'id_rm' => $this->input->post('id_rm'),
		'id_fo' => $this->input->post('obat'),
		'harga' => $this->input->post('harga'),
		'id_obat' => $this->input->post('total_harga')
	);

	$this->M_transaksi->input_data($data);
	redirect('Transaksi/index');

	}

	function delete(){
		$where = array('id' => $id);
		$this->M_transaksi->hapus_data($where);
		redirect('Transaksi/index');

	}

	function edit(){
		
	}
}