<!DOCTYPE html>
<html lang="th">
<head>

<title>Admin System</title>
<META NAME="AUTHOR" CONTENT="Ben Manhire Fashion">
<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-8">
<meta http-equiv="content-language" content="th-th">

<link rel="icon" href="<?=base_url();?>images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?=base_url();?>images/favicon.ico" type="image/x-icon" />

<!-- css -->
<link rel="stylesheet" href="<?=base_url();?>css/bootstrap.min.css" charset="utf-8">
<link rel="stylesheet" href="<?=base_url();?>css/font-awesome.min.css" charset="utf-8">
<link rel="stylesheet" href="<?=base_url();?>css/admin.css" charset="utf-8">

<!-- javascript -->
<script src="<?=base_url();?>js/jquery-1.10.2.js" type="text/javascript" charset="utf-8"></script>
<script src="<?=base_url();?>js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?=base_url();?>js/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
  <div class="container">

    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AT Desgin Admin System</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?=base_url()?>" target="_blank">View home page</a></li>
                <li><a href="<?=base_url()?>admin/site/logout">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="row">
      <div class="col-sm-10">
          <? $this->load->view($main);?>
      </div>

      <div id="sidebar" class="col-sm-2 ">
        <div class="panel panel-default">
          <div class="panel-body">
            <ul>
              <li><h4>Dashboard</h4>
                <ul>
                  <li><?=anchor('admin/site', 'Home', 'class="report"');?></li>
                  <li><?=anchor('admin/basic_setting', 'Setting', 'class="report_seo"');?></li>
                  <li><?=anchor('admin/slide', 'Slide', 'class="search"');?></li>
                  <li><?=anchor('admin/site/content', 'Content', 'class="manage_page"');?></li>

                  <li><?=anchor('admin/article', 'Article', 'class="manage_page"');?></li>
                  <li><?=anchor('admin/article_category', 'Article Category', 'class="manage_page"');?></li>
                </ul>
              </li>
              <li><h4>Users</h4>
                <ul>
                  <li><?=anchor('admin/user', 'Users List', 'class="user"');?></li>
                  <li><?=anchor('admin/customer', 'Alumni', 'class="group"');?></li>
                  <!-- <li><a href="#" class="search">Find user</a></li>
                  <li><a href="#" class="online">Users online</a></li> -->
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12"><div class="well well-sm">Design By <a href="http://www.atdesigncm.com" target="_blank">AT Design</a> - Copyright <?=date("Y")?></div></div>
    </div>
  </div>
</body>
</html>
