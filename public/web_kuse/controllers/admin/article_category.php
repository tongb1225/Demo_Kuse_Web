<?

class Article_category extends Controller {
		
	function __construct()
	{
		parent::Controller();
		$this->load->model('category_model');
		$this->category_model->is_logged_in();
	}
	
	function index()
	{
		$data['title'] = "Category Manager";
		$data['main'] = 'admin/admin_article_category';
		$data['table'] = 'article_category';
		
						 $this->db->where('parentid', 0);
						 $this->db->order_by("order_field", "ASC");
		$data['query'] = $this->db->get('article_category');
		$this->load->view('admin/admin_template', $data);
	}
	
	function create()
	{
		$data['category'] = $this->category_model->get_article_category_list();
		$data['title'] = "Create Category";
		$data['main'] = 'admin/admin_article_category_create';
		$this->load->view('admin/admin_template', $data);
	}
	
	function create_run()
	{
		// $config['upload_path'] = 'uploads/';
		// $config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']	= '4048';
		// $config['max_width']  = '2024';
		// $config['max_height']  = '2024';

		// $this->load->library('upload', $config);
		// $this->upload->initialize($config);
		// if ( ! $this->upload->do_upload('userfile1'))
		// {
		// 	$error = array('error' => $this->upload->display_errors());
		// 	$path1 = '';
		// }
		// else
		// {
		// 	$data['upload_data1'] = $this->upload->data('userfile1');
		// 	$path1 = 'uploads/'.$data['upload_data1']['file_name'];
		// }
		
		// $this->load->helper('form');
		$data = array(
		        'title'=>$this->input->post('title'),
				'description'=>$this->input->post('description'),
				'order_field'=>$this->input->post('order_field'),
				'status'=>$this->input->post('status'),
				'parentid'=>$this->input->post('parentid'),
				'position'=>$this->input->post('position')
		        );
		$this->db->insert('article_category',$data);
		$this->index();
	}
	
	function edit($id)
	{
		$query = $this->db->get_where('article_category', array('id' => $id));
		foreach($query->result() as $row):
			$data['id'] = $row->id;
			$data['title'] = $row->title;
			$data['order_field'] = $row->order_field;
			$data['position'] = $row->position;
			$data['description'] = $row->description;
			$data['status'] = $row->status;
			$data['parentid'] = $row->parentid;
		endforeach;
		
		$data['category'] = $this->category_model->get_article_category_list();
		$data['table'] = 'article_category';
		$data['title2'] = "Edit Category";
		$data['main'] = 'admin/admin_article_category_edit';
		$this->load->view('admin/admin_template', $data);
	}
	
	function edit_run()
	{		
		// $config['upload_path'] = 'uploads/';
		// $config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']	= '4048';
		// $config['max_width']  = '2024';
		// $config['max_height']  = '2024';

		// $this->load->library('upload', $config);
		// $this->upload->initialize($config);
		// if ( ! $this->upload->do_upload('userfile1'))
		// {
		// 	$error = array('error' => $this->upload->display_errors());
		// 	$path1 = $this->input->post('image1');
		// }
		// else
		// {
		// 	$data['upload_data1'] = $this->upload->data('userfile1');
		// 	$path1 = 'uploads/'.$data['upload_data1']['file_name'];
		// }
		
		$id = $this->input->post('id');
		$data = array(
		           	'title'=>$this->input->post('title'),
					'description'=>$this->input->post('description'),
					'order_field'=>$this->input->post('order_field'),
					'status'=>$this->input->post('status'),
					'parentid'=>$this->input->post('parentid'),
					'position'=>$this->input->post('position')
		            );
		
		$this->db->where('id', $id);
		$this->db->update('article_category', $data);
		$this->index();
	}
	
	function delete($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('article_category');
		
		$this->index();
	}

}
?>