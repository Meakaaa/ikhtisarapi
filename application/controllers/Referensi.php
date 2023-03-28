<?php

use referensi as Globalpage;

defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("data/ref_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, base_url().'/api/referensi');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    $data['referensi'] = json_decode($result,true);

		$this->load->view('v_ref/index', $data);
	}

	public function simpan()
	{
		$referensi = $this->ref_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($referensi->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $referensi->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("referensi").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("referensi/simpan").'";</script>';
		}
	}
		$this->load->view("v_ref/tambah");
}

public function ubah($id = null)
{
	if (!isset($id)) 
	redirect('referensi'); //logika jika id yang dipanggil masih belum ada / kosong

	$referensi = $this->ref_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($referensi->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $referensi->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("referensi") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("referensi/ubah") . '";</script>';
		}

	}
	$data["referensi"] = $referensi->getID($id); //memanggil data berdasarkan id yang dipilih
	if (!$data["referensi"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("v_ref/ubah", $data); // memanggil data referensi ke halaman ubah referensi berdasarkan id
}

	public function hapus($id = null) //menentukan parameter id$id menjadi null / kosong
	{

		$referensi = $this->ref_model; //menentukan objek model
		
		if (!isset($id)) show_404();

		if ($this->ref_model->delete($id)){
			redirect(site_url('referensi'));
			
		}
	}

	
}
