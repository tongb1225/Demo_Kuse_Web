<?php

class User extends Controller {

	function __construct()
  {
  	parent::Controller();
		$this->load->model('category_model');
		$this->load->library('recaptcha');
    $this->load->library('form_validation');
  }

	function alumni() {
		$this->category_model->user_login();

		if(isset($_POST) AND $this->input->post('department') >= '') {
			$data['department'] = $this->input->post('department');
			$this->session->set_userdata('department', $this->input->post('department'));
		} else {
			$data['department'] = $this->session->userdata('department');
		}

		if(isset($_POST) AND $this->input->post('year') >= '') {
			$data['year'] = $this->input->post('year');
			$this->session->set_userdata('year', $this->input->post('year'));
		} else {
			$data['year'] = $this->session->userdata('year');
		}

		$page = $this->uri->segment(3);

		if(strlen($this->session->userdata('department')) > 0) {
			$this->db->where('more_info', $this->session->userdata('department'));
			$data['department'] = $this->session->userdata('department');
		}
		if(strlen($this->session->userdata('year')) > 0) {
			$this->db->where('country_code', $this->session->userdata('year'));
		}
		$count = $this->db->get('customer');

		$this->load->library('pagination');
		$config['base_url'] = base_url().'user/alumni/';
		$config['total_rows'] = $count->num_rows;
		$config['per_page'] = 12;
		$config['uri_segment'] = 3;
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

		if(strlen($this->session->userdata('department')) > 0) {
			$this->db->where('more_info', $this->session->userdata('department'));
		}
		if(strlen($this->session->userdata('year')) > 0) {
			$this->db->where('country_code', $this->session->userdata('year'));
		}
		$data['activity'] = $this->db->get('customer', $config['per_page'], $page);

		$data['title'] = 'Alumni';
		$data['main'] = 'page_alumni';
		$this->load->view('template', $data);
	}

	function index() {
		$this->login();
	}

	function register()
	{
	  //$this->lang->load('recaptcha');
	  //$data['recaptcha'] = $this->recaptcha->get_html();
		$data['title'] = 'Register';
		$data['main'] = 'page_register';
		$this->load->view('template', $data);
	}

	function check_captcha($val)
  {
    if ($this->recaptcha->check_answer($this->input->ip_address(),$this->input->post('recaptcha_challenge_field'),$val))
    //if ($this->recaptcha->isvalid)
    {
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_captcha',$this->lang->line('recaptcha_incorrect_response'));
      return FALSE;
    }
  }

  function email_check($val)
	{
		$this->db->where('email', $val);
		$query = $this->db->get('customer');

		if ($query->num_rows > 0)
		{
			$this->form_validation->set_message('email_check', 'This e-mail have been used.');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	function register_check()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('address1', 'Address', 'required');
		$this->form_validation->set_rules('email', 'e-mail', 'required|valid_email');
		$this->form_validation->set_rules('email2', 'Confirm e-mail', 'required|matches[email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password_again', 'Confirm Password', 'required|matches[password]');
		//$this->form_validation->set_rules('recaptcha_response_field','Captcha','required|callback_check_captcha');
		$this->form_validation->set_rules('email','Captcha','required|callback_email_check');
		// $this->form_validation->set_rules('telephone', 'Telephone', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->register();
		}
		else
		{
			$data = array(
				'first_name'=>$this->input->post('first_name'),
				'middle_name'=>$this->input->post('middle_name'),
				'last_name'=>$this->input->post('last_name'),
				'country'=>$this->input->post('country'),
				'address1'=>$this->input->post('address1'),
				'address2'=>$this->input->post('address2'),
				'city'=>$this->input->post('city'),
				'region'=>$this->input->post('region'),
				'zip_code'=>$this->input->post('zip_code'),
				'email'=>$this->input->post('email'),
				'password'=>md5($this->input->post('password')),
				'telephone_number'=>$this->input->post('telephone'),
				'more_info'=>$this->input->post('department'),
				'country_code'=>$this->input->post('year'),
				'status'=>'inactive',
				'image'=>'images/noimage.png'
			);
			$this->db->insert('customer',$data);

			// prepare send mail information
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			//$this->register_sendmail($first_name, $last_name, $email, $password);

			$path = base_url().'user/register_succuess/';
			$this->session->set_userdata('path', $path);
			redirect($path);
		}
	}

