<h1><?=$title;?></h1>
<? if (count($query)) { ?>
	<table class="table table-striped">
		<tr>
			<th>id</th> <th>first name</th> <th>last name</th> <th>address</th> <th>e-mail</th> <th>action</th>
		</tr>
	<?php foreach($query->result() as $row): ?>
		<tr>
			<td align="center"><?=$row->id?></td>
			<td><?=$row->first_name?></td>
			<td><?=$row->last_name?></td>
			<td class="col-sm-4">
				<?=$row->address1?><br>
				<?=$row->address2?><br>
				<?=$row->city?><br>
				<?=$row->region?><br>
				<?=$row->zip_code?><br>
			</td>
			<td class="col-sm-4">
				<strong>อีเมล์:</strong> <?=mailto($row->email)?><br>
				<strong>เบอร์:</strong> <?=$row->telephone_number?><br>
				<strong>ภาควิชา:</strong> <?=$row->more_info?><br>
				<strong>รุ่น:</strong> <?=$row->country_code?><br>
				<strong>สถานะ:</strong> <? if($row->status == 'active') { echo '<span class="label label-success">'.$row->status.'</span>'; } else { echo '<span class="label label-danger">'.$row->status.'</span>'; } ?><br>
			</td>
			<td><?=anchor('admin/customer/edit/'.$row->id, 'edit', 'class="btn btn-success"');?>
				<a href="<? echo base_url().'admin/customer/delete/'.$row->id;?>" onclick = "if (! confirm('Do you relly want to delete?')) return false;" class="btn btn-danger">delete</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<? } ?>
