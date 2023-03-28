<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_referensi extends CI_Model
{
  //fungsi untuk mengambil data dari tabel
  public function getRef($id = null) 
  {
    if ($id === null) {
      return $this->db->get('t_referensi_kata')->result_array();
  } else  {
      return $this->db->get_where('t_referensi_kata', ['id' => $id])->result_array(); 
  }
  }

  //fungsi untuk menambah data baru dari tabel
  public function createRef ($data)
  {
    $this->db->insert('t_referensi_kata', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk mengubah data yang sudah ada di tabel
  public function updateRef ($data)
  {
    $this->db->update('t_referensi_kata', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk menghapus data yang ada di tabel
  public function deleteRef ($id)
  {
    $this->db->delete('t_referensi_kata', ['id' => $id]);
    return $this->db->affected_rows();
  }
}