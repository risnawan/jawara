<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halamanberita extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_halamanberita');
        /*if($this->session->userdata('status') != "login"){
			redirect('Admin');
		}*/
    }

	public function index()
	{
		$data['content'] = 'berita/seputarkampanye';
		$data['tuliskometar'] = 'berita/tinggalkankomentar';
		$data['komentar'] = 'berita/komentar';
		$this->load->view('berita/header');
		$this->load->view('berita/berita', $data);
		$this->load->view('berita/footer');
	}

	public function berita($id)
	{
		$data['content'] = 'berita/seputarkampanye';
		$data['tuliskometar'] = 'berita/tinggalkankomentar';
		$data['komentar'] = 'berita/komentar';
		$this->load->model('m_admin');
		$this->load->view('berita/header');
		$this->load->view('berita/berita', $data);
		$this->load->view('berita/footer');


	}



}