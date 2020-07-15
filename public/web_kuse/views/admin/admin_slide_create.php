<h1><?=$title?></h1>
<form action="<?=base_url()?>admin/slide/create_slide_run" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
		<div class="col-sm-10">
			<?=form_input('title', '', 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Order</label>
		<div class="col-sm-10">
			<?=form_input('order_field', '', 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Link</label>
		<div class="col-sm-10">
			<?=form_input('link', '', 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
		<div class="col-sm-10">
			<textarea class="form-control ckeditor" rows="3" name="content"></textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Image Upload</label>
		<div class="col-sm-10">
			<input type="file" name="userfile1" class="form-control" />
			<p class="help-block">
				Image size 1440x525px
			</p>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label"></label>
		<div class="col-sm-10">
			<button type="submit" class="btn btn-default">Save</button>
		</div>
	</div>
</form>
