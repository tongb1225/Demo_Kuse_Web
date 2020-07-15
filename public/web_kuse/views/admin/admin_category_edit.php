<h1><?=$title?></h1>
<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/category/edit_categories_run"> 

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<?=form_input('name', $name, 'class="form-control"' )?>
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
			<?=form_dropdown('status',$option, $status,'class="form-control"');?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Category Parent</label>
		<div class="col-sm-10">
			<? $option = array('active' => 'active', 'inactive' => 'inactive'); ?>
			<?=form_dropdown('parentid',$category,$parentid,'class="form-control"');?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label"></label>
		<div class="col-sm-10">
			<?=form_hidden('id', $id)?>
			<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
		</div>
	</div>
</form>