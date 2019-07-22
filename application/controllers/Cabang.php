<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MScm');

	}
	
	public function index()
	{
		$id = $this->session->userdata('user_id');
		$data['cabang'] = $this->MScm->get_cabang($id);
		$id_cabang = $data['cabang']->id_cabang;
		$stock = $this->MScm->get_sum($id_cabang);
		$pengeluaran = $this->MScm->get_out($id_cabang);

		$data['stock'] = $stock->jumlah - $pengeluaran->jumlah;
		$data['content'] = $this->load->view('cabang/pages/dashboard',$data,true);
		$this->load->view('cabang/default',$data);
	}

	public function pengeluaran()
	{
		$id_cabang = $this->session->userdata('id_cabang');
		$stock = $this->MScm->get_sum($id_cabang);
		$pengeluaran = $this->MScm->get_out($id_cabang);

		$data2['stock'] = $stock->jumlah - $pengeluaran->jumlah;
		
		$data2['pengeluaran'] = $this->MScm->get_pengeluaran($id_cabang);
		$data['content'] = $this->load->view('cabang/pages/data_pengeluaran',$data2,true);
		$this->load->view('cabang/default',$data);

	}

	public function paket(){
		$data2['paket'] = $this->MScm->get_paket();
		$data['content'] = $this->load->view('cabang/pages/data_paket',$data2,true);
		$this->load->view('cabang/default',$data);
	}



	public function penjualan()
	{
		$id_cabang = $this->session->userdata('id_cabang');
		$stock = $this->MScm->get_sum($id_cabang);
		$pengeluaran = $this->MScm->get_out($id_cabang);

		$data2['stock'] = $stock->jumlah - $pengeluaran->jumlah;
		
		$data2['penjualan'] = $this->MScm->get_penjualan($id_cabang);
		$data['content'] = $this->load->view('cabang/pages/data_penjualan',$data2,true);
		$this->load->view('cabang/default',$data);
		// echo json_encode($data2);
	}

	public function order(){
		$data['id_cabang'] = $this->session->userdata('id_cabang');
		$data['jumlah'] = $this->input->post('jumlah');
		$data['id_kategori'] = $this->input->post('kategori');
		$this->MScm->tambah_data('stock',$data);
		redirect('cabang/stock');

	}

	public function stock()
	{
		$id_cabang = $this->session->userdata('id_cabang');
		$stock = $this->MScm->get_sum($id_cabang);
		$pengeluaran = $this->MScm->get_out($id_cabang);

		$data2['stock'] = $stock->jumlah - $pengeluaran->jumlah;
		
		$data2['datastock'] = $this->MScm->get_stock($id_cabang);
		$data['content'] = $this->load->view('cabang/pages/data_stock',$data2,true);
		$this->load->view('cabang/default',$data);

	}



	public function hapus_paket($id){
		$table = 'paket';
		$param = 'id_paket';
		$this->MScm->hapus_real($table,$id,$param);
		redirect('cabang/paket');
	}

	public function terima($id){
		$table = 'stock';
		$param = 'id_stock';
		$this->MScm->terima($table,$id,$param);
		redirect('cabang/stock');
	}

	public function save_pengeluaran(){

		$id_cabang = $this->session->userdata('id_cabang');

		$data['jumlah'] = $_POST['jumlah'];
		$data['id_cabang'] = $id_cabang;
		$tabel = 'pengeluaran';
		$this->MScm->tambah_data($tabel,$data);
		$this->session->set_flashdata('alert','berhasil');
		redirect($_SERVER['HTTP_REFERER']);

		


	}

	public function save_paket(){


		$data['nama'] = $_POST['nama'];
		$data['id_kategori'] = $_POST['kategori'];
		$data['banyak'] = $_POST['banyak'];
		$data['harga'] = $_POST['harga'];
		$data['keterangan'] = $_POST['keterangan'];

		$tabel = 'paket';
		$this->MScm->tambah_data($tabel,$data);
		$this->session->set_flashdata('alert','berhasil');
		redirect($_SERVER['HTTP_REFERER']);


	}



	// public function save_pengeluaran(){
	// 	$data['id_user'] = $this->session->userdata('user_id');
	// 	$data['nama_cabang'] = $_POST['nama'];
	// 	$data['alamat'] = $_POST['alamat'];
	// 	$data['no_telp'] = $_POST['nomor'];
	// 	$data['nama_pemilik'] = $_POST['pemilik'];
	// 	$data['nama_bank'] = $_POST['bank'];
	// 	$data['nomor_rekening'] = $_POST['rekening'];

	// 	$data['nama_akun_bank'] = $_POST['nama_rekening'];

	// 	$tabel = 'cabang';

	// 	$this->MScm->tambah_data($tabel,$data);

	// 	$this->session->set_flashdata('alert','berhasil');
	// 	redirect('cabang');
	// }

	public function update_pengeluaran(){
		$id = $_POST['id'];
		$data['jumlah'] = $_POST['jumlah'];

		$this->MScm->update_data('pengeluaran',$id,'id_pengeluaran',$data);

		redirect('cabang/pengeluaran');
	}

	public function update_order(){
		$id = $_POST['id'];
		$data['jumlah'] = $_POST['jumlah'];
		// $data['id_kategori'] = $_POST['kategori'];

		$this->MScm->update_data('stock',$id,'id_stock',$data);

		redirect('cabang/stock');
	}


	public function detail(){
		$id = $_POST['id_paket'];
		// $id = 1;
		// $table = 'ruang';
		$data = $this->MScm->get_detail_paket($id);

		if ($data->keterangan == 1) {
			$ket =  '<label class="btn btn-success"><i class="fas fa-check"></i>Verified</label>';
		}else{
			$ket = '<label class="btn btn-danger btn-sm"><i class="fas fa-exclamation-triangle"></i>Unverified</label>';
		}

		echo '
		<table class="table table-striped">
		<tr>
		<td colspan="3"><img style="text-align: center;" class="img-thumbnail" src="'. base_url().'foto_paket/'. $data->foto.'"></td>
		</tr>
		<tr>
		<td>Nama Ruangan</td>
		<td>:</td>
		<td>'.$data->nama_ruangan.'</td>
		</tr>
		<td>Nama cabang</td>
		<td>:</td>
		<td>'.$data->nama_cabang.'</td>
		</tr>
		<tr>
		<td>Kapasitas</td>
		<td>:</td>
		<td>'.$data->keterangan.'</td>
		</tr>
		<tr>
		<td>Harga</td>
		<td>:</td>
		<td>Rp.'.$data->harga.'/Jam</td>
		</tr>
		<tr>
		<td>Keterangan</td>
		<td>:</td>
		<td>'.$ket.'</td>
		</tr>
		</table>';


	}
}
