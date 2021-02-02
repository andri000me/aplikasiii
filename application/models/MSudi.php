<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSudi extends CI_Model
{
    function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere($tabel,$id,$nilai)
    {
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query;
    }

    public function get_product_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->like('nama',$keyword);
        $this->db->or_like('nip',$keyword);
        return $this->db->get()->result();
    }

    function GetDataJoin($tabel, $tabel1,$tabel2, $tabel3, $onjoin)
    {
        $this->db->from($tabel1);
        $this->db->join($tabel2,$tabel3, $onjoin);
        $query = $this->db->get($tabel);
        return $query->result();
    }

    function GetDataJoin2($tabel, $tabel1,$tabel2, $onjoin)
    {
        $this->db->from($tabel1);
        $this->db->join($tabel2, $onjoin);
        $query = $this->db->get($tabel);
        return $query->result();
    }

    function GetDataSetuju()
    {
        $query = "SELECT * FROM tbl_cuti WHERE persetujuan = 'Disetujui' ";
        return $this->db->query($query)->result();
    }

    function GetDataDitolak()
    {
        $query = "SELECT * FROM tbl_cuti WHERE persetujuan = 'Tidak Disetujui' ";
        return $this->db->query($query)->result();
    }

    function GetDataPersetujuan()
    {
        $query = "SELECT * FROM tbl_cuti WHERE persetujuan = 'Menunggu Persetujuan' ";
        return $this->db->query($query)->result();
    }

    function CountPengajuan()
    {
        $this->db->from('tbl_cuti');
        $this->db->where('persetujuan',"Menunggu Persetujuan");
        return $this->db->count_all_results();
    }

     function CountDisetujui()
    {
        $this->db->from('tbl_cuti');
        $this->db->where('persetujuan',"Disetujui");
        return $this->db->count_all_results();
    }

    function CountTidakDisetujui()
    {
        $this->db->from('tbl_cuti');
        $this->db->where('persetujuan',"Tidak Disetujui");
        return $this->db->count_all_results();
    }

     function GetDataTU()
    {
        $query = "SELECT * FROM tbl_pegawai WHERE unit_bidang = 'TU' ";
        return $this->db->query($query)->result();
    }

    function GetDataP2E()
    {
        $query = "SELECT * FROM tbl_pegawai WHERE unit_bidang = 'P2E' ";
        return $this->db->query($query)->result();
    }

    function GetDataP3KT()
    {
        $query = "SELECT * FROM tbl_pegawai WHERE unit_bidang = 'P3KT' ";
        return $this->db->query($query)->result();
    }
    function GetDataP3JFA()
    {
        $query = "SELECT * FROM tbl_pegawai WHERE unit_bidang = 'P3JFA' ";
        return $this->db->query($query)->result();
    }

}