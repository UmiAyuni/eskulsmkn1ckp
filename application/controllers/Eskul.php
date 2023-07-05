<?php

use Dompdf\Dompdf;

defined('BASEPATH') or exit('No direct script access allowed');

class Eskul extends CI_Controller
{


    //Controller untuk melihat data eskul (data ini khusus ditampilkan di halaman admin aja)
    public function index()
    {
        $data['title'] = 'Data Ekstrakurikuler';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Eskul_model');
        $data['data_eskul'] = $this->Eskul_model->getEskul();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/eskul', $data);
        $this->load->view('templates/footer');
    }

    //Controller untuk tambah eskul (oleh admin)
    public function tambah()
    {
        $data['title'] = 'Tambah Ekstrakurikuler';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Ekstrakurikuler', 'required|min_length[3]', [
            'required' => 'Ekstrakurikuler harus diisi',
            'min_length' => 'Ekstrakurikuler terlalu pendek'
        ]);
        $this->form_validation->set_rules('Pembina', 'Pembina', 'required|min_length[3]', [
            'required' => ' Nama Pembina harus diisi',
            'min_length' => 'Nama Pembina terlalu pendek'
        ]);
        $this->form_validation->set_rules('Tempat', 'Tempat', 'required|min_length[3]', [
            'required' => 'Tempat harus diisi',
            'min_length' => 'Tempat terlalu pendek'
        ]);
        $this->form_validation->set_rules('Jadwal', 'Jadwal', 'required|min_length[3]', [
            'required' => 'Jadwal harus diisi',
            'min_length' => 'Jadwal terlalu pendek'
        ]);

        $this->form_validation->set_rules('Deskripsi', 'Deskripsi', 'required|min_length[3]', [
            'required' => 'Deskripsi harus diisi',
            'min_length' => 'Deskripsi terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/tambah_eskul', $data);
            $this->load->view('templates/footer');
        } else {

            $this->load->model('Eskul_model');
            $this->Eskul_model->simpan($data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Ekstrakurikuler <strong>berhasil</strong> ditambah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
            );
            redirect('eskul');
        }
    }


    //Ini controller buat edit eskul sama admin
    public function edit_eskul($id)
    {
        $data['title'] = 'Edit Ekstrakurikuler';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['data_eskul'] = $this->Eskul_model->geteskul_by_id($id);

        $this->form_validation->set_rules('nama', 'Ekstrakurikuler', 'required|min_length[3]', [
            'required' => 'Ekstrakurikuler harus diisi',
            'min_length' => 'Ekstrakurikuler terlalu pendek'
        ]);
        $this->form_validation->set_rules('Pembina', 'Pembina', 'required|min_length[3]', [
            'required' => ' Nama Pembina harus diisi',
            'min_length' => 'Nama Pembina terlalu pendek'
        ]);
        $this->form_validation->set_rules('Tempat', 'Tempat', 'required|min_length[3]', [
            'required' => 'Tempat harus diisi',
            'min_length' => 'Tempat terlalu pendek'
        ]);
        $this->form_validation->set_rules('Jadwal', 'Jadwal', 'required|min_length[3]', [
            'required' => 'Jadwal harus diisi',
            'min_length' => 'Jadwal terlalu pendek'
        ]);

        $this->form_validation->set_rules('Deskripsi', 'Deskripsi', 'required|min_length[3]', [
            'required' => 'Deskripsi harus diisi',
            'min_length' => 'Deskripsi terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {

            $data['data_eskul'] = $this->Eskul_model->geteskul_by_id($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/edit_eskul', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->model('Eskul_model');
            $this->Eskul_model->edit($id);
            //flashdata
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Ekstrakurikuler <strong>berhasil</strong> diedit
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
            );
            redirect('eskul');
        }
    }

    //Ini buat hapus data eskul sama admin
    public function hapus_eskul($id)
    {
        $this->load->model('Eskul_model');
        $this->Eskul_model->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Ekstrakurikuler <strong>berhasil</strong> dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('eskul');
    }


    //ini buat fungsi tombol pdf dihalaman data eskul (admin)
    public function cetak_eskul_pdf()
    {
        $this->load->model('Eskul_model');
        $data['data_eskul'] = $this->Eskul_model->getEskul();
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/eskulsmkn1ckp/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf();
        $this->load->view('cetak/cetakeskul_pdf', $data);
        $paper_size = 'A4'; //ukuran kertas
        $orientation = 'potrait'; //tipe format kertas

        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //convert to pdf
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('laporan_data_eskul_pdf', array('Attachment' => 0)); //nama file pdf yg dihasilkan

    }

    public function cetak_eskul()
    {
        $this->load->model('Eskul_model');
        $data['data_eskul'] = $this->Eskul_model->getEskul();

        $this->load->view('cetak/cetakeskul', $data);
    }


    public function cetak_eskul_excel()
    {
        $data = array(
            'title' => 'Laporan Ekstrakurikuler',
            'data_eskul' => $this->Eskul_model->getEskul()
        );
        $this->load->view('cetak/cetak_eskul_excel', $data);
    }

}
