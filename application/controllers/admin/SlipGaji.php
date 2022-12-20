<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SlipGaji extends CI_Controller {
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
        $data['title'] = "Filter Slip Gaji ";
        $data['karyawan'] = $this->ModelPenggajian->get_data('data_karyawan')->result();

		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
		$this->load->view('admin/slipGaji', $data);
		$this->load->view('temp/footer' );
	}
	public function cetakSlip()
	{
		$data['title'] = "Cetak Slip Gaji ";
		$data['potongan'] = $this->ModelPenggajian->get_data('potongan_gaji')->result();
		$nama = $this->input->post('nama_karyawan');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$bulantahun = $bulan.$tahun;

		$data['print'] = $this->db->query("SELECT data_karyawan.nik, data_karyawan.nama_karyawan, data_jabatan.nama_jabatan, 
		data_jabatan.gaji_pokok, data_jabatan.transport, data_jabatan.uang_makan, data_absensi.alpha, data_absensi.bulan
		FROM data_karyawan INNER JOIN data_absensi ON data_absensi.nik=data_karyawan.nik
		INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_karyawan.nama_jabatan
		WHERE data_absensi.bulan = '$bulantahun' AND data_absensi.nama_karyawan='$nama'")->result();
		// var_dump($slip);
		// die();

		$this->load->view('temp/head_cetak', $data);
		$this->load->view('admin/cetakSlip', $data);
		$this->load->view('temp/foot_cetak');
	}
}
?>