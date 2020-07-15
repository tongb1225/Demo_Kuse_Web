<h1><?=$title;?></h1>
<!--  
<?=form_open_multipart('admin/article_gallery/upload_folder/');?>
	<h2>Folder Upload</h2>
	<?=form_hidden('album_id', $album_id)?>
	folder path <input type="text" name="path" value="uploads/degas/" class="form-control">
	<input type="submit" value="Upload" class="btn btn-primary">
</form>
-->


<? if (count($query)) { ?>
	<table class="table table-striped">
		<tr>
			<th>id</th> <th>image</th> <th>order</th> <th>title</th> <th>group</th> <th>action</th>
		</tr>
		
			<?=form_open_multipart('admin/article_gallery/upload_activity_run/');
			for($num=1;$num<=5;$num++) { ?>

			<tr>
				<td><?=form_hidden('album_id', $album_id)?></td>
				<td><input type="file" name="userfile<?=$num?>" class="form-control" /></td>
				<td align="center"><input type="text" name="field_order<?=$num?>" value="99" class="form-control" size="3"></td>
				<td align="center"><input type="text" name="title<?=$num?>" value="" class="form-control"></td>
				<td align="center"><input type="text" name="group<?=$num?>" value="" class="form-control"></td>
				<td align="center"><input type="submit" value="Upload" class="btn btn-primary"></td>
			</tr>

			<? } ?>
			</form>
		
	<?php foreach($query->result() as $row): ?>
		<tr>
			<td align="center"><?=$row->id?></td>
			<td align="center"><img src="<?=base_url().$row->image?>" height="120" /></td>
			<td align="center"><?=$row->field_order?></td>
			<td align="center"><?=$row->title?></td>
			<td align="center"><?=$row->group?></td>
			<td align="center"> 
			<?=anchor('admin/article_gallery/delete_image/'.$row->id, 'delete', 'onclick = "if (! confirm(\'Do you relly want to delete?\')) return false;" class="btn btn-danger"')?>
			</td>
		</tr>
	<?php endforeach; ?>	
	</table>	
<? } ?>