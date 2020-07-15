<h1><?=$title;?></h1>

<?=form_open_multipart('admin/activity_upload/upload_folder/');?>
	<h2>Folder Upload</h2>
	<?=form_hidden('album_id', $album_id)?>
	folder path <input type="text" name="path" value="uploads/degas/" id="field_order" size="40">
	<input type="submit" value="Upload">
</form>


<? if (count($query)) { ?>
	<table border="1" cellspacing="0" cellpadding="3" width="600">
		<tr>
			<th>id</th> <th>thumb image</th> <th>order</th> <th>action</th>
		</tr>
		<tr>
			<?=form_open_multipart('admin/activity_upload/upload_activity_run/');?>
				<td><?=form_hidden('album_id', $album_id)?></td>
				<td><label>Image: <input type="file" name="userfile1" size="40" /></label></td>
				<td align="center"><input type="text" name="field_order" value="99" id="field_order" size="3"></td>
				<td align="center"><input type="submit" value="Upload"></td>
			</form>
		</tr>
	<?php foreach($query->result() as $row): ?>
		<tr>
			<td align="center"><?=$row->id?></td>
			<td align="center"><img src="<?=base_url().$row->image?>" height="120" /></td>
			<td align="center"><?=$row->field_order?></td>
			<td align="center"> 
			<a href="<? echo base_url().'index.php/admin/activity_upload/delete_image/'.$row->id;?>" onclick = "if (! confirm('Do you relly want to delete?')) return false;">delete</a>
			</td>
		</tr>
<?php endforeach; ?>	
	</table>	
<? } ?>