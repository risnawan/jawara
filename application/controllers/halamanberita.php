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
		$this->load->view('berita/header');
		$this->load->view('berita/berita');
		$this->load->view('berita/footer');
	}

}