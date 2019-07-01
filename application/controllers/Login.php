<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('MScm');

	}

	public function index()
	{
		$this->load->view('login');
	}


	public function login(){
		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		
		
		$cek_login = $this->MScm->cek_login($data);
		if (!isset($cek_login))	 {
			$this->session->set_flashdata('alert','gagal');
			redirect('login');
		}else{

			$datauser = array(
				'user_id' => $cek_login->id_user,
				'nama' => $cek_login->nama,
				'email' => $cek_login->email,
				'jenis_user' => $cek_login->jenis_user
			);

			

			$this->session->set_userdata($datauser);
			
			if ($cek_login->jenis_user == 0) {
				redirect('frontend');
			}elseif($cek_login->jenis_user == 1){
				$cek_cabang = $this->MScm->get_cabang($cek_login->id_user);
				$datauser2 = array(
					'id_cabang' => $cek_cabang->id_cabang,
					'nama_cabang' => $cek_cabang->nama_cabang,
					'alamat_cabang' => $cek_cabang->alamat,
					'no_telp_cabang' => $cek_cabang->no_telp
				);
				$this->session->set_userdata($datauser2);

				// echo json_encode($datauser2);
				redirect('cabang');
			}else{
				redirect('Suplier');
			}
		}




	}

	public function logout(){
		$this->session->sess_destroy();
		redirect ('login');
	}
}