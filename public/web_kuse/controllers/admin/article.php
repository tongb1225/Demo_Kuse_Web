<?

class Article extends Controller {

	function __construct()
	{
		parent::Controller();
		$this->load->model('category_model');
		$this->category_model->is_logged_in();
		$this->load->library('images');
	}

	function index()
	{
		$data['filter'] = $this->input->post('filter');
		$this->db->select('article.*, article_category.title');
		$this->db->join('article_category', 'article_category.id = article.article_category');
		if($data['filter']=='0' or $data['filter']=="" or !isset($data['filter']))
		{
			$this->db->order_by('article_id', 'DESC');
			$data['query'] = $this->db->get('article');
		}
		else
		{
			$this->db->order_by('article_id', 'DESC');
			$this->db->where('article_category', $data['filter']);
			$data['query'] = $this->db->get('article');
		}

		$data['title'] = "Article Manager";
		$data['main'] = 'admin/admin_article_list';
		$data['table'] = 'article';
		$this->load->view('admin/admin_template', $data);
	}

	function create_article()
	{
		$data['table'] = 'article';
		$data['title'] = "Create Article";
		$data['main'] = 'admin/admin_article_create';
		$this->load->view('admin/admin_template', $data);
	}

	function create_article_run()
	{
		$config['upload_path'] = 'uploads/images/article/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '4096';
		$config['max_width']  = '4096';
		$config['max_height']  = '2730';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('userfile1'))
		{
			$error = array('error' => $this->upload->display_errors());
			$path1 = 'images/thumb.png';
			$thumb = 'images/thumb.png';
		}
		else
		{
			$data['upload_data1'] = $this->upload->data('userfile1');
			$path1 = $config['upload_path'].$data['upload_data1']['file_name'];
			$thumb = 'uploads/images/article/resize/'.$data['upload_data1']['file_name'];
			$this->image($data['upload_data1']['file_name'], '200');
		}

		$data = array(
      'article_category'=>$this->input->post('article_category'),
			'article_title'=>$this->input->post('article_title'),
			'article_header'=>$this->input->post('article_header'),
			'article_content'=>$this->input->post('article_content'),
			'article_image'=>$path1,
			'article_title_en'=>$this->input->post('article_title_en'),
			'article_header_en'=>$this->input->post('article_header_en'),
			'article_content_en'=>$this->input->post('article_content_en'),
			'userid'=>$this->session->userdata('userid'),
			'article_thumb'=>$thumb,
			'status'=>$this->input->post('status')
		);
		$this->db->insert('article',$data);
		$this->index();
	}

	function edit_article($id)
	{
		$query = $this->db->get_where('article', array('article_id' => $id));
		$data['row'] = $query->row();
		$data['table'] = 'article';
		$data['title'] = "Edit Article";
		$data['main'] = 'admin/admin_article_edit';
		$this->load->view('admin/admin_template', $data);
	}

	function edit_article_run()
	{
		$config['upload_path'] = 'uploads/images/article/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '4096';
		$config['max_width']  = '4096';
		$config['max_height']  = '2730';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('userfile1'))
		{
			$error = array('error' => $this->upload->display_errors());
			$path1 = $this->input->post('article_image');
			$thumb = $this->input->post('article_thumb');
		}
		else
		{
			$data['upload_data1'] = $this->upload->data('userfile1');
			$path1 = 'uploads/images/article/'.$data['upload_data1']['file_name'];
			$thumb = 'uploads/images/article/resize/'.$data['upload_data1']['file_name'];
			$this->image($data['upload_data1']['file_name'], '200');
		}


		$id = $this->input->post('article_id');
		$data = array(
					'article_category'=>$this->input->post('article_category'),
					'article_title'=>$this->input->post('article_title'),
					'article_header'=>$this->input->post('article_header'),
					'article_content'=>$this->input->post('article_content'),
					'article_image'=>$path1,
					'article_title_en'=>$this->input->post('article_title_en'),
					'article_header_en'=>$this->input->post('article_header_en'),
					'article_content_en'=>$this->input->post('article_content_en'),
					'userid'=>$this->session->userdata('userid'),
					'article_thumb'=>$thumb,
					'status'=>$this->input->post('status')
		    );

		// echo $this->input->post('tags');
		$this->db->where('article_id', $id);
		$this->db->update('article', $data);
		$this->index();
	}

	function delete_article($id)
	{
		$this->db->where('article_id', $id);
		$this->db->delete('article');
		redirect('admin/article');
	}

	function image ($filename, $width)
	{
    $original = $filename;
    $new = $filename;
    $originalPath = 'uploads/images/article/';
    $newPath = 'uploads/images/article/resize/';

    // Create square thumbnail example
    $this->images->squareThumb($originalPath.$original, $newPath.$new, 200);

    // Create resized thumbnail example
    // $this->images->resize($originalPath . $original, $width, 5000, $newPath . $new);

    // Create squared image
    // $this->images->square($originalPath . $original, $newPath . $new);
	}

}

?>
