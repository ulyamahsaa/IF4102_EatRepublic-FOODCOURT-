<?php
class M_menueditmakanan extends CI_model {
	
	function add_menuu($email,$namamakanan,$gambar,$harga,$stok){
		$data = array(
			'email'=>$email,
			'namamakanan'=>$namamakanan,
			'gambar'=>$gambar,
			'harga' =>$harga,
			'stok' =>$stok,
		);
			return $this->db->insert('makanan',$data);
	}

	function show_menu(){
		$current_user_email = $this->session->userdata('sesi')['email'];
		return $this->db->query("SELECT * FROM makanan WHERE email = '$current_user_email'")->result_array();
	}

	function edit_food(){
		$idmakanan = $this->input->post('idmakanan',true);
		$namamakanan = $this->input->post('namamakanan',true);
		$gambar = $this->input->post('gambar',true);
		$harga = $this->input->post('harga',true);
		$stok = $this->input->post('stok',true);

		return $this->db->query("UPDATE makanan SET 
			namamakanan = '$namamakanan' , 
			gambar = '$gambar',
			harga = '$harga' ,
			stok = '$stok'
			WHERE
			idmakanan = '$idmakanan' 
			");
	}
	public function remove_food(){
		$idmakanan = $this->input->post('idmakanan',true);
		return $this->db->query("DELETE FROM makanan WHERE idmakanan = '$idmakanan'");
	}
	}
?>