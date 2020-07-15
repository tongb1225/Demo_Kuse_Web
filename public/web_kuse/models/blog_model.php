<?php

class blog_model extends Model{
	
	function currency_model(){
		parent::Model();
	}
	
	function get_all_blog($num, $offset)
	{			
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->order_by('blog_id', 'DESC');
		$this->db->limit($num, $offset);
		$query = $this->db->get();
		return $query;
		$query->free_result();
	}

	function get_blog_category(){
				 $this->db->order_by('order_field', 'ASC');
		$query = $this->db->get('blog_category');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$data[$row['id']] = $row['title'];
			}
		}
		else
		{
			$data = '';
		}
		return $data;
		$query->free_result();
	}

	function get_blog_category_name($id){
				 $this->db->where('id', $id);
		$query = $this->db->get('blog_category');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				return $row['title'];
			}
		}		
		return $data;
		$query->free_result();
	}

	function get_blog_by_category($num, $offset, $id)
	{		
		$this->db->where('blog_category', $id);
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->order_by('blog_id', 'DESC');
		$this->db->limit($num, $offset);
		$query = $this->db->get();
		return $query;
		$query->free_result();
	}
	
	function get_blog($id)
	{		
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->where('blog_permalink', $id);
		$query = $this->db->get();
		return $query;
		$query->free_result();
	}

	function get_permalink($id)
	{		
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->where('blog_id', $id);
		$query = $this->db->get();
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$permalink = $row['blog_permalink'];
			}
		}	
		return $permalink;
		$query->free_result();
	}
	
	function get_blog_author($id, $num, $offset)
	{		
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->join('customer', 'blog.post_id = customer.id');
		$this->db->where('post_id', $id);
		$this->db->order_by('blog_id', 'DESC');
		$this->db->limit($num, $offset);
		$query = $this->db->get();
		return $query;
		$query->free_result();
	}
	
	function get_blog_search($id)
	{		
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->join('customer', 'blog.post_id = customer.id');
		$this->db->like('blog_title', $id);
		$query = $this->db->get();
		return $query;
		$query->free_result();
	}
	
	function get_blog_reply($id)
	{				
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->join('customer', 'comment.comment_by = customer.id');
		$this->db->where('blog_id', $id );
		$this->db->order_by('comment_id', 'DESC');
		$query = $this->db->get();
		return $query;
		$query->free_result();
	}
	
	function gravatar($email)
	{
		// $email = "nemo1112@yahoo.com";
		$default = base_url().'images/user_thumb.jpg';
		$size = 100;
		
		$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( $email ) ) .
		"?default=" . urlencode( $default ) . "&size=" . $size;
		return $grav_url;
	}
	
	function get_user()
	{			
				 $this->db->where('blog', 'yes');
		$query = $this->db->get('customer');
		return $query;
		$query->free_result();
	}
	
	function hitcount($table, $id)
	{
		$this->db->select('blog_view'); #Because I need the value
		$this->db->where('blog_id', $id); #Because I need the variable column    entitled siteoverview
		$query = $this->db->get($table); #From the settings table
		$row = $query->row_array(); // get the row
		$hit = $row['blog_view']; // return the value
		$hit = $hit+1;


		$data = array(
		        	'blog_view'=>$hit
		     		);

		$this->db->where('blog_id', $id);
		$this->db->update($table, $data);
		$query->free_result();
	}
	
}
?>