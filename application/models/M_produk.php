<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {

	function view_produk_wanita($tabel)
	{
		$query=$this->db->query("SELECT * FROM $tabel where kategori='Wanita' order by tanggal");
		$isi=$query->result();
		return $isi;
	}

	public function GetProduk($id)
	{
		$id=$this->db->select('*')
							->from('produk')
							->where('id',$id)
							->get();
		return $id;
	}


function view_produk_pria($tabel)
	{
		$query=$this->db->query("SELECT * FROM $tabel where kategori='Pria' order by tanggal");
		$isi=$query->result();
		return $isi;
	}
function view_produk_detail($tabel,$kolom,$variable)
	{
		$query=$this->db->query("SELECT * FROM $tabel where $kolom='$variable' order by tanggal");
		$isi=$query->result();
		return $isi;
	}
	public function GetProduk2($id)
	{
		$id=$this->db->select('*')
							->from('produk')
							->where('id',$id)
							->get();
		return $id;
	}


function view_produk_hadiah($tabel)
	{
		$query=$this->db->query("SELECT * FROM $tabel where kategori='Hadiah' order by tanggal");
		$isi=$query->result();
		return $isi;
	}

	public function GetProduk3($id)
	{
		$id=$this->db->select('*')
							->from('produk')
							->where('id',$id)
							->get();
		return $id;
	}


public function insert($nama,$gambar,$harga,$jumlah,$total)
	{
		 $hsl=$this->db->query("INSERT INTO order_view (Product, Gambar, Harga, Jumlah, Total)  VALUES ('$nama', '$gambar', '$harga', '$jumlah', ('$jumlah'*'$harga'))");
        return $hsl;
	}

public function insert2($nama,$alamat,$kecamatan,$kode_pos,$kab_kota,$prov,$no_telp,$email,$product,$gambar,$jumlah,$harga,$total)
	{
		$hasil=$this->db->query("INSERT INTO checkout (nama, alamat, kecamatan, kode_pos, kab_kota, prov, no_telp, email, product, gambar, jumlah, harga, total)  VALUES ('$nama','$alamat','$kecamatan','$kode_pos','$kab_kota','$prov','$no_telp','$email','$product','$gambar','$jumlah','$harga','$total' )");
        return $hasil;
	}

}
