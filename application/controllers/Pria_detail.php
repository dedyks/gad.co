<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk');
		$this->load->library('upload');
	}
	

    
}