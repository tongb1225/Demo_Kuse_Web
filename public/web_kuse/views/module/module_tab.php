<div class="container">
  <div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
   <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">ข่าวประชาสัมพันธ์</a></li>
      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ข่าวการศึกษา/กิจการนิสิต</a></li>
      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">ข่าวงานวิจัยและบริการวิชาการ</a></li>
      <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">ประกาศ</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
        <div class="">
          <ul class="news">
          <?php $activity = $this->category_model->get_article('10', '0', '2');
          foreach($activity->result() as $row): ?>
            <li><a href="<?=base_url()?>page/article_read/<?=$row->article_id?>"><?=$row->article_title?></a></li>
      		<?php endforeach; ?>
          </ul>
          <div class="padding text-right">
            <a href="<?=base_url()?>page/article/2" class="btn btn-default">อ่านข่าวทั้งหมด</a>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="profile">
        <div class="">
          <ul class="news">
          <?php $activity = $this->category_model->get_article('10', '0', '1');
          foreach($activity->result() as $row): ?>
            <li><a href="<?=base_url()?>page/article_read/<?=$row->article_id?>"><?=$row->article_title?></a></li>
      		<?php endforeach; ?>
          </ul>
          <div class="padding text-right">
            <a href="<?=base_url()?>page/article/1" class="btn btn-default">อ่านข่าวทั้งหมด</a>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="messages">
        <div class="">
          <ul class="news">
          <?php $activity = $this->category_model->get_article('10', '0', '3');
          foreach($activity->result() as $row): ?>
            <li><a href="<?=base_url()?>page/article_read/<?=$row->article_id?>"><?=$row->article_title?></a></li>
      		<?php endforeach; ?>
          </ul>
          <div class="padding text-right">
            <a href="<?=base_url()?>page/article/3" class="btn btn-default">อ่านข่าวทั้งหมด</a>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="settings">
        <div class="">
          <ul class="news">
          <?php $activity = $this->category_model->get_article('10', '0', '4');
          foreach($activity->result() as $row): ?>
            <li><a href="<?=base_url()?>page/article_read/<?=$row->article_id?>"><?=$row->article_title?></a></li>
          <?php endforeach; ?>
          </ul>
          <div class="padding text-right">
            <a href="<?=base_url()?>page/article/4" class="btn btn-default">อ่านข่าวทั้งหมด</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
