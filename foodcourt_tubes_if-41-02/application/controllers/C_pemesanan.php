<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pemesanan extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
		
		}
	public function index()
 	{
  		$this->load->view('V_pemesanan');
  		$this->load->helper('url');
  		
 	}
}
 ?>