<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kampanye extends CI_Model {

	function getkampanye(){
		return $this->db->query('SELECT
kampanye.id_kampanye,
kampanye.id_kandidat,
kampanye.jadwal_kampanye,
kampanye.lokasi_kampanye,
kandidat.id_kandidat,
kandidat.nama,
kandidat.foto
FROM
kampanye
INNER JOIN kandidat ON kandidat.id_kandidat = kampanye.id_kandidat ;');
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
