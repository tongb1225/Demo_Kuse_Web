<?

class Activity_upload extends Controller {
		
	function __construct()
	{
		parent::Controller();
		$this->load->model('membership_model');
		$this->load->model('category_model');
		$this->category_model->is_logged_in();
	}
	
	function index($id)
	{
						$this->db->order_by('id', 'asc');
						$this->db->where('album_id', $id);
		$data['query'] = $this->db->get('album_image');
		$data['album_id'] = $id;
		$data['title'] = "Activity Manager";
		$data['main'] = 'admin/admin_activity_upload';
		$this->load->view('admin/membership_area', $data);
	}
	
	function upload_activity_run()
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
		
		//var_dump($error);
		$id = $this->input->post('album_id');
		$data = array(
				'album_id'=>$id,
				'field_order'=>$this->input->post('field_order'),
				'image'=>$path1
		        );
		$this->db->insert('album_image',$data);
		$this->index($id);
	}
	
	function delete_image($id)
	{
		$album_id = $this->membership_model->CategoryName($id);
		
		$this->db->where('id', $id);
		$this->db->delete('album_image');
		$this->index($album_id);
	}

	function upload_folder()
	{
		echo $path = $this->input->post('path');
		echo $id = $this->input->post('album_id').'<br />';
		
		$this->load->helper('file');
		//var_dump($file);
		
		if ( ! get_filenames($path))
		{
			echo 'can not find folder';
		}
		else
		{
			$file = get_filenames($path);
			$i = 1;
			foreach ($file as $key => $value) {
				//echo $path.$value.'<br />';
				$path1 = $path.$value;
				$data = array(
						'album_id'=>$id,
						'field_order'=>$i,
						'image'=>$path1
				        );
				$this->db->insert('album_image',$data);
				$i++;
			}
		}
		$this->index($id);
	}
}
?>