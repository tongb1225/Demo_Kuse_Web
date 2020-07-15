<section class="block_white">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2"><div class="well well-sm">

			<h2><span>ลืมรหัสผ่าน</span></h2>

			<hr>


			<?=form_open('user/forget_password_submit', 'class="form-horizontal" role="form"');?>
				<p>
					<div style="color:red; font-size:1.5em; line-height:1.5em"><?=$this->session->flashdata('reply');?></a></div>
				</p>

				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-6">
				    	<input type="email" class="form-control" placeholder="Email" name="email">
				    </div>
				    <div class="col-sm-4"><button type="submit" class="btn btn-primary">Send</button></div>
			  	</div>
			</form>
			</div>
		</div>
	</div>
</section>
