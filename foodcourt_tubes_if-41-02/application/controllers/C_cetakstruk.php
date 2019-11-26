<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_cetakstruk extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_cetakstruk');
			$this->load->model('M_daftarpesanan');
            $this->load->helper('url');
		}
	public function index()
 	{	
 			$data['pembayaran'] = $this->M_cetakstruk->tampil_data();
  			$this->load->view('V_cetak_struk',$data);
  	
  	}
  	public function proses_kirim(){
		$kodetransaksi= $this->input->post('kodetransaksi');
		$status= $this->input->post('status');
		$this->M_cetakstruk->kirim($kodetransaksi,$status);
		$this->session->set_flashdata('notif', 'Pencetakan Struk berhasil');
		redirect('C_cetakstruk');	
	}
	public function proses_hapus(){
		$kodepembayaran=$this->input->post('kodepembayaran');
		$this->M_cetakstruk->hapus_pesanan($kodepembayaran);
		$this->M_cetakstruk->hapus_struk();
		redirect('C_cetakstruk');
	}
}
		
	

	
  
 ?>