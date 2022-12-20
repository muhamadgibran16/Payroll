<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKaryawan extends CI_Controller {
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
        $data['title'] = "Data Karyawan";
        $data['karyawan'] = $this->ModelPenggajian->get_data('data_karyawan')->result();
        
		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
		$this->load->view('admin/dataKaryawan', $data);
		$this->load->view('temp/footer');
	}
	public function tambahData()
	{
		$data['title'] = "Tambah Data Karyawan";
		$data['jabatan'] = $this->ModelPenggajian->get_data('data_jabatan')->result();

		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
        $this->load->view('admin/tambahKaryawan', $data);
		$this->load->view('temp/footer');
	}
	public function tambahDataAksi()
	{
		$this->_rules();
		
		if($this->form_validation->run() == false){
			$this->tambahData();
		} else {
			$nik			= $this->input->post('nik');
			$nama_karyawan	= $this->input->post('nama_karyawan');
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$nama_jabatan	= $this->input->post('nama_jabatan');
			$tanggal_masuk	= $this->input->post('tanggal_masuk');
			$status			= $this->input->post('status');
			$hak_akses		= $this->input->post('hak_akses');
			$email			= $this->input->post('email');
			$password		= md5($this->input->post('password'));
			$img			= $_FILES['img']['name'];
			if($img == ''){
				
			}else{
				$config ['upload_path']		= './assets/images/profil/';
				$config ['allowed_types']	= 'jpeg|jpg|png|tiff';
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('img')){
					echo "Gagal Upload Foto";
				}else{
					$img = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nik'			=> $nik,
				'nama_karyawan'	=> $nama_karyawan,
				'jenis_kelamin'	=> $jenis_kelamin,
				'nama_jabatan' 	=> $nama_jabatan,
				'tanggal_masuk'	=> $tanggal_masuk,
				'status'		=> $status,
				'hak_akses'		=> $hak_akses,
				'email'	 		=> $email,
				'password'		=> $password,
				'img'			=> $img,
			);

			$this->ModelPenggajian->insert_data($data,'data_karyawan');
			$this->session->set_flashdata('pesan','<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Ditambahkan!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('admin/dataKaryawan');
		}
	}

	public function updateData($id)
	{
		$data['title'] = "Update Data Karyawan";

		$where = array('id_karyawan' => $id);
		$data['jabatan'] = $this->ModelPenggajian->get_data('data_jabatan')->result();
		$data['karyawan'] = $this->db->query("SELECT * FROM data_karyawan WHERE id_karyawan='$id'")->result();

		$this->load->view('temp/header', $data);
		$this->load->view('temp/topbar');
		$this->load->view('temp/sidebar');
        $this->load->view('admin/updateKaryawan', $data);
		$this->load->view('temp/footer');
	}

	public function updateDataAksi()
	{
		$this->_rules();
		
		if($this->form_validation->run() == false){
			$this->index();
		} else {
			$id			    = $this->input->post('id_karyawan');
			$nik			= $this->input->post('nik');
			$nama_karyawan	= $this->input->post('nama_karyawan');
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$nama_jabatan	= $this->input->post('nama_jabatan');
			$tanggal_masuk	= $this->input->post('tanggal_masuk');
			$status			= $this->input->post('status');
			$hak_akses		= $this->input->post('hak_akses');
			$email			= $this->input->post('email');
			$password		= md5($this->input->post('password'));
			$img			= $_FILES['img']['name'];
			if($img){
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
				'jenis_kelamin'	=> $jenis_kelamin,
				'nama_jabatan'	=> $nama_jabatan,
				'tanggal_masuk'	=> $tanggal_masuk,
				'status'		=> $status,
				'hak_akses'		=> $hak_akses,
				'email'	 		=> $email,
				'password'		=> $password,
				// 'img'			=> $img
			);

			$where = array('id_karyawan' => $id);

			$this->ModelPenggajian->update_data('data_karyawan', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Diperbaharui!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('admin/dataKaryawan');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nik', 'nik', 'required');
		$this->form_validation->set_rules('nama_karyawan', 'nama karyawan', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required');
		$this->form_validation->set_rules('nama_jabatan', 'nama jabatan', 'required');
		$this->form_validation->set_rules('tanggal_masuk', 'tanggal masuk', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');
		// $this->form_validation->set_rules('hak_akses', 'hak akses', 'required');
	}
	public function deleteData($id)
    {
        $where = array('id_karyawan' => $id);
        $this->ModelPenggajian->delete_data($where, 'data_karyawan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">Data Berhasil Dihapus
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/dataKaryawan');
    }
}
?>