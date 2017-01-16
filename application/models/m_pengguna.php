<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model {

	function getpengguna(){
		return $this->db->get('pengguna');
	}

	function getdata($key){
		$this->db->where('id_pengguna',$key);
		$hasil = $this->db->get('pengguna');
		return $hasil;
		
	}


	function getdelete($key){
		$this->db->where('id_pengguna',$key);
		$this->db->delete('pengguna');
	}
	
}


