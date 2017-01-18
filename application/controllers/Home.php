<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct() {
        parent::__construct();
        $this->load->model('m_berita');
        $this->load->model('m_kampanye');
        $this->load->model('m_halamanberita');
        
    }

	public function index()

	{
		$data['query_berita'] = $this->m_halamanberita->getallberita();
		$data['query_kampanye'] = $this->m_kampanye->getkampanye();
		$this->load->view('content/home',$data);
	}

	public function login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$this->load->model('m_login');
		$cek = $this->m_login->cek_login("users",$where);
		if($cek->num_rows() > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('admin');

		}

		else{
			$this->session->set_flashdata('fail_login','username/pwd salah');
			redirect('login');
		}
	}
	
}
