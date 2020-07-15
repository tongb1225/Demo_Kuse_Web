<h1><?=$title?></h1>
<form action="<?=base_url()?>admin/article/edit_article_run" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Status</label>
		<div class="col-sm-10">
			<? $status_option = array('active'=>'active', 'inactive'=>'inactive') ?>
			<?=form_dropdown('status', $status_option, $row->status, 'class="form-control"');?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Category</label>
		<div class="col-sm-10">
			<? $option = $this->category_model->get_article_category_list(); ?>
			<?=form_dropdown('article_category', $option, $row->article_category, 'class="form-control"');?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
		<div class="col-sm-10">
			<?=form_input('article_title', $row->article_title, 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Article Header</label>
		<div class="col-sm-10">
			<textarea class="form-control ckeditor" rows="3" name="article_header"><?=$row->article_header?></textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Content</label>
		<div class="col-sm-10">
			<textarea class="form-control ckeditor" rows="3" name="article_content"><?=$row->article_content?></textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Image</label>
		<div class="col-sm-10">
			<p><input type="file" name="userfile1" class="form-control" /></p>

			<img src="<?=base_url().$row->article_image?>" class="img-responsive">
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label"></label>
		<div class="col-sm-10">
			<?=form_hidden('article_id', $row->article_id)?>
			<?=form_hidden('article_image', $row->article_image)?>
			<?=form_hidden('article_thumb', $row->article_thumb)?>
			<button type="submit" class="btn btn-default">Save</button>
		</div>
	</div>

</form>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'ckeditor' );
</script>
