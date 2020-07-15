<?
class category_model extends Model {
	function category_model(){
		parent::Model();
	}

	function user_login() {
		$is_logged_in = $this->session->userdata('logged_in');

		if(!isset($is_logged_in) || $is_logged_in !=true)
		{
			$this->session->set_flashdata('reply1', '<div class="alert alert-danger">กรุณาเข้าสู่ระบบ</div>');
			redirect('user/login');
		}
	}

	function department_list() {
		$department_list = array(
			'' => 'กรุณาเลือก',
			'ภาควิชาวิศวกรรมเครื่องกลและการผลิต' => 'ภาควิชาวิศวกรรมเครื่องกลและการผลิต',
			'ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์' => 'ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์',
			'ภาควิชาวิศวกรรมโยธาและสิ่งแวดล้อม' => 'ภาควิชาวิศวกรรมโยธาและสิ่งแวดล้อม',
			'ภาควิชาวิทยาการคอมพิวเตอร์และสารสนเทศ' => 'ภาควิชาวิทยาการคอมพิวเตอร์และสารสนเทศ',
			'ภาควิชาวิทยาศาสตร์ทั่วไป' => 'ภาควิชาวิทยาศาสตร์ทั่วไป',
		);
		return $department_list;
	}

	function img_orientation($image) {
		list($width, $height) = getimagesize($image);
		if ($height > $width) {
		  // Portrait or Square
		  return 'portrait';
		}
	}

