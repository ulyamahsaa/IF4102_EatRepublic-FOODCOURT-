<?php
class M_daftarpesanan extends CI_model 
	{
	function tampil_data(){
		$email = $this->session->userdata('sesi')['email'];
		return $this->db->query("SELECT * FROM makanan JOIN memesan USING(idmakanan) WHERE memesan.email= '$email' ")->result_array();
	}
	public function hapus_pesanan($kodepembayaran){
		return $this->db->query("DELETE FROM memesan WHERE kodepembayaran = '$kodepembayaran'");
	}
	public function get_nama_pembeli($email) {
	 	$depan = $this->db->query("SELECT * FROM pembeli WHERE email = '$email'")->row_array()['nama'];
	 	return $depan;
	}
	public function get_email_admin() {
	 	$mail = $this->db->query("SELECT * FROM admin")->row_array()['email'];
	 	return $mail;
	}
	public function pesan(){
		$tes = $this->M_daftarpesanan->get_nama_pembeli($this->session->userdata('sesi')['email']);
		$gas = $this->M_daftarpesanan->get_email_admin();
		$data = array(
			'kodepembayaran'=>$this->input->post('kodepembayaran',true),
			'namapemesan'=>$tes,
			'namamakanan'=>$this->input->post('namamakanan',true),
			'totalharga'=>$this->input->post('totalharga',true),
			'email_pembeli'=>$this->session->userdata('sesi')['email'],
			'status'=>$this->input->post('status',true),
			'email'=>$gas,
		);
		return $this->db->insert('pembayaran', $data);
	}
	
}

?>

