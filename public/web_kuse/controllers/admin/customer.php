<?

class Customer extends Controller {

	function __construct()
	{
		parent::Controller();
		$this->load->helper('url');
		$this->load->model('category_model');
		$this->category_model->is_logged_in();
	}

	function index()
	{
		$this->db->order_by('id', 'desc');
		$data['query'] = $this->db->get('customer');
		$data['title'] = "Customer Manager";
		$data['main'] = 'admin/admin_customer_list';
		$this->load->view('admin/admin_template', $data);
	}

	function edit($id)
	{
		$query = $this->db->get_where('customer', array('id' => $id));
		$data['row'] = $query->row();
 		$data['title'] = "Customer Edit";
		$data['main'] = 'admin/admin_customer_edit';
		$this->load->view('admin/admin_template', $data);
	}

	function edit_run()
	{
		$id = $this->input->post('id');
		if(!isset($id))
		{
			die;
			echo "No id select";
		}
			$config['upload_path'] = 'uploads/user/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '2024';
			$config['max_width']  = '2024';
			$config['max_height']  = '2024';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('userfile1'))
			{
				$error = array('error' => $this->upload->display_errors());
				$path1 = $this->input->post('image');
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$path1 = 'uploads/user/'.$data['upload_data']['file_name'];
			}

			$data = array(
				'first_name'=>$this->input->post('first_name'),
				'last_name'=>$this->input->post('last_name'),
				'email'=>$this->input->post('email'),
				'address1'=>$this->input->post('address1'),
				'address2'=>$this->input->post('address2'),
				'city'=>$this->input->post('city'),
				'region'=>$this->input->post('region'),
				'zip_code'=>$this->input->post('zip_code'),
				'country'=>$this->input->post('country'),
				'telephone_number'=>$this->input->post('telephone_number'),
				'status'=>$this->input->post('status'),
				'image'=>$path1,
				'more_info'=>$this->input->post('more_info'),
				'country_code'=>$this->input->post('country_code')
			);

			$this->db->where('id', $id);
			$this->db->update('customer', $data);
			$this->index();
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('customer');
		redirect('admin/customer');
	}

}
?>
