<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kodepembayaran extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_kodepembayaran');
            $this->load->helper('url');
		}
 	public function index()
 	{	

		$data['pembayaran'] = $this->M_kodepembayaran->tampil_data();
		$this->load->view('V_kodepembayaran',$data);
  	
  	}
  	
}
 ?>