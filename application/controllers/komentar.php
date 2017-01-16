<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_komentar');
        if($this->session->userdata('status') != "login"){
			redirect('Admin');
		}
    }

	public function index()
	{
		$data['query'] = $this->m_komentar->getkomentar();
		
		$data['content'] = 'admin/content/d_komentar';
		$this->load->view('admin/home',$data);
	}


	public function del(){
		$key =$this->uri->segment(3);
		$this->m_komentar->getdelete($key);
		redirect('komentar');
	}

	

	
}
