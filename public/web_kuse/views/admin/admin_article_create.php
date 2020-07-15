<h1><?=$title?></h1>
<form action="<?=base_url()?>admin/article/create_article_run" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Status</label>
		<div class="col-sm-10">
			<? $status_option = array('active'=>'active', 'inactive'=>'inactive') ?>
			<?=form_dropdown('status', $status_option,'', 'class="form-control"');?>	
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Category</label>
		<div class="col-sm-10">
			<? $option = $this->category_model->get_article_category_list(); ?>
			<?=form_dropdown('article_category', $option,'', 'class="form-control"');?>	
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
		<div class="col-sm-10">
			<?=form_input('article_title', '', 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Article Header</label>
		<div class="col-sm-10">
			<textarea class="form-control ckeditor" rows="3" name="article_header"></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Content</label>
		<div class="col-sm-10">
			<textarea class="form-control ckeditor" rows="3" name="article_content"></textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Image</label>
		<div class="col-sm-10">
			<input type="file" name="userfile1" class="form-control" />
		</div>
	</div>
	
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label"></label>
		<div class="col-sm-10">
			<button type="submit" class="btn btn-default">Save</button>
		</div>
	</div>
	
</form>


<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'ckeditor' );
</script>