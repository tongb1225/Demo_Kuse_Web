<section>
  <div class="container">


  <h1 class="title" style="margin-bottom:10px;text-transform: uppercase;"><?=$title?></h1>


	<?php $i = 1;
	foreach($activity->result() as $row): ?>

    <div class="row" style="margin-bottom:30px">
      <div class="col-sm-3" style="margin-bottom:10px;">
        <a href="<?=base_url()?>page/article_read/<?=$row->article_id?>"><img src="<?=base_url().$row->article_thumb?>" class="img-responsive" alt="<?=$row->article_title?>" title="<?=$row->article_title?>" style="width:100%;height:auto;" /></a>
      </div>
      <div class="col-sm-9" style="padding-top:20px;">
        <h2><a href="<?=base_url()?>page/article_read/<?=$row->article_id?>"><?=$row->article_title?></a></h2>
        <p>
          <?=$row->article_header?>
        </p>
      </div>
    </div>

		<?php
		//if($i == 3) { echo '<div class="clearfix"></div>'; $i = 0; }
		$i++;
	endforeach; ?>

  <?=$this->pagination->create_links(); ?>

	<div class="clearfix"></div>
  </div>
</section>
