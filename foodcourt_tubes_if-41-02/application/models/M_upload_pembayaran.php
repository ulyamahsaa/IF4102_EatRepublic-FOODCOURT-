<?php
class M_upload_pembayaran extends CI_model 
	{
	function tampil_data(){
		$email = $this->session->userdata('sesi')['email'];
		return $this->db->query("SELECT * FROM pembayaran WHERE email_pembeli = '$email'")->result_array();
	}
	public function edit_gambar($email,$bukti_pembayaran){
		return $this->db->query("UPDATE pembayaran SET bukti_pembayaran='$bukti_pembayaran' WHERE email_pembeli='$email'");

	}
	
}

?>

