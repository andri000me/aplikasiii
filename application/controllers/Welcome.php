<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='tampil/VBlank';
			$this->load->view('tampil/VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	public function DataPegawai()
	{
		if($this->uri->segment(4)=='view')
		{
			$nip=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_pegawai','nip',$nip)->row();
			$data['detail']['nip']= $tampil->nip;
			$data['detail']['gelar_awal']= $tampil->gelar_awal;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['gelar_akhir']= $tampil->gelar_akhir;
            		$data['detail']['tempat_lahir']= $tampil->tempat_lahir;
            		$data['detail']['alamat']= $tampil->alamat;
            		$data['detail']['agama']= $tampil->agama;
            		$data['detail']['pangkat']= $tampil->pangkat;
            		$data['detail']['jabatan']= $tampil->jabatan;
            		$data['detail']['unit_bidang']= $tampil->unit_bidang;
            		$data['detail']['status_pegawai']= $tampil->status_pegawai;
			$data['content']='datapegawai/v_editdatapegawai';
		}
		else
		{
			

			$data['DataPegawai']=$this->MSudi->GetData('tbl_pegawai');
			$data['content']='datapegawai/v_pegawai';
		}

		$this->load->view('tampil/VBackend',$data);
	}


	public function tambahdatapegawai()
	{
		$data['content']='datapegawai/v_tambahdatapegawai';
		$this->load->view('tampil/VBackend',$data);
	}

	public function AddDataPegawai()
	{
		 $add['nip']=$this->input->post('nip');
         	 $add['gelar_awal']= $this->input->post('gelar_awal');
         	 $add['nama']= $this->input->post('nama');  
         	 $add['gelar_akhir']= $this->input->post('gelar_akhir');
         	 $add['tempat_lahir']= $this->input->post('tempat_lahir');
         	 $add['alamat']= $this->input->post('alamat');
         	 $add['agama']= $this->input->post('agama');
         	 $add['pangkat']= $this->input->post('pangkat');
         	 $add['jabatan']= $this->input->post('jabatan');
         	 $add['status_pegawai']= $this->input->post('status_pegawai');
         	 $add['unit_bidang']= $this->input->post('unit_bidang');
        	 $this->MSudi->AddData('tbl_pegawai',$add) ;
        	 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><h4 class="alert-heading">Data Berhasil Ditambahkan</h4><p></p></div>');
        	 redirect(site_url('Welcome/DataPegawai'));
	}

	
	public function UpdateDataPegawai()
	{
		 $nip=$this->input->post('nip');
		 	 $update['gelar_awal']= $this->input->post('gelar_awal');
		 	 $update['nama']= $this->input->post('nama');
         	 $update['gelar_akhir']= $this->input->post('gelar_akhir');
         	 $update['tempat_lahir']= $this->input->post('tempat_lahir');
         	 $update['alamat']= $this->input->post('alamat');
         	 $update['agama']= $this->input->post('agama');
         	 $update['pangkat']= $this->input->post('pangkat');
         	 $update['jabatan']= $this->input->post('jabatan');
         	 $update['unit_bidang']= $this->input->post('unit_bidang');
         	 $update['status_pegawai']= $this->input->post('status_pegawai');
          	 $this->MSudi->UpdateData('tbl_pegawai','nip',$nip,$update);
          	 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><h4 class="alert-heading">Data Berhasil DiUbah</h4><p></p></div>');
		 redirect(site_url('Welcome/DataPegawai'));
	}



	public function DeleteDataPegawai()
	{
		 $nip=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_pegawai','nip',$nip);
        	 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><h4 class="alert-heading">Data Berhasil DiHapus</h4><p></p></div>');
        	 redirect(site_url('Welcome/DataPegawai'));
	}


//////////////////////////////// Datapensiun////////////////////////////////////////////////////////////////////////////////////////////////

	public function DataPensiun()
	{		
		{	
			$data['DataPegawai']=$this->MSudi->GetData('tbl_pegawai');
			$data['content']='datapegawai/VPensiun';
		}


		$this->load->view('tampil/VBackend',$data);
	}

	public function DetailPegawai()
	{
		$data ['title'] = 'Detail Pegawai';
		$data['DataPegawai'] = $this->db->get_where('tbl_pegawai')->row_array();
		$nip=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_pegawai','nip',$nip)->row();
			$data['detail']['nip']= $tampil->nip;
			$data['detail']['gelar_awal']= $tampil->gelar_awal;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['gelar_akhir']= $tampil->gelar_akhir;
            		$data['detail']['tempat_lahir']= $tampil->tempat_lahir;
            		$data['detail']['agama']= $tampil->agama;
            		$data['detail']['pangkat']= $tampil->pangkat;
            		$data['detail']['jabatan']= $tampil->jabatan;
            		$data['detail']['unit_bidang']= $tampil->unit_bidang;
            		$data['detail']['status_pegawai']= $tampil->status_pegawai;
			$data['content']='datapegawai/v_detailpegawai';
			$this->load->view('tampil/VBackend',$data);
	}
	

//////////////////////////////// Datapensiun////////////////////////////////////////////////////////////////////////////////////////////////



	public function PengajuanCuti()
	{
		if($this->uri->segment(4)=='view')
		{
			$kd_cuti=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_cuti','kd_cuti',$kd_cuti)->row();
			$data['detail']['kd_cuti']= $tampil->kd_cuti;
			$data['detail']['nip']= $tampil->nip;			
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['tgl_pengajuan']= $tampil->tgl_pengajuan;
            		$data['detail']['tgl_mulai']= $tampil->tgl_mulai;
            		$data['detail']['tgl_akhir']= $tampil->tgl_akhir;
            		$data['detail']['jenis_cuti']= $tampil->jenis_cuti;
            		$data['detail']['jenis_cuti']= $tampil->jenis_cuti;
            		$data['detail']['alasan']= $tampil->alasan;
            		$data['detail']['persetujuan']= $tampil->persetujuan;
			$data['content']='cuti/v_editPengajuanCuti';
		}
		else
		{	
			$data['PengajuanCuti']=$this->MSudi->GetData('tbl_cuti');
			$data['Count'] = $this->MSudi->CountPengajuan();
			$data['CountDisetujui'] = $this->MSudi->CountDisetujui();
			$data['CountTidakDisetujui'] = $this->MSudi->CountTidakDisetujui();
			$data['content']='cuti/v_datapengajuan';
		}


		$this->load->view('tampil/VBackend',$data);
	}

	
	public function PersetujuanPengajuanCuti()
	{
		$kd_cuti=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_cuti','kd_cuti',$kd_cuti)->row();
			$data['detail']['kd_cuti']= $tampil->kd_cuti;
			$data['detail']['nip']= $tampil->nip;			
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['tgl_pengajuan']= $tampil->tgl_pengajuan;
            		$data['detail']['tgl_mulai']= $tampil->tgl_mulai;
            		$data['detail']['tgl_akhir']= $tampil->tgl_akhir;
            		$data['detail']['jenis_cuti']= $tampil->jenis_cuti;
            		$data['detail']['alasan']= $tampil->alasan;
            		$data['detail']['persetujuan']= $tampil->persetujuan;
			$data['content']='cuti/v_editPersetujuanPengajuanCuti';
			$this->load->view('tampil/VBackend',$data);
	}

	public function VPengajuanCuti()
	{

		$data['content']='pengajuan/v_pengajuancuti';
		$this->load->view('tampil/VBackend',$data);
	}

	public function AddPengajuanCuti()
	{
		 $add['nip']=$this->input->post('nip');
         	 $add['nama']= $this->input->post('nama');  
         	 $add['alasan']= $this->input->post('alasan');  
         	 $add['tgl_mulai']= $this->input->post('tgl_mulai');
         	 $add['tgl_akhir']= $this->input->post('tgl_akhir');
         	  $add['jenis_cuti']= $this->input->post('jenis_cuti');
         	 $add['alamat_selama_cuti']= $this->input->post('alamat_selama_cuti');
         	 $add['jenis_cuti']= $this->input->post('jenis_cuti');
         	 $add['persetujuan']= $this->input->post('persetujuan');
        	 $this->MSudi->AddData('tbl_cuti',$add);
        	 redirect(site_url('Welcome/PengajuanCuti'));
	}
	public function UpdatePengajuanCuti()
	{
		 $kd_cuti=$this->input->post('kd_cuti');
		 	 $update['nip']= $this->input->post('nip');
		 	 $update['nama']= $this->input->post('nama');
         	 $update['tgl_mulai']= $this->input->post('tgl_mulai');
         	 $update['tgl_akhir']= $this->input->post('tgl_akhir');
         	 $update['jenis_cuti']= $this->input->post('jenis_cuti');
         	 $update['alasan']= $this->input->post('alasan');
         	 $update['persetujuan']= $this->input->post('persetujuan');
          	 $this->MSudi->UpdateData('tbl_cuti','kd_cuti',$kd_cuti,$update);
          	 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><h4 class="alert-heading">Data Berhasil Ditambahkan</h4><p></p></div>');
		 redirect(site_url('Welcome/PengajuanCuti'));
	}

	public function DataCuti()
	{
			if($this->uri->segment(4)=='view')
		{
			$data['DataPangkat'] = $this->MSudi->GetData('tref_pangkat');
				$data['DataJabatan'] = $this->MSudi->GetData('tref_jabatan');
				$data['DataUnitunit_Bidang'] = $this->MSudi->GetData('tref_unit_unit_bidang');
				$data['JenisCuti'] = $this->MSudi->GetData('tref_jenis_cuti');
			$kd_cuti=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_cuti','kd_cuti',$kd_cuti)->row();
			$data['detail']['kd_cuti']= $tampil->kd_cuti;
			$data['detail']['nip']= $tampil->nip;			
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['tgl_mulai']= $tampil->tgl_mulai;
            		$data['detail']['tgl_akhir']= $tampil->tgl_akhir;
            		$data['detail']['jenis_cuti']= $tampil->jenis_cuti;
            		$data['detail']['alasan']= $tampil->alasan;
            		$data['detail']['persetujuan']= $tampil->persetujuan;
            		$data['detail']['alamat_selama_cuti']= $tampil->alamat_selama_cuti;
			$data['content']='cuti/v_editdatacuti';
		}
		else
		{	

			$data['DataCuti']=$this->MSudi->GetDataSetuju();
			$data['content']='cuti/v_datacuti';
		}


		$this->load->view('tampil/VBackend',$data);
	}

	public function DeleteDataCuti()
	{
		 $kd_cuti=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_cuti','kd_cuti',$kd_cuti);
        	 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><h4 class="alert-heading">Data Berhasil DiHapus</h4><p></p></div>');
        	 redirect(site_url('Welcome/DataCuti'));
	}

	public function Pengajuan_Disetujui()
	{
			$data['PengajuanDisetujui']=$this->MSudi->GetDataSetuju();
			$data['content']='pengajuan/v_PengajuanDisetujui';
		$this->load->view('tampil/VBackend',$data);
	}


	public function Pengajuan_Ditolak()
	{
			$data['PengajuanDitolak']=$this->MSudi->GetDataDitolak();
			$data['content']='pengajuan/v_PengajuanDitolak';
		$this->load->view('tampil/VBackend',$data);
	}

	
	public function Pengajuan_Pending()
	{
		if($this->uri->segment(4)=='view')
		{
			
			$kd_cuti=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_cuti','kd_cuti',$kd_cuti)->row();
			$data['detail']['kd_cuti']= $tampil->kd_cuti;
			$data['detail']['nip']= $tampil->nip;			
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['tgl_mulai']= $tampil->tgl_mulai;
            		$data['detail']['tgl_akhir']= $tampil->tgl_akhir;
            		$data['detail']['jenis_cuti']= $tampil->jenis_cuti;
            		$data['detail']['alasan']= $tampil->alasan;
            		$data['detail']['persetujuan']= $tampil->persetujuan;
            		$data['detail']['alamat_selama_cuti']= $tampil->alamat_selama_cuti;
			$data['content']='pengajuan/v_editPengajuanPending';
		}
		else
		{	
			$data['PengajuanPending']=$this->MSudi->GetDataPersetujuan();

			$data['content']='pengajuan/v_pengajuanpending';
		}


		$this->load->view('tampil/VBackend',$data);
	}

	public function UpdatePengajuanPending()
	{
		 $kd_cuti=$this->input->post('kd_cuti');
		 $update['nip']= $this->input->post('nip');
         $update['nama']= $this->input->post('nama');
		 $update['tgl_mulai']= $this->input->post('tgl_mulai');
         $update['tgl_akhir']= $this->input->post('tgl_akhir');
		 $update['jenis_cuti']= $this->input->post('jenis_cuti');
         $update['alasan']= $this->input->post('alasan');
		 $update['persetujuan']= $this->input->post('persetujuan');
         $update['alamat_selama_cuti']= $this->input->post('alamat_selama_cuti');
         $this->MSudi->UpdateData('tbl_cuti','kd_cuti',$kd_cuti,$update);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><h4 class="alert-heading">Pengajuan Berhasil Ditambahkan</h4><p></p></div>');
		 redirect(site_url('Welcome/Pengajuan_Pending'));
	
	}

	public function Logout()
	{
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><h4 class="alert-heading">Anda Berhasil Logout</h4><p></p></div>');
		$this->load->library('session');
		$this->session->unset_userdata('login/Login');
		redirect(site_url('Login'));
	}

}