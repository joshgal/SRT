<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftarControl extends CI_Controller {

  	public function index()
  	{
  		$this->load->view('daftarForm');
  	}

	  public function daftarPemilik()
	  {
      $this->form_validation->set_rules('usernamePemilik','Username','required', ['required' =>'Kolom Username harus diisi']);
      $this->form_validation->set_rules('passPemilik','Password','required', ['required' =>'Kolom Password harus diisi']);
      if($this->form_validation->run() != TRUE){
		    $this->load->view('daftarForm');
      } else {
        $this->load->view('loginberhasil');            
      }
    }

    public function daftarPenyewa()
    {
      $this->form_validation->set_rules('usernamePenyewa','Username','required', ['required' =>'Kolom Username harus diisi']);
      $this->form_validation->set_rules('passPenyewa','Password','required', ['required' =>'Kolom Password harus diisi']);
      $this->form_validation->set_rules('emailPenyewa','Email','required', ['required' =>'Kolom Email harus diisi']);
      $this->form_validation->set_rules('namaPenyewa','Nama','required', ['required' =>'Kolom Nama Lengkap harus diisi']);
      $this->form_validation->set_rules('alamatPenyewa','Alamat','required', ['required' =>'Kolom Alamat harus diisi']);
      if($this->form_validation->run() != TRUE){
        $this->load->view('daftarForm');
      } else {
        $this->load->view('loginberhasil');            
      }
    }
}
