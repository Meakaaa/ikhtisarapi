<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_sinonim extends CI_Model
{
  //fungsi untuk mengambil data dari tabel
  public function getSinonim($id = null) 
  {
    if ($id === null) {
      return $this->db->get('t_sinonim')->result_array();
  } else  {
      return $this->db->get_where('t_sinonim', ['id' => $id])->result_array(); 
  }
  }

  //fungsi untuk menambah data baru dari tabel
  public function createSinonim ($data)
  {
    $this->db->insert('t_sinonim', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk mengubah data yang sudah ada di tabel
  public function updateSinonim ($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('t_sinonim', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk menghapus data yang ada di tabel
  public function deleteSinonim ($id)
  {
    $this->db->delete('t_sinonim', ['id' => $id]);
    return $this->db->affected_rows();
  }
}