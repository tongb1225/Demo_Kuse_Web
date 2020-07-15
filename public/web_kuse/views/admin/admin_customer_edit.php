<h1><?=$title?></h1>
<form action="<?=base_url()?>admin/customer/edit_run" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

	<div class="form-group">
	  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
	  <div class="col-sm-10">
	    	<? $status = array('active'=>'active', 'inactive'=>'inactive') ?>
		<?=form_dropdown('status', $status, $row->status, 'class="form-control"');?>
	  </div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">ชื่อเล่น</label>
		<div class="col-sm-10">
		<?=form_input('middle_name', $row->middle_name, 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">ภาควิชา</label>
		<div class="col-sm-10">
			<?=form_dropdown('more_info', $this->category_model->department_list(), $row->more_info, 'class="form-control" required');?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">รุ่นที่</label>
		<div class="col-sm-10">
		<?=form_input('country_code', $row->country_code, 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
		<div class="col-sm-10">
		<?=form_input('first_name', $row->first_name, 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
	  <label for="inputEmail3" class="col-sm-2 control-label">E-Mail</label>
	  <div class="col-sm-10">
		<?=form_input('email', $row->email, 'class="form-control"' )?>
	  </div>
	</div>

	<div class="form-group">
	  <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
	  <div class="col-sm-10">
		<?=form_input('first_name', $row->first_name, 'class="form-control"' )?>
	  </div>
	</div>

	<div class="form-group">
	  <label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>
	  <div class="col-sm-10">
		<?=form_input('last_name', $row->last_name, 'class="form-control"' )?>
	  </div>
	</div>

	<div class="form-group">
	  <label for="inputEmail3" class="col-sm-2 control-label">Address 1</label>
	  <div class="col-sm-10">
		<?=form_input('address1', $row->address1, 'class="form-control"' )?>
	  </div>
	</div>

	<div class="form-group">
	  <label for="inputEmail3" class="col-sm-2 control-label">Address 2</label>
	  <div class="col-sm-10">
		<?=form_input('address2', $row->address2, 'class="form-control"' )?>
	  </div>
	</div>

	<div class="form-group">
	  <label for="inputEmail3" class="col-sm-2 control-label">City</label>
	  <div class="col-sm-10">
		<?=form_input('city', $row->city, 'class="form-control"' )?>
	  </div>
	</div>

	<div class="form-group">
	  <label for="inputEmail3" class="col-sm-2 control-label">Region</label>
	  <div class="col-sm-10">
		<?=form_input('region', $row->region, 'class="form-control"' )?>
	  </div>
	</div>

	<div class="form-group">
	  <label for="inputEmail3" class="col-sm-2 control-label">Zip Code</label>
	  <div class="col-sm-10">
		<?=form_input('zip_code', $row->zip_code, 'class="form-control"' )?>
	  </div>
	</div>

	<div class="form-group">
	  <label for="inputEmail3" class="col-sm-2 control-label">Phone Number</label>
	  <div class="col-sm-10">
	  	<?=form_input('telephone_number', $row->telephone_number, 'class="form-control"' )?>
	  </div>
	</div>

	<div class="form-group">
	  <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
	  <div class="col-sm-10">
			<img src="<?=base_url()?><?=$row->image?>" alt="" class="img-responsive" style="max-width:300px;" />
	  </div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<input type="hidden" name="id" value="<?=$row->id;?>">
			<input type="hidden" name="image" value="<?=$row->image;?>">
	  	<button type="submit" class="btn btn-default">Submit</button>
		</div>
	</div>

</form>
