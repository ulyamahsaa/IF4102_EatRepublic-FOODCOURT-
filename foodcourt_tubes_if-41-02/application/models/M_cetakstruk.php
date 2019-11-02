<?php
class M_cetakstruk extends CI_model 
	{
	public function tampil_data(){

		return $this->db->query("SELECT * FROM pembayaran")->result_array();
	}
	public function kirim($kodepembayaran,$status){
		return $this->db->query("UPDATE pembayaran SET status='$status' WHERE kodepembayaran='$kodepembayaran'");

	}


	}

?>

