<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model { 
	
	public function insert_post($nama,$email,$password,$gender)
	{
		 $hsl=$this->db->query("INSERT INTO users (Nama,Email,Password,Gender) VALUES ('$nama', '$email', '$password','$gender')");
        return $hsl;
	}

	public function get_booking_by_kode($id)
    {
        $hsl=$this->db->query("SELECT * FROM users WHERE id=$id");
        return $hsl;
    }

    function cek_user($email="",$password="") {

		$query = $this->db->get_where('users',array('email' => $email, 'password' => $password));
		$query2 = $query->result_array();
		return $query2;
	}


 
}
