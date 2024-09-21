<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_siswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('tambah_siswa');
	}
	public function tambah()
	{
		$this->load->model('siswa_model');

		$data['siswa'] = $this->siswa_model->tambahSiswa();
		
		redirect('admin');
		$this->load->view('templete/tambah_header');
		$this->load->view('tambah', $data);
		$this->load->view('templete/tambah_footer');
	}
}
