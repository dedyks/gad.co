<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_register');
		$this->load->library('upload');
	}
		
	public function index()
	{
		if ($this->session->userdata('isLogin')==TRUE) { //ngecek udah login belum, kalau sudah kemabli ke halaman admin

			redirect('Home');
			
		} else {
				$this->load->view('login'); 
		}	
		
	}

	public function do_login ()
	{
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->M_register->cek_user($email, $password);
		if (count($cek) > 0 ) { 

			$cek_type = $this->db->get_where('users', array('email'=> $email,'password'=>$password));
			foreach ($cek_type->result() as $cek) {

					$this->session->set_userdata(array(
					'isLogin' => TRUE, //set data telah login atau belum
					'email' => $email, //set session username
					'password' => $password,
					//'username' => $cek->username, //set sessiom password
					'nama' => $cek->nama,

					));

					redirect('Home');
			  }	
		  	
		}
		else {
			$this->session->set_flashdata('gagallogin','Maaf, Username atau Password yang anda masukkan salah');
			$this->template->load('static', 'home');
		}

		
		
		
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	
		
	
	
}
