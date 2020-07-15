<div class="row">
	<div class="col-md-12">
		<div class="fb-like-box" data-href="https://www.facebook.com/pages/Cosmetoday/530459787087934" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="true" data-width="293"></div>
	</div>

	<?php $query = $this->category_model->get_content(33);
	foreach($query->result() as $row): ?>
		<div class="col-md-12">
			<h1 class="text-center"><span>โปรโมชั่นพิเศษ</span></h1>
			<?=$row->body;?>	
		</div>
	<?php endforeach; ?>

	<div class="clearfix"></div>

	
	<div class="col-md-12">
		<div class="well well-sm">
			<p><a href="<?=base_url()?>welcome/payment_confirm/"><img src="<?=base_url()?>images/payment_confirm.jpg" class="img-responsive"></a></p>

			<p><a href="http://track.thailandpost.co.th/tracking/default.aspx" target="_blank" rel="nofollow"><img src="<?=base_url()?>images/TrackTrace.jpg" class="img-responsive"></a></p>
		</div><div class="clearfix"></div>
	</div>
</div>