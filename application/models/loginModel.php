<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model {

	public function loginPem(){
        $username = $this->input->post('usernamePemilik');
        $password =  $this->input->post('passPemilik');
        $cek = $this->db->get_where('pemilik',['username' => $username])->row_array();
        if($cek){
            if(password_verify($password, $cek['password'])){
            	$this->load->view('loginberhasil');
            }
            else {
            	$this->session->set_flashdata('flash','<div class="alert alert-danger" role="alert">Password yang dimasukkan <stong>salah</strong></div>');
            	redirect('loginControl');
            }
        }else{
        	$this->session->set_flashdata('flash','<div class="alert alert-danger" role="alert">Username <strong>tidak terdaftar</strong></div>');
            redirect('loginControl');
        }
    }

    public function loginPen(){
        $username = $this->input->post('usernamePenyewa');
        $password =  $this->input->post('passPenyewa');
        $cek = $this->db->get_where('penyewa',['username' => $username])->row_array();
        if($cek){
            if(password_verify($password, $cek['password'])){
            	$this->load->view('loginberhasil');
            }
            else {
            	$this->session->set_flashdata('flash','<div class="alert alert-danger" role="alert">Password yang dimasukkan <stong>salah</strong></div>');
            	redirect('loginControl');
            }
        }else{
        	$this->session->set_flashdata('flash','<div class="alert alert-danger" role="alert">Username <strong>tidak terdaftar</strong></div>');
            redirect('loginControl');
        }
    }
}