<?php

class Size_model extends Model{

	function Size_model(){

		parent::Model();

	}
	
	function getSize_Guide(){
		$data[0] = 'none';
		$query = $this->db->get('size_guide');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$data[$row['id']] = $row['title'];
			}
		}
		return $data;
		$query->free_result();
	}
	
	function getSize($id) {
		$data = array();
		$option = array('id' => $id);
		$query = $this->db->getwhere('size', $option,1);
		if ($query->num_rows() > 0) {
			$data = $query->row_array();
		}
		
		$query->free_result();
		return $data;
	}
	
	function getAllSize() {
		$data = array();
	}
	
	function getActiveSize() {
		$data = array();
		$this->db->select('id,name');
		$this->db->where('status', 'active');
		$query = $this->db->get('size');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[$row['id']] = $row['name'];
			}
		}
		
		$query->free_result();
		return $data;
	}
	
} // end class
?>