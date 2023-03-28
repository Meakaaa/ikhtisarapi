<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kata_model extends CI_Model {

    private $_table = "t_kata";

    public $id;
    public $kata;
    public $kesimpulan;

    public function rules()
	{
		return [
            [
                "field" => "kata",
                "label" => "Kata",
                "rules" => "required"
            ],
            [
                "field" => "kesimpulan",
                "label" => "Kesimpulan",
                "rules" => "required"
            ],
        ];
	}

    // public function getAll()
    // {
    //     return $this->db->get($this->_table)->result();
    // }   

    public function getID($id)
    {
        return $this->db->get_where($this->_table,["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id = $post["id"];
        $this->kata = $post["kata"];
        $this->kesimpulan = $post["kesimpulan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->kata = $post["kata"];
        $this->kesimpulan = $post["kesimpulan"];
        return $this->db->update($this->_table, $this, array('id' => $post["id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id' => $id));
    }
}