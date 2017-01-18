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

	public function berita()
	{
		//$query = $this->m_halamanberita->getkomentar($id);

		//$data = array(
		//	"komentar" => $this->load->view("berita/komentar", compact('query'), true),
		//);




		$key= $this->uri->segment(3);
		$data['content'] = 'berita/seputarkampanye';
		$data['tuliskometar'] = 'berita/tinggalkankomentar';
		//$data['komentar'] = 'berita/komentar';
		$data['sql'] = $this->m_halamanberita->getberita($key);
		$data['komentar'] = $this->m_halamanberita->getkomentar($key);
		

		$this->load->view('berita/header');
		$this->load->view('berita/berita', $data);
		$this->load->view('berita/footer');

	}

	public function tinggalpesan()
	{
		$id_pengguna = $this->input->post('id_pengguna');
		$path= $this->input->post('path');
		
		$id_berita = $this->input->post('id_berita');;
		$isi_komentar = $this->input->post('isi_komentar');
		$waktu = 'now()';
		$data = array(
			'id_pengguna'=>$id_pengguna,
			
			'id_berita'=>$id_berita,
			'isi_komentar'=>$isi_komentar,
			'waktu'=>$waktu);
		$this->m_halamanberita->insertkomentar($data);
		
		redirect($path);

		//$key  = $this->input->post('id_berita');
		//$data['id_pengguna']= $this->input->post('id_pengguna');
		//$data['id_komentar']= $this->input->post('id_komentar');
		//$data['id_berita']= $this->input->post('id_berita');
		/*$data['id_pengguna']= 1;
		$data['id_komentar']= 3;
		$data['id_berita']= 1;
		$data['waktu']= 'now()'	;
		
		$data['isi_komentar']= $this->input->post('isi_komentar');
		//$data['waktu']= $this->input->post('waktu');
		
		$this->m_halamanberita->insertkomentar($data);


		Redirect('http://localhost/jawara/halamanberita/berita/1', false);*/
	}


}