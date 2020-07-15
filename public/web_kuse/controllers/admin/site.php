<?

class Site extends Controller {
		
	function __construct()
	{
		parent::Controller();
		$this->is_logged_in();
		$this->load->helper('url');
		$this->load->model('category_model');
	}
	
	
	function index()
	{
		$data['title'] = "Dashboard Home";
		$data['main'] = 'admin/admin_home';
		$this->load->view('admin/admin_template', $data);
	}
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !=true)
		{
			echo 'You don\'t have permission to access this page.'.anchor('admin/login', 'Login');
			die();
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('reply', 'You Have Been Logout');
		redirect('admin/login');
	}
	
	function news()
	{	
		$data['title'] = "News Manager";
		$data['main'] = 'admin_news';
		$data['table'] = 'news';
		$data['query'] = $this->db->get('news');
		$this->load->view('admin/admin_template', $data);
	}

	function content()
	{
		$data['title'] = "Content Manager";
		$data['main'] = 'admin/admin_content_list';
		$data['table'] = 'content';
		$data['query'] = $this->db->get('content');
		$this->load->view('admin/admin_template', $data);
	}
	
	function create_content()
	{		
		$data['table'] = 'content';
		$data['title'] = "Create Content";
		$data['main'] = 'admin/admin_content_create';
		$this->load->view('admin/admin_template', $data);
	}
	
	function create_content_run()
	{
		$this->load->helper('form');
		$data = array(
			'title'=>$this->input->post('title'),
			'body'=>$this->input->post('body'),
			'order_field'=>$this->input->post('order_field'),
			'th_title'=>$this->input->post('th_title'),
			'th_body'=>$this->input->post('th_body')
		);
		$this->db->insert('content',$data);
		redirect('admin/site/content','refresh');
	}
	
	function edit_content($id)
	{
		$query = $this->db->get_where('content', array('id' => $id));

		$data['row'] = $query->row();
		$data['table'] = 'content';
		$data['title'] = "Edit Content";
		$data['main'] = 'admin/admin_content_edit';
		$this->load->view('admin/admin_template', $data);
	}
	
	function edit_content_run()
	{		
		$id = $this->input->post('id');
		$data = array(
			'title'=>$this->input->post('title'),
			'body'=>$this->input->post('body'),
			'order_field'=>$this->input->post('order_field'),
			'th_title'=>$this->input->post('th_title'),
			'th_body'=>$this->input->post('th_body')
		);

		$this->db->where('id', $id);
		$this->db->update('content', $data);
		redirect('admin/site/content','refresh');
	}
	
	function delete_content($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('content');
		redirect('admin/site/content','refresh');
	}
	
}

?>