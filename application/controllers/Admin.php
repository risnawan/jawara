<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/index');
	}

	public function home()
	{
		if($this->session->userdata('status') != "login"){
			redirect('Admin');
		}
		$data['content'] = 'admin/content/welcome';
		$this->load->view('admin/home',$data);
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username_admin' => $username,
			'password' => md5($password)
			);
		$this->load->model('m_admin');
		$cek = $this->m_admin->cek_login("admin",$where);
		if($cek->num_rows() > 0){
			foreach ($cek->result() as $row) {
				$nama = $row->nama_lengkap;
				$foto = $row->foto;
			}
			
			$data_session = array(
				'nama' => $nama,
				'username' =>$username,
				'foto'=>$foto,
				'status' => "login"
				);



			$this->session->set_userdata($data_session);

			redirect('Admin/home');

		}

		else{
			$this->session->set_flashdata('fail_login','username/pwd salah');
			redirect('Admin');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Admin');
	}
}