	function register_sendmail($first_name, $last_name, $email, $password)
	{
		$setting = $this->category_model->get_setting();

		$from = $setting->email;
		$subject = "Welcome to ".$setting->web_title;
		$body = '<img src="'.base_url().'images/logo.png"><br/>';
		$body .= '<br/>';
		$body .= 'Dear '.$first_name.' '.$last_name.','."</br ><br/>".'Thank you for joining '.$setting->web_title.'. This e-mail message contains important information about your '.$setting->web_title.' account. You may want to retain this e-mail for your records.'."<br/>";
		$body .= '<br/>';
		$body .= 'Username '.$email."<br/>";
		$body .= 'Password '.$password."<br/><br/>";
		$body .= '<br/>';
		$body .= 'If have any question, contact '.'<a href="'.$setting->web_title.'">'.$setting->web_title.'</a>';

		$this->load->library('email');
		$config['protocol'] = 'mail';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$config['priority'] = '1';
		$this->email->initialize($config);

		$this->email->to($email);
		$this->email->from($from, $from);
		$this->email->subject($subject);
		$this->email->message($body);
		$this->email->send();
		// echo $this->email->print_debugger();
	}

	function register_succuess()
	{
		$data['title'] = 'Register Succuess';
		$data['main'] = 'page_register_success';
		$this->load->view('template', $data);
	}

	function login()
	{
		$data['title'] = 'Login';
		$data['main'] = 'page_login';
		$this->load->view('template', $data);
	}

	function login_check()
	{
		$this->db->where('status', 'active');
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('customer', 1);
		$row = $query->row();

		$path = 'user/login';

		if(strlen($path) <= '0')
		{
			$path = base_url();
		}

		if($query->num_rows == 1)
		{
			$newdata = array(
				'userid' => $row->id,
				'username' => $row->first_name,
				'email'     => $this->input->post('email'),
				'logged_in' => 'TRUE',
			);

			$this->session->set_userdata($newdata);
			$path = 'user/alumni';
			redirect($path);
		}
		else
		{
			$this->session->set_flashdata('reply1', '<div class="alert alert-danger">Your e-mail or password is incorrect.</div>');
			$path = 'user/login';
			redirect($path);
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('page');
	}

	function profile()
	{
		// get user data
		$id = $this->session->userdata('userid');
		if($id <= '0')
		{
			$path = base_url();
			redirect($path);
		}

		$this->db->where('email', $this->input->post('email'));
		$this->db->where('id', $id);
		$query = $this->db->get('customer', 1);
		$data['row'] = $query->row();

		$data['title'] = 'User Profile';
		$data['main'] = 'page_user_profile';
		$this->load->view('template', $data);
	}

	function user_edit()
	{
		$this->category_model->user_login();

		$id = $this->session->userdata('userid');

		$this->db->where('id', $id);
		$query = $this->db->get('customer', 1);
		$data['row'] = $query->row();
		$data['title'] = 'User Edit';
		$data['main'] = 'page_user_edit';
		$this->load->view('template', $data);
	}

	function user_edit_run()
	{
		$config['upload_path'] = 'uploads/user/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048';
		$config['max_width']  = '1000';
		$config['max_height']  = '1000';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('userfile1'))
		{
			$error = array('error' => $this->upload->display_errors());
			// var_dump($error);
			// die;
			$path1 = $this->input->post('tmppath1');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$path1 = $config['upload_path'].$data['upload_data']['file_name'];
		}

		$id = $this->session->userdata('userid');
		$data = array(
			'first_name'=>$this->input->post('first_name'),
			'middle_name'=>$this->input->post('middle_name'),
			'last_name'=>$this->input->post('last_name'),
			'country'=>$this->input->post('country'),
			'address1'=>$this->input->post('address1'),
			'address2'=>$this->input->post('address2'),
			'city'=>$this->input->post('city'),
			'region'=>$this->input->post('region'),
			'zip_code'=>$this->input->post('zip_code'),
			//'email'=>$this->input->post('email'),
			//'password'=>md5($this->input->post('password')),
			'telephone_number'=>$this->input->post('telephone_number'),
			'more_info'=>$this->input->post('department'),
			'country_code'=>$this->input->post('year'),
			'image'=>$path1,
		);
		$this->db->where('id', $id);
		$this->db->update('customer', $data);
		redirect('user/alumni');
	}

