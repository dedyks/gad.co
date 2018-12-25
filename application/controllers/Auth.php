<?php
/**
 * 
 */
class Auth extends CI_Controller
{
	
	function login()
	{
		echo 'login page';
	}

	public function register ()
	{
		if (isset($_POST['register'])){
			$this-> form_validation->set_rules('nama','Nama','required');
			$this-> form_validation->set_rules('email','Email','required');
			$this-> form_validation->set_rules('password','Password','required|alpha_numeric');
			$this-> form_validation->set_rules('repassword','Repassword','required|alpha_numeric|matches[password]|min_length[6]|max_length[24]|md5);');
		}
		if ($this->form_validation->run() == TRUE) {
			echo 'form valiadated';
		}

		$data= array(
			'nama'=>$_POST['nama'],
			'email'=>$_POST['email'],
			'password'=> $_POST['password'],
			'gender' =>$_POST['gender'])
		$this->db->insert('users', $data);

		$this->set_flashdata("Success","Your Account has been registered. You can login now!");
		redirect("auth/register","refresh")


		$this->load->view('static');
	}
}
