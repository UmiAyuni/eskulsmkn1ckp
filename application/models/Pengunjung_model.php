<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengunjung_model extends CI_Model
{
    public function getEskul()
    {

        $query = $this->db->get('data_eskul');
        return $query->result_array();
    }

    public function getEskulUser($keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);

            return $this->db->get('data_eskul')->result_array();
        }
    }

    public function geteskul_by_id($id)
    {
        $query = $this->db->get_where('data_eskul', array('id_eskul' => $id));
        return $query->row_array();
    }
}
