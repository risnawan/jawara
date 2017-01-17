<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kampanye extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_kampanye');
        if($this->session->userdata('status') != "login"){
			redirect('Admin');
		}
    }

	public function index()
	{
		$data['query'] = $this->m_kampanye->getkampanye();
		
		$data['content'] = 'admin/content/d_kampanye';
		$this->load->view('admin/home',$data);
	}


	public function del(){
		$key =$this->uri->segment(3);
		$this->m_pengguna->getdelete($key);
		redirect('pengguna');
	}

	public function add()
	{
		
		$data['id_kandidat'] = '';
		$data['jadwal_kampanye'] = '';
		$data['lokasi_kampanye'] = '';
		$data['content'] = 'admin/content/add_kampanye';
		$this->load->view('admin/home',$data);
	}

	public function edit(){

		$key =$this->uri->segment(3);
		$query = $this->m_kampanye->getdata($key);

		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				
				$data['id_kandidat'] = $row->id_kandidat;
				$data['jadwal_kampanye'] = $row->jadwal_kampanye;
				$data['lokasi_kampanye'] = $row->lokasi_kampanye;
				
			}
		}

		$data['content'] = 'admin/content/add_kampanye';
		$this->load->view('admin/home',$data);

	}

	public function save(){
		
		$key  = $this->input->post('id_kampanye');
		$data['id_kampanye']= $this->input->post('id_kampanye');
		$data['id_kandidat']= $this->input->post('id_kandidat');
		$data['jadwal_kampanye']= $this->input->post('jadwal_kampanye');
		$data['lokasi_kampanye']= $this->input->post('lokasi_kampanye');
		

		
		$query = $this->m_kampanye->getdata($key);
	
		if ($query->num_rows()>0) {
			$this->m_kampanye->getupdate($key,$data);
		}
		else
		{
			$this->m_kampanye->getinsert($data);
		}

		redirect('kampanye/add');
	
	}

	

	
}
