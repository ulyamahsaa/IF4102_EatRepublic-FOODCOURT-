<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_cetakstruk extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_cetakstruk');
            $this->load->helper('url');
		}
	public function index()
 	{	
 			$data['pembayaran'] = $this->M_cetakstruk->tampil_data();
  			$this->load->view('V_cetak_struk',$data);
  	
  	}
  	public function proses_kirim(){
		$kodepembayaran= $this->input->post('kodepembayaran');
		$status= $this->input->post('status');
		$this->M_cetakstruk->kirim($kodepembayaran,$status);
		$this->session->set_flashdata('notif', 'Pencetakan Struk berhasil');
		redirect('C_cetakstruk');	
	}
	
}
		
	

	
  
 ?>