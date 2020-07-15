<?php

class currency_model extends Model{
	
	function currency_model(){
		parent::Model();
	}
	
	function get_country_rate($country)
	{			
		$this->db->select('convert_rate'); #Because I need the value
		$this->db->where('printable_name', $country);
		$query = $this->db->get('country');
		$row = $query->row_array();
		return $row['convert_rate'];
		$query->free_result();
	}
	
}
?>