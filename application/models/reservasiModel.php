<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reservasiModel extends CI_Model {

	function getReservasiBelum($id){
        $array = array('penyewa.idPenyewa' => $id, 'reservasi.status' => 'belum');
        $this->db->select("tempat.namaTempat, tempat.kapasitas, tempat.provinsi, tempat.kota, tempat.kecamatan, tempat.alamat, tempat.kategori, reservasi.status, reservasi.biaya, reservasi.jenisPembayaran, reservasi.mulaiSewa, reservasi.akhirSewa, reservasi.idReservasi");
        $this->db->from("reservasi");
        $this->db->join("tempat"," = reservasi.idTempat = tempat.idTempat");
        $this->db->join("penyewa"," = reservasi.idPenyewa = penyewa.idPenyewa");
        $this->db->where($array);
        $query = $this->db->get();
        if($query->num_rows() != 0){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function getReservasiLunas($id){
        $array = array('penyewa.idPenyewa' => $id, 'reservasi.status' => 'lunas');
        $this->db->select("tempat.namaTempat, tempat.kapasitas, tempat.provinsi, tempat.kota, tempat.kecamatan, tempat.alamat, tempat.kategori, reservasi.status, reservasi.biaya, reservasi.jenisPembayaran, reservasi.mulaiSewa, reservasi.akhirSewa, reservasi.idReservasi");
        $this->db->from("reservasi");
        $this->db->join("tempat"," = reservasi.idTempat = tempat.idTempat");
        $this->db->join("penyewa"," = reservasi.idPenyewa = penyewa.idPenyewa");
        $this->db->where($array);
        $query = $this->db->get();
        if($query->num_rows() != 0){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function hapusReservasi($id){
        $this->db->where("idReservasi",$id);
        $this->db->delete("reservasi");
        $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert" style="width:600px">Anda berhasil menghapus tempat!</div>');
        redirect('penyewaControl/lihatPemesanan');
    }
}