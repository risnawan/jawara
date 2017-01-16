<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_komentar extends CI_Model {

	function getkomentar(){
		return $this->db->get('komentar');
	}

	function getdata($key){
		$this->db->where('id_komentar',$key);
		$hasil = $this->db->get('komentar');
		return $hasil;
		
	}


	function getdelete($key){
		$this->db->where('id_komentar',$key);
		$this->db->delete('komentar');
	}
	
}


