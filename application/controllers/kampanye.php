<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_pengguna');
        if($this->session->userdata('status') != "login"){
			redirect('Admin');
		}
    }

	public function index()
	{
		$data['query'] = $this->m_pengguna->getpengguna();
		
		$data['content'] = 'admin/content/d_pengguna';
		$this->load->view('admin/home',$data);
	}


	public function del(){
		$key =$this->uri->segment(3);
		$this->m_pengguna->getdelete($key);
		redirect('pengguna');
	}

	

	
}
