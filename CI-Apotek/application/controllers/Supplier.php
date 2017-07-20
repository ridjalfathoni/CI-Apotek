<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Supplier_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['tampilan'] = "Supplier/supplier";
			$data['supplier'] = $this->Supplier_model->get_data_supplier();
			$this->load->view('template', $data);
		} else {
			$this->load->view('login');
		}
	}

	public function tambah()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['tampilan'] = "Supplier/tambah_supplier";
			$this->load->view('template', $data);
		} else {
			$this->load->view('login');
		}
		
	}

	public function submit()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$this->form_validation->set_rules('kd_sup', 'KD_SUPPLIER', 'trim|required');
			$this->form_validation->set_rules('nm_sup', 'NAMA_SUPPLIER', 'trim|required');
			$this->form_validation->set_rules('almt', 'ALAMAT', 'trim|required');
			$this->form_validation->set_rules('kota', 'KOTA', 'trim|required');
			$this->form_validation->set_rules('no_telp', 'TELP', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if ($this->Supplier_model->insert() == TRUE) {
					$data['notif'] = ' Supplier Berhasil Di Tambahkan';
					$data['tampilan'] = 'Supplier/tambah_supplier';
					$this->load->view('template', $data);

				} else {
					$data['notif'] = 'Supplier Gagal! Di Tambahkan';
					$data['tampilan'] = 'Supplier/tambah_supplier';
					$this->load->view('template', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$data['tampilan'] = 'Supplier/tambah_supplier';
				$this->load->view('template', $data);
			}
		} else {
			$this->load->view('login');
		}
	}

	public function edit()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['tampilan'] = 'Supplier/edit';

			$this->load->view('template', $data);
		} else {
			$this->load->view('login');
		}
	}

	/*public function data_supplier()
	{	
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['tampilan'] = 'Supplier/supplier';
			$data['supplier'] = $this->Supplier_model->get_data_supplier();
			$this->load->view('template', $data);
		} else {		
		 $this->load->view('login');
		}
	}*/
}

/* End of file supplier.php */
/* Location: ./application/controllers/supplier.php */