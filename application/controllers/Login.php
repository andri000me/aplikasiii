<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MLogin');
	}

	public function index()
	{
		if (isset($_POST['btn_login'])){
				$nama = $_POST['txt_nama'];
				$email = $_POST['txt_email'];
				$password = $_POST['txt_pass'];
				$notif = $this->MLogin->GoLogin($nama,$email,$password);
				if($notif){
					$this->load->library('session');
					$this->session->set_userdata('Login','OnLogin');
					redirect(site_url('Welcome'));
				}			
				else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><h4 class="alert-heading">Password Salah</h4><p></p></div>');
					$this->load->library('session');
					$this->session->unset_userdata('Login');
					redirect(site_url('Login'));
				}
			}


		$this->load->view('login/VLogin');
	}

	public function register_member()
	{
		$this->load->view('login/v_registrasi');
	}

	public function register()
	{
		 $add['nama']=$this->input->post('nama');
         	 $add['email']= $this->input->post('email');
         	 $add['password']= $this->input->post('password'); 
         	 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><h4 class="alert-heading">Akun Berhasil Dibuat</h4><p></p></div>'); 
        	 $this->MLogin->AddData('tbl_login',$add) ;
        	 redirect(site_url('Login/index'));
	}

}