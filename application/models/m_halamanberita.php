<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_halamanberita extends CI_Model {

	public function getberita($key){
		$this->db->where('id_berita',$key);
		$hasil = $this->db->get('berita');
		return $hasil;
	}

	public function getkomentar($key){
		$this->db->where('id_berita',$key);
		$hasil = $this->db->get('komentar');
		return $hasil;
	}

	public function setKomentar()
	{
		$this->db->insert('komentar',$data);
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
