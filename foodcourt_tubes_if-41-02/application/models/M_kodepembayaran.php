<?php
class M_kodepembayaran extends CI_model 
	{
	function tampil_data(){
		$email = $this->session->userdata('sesi')['email'];
		return $this->db->query("SELECT * FROM pembayaran WHERE email_pembeli = '$email'")->result_array();
	}
	
}

?>

