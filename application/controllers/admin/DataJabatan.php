<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataJabatan extends CI_Controller {
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
        $data['title'] = "Data Jabatan";
        $data['jabatan'] = $this->ModelPenggajian->get_data('data_jabatan')->result();
        
		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
		$this->load->view('admin/dataJabatan', $data);
		$this->load->view('temp/footer');
	}
	
	public function tambahData()
	{
		$data['title'] = "Tambah Data Jabatan";
		
		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
        $this->load->view('admin/tambahJabatan', $data);
		$this->load->view('temp/footer');
	}

	public function tambahDataAksi()
	{
		$this->_rules();
		
		if($this->form_validation->run() == false){
			$this->tambahData();
		} else {
			$nama_jabatan	= $this->input->post('nama_jabatan');
			$gaji_pokok		= $this->input->post('gaji_pokok');
			$transport		= $this->input->post('transport');
			$uang_makan		= $this->input->post('uang_makan');

			$data = array(
				'nama_jabatan'	=> $nama_jabatan,
				'gaji_pokok'	=> $gaji_pokok,
				'transport'		=> $transport,
				'uang_makan'	=> $uang_makan,
			);

			$this->ModelPenggajian->insert_data($data,'data_jabatan');
			$this->session->set_flashdata('pesan','<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Ditambahkan!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('admin/dataJabatan');
		}
	}

	public function updateData($id)
	{
		$data['title'] = "Update Data Jabatan";

		$where = array('id_jabatan' => $id);
		$data['jabatan'] = $this->db->query("SELECT * FROM data_jabatan WHERE id_jabatan='$id'")->result();
		
		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
        $this->load->view('admin/updateJabatan', $data);
		$this->load->view('temp/footer');
	}

	public function updateDataAksi()
	{
		$this->_rules();
		
		if($this->form_validation->run() == false){
			$this->index();
		} else {
			$id			    = $this->input->post('id_jabatan');
			$nama_jabatan	= $this->input->post('nama_jabatan');
			$gaji_pokok		= $this->input->post('gaji_pokok');
			$transport		= $this->input->post('transport');
			$uang_makan		= $this->input->post('uang_makan');

			$data = array(
				'nama_jabatan'	=> $nama_jabatan,
				'gaji_pokok'	=> $gaji_pokok,
				'transport'		=> $transport,
				'uang_makan'	=> $uang_makan,
			);

			$where = array('id_jabatan' => $id);

			$this->ModelPenggajian->update_data('data_jabatan', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Diperbaharui!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('admin/dataJabatan');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama_jabatan', 'nama jabatan', 'required');
		$this->form_validation->set_rules('gaji_pokok', 'gaji pokok', 'required');
		$this->form_validation->set_rules('transport', 'transport', 'required');
		$this->form_validation->set_rules('uang_makan', 'uang makan', 'required');
	}
	public function deleteData($id)
    {
        $where = array('id_jabatan' => $id);
        $this->ModelPenggajian->delete_data($where, 'data_jabatan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">Data Berhasil Dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/dataJabatan');
    }
}
?>