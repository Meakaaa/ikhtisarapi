<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kata extends Rest_Controller {

public function __construct() {
  parent::__construct();
  $this->load->model('M_kata'); //memanggil model
}
  
  public function index_get() 
  {
    //fungsi untuk memanggil data
    $id = $this->get('id');
    if ($id === null) {
      $kata = $this->M_kata->getKata(); //semua data
    } else {
      $kata = $this->M_kata->getKata($id); //data berdasarkan id
    }

    if ($kata) {
      $this->response(
         $kata
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
      'id' => $this->post('id'),
      'kata' => $this->post('kata'),
      'kesimpulan' => $this->post('kesimpulan'),
    ];

    //fungsi untuk membuat data baru
    if ($this->M_kata->createKata($data) > 0) {
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
    $id = $this->put('id');
    $data = [
      'kata' => $this->put('kata'),
      'kesimpulan' => $this->put('kesimpulan'),
    ];

    //fungsi untuk mengubah data yang sudah ada
    if ($this->M_kata->updateKata($data, $id) > 0) {
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
      if ($this->M_kata->deleteKata($id) > 0) {
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
