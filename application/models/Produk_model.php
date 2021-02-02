<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Produk_model extends CI_Model {
 
    public function get_produk()
    {
        $query = $this->db->get('tbl_cuti');
        return $query->result_array();
    }

    function GetDataSetuju()
    {
        $query = "SELECT * FROM tbl_cuti WHERE persetujuan = 'Disetujui' ";
        return $this->db->query($query)->result_array();
    }

    function GetDataDitolak()
    {
        $query = "SELECT * FROM tbl_cuti WHERE persetujuan = 'Tidak Disetujui' ";
        return $this->db->query($query)->result_array();
    }

    function GetDataPersetujuan()
    {
        $query = "SELECT * FROM tbl_cuti WHERE persetujuan = 'Menunggu Persetujuan' ";
        return $this->db->query($query)->result();
    }

}
?>