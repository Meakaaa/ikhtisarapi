<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kata extends CI_Model
{
  //fungsi untuk mengambil data dari tabel
  public function getKata($id = null) 
  {
    if ($id === null) {
      return $this->db->get('t_kata')->result_array();
  } else  {
      return $this->db->get_where('t_kata', ['id' => $id])->result_array(); 
  }
  }

  //fungsi untuk menambah data baru dari tabel
  public function createKata ($data)
  {
    $this->db->insert('t_kata', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk mengubah data yang sudah ada di tabel
  public function updateKata ($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('t_kata', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk menghapus data yang ada di tabel
  public function deleteKata ($id)
  {
    $this->db->delete('t_kata', ['id' => $id]);
    return $this->db->affected_rows();
  }
}