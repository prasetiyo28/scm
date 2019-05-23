<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MScm extends CI_Model{

	function tambah_data($table,$data){
		$this->db->insert($table,$data);
	}

	function cek_login($data){
		$this->db->select('user.*');
		$this->db->from('user');
		$this->db->where($data);
		$query = $this->db->get();
		
		return $query->row();
	}

	function get_sum($id){
		$this->db->select('sum(jumlah) as jumlah');         
		$this->db->where('id_cabang',$id);
		$query = $this->db->get('stock');
		return $query->row();	
	}

	function get_out($id){
		$this->db->select('sum(jumlah) as jumlah');
		$this->db->where('id_cabang',$id);
		$query = $this->db->get('pengeluaran');
		return $query->row();	
	}

	function get_pengeluaran($id){
		$this->db->where('id_cabang',$id);
		$query = $this->db->get('pengeluaran');
		return $query->result();	
	}

	function get_stock($id){
		$this->db->where('id_cabang',$id);
		$query = $this->db->get('stock');
		return $query->result();	
	}

	function get_order(){
		$this->db->where("(status= '0' OR status = '1')");
		$query = $this->db->get('stock');
		return $query->result();	
	}



	function get_kapasitas(){
		$this->db->where('deleted','0');
		$query = $this->db->get('kapasitas');
		return $query->result();
	}

	function get_paket($id){

		$this->db->where('paket.id_mitra',$id);
		$this->db->where('paket.deleted','0');
		// $this->db->where('ruang.verif','0');
		$query = $this->db->get('paket');
		return $query->result();
	}

	function get_detail_ruangan($id){
		$this->db->select('ruang.*, kapasitas.keterangan as keterangan, mitra.nama_mitra');
		$this->db->from('ruang');
		$this->db->join('kapasitas','ruang.kapasitas = kapasitas.id_kapasitas');
		$this->db->join('mitra','ruang.id_mitra = mitra.id_mitra');
		$this->db->where('ruang.id_ruang',$id);
		// $this->db->where('ruang.deleted','0');
		// $this->db->where('ruang.verif','0');
		$query = $this->db->get();
		return $query->row();
	}

	function get_ruangan_all(){
		$this->db->select('ruang.*, kapasitas.keterangan as keterangan , mitra.nama_mitra');
		$this->db->from('ruang');
		$this->db->join('kapasitas','ruang.kapasitas = kapasitas.id_kapasitas');
		$this->db->join('mitra','ruang.id_mitra = mitra.id_mitra');
		$this->db->where('ruang.deleted','0');
		$query = $this->db->get();
		return $query->result();
	}

	function get_ruangan_verif($id){
		$this->db->where('id_mitra',$id);
		$this->db->where('deleted','0');
		$this->db->where('verif','1');
		$query = $this->db->get('ruang');
		return $query->result();
	}

	function get_cabang($id){
		$this->db->where('id_user',$id);
		$query = $this->db->get('cabang');
		return $query->row();
	}


	function hapus($table,$id,$param){
		$this->db->set('deleted','1');
		$this->db->where($param,$id);
		$this->db->update($table);
	}

	function terima($table,$id,$param){
		$this->db->set('status','3');
		$this->db->where($param,$id);
		$this->db->update($table);
	}

	function terima_order($table,$id,$param){
		$this->db->set('status','1');
		$this->db->where($param,$id);
		$this->db->update($table);
	}

	function kirim($table,$id,$param){
		$this->db->set('status','2');
		$this->db->where($param,$id);
		$this->db->update($table);
	}



	function verifikasi($table,$id,$param){
		$this->db->set('verif','1');
		$this->db->where($param,$id);
		$this->db->update($table);
	}
}