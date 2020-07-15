<div class="col-sm-3 col-xs-6 text-center col-product glow" style="margin-bottom:20px; padding-top:10px;">
	<p><a href="<?=base_url()?>product/detail/<?=$permalink?>">
	<div class="item_image"><? if($soldout == 'true') { echo '<img src="'.base_url().'images/soldout.png" class="img-responsive soldout">'; } ?>
	<img src="<?=base_url().$thumbnail;?>" class="img-responsive" style="width:100%" alt="<?=$name?>">
	</div>
	</a></p>
	<a href="<?=base_url()?>product/detail/<?=$permalink?>"><h6><?=$name?></h6></a>
	<?=$shortdesc?>
	<? if($before_price > 0) { ?>
	<span><b>ราคาปกติ</b> <span style="text-decoration:line-through;"><?=$this->category_model->getconvert_rate2($before_price, "US")?></span> <b>ประหยัด</b> <?=$save_price?>%</span><br>
	<? } ?>
	<b>ราคา</b> : <span class="price"><?=$this->category_model->getconvert_rate2($price, "US")?></span>
</div>