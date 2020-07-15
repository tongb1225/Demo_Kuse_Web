<?

class Basic_setting extends Controller {
		
	function __construct()
	{
		parent::Controller();
		$this->is_logged_in();
		$this->load->helper('url');
	}
	
	
	function index()
	{
		$query = $this->db->get_where('setting', array('id' => "1"));
		foreach($query->result() as $row):
		$data['id'] = $row->id;
		$data['web_title'] = $row->web_title;
		$data['web_keyword'] = $row->web_keyword;
		$data['web_desc'] = $row->web_desc;
		$data['background_color'] = $row->background_color;
		$data['background_image'] = $row->background_image;
		$data['th_web_title'] = $row->th_web_title;
		$data['th_web_keyword'] = $row->th_web_keyword;
		$data['th_web_desc'] = $row->th_web_desc;
		$data['email'] = $row->email;
		endforeach;
	
		$data['title'] = "Website Setting";
		$data['main'] = 'admin/admin_basicsetting';
		$data['table'] = 'setting';
		$this->load->view('admin/admin_template', $data);
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
	
	function basic_setting_run()
	{
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '3000';
		$config['max_width']  = '3000';
		$config['max_height']  = '3000';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('userfile1'))
		{
			$error = array('error' => $this->upload->display_errors());
			$path = $this->input->post('tmppath1');
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$path = 'uploads/'.$data['upload_data']['file_name'];
		}
		
			// check if user want to delete
		$bg_color = $this->input->post('background_color');
		$bg_delete = $this->input->post('delete');
		if($bg_delete == 'delete')
		{
			//echo $bg_delete;
			$bg_color = '';
			$path = '';
		}
		
		$data = array(
		        'web_title'=>$this->input->post('web_title'),
				'web_keyword'=>$this->input->post('web_keyword'),
				'web_desc'=>$this->input->post('web_desc'),
				'background_color'=>$bg_color,
				'background_image'=>$path,
				'th_web_title'=>$this->input->post('th_web_title'),
				'th_web_keyword'=>$this->input->post('th_web_keyword'),
				'th_web_desc'=>$this->input->post('th_web_desc'),
				'email'=>$this->input->post('email')
		        );
		$this->db->where('id', '1');
		$this->db->update('setting',$data);
		$this->index();
	}
	
}
?>