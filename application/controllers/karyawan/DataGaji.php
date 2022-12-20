<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataGaji extends CI_Controller {
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
        $data['title'] = "Data Gaji";
        $nik = $this->session->userdata('nik');
        // var_dump($nik);
        // die;
        $data['potongan'] = $this->ModelPenggajian->get_data('potongan_gaji')->result();
        $data['gaji'] = $this->db->query("SELECT data_karyawan.nama_karyawan, data_karyawan.nik, 
        data_jabatan.gaji_pokok, data_jabatan.transport, data_jabatan.uang_makan, data_absensi.alpha, 
        data_absensi.bulan, data_absensi.id_absensi 
        FROM data_karyawan INNER JOIN data_absensi ON data_absensi.nik = data_karyawan.nik
        INNER JOIN data_jabatan ON data_jabatan.nama_jabatan = data_karyawan.nama_jabatan
        WHERE data_absensi.nik = '$nik' ORDER BY data_absensi.bulan DESC")->result();

		$this->load->view('temp/header', $data);
		$this->load->view('temp/kar_topbar');
		$this->load->view('temp/kar_sidebar');
		$this->load->view('karyawan/dataGaji', $data);
		$this->load->view('temp/footer' );
	}
    public function cetakSlip($id) {
		$data['title'] = "Cetak Slip Gaji ";
		$data['potongan'] = $this->ModelPenggajian->get_data('potongan_gaji')->result();

		$data['print'] = $this->db->query("SELECT data_karyawan.nik, data_karyawan.nama_karyawan, data_jabatan.nama_jabatan, 
		data_jabatan.gaji_pokok, data_jabatan.transport, data_jabatan.uang_makan, data_absensi.alpha, data_absensi.bulan
		FROM data_karyawan INNER JOIN data_absensi ON data_absensi.nik=data_karyawan.nik
		INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_karyawan.nama_jabatan
		WHERE data_absensi.id_absensi = '$id'")->result();
		// var_dump($slip);
		// die();

		$this->load->view('temp/head_cetak', $data);
		$this->load->view('karyawan/cetakSlip', $data);
		$this->load->view('temp/foot_cetak');
    }
}

?>