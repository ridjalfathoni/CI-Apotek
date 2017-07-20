<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_model extends CI_Model {

	public function insert()
	{
		$data = array(
			'KD_OBAT' => $this->input->post('kd_obat'),
			'KD_SUPPLIER' => $this->input->post('kd_sup'),
			'NAMA_OBAT' => $this->input->post('nm_obat'),
			'PRODUSEN' => $this->input->post('produsen'),
			'HARGA' => $this->input->post('harga'),
			'JML_STOK' => $this->input->post('jml_stok'),
			'FOTO' => $this->input->post('foto')
			);
		$this->db->insert('obat', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_supplier()
	{
		return $this->db->order_by('KD_SUPPLIER')
						->get('supplier')
						->result();
	}

}

/* End of file Obat_model.php */
/* Location: ./application/models/Obat_model.php */