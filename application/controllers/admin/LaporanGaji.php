<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanGaji extends CI_Controller {
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
        $data['title'] = "Laporan Laporan Gaji Karyawan";

		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
		$this->load->view('admin/LaporanGaji', $data);
		$this->load->view('temp/footer' );
	}
	public function cetakGaji() {
        $data['title'] = "Cetak Data Gaji Karyawan";

        if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $bulantahun = $bulan.$tahun;
        }else{
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan.$tahun;
        }
        $data['potongan'] = $this->ModelPenggajian->get_data('potongan_gaji')->result();
        $data['cetakgaji'] = $this->db->query("SELECT data_karyawan.nik, data_karyawan.nama_karyawan, data_karyawan.jenis_kelamin, 
        data_jabatan.nama_jabatan, data_jabatan.gaji_pokok, data_jabatan.transport, data_jabatan.uang_makan, data_absensi.alpha
        FROM data_karyawan INNER JOIN data_absensi on data_absensi.nik = data_karyawan.nik
        INNER JOIN data_jabatan on data_jabatan.nama_jabatan = data_karyawan.nama_jabatan
        WHERE data_absensi.bulan = '$bulantahun'
        ORDER BY data_karyawan.nama_karyawan ASC")->result();

		$this->load->view('temp/head_cetak', $data);
		// $this->load->view('temp/topbar');
		// $this->load->view('temp/sidebar');
		$this->load->view('admin/cetakGaji', $data);
		$this->load->view('temp/foot_cetak');
    }
}
?>