	function forget_password()
	{
		$data['title'] = 'Forget Password';
		$data['main'] = 'page_forget_password';
		$this->load->view('template', $data);
	}

	function forget_password_submit()
	{
		$email = $this->input->post('email');
		$path = 'user/forget_password';

		// check this email really exit
		$this->db->where('email', $email);
		$query = $this->db->get('customer');
		if($query->num_rows == 1)
		{
			// create unique key
			$this->load->helper('date');
			$datestring = "%Y%m%d%h%i%s";
			$time = time();
			$requesttime = mdate($datestring, $time);
			$serial = md5($requesttime . $email);

			// save key to user db
			$data = array(
				'api_key'=>$serial
			);

			$this->db->where('email', $email);
			$this->db->update('customer', $data);

		// start to prepare send e-mail to user
			$to = $email;
			$name = 'auto generate email';
			$email = 'noreply@benmanhirefashion.com';
			$subject = 'Reset your password';

			$body = "Dear User,<br />

			To get back into your account, you’ll need to create a new password.<br />\n

			It’s easy:<br />\n

			   1. Click the link below to open a secure browser window.<br />\n
			   2. Confirm that you’re the owner of the account, and then follow the instructions.<br />\n
			<br />\n
			Recover your password now\n".anchor('user/check_user_key/'.$serial)."<br />If you didn’t ask us for help with your password, let us know right away.<br />Reporting it is important because it helps us prevent fraudsters from stealing your information.<br />
			<br />
			Contact Us
			E-mail : <a href=\"mailto:sales@benmanhirefashion.com\">sales@benmanhirefashion.com</a><br />
			Tel : + 852 3667 9177 <br />";

			// echo $body;

			// start execute
			$this->load->library('email');
			$config['protocol'] = 'sendmail';
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';
			$config['priority'] = '1';
			$config['mailpath'] = '/usr/sbin/sendmail';

			$this->email->initialize($config);
			$this->email->to($to);
			$this->email->from($email, $name);
			$this->email->subject($subject);
			$this->email->message($body);
			$this->email->send();
			// $this->email->print_debugger();


			// redirect and tell user to check e-mail
			$this->session->set_flashdata('reply', 'We have send confirm link to your e-mail address.');
			if(strlen($path) <= '0')
			{
				$path = base_url();
			}
			redirect($path);
		}
		else
		{
			$this->session->set_flashdata('reply', 'Invalid e-mail address.');
			if(strlen($path) <= '0')
			{
				$path = base_url();
			}
			redirect($path);
		}
	}

	function check_user_key($key)
	{
		// echo $key;
		// check this key really exit
				 $this->db->where('api_key', $key);
		$query = $this->db->get('customer');
		if($query->num_rows == 1)
		{
			// echo "Key is right<br />";
			// echo "<br />ask for new password and e-mail address and delete use api key";
			$data['key'] = $key;
			$data['title'] = 'Welcome';
			$data['main'] = 'page_reset_password';
			$this->load->view('template', $data);
		}
		else
		{
			// echo "Key is wrong";
			redirect('welcome/index');
		}
	}

	function check_user_key_submit()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$key = $this->input->post('key');

				 $this->db->where('api_key', $key);
				 $this->db->where('email', $email);
		$query = $this->db->get('customer');
		if($query->num_rows == 1)
		{
			// if email and key right change password

			// save new password to user db
			$data = array(
				'password'=>md5($pass),
				'api_key'=>''
			);

			$this->db->where('email', $email);
			$this->db->update('customer', $data);
			// tell user password have been change.
			$data['title'] = 'Your are success reset password';
			$data['main'] = 'page_reset_success';
			$this->load->view('template', $data);
		}
		else
		{
			$this->session->set_flashdata('reply', 'Your e-mail not match to system.');
			redirect('user/check_user_key/'.$key);
		}
	}
}
?>
