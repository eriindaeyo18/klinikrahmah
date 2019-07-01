<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Transaksi
 *
 * @author casug
 */
class M_Transaksi extends CI_Model {

    function tampil_data() {
        return $this->db->select()->from('pasien')->get()->result();
    }

    function Tambah($data, $transaksi) {
        $idrm = $this->db->select('MAX( rekam_medis.id_rm ) +1 AS id ')->from('rekam_medis')->get()->result();
        $this->db->trans_begin();
        $this->db->insert('rekam_medis', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            if ($transaksi['id_obat'] == false) {
                $this->db->trans_commit();
                return true;
            } else {
                $i = 0;
                for ($i = 0; $i < count($transaksi['id_obat']); $i++) {
                    $this->db->set('id_rekammedis', $idrm[0]->id);
                    $this->db->set('id_obat', $transaksi['id_obat'][$i]);
                    $this->db->set('qty', $transaksi['qty'][$i]);
                    $this->db->insert('transaksi');
                }
                $this->db->trans_commit();
                return true;
            }
        }
    }

    function Pasien($id) {
        $exec = $this->db->select()
                ->from('pasien')
                ->where('id_pp', $id)
                ->get()
                ->result();
        return $exec;
    }

    function Dokter() {
        $exec = $this->db->select()
                ->from('karyawan')
                ->where('jabatan', 1)
                ->get()
                ->result();
        return $exec;
    }

    function Obat() {
        $exec = $this->db->select()
                ->from('obat')
                ->get()
                ->result();
        return $exec;
    }

}
