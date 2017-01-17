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
		//$query = $this->m_halamanberita->getkomentar($id);

		//$data = array(
		//	"komentar" => $this->load->view("berita/komentar", compact('query'), true),
		//);

		$data['content'] = 'berita/seputarkampanye';
		$data['tuliskometar'] = 'berita/tinggalkankomentar';
		//$data['komentar'] = 'berita/komentar';
		$data['sql'] = $this->m_halamanberita->getberita($id);
		$data['komentar'] = $this->m_halamanberita->getkomentar($id);
		$this->load->view('berita/header');
		$this->load->view('berita/berita', $data);
		$this->load->view('berita/footer');

	}

	public function tinggalpesan()
	{
		//$key  = $this->input->post('id_berita');
		$data['id_pengguna']= $this->input->post('username_admin');
		$data['id_komentar']= $this->input->post('judul_berita');
		$data['id_berita']= $this->input->post('tanggal_berita');
		$data['isi_komentar']= $this->input->post('isi_berita');
		$data['waktu']= $this->input->post('isi_berita');
		

		
		$query = $this->m_berita->getdata($key);
	
		if ($query->num_rows()>0) {
			$this->m_berita->getupdate($key,$data);
		}
		else
		{
			$this->m_berita->getinsert($data);
		}

		redirect('berita/add');
	}


}