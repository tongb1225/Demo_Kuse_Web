<h1><?=$title;?></h1>

<?=form_open_multipart('admin/featured/save');?>
<h3>You might also like</h3>
<p>Please use image size 140x140px</p>

<h3>English</h3>
<? 
$i = 1;
if (count($query)) { ?>
	<table border="1" cellspacing="0" cellpadding="3" width="600">
		<tr>
			<th width="30">ลำดับ</th> <th>image</th> <th>title</th> <th>link</th>
		</tr>
	<?php foreach($query->result() as $row): ?>
		<tr>
			<td align="center"><?=$row->id?></td>
			<td>
				<?=form_upload('image'.$i)?>
				<?=form_hidden('tmp'.$i, $row->image)?>
				<? if(strlen($row->image) > 0 ) { echo img($row->image); }?>
			</td>
			<td><?=form_input('title'.$i, $row->title, 'style="width:200px;"')?></td>
			<td><?=form_input('article_id'.$i, $row->article_id, 'style="width:200px;"');?></td>
			</td>
		</tr>
	<?php 
	$i++;
	endforeach; ?>
	</table>	
<? } ?>

<h3>Thai</h3>
<? 
$i = 1;
if (count($query)) { ?>
	<table border="1" cellspacing="0" cellpadding="3" width="600">
		<tr>
			<th width="30">ลำดับ</th> <th>image</th> <th>title</th> <th>link</th>
		</tr>
	<?php foreach($query2->result() as $row2): ?>
		<tr>
			<td align="center"><?=$row2->id?></td>
			<td>
				<?=form_upload('image2'.$i)?>
				<?=form_hidden('tmp2'.$i, $row2->image)?>
				<? if(strlen($row2->image) > 0 ) { echo img($row2->image); }?>
			</td>
			<td><?=form_input('title2'.$i, $row2->title, 'style="width:200px;"')?></td>
			<td><?=form_input('article_id2'.$i, $row2->article_id, 'style="width:200px;"');?></td>
			</td>
		</tr>
	<?php 
	$i++;
	endforeach; ?>
	</table>	
<? } ?>

<p class="submit">
	<input type="submit" name="submit" id="submit" value="Save Data" tabindex="100" />
</p>

</form>
<style type="text/css">
	table td { vertical-align: top; }
</style>