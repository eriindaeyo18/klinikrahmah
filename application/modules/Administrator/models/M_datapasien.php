<?php

defined('BASEPATH') or exit('NO DIRECT SCRIPT ALLOWED');

/**
 * 
 */
class M_datapasien extends CI_Model {

    function tampil_data() {
        return $this->db->select('*')->from('pasien')->get()->result();
    }

    function input_data($data, $table) {
        $this->db->insert($table, $data);
    }

    function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

    function Simpan($data) {
        $this->db->insert('pasien', $data);
        $this->db->trans_begin();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

}
