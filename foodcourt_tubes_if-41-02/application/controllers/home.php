<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	function __construct(){
		parent::__construct();

	}
	public function index(){
		$this->load->view('V_login');
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