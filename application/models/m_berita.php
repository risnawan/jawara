<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

	function getberita(){
		return $this->db->get('berita');
	}

	function getdata($key){
		$this->db->where('id_berita',$key);
		$hasil = $this->db->get('berita');
		return $hasil;
		
	}

	function getupdate($key,$data){
		$this->db->where('id_berita',$key);
		$this->db->update('berita',$data);
	}

	function getinsert($data){
		$this->db->insert('berita',$data);
	}

	function getdelete($key){
		$this->db->where('id_berita',$key);
		$this->db->delete('berita');
	}
	
}
