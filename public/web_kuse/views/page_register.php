<section class="white_block">
	<div class="container">
		<!-- start content -->
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>ลงทะเบียนศิษย์เก่า</h2>

				<span style="color:red; font-size:1.2em;">
				<div id="alert"><?=validation_errors();?><?=$this->session->flashdata('reply');?></div>
				</span>

				<?=form_open('user/register_check', 'class="form-horizontal" role="form"');?>
				<fieldset>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ชื่อเล่น/ชื่อที่แสดง</label>
						<div class="col-sm-7">
						<input type="text" class="form-control" name="middle_name" value="<?=set_value('middle_name');?>" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ชื่อ</label>
						<div class="col-sm-7">
						<input type="text" class="form-control" name="first_name" value="<?=set_value('first_name');?>" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">นามสกุล</label>
						<div class="col-sm-7">
						<input type="text" class="form-control" name="last_name" value="<?=set_value('last_name');?>" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">อีเมล์</label>
						<div class="col-sm-7">
						<input type="email" class="form-control" name="email" value="<?=set_value('email');?>" required>
							<p class="help-block">
								ต้องเป็นอีเมลที่มีอยู่จริง เพื่อทำการยืนยันการสมัคร
							</p>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">อีเมล์อีกครั้ง</label>
						<div class="col-sm-7">
						<input type="email" class="form-control" name="email2" value="<?=set_value('email');?>" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ภาควิชา</label>
						<div class="col-sm-7">
							<?=form_dropdown('department', $this->category_model->department_list(), '', 'class="form-control" required');?>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">รุ่นที่</label>
						<div class="col-sm-7">
						<input type="year" class="form-control" name="year" value="<?=set_value('year');?>" required>
						</div>
					</div>
				</fieldset>

				<br />
				<h3>ตั้งรหัสผ่านของคุณ</h3>
				<fieldset>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">รหัสผ่าน</label>
						<div class="col-sm-7">
						<input type="password" class="form-control" name="password" value="<?=set_value('password');?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">รหัสผ่านอีกครั้ง</label>
						<div class="col-sm-7">
						<input type="password" class="form-control" name="password_again" value="<?=set_value('password_again');?>">
						</div>
					</div>
				</fieldset>

				<br />
				<h3>ที่อยู่</h3>
				<fieldset>

					<!-- <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ประเทศ</label>
						<div class="col-sm-7">
							<? $country_list = $this->category_model->get_country_list(); ?>
							<?=form_dropdown('country',$country_list, '', 'class="form-control" id="country_list"');?>
						</div>
					</div> -->

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ที่อยู่ 1</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="address1" value="<?=set_value('address1');?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ที่อยู่ 2</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="address2" value="<?=set_value('address2');?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">อำเภอ</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="city" value="<?=set_value('city');?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">จังหวัด</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="region" value="<?=set_value('region');?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">รหัสไปรษณีย์</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="zip_code" value="<?=set_value('zip_code');?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">เบอร์โทรศัพท์</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="telephone" value="<?=set_value('telephone');?>">
						</div>
					</div>

				</fieldset>

				<!-- <h3>ป้องกันสแปม</h3> -->
				<fieldset>

					<!-- <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label"></label>
						<div class="col-sm-7">
							<?//=$recaptcha ?>
						</div>
					</div> -->

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label"></label>
						<div class="col-sm-7">
							<button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
						</div>
					</div>

				</fieldset>

				</form>
				<br />
			</div>
		</div>

	</div>

</section>
