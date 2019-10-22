<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_regispenjual extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_registpenjual');
	}
	public function index()
 	{
  		$this->load->view('V_regist_penjual');
  		$this->load->helper('url');
  		
 	}
 	public function proses_regis_penjual(){
 		$email = $this->input->post('email');
 		$cek = $this->M_registpenjual->cek_akun_penjual($email)->row_array();
 		if($cek > 0){
 				redirect('C_regispenjual');

 		}else{
 				$config['upload_path'] = './assets/upload/';    
				$config['allowed_types'] = 'jpg|png|jpeg';  
				$config['removed_space'] = TRUE;
				
				$this->upload->initialize($config);

				
				$this->upload->do_upload('gambar');
					$img = $this->upload->data();

					$email = $this->input->post('email',true);
					$Username = $this->input->post('Username',true);
					$nama = $this->input->post('nama',true);
					$Password = $this->input->post('Password',true);
					$jeniskelamin = $this->input->post('jeniskelamin',true);
					$usia = $this->input->post('usia',true);
					$no_handphone = $this->input->post('no_handphone',true);
					$namatoko = $this->input->post('namatoko',true);
					
					$file = $img['file_name'];
					$this->M_registpenjual->reg_penjual($email,$Username,$nama,$Password,$jeniskelamin,$usia,$no_handphone,$namatoko,$file);
	 				redirect('home');
	 			
 		
 		}
 		
 	}


}




?>