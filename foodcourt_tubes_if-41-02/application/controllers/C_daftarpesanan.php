<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_daftarpesanan extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_daftarpesanan');
            $this->load->helper('url');
		}
 	public function index()
 	{	

		$data['memesan'] = $this->M_daftarpesanan->tampil_data();
		$this->load->view('V_daftarpesanan',$data);
  	
  	}
  	public function proses_hapus(){
  		$kodepembayaran=$this->input->post('kodepembayaran');
		$this->M_daftarpesanan->hapus_pesanan($kodepembayaran);
		$this->session->set_flashdata('notifhapus', 'Makanan berhasil dibuang.');
		redirect('C_daftarpesanan');
	}
	public function proses_bayar(){
		$this->M_daftarpesanan->pesan();
		redirect('C_kodepembayaran');
	}
}
 ?>