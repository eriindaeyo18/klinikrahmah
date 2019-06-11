<?php
defined('BASEPATH') or exit ('NO DIRECT SCRIPT ALLOWED');
/**
 * 
 */
class M_transaksi extends CI_Model{
	
	function tampil_data()
	{
		return $this->db->select('data_pasien.nama_pasien,rekam_medis.tgl_periksa,rekam_medis.treatment,obat.nama_obat,transaksi.qty,obat.Harga,SUM(obat.Harga * transaksi.qty) AS tot_harga')
				->from('transaksi')
				->join('data_pasien','transaksi.id_pasien = data_pasien.id_pp','LEFT')
				->join('obat','transaksi.id_obat = obat.id_obat','LEFT')
				->join('rekam_medis','transaksi.id_rm = rekam_medis.id_rm','LEFT')
				->get()
				->result();

	}

	function input_data($data){
		$this->db->insert('transaksi',$data);
	}

	function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('transaksi');
	}

	function edit_data($where){
		return $this->db->get_where('transaksi',$where);
	}
}
