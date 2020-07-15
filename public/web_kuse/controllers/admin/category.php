<?

class Category extends Controller {
		
	function __construct()
	{
		parent::Controller();
		$this->is_logged_in();
		$this->load->model('category_model');
	}
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !=true)
		{
			echo 'You don\'t have permission to access this page. '.anchor('admin/login', 'login');
			die();
		}
	}
	
	function index()
	{
		$data['title'] = "Category Manager";
		$data['main'] = 'admin/admin_category';
		$data['table'] = 'categories';
						 $this->db->order_by("order_field", "ASC");
						 $this->db->where('parentid', '0');
		$data['query'] = $this->db->get('categories');
		$this->load->view('admin/admin_template', $data);
	}
	
	function create_categories()
	{
		$data['table'] = 'news';
		$data['title'] = "Create Category";
		$data['main'] = 'admin/admin_category_create';
		$data['category'] = $this->category_model->getCategoryTree2Level();
		$this->load->view('admin/admin_template', $data);
	}
	
	function create_category_run()
	{
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '4048';
		$config['max_width']  = '2024';
		$config['max_height']  = '2024';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('userfile1'))
		{
			$error = array('error' => $this->upload->display_errors());
			$path1 = '';
		}
		else
		{
			$data['upload_data1'] = $this->upload->data('userfile1');
			$path1 = 'uploads/'.$data['upload_data1']['file_name'];
		}
		
		$slug = $this->category_model->create_unique_slug($this->input->post('name'), 'products');

		$data = array(
			'name'=>$this->input->post('name'),
			'shortdesc'=>$this->input->post('th_name'),
			'status'=>$this->input->post('status'),
			'parentid'=>$this->input->post('parentid'),
			'order_field'=>$this->input->post('order_field'),
			'image1'=>$this->input->post('th_name'),
			'permalink'=>$slug
		);
		$this->db->insert('categories',$data);
		$this->index();
	}
	
	function edit_categories($id)
	{
		$query = $this->db->get_where('categories', array('id' => $id));
		foreach($query->result() as $row):
		$data['id'] = $row->id;
		$data['name'] = $row->name;
		$data['longdesc'] = $row->longdesc;
		$data['status'] = $row->status;
		$data['parentid'] = $row->parentid;
		$data['order_field'] = $row->order_field;
		endforeach;
		
		$data['table'] = 'categories';
		$data['title'] = "Edit Category";
		$data['main'] = 'admin/admin_category_edit';
		$data['category'] = $this->category_model->getCategoryTree2Level();
		$this->load->view('admin/admin_template', $data);
	}
	
	function edit_categories_run()
	{		
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '4048';
		$config['max_width']  = '2024';
		$config['max_height']  = '2024';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('userfile1'))
		{
			$error = array('error' => $this->upload->display_errors());
			$path1 = $this->input->post('image1');
		}
		else
		{
			$data['upload_data1'] = $this->upload->data('userfile1');
			$path1 = 'uploads/'.$data['upload_data1']['file_name'];
		}
		
		$slug = $this->category_model->create_unique_slug($this->input->post('name'), 'products');
		$id = $this->input->post('id');
		$data = array(
			'name'=>$this->input->post('name'),
			'shortdesc'=>$this->input->post('th_name'),
			'status'=>$this->input->post('status'),
			'parentid'=>$this->input->post('parentid'),
			'order_field'=>$this->input->post('order_field'),
			'image1'=>$this->input->post('th_name'),
			'permalink'=>$slug
		);
		
		$this->db->where('id', $id);
		$this->db->update('categories', $data);
		$this->index();
	}
	
	function delete_categories($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('categories');
		$this->index();
	}

}
?>