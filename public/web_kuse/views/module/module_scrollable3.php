<?          $this->db->order_by('order_field', 'ASC');
$category = $this->db->get('categories', '3');
$i = 1;
foreach($category->result() as $row): ?>


  <h3><?=$row->shortdesc?></h3>
  

    <?  $this->db->where('category_id', $row->id);
        $this->db->order_by('sku', 'ASC');
        $product = $this->db->get('products'); ?>
    <? 
    if($product->num_rows > 0) 
    { ?>
        <ul class="grid_3 product_box jcarousel-skin-tango" id="mycarousel<?=$i?>">
        <? foreach($product->result() as $row2): ?>

            <li class="item">
            <a href="<?=base_url();?>th_product/<?=$row2->permalink;?>">
            <img src="<?=base_url().$row2->thumbnail;?>" width="139" /></a>
            <span><?=$row2->th_name;?></span><br />
            ราคา <?=$this->category_model->getconvert_rate2($row2->th_price);?><br />
            </li>

        <? endforeach; ?>
        </ul>
    <div class="clear"></div><br />
    <? } ?>
    <script type="text/javascript">

    jQuery(document).ready(function() {
    jQuery('#mycarousel<?=$i?>').jcarousel();
    });

    </script>
<? $i++; ?>
<div class="clear"></div>
<? endforeach; ?>