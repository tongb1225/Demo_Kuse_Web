<div class="well well-sm">
<div class="row">
	<h2 class="col-sm-12">คุณอาจจะสนใจ</h2>
	<? $link = $this->db->get('featured2'); ?>
	<? foreach($link->result() as $row): ?>
		<div class="col-sm-2">
			<p><a href="<?=$row->article_id?>"><img src="<?=base_url().$row->image?>" class="reponsive" style="width:100%"></a></p>
			<p><a href="<?=$row->article_id?>"><?=$row->title?></a></p>
		</div>
	<? endforeach; ?>
</div>
</div>