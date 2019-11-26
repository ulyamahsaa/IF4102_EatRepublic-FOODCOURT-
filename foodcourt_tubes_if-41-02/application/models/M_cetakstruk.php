<?php
class M_cetakstruk extends CI_model 
	{
	public function tampil_data(){

		return $this->db->query("SELECT * FROM pembayaran")->result_array();
	}
	public function kirim($kodetransaksi,$status){
		return $this->db->query("UPDATE pembayaran SET status='$status' WHERE kodetransaksi='$kodetransaksi'");

	}
	public function hapus_struk(){
		$kodetransaksi= $this->input->post('kodetransaksi',true);
		return $this->db->query("DELETE FROM pembayaran WHERE kodetransaksi = '$kodetransaksi'");
	}
	public function hapus_pesanan($kodepembayaran){
		return $this->db->query("DELETE FROM memesan WHERE kodepembayaran = '$kodepembayaran'");
	}


	}

?>

