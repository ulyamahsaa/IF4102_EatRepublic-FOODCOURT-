<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_upload_pembayaran extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_upload_pembayaran');
            $this->load->helper('url');
		}
	public function index()
 	{	
 			$data['pembayaran'] = $this->M_upload_pembayaran->tampil_data();
  			$this->load->view('V_upload_pembayaran',$data);
  	
  	}

	public function proses_edit(){
		$email = $this->session->userdata('sesi')['email'];
		$bukti_pembayaran= $this->input->post('bukti_pembayaran');
		$this->M_upload_pembayaran->edit_gambar($email,$bukti_pembayaran);
		redirect('C_informasi_bayar');
	}
	
}
		
	

	
  
 ?>