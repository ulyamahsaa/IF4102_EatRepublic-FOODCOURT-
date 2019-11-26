<?php
class M_daftarakunpenjual extends CI_model 
	{
	function tampil_data(){
		return $this->db->query("SELECT * FROM penjual ")->result_array();
	}
	function hapus_akun($email){
		$this->db->where('email',$email);
		return $this->db->delete('penjual');
	}
	public function edit_status($email,$statusvalidasi){
		return $this->db->query("UPDATE penjual SET statusvalidasi='$statusvalidasi' WHERE email='$email'");

	}
}

?>

