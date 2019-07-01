<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Obat
 *
 * @author casug
 */
class M_Obat extends CI_Model {

    function index() {
        return $this->db->select()->from('obat')->get()->result();
    }

    function Tambah($data) {
        $this->db->trans_begin();
        $this->db->insert('obat', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    function Edit($data) {
        $exec = $this->db->select()->from('obat')->where('id_obat', $data)->get()->result();
        return $exec;
    }

    function Update($data) {
        $this->db->trans_begin();
        $this->db->set(['nama_obat' => $data['nama_obat'], 'stok' => $data['stok'], 'satuan' => $data['satuan'], 'harga' => $data['harga']]);
        $this->db->where('id_obat', $data['id_obat']);
        $this->db->update('obat');
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

}
