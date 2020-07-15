<?

class User extends Controller {
		
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
			echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';
			die();
		}
	}
	
	function index()
	{
 		$data['title'] = "User Manager";
		$data['main'] = 'admin/admin_user_list';
		$data['table'] = 'membership';
		$data['query'] = $this->db->get('membership');
		$this->load->view('admin/admin_template', $data);
	}
	
	function create_user()
	{
		$data['title'] = "Create User";
		$data['main'] = 'admin/admin_user_create';
		$this->load->view('admin/admin_template', $data);
	}
	
	function create_user_run()
	{		
		$data = array(
		        'first_name'=>$this->input->post('first_name'),
				'last_name'=>$this->input->post('last_name'),
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password')),
				'email_address'=>$this->input->post('email_address'),
				'admin_permission'=>'1'
		        );
		$this->db->insert('membership',$data);
		$this->index();
	}
	
	function edit_user($id)
	{
		$query = $this->db->get_where('membership', array('id' => $id));
		foreach($query->result() as $row):
		$data['id'] = $row->id;
		$data['first_name'] = $row->first_name;
		$data['last_name'] = $row->last_name;
		$data['username'] = $row->username;
		$data['password'] = $row->password;
		$data['email_address'] = $row->email_address;
		endforeach;
		
		$data['title'] = "Edit User";
		$data['main'] = 'admin/admin_user_edit';
		$this->load->view('admin/admin_template', $data);
	}
	
	function edit_user_run()
	{			
		$password = $this->input->post('password');
		if(strlen($password) < 6)
		{
			$password = $this->input->post('old_pass');
		}
		else
		{
			$password = md5($this->input->post('password'));
		}
			
		$id = $this->input->post('id');
		$data = array(
		            'first_name'=>$this->input->post('first_name'),
					'last_name'=>$this->input->post('last_name'),
					'username'=>$this->input->post('username'),
					'password'=>$password,
					'email_address'=>$this->input->post('email_address')
		            );

		$this->db->where('id', $id);
		$this->db->update('membership', $data);
		$this->index();
	}
	
	function delete_user($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('membership');
		$this->index();
	}
	
}

?>