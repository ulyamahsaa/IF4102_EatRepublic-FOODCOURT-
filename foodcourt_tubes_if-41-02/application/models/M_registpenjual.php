<?php
class M_registpenjual extends CI_model {
	function reg_penjual($email,$Username,$nama,$Password,$jeniskelamin,$usia,$no_handphone,$namatoko,$status,$file){
		$data = array(
			'email'=>$email,
			'username'=>$Username,
			'nama'=>$nama,
			'passwordd' =>$Password,
			'jeniskelamin' =>$jeniskelamin,
			'usia' =>$usia,
			'nohp' =>$no_handphone,
			'nmtoko' =>$namatoko,
			'statusvalidasi' =>$status,
			'cvtoko' =>$file,
		);
			return $this->db->insert('penjual',$data);
	}
	function cek_akun_penjual($email){
			$this->db->where('email',$email);
			return $this->db->get('penjual');
	}



}


?>