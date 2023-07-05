<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('email')) {
			if ($this->session->userdata('role_id') == 1) {
				redirect('admin');
			} else {
				redirect('user');
			}
		}


		$this->load->view('pengunjung/header');
		$this->load->view('pengunjung/navbar');
		$this->load->view('pengunjung/masthead');
	}

	public function home()
	{
		if ($this->session->userdata('email')) {
			if ($this->session->userdata('role_id') == 1) {
				redirect('admin');
			} else {
				redirect('user');
			}
		}


		$this->load->view('pengunjung/header');
		$this->load->view('pengunjung/navbarx');
		$this->load->view('pengunjung/home');
		$this->load->view('pengunjung/footer');
	}

	public function eskul()
	{

		if ($this->session->userdata('email')) {
			if ($this->session->userdata('role_id') == 1) {
				redirect('admin');
			} else {
				redirect('user');
			}
		}

		//ambil data keyword (disini kalo user masukin nama eskul yg dia cari bakal ditampilin data eskul itu aja)
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$data['data_eskul'] = $this->Pengunjung_model->getEskulUser($data['keyword']);
			//disini kalo misalnya keywordnya null/ user gak masukin keyword semua data eskul bakal ditampilin
		} else {
			$data['keyword'] = null;
			$data['data_eskul'] = $this->db->get('data_eskul')->result_array();
		}

		$this->load->view('pengunjung/header');
		$this->load->view('pengunjung/navbarx');
		$this->load->view('pengunjung/eskul', $data);
		$this->load->view('pengunjung/footer');
	}


	public function eskul_detail($id)
	{

		if ($this->session->userdata('email')) {
			if ($this->session->userdata('role_id') == 1) {
				redirect('admin');
			} else {
				redirect('user');
			}
		}

		$data['data_eskul'] = $this->Pengunjung_model->geteskul_by_id($id);

		$this->load->view('pengunjung/header');
		$this->load->view('pengunjung/navbarx');
		$this->load->view('pengunjung/eskul_detail', $data);
		$this->load->view('pengunjung/footer');
	}
}
