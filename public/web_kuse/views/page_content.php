<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? $query = $this->db->get('setting');
foreach($query->result() as $row) { ?>
<title><?=$row->web_title;?> - <?=$title;?></title>
<META NAME="AUTHOR" CONTENT="Thaninrat Thanatharavat">
<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-8">
<META NAME="DESCRIPTION" CONTENT="<?=$row->web_desc;?>">
<META NAME="KEYWORDS" CONTENT="<?=$row->web_keyword;?>">
<? $query->free_result();
}
?>
<link rel="shortcut icon" href="<?=base_url();?>images/favicon.gif" type="image/x-icon" />
<link href="<?=base_url();?>css/style1.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>css/navigator.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="<?=base_url();?>js/pngfix.js"></script>
<![endif]-->
<script type="text/javascript" src="<?=base_url();?>js/jquery.tools.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/custom-form-elements.js"  charset="utf-8"></script>
<? $this->load->view($head); ?>
</head>

<body>
	<div class="wrapper">
    	<div id="header">
        <div id="logo">
        <a href="<?=base_url();?>"><img src="<?=base_url();?>images/logo2.png" width="466" height="67" alt="GINGER Logo" border="0" align="left"/></a>  	
        </div>

        	<div class="top_right_box">
			BASKET<br />
			<?
			echo $this->session->userdata('country').'<br />';
			echo $this->session->userdata('ip_address').'<br />';
			?>
	        <?=anchor('welcome/', 'Home')?> - <a href="<?=base_url();?>index.php/welcome/signin?height=400&width=400&modal=true" class="thickbox" title="Quick Add To Bag">Sign In</a>   - 
			<?=anchor('register', 'Register')?> - 
			<?=anchor('welcome/viewcart', 'View Bag')?><br />
	        <div class="textstyle1"><img src="<?=base_url();?>images/cart.png" width="21" height="14" alt="Cart"><?=$this->cart->total_items();?> items $<?=$this->cart->total();?></div>
	        </div>

		<div class="menubar">
			<? $main_menu = $this->category_model->getAllTopCategory(); ?>
          <ul id="menu">
				<? if(!isset($level1))
				{
					$level1 = '0';
				}
				foreach ($main_menu->result() as $row) { 
					if($row->id == $level1)
					{
						$active = "<b>".$row->name."</b>";
					}
					else
					{
						$active = $row->name;
					}
					?>
				<li class="mega"><h2><a href="<?=base_url();?>index.php/product/category/<?=$row->id;?>"><?=$active;?></a></h2></li>
				<? } ?>
	      </ul>
		</div>
	</div><!-- end header -->
<div id="content">
		<?$this->load->view($main)?>
</div><!-- end content -->
<?$this->load->view('page_footer')?>
