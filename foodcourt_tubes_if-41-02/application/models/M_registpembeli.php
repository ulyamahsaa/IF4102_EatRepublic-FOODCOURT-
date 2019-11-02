<?php
class M_registpembeli extends CI_model 
	{
		function regis_pem(){
			$data = array(
			   'email'=>$this->input->post('email',true),
			   'username'=>$this->input->post('Username',true),
			   'nama'=>$this->input->post('nama',true),
			   'passwordd' =>$this->input->post('Password',true),
			   'jeniskelamin' =>$this->input->post('jeniskelamin',true),
			   'usia' =>$this->input->post('usia',true),
			   'nohp' =>$this->input->post('no_handphone',true),
			);
			  	return $this->db->insert('pembeli', $data);
		}
		function cek_akun($email){
			$this->db->where('email',$email);
			return $this->db->get('pembeli');
		}
	
	}

?>

