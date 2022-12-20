<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PotonganGaji extends CI_Controller {
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
        $data['title'] = "Potongan Gaji";
        $data['potongan_gaji'] = $this->ModelPenggajian->get_data('potongan_gaji')->result();
        
		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
		$this->load->view('admin/potonganGaji', $data);
		$this->load->view('temp/footer');
	}
	
	public function tambahData()
	{
		$data['title'] = "Tambah Potongan Gaji";
		
		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
        $this->load->view('admin/tambahPotongan', $data);
		$this->load->view('temp/footer');
	}

	public function tambahDataAksi()
	{
		$this->_rules();
		
		if($this->form_validation->run() == false){
			$this->tambahData();
		} else {
			$potongan	        = $this->input->post('potongan');
			$jumlah_potongan	= $this->input->post('jumlah_potongan');

			$data = array(
				'potongan'	        => $potongan,
				'jumlah_potongan'	=> $jumlah_potongan,
			);

			$this->ModelPenggajian->insert_data($data,'potongan_gaji');
			$this->session->set_flashdata('pesan','<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Ditambahkan!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('admin/potonganGaji');
		}
	}

	public function updateData($id)
	{
		$data['title'] = "Update Potongan Gaji";

		$where = array('id_potongan' => $id);
		$data['potongan_gaji'] = $this->db->query("SELECT * FROM potongan_gaji WHERE id_potongan='$id'")->result();
		
		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
        $this->load->view('admin/updatePotongan', $data);
		$this->load->view('temp/footer');
	}

	public function updateDataAksi()
	{
		$this->_rules();
		
		if($this->form_validation->run() == false){
			$this->index();
		} else {
			$id                 = $this->input->post('id_potongan');
			$potongan	        = $this->input->post('potongan');
			$jumlah_potongan	= $this->input->post('jumlah_potongan');

			$data = array(
				'potongan'	        => $potongan,
				'jumlah_potongan'	=> $jumlah_potongan,
			);

			$where = array('id_potongan' => $id);

			$this->ModelPenggajian->update_data('potongan_gaji', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Diperbaharui!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('admin/potonganGaji');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('potongan', 'potongan', 'required');
		$this->form_validation->set_rules('jumlah_potongan', 'jumlah_potongan', 'required');

	}

	public function deleteData($id)
    {
        $where = array('id_potongan' => $id);
        $this->ModelPenggajian->delete_data($where, 'potongan_gaji');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">Data Berhasil Dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/potonganGaji');
    }
}
?>