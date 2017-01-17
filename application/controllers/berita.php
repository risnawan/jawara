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

	// public function page()
	// {
	// 	$this->load->libary('pagination');
	// 	$this->load->model('table');

	// 	$this->db->select('counrty, year, hscode_level, hs_version, hscode, hscode_description');

	// 	$data['base_url'] = '/hs_codes/page/';
	// 	$data['total_rows'] = $this->db->get('applied_mfn')->num_rows();
	// 	$data['per_page'] = 30;
	// 	$data['num_links'] = 10;
	// 	$data['records'] = $this->db->select('counrty, year, hscode_level, hs_version, hscode, hscode_description')->get('applied_mfn', $data['per_page'], $this->url->segment(3));
	// 	$data['toc'] = $this->model_hscodes->get_toc();

	// 	$this->pagination->initialize($data);

	// 	$this->load->view('includes/harder',$header);
	// 	$this->load->view('hs_codes/view_hs_codes',$data);
	// 	$this->load->view('includes/footer');
	// }

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

	public function news()
	{
		$op=$this->input->post('op');
		$waktu=$this->input->post('waktu');
		$judul=$this->input->post('judul_berita');
		$foto=$this->input->post('foto_berita');
		$isi=$this->input->post('isi_berita');
		$data=array(
			'waktu'=>$waktu,
			'judul_berita'=>$judul,
			'foto_berita'=>$foto,
			'isi_berita'=>$isi);
		if ($op=>"tambah"){
			$this->home->news($data);
		}else{
		redirect('berita/index');
		}
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
