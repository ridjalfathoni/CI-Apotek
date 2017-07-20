<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detil extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['tampilan']="Detil/detil";
			$this->load->view('template', $data);
		} else {
			$this->load->view('login');
		}
	}

	public function tambah()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['tampilan']="Detil/tambah";
			$this->load->view('template', $data);
		} else {
			$this->load->view('login');
		}
	}

	public function edit()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['tampilan']="Detil/edit";
			$this->load->view('template', $data);
		} else {
			$this->load->view('login');
		}
	}

}

/* End of file Detil.php */
/* Location: ./application/controllers/Detil.php */