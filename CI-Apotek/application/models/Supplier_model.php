<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {

	public function insert()
	{
		$data = array(
			'KD_SUPPLIER' => $this->input->post('kd_sup'),
			'NAMA_SUPPLIER' => $this->input->post('nm_sup'),
			'ALAMAT' => $this->input->post('almt'),
			'KOTA' => $this->input->post('kota'),
			'TELP' => $this->input->post('no_telp')
			);
		$this->db->insert('supplier', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_supplier(){
		return $this->db->get('supplier')
						->result();
	}

	public function get_data_supplier_by_id($id_pe)
	{
		# code...
	}
}

/* End of file supplier_model.php */
/* Location: ./application/models/supplier_model.php */