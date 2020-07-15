<?

class Login extends Controller {
	function Login()
	{
		parent::Controller();
	}
	
	function index()
	{
		$this->load->view('admin/login_form');
	}
	
	function validate_credentials()
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query) // if the user validated
		{
			$query = $this->membership_model->get_user_data();
			foreach($query->result() as $row)
			{
				$userid  = $row->id;
				$admin_permission = $row->admin_permission;
				$username = $row->username;
				$email_address = $row->email_address;
			}

				if($admin_permission==1)
				{
					$data = array(
						// 'userid' => $userid,
						'username' => $this->input->post('username'),
						'is_logged_in' => true
					);

					$this->session->set_userdata($data);
					$data = array(
					        'username'=>$username,
							'email_address'=>$email_address
					        );
					$this->db->insert('login_data',$data);
					
					redirect('admin/site/');
				}
				else
				{
					$this->session->set_flashdata('reply', 'Your don\'t have admin permission.');
					redirect('admin/login');
				}
		}
		else
		{
			$this->session->set_flashdata('reply', 'Your username or password wrong.');
			redirect('admin/login');
		}
	}
}

?>