<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_register');
		$this->load->library('upload');
	}
	
	public function index()
	{
		$this->template->load('static', 'home');
	}


	public function simpan_post()
	{

                        $nama=$this->input->post('nama');
                        $email=$this->input->post('email');
                        $password=$this->input->post('password');
                        $gender=$this->input->post('gender');

                       
                        
                        $this->M_register->insert_post($nama,$email,$password,$gender);
                        redirect('Home');
                   
    }
}
