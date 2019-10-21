<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_regispembeli extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_registpembeli');
		}
	public function index()
 	{
  		$this->load->view('V_regist_pembeli');
  		$this->load->helper('url');
  		
 	}
 	public function proses_regis(){
 		$email = $this->input->post('email');
 		$cek = $this->M_registpembeli->cek_akun($email)->row_array();
 		if($cek > 0){
 			redirect('C_regispembeli');
 		}else{
 			$this->M_registpembeli->regis_pem();
 			redirect('home');
 		}
 	}
 }
 ?>