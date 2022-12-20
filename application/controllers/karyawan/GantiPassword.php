<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GantiPassword extends CI_Controller {

	public function index()
	{
		$data['title'] = "Change Password";
		
		$this->load->view('temp/header', $data);
		$this->load->view('temp/kar_topbar');
		$this->load->view('temp/kar_sidebar');
		$this->load->view('utility/gantiPassword', $data);
		$this->load->view('temp/footer');
	}

	public function action(){
		$newpass = $this->input->post('newpass');
		$repeat = $this->input->post('repeat');

		$this->form_validation->set_rules('newpass','new password','required|matches[repeat]');
		$this->form_validation->set_rules('repeat','repeat password','required');

		if ($this->form_validation->run() != false){
			$data = array('password' => md5($newpass));
			$id = array('id_karyawan' => $this->session->userdata('id_karyawan'));

			$this->ModelPenggajian->update_data('data_karyawan', $data, $id);
			$this->session->set_flashdata('pesan','<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Password Berhasil Diganti!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('auth');
		} else {
			$data['title'] = "Login";
			$this->load->view('temp/header');
			$this->load->view('temp/kar_topbar', $data);
			$this->load->view('temp/kar_sidebar');
			$this->load->view('karyawan/gantiPassword', $data);
			$this->load->view('temp/footer');
		}
	}
}