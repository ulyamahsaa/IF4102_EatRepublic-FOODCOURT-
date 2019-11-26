<?php
class M_login extends CI_model 
	{
	function cek_login_pembeli($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function cek_login_penjual($table,$where){	
		return $this->db->get_where($table,$where);	

	}
	function cek_login_admin($table,$where){	
		return $this->db->get_where($table,$where);	

	}
	function cek_status($email){

		$coba = $this->db->query("SELECT * FROM penjual WHERE email='$email' AND statusvalidasi = 'valid'")->num_rows();
		if ($coba > 0) {
			return true;
		}else{
			return false;
		}
	}
	public function get_nama_admin($email) {
	 	$depan = $this->db->query("SELECT * FROM admin WHERE email = '$email'")->row_array()['nama'];
	 	return $depan;
	}
	 
}

?>

