<h1><?=$title;?></h1>
<p><?=anchor("admin/user/create_user", "Create New User", 'class="btn btn-primary"');?></p>
<? if (count($query)) { ?>
	<table class="table table-striped">
		<tr>
			<th>id</th> <th>first name</th> <th>last name</th> <th>user name</th> <th>e-mail</th> <th>action</th>
		</tr>
	<?php foreach($query->result() as $row): ?>
		<tr>
			<td align="center"><?=$row->id?></td>
			<td><?=$row->first_name?></td>
			<td><?=$row->last_name?></td>
			<td><?=$row->username?></td>
			<td><a href="mailto:<?=$row->email_address;?>"><?=$row->email_address;?></a></td>
			<td align="center"><?=anchor('admin/user/edit_user/'.$row->id, 'edit', 'class="btn btn-success"');?> 
			<a href="<? echo base_url().'index.php/admin/user/delete_user/'.$row->id;?>" onclick = "if (! confirm('Do you relly want to delete?')) return false;" class="btn btn-danger">delete</a>
		</td>
		</tr>
	<?php endforeach; ?>
	</table>	
<? } ?>
