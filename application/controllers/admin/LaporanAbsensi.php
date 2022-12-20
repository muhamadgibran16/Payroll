<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanAbsensi extends CI_Controller {
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
        $data['title'] = "Laporan Absensi Karyawan";

		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
		$this->load->view('admin/laporanAbsensi', $data);
		$this->load->view('temp/footer' );
	}
	public function cetakAbsensi()
	{
		$data['title'] = "Cetak Laporan Absensi Karyawan";
        if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $bulantahun = $bulan.$tahun;
        }else{
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan.$tahun;
        }

		$data['laporan_absensi'] = $this->db->query("SELECT * FROM data_absensi
		WHERE bulan='$bulantahun' ORDER BY nama_karyawan ASC")->result();

		$this->load->view('temp/head_cetak', $data);
		$this->load->view('admin/cetakAbsensi', $data);
		$this->load->view('temp/foot_cetak');
	}
}
?>