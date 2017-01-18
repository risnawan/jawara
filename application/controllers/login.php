<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('content/login');
	}

	public function proses(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$this->load->model('m_login');
		$cek = $this->m_login->cek_login("pengguna",$where);
		if($cek->num_rows() > 0){
			foreach ($cek->result() as $user) {
				$data_session = array(
				'nama' => $user->nama_lengkap,
				'id'=>$user->id_pengguna,
				'status' => "user_login"

				);
			}
			


			$this->session->set_userdata($data_session);

			redirect('home');

		}

		else{
			$this->session->set_flashdata('user_fail_login','username/pwd salah');
			redirect('login');
		}
	}

	
}
