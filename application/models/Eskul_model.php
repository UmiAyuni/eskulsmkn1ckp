<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Eskul_model extends CI_Model
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


    public function simpan($data)
    {
        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload//';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('logo')) {
            $uploadData = $this->upload->data();
            $logo = $uploadData['file_name'];
        } else {
            $s = $this->upload->display_errors();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>' . $s . '</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'

            );
            redirect('Eskul/tambah');
        }
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'Pembina' => htmlspecialchars($this->input->post('Pembina', true)),
            'Tempat' => htmlspecialchars($this->input->post('Tempat', true)),
            'Jadwal' => htmlspecialchars($this->input->post('Jadwal', true)),
            'Deskripsi' => htmlspecialchars($this->input->post('Deskripsi', true)),
            'logo' => $logo
        ];

        $this->db->insert('data_eskul', $data);
    }

    public function edit($id)
    {
        //script upload gambar ke Local + simpan nama gambar ke database
        $upload_logo = $_FILES['logo'];
        if ($upload_logo) {
            $config['upload_path'] = './assets/img/upload//';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '3000';
            $config['max_width'] = '1024';
            $config['max_height'] = '1000';
            $this->load->library('upload', $config); //load library upload dan inisialisasi $config

            if ($this->upload->do_upload('logo')) {
                $logo =  $this->upload->data('file_name');
                unlink('assets/img/upload/' . $this->input->post('logo_lama', true));
            } else {
                $logo = htmlspecialchars($this->input->post('logo_lama', true));
            }
        }

        // CRUD => Update (untuk mengupdate data) melalui parameter
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'Pembina' => htmlspecialchars($this->input->post('Pembina', true)),
            'Tempat' => htmlspecialchars($this->input->post('Tempat', true)),
            'Jadwal' => htmlspecialchars($this->input->post('Jadwal', true)),
            'Deskripsi' => htmlspecialchars($this->input->post('Deskripsi', true)),
            'logo' => $logo
        ];

        $this->db->where('id_eskul', $id);
        return $this->db->update('data_eskul', $data);
    }

    public function hapus($id)
    {

        // CRUD => Delete (untuk menghapus data) melalui parameter
        // dan sekaligus menghapus gambar dilokal
        $_id = $this->db->get_where('data_eskul', ['id_eskul' => $id])->row();
        $delete = $this->db->delete('data_eskul', ['id_eskul' => $id]);
        if ($delete) {
            unlink('assets/img/upload/' . $_id->logo);
        }
    }
}
