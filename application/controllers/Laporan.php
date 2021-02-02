<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Laporan extends CI_Controller {
    public function __construct()
        {   
            parent::__construct();
            $this->load->library('Pdf');
            $this->load->model('produk_model');
        }
   
    public function Cetak_Disetujui()
        {
            $data['produk'] = $this->produk_model->GetDataSetuju();
            $this->load->view('cetak/cetak_disetujui', $data);
    }

    public function Cetak_Ditolak()
        {
            $data['produk'] = $this->produk_model->GetDataDitolak();
            $this->load->view('cetak/cetak_tidakdisetujui', $data);
    }   

    public function Cetak_Individu()
        {
            $data['produk'] = $this->produk_model->GetDataWhere('tbl_cuti');
            $this->load->view('cetak/cetak_individu', $data);
    }

    public function DataTU()
    {
        $data['PengajuanDitolak']=$this->MSudi->GetDataDitolak();
            $data['content']='pengajuan/v_PengajuanDitolak';
    }
}
 