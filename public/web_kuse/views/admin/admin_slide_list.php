<h1><?=$title;?></h1>
<p><?=anchor("admin/slide/create_".$table, "Create New ".$table, 'class="btn btn-primary"');?></p>

<? if (count($query)) { ?>
	<table class="table table-striped">
		<tr>
			<th>id</th> <th>image</th> <th>title</th> <th>content</th> <th>order</th> <th>action</th>
		</tr>
	<?php foreach($query->result() as $row): ?>
		<tr>
			<td class="col-sm-1"><?=$row->id?></td>
			<td width="250"><img src="<?=base_url().$row->image;?>" class="img-responsive" /></td>
			<td><?=$row->title?></td>
			<td><?=$row->content?></td>
			<td><?=$row->order_field?></td>
			<td class="col-sm-2"><?=anchor('admin/slide/edit_'.$table.'/'.$row->id, 'edit', 'class="btn btn-success"');?>
			<a href="<? echo base_url().'index.php/admin/slide/delete_'.$table.'/'.$row->id;?>" onclick = "if (! confirm('Do you relly want to delete?')) return false;" class="btn btn-danger">delete</a>
		</td>
		</tr>
	<?php endforeach; ?>
	</table>
<? } ?>
