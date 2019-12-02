<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_editmakanan extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_menueditmakanan');
			$this->load->helper('url');
		}
	public function index()
 	{

 		$data['makanan'] = $this->M_menueditmakanan->show_menu();
  		$this->load->view('V_menu_edit_makanan',$data);
  		
  		
 	}

 	public function add_menu(){

		$config['upload_path'] = './assets/upload/';    
		$config['allowed_types'] = 'jpg|png|jpeg';  
		$config['removed_space'] = TRUE;
		
		$this->upload->initialize($config);

		
		if ($this->upload->do_upload('gambar')) {
			$img = $this->upload->data();

			$email = $this->session->userdata('sesi')['email'];
			$namamakanan = $this->input->post('namamakanan',true);
			$gambar = $img['file_name'];
			$harga = $this->input->post('harga',true);
			$stok = $this->input->post('stok',true);
			$this->M_menueditmakanan->add_menuu($email,$namamakanan,$gambar,$harga,$stok);
			$this->session->set_flashdata('notif', 'Selamat Anda Berhasil menambahkan makanan.');
				redirect('C_editmakanan');
			}else{
				redirect('C_editmakanan');
			
		}
 		
 	}
 	

 	public function edit_menu(){
 		$this->M_menueditmakanan->edit_food();
 		$this->session->set_flashdata('notifedit', 'Berhasil Mengedit Makanan.');
	 	redirect('C_editmakanan');
 	}

 	public function remove_menu(){
 		$this->M_menueditmakanan->remove_food();
 		$this->session->set_flashdata('notifhapus', 'Makanan berhasil dihapus.');
 		redirect('C_editmakanan');
 		

 	}
 }

?>