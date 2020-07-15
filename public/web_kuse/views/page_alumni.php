<section>
  <div class="container">
    <h1 class="title" style="margin-bottom:10px;text-transform: uppercase;"><?=$title?></h1>

      <div class="well well-sm">
        <div class="row">
          <div class="col-sm-6">
            <form class="form-horizontal" method="post" action="<?=current_url()?>">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ภาควิชา</label>
                <div class="col-sm-10">
                  <?=form_dropdown('department', $this->category_model->department_list(), $department, 'class="form-control"');?>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">ปี</label>
                <div class="col-sm-10">
                  <input type="year" class="form-control" name="year" value="<?=$year?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">ค้นหา</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-sm-6 text-right">
            <p>สวัสดี คุณ <?=$this->session->userdata('username')?></p>
            <a href="<?=base_url()?>user/user_edit" class="btn btn-primary">แก้ไขข้อมูลส่วนตัว</a> <a href="<?=base_url()?>user/logout" class="btn btn-primary">ออกจากระบบ</a>
          </div>
        </div>
      </div>
      <div class="row">
      	<?php $i = 1;
      	 foreach($activity->result() as $row): ?>

            <div class="col-sm-3" style="margin-bottom:10px;">
              <img src="<?=base_url().$row->image?>" class="img-responsive" alt="<?=$row->image?>" title="<?=$row->image?>" style="width:100%;height:auto;" />
              <h3><?=$row->first_name?> <?=$row->last_name?></h3>
              <p><strong>ชื่อเล่น:</strong>  <?=$row->middle_name?></p>
              <p><strong>อีเมล์:</strong>  <a href="mailto:<?=$row->email?>"><?=$row->email?></a></p>
              <p><strong>ภาควิชา:</strong>  <?=$row->more_info?></p>
              <p><strong>รุ่น:</strong>  <?=$row->country_code?></p>
            </div>

      		<?php
      		//if($i == 3) { echo '<div class="clearfix"></div>'; $i = 0; }
      		$i++;
      	endforeach; ?>
      </div>

    <?=$this->pagination->create_links(); ?>
  	<div class="clearfix"></div>
  </div>
</section>
