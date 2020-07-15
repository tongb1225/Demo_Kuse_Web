<div id="blog_left">

	<!-- <h1>Search</h1>
	<form action="<?=base_url()?>index.php/blog/search" method="post" accept-charset="utf-8">
		<input type="text" name="search" id="search" maxlength="30" value="Search..." onclick='this.value = "";' onblur="if (this.value == '') {this.value = 'Search...';}"  onfocus="if (this.value == 'Search...') {this.value = '';}" class="button" />
		<input type="image" src="<?=base_url();?>images/go.jpg" name="image" width="30" height="21" class="button">
	</form>
	<div class="clear">&nbsp;</div> -->
	
	<!-- <h2>Latest Blogs</h2>
	<? 
	$blog = $this->blog_model->get_all_blog('10', '0');
	foreach($blog->result() as $row): ?>
		<ul class="blog_list">
			<li><a href="<?=base_url();?>index.php/blog/read/<?=$row->blog_id?>"><?=$row->blog_title;?></a></li>
		</ul>
	<? endforeach; ?>
	 -->
	
	<img src="<?=base_url();?>images/M13.jpg" width="200px" />
	<div class="clear">&nbsp;</div>
	
	<div align="center"> 
	<a href="http://www.twitter.com/BManhireFashion"><img src="https://twitter-badges.s3.amazonaws.com/follow_me-a.png" alt="Follow BManhireFashion on Twitter"/></a>
		<br><br>

		<!-- Place this tag where you want the +1 button to render -->
				<g:plusone annotation="inline"></g:plusone>
				<!-- Place this render call where appropriate -->
				<script type="text/javascript">
				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
	</div>
	<? if($this->session->userdata('blog')=='yes')
	{ ?>
		<h1>Blogger Control</h1>
		<ul>
			<li><?=anchor("blog/create_blog", "Create New Blog");?></li>
			<li><?=anchor("blog/blog_list", "My Blog List");?></li>
			<li><?=anchor("user/profile", "Profile");?></li>
			<li><?=anchor("blog/logout", "Log Out");?></li>
		</ul>
	<? } ?>
	
	<div style="display:block; height:352px;">&nbsp;</div>
</div>