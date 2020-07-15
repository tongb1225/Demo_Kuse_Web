<h1><?=$title;?></h1>
<p><?=anchor("admin/article/create_".$table, "Create New ".$table, 'class="btn btn-primary"');?></p>
<?
if(!isset($filter))
{
	$filter='0';
}
$js = 'onChange="this.form.submit();" class="form-control"';
?>
<form class="form-horizontal" role="form" action="<?=base_url()?>admin/article" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">View Category</label>
    <div class="col-sm-10">
    	<? $option = $this->category_model->get_article_category_list(); ?>
			<?=form_dropdown('filter',$option,$filter,$js);?>
    </div>
  </div>
<?=form_close();?>

<? if (count($query)) { ?>
	<table class="table table-striped">
		<tr>
			<th>id</th> <th>title</th> <th>image</th> <th>status</th> <th>action</th> <th>gallery</th>
		</tr>
	<?php foreach($query->result() as $row): ?>
		<tr>
			<td align="center" width="20"><?=$row->article_id?></td>
			<td>
				<h5><?=$row->article_title?></h5>
				หมวด: <?=$row->title?><br>
				สร้างเมื่อ: <?=$row->article_date?>
			</td>
			<td class="col-sm-2"><img src="<?=$this->category_model->addhttp($row->article_thumb)?>" class="img-responsive"></td>
			<td><?=$row->status?></td>
			<td class="col-sm-2">
				<?=anchor('admin/article/edit_'.$table.'/'.$row->article_id, 'edit', 'class="btn btn-success"');?>
				<a href="<? echo base_url().'index.php/admin/article/delete_'.$table.'/'.$row->article_id;?>" onclick = "if (! confirm('Do you relly want to delete?')) return false;" class="btn btn-danger">delete</a>
			</td>
			<!-- <td align="center"><?=anchor('admin/activity_upload/index/'.$row->article_id, 'upload')?></td> -->
			<td class="col-sm-1"><?=anchor('admin/article_gallery/index/'.$row->article_id, 'upload', 'class="btn btn-primary"')?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<? } ?>
