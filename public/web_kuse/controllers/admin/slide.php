<?

class Slide extends Controller {

	function __construct()
	{
		parent::Controller();
		$this->is_logged_in();
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
		$data['title'] = "Slide Image Manager";
		$data['table'] = "slide";
		$this->db->order_by('order_field', 'ASC');
		$data['query'] = $this->db->get('slide');
		$data['main'] = 'admin/admin_slide_list';
		$this->load->view('admin/admin_template', $data);
	}

	function create_slide()
	{
		$data['title'] = "New Slide Create";
		$data['main'] = 'admin/admin_slide_create';
		$this->load->view('admin/admin_template', $data);
	}

	function create_slide_run()
	{

		$config['upload_path'] = 'uploads/slide/';
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
			var_dump($error);
			die;
		}
		else
		{
			$data['upload_data1'] = $this->upload->data('userfile1');
			$path1 = 'uploads/slide/'.$data['upload_data1']['file_name'];
		}
		//---------------------


		$data = array(
			'title'=>$this->input->post('title'),
			'content'=>$this->input->post('content'),
			'image'=>$path1,
			'link'=>$this->input->post('link'),
			'order_field'=>$this->input->post('order_field')
		);
		$this->db->insert('slide',$data);

		$this->index();
	}

	function edit_slide($id)
	{
		$query = $this->db->get_where('slide', array('id' => $id));
		foreach($query->result() as $row):
		$data['id'] = $row->id;
		$data['title'] = $row->title;
		$data['content'] = $row->content;
		$data['image'] = $row->image;
		$data['link'] = $row->link;
		$data['order_field'] = $row->order_field;
		endforeach;

		$data['title2'] = "New Slide Edit";
		$data['main'] = 'admin/admin_slide_edit';
		$this->load->view('admin/admin_template', $data);
	}

	function edit_slide_run()
	{
		$config['upload_path'] = 'uploads/slide/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '4048';
		$config['max_width']  = '2024';
		$config['max_height']  = '2024';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('userfile1'))
		{
			$error = array('error' => $this->upload->display_errors());
			$path1 = $this->input->post('tmppath1');
			//var_dump($error);
			//die;
		}
		else
		{
			$data['upload_data1'] = $this->upload->data('userfile1');
			$path1 = 'uploads/slide/'.$data['upload_data1']['file_name'];
		}
		//---------------------
		$id = $this->input->post('id');
		$data = array(
			'title'=>$this->input->post('title'),
			'content'=>$this->input->post('content'),
			'image'=>$path1,
			'link'=>$this->input->post('link'),
			'order_field'=>$this->input->post('order_field')
		);
		$this->db->where('id', $id);
		$this->db->update('slide',$data);

		$this->index();
	}

	function delete_slide($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('slide');

		$this->index();
	}


}
?>
