<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_halamanberita extends CI_Model {

	public function getberita($key){
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('admin', 'berita.username_admin = admin.username_admin');
		$this->db->where('berita.id_berita',$key);
		$hasil = $this->db->get();
		return $hasil;
	}

	public function getkomentar($key){
		$this->db->where('id_berita',$key);
		$hasil = $this->db->get('komentar');
		return $hasil;
	}

	public function insertkomentar()
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
