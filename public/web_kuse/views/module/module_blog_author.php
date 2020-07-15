	<div class="clear"></div>
<div id="about_author">
	<div id="float_left">
	<div id="name"><?=$blog_name;?> <?=$blog_middle;?> <?=$blog_last;?></div><br />
	<b>E-Mail</b> <?=safe_mailto($blog_email);?><br />
	<b>More Info</b> <?=$blog_more_info;?><br />
	</div>
	
	<div id="float_right">
		<img src="<?=base_url().$blog_image;?>" width="150">
	</div>
	<div id="line" class="clear"></div>
</div>