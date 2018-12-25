<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
	}
	

	public function index()
	{
		$data['berita'] = $this->m_berita->GetBerita();
 		$this->template->load('static', 'berita', $data);
	}
}
