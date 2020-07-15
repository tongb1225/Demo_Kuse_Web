<ul>
	<? foreach ($navlist->result() as $row) { ?>
		<li><? echo anchor('welcome/category/'.$row->id, $row->name);?></li>
	<? } ?>
</ul>