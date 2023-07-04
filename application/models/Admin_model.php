<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function get_pendaftarById($id)
    {
        $query = $this->db->get_where('formulir_daftar', array('id' => $id));
        return $query->row_array();
    }


    public function edit_pendaftar($id)
    {
        $data = [
            'ekskul' => htmlspecialchars($this->input->post('eskul', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'tempat' => htmlspecialchars($this->input->post('tempat', true)),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
            'jenkel' => htmlspecialchars($this->input->post('jk', true)),
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'no_wa' => htmlspecialchars($this->input->post('no_wa', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'alasan' => htmlspecialchars($this->input->post('alasan', true)),
            'id_user' => htmlspecialchars($this->input->post('id_user', true))
        ];

        $this->db->where('id', $id);
        return $this->db->update('formulir_daftar', $data);
    }

    public function hapus_daftar($id)
    {
        return $this->db->delete('formulir_daftar', array('id' => $id));
    }

    public function get_komplainById($id)
    {
        $query = $this->db->get_where('komplan', array('id' => $id));
        return $query->row_array();
    }

    public function edit_komplan($id)
    {
        $data = [
            'eskul' => htmlspecialchars($this->input->post('eskul', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'keluhan' => htmlspecialchars($this->input->post('keluhan', true)),
            'id_user' => htmlspecialchars($this->input->post('id_user', true))
        ];

        $this->db->where('id', $id);
        return $this->db->update('komplan', $data);
    }

    public function hapus_komplain($id)
    {
        return $this->db->delete('komplan', array('id' => $id));
    }

    public function get_undurById($id)
    {
        $query = $this->db->get_where('undur', array('id' => $id));
        return $query->row_array();
    }

    public function edit_undur($id)
    {
        $data = [
            'eskul' => htmlspecialchars($this->input->post('eskul', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'alasan' => htmlspecialchars($this->input->post('alasan', true)),
            'id_user' => htmlspecialchars($this->input->post('id_user', true))
        ];

        $this->db->where('id', $id);
        return $this->db->update('undur', $data);
    }

    public function hapus_undur($id)
    {
        return $this->db->delete('undur', array('id' => $id));
    }

    public function jml_daftar()
    {
        $this->db->select('*');
        $this->db->from('formulir_daftar');
        $this->db->where('status = "menunggu diverifikasi"');

        return $this->db->get()->num_rows();
    }

    public function jml_komplan()
    {
        $this->db->select('*');
        $this->db->from('komplan');
        $this->db->where('status = "menunggu diverifikasi"');

        return $this->db->get()->num_rows();
    }

    public function jml_undur()
    {
        $this->db->select('*');
        $this->db->from('undur');
        $this->db->where('status = "menunggu diverifikasi"');

        return $this->db->get()->num_rows();
    }

    public function jml_verifikasi()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('is_active = 0');

        return $this->db->get()->num_rows();
    }



    public function get_siswaId($id)
    {
        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }

    public function edit_akun($id)
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'role_id' => htmlspecialchars($this->input->post('role_id', true)),
            'is_active' => htmlspecialchars($this->input->post('is_active', true)),
        ];

        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    public function hapus_siswa($id)
    {

        // CRUD => Delete (untuk menghapus data) melalui parameter
        // dan sekaligus menghapus gambar dilokal
        $_id = $this->db->get_where('user', ['id' => $id])->row();
        $delete = $this->db->delete('user', ['id' => $id]);
        if ($delete) {
            unlink('assets/img/profile/' . $_id->image);
        }
    }
}
