<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_daftarakunpenjual extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_daftarakunpenjual');
            $this->load->helper('url');
		}
	public function index()
 	{	
 			$data['penjual'] = $this->M_daftarakunpenjual->tampil_data();
  			$this->load->view('V_daftarakunpenjual',$data);
  	
  	}

  	public function proses_hapus(){
  		$email= $this->input->post('email');
		$this->M_daftarakunpenjual->hapus_akun($email);
		// $this->M_daftarakunpenjual->hapus_akun1($email);

		$this->session->set_flashdata('notif', 'Hapus akun berhasil');
		redirect('C_daftarakunpenjual');
	}
	public function proses_edit(){
		$email= $this->input->post('email');
		$statusvalidasi= $this->input->post('statusvalidasi');
		$this->M_daftarakunpenjual->edit_status($email,$statusvalidasi);
		$this->session->set_flashdata('notifedit', 'edit berhasil');
		redirect('C_daftarakunpenjual');
		}
	
}
		
	

	
  
 ?>