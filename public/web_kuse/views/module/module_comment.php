<!-- reply -->
	<? 
 	$reply = $this->blog_model->get_blog_reply($blog_id);

	if($reply->num_rows > '0')
		{
			foreach($reply->result() as $row2): 
			?>
				<div id="comment_block">
					<div class="comment_image">
					<?=img('images/nopic.png')?>
					</div>
				
					<div class="comment_message">
					<div id="comment_name"><?=$row2->first_name;?> <?=$row2->last_name;?></div> 
					<div id="comment_date">on <?=$row2->comment_date;?></div>
					<?=$row2->comment_body;?>
					</div>
					<div class="clear"></div>
				</div>
			<? endforeach; 
		} ?>

	
	<!-- comment -->
	<? 
	if($this->session->userdata('logged_in')=='TRUE')
	{
		echo 'Make a comment.';
		echo '<form action="'.base_url().'index.php/blog/send_comment" class="myform" id="form1" method="post">
			<p>
				<label for="firstname">Name
				<span class="small">Required</span></label>
				<input id="first_name" name="name" class="required" value="'.$this->session->userdata('username').'" minlength="2" readonly />
			</p>
			<p>
			    <label for="last_name">Mail
				<span class="small">Will not be published.</span></label>
			    <input id="mail" name="mail" value="'.$this->session->userdata('email').'" size="25" readonly />
			</p>
			<p>
			    <label for="last_name">Comment
				<span class="small">Allow 150 character.</span></label>
			    <textarea name="comment" rows="5" cols="35" maxlength="150" onkeyup="return ismaxlength(this)"></textarea>
			</p>
			<p>
				<label for="comment">&nbsp;
				<span class="small">&nbsp;</span></label>
				<input type="submit" value="Send Comment">
				<input type="hidden" name="blog_id" value="'.$blog_id.'" class="hidden">
			</p>
			</form>';
	}
	else
	{
		echo 'Please Login Before You Comment. <a href="'.base_url().'index.php/user/register">Login</a>';
	}
	?>