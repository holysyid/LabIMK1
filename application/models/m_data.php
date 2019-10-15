<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Controller {
	public function tampil_data()
	{
		$data=$this->db->get("pegawai");
		return $data;
	}

	public function simpan($data) {
		$this->db->insert('pegawai', $data);
		redirect('crud');
	}

	function edit_data($where, $table) {
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete_data($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
	}
}