<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_berita');
        if($this->session->userdata('status') != "login"){
			redirect('Admin');
		}
    }

	public function index()
	{
		$data['query'] = $this->m_berita->getberita();
		
		$data['content'] = 'admin/content/d_berita';
		$this->load->view('admin/home',$data);
	}

	public function add()
	{
		$data['id_berita'] = '';
		$data['judul_berita'] = '';
		$data['tanggal_berita'] = '';
		$data['isi_berita'] = '';
		
		$data['content'] = 'admin/content/add_berita';
		$this->load->view('admin/home',$data);
	}

	public function edit(){

		$key =$this->uri->segment(3);
		$query = $this->m_berita->getdata($key);

		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$data['id_berita'] = $row->id_berita;
				$data['judul_berita'] = $row->judul_berita;
				$data['tanggal_berita'] = $row->waktu;
				$data['isi_berita'] = $row->isi_berita;
				
			}
		}

		$data['content'] = 'admin/content/add_berita';
		$this->load->view('admin/home',$data);

	}

	public function del(){
		$key =$this->uri->segment(3);
		$this->m_berita->getdelete($key);
		redirect('berita');
	}

	public function save(){
		
		$key  = $this->input->post('id_berita');
		$data['username_admin']= $this->input->post('username_admin');
		$data['judul_berita']= $this->input->post('judul_berita');
		$data['waktu']= $this->input->post('tanggal_berita');
		$data['isi_berita']= $this->input->post('isi_berita');
		

		
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
