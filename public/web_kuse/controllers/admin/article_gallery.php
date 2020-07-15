<?

class Article_gallery extends Controller {
		
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
		$data['query'] = $this->db->get('article_gallery');
		$data['album_id'] = $id;
		$data['title'] = "Gallery Manager";
		$data['main'] = 'admin/admin_article_gallery_upload';
		$this->load->view('admin/admin_template', $data);
	}
	
	function upload_activity_run()
	{
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '4048';
		$config['max_width']  = '2024';
		$config['max_height']  = '2024';
		$this->load->library('upload', $config);
		$id = $this->input->post('album_id');


		for($num=1;$num<=5;$num++) {
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('userfile'.$num))
			{
				$error = array('error' => $this->upload->display_errors());
				$path1 = '';
			}
			else
			{
				$data['upload_data1'] = '';
				$data['upload_data1'] = $this->upload->data('userfile'.$num);
				$path1 = 'uploads/'.$data['upload_data1']['file_name'];

				$data = array(
					'album_id'=>$id,
					'field_order'=>$this->input->post('field_order'.$num),
					'image'=>$path1,
					'title'=>$this->input->post('title'.$num),
					'group'=>$this->input->post('group'.$num)
			  );
				$this->db->insert('article_gallery',$data);
			}
		}


		$this->index($id);
	}
	
	function delete_image($id)
	{
		$album_id = $this->category_model->get_album_id($id);
		
		// get image url
		$this->db->where('id', $id);
		$query = $this->db->get('article_gallery');
		$row = $query->row();
		$file = $row->image;

		// delete file on server
		if(is_file($file)) {
    	unlink($file);
    }

    // delete database
		$this->db->where('id', $id);
		$this->db->delete('article_gallery');
		redirect('admin/article_gallery/index/'.$album_id);
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
				$this->db->insert('article_gallery',$data);
				$i++;
			}
		}
		$this->index($id);
	}
}
?>