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
			if($cek1 > 0){
		 
				$data_session = array(
					'nama' => $username,
					'status' => "login"
					);
				$this->session->set_userdata($data_session);
				redirect('C_regispembeli'); 
			}else if($cek2 > 0){
				$data_session = array(
					'nama' => $username,
					'status' => "login"
					);
				$this->session->set_userdata($data_session);
				redirect('C_regispenjual');				
			}else{
				echo "Username dan password salah !";
			}

		}
		
	public function regis(){
		$this->load->view('V_registrasi');
	}
	public function regis_pembeli(){
		$this->load->view('V_regist_pembeli');
	}
	public function regis_penjual(){
		$this->load->view('V_regist_penjual');
	}
	public function pesan(){
		$this->load->view('V_pemesanan');
	}
	public function info(){
		$this->load->view('V_info_bayar');
	}
	public function buktibayar(){
		$this->load->view('V_bukti_bayar');
	}
	public function informasibayar(){
		$this->load->view('V_informasi_bayar');
	}
	public function admin(){
		$this->load->view('V_menu_admin');
	}
	public function cetak(){
		$this->load->view('V_cetak_struk');
	}
	public function daftarakun(){
		$this->load->view('V_daftarakunpenjual');
	}
	public function editmakanan(){
		$this->load->view('V_menu_edit_makanan');
	}



}