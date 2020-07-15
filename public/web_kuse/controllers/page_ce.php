<?php

class Page_ce extends Controller {

	function __construct() {
    parent::Controller();
		$this->load->model('category_model');
  }

	function index() {
		$this->db->order_by('front_order', 'ASC');
		$this->db->where('front_page', 1);
		$data['product'] = $this->db->get('products');
		$data['title'] = 'HOME';
		$data['main'] = 'page_home2';
		$data['slide'] = true;
		$data['home'] = true;

		$this->load->view('template3', $data);
	}

	function search()
	{
		$data['title'] = 'Search';
		$data['navlist'] = $this->category_model->getAllTopCategory();
		$search = $this->input->post('search');
		$this->db->where('status', 'active');
		$this->db->like('name', $search);
		$data['product'] = $this->db->get('products');
		$data['page_name'] = 'Search';
		$data['main'] = 'page_search';
		$this->load->view('template3', $data);
	}

	function content($id)
	{
		$this->db->where('id', $id);
		$data['query'] = $this->db->get('content');
		$data['title'] = $this->get_name('content', 'title', $id);
		$data['main'] = 'page_read_content';
		$this->load->view('template3', $data);
	}

	function get_name($table,$field,$where)
	{
		$this->db->select($field); #Because I need the value
		$this->db->where('id', $where); #Because I need the variable column    entitled siteoverview
		$query = $this->db->get($table); #From the settings table
		$row = $query->row_array(); // get the row
		return $row[$field]; // return the value
	}

	function contact()
	{
		$data['title'] = 'CONTACT';
		$data['main'] = 'page_contact';
		$this->load->view('template3', $data);
	}

	function send_contact()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
		$this->form_validation->set_rules('body', 'Message', 'required');
		$this->form_validation->set_rules('recaptcha_response_field','Captcha','required|callback_check_captcha');


		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('reply', '<div class="alert alert-danger" role="alert">กรุณากรอกข้อมูลให้ครบถ้วน</div>');
			redirect($this->session->userdata('path')."#footer");
		}
		else
		{
			$query = $this->db->get('setting');
			$setting = $query->row();
			$to = $setting->email;

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$body = $this->input->post('body');
			// $mobile = $this->input->post('mobile');
			$subject = "Contact From ".$setting->web_title;

			$this->load->library('email');
			$config['protocol'] = 'mail';
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->to($to);
			$this->email->from($email, $name);
			$this->email->subject($subject);
			$this->email->message($body);
			$this->email->send();
			// echo $this->email->print_debugger();
			$this->session->set_flashdata('reply', '<div class="alert alert-success" role="alert">Your Message Have Been Sent. Thank You.</div>');
			redirect($this->session->userdata('path')."#footer");
		}
	}

	function article()
	{
		$id = $this->uri->segment(3);
		$page = $this->uri->segment(4);

		$this->db->where('article_category', $id);
		$count = $this->db->get('article');

		$this->load->library('pagination');
		$config['base_url'] = base_url().'page/article/'.$id.'/';
		$config['total_rows'] = $count->num_rows;
		$config['per_page'] = 12;
		$config['uri_segment'] = 4;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">Page ';
		$config['full_tag_close'] = '</div>';
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul><nav>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = ' <span class="sr-only">(current)</span></a></li>';
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$data['activity'] = $this->category_model->get_article($config['per_page'], $page, $id);

		// get category title
		$this->db->where('id', $id);
		$category = $this->db->get('article_category');

		if ($category->num_rows() > 0) {
			$row = $category->row();
			$data['title'] = $row->title;
		}

		$data['main'] = "page_activity";
		$this->load->view('template3', $data);
	}

	function article_read($id)
	{
		// generate captcha
		// ß$cap = $this->page_model->capgen();
		// $data['cap'] = $cap['image'];
		// $data['check'] = $cap['word'];


		// $this->page_model->hitcount('content', $id);
		$data['id'] = $id;

		// $this->db->where('article_category', '1');
		$this->db->where('article_id', $id);
		$data['activity'] = $this->db->get('article');

		$this->db->where('album_id', $id);
		$this->db->order_by('image', 'ASC');
		$data['album_image'] = $this->db->get('article_gallery');
		// $data['comment'] = $this->page_model->get_comment($id);

		$row = $data['activity']->row();

		$data['title'] = $row->article_title;
		$data['image'] = $row->article_image;
		$data['main'] = "page_activity_read";
		$this->load->view('template3', $data);
	}
}
