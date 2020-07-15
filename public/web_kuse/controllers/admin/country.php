<?

class Country extends Controller {
		
	function __construct()
	{
		parent::Controller();
		$this->is_logged_in();
		$this->load->model('size_model');
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
		$data['title'] = "Manage Country List";
		$data['table'] = "country";
		$data['query'] = $this->db->get('country');
		$data['main'] = 'admin/admin_country_list';
		$this->load->view('admin/admin_template', $data);
	}
	
	function edit_country($id)
	{
		$query = $this->db->get_where('country', array('iso' => $id));
		foreach($query->result() as $row):
		$data['iso'] = $row->iso;
		$data['name'] = $row->name;
		$data['printable_name'] = $row->printable_name;
		$data['iso3'] = $row->iso3;
		$data['numcode'] = $row->numcode;
		$data['convert_rate'] = $row->convert_rate;
		$data['dhl_zone'] = $row->dhl_zone;
		$data['remote_area'] = $row->remote_area;
		endforeach;
		
		$data['table'] = 'country';
		$data['title'] = "Edit Country";
		$data['main'] = 'admin/admin_country_edit';
		$this->load->view('admin/admin_template', $data);
	}
	
	function edit_country_run()
	{				
		$iso = $this->input->post('iso');
		$data = array(
		               	'name'=>$this->input->post('name'),
						'printable_name'=>$this->input->post('printable_name'),
						'iso3'=>$this->input->post('iso3'),
						'numcode'=>$this->input->post('numcode'),
						'convert_rate'=>$this->input->post('convert_rate'),
						'dhl_zone'=>$this->input->post('dhl_zone'),
						'remote_area'=>$this->input->post('remote_area')
		            );

		$this->db->where('iso', $iso);
		$this->db->update('country', $data);
		$this->index();
	}
	
	
}
?>