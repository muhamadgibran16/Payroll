<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->_rules();

		if ($this->form_validation->run() == false){
			$data['title'] = "Login";
			$this->load->view('temp/auth_header');
			$this->load->view('auth/login', $data);
			$this->load->view('temp/auth_footer');
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$cek = $this->ModelPenggajian->cek_login($email, $password);

			if ($cek == false) {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Username atau Password Salah!</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('auth');
			} else {
				$this->session->set_userdata('hak_akses', $cek->hak_akses);
				$this->session->set_userdata('img', $cek->img);
				$this->session->set_userdata('nama_karyawan', $cek->nama_karyawan);
				$this->session->set_userdata('nama_jabatan', $cek->nama_jabatan);
				$this->session->set_userdata('id_karyawan', $cek->id_karyawan);
				$this->session->set_userdata('nik', $cek->nik);
				switch ($cek->hak_akses) {
					case 1 : 
						redirect('admin/dashboard');
						break;
					case 2 : 
						redirect('karyawan/dashboard');
						break;
					default: break;
				}
			}
		}
	}

	public function _rules() {
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','required');
	}

	public function logout(){
		$this->session->sess_destroy();

		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Logout Berhasil!</div>');
		redirect('auth');
	}
}