	function is_logged_in() {
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in !=true)
		{
			echo 'You don\'t have permission to access this page. '.anchor('admin/login', 'login');
			die();
		}
	}

	function addhttp($url) {
		if(strlen($url) <= 1)
		{
			$url = base_url().'images/thumb.png';
		}
	  if(!preg_match("~^(?:f|ht)tps?://~i", $url)) {
	    $url = base_url().$url;
	  }
	  return $url;
	}

	function get_article($limit, $page, $id)
	{
		$this->db->order_by('article_id', 'DESC');
		$this->db->where('article_category', $id);
		$query = $this->db->get('article', $limit, $page);

		return $query;
		$query->free_result();
	}

	function get_alumni($limit, $page)
	{
		$this->db->order_by('country_code', 'DESC');
		$query = $this->db->get('customer', $limit, $page);

		return $query;
		$query->free_result();
	}

	function get_article_gallery($article_id) {
		$this->db->where('album_id', $article_id);
		$this->db->order_by('field_order', 'asc');
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('article_gallery');
		return $query;
		$query->free_result();
	}

	function get_album_id($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('article_gallery');
		$row = $query->row();

		$album_id = $row->album_id;

		return $album_id;
		$query->free_result();
	}

	function get_article_sub_category($id)
	{
		$this->db->order_by("order_field", "ASC");
		$this->db->where('parentid', $id);
		//$this->db->where('status', 'active');
		$query = $this->db->get('article_category');
		return $query;
		$query->free_result();
	}

	function get_article_category_list()
	{
		$data[0] = 'Top';
				 $this->db->where('parentid', 0);
				 $this->db->order_by('order_field', 'ASC');
		$query = $this->db->get('article_category');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$data[$row['id']] = $row['title'];

				// get sub category for this parent id
						$this->db->order_by("order_field", "ASC");
					    $this->db->where('parentid', $row['id']);
				$sub2 = $this->db->get('article_category');

				foreach ($sub2->result_array() as $row2){
					$data[$row2['id']] = '|--'.$row2['title'];

					// get sub category for this parent id
							$this->db->order_by("order_field", "ASC");
						    $this->db->where('parentid', $row2['id']);
					$sub3 = $this->db->get('article_category');

					foreach ($sub3->result_array() as $row3){
						$data[$row3['id']] = '|---'.$row3['title'];
					}
				}
			}
		}
		return $data;
		$query->free_result();
	}

	function get_setting()
	{
		$query = $this->db->get('setting');
		$setting = $query->row();
		$query->free_result();
		return $setting;
	}

	function get_content($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('content');
		return $query;
		$query->free_result();
	}

	function get_product($item = '99') {
		$this->db->order_by('id', 'desc');
		$this->db->where('status', 'active');
		$query = $this->db->get('products', $item);
		return $query;
	}

	function get_product_with_category($category_id) {
		$this->db->order_by('id', 'asc');
		$this->db->where('status', 'active');
		$this->db->where('category_id', $category_id);
		$query = $this->db->get('products');
		return $query;
	}

	function get_category_list()
	{
				 $this->db->order_by('order_field', 'ASC');
				 $this->db->where('parentid', '0');
		$query = $this->db->get('categories');
		return $query;
	}

	function get_sub_category($id)
	{
				 $this->db->order_by('order_field', 'ASC');
				 $this->db->where('parentid', $id);
		$query = $this->db->get('categories');
		return $query;
	}

	function get_product_category($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('products');
		$row = $query->row();
		$id = $row->category_id;
		return $id;
	}

	function create_unique_slug($string, $table)
	{
	    $slug = url_title($string);
	    $slug = strtolower($slug);
	    $search = '.';
	    $slug = str_replace($search, '', $slug);
	    $i = 0;
	    $params = array ();
	    $params['permalink'] = $slug;
	    if ($this->input->post('id')) {
	        $params['id !='] = $this->input->post('id');
	    }

	    while ($this->db->where($params)->get($table)->num_rows()) {
	        if (!preg_match ('/-{1}[0-9]+$/', $slug )) {
	            $slug .= '-' . ++$i;
	        } else {
	            $slug = preg_replace ('/[0-9]+$/', ++$i, $slug );
	        }
	        $params ['permalink'] = $slug;
	        }
	    return $slug;
	}

	function generate_color($id)
	{
		// start get color information
			$this->db->where('id', $id);
			$query = $this->db->get('color', 1);
			$row = $query->row();
			$image_properties = array(
			          'src' => $row->color,
			          'alt' => $row->name,
			          'class' => 'post_images',
			          'width' => '20',
			          'height' => '20',
			          'title' => $row->name,
			          'rel' => 'lightbox',
			);

			return form_radio('color', $row->name, false, 'id="color"').img($image_properties).' '.$row->name.'<br />';
			$query->free_result();
	}

	function get_shipping_rate($weight, $zone)
	{
		// get thai bath shipping rate and convert shipping rate to us dollar by calculate with weight and zone
				$this->db->order_by("weight", "asc");
	   			$this->db->select($zone); // Because I need the value
	   			$this->db->where('weight >=', $weight);
	   $query = $this->db->get('dhl_shipping', 1);
	   $row = $query->row_array(); // get the row
	   $rate =  $row[$zone]; // return the value
	   //$shippingcost = $this->getconvert_rate2($rate, "TH");
	   return $rate;
	}

	function get_price($price)
	{
		$price = $price * $this->session->userdata('rate');
		return $price;
	}

	function getCategory($id){
		$this->db->where('id', $id);
		$query = $this->db->get('categories', 1);
		return $query;
		$query->free_result();
	}

	function getSubCategory($id){
		$this->db->order_by("order_field", "ASC");
		$this->db->where('parentid', $id);
		$this->db->where('status', 'active');
		$query = $this->db->get('categories');
		return $query;
		$query->free_result();
	}

	function getSubCategory2($id){
		$this->db->order_by("order_field", "ASC");
		$this->db->where('parentid', $id);
		//$this->db->where('status', 'active');
		$query = $this->db->get('categories');
		return $query;
		$query->free_result();
	}

	function getAllCategory(){
		$query = $this->db->get('categories');
		return $query;
		$query->free_result();

	}

	function getAllTopCategory(){
		$this->db->where('parentid', 0);
		$query = $this->db->get('categories');
		return $query;
		$query->free_result();
	}

	function getTopCategory(){
		// $data[0] = 'root';
		$this->db->where('parentid', 0);
		$query = $this->db->get('categories');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$data[$row['id']] = $row['name'];
			}
		}
		return $data;
		$query->free_result();
	}

	function getCategoryAll(){
		$data[0] = 'All';
		$query = $this->db->get('categories');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$data[$row['id']] = $row['name'];
			}
		}
		return $data;
		$query->free_result();
	}

	function getCategoryTree2Level(){
		$data[0] = 'Root';
				 $this->db->where('parentid', '0');
		$query = $this->db->get('categories');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$data[$row['id']] = $row['name'];

				// get sub category for this parent id
					   $this->db->where('parentid', $row['id']);
				$sub = $this->db->get('categories');

				foreach ($sub->result_array() as $row2){
					$data[$row2['id']] = '|-'.$row2['name'];
				}

			}
		}
		return $data;
		$query->free_result();
	}

	function getCategoryAllTree()
	{
		$data[0] = 'Root';
				 $this->db->order_by("order_field", "ASC");
				 $this->db->where('parentid', '0');
		$query = $this->db->get('categories');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$data[$row['id']] = $row['name'];

					// get sub category for this parent id
							$this->db->order_by("order_field", "ASC");
						    $this->db->where('parentid', $row['id']);
					$sub2 = $this->db->get('categories');

					foreach ($sub2->result_array() as $row2){
						$data[$row2['id']] = '|-'.$row2['name'];

								// get sub category for this parent id
										$this->db->order_by("order_field", "ASC");
									    $this->db->where('parentid', $row2['id']);
								$sub3 = $this->db->get('categories');

								foreach ($sub3->result_array() as $row3){
									$data[$row3['id']] = '|---'.$row3['name'];
								}
					}
			}
		}
		return $data;
		$query->free_result();
	}

	function get_brand()
	{
				 $this->db->where('status', 'active');
				 $this->db->order_by("name", "ASC");
		$query = $this->db->get('product_brand');
		return $query;
		$query->free_result();
	}

	function get_brand_list()
	{
		$data[] = 'Please Select';
				 $this->db->order_by("name", "ASC");
		$query = $this->db->get('product_brand');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$data[$row['id']] = $row['name'];
			}
		}
		else
		{
			$data = null;
		}
		return $data;
		$query->free_result();
	}

	function getProductForMix(){
		$this->db->orderby('name');
		$this->db->where('subproduct', '0');
		$query = $this->db->get('products');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$data[$row['id']] = $row['name'];
			}
		}
		else
		{
			$data = null;
		}
		return $data;
		$query->free_result();
	}

	function getColorList(){
		$this->db->orderby('name');
		$this->db->where('status', 'active');
		$query = $this->db->get('color');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$data[$row['id']] = $row['name'];
			}
		}
		else
		{
			$data = null;
		}
		return $data;
		$query->free_result();
	}

	function getProduct($id){
		$this->db->where('id', $id);
		$query = $this->db->get('products', 1);
		return $query;
		$query->free_result();
	}

	function getProduct_category($id){

	   $this->db->select('category_id'); #Because I need the value
	   $this->db->where('id', $id); #Because I need the variable column    entitled siteoverview
	   $query = $this->db->get('products'); #From the settings table
	   $row = $query->row_array(); // get the row
	   return $row['category_id']; // return the value
	   $query->free_result();
	}

	function getSubProduct($id){
		$this->db->where('subproduct', $id);
		$query = $this->db->get('products');
		return $query;
		$query->free_result();
	}

	function getProductTop5(){
		//$this->db->where('id', $id);
		$query = $this->db->get('products', 5);
		return $query;
		$query->free_result();
	}

	function getProductByCat($id){
		// $country = $this->session->userdata('usercountry');
		// if($country=='Thailand')
		// {
		// 	$this->db->where('thai', 'true');
		// 	$this->db->where('subproduct', '0');
		// 	$this->db->where('status', 'active');
		// 	$this->db->where('category_id', $id);
		// 	$this->db->order_by('id', 'DESC');
		// 	$query = $this->db->get('products');
		// }
		// else
		// {
			// $this->db->where('inter', 'true');
			$this->db->where('subproduct', '0');
			$this->db->where('status', 'active');
			$this->db->where('category_id', $id);
			$this->db->order_by('sku', 'ASC');
			$query = $this->db->get('products');
		// }

		return $query;
		$query->free_result();
	}

	function getSubCategoryByParent($id){
		$this->db->where('parentid', $id);
		$query = $this->db->get('categories');
		return $query;
		$query->free_result();
	}

	function getAllProduct(){
		$this->db->where('status', 'active');
		$query = $this->db->get('products');
		return $query;
		$query->free_result();
	}

	function getRootCategoryID($id){
		 $this->db->select('parentid');
		 $this->db->where('id', $id);
		 $query = $this->db->get('categories');

		 if($query->num_rows == 1)
				{
					$row = $query->row_array();
				 	return $row['parentid'];
				}
				else
				{
					return '0';
				}
		 $query->free_result();
	}

	function register_check()
	{
		$this->db->where('email', $this->input->post('email'));
		$query = $this->db->get('customer');

		if($query->num_rows == 1)
		{
			return true;
		}
	}

	function CategoryName($id)
	{
	   $this->db->select('name');
	   $this->db->where('id', $id);
	   $this->db->where('status', 'active');
	   $query = $this->db->get('categories', 1);

		if($query->num_rows == 1)
		{
			$row = $query->row_array();
			return $row['name'];
		}
	   else
		{
			return "";
		}

	   $query->free_result();
	}

	function CategoryHeader($id)
	{
	   $this->db->select('shortdesc');
	   $this->db->where('id', $id);
	   $query = $this->db->get('categories', 1);

		if($query->num_rows == 1)
		{
			$row = $query->row_array();
			return $row['shortdesc'];
		}
	   else
		{
			return "";
		}
	   $query->free_result();
	}

	function CategoryHeader2($id)
	{
	   $this->db->select('image2');
	   $this->db->where('id', $id);
	   $query = $this->db->get('categories', 1);

		if($query->num_rows == 1)
		{
			$row = $query->row_array();
			return $row['image2'];
		}
	   else
		{
			return "";
		}

	   $query->free_result();
	}

	function getColorFromCode($color)
	{
		$this->db->select('color');
		$this->db->where('id', $color);
		$query = $this->db->get('color', 1);
		if ($query->num_rows() > 0) {
		$row = $query->row_array(); // get the row
		$colorvalue = $row['color'];
		}
		else {
			$colorvalue = "";
		}
		return $colorvalue;
	}

	function getColorFromCodeName($color)
	{
		$this->db->select('name');
		$this->db->where('id', $color);
		$query = $this->db->get('color', 1);
		if ($query->num_rows() > 0) {
		$row = $query->row_array(); // get the row
		$colorvalue = $row['name'];
		}
		else {
			$colorvalue = "";
		}
		return $colorvalue;
	}


	function getconvert_rate($price, $country)
	{
		$this->db->select('convert_rate, iso');
		$this->db->where('printable_name', $country);
		$query = $this->db->get('country', 1);
		if ($query->num_rows() > 0) {
		$row = $query->row_array(); // get the row
		$rate = $row['convert_rate'];
		$iso = $row['iso'];
		$price = $price * $rate;
		$price = number_format($price, '2');
		}
		else {
			$price = "0";
		}
		if($price <= 0)
		{
			return "";
		}
		else
		{
			return $iso.' <span style="color:#F50065;">'.$price.'</span>';
		}
	}

	function getconvert_rate2($price)
	{
		// $usercountry = $this->session->userdata('country');
		$usercountry = 'thai';
		if($usercountry == 'thai')
		{
			//$sign = '&#3647;';
			$sign = '';
			$currency = 'บาท';
		}
		else
		{
			$sign = '&pound;';
			$currency = 'GBP';
		}


		// $this->db->select('convert_rate');
		// $this->db->where('iso', $country);
		// $query = $this->db->get('country', 1);
		// if ($query->num_rows() > 0)
		// {
		// 	$row = $query->row_array(); // get the row
		// 	$rate = $row['convert_rate'];
		// 	$price = $price * $rate;
		$price = floatval($price);
		$price = number_format($price, '2');
		// }
		// else {
		// 	$price = "0";
		// }
		// $currency = 'GBP';
		if($price <= 0)
		{
			return $sign." 0 ".$currency;
		}
		else
		{
			return $sign.' '.$price.' '.$currency;
		}
	}

	// function get_country()
	// {
	// 	// check ip address and detect user country with ip address. if thai show bath else only show us price.
	// 	$check = $this->session->userdata('usercountry');
	// 	if($check)
	// 	{
	// 		// echo 'yes';
	// 	}
	// 	else
	// 	{
	// 		// echo 'no';
	// 		$this->load->plugin('geo_location');
	// 		$ip = $this->input->ip_address();
	// 	    $geo_data = get_geolocation($ip);
	//
	// 	    // echo "Country code : ".$geo_data['country_name']."\n";
	//
	// 		$country = $geo_data['country_name'];
	// 		$this->session->set_userdata('usercountry', $country);
	// 	}
	// }

	function getconvert_thai($price)
	{
		$country = 'US';
		$this->db->select('convert_rate');
		$this->db->where('iso', $country);
		$query = $this->db->get('country', 1);
		if ($query->num_rows() > 0) {
		$row = $query->row_array(); // get the row
		$rate = $row['convert_rate'];
		$price = $price * ($rate * 1000);
		$price = number_format($price, '2');
		}
		else {
			$price = "0";
		}
		if($price <= 0)
		{
			return "0";
		}
		else
		{
			return $rate*1000;
		}
	}

	function get_zone($country)
	{
		$this->db->select('dhl_zone');
		$this->db->where('name', $country);
		$query = $this->db->get('country', 1);

		if($query->num_rows == 1)
		{
			$row = $query->row_array(); // get the row
			$zone = $row['dhl_zone'];
			return $zone;
		}
	}

	function get_remote_area($country)
	{
		$this->db->select('remote_area');
		$this->db->where('name', $country);
		$query = $this->db->get('country', 1);

		if($query->num_rows == 1)
		{
			$row = $query->row_array(); // get the row
			$remote_area = $row['remote_area'];
			return $remote_area;
		}
	}

	function get_country_list() {

		$data = array();
		$data[0] = 'Select Country';
				 $this->db->select('iso, printable_name');
		$query = $this->db->get('country');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[$row['printable_name']] = $row['printable_name'];
			}
		}

		$query->free_result();
		return $data;
	}


	function get_country_list2() {
		$query = $this->db->get('country');
		return $query;
	}

	function getImageURL($id)
	{
		$this->db->select('image');
		$this->db->where('id', $id);
		$query = $this->db->get('products', 1);
		if ($query->num_rows() > 0) {
			$row = $query->row_array(); // get the row
			$image = $row['image'];
		}
		else {
			$image = "images/custom_shirt.jpg";
		}
		return $image;
	}

	function check_product_type($id)
	{
	   $this->db->select('subproduct'); #Because I need the value
	   $this->db->where('id', $id); #Because I need the variable column    entitled siteoverview
	   $query = $this->db->get('products', '1'); #From the settings table
	   $row = $query->row_array(); // get the row
	   $value = $row['subproduct']; // return the value

		return $value;
		$query->free_result();
	}
}
?>
