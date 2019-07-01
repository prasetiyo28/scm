<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MScm');

	}

	public function index()
	{
		// $data['banner'] = 'true';
		$data['content'] = $this->load->view('suplier/pages/dashboard','',true);
		$this->load->view('suplier/default',$data);

	}

	
	public function order()
	{

		$data2['order'] = $this->MScm->get_order();
		$data['content'] = $this->load->view('suplier/pages/data_order',$data2,true);
		$this->load->view('suplier/default',$data);

		// echo json_encode($data2);
	}

	public function transaksi()
	{

		$data2['transaksi'] = $this->MScm->get_transaksi();
		$data['content'] = $this->load->view('suplier/pages/data_transaksi',$data2,true);
		$this->load->view('suplier/default',$data);

		// echo json_encode($data2);
	}

	public function cabang()
	{

		$data2['cabang'] = $this->MScm->get_cabang_all();
		$data['content'] = $this->load->view('suplier/pages/data_cabang',$data2,true);
		$this->load->view('suplier/default',$data);

		// echo json_encode($data2);
	}

	public function update_cabang(){
		$id = $this->input->post('id');
		$data['nama_cabang'] = $this->input->post('nama');
		$data['alamat'] = $this->input->post('alamat');
		$data['no_telp'] = $this->input->post('telp');

		$this->MScm->update_data('cabang',$id,'id_cabang',$data);
		redirect('suplier/cabang');
	}


	public function terima($id){
		$table = 'stock';
		$param = 'id_stock';
		$this->MScm->terima_order($table,$id,$param);
		redirect('suplier/order');
	}

	public function kirim($id){
		$table = 'stock';
		$param = 'id_stock';
		$this->MScm->kirim($table,$id,$param);
		redirect('suplier/order');
	}

	

	

	public function hapus_transaksi($id){
		$table = 'ruang';
		$param = 'id_ruang';
		$this->MScm->hapus($table,$id,$param);
		redirect('suplierAdmin/dataruang');
	}

}
