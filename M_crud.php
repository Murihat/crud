<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	public function input($data = array()){
		$this->db->insert('r_crud', $data);
	}

	public function tampil(){
		return $this->db->get('r_crud')->result();
	}

	public function tampilEdit($id = NULL){
		return $this->db->get_where('r_crud', array('id' => $id))->row();
	}

	public function editData($data = array(), $id){
		$this->db->update('r_crud', $data, array('id' => $id));
	}

	public function delete($id = NULL){
		$this->db->delete('r_crud', array('id' => $id));
	}
}
