<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['tampilan']="Dashboard/dashboard";
			$this->load->view('template', $data);			
		} else {
			$this->load->view('login');
		}

	}

	public function login()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if ($this->Admin_model->cek_user() == TRUE) {
					redirect(base_url('index.php/Admin'));
				}else{
					$data['notif'] = 'Login Gagal';
					$this->load->view('login', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login', $data);
			}
		}else{
			$this->load->view('login');
		}
	}
	public function logout()
	{
		$data = array('username' => '',
									'logged_in' => FALSE);
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
