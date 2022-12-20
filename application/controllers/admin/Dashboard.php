<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('hak_akses') != 1){
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
		$data['data_karyawan'] = $this->ModelPenggajian->get_data('data_karyawan')->result();


		$karyawan = $this->db->query("SELECT * FROM data_karyawan");
		$data['karyawan'] = $karyawan->num_rows();
		$admin = $this->db->query("SELECT * FROM data_karyawan WHERE nama_jabatan = 'Admin'");
		$data['admin'] = $admin->num_rows();
		$jabatan = $this->db->query("SELECT * FROM data_jabatan");
		$data['jabatan'] = $jabatan->num_rows();
		$absensi = $this->db->query("SELECT * FROM data_absensi");
		$data['absensi'] = $absensi->num_rows();

		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('temp/footer' );
	}
}
?>