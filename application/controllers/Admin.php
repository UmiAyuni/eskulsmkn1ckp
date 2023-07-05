<?php

use Dompdf\Dompdf;

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    //Controller untuk dashboard admin(halaman pertama kali ditampilkan saat admin log in)
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pendaftar'] = $this->Admin_model->jml_daftar();
        $data['komplan'] = $this->Admin_model->jml_komplan();
        $data['undur'] = $this->Admin_model->jml_undur();
        $data['verifikasi'] = $this->Admin_model->jml_verifikasi();
        $data['siswa'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    //Controller untuk melihat data pendaftar eskul
    public function pendaftar()
    {
        $data['title'] = 'Data Pendaftar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['pendaftar'] = $this->db->get('formulir_daftar')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/pendaftar', $data);
        $this->load->view('templates/footer');
    }

    public function edit_pendaftar($id)
    {
        $data['title'] = 'Data Pendaftar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pendaftar'] = $this->Admin_model->get_pendaftarById($id);
        $data['kelas'] = $this->db->get('kelas')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]', [
            'required' => 'Nama harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('tempat', 'Tempat', 'required|min_length[3]', [
            'required' => 'Tempat harus diisi',
            'min_length' => 'Tempat terlalu pendek'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal_lahir', 'required|min_length[3]', [
            'required' => 'Tanggal_lahir harus diisi',
            'min_length' => 'Tanggal_lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
            'required' => 'Kelas harus diisi',
            'min_length' => 'Kelas terlalu pendek'
        ]);

        $this->form_validation->set_rules('no_wa', 'No_whatsapp', 'required|min_length[3]', [
            'required' => 'No_whatsapp harus diisi',
            'min_length' => 'No_whatsapp terlalu pendek'
        ]);

        $this->form_validation->set_rules('alasan', 'Alasan', 'required|min_length[3]', [
            'required' => 'Alasan harus diisi',
            'min_length' => 'Alasan terlalu pendek'
        ]);

        $this->form_validation->set_rules('status', 'Status', 'required|min_length[3]', [
            'required' => 'Status harus diisi',
            'min_length' => 'Status terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {

            $data['pendaftar'] = $this->Admin_model->get_pendaftarById($id);
            $data['kelas'] = $this->db->get('kelas')->result_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/edit_pendaftar', $data);
            $this->load->view('templates/footer');
        } else {

            $data['pendaftar'] = $this->Admin_model->get_pendaftarById($id);

            $this->Admin_model->edit_pendaftar($id);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Pendaftaran <strong>berhasil</strong> diedit!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
            );
            redirect('admin/pendaftar');
        }
    }

    public function hapus_pendaftar($id)
    {

        $this->Admin_model->hapus_daftar($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Pendaftar <strong>berhasil</strong> dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/pendaftar');
    }




    public function cetak_pendaftar_pdf()
    {
        $data['pendaftar'] = $this->db->get('formulir_daftar')->result_array();
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/eskulsmkn1ckp/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf();
        $this->load->view('cetak/cetakpendaftar_pdf', $data);
        $paper_size = 'A4'; //ukuran kertas
        $orientation = 'landscape'; //tipe format kertas

        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //convert to pdf
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('laporan_data_pendaftar_pdf', array('Attachment' => 0)); //nama file pdf yg dihasilkan
    }




    //Controller untuk melihat data komplain dari siswa
    public function komplain_siswa()
    {
        $data['title'] = 'Data Komplain';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['komplan'] = $this->db->get('komplan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/komplain_siswa', $data);
        $this->load->view('templates/footer');
    }


    public function edit_komplain($id)
    {
        $data['title'] = 'Data Komplain';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['komplan'] = $this->Admin_model->get_komplainById($id);
        $data['kelas'] = $this->db->get('kelas')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]', [
            'required' => 'Nama harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
            'required' => 'Kelas harus diisi',
            'min_length' => 'Kelas terlalu pendek'
        ]);

        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required|min_length[3]', [
            'required' => 'Keluhan harus diisi',
            'min_length' => 'Keluhan terlalu pendek'
        ]);


        $this->form_validation->set_rules('status', 'Status', 'required|min_length[3]', [
            'required' => 'Status harus diisi',
            'min_length' => 'Status terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $data['komplan'] = $this->Admin_model->get_komplainById($id);
            $data['kelas'] = $this->db->get('kelas')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/edit_komplain', $data);
            $this->load->view('templates/footer');
        } else {

            $data['komplan'] = $this->Admin_model->get_komplainById($id);

            $this->Admin_model->edit_komplan($id);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Komplain <strong>berhasil</strong> diverifikasi!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
            );
            redirect('admin/komplain_siswa');
        }
    }

    public function hapus_komplain($id)
    {
        $this->Admin_model->hapus_komplain($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Komplain <strong>berhasil</strong> dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/komplain_siswa');
    }




    public function cetak_komplan_pdf()
    {
        $data['komplan'] = $this->db->get('komplan')->result_array();
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/eskulsmkn1ckp/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf();
        $this->load->view('cetak/cetakkomplan_pdf', $data);
        $paper_size = 'A4'; //ukuran kertas
        $orientation = 'potrait'; //tipe format kertas

        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //convert to pdf
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('laporan_data_komplain_pdf', array('Attachment' => 0)); //nama file pdf yg dihasilkan
    }





    public function data_undur()
    {
        $data['title'] = 'Data Undur Diri';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['undur'] = $this->db->get('undur')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/undur_siswa', $data);
        $this->load->view('templates/footer');
    }

    public function edit_undur($id)
    {
        $data['title'] = 'Data Undur Diri';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['undur'] = $this->Admin_model->get_undurById($id);
        $data['kelas'] = $this->db->get('kelas')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]', [
            'required' => 'Nama harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);


        $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
            'required' => 'Kelas harus diisi',
            'min_length' => 'Kelas terlalu pendek'
        ]);

        $this->form_validation->set_rules('alasan', 'Alasan', 'required|min_length[3]', [
            'required' => 'Alasan harus diisi',
            'min_length' => 'Alasan terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $data['undur'] = $this->Admin_model->get_undurById($id);
            $data['kelas'] = $this->db->get('kelas')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/edit_undur', $data);
            $this->load->view('templates/footer');
        } else {
            $data['undur'] = $this->Admin_model->get_undurById($id);

            $this->Admin_model->edit_undur($id);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Undur Diri <strong>berhasil</strong> diedit!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
            );
            redirect('admin/data_undur');
        }
    }

    public function hapus_undur($id)
    {
        $this->Admin_model->hapus_undur($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Pengunduran diri <strong>berhasil</strong> dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/data_undur');
    }




    public function cetak_undur_pdf()
    {

        $data['undur'] = $this->db->get('undur')->result_array();
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/eskulsmkn1ckp/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf();
        $this->load->view('cetak/cetakundur_pdf', $data);
        $paper_size = 'A4'; //ukuran kertas
        $orientation = 'potrait'; //tipe format kertas

        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //convert to pdf
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('laporan_data_undur_diri_siswa_pdf', array('Attachment' => 0)); //nama file pdf yg dihasilkan
    }




    public function data_akun()
    {
        $data['title'] = 'Akun Siswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->db->where('role_id', 2);
        $data['siswa'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/data_akun', $data);
        $this->load->view('templates/footer');
    }

    public function edit_akun($id)
    {
        $data['title'] = 'Akun Siswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['siswa'] = $this->Admin_model->get_siswaId($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama harus diisi',
        ]);

        $this->form_validation->set_rules('role_id', 'Role_id', 'required');
        $this->form_validation->set_rules('is_active', 'Is_active', 'required');

        if ($this->form_validation->run() == false) {
            $data['siswa'] = $this->Admin_model->get_siswaId($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/edit_akun', $data);
            $this->load->view('templates/footer');
        } else {
            $data['siswa'] = $this->Admin_model->get_siswaId($id);
            $this->Admin_model->edit_akun($id);

            $this->_sendEmail();

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Akun siswa <strong>berhasil</strong> diverifikasi!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
            );
            redirect('admin/data_akun');
        }
    }

    private function _sendEmail()
    {

        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'eskulsmkckp@gmail.com',
            'smtp_pass' => 'efnydmmwajtgzxnt',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('eskulsmkckp@gmail.com', 'Web Pendaftaran Ekstrakurikuler SMKN 1 Cikampek');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Informasi akun Terverifikasi');
        $this->email->message('Selamat Akun anda di Web Pendaftaran Ekstrakurikuler SMKN 1 Cikampek telah terverifikasi ! Silahkan klik link untuk masuk : <a href=" ' . base_url('auth') . ' ">Masuk</a>');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function hapus_siswa($id)
    {
        $this->Admin_model->hapus_siswa($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Akun Siswa <strong>berhasil</strong> dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/data_akun');
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templates/footer');
    }

    public function edit_profile()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/edit_profile', $data);
            $this->load->view('templates/footer');
        } else {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();

            //konfigurasi sebelum gambar diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile//';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '3000';
                $config['max_width'] = '1080';
                $config['max_height'] = '1080';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
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

                    redirect('admin/edit_profile');
                }
            }

            $this->User_model->edit_profile();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Profil <strong>berhasil</strong> diedit!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
            );
            redirect('admin/profile');
        }
    }

  

 public function cetak_komplan()
    {
        $data['komplan'] = $this->db->get('komplan')->result_array();

        $this->load->view('cetak/cetakkomplan', $data);
    }


 public function cetak_komplan_excel()
    {
        $data = array(
            'title' => 'Laporan Komplain Siswa',
            'komplan' => $this->db->get('komplan')->result_array()
        );

        $this->load->view('cetak/cetak_komplan_excel', $data);
    }
}
