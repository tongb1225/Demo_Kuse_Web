<div class="col-md-3 col-sm-3">
	<div class="row">
		<div><h2 style="background-color:#000; padding:10px; color:#fff;">บทความที่ได้รับความนิยม</h2></div>
		 <?  	 $this->db->order_by('order_field', 'ASC');
                 $this->db->where('position', 'Top Stories'); 
        $product = $this->db->get('featured3'); ?>
        <div id="top_story">
        	<? foreach($product->result() as $row): ?>
				<li><a href="<?=$row->link;?>"><?=$row->title;?></a></li>
			<? endforeach; ?>
        </div>
	</div>
	<br>
	<div class="row well well-sm">
		<div class="col-sm-12">
		<h2 style="padding:0px; margin:5px 0px;">หมวดบทความ</h2>
		<ul id="blog_nav">
			<? 
					   $this->db->order_by('order_field', 'ASC');
			$product = $this->db->get('blog_category');
			foreach($product->result() as $row): ?>
				<li><?=anchor('blog/category/'.$row->id, $row->title)?></li>
			<? endforeach; ?>
		</ul>
		</div>
	</div>

	<div class="row">
		<h2 style="padding:0px; margin:5px 0px 20px 0px;">คุณอาจจะสนใจ</h2>
		<div id="blog_also_like" class="row">
			<? 		
					$this->db->order_by('id', 'RANDOM');
					$this->db->where('blog_category', '1');
			$link = $this->db->get('blog', '12'); ?>
			<? foreach($link->result() as $row): ?>
				<div class="col-sm-12">
				<div class="grid_2">
					<?=anchor('blog/read/'.$row->blog_permalink, img(array('src'=>$row->blog_image, 'class'=>'img-responsive')));?><br />
					<p style="font-size:1.1em;"><?=anchor('blog/read/'.$row->blog_permalink, $row->en_title)?></p>
				</div>
				</div>
			<? endforeach; ?>
		</div>
	</div>

	<div class="row">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Responsive ad1 -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-2634528003592365"
		     data-ad-slot="4578049131"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
</div>