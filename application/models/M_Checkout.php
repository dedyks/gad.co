<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_checkout extends CI_Model {

	function view_checkout()
	{
		$query=$this->db->query("SELECT * FROM order_view");
		$isi=$query->result();
		return $isi;
	}


	function grand_total()
	{
		$query=$this->db->query("SELECT sum(total) as total from order_view");
		$hahi=$query->result();
		return $hahi;
	}


}
