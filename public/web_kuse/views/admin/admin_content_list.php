<h1><?=$title;?></h1>
<p><?=anchor("admin/site/create_".$table, "Create Content", 'class="btn btn-primary"');?></p>

<? if (count($query)) { ?>
	<table class="table table-striped">
		<tr>
			<th>id</th> <th>title</th> <th>status</th> <th>order</th> <th>action</th>
		</tr>
	<?php foreach($query->result() as $row): ?>
		<tr>
			<td class="col-sm-1"><?=$row->id?></td>
			<td class="col-sm-6"><?=$row->title?></td>
			<td class="col-sm-2"><?=$row->status?></td>
			<td class="col-sm-1"><?=$row->order_field?></td>
			<td class="col-sm-2"><?=anchor('admin/site/edit_'.$table.'/'.$row->id, 'edit', 'class="btn btn-success"');?> 
			<a href="<? echo base_url().'index.php/admin/site/delete_'.$table.'/'.$row->id;?>" onclick = "if (! confirm('Do you relly want to delete?')) return false;" class="btn btn-danger">delete</a>
		</td>
		</tr>
	<?php endforeach; ?>
	</table>	
<? } ?>
