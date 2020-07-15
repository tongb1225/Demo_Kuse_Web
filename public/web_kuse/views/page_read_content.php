<section>
	<div class="container">
	<?php foreach($query->result() as $row): ?>
		<div class="row">
			<div class="col-sm-12" id="content">
				<h1 class="title"><?=$row->title?></h1>
				<?=$row->body;?>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
</section>
