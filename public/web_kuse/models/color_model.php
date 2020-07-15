<?php

class Color_model extends Model{

	function Color_model(){

		parent::Model();

	}
	
	function getColor($id) {
		$data = array();
		$option = array('id' => $id);
		$query = $this->db->getwhere('color', $option,1);
		if ($query->num_rows() > 0) {
			$data = $query->row_array();
		}
		
		$query->free_result();
		return $data;
	}
	
	function getAllColors() {
		$data = array();
	}
	
	function getActiveColor() {
		$data = array();
		$this->db->select('id,name');
		$this->db->where('status', 'active');
		$query = $this->db->get('color');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[$row['id']] = $row['name'];
			}
		}
		
		$query->free_result();
		return $data;
	}
	
	function getActiveColor2() {
		$data = array();
		$this->db->select('color,name');
		$this->db->where('status', 'active');
		$query = $this->db->get('color');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[$row['color']] = $row['name'];
			}
		}
		
		$query->free_result();
		return $data;
	}
	
} // end class
?>