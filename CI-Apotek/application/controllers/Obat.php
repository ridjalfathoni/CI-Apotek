<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Obat_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['tampilan'] = "Obat/obat";
			$data['supplier'] = $this->Obat_model->get_supplier();
			$this->load->view('template', $data);	
		} else {
			$this->load->view('login');
		} 
	}

	public function tambah()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['tampilan'] = "Obat/tambah_obat";
		$this->load->view('template', $data);	
		} else {
			$this->load->view('login');
		}
		
	}

	public function submit()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$this->form_validation->set_rules('kd_obat', 'KD_OBAT', 'trim|required');
			$this->form_validation->set_rules('kd_sup', 'KD_SUPPLIER', 'trim|required');
			$this->form_validation->set_rules('nm_obat', 'NAMA_SUPPLIER', 'trim|required');
			$this->form_validation->set_rules('produsen', 'PRODUSEN', 'trim|required');
			$this->form_validation->set_rules('harga', 'HARGA', 'trim|required');
			$this->form_validation->set_rules('jml_stok', 'JML_STOK', 'trim|required');
			$this->form_validation->set_rules('foto', 'FOTO', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if ($this->Obat_model->insert() == TRUE) {
					$data['notif'] = ' Obat Berhasil Di Tambahkan';
					$data['tampilan'] = 'Obat/tambah_obat';
					$this->load->view('template', $data);

				} else {
					$data['notif'] = 'Supplier Gagal! Di Tambahkan';
					$data['tampilan'] = 'Obat/tambah_obat';
					$this->load->view('template', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$data['tampilan'] = 'Obat/tambah_obat';
				$this->load->view('template', $data);
			}
		} else {
			$this->load->view('login');
		}
	}

	public function kd_supplier()
	{
		$data['supplier'] = $this->Obat_model->get_supplier();
	}

}

/* End of file obat.php */
/* Location: ./application/controllers/obat.php */