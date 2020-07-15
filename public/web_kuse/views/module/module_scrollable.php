 <?  	     $this->db->order_by('id', 'RAMDOM');
             $this->db->where('status', 'active'); 
    $product = $this->db->get('products', 12); ?>

<div class="well well-sm hidden-xs">
<div class="row">

    <div class="col-sm-12">
        <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <?
                $i = 1;
                $l = 1;
                $count = $product->num_rows;
                foreach($product->result() as $row): 
                    if($i==1) { ?>
                        <div class="item<? if($l==1) { echo ' active'; } ?>"><div class="row col-subproduct" style="padding:0px 60px;">
                    <? } ?>
                        <div class="col-sm-2 text-center">
                            <div class="image_block">
                                <p><a href="<?=base_url().'product/detail/'.$row->permalink;?>">
                                    <img src="<?=base_url().$row->thumbnail;?>" class="img-responsive" style="width:100%; height:auto;" alt="<?=$row->name?>">
                                </a></p>
                                <div class="caption">
                                    <p><a href="<?=base_url().'product/detail/'.$row->permalink;?>"><?=$row->name?></a></p>
                                    <? if($row->before_price > 1) { ?>
                                    <span><b>ราคาปกติ</b> <span style="text-decoration:line-through;"><?=$this->category_model->getconvert_rate2($row->before_price, "US")?></span> <b>ประหยัด</b> <?=$row->save_price?>%</span><br>
                                    <? } ?>
                                    <b>ราคา</b> : <span style="color:#D35BA1;"><?=$this->category_model->getconvert_rate2($row->price, "US")?></span>
                                </div>
                            </div>
                        </div>
                    <? if($i==6) {
                        echo '</div></div>';
                        $i=0;
                    }
                    elseif($l == $count)
                    {
                        echo '</div></div>';
                    }
                    $i++; $l++;
                endforeach; ?>
            </div>
            <!--/carousel-inner--> 
            <a class="left2" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a class="right2" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    </div>
</div>
<style type="text/css">
    .left2 { position: absolute; top:0%; left: 0px; height: 100%; width: 30px; }
    .right2 { position: absolute; top:0%; right: 0px; height: 100%; width: 30px; }
    .left2 span { position: absolute; top:30%; font-size: 30px; }
    .right2 span { position: absolute; top:30%; font-size: 30px; }
</style>