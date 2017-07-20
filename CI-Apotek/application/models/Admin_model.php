<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function cek_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('USERNAME', $username)
				->where('PASSWORD', md5($password))
				->get('admin');

		if ($query->num_rows() > 0) {
			$data = array(
				'USERNAME' => $username,
				'logged_in' => TRUE
				);
				$this->session->set_userdata($data);
				return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete()
	{
		$query = $this->db->where('KD_USER', $id)
				->delete(oid);
	}

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */