<?php

use sinonim as Globalpage;

defined('BASEPATH') OR exit('No direct script access allowed');

class Sinonim extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model("data/sinonim_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, base_url().'/api/sinonim');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    $data['sinonim'] = json_decode($result,true);

		$this->load->view('v_sinonim/index', $data);
	}

	public function simpan()
	{
		$kata = $this->sinonim_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($kata->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $kata->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("kata").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("kata/simpan").'";</script>';
		}
	}
		$this->load->view("v_sinonim/tambah");
}

public function ubah($id = null)
{
	if (!isset($id)) 
	redirect('kata'); //logika jika id yang dipanggil masih belum ada / kosong

	$kata = $this->sinonim_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($kata->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $kata->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("kata") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("kata/ubah") . '";</script>';
		}

	}
	$data["kata"] = $kata->getID($id); //memanggil data berdasarkan id yang dipilih
	if (!$data["kata"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("v_sinonim/ubah", $data); // memanggil data kata ke halaman ubah kata berdasarkan id
}

	public function hapus($id = null) //menentukan parameter id$id menjadi null / kosong
	{

		$kata = $this->sinonim_model; //menentukan objek model
		
		if (!isset($id)) show_404();

		if ($this->sinonim_model->delete($id)){
			redirect(site_url('kata'));
			
		}
	}

	
}
