<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Sinonim extends Rest_Controller {

public function __construct() {
  parent::__construct();
  $this->load->model('M_sinonim'); //memanggil model
}
  
  public function index_get() 
  {
    //fungsi untuk memanggil data
    $id = $this->get('id');
    if ($id === null) {
      $sinonim = $this->M_sinonim->getSinonim(); //semua data
    } else {
      $sinonim = $this->M_sinonim->getSinonim($id); //data berdasarkan id
    }

    if ($sinonim) {
      $this->response(
         $sinonim
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
      'id_kata' => $this->post('id_kata'),
      'sinonim' => $this->post('sinonim'),
    ];

    //fungsi untuk membuat data baru
    if ($this->M_sinonim->createSinonim($data) > 0) {
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
      'id_kata' => $this->put('id_kata'),
      'sinonim' => $this->put('sinonim'),
    ];

    //fungsi untuk mengubah data yang sudah ada
    if ($this->M_sinonim->updateSinonim($data, $id) > 0) {
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
      if ($this->M_sinonim->deleteSinonim($id) > 0) {
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
