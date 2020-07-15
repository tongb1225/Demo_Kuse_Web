<h1><?=$title?></h1>
<form action="<?=base_url()?>admin/site/create_content_run" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Order</label>
		<div class="col-sm-10">
			<?=form_input('order_field', '99', 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
		<div class="col-sm-10">
			<?=form_input('title', '', 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Content</label>
		<div class="col-sm-10">
			<textarea class="form-control ckeditor" rows="3" name="body"></textarea>
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