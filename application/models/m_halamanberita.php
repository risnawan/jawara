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
	public function getallberita(){
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('admin', 'berita.username_admin = admin.username_admin');
		
		$hasil = $this->db->get();
		return $hasil;
	}

	public function getkomentar($key){
		
		return $this->db->query("SELECT
				komentar.id_pengguna,
				komentar.id_komentar,
				komentar.id_berita,
				komentar.isi_komentar,
				komentar.waktu,
				pengguna.username,
				pengguna.nama_lengkap,
				pengguna.email,
				pengguna.foto,
				pengguna.`password`,
				pengguna.id_pengguna,
				berita.id_berita,
				berita.username_admin,
				berita.judul_berita,
				berita.waktu,
				berita.isi_berita,
				berita.img
				FROM
				komentar
				INNER JOIN pengguna ON pengguna.id_pengguna = komentar.id_pengguna
				INNER JOIN berita ON berita.id_berita = komentar.id_berita 
				Where 
				berita.id_berita ='$key' ;");


	}

	public function insertkomentar($data)
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
