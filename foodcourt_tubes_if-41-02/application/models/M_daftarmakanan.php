<?php
class M_daftarmakanan extends CI_model 
	{
	function tampil_data(){
		return $this->db->query("SELECT * FROM makanan ")->result_array();
	}
	function tambah(){
		$data = array(
			'email'=> $this->session->userdata('sesi')['email'],
			'idmakanan'=>$this->input->post('idmakanan',true),
		);
		return $this->db->insert('memesan', $data);

	}
	
}

?>

