<section id="content">
	<div class="container">


	<?php foreach($activity->result() as $row): ?>

		<h1 class="title"><?=$row->article_title?></h1>

		<div class="row gallery<?=$row->article_id?> gallery" style="padding-bottom:20px;">
			<!-- start gallery -->
			<? $article_id = $row->article_id;
			$gallery = $this->category_model->get_article_gallery($article_id);
			foreach($gallery->result() as $row2): ?>
			<div class="col-sm-2">
				<div class="field-content">
					<a href="<?=base_url().$row2->image?>" data-toggle="lightbox" data-gallery="gallery" data-parent=".gallery<?=$row->article_id?>" data-title="<?=$row->article_title?>">
						<img src="<?=base_url().$row2->image?>" class="<?=$this->category_model->img_orientation($row2->image)?>" />
					</a>
				</div>
			</div>
			<? endforeach; ?>
		</div>

		<?=$row->article_content;?>
		<div class="clearfix"></div>
	<?php endforeach; ?>

	<hr>

	<div class="row">
		<?=$this->load->view('module/module_tab')?>
	</div>

	</div>
</section>
