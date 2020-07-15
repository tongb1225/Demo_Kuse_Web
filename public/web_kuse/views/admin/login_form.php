<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noodp" />
<title>Admin Login</title>
<link href="<?=base_url();?>css/admin1.css" rel="stylesheet" type="text/css" />
</head>

<body class="login">
	<div class="login_box">



<div id="login">   
	<h1>Member Login</h1>
	<p>Thanks for visiting! Please either login below.</p> 
	<p style="text-align:center; color:red; font-size:1.5em; margin:10px 0px;"><?=$this->session->flashdata('reply');?></p>
	<?=form_open('admin/login/validate_credentials');?>
    <p>
		<label>Username<br /><input type="text" class="input" name="username" id="username" size="20"/></label>
    </p>
    <p>
		<label>Password<br /><input type="password" name="password" id="password" size="20"/></label>
	</p>
    <p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" value="Log In" tabindex="100" />
	</p>
	</form>
    </div>

	</div>
    <p id="backtoblog"><a href="<?=base_url();?>" title="Are you lost?">&larr; Back to Website</a></p>
</body>
</html>