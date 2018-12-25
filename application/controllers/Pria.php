<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pria extends CI_Controller {

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
		$this->load->model('M_produk');
	}


	public function index()
	{
		$data['produk']=$this->M_produk->view_produk_pria('produk');
		$this->template->load('static', 'pria', $data);
	}

	public function pria_detail($id)
	{
		
		$data['detail']=$this->M_produk->view_produk_detail('produk','id',$id);
		$this->template->load('static', 'pria_detail', $data);
	}

	public function simpan_order()
	{

                        $nama=$this->input->post('nama');
                        $gambar=$this->input->post('gambar');
                        $harga=$this->input->post('harga');
                        $jumlah=$this->input->post('jumlah');
                        $total=$this->input->post('total');
                        
                        $this->M_produk->insert($nama,$gambar,$harga,$jumlah,$total);
                        redirect('Checkout');
                   
    }

    public function save_post()
      {

                        $nama=$this->input->post('nama');
                        $alamat=$this->input->post('alamat');
                        $kecamatan=$this->input->post('kecamatan');
                        $kode_pos=$this->input->post('kode_pos');
                        $kab_kota=$this->input->post('kab_kota');
                        $prov=$this->input->post('prov');
                        $no_telp=$this->input->post('no_telp');
                        $email=$this->input->post('email');
                        $product=$this->input->post('product');
                        $gambar=$this->input->post('gambar');
                        $jumlah=$this->input->post('jumlah');
                        $harga=$this->input->post('harga');
                        $total=$this->input->post('total');
                        

                        $this->M_produk->insert2($nama,$alamat,$kecamatan,$kode_pos,$kab_kota,$prov,$no_telp,$email,$product,$gambar,$jumlah,$harga,$total);
                        redirect('Checkout');
                   
    }
}

