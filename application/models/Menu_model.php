<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu` . *, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`. `menu_id` = `user_menu`. `id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function get_menu_byid($id)
    {
        $data = $this->db->get_where('user_menu', array('id' => $id));
        return $data->row_array();
    }

    public function hapus_m($id)
    {
        return $this->db->delete('user_menu', array('id' => $id));
    }

    public function edit_m($id)
    {
        $data = ['menu' => $this->input->post('menu', true)];
        $this->db->where('id', $id);
        return $this->db->update('user_menu', $data);
    }

    public function getSubMenubyid($id)
    {
        $query = $this->db->get_where('user_sub_menu', array('id' => $id));
        return $query->row_array();
    }

    public function hapus_sm($id)
    {
        return $this->db->delete('user_sub_menu', array('id' => $id));
    }

    public function edit_sm($id)
    {
        $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        ];
        $this->db->where('id', $id);
        return $this->db->update('user_sub_menu', $data);
    }
}
