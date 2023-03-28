<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Referensi extends Rest_Controller {

public function __construct() {
  parent::__construct();
  $this->load->model('M_referensi'); //memanggil model
}
  
  public function index_get() 
  {
    //fungsi untuk memanggil data
    $id = $this->get('id');
    if ($id === null) {
      $referensi = $this->M_referensi->getRef(); //semua data
    } else {
      $referensi = $this->M_referensi->getRef($id); //data berdasarkan id
    }

    if ($referensi) {
      $this->response(
         $referensi
        , REST_Controller::HTTP_OK); //respon yang muncul apabila berhasil
    } else {
      $this->response([
        'status' => false,
        'data' => 'ID Not Found'
      ], REST_Controller::HTTP_NOT_FOUND); //respon yang muncul apabila gagal
    }
  }

  public function index_post()
  {
    //variabel yang berisi data yang akan di tambah ke db
    $data = [
      'kata_id' => $this->post('kata_id'),
      'nama_ref' => $this->post('nama_ref'),
      'deskripsi' => $this->post('deskripsi'),
    ];

    //fungsi untuk membuat data baru
    if ($this->M_referensi->createRef($data) > 0) {
      $this->response([
        'status' => true,
        'data' => 'New Data has been Created'
      ], REST_Controller::HTTP_CREATED); //respon yang muncul apabila berhasil
    } else {
      $this->response([
        'status' => false,
        'data' => 'Failed to Create New Data'
      ], REST_Controller::HTTP_BAD_REQUEST); //respon yang muncul apabila gagal
    }
  }
  
  public function index_put()
  {
    //variabel yang berisi data yang akan di tambah ke db
    $data = [
      'kata_id' => $this->put('kata_id'),
      'nama_ref' => $this->put('nama_ref'),
      'deskripsi' => $this->put('deskripsi'),
    ];

    //fungsi untuk mengubah data yang sudah ada
    if ($this->M_referensi->updateRef($data) > 0) {
      $this->response([
        'status' => true,
        'data' => 'Data has been Updated'
      ], REST_Controller::HTTP_NO_CONTENT); //respon yang muncul apabila berhasil
    } else {
      $this->response([
        'status' => false,
        'data' => 'Failed to Update Data'
      ], REST_Controller::HTTP_BAD_REQUEST); //respon yang muncul apabila gagal
    }
  }

  public function index_delete() 
  {
    $id = $this->delete('id'); //fungsi id yang diperlukan ketika ingin menghapus

    if ($id === null) { //apabila id kosong
      $this->response([
        'status' => false,
        'data' => 'Provide An ID'
      ], REST_Controller::HTTP_BAD_REQUEST); //respon yang muncul apabila id kosong
    } else {
      //fungsi untuk menghapus data
      if ($this->M_referensi->deleteRef($id) > 0) {
        $this->response([
          'status' => true,
          'id' => $id,
          'message' => 'Deleted'
        ], REST_Controller::HTTP_NO_CONTENT); //respon yang muncul apabila berhasil
      } else {
        $this->response([
          'status' => false,
          'data' => 'ID Not Found'
        ], REST_Controller::HTTP_BAD_REQUEST); //respon yang muncul apabila gagal
      }
    }
  }
}
