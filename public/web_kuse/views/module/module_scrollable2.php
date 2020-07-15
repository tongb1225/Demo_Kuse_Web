	  <? 	   $this->db->where('category_id', '8');
			   $this->db->order_by('sku', 'ASC');
	$product = $this->db->get('products'); ?>

<script type="text/javascript">

jQuery(document).ready(function() {
jQuery('#mycarousel2').jcarousel();
});

</script>


<? 
if($product->num_rows > 0) 
{ ?>
<ul class="grid_3 product_box jcarousel-skin-tango" id="mycarousel2">
<? foreach($product->result() as $row): ?>
	
	<li class="item">
	<a href="<?=base_url();?>product/<?=$row->permalink;?>">
	<img src="<?=base_url().$row->thumbnail;?>" width="139" /></a>
	<span><?=$row->name;?></span><br />
	Price <?=$this->category_model->getconvert_rate2($row->price);?><br />
	</li>
	
<? endforeach; ?>
</ul>
<div class="clear"></div>
<? } ?>

<style type="text/css">
	.item { width:140px; text-align: center; }
</style>