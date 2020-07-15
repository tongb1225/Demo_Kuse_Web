<?
$subproduct =  $row->subproduct;
if($subproduct > '0')
{
	// get main product color
	   $this->db->select('color'); #Because I need the value
	   $this->db->where('id', $subproduct); #Because I need the variable column    entitled siteoverview
	   $query = $this->db->get('products'); #From the settings table
	   $row3 = $query->row_array(); // get the row
	   $row3['color']; // return the value
	   $mainproductcolor = $this->category_model->getColorFromCode($row3['color']);
	
	// echo 'this is subproduct';
	$colorid1 = $row->color; 
	// $colorvalue1 = $this->category_model->getColorFromCode($mainproductcolor); 
	?>
	<a href="<?=base_url();?>index.php/product/product_detail/<?=$subproduct;?>">
	<img src="<?=base_url().$mainproductcolor;?>" width="16" height="16" /></a>
	<?
			 $this->db->select('id, color');
			 $this->db->where('subproduct', $subproduct);
	$query = $this->db->get('products'); 
	if ($query->num_rows() > 0) {
		foreach($query->result() as $row2)
		{
			$colorvalue = $this->category_model->getColorFromCode($row2->color);
			?>
			<a href="<?=base_url();?>index.php/product/product_detail/<?=$row2->id;?>">
			<img src="<?=base_url().$colorvalue;?>" width="16" height="16" />
			</a>
	<?	}
	}
}
else
{
	//echo 'this is main product';
	$colorid1 = $row->color; 
	$colorvalue1 = $this->category_model->getColorFromCode($row->color); ?>
	
	<a href="<?=base_url();?>index.php/product/product_detail/<?=$row->id;?>">
	<img src="<?=base_url().$colorvalue1;?>" width="16" height="16" /></a>
	
	<?
			 $this->db->select('id, color');
			 $this->db->where('subproduct', $row->id);
	$query = $this->db->get('products'); 
	if ($query->num_rows() > 0) {
		foreach($query->result() as $row2)
		{ 
			$colorvalue = $this->category_model->getColorFromCode($row2->color);
			?>
			<a href="<?=base_url();?>index.php/product/product_detail/<?=$row2->id;?>">
			<img src="<?=base_url().$colorvalue;?>" width="16" height="16" />
			</a>
	<?	}
	}
}
?>