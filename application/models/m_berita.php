<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

	
	public function GetBerita()
	{
		
		$berita = $this->db->query('SELECT* FROM berita;');
		return $berita;
	}
}
