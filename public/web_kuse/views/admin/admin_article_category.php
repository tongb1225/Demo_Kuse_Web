<h1><?=$title;?></h1>
<p><?=anchor("admin/article_category/create", "Create New Article Category", 'class="btn btn-primary"');?></p>

<table class="table table-striped">
	<thead>
		<th>Title</th>
		<th class="col-sm-3">Action</th>
	</thead>
<? if (count($query)) {
	foreach($query->result() as $row): ?>
		<tr>
			<td><?=$row->title;?> [ Order:<?=$row->order_field;?> ] [ Category ID:<?=$row->id;?> ] 
			<span class="label label-<? if($row->status == 'active') { echo 'success'; } else { echo 'danger'; } ?>"><?=$row->status;?></span>
			</td>	
			<td>
				<?=anchor('admin/article_category/edit/'.$row->id, 'edit', 'class="btn btn-success btn-sm"');?> 
				<a href="<?=base_url().'admin/category/delete/'.$row->id?>" onclick = "if (! confirm('Do you relly want to delete?')) return false;" class="btn btn-danger btn-sm">delete</a>
			</td>
		</tr>

		<? $subcategory = $this->category_model->get_article_sub_category($row->id);
		$i = '0';
		$l = '0';
		foreach($subcategory->result() as $row2)
		{	
			$l++;
			echo '<tr><td style="background-color:#A8FFE4;" id="category2_block'.($l & '1').'">';		
			echo '|--> '.$row2->title; ?> [ Order:<?=$row2->order_field;?> ] [ Category ID:<?=$row2->id;?> ] <span class="label label-<? if($row2->status == 'active') { echo 'success'; } else { echo 'danger'; } ?>"><?=$row2->status;?></span>
			</td>
			<td>
				<?=anchor('admin/article_category/edit/'.$row2->id, 'edit', 'class="btn btn-success btn-sm"');?> 
				<a href="<? echo base_url().'admin/article_category/delete/'.$row2->id;?>" onclick = "if (! confirm('Do you relly want to delete?')) return false;" class="btn btn-danger btn-sm">delete</a>
				<a class="btn btn-primary btn-sm" role="button" data-toggle="collapse" href="#collapse<?=$row2->id?>" aria-expanded="false" aria-controls="collapse"><i class="fa fa-level-down"></i> expand</a>
			</td>
		</tr>
			
			<tbody class="collapse" id="collapse<?=$row2->id?>">
			<!-- level 3 category -->
			<? $subcategory3 = $this->category_model->get_article_sub_category($row2->id);
			foreach($subcategory3->result() as $row3)
			{
				$i++;
				echo '<tr><td style="background-color:#FFA9A6;">'; 
				echo '|---> '.$row3->title; ?> [ Order:<?=$row3->order_field;?> ] [ Category ID:<?=$row3->id;?> ] <span class="label label-<? if($row3->status == 'active') { echo 'success'; } else { echo 'danger'; } ?>"><?=$row3->status;?></span></td>
				<td><?=anchor('admin/article_category/edit/'.$row3->id, 'edit', 'class="btn btn-success btn-sm"');?> 
				<a href="<? echo base_url().'admin/article_category/delete/'.$row3->id;?>" onclick = "if (! confirm('Do you relly want to delete?')) return false;" class="btn btn-danger btn-sm">delete</a></span>
				</td>
				</tr>
			<? } ?>
			</tbody>
		<? } ?>
	<?php endforeach;  
} ?>
</table>