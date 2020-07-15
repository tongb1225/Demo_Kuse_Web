<? 
         $this->db->order_by('order_field', 'ASC');
         $this->db->where('position', $category); 
$slide = $this->db->get('featured3');
$count = $slide->num_rows;
$count = $count-1;
?>


<div id="carousel-example" class="carousel slide" data-ride="carousel">
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
            <img src="<?=base_url();?><?=$row->image;?>" alt="<?=$row->title;?>" style="width:100%;">
        </div>
    <? $i++;
    endforeach; ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>