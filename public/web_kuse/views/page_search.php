<div class="col-sm-12">
<h1><span><?=$page_name;?></span></h1><? $i = '0'; ?>

<div class="row">
	<? foreach($product->result() as $row): ?>
		<div class="col-sm-3 text-center col-product glow" style="margin-bottom:20px; padding-top:10px;">
			<p><a href="<?=base_url()?>product/detail/<?=$row->permalink?>">
			<div class="item_image"><? if($row->soldout == 'true') { echo '<img src="'.base_url().'images/soldout.png" class="img-responsive soldout">'; } ?>
			<img src="<?=base_url().$row->thumbnail;?>" class="img-responsive" style="width:100%" alt="<?=$row->name?>">
			</div>
			</a></p>	
			<a href="<?=base_url()?>product/detail/<?=$row->permalink?>"><h6><?=$row->name?></h6></a>
			<?=$row->shortdesc?>
			<? if($row->before_price > 0) { ?>
			<span><b>ราคาปกติ</b> <span style="text-decoration:line-through;"><?=$this->category_model->getconvert_rate2($row->before_price, "US")?></span> <b>ประหยัด</b> <?=$row->save_price?>%</span><br>
			<? } ?>
			<b>ราคา</b> : <span class="price"><?=$this->category_model->getconvert_rate2($row->price, "US")?></span>
		</div>
	<? endforeach; ?>
</div>

</div>

