<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct() {
        parent::__construct();
        $this->load->model('m_berita');
        $this->load->model('m_kampanye');
        
    }

	public function index()

	{
		$data['query_berita'] = $this->m_berita->getberita();
		$data['query_kampanye'] = $this->m_kampanye->getkampanye();
		$this->load->view('content/home',$data);
	}
}
