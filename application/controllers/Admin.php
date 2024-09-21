<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Admin extends CI_Controller {

	public $siswa_model;

	
	public function index()
	{
		$this->load->model('siswa_model');
		$data['siswa'] = $this->siswa_model->getSiswa();
		$this->load->view('templete/admin_header');
		$this->load->view('templete/menu');
		$this->load->view('admin', $data);
		$this->load->view('templete/admin_footer');
		
		
		
	}
	public function hapus($nis)
	{
		$this->db->delete('siswa',['nis' => $nis]);
		redirect('admin');
	}

	public function edit($nis)
	{
		$this->load->model('siswa_model');
		$data['edit'] = $this->siswa_model->getSiswaByNis($nis);
		$data['alamat'] = ['batang','pekalongan','pemalang','tegal'];

		$this->load->view('templete/admin_header');
		$this->load->view('edit_siswa', $data);
		$this->load->view('templete/admin_footer');
	}

	public function update()
	{
		$data =
		[
			"nama" => $this->input->post('nama',true),
			"alamat" => $this->input->post('alamat',true),
			"no_telp" => $this->input->post('no_telp',true),	
		];
		$this->db->where('nis', $this->input->post('nis'));
		$this->db->update('siswa', $data);
		redirect('admin');
	}
}
