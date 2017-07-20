<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['template'] = "Transaksi/tranaksi";
			$this->load->view('template', $data);
		} else {
			$this->load->view('login');
		}
		
	}

	public function tambah()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['template']="Transaksi/tambah_transaksi";
			$this->load->view('template', $data);
		} else {
			$this->load->view('login');
		}
	}

	public function edit()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['template']="Transaksi/edit";
			$this->load->view('template', $data);
		} else {
			$this->load->view('login');
		}
	}

}

/* End of file transaksi.php */
/* Location: ./application/controllers/transaksi.php */