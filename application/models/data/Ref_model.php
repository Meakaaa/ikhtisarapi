<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref_model extends CI_Model {

    private $_table = "t_referensi_kata";
    private $_list = "t_kata";

    public $id;
    public $kata;
    public $kesimpulan;

    public function rules()
	{
		return [
            [
                "field" => "kata_id",
                "label" => "Kata ID",
                "rules" => "required"
            ],
            [
                "field" => "nama_ref",
                "label" => "Nama Referensi",
                "rules" => "required"
            ],
            [
                "field" => "deskripsi",
                "label" => "Deskripsi",
                "rules" => "required"
            ],
        ];
	}

    public function getAll()
    {
        $this->db->join('t_kata', 't_kata.kata_id = t_referensi_kata.kata_id');
        return $this->db->get($this->_table)->result();
    }
    
    public function getList()
    {
        return $this->db->get($this->_list)->result();
    }

    public function getID($id)
    {
        $this->db->join('t_kata', 't_kata.kata_id = t_referensi_kata.kata_id');
        return $this->db->get_where($this->_table,["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id = $post["id"];
        $this->kata_id = $post["kata_id"];
        $this->nama_ref = $post["nama_ref"];
        $this->deskripsi = $post["deskripsi"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kata_id = $post["kata_id"];
        $this->nama_ref = $post["nama_ref"];
        $this->deskripsi = $post["deskripsi"];
        return $this->db->update($this->_table, $this, array('id' => $post["id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id' => $id));
    }
}