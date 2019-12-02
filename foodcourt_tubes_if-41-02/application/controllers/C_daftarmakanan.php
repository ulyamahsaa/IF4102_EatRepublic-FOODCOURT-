<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_daftarmakanan extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_daftarmakanan');
            $this->load->helper('url');
		
		}
 	public function index()
 	{	
 			$data['makanan'] = $this->M_daftarmakanan->tampil_data();
  			$this->load->view('V_daftarmakanan',$data);
  	
  	}
  	public function proses_tambah(){
  	$this->M_daftarmakanan->tambah();
    $this->session->set_flashdata('notif', 'Berhasil Menambahkan Makanan ke Keranjang.');
 		redirect('C_daftarmakanan');

  	}
}
 ?>