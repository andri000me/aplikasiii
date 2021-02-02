<?php
	class MLogin extends CI_Model{
		function __construct(){
		parent::__construct();
		}

		function GoLogin($nama,$email,$password){
			$this->db->select('*');
			$this->db->from('tbl_login');
			$this->db->where('nama', $nama);
			$this->db->where('email', $email);
			$this->db->where('password', $password);
			$query = $this->db->get();
			if($query -> num_rows() == 1){
				$row = $query->row(); 
    			return $row->kd_login;
			}else{
				return false;
			}
		}

		function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }


	}
?>