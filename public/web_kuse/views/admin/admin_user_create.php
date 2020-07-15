<h1><?=$title?></h1>
<form action="<?=base_url()?>admin/user/create_user_run" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
		<div class="col-sm-10">
			<?=form_input('first_name', '', 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>
		<div class="col-sm-10">
			<?=form_input('last_name', '', 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<?=form_input('email_address', '', 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
		<div class="col-sm-10">
			<?=form_input('username', '', 'class="form-control"' )?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
			<?=form_password('password', '', 'class="form-control"' )?>
		</div>
	</div>

	<br /><br />
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label"></label>
		<div class="col-sm-10">
			<button type="submit" class="btn btn-default">Submit</button>
		</div>
	</div>
</form>
