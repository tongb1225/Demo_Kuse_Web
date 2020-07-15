<?
$this->db->order_by('order_field', 'ASC');
$slide = $this->db->get('slide');
$count = $slide->num_rows;
$count = $count-1;
?>
<div class="container">
<center>
<div id="main-carousel" class="carousel slide fade-carousel carousel-fade" data-ride="carousel" style="width:100%;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?
    for($num=0;$num<=$count;$num++) { ?>
      <li data-target="#carousel-example-generic" data-slide-to="<?=$num?>"<? if($num==0) { echo " class=\"active\""; } ?>></li>
    <? }
    ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  <? $i = 1;
  foreach($slide->result() as $row): ?>
    <div class="item<? if($i==1) { echo ' active'; } ?>">
      <a href="<?=$row->link?>">
        <img src="<?=base_url();?><?=$row->image;?>" alt="<?=$row->title;?>" style="width:100%;">
      </a>
    </div>
  <? $i++;
  endforeach; ?>
  </div>

  <a href="#main-carousel" class="left carousel-control" data-slide="prev">
    <span class="control-left fa-stack fa-lg">
      <i class="fa fa-angle-left fa-stack-2x"></i>
    </span>
  </a><!-- end left control -->
  <a href="#main-carousel" class="right carousel-control" data-slide="next">
    <span class="control-right fa-stack fa-lg">
      <i class="fa fa-angle-right fa-stack-2x"></i>
    </span>
  </a> <!-- end right control -->
</div></center>
</div>