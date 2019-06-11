<?php
defined('BASEPATH') or exit ('NO DIRECT SCRIPT ALLOWED');
/**
 * 
 */
class M_obat extends CI_Model{
	
	function tampil_data()
	{
		return $this->db->select('*')
				->from('Obat')
				->get();

	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
}
