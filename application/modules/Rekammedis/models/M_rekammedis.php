<?php
defined('BASEPATH') or exit ('NO DIRECT SCRIPT ALLOWED');
/**
 * 
 */
class M_Rekammedis extends CI_Model{
	
	function tampil_data()
	{
		$exec = $this->db->select('data_pasien.nama_pasien,rekam_medis.tgl_periksa,rekam_medis.anamnesa,rekam_medis.treatment,rekam_medis.nama_obat,dokter.nama_dokter')
				->from('data_pasien')
				->JOIN('rekam_medis','data_pasien.id_pp = rekam_medis.id_pasien','LEFT')
				->JOIN('dokter','rekam_medis.id_dokter = dokter.id_dokter','LEFT')
				->get()
				->result();
				return $exec;
	}
}
