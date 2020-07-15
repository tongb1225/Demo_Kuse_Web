<h3>Basic Setting</h3>
<p>
<?
$query = $this->db->get('setting');
foreach($query->result() as $row) { ?>
	Website Title: <?=$row->web_title;?><br />
	Website Keyword: <?=$row->web_keyword;?><br />
	Website Description: <?=$row->web_desc;?><br />
	<?
	}
?>

	<p>Number Of Product: <? echo $this->db->count_all('products'); ?></p>
	
	<p>
		<h3>User Login Time</h3>
	<? 			  $this->db->order_by('id', 'desc'); 
	$login_data = $this->db->get('login_data', '10');
	if($login_data->num_rows > 0)
	{ ?>
		<table class="table table-striped">
			<tr>
				<th>id</th> <th>username</th> <th>email</th> <th>login time</th>
			</tr>
			<?php foreach($login_data->result() as $row): ?>
				<tr>
					<td align="center"><?=$row->id;?></td>
					<td align="center"><?=$row->username;?></td>
					<td align="center"><?=$row->email_address;?></td>
					<td align="center"><?=$row->login_time;?></td>
				</tr>
			<?php endforeach; ?>
		</table>	
	<? } ?>
	</p>
</p>