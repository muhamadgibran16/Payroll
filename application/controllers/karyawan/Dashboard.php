<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('hak_akses') != 2){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Tolong Login terlebih dulu!</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('auth');
		}
	}
	public function index()
	{
        $data['title'] = "Dashboard";

		$id = $this->session->userdata('id_karyawan');
		$data['karyawan'] = $this->db->query("SELECT * FROM data_karyawan where id_karyawan = '$id'")->result();

		$this->load->view('temp/header', $data);
		$this->load->view('temp/kar_topbar');
		$this->load->view('temp/kar_sidebar');
		$this->load->view('karyawan/dashboard', $data);
		$this->load->view('temp/footer' );
	}
	
	public function ubahprofil($id){
		$data['title'] = "Ubah Profil";

		$where = array('id_karyawan' => $id);
		$data['jabatan'] = $this->ModelPenggajian->get_data('data_jabatan')->result();
		$data['karyawan'] = $this->db->query("SELECT * FROM data_karyawan WHERE id_karyawan='$id'")->result();

		$this->load->view('temp/header', $data);
		$this->load->view('temp/kar_topbar');
		$this->load->view('temp/kar_sidebar');
        $this->load->view('karyawan/ubahprofil', $data);
		$this->load->view('temp/footer');
	}
	public function action()
	{
		$this->_rules();
		
		if($this->form_validation->run() == false){
			$this->index();
		} else {
			$id			    = $this->input->post('id_karyawan');
			$nik			= $this->input->post('nik');
			$nama_karyawan	= $this->input->post('nama_karyawan');
			$nama_jabatan	= $this->input->post('nama_jabatan');
			$status			= $this->input->post('status');
			$email			= $this->input->post('email');
			$img			= $_FILES['img']['name'];
			if($img){
				
			// }else{
				$config ['upload_path']		= './assets/images/profil/';
				$config ['allowed_types']	= 'jpeg|jpg|png|tiff';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('img')){
					$img = $this->upload->data('file_name');
					$this->db->set('img',$img);
				}else{
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'nik'			=> $nik,
				'nama_karyawan'	=> $nama_karyawan,
				'nama_jabatan'	=> $nama_jabatan,
				'status'		=> $status,
				'email'	 		=> $email,
			);

			$where = array('id_karyawan' => $id);

			$this->ModelPenggajian->update_data('data_karyawan', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Diperbaharui!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('karyawan/dashboard');
		}
	}

	public function _rules()
	{
		// $this->form_validation->set_rules('nik', 'nik', 'required');
		$this->form_validation->set_rules('nama_karyawan', 'nama karyawan', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		// $this->form_validation->set_rules('nama_jabatan', 'nama jabatan', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');
	}
}
?>