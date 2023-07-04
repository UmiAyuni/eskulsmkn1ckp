<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function daftar()
    {
        $data = [
            'ekskul' => htmlspecialchars($this->input->post('eskul', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'tempat' => htmlspecialchars($this->input->post('tempat', true)),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
            'jenkel' => htmlspecialchars($this->input->post('jk', true)),
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'no_wa' => htmlspecialchars($this->input->post('no_wa', true)),
            'status' => 'menunggu diverifikasi',
            'alasan' => htmlspecialchars($this->input->post('alasan', true)),
            'id_user' => htmlspecialchars($this->input->post('id_user', true))
        ];
        $this->db->insert('formulir_daftar', $data);
    }

    public function getpendaftarbyid()
    {

        //$data['user'] = $this->db->get_where('user', ['email' =>
        //$this->session->userdata('email')])->row_array();
        $this->db->where('formulir_daftar.id_user', $this->session->userdata('user', ['id']));
        $this->db->get('formulir_daftar')->result();
    }

    public function komplain()
    {

        $data = [
            'eskul' => htmlspecialchars($this->input->post('eskul', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'status' => 'menunggu diverifikasi',
            'keluhan' => htmlspecialchars($this->input->post('keluhan', true)),
            'id_user' => htmlspecialchars($this->input->post('id_user', true))
        ];
        $this->db->insert('komplan', $data);
    }

    public function undur()
    {
        $data = [
            'eskul' => htmlspecialchars($this->input->post('eskul', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'status' => 'menunggu diverifikasi',
            'alasan' => htmlspecialchars($this->input->post('alasan', true)),
            'id_user' => htmlspecialchars($this->input->post('id_user', true))
        ];
        $this->db->insert('undur', $data);
    }

    public function edit_profile()
    {

        $nama = htmlspecialchars($this->input->post('nama', true));
        $email = htmlspecialchars($this->input->post('email', true));



        $this->db->set('nama', $nama);
        $this->db->where('email', $email);
        $this->db->update('user');
    }
}
