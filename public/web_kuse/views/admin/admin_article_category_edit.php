<h1><?=$title2?></h1>
<form action="<?=base_url()?>admin/article_category/edit_run" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
		<div class="col-sm-10">
			<?=form_input('title', $title, 'class="form-control"' )?>
		</div>
	</div>
	
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Order</label>
		<div class="col-sm-10">
			<?=form_input('order_field', $order_field, 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Status</label>
		<div class="col-sm-10">
			<? $option = array('active' => 'active', 'inactive' => 'inactive'); ?>
			<?=form_dropdown('status', $option, $status,'class="form-control"');?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Category Parent</label>
		<div class="col-sm-10">
			<?=form_dropdown('parentid', $category, $parentid,'class="form-control"');?>
		</div>
	</div>
	
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
		<div class="col-sm-10">
			<textarea class="form-control ckeditor" rows="3" name="description"><?=$description?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label"></label>
		<div class="col-sm-10">
			<?=form_hidden('id', $id);?>
			<button type="submit" class="btn btn-default">Save</button>
		</div>
	</div>
	
</form>


<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'ckeditor' );
</script>