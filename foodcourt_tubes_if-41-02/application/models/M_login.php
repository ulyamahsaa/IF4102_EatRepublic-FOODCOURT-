<?php
class M_login extends CI_model 
	{
	function cek_login_pembeli($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function cek_login_penjual($table,$where){	
		return $this->db->get_where($table,$where);	


	}
}

?>

