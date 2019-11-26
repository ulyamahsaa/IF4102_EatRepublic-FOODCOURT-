<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_login');

	}
	public function index(){
		$this->load->view('V_login');
	}
	function login(){
		    $email = $this->input->post('email');
		    $passwordd = $this->input->post('passwordd');
		    $where = array(
				'email' => $email,
				'passwordd' => $passwordd
				
			);
			$cek1 = $this->M_login->cek_login_pembeli("pembeli",$where)->num_rows();
			$cek2= $this->M_login->cek_login_penjual("penjual",$where)->num_rows();
			$cek3 = $this->M_login->cek_login_admin("admin",$where)->num_rows();


			$tes1 = $this->M_login->cek_status($email);
			$nama = $this->M_login->get_nama_admin($email);		

			if(($cek2 > 0) && ($tes1 == true)){
				$data_session = array(
					'email' => $email,
					'status' => "login"
				);
				$this->session->set_userdata('sesi',$data_session);
				redirect('C_editmakanan'); 

			}else if($cek1 > 0){
				$data_session = array(
					'email' => $email,
					'status' => "login"
				);
				$this->session->set_userdata('sesi',$data_session);
				redirect('C_pemesanan');	
			}else if($cek3 > 0){
				$data_session = array(
					'nama' => $nama,
					'status' => "login"
				);
				$this->session->set_userdata('sesi',$data_session);
				redirect('C_menuadmin');						
			}else{
				$this->session->set_flashdata('notifgagal', 'Login Gagal!
				Alamat email dan kata sandi salah');
				redirect('home');
			}

		}
	public function logout(){
		$this->session->unset_userdata('Email');
  		$this->session->unset_userdata('Password');
		$this->session->sess_destroy();
		redirect('home');
	}
		
	public function regis(){
		$this->load->view('V_registrasi');
	}
	public function admin(){
		$this->load->view('V_menu_admin');
	}


}