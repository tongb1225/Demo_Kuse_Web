<section class="block_white">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2"><div class="well well-sm">
				<?=form_open('user/login_check', 'class="form-horizontal" role="form"')?>
					<div class="text-center">
						<h2>เข้าสู่ระบบ</h2>
						<p></p>
						<div id="alert"><?=$this->session->flashdata('reply1');?></div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
						</div>
					</div>

					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
						<div class="col-sm-9">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
						</div>
					</div>

					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label"></label>
						<div class="col-sm-9">
							<button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
							<a href="<?=base_url()?>user/forget_password" class="btn btn-pink">ลืมรหัสผ่าน?</a>
						</div>
					</div>
				<?=form_close();?>
				<p>
					<hr>
				</p>

				<div class="text-center">
					<a href="<?=base_url()?>user/register" class="btn btn-primary">ลงทะเบียน</a>
				</div>
			</div></div>
		</div>
	</div>
</section>
