<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	
	public function index()
	{
		$data['banner'] = 'true';
		$data['content'] = $this->load->view('frontend/pages/home','',true);
		$this->load->view('frontend/default',$data);
	}

	public function hasilpencarian()
	{
		$data['banner'] = 'false';
		$data['content'] = $this->load->view('frontend/pages/hasilpencarian','',true);
		$this->load->view('frontend/default',$data);
	}

	public function login()
	{
		$data['banner'] = 'false';
		$data['content'] = $this->load->view('frontend/pages/login','',true);
		$this->load->view('frontend/default',$data);
	}

	public function register()
	{
		$data['banner'] = 'false';
		$data['content'] = $this->load->view('frontend/pages/register','',true);
		$this->load->view('frontend/default',$data);
	}
}
