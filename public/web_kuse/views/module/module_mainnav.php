<div id="main_nav">
	<? $main_menu = $this->category_model->getAllTopCategory(); ?>
  <ul>
		<? if(!isset($level1))
		{
			$level1 = '0';
		}
		foreach ($main_menu->result() as $row) { 
			if(!isset($page_name)) { $page_name = ""; }
			?>
		<li <?if(strtolower($page_name) == strtolower($row->name)) { echo 'id="current"'; } ?> ><a href="<?=base_url();?>index.php/product/category/<?=$row->id;?>"><?=$row->name;?></a></li>
		<? } ?>
  </ul>
</div>
<div id="line">&nbsp;</div>