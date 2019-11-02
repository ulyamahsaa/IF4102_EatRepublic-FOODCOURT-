<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_menuadmin extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			
		}
	public function index()
 	{
  		$this->load->view('V_menu_Admin');
  		$this->load->helper('url');
  		
 	}
 }
 ?>