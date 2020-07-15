<h1><?=$title?></h1>
<form action="<?=base_url()?>admin/basic_setting/basic_setting_run" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Web Title</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="web_title" value="<?=$web_title?>">
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Keyword</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="3" name="web_keyword"><?=$web_keyword?></textarea>
		  	<p>สามารถใส่ได้หลายคำใช้ " , " ในการแยกแต่ละ keyword</p>
		</div>

	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="3" name="web_desc"><?=$web_desc?></textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Admin E-Mail</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="email" value="<?=$email?>">
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label"></label>
		<div class="col-sm-10">
			<button type="submit" class="btn btn-default">Save</button>
		</div>
	</div>

</form>