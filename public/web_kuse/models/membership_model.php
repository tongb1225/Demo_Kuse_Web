<?
class Membership_model extends Model {
	
	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('membership');
		
		if($query->num_rows == 1)
		{
			return true;
		}
		$query->free_result();
	}
	
	function get_user_data()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('membership');
		
		if($query->num_rows == 1)
		{
			return $query;
		}
		$query->free_result();
	}
	
	function user_validate()
	{
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('customer');
		
		if($query->num_rows == 1)
		{
			return true;
		}
		$query->free_result();
	}
}
?>