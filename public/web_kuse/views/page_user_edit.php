<section class="white_block">
	<div class="container">
		<div class="row">

			<div class="col-sm-3">
				<p><img src="<?=base_url().$row->image?>" class="img-responsive"></p>
			</div>

			<div class="col-sm-9">
				<h1>Your Profile</h1>


				<?php echo validation_errors(); ?>
				<form action="<?=base_url();?>user/user_edit_run" enctype="multipart/form-data" class="form-horizontal" role="form" method="post">

				<fieldset>
					<legend>Personal Information</legend>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ชื่อเล่น/ชื่อที่แสดง</label>
						<div class="col-sm-7">
						<input type="text" class="form-control" name="middle_name" value="<?=$row->middle_name?>" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ชื่อ</label>
						<div class="col-sm-7">
						<input type="text" class="form-control" name="first_name" value="<?=$row->first_name;?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">นามสกุล</label>
						<div class="col-sm-7">
						<input type="text" class="form-control" name="last_name" value="<?=$row->last_name;?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">อีเมล์</label>
						<div class="col-sm-7">
						<input type="email" class="form-control" name="email" value="<?=$row->email;?>" disabled="">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ภาควิชา</label>
						<div class="col-sm-7">
							<?=form_dropdown('department', $this->category_model->department_list(), $row->more_info, 'class="form-control" required');?>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">รุ่นที่</label>
						<div class="col-sm-7">
						<input type="year" class="form-control" name="year" value="<?=$row->country_code?>" required>
						</div>
					</div>
				</fieldset>

				<fieldset>
					<legend>Address</legend>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ที่อยู่ 1</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="address1" value="<?=$row->address1;?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ที่อยู่ 2</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="address2" value="<?=$row->address2;?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">อำเภอ</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="city" value="<?=$row->city;?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">จังหวัด</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="region" value="<?=$row->region;?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">รหัสไปรษณีย์</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="zip_code" value="<?=$row->zip_code;?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">เบอร์โทรศัพท์</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="telephone_number" value="<?=$row->telephone_number;?>">
						</div>
					</div>
				</fieldset>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">รูปโปรไฟล์</label>
						<div class="col-sm-7">
							<input type="file" name="userfile1" class="form-control" />
							<p class="help-block">
								รูปสี่เหลี่ยนขนาดไม่เกิน 1000x1000 px ขนาดไฟล์ไม่เกิน 2MB
							</p>
					  </div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label"></label>
						<div class="col-sm-7">
							<?=form_hidden('tmppath1', $row->image);?>
							<button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>
