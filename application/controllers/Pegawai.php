<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pegawai extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function BidangTU(){
		$data['DataTU'] = $this->MSudi->GetDataTU();
		$data['content'] = 'pegawai/dataTU';
		$this->load->view('tampil/VBackend', $data);
	}

	public function BidangP2E(){
		$data['DataP2E'] = $this->MSudi->GetDataP2E();
		$data['content'] = 'pegawai/dataP2E';
		$this->load->view('tampil/VBackend', $data);
	}

	public function BidangP3KT(){
		$data['DataP3KT'] = $this->MSudi->GetDataP3KT();
		$data['content'] = 'pegawai/dataP3KT';
		$this->load->view('tampil/VBackend', $data);
	}

	public function BidangP3JFA(){
		$data['DataP3JFA'] = $this->MSudi->GetDataP3JFA();
		$data['content'] = 'pegawai/dataP3JFA';
		$this->load->view('tampil/VBackend', $data);
	}
}