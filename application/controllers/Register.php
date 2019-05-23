<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('MCatering');

	}

	public function index()
	{
		$this->load->view('register');
	}

	public function register(){
		$data['nama'] = $_POST['nama'];
		$data['no_hp'] = $_POST['nomor'];
		$data['email'] = $_POST['email'];
		$data['jenis_user'] = '1';
		$data['password'] = md5($_POST['password']);

		$tabel = 'user';

		$this->MCatering->tambah_data($tabel,$data);

		$this->session->set_flashdata('alert','berhasil');
		redirect('register');


	}
}