<h1><?=$title;?></h1>
<p><?=anchor("admin/category/create_".$table, "Create New ".$table, 'class="btn btn-primary"');?></p>

<table class="table table-striped">
<? if (count($query)) {
	foreach($query->result() as $row): ?>
		<tr>
		<td><?=$row->name;?> [ Order:<?=$row->order_field;?> ] [ Category ID:<?=$row->id;?> ] [ Status ID:<?=$row->status;?> ]</td>
			
		<td><?=anchor('admin/category/edit_'.$table.'/'.$row->id, 'edit', 'class="btn btn-success btn-sm"');?> 
		<a href="<? echo base_url().'index.php/admin/category/delete_'.$table.'/'.$row->id;?>" onclick = "if (! confirm('Do you relly want to delete?')) return false;" class="btn btn-danger btn-sm">delete</a></td>
		
		
		</tr>
		<? $subcategory = $this->category_model->getSubCategory2($row->id);
		$i = '0';
		$l = '0';
		foreach($subcategory->result() as $row2)
		{	
			$l++;
			echo '<tr><td id="category2_block'.($l & '1').'">';		
			echo '&nbsp;&nbsp;&nbsp;|---------> '.$row2->name; ?> [ Order:<?=$row2->order_field;?> ] [ Category ID:<?=$row2->id;?> ] [ Status ID:<?=$row2->status;?> ]
			</td>
			<td><?=anchor('admin/category/edit_'.$table.'/'.$row2->id, 'edit', 'class="btn btn-success btn-sm"');?> 
			<a href="<? echo base_url().'index.php/admin/category/delete_'.$table.'/'.$row2->id;?>" onclick = "if (! confirm('Do you relly want to delete?')) return false;" class="btn btn-danger btn-sm">delete</a></span><br />
			</td>
				<? $subcategory3 = $this->category_model->getSubCategory2($row2->id);
				foreach($subcategory3->result() as $row3)
				{
					$i++;
					echo '<tr><td>'; 
					echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|---------> '.$row3->name; ?> [ Order:<?=$row3->order_field;?> ] [ Category ID:<?=$row3->id;?> ] [ Status ID:<?=$row3->status;?> ]</td>
					<td><?=anchor('admin/category/edit_'.$table.'/'.$row3->id, 'edit', 'class="btn btn-success btn-sm"');?> 
					<a href="<? echo base_url().'index.php/admin/category/delete_'.$table.'/'.$row3->id;?>" onclick = "if (! confirm('Do you relly want to delete?')) return false;" class="btn btn-danger btn-sm">delete</a></span>
					</td>
					</tr>
				<? } ?>
			</tr>
		<? } ?>
	<?php endforeach;  
} ?>
</table>