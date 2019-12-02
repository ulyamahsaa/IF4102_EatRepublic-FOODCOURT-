<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testing extends CI_Controller {
    public function add_menu($data){

		$config['upload_path'] = './assets/upload/';    
		$config['allowed_types'] = 'jpg|png|jpeg';  
		$config['removed_space'] = TRUE;
		
		if ($data != null) {
			$img = $this->upload->data();
			$namamakanan = $this->input->post('namamakanan',true);
			$gambar = $img['file_name'];
			$harga = $this->input->post('harga',true);
            $stok = $this->input->post('stok',true);
            return True;
		}
    }
     
     public function edit_menu(){
        $edit_food = $this->M_menueditmakanan->edit_food();
            if($edit_food<0){
               $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><p class="text-center">Edit Un-Successful. Please Try Again Later.</p></div>');	
           }else {
               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><p class="text-center">Edit Succesful</p></div>'); 	
               return True;
           }
    }

    public function remove_menu($delete_food){
        if($delete_food < 0){
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><p class="text-center">Food is unable to be remove.</p></div>');  			
        }
        else{
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><p class="text-center">Food has been deleted.</p></div>'); 
            return True;
        }
    }

    public function index()
    {
        $this->load->library('unit_test');
        
        $data = array(
            'namamakanan' => "Tahu Crispy",
            'harga' => "12000",
            'stok' => "20",
            'file_name' => "assets/upload/tahu.jpg",
        );

        $testing = $this->add_menu($data);
        $expected_result = True;
        $label = "Pengecekan Tambah Menu Makanan Baru (Add New Menu)";
        echo $this->unit->run($testing, $expected_result, $label);

        $ID_food = 1;
        $testing = $this->add_menu($ID_food);
        $expected_result = True;
        $label = "Pengecekan Hapus Menu Makanan (Delete Menu)";
        echo $this->unit->run($testing, $expected_result, $label);

        $testing = $this->add_menu($ID_food);
        $expected_result = True;
        $label = "Pengecekan Edit Menu Makanan (Edit Menu)";
        echo $this->unit->run($testing, $expected_result, $label);
    }
}
?>