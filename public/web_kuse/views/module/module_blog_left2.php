<div id="blog_bg" class="grid_3">

	<h2>หมวดบทความ</h2>
	<ul id="blog_nav">
		<? 
				   $this->db->order_by('order_field', 'ASC');
		$product = $this->db->get('blog_category');
		foreach($product->result() as $row): ?>
			<li><?=anchor('blog/category/'.$row->id, $row->title)?></li>
		<? endforeach; ?>
	</ul>
	<div class="clear">&nbsp;</div>
	
	<?=img('images/running-total.png')?>

	<style type="text/css">
		#blog_also_like .grid_2 { border: 1px solid #fff; margin-bottom: 10px; }
		#blog_also_like .grid_2:hover { border: 1px solid #FF5A00; }
	</style>

	<div align="center" style="position:relative;"> 
		<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_floating_style addthis_counter_style" style="left:5%;top:300px; border:1px solid #9A9A9A;">
		<a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
		<a class="addthis_button_tweet" tw:count="vertical"></a>
		<a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
		<a class="addthis_counter"></a>
		</div>
		<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=nemo1112"></script>
		<!-- AddThis Button END -->
	</div>

</div>