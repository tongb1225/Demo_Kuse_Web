<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <? $setting = $this->category_model->get_setting();
	if(!isset($image)) { $image = ''; }
	if(!isset($desc)) { $desc = ''; }
	if(!isset($keyword)) { $keyword = ''; }
	$this->session->set_userdata('path', current_url());
	?>

	<title><?=$setting->web_title;?> - <?=$title?></title>
	<META NAME="AUTHOR" CONTENT="<?=$setting->web_title;?>">
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-8">
	<META NAME="DESCRIPTION" CONTENT="<? if(strlen($desc) > 0) { echo strip_tags($desc); } else { echo $setting->web_desc; } ?>">
	<META NAME="KEYWORDS" CONTENT="<? if(strlen($keyword) > 0) { echo strip_tags($keyword); } else { echo $setting->web_keyword; } ?>">

	<link rel="icon" href="<?=base_url();?>images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?=base_url();?>images/favicon.ico" type="image/x-icon" />

	<link rel="stylesheet" href="<?=base_url();?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url();?>css/style.css">
	<link rel="stylesheet" href="<?=base_url();?>css/ekko-lightbox.min.css">
	<link rel="stylesheet" href="<?=base_url();?>css/animate.css">

	<script src="<?=base_url();?>js/jquery-1.10.2.js"></script>
	<script src="<?=base_url();?>js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>js/ekko-lightbox.min.js"></script>
	<script src="<?=base_url();?>js/script.js"></script>







</head>
<body>
	<header class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-sm-6" style="font-size:12px;">����Է����ʵ��������ǡ�����ʵ�� ����Է������ɵ���ʵ�� </div>
				<div class="col-sm-6">
					<span class="pull-right social">
						<!-- <span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-rss fa-stack-1x fa-inverse"></i>
						</span> -->
						<a href="https://www.facebook.com/fscieng/" target="_blank"><span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
						<!-- <span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span>
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
						</span> -->
					</span>
				</div>
			</div>
		</div>
	</header>
	<section class="logo">
		<div class="container" style="padding-top: 10px;">
			<div class="row">
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-2">
							<img src="<?=base_url()?>images/fselogo.png" style="height:100px; width: auto;">
						</div>
							<div class="col-sm-10" style="color:#8E180C;padding-top:15px;">
							<div style="font-size:2.2em;">����Է����ʵ��������ǡ�����ʵ��</div>
							<div style="font-size:1.2em;">����Է������ɵ���ʵ�� �Է��ࢵ����������õ� �ѧ��ѴʡŹ��</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4" style="line-height: 100px;">
.					<div class="col-sm-2">
							<span class="float-right"><img src="<?=base_url()?>images/kuse03.png" style="height:70px; width: auto;"></span>
						</div>
					 <!-- <i class="fa fa-phone"></i> (+66) 42-725033 &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fax"></i> (+66) 42-725034 -->
					
				</div>
			</div>
		</div>
	</section>
	<nav class="navbar navbar-default" id="navbar-main">
	  <div class="container">
	  	<!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav nav-justified">
	      	<li class="active"><a href="<?=base_url()?>">˹���á</a></li>
	          <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">����ǡѺ��� <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?=base_url()?>page/content/23">�ç���ҧ��ú�����</a></li>
	            <li><a href="<?=base_url()?>page/content/24">����ѵԤ����</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="<?=base_url()?>page/content/25">�ؤ�ҡ��Ҥ�Ԫ����ǡ���俿����Ф���������</a></li>
							<li><a href="<?=base_url()?>page/content/26">�ؤ�ҡ��Ҥ�Ԫ����ǡ�������ͧ����С�ü�Ե</a></li>
							<li><a href="<?=base_url()?>page/content/27">�ؤ�ҡ��Ҥ�Ԫ����ǡ����¸��������Ǵ����</a></li>
							<li><a href="<?=base_url()?>page/content/33">�ؤ�ҡ��Ҥ�Ԫ��Է�ҡ�ä���������������ʹ��</a></li>
							<li><a href="<?=base_url()?>page/content/35">�ؤ�ҡ��Ҥ�Ԫ��Է����ʵ������</a></li>
							<li><a href="<?=base_url()?>page/content/36">�ؤ�ҡ��ӹѡ�ҹ�Ţҹء�ä��</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="<?=base_url()?>page/content/37">�ط���ʵ��</a></li>
	          </ul>
        	</li>

					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">�������֡�� <span class="caret"></span></a>
	         <ul class="dropdown-menu multi-column columns-3">
			<div class="row">
			            <div class="col-sm-4">
				            <ul class="multi-column-dropdown">
							<li style="padding:3px 20px;font-size:1.2em;color:#8E180C;"><b>�дѺ��ԭ�ҵ��</b></li>
							<li><a href="<?=base_url()?>page/content/38">��ѡ�ٵ÷���Դ�͹</a></li>
							<li><a href="<?=base_url()?>page/content/39">��ͧ�ҧ����Ѻ����֡�ҵ��</a></li>
							<li><a href="<?=base_url()?>page/content/40">�س���ѵԢͧ�����Ѥ�</a></li>
							<li><a href="<?=base_url()?>page/content/41">��Ҹ�����������֡��</a></li>
							<li><a href="<?=base_url()?>page/content/42">��Ѥ�����֡�ҵ��</a></li>
							<li><a href="<?=base_url()?>page/content/43">�ع����֡��</a></li>
							<li><a href="<?=base_url()?>page/content/44">�;ѡ</a></li>
							<li><a href="<?=base_url()?>page/content/45">�ԧ��������Ǣ�ͧ</a></li>
							
            				</ul>
			            </div>
			             <div class="col-sm-4">
				          <ul class="multi-column-dropdown">
							<li style="padding:3px 20px;font-size:1.2em;color:#8E180C;"><b>�дѺ�ѳ�Ե�֡��</b></li>
							<li><a href="<?=base_url()?>page/content/46">��ѡ�ٵ÷���Դ�͹</a></li>
							<li><a href="<?=base_url()?>page/content/47">��ͧ�ҧ����Ѻ����֡�ҵ��</a></li>
							<li><a href="<?=base_url()?>page/content/48">�س���ѵԢͧ�����Ѥ�</a></li>
							<li><a href="<?=base_url()?>page/content/49">��Ҹ�����������֡��</a></li>
							<li><a href="<?=base_url()?>page/content/50">��Ѥ�����֡�ҵ��</a></li>
							<li><a href="<?=base_url()?>page/content/51">�ع����֡��</a></li>
							<li><a href="<?=base_url()?>page/content/52">�ԧ��������Ǣ�ͧ</a></li>
							
				</ul>
			            </div>
				<div class="col-sm-4">
				          <ul class="multi-column-dropdown">
							<li style="padding:3px 20px;font-size:1.2em;color:#8E180C;"><b>�ç��þ����</b></li>
							<li><a href="<?=base_url()?>page/content/53">�дѺ��ԭ���</a></li>
							<li><a href="<?=base_url()?>page/content/54">�дѺ��ԭ�ҵ��</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">�Ҿ�Ԩ�������</a></li>
							<li><a href="http://office.csc.ku.ac.th/woodland">ǹҹѹ��ط�ҹ</a></li>
				</ul>
			            </div>
			</div>
	          </ul>
        	</li>

					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">����Ѻ���Ե <span class="caret"></span></a>
	          	         <ul class="dropdown-menu multi-column columns-3">
			<div class="row">
			            <div class="col-sm-4">
				            <ul class="multi-column-dropdown">
	           						 <li style="padding:3px 20px;font-size:1em;color:#8E180C;"><b>�к����ʹ��</b></li>
							<li><a href="https://goo.gl/forms/gjckVODUPHvMSNJR2">Ẻ�������Ѥ��ç����ˡԨ�֡��</a></li>
							<li><a href="/page/content/65">�Ǣ���ͺ����ԪҾ�鹰ҹ���ǡ��� (����ͺ ��.)</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/student/">�к����ʹ�ȹ��Ե</a></li>
							<li><a href="http://kuse.csc.ku.ac.th/~alumni/">�к��ѳ�Ե�����������</a></li>
							<li><a href="http://misweb.csc.ku.ac.th/stdmanual">�����͹��Ե�͹�Ź�</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/ku8/">��§ҹ���Եŧ����¹���¹ (KU8)</a></li>
							<li><a href="http://office.csc.ku.ac.th/student/index.php?option=com_content&view=article&id=114&Itemid=151">���ҧ���¹</a></li>
							<li><a href="http://office.csc.ku.ac.th/student/index.php?option=com_content&view=article&id=115&Itemid=152">���ҧ�ͺ</a></li>
							<li><a href="http://office.csc.ku.ac.th/student/index.php?option=com_content&view=article&id=363&amp;Itemid=477">��ԷԹ����֡�� (Update)</a></li>
							<li><a href="http://misreg.csc.ku.ac.th/fsespt/exam/exam_nisit/search.php">�к���Ǩ�ͺ�Ţ������ͺ</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/report/greport/cscgradereport_search.php">��§ҹʶҹС�úѹ�֡�ô</a></li>
							
				</ul>
			            </div>
				<div class="col-sm-4">
				            <ul class="multi-column-dropdown">
							
							<li style="padding:3px 20px;font-size:1em;color:#8E180C;"><b>�к����ʹ��(���)</b></li>
							<li><a href="http://kuse.csc.ku.ac.th/midterm">�к���С�Ȥ�ṹ�ͺ��ҧ�Ҥ</a></li>
							<li><a href="http://kuse.csc.ku.ac.th/midterm/New/">�к�����ͧ���Ե�����</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/ku5/report_ku7.php">��§ҹʶҹ� KU7</a></li>
							<li><a href="http://nisit.kasetsart.org/WebFormList_Student.aspx?campus=4&head=2">��Ǩ�ͺ��������Ԩ����</a></li>
							<li><a href="https://eassess.ku.ac.th/index-2.php">�к������Թ����͹</a></li>
							<li><a href="https://regis.ku.ac.th/AssessKU-V2/">�к������Թ�����֧��㨵�� ��.</a></li>
							<li><a href="http://dbs.csc.ku.ac.th:8080/eval_graduate/404.html">�к������Թ�ç��úѳ�Ե�ؤ����</a></li>
							<li><a href="https://docs.google.com/forms/d/1wRkerB9ZyNtwGcadqvkJoiHNJVVUWhY_yrxc1Wx5lek/viewform?c=0&w=1">�к������Թ����Ԫҵ��ࡳ���ҵðҹ������¹���</a></li>
							<li><a href="http://office.csc.ku.ac.th/student/index.php?option=com_content&view=article&id=116&Itemid=155">��ǹ���ŴẺ�����(�͡����Է��ࢵ)</a></li>
							<!-- <li><a href="http://kuse.csc.ku.ac.th/~fse/files/re5.pdf">��ǹ���ŴẺ�������º�͹(��� ��.)</a></li>-->
				</ul>
			            </div>
			             <div class="col-sm-4">
				          <ul class="multi-column-dropdown">
							<li style="padding:3px 20px;font-size:1em;color:#8E180C;"><b>˹��§ҹ�������Ǣ�ͧ</b></li>
							<li><a href="http://reg.csc.ku.ac.th/">�ҹ����¹��л����ż�</a></li>
							<li><a href="http://office.csc.ku.ac.th/dsa/">�ҹ�Ԩ��ù��Ե</a></li>
				</ul>
			            </div>
			</div>
	          </ul>
        	</li>

					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">����Ѻ�ؤ�ҡ� <span class="caret"></span></a>
	          	         	<ul class="dropdown-menu multi-column columns-3">
			<div class="row">
			            <div class="col-sm-4">
				            <ul class="multi-column-dropdown">
	            						<li style="padding:3px 20px;font-size:1em;color:#8E180C;"><b>����Ѻ˹��§ҹ</b></li>
							<li><a href="https://misreg.csc.ku.ac.th/studentdata/">�к��ҹ�����Ź��Ե</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/ku8/">��§ҹ���Եŧ����¹���¹ (KU8)</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/autoforms">�к���˹���Ҹ�����������֡��/����;ѡ</a></li>
							<li><a href="http://dbs.csc.ku.ac.th:8080/LockStd/LoginPage.jsp">�к���˹��Է�����ŧ����¹</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/course">�к��ѹ�֡����������Ԫ�</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/cscreport/">�к���§ҹʶԵ�����</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/reserve_room">�к��ͧ��ͧ�͹�Ź�</a></li>
							<li><a href="http://dbs.csc.ku.ac.th:8080/graduate/Formlogin.jsp">�к����㺢ͨ�����֡��</a></li>
							<li><a href="http://misreg.csc.ku.ac.th/ku/cscHelpdesk/" target="_blank">�к��駫����Ҹ�óٻ�����Ф���������</a></li>
				</ul>
			            </div>
			             <div class="col-sm-4">
				          <ul class="multi-column-dropdown">
							<li style="padding:3px 20px;font-size:1em;color:#8E180C;"><b>������¹/����͹/����ͺ</b></li>
							<li><a href="http://misreg.csc.ku.ac.th/fsespt/exam/exam_teacher/">�к���Ǩ�ͺ��ͧ�ͺ</a></li>
							<li><a href="http://office.csc.ku.ac.th/student/index.php?option=com_content&view=article&id=114&Itemid=151">���ҧ���¹</a></li>
							<li><a href="http://office.csc.ku.ac.th/student/index.php?option=com_content&view=article&id=115&Itemid=152">���ҧ�ͺ</a></li>
							
							<li style="padding:3px 20px;font-size:1em;color:#8E180C;"><b>����Ѻ��������</b></li>
							<li><a href="http://nisitmis.csc.ku.ac.th/emis/executive/">���ʹ������Ѻ��������</a></li>
				</ul>
			            </div>
			             <div class="col-sm-4">
				          <ul class="multi-column-dropdown">
							<li style="padding:3px 20px;font-size:1em;color:#8E180C;"><b>����Ѻ�Ҩ����</b></li>
							<li><a href="https://misreg.csc.ku.ac.th/ku5">�к��ѹ�֡�ô�͹�Ź� (KU5)</a></li>
							<li><a href="http://nisitmis.csc.ku.ac.th/webapp2/GPA/">�к�����дѺ��ṹ���Ե (KU7)</a></li>
							<li><a href="https://eassess.ku.ac.th/">�к������Թ������¹����͹</a></li>
							<li><a href="http://nisitmis.csc.ku.ac.th/emis/advisor/">�к��Ҩ�������֡��</a></li>
							<!-- <li><a href="http://cslink.csc.ku.ac.th/index.php?option=com_content&view=article&id=10&Itemid=12">��ǹ���ŴẺ�����</a></li> -->
							<li><a href="http://kuse.csc.ku.ac.th/midterm">�к���С�Ȥ�ṹ�ͺ��ҧ�Ҥ</a></li>
				</ul>
			            </div>
			</div>
	          </ul>
        	</li>
					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">�Ҥ�Ԫ� <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="http://me.csc.ku.ac.th/mme/">�Ҥ�Ԫ����ǡ�������ͧ����С�ü�Ե</a></li>
							<li><a href="<?=base_url()?>page_ee/index">�Ҥ�Ԫ����ǡ���俿����Ф���������</a></li>
							<li><a href="<?=base_url()?>page_ce/index">�Ҥ�Ԫ����ǡ����¸��������Ǵ����</a></li>
							<li><a href="http://kuse.csc.ku.ac.th/itcs">�Ҥ�Ԫ��Է�ҡ�ä���������������ʹ��</a></li>
							<li><a href="http://kuse.csc.ku.ac.th/~sc">�Ҥ�Ԫ��Է����ʵ������</a></li>
	          </ul>
        	</li>
					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">���§ҹ <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?=base_url()?>page/content/56">���º���������ҧἹ</a></li>
							<li><a href="<?=base_url()?>page/content/57">�����Ԫҡ����л�Сѹ�س�Ҿ</a></li>
							<li><a href="<?=base_url()?>page/content/58">���¡Ԩ��ù��Ե</a></li>
							<li><a href="<?=base_url()?>page/content/59">�����Ԩ����к�ԡ���Ԫҡ��</a></li>
							<!-- <li><a href="<?=base_url()?>page/content/60">���º�ԡ���Ԫҡ��</a></li> -->
							<li><a href="<?=base_url()?>page/content/61">�����������ͧ��������������ѹ��</a></li>
							<li><a href="<?=base_url()?>page/content/62">�����Ѻ�����СԨ��þ����</a></li>
	          </ul>
        	</li>
          <!-- <li><a href="<?=base_url()?>">�����ž�鹰ҹ���</a></li> -->
          <li><a href="<?=base_url()?>page/contact">�Դ���</a></li>

<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">��ǹ���Ŵ<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            						<li><a href="<?=base_url()?>page/content/63">����Ѻ�ؤ�ҡ�</a></li>
							<li><a href="<?=base_url()?>page/content/65">����Ѻ���Ե</a></li>


	          </ul>
        	</li>
<li><a href="http://kuse.csc.ku.ac.th/~alumni/">��������</a></li>

	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div>
	</nav>

	<?=$this->load->view($main)?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h4>�Դ������</h4>
					<strong>����Է����ʵ��������ǡ�����ʵ��</strong><br>
					����Է������ɵ���ʵ�� �Է��ࢵ����������õ� �ѧ��ѴʡŹ��<br>
					�Ţ��� 59/5 ���� 1  ��� ǻ��. 366<br>
					�Ӻ���§���� ��������ͧ<br>
					�ѧ��ѴʡŹ�� ������ɳ���  47000<br>
					���Ѿ�� 0-4272-5033<br>
					����� 0-4272-5034<br>
					���Ѿ�� ����͹��� 08-1739-1541<br>
					<br>
					<strong>Faculty of Science and Engineering</strong> <br>
					Kasetsart University, Chalermphrakiat Sakon Nakhon Province Campus<br>
					59/5 Moo1 Chiangkrua Muang Sakon Nakhon 47000. THAILAND,<br>
					Telephone:  (+66)-42-725033, <br>
					Facsimile: :  (+66)-42-725034<br>
				<!-- <h4>���ʹ�ȹ��Ե</h4>
				<ul class="footer">
					<li><a href="https://misreg.csc.ku.ac.th/studentdata/">�������к����ʹ�ȹ��Ե</a></li>
					<li><a href="http://e-learning.csc.ku.ac.th" target="_blank">�����¹�͹�Ź� (e-learning)</a></li>
					<li><a href="http://misweb.csc.ku.ac.th/stdmanual/">�����͹��Ե�͹�Ź�</a></li>
					<li><a href="https://eassess.ku.ac.th/">�����Թ����͹��ҹ�к��͹�Ź�</a></li>
					<li><a href="https://regis.ku.ac.th/AssessKU-V2">�����Թ�����֧��㨢ͧ���Ե��� ��.</a></li>
					<li><a title="�͡�������Ѻ���Ե" href="http://kuse.csc.ku.ac.th/th/?page_id=1518">�͡�������Ѻ���Ե</a></li>
				</ul> -->
			</div>
			<!-- <div class="col-sm-3">
				<h4>����Ѻ��Ҩ������кؤ�ҡ�</h4>
				<ul class="footer">
					<li><a href="http://www.person.ku.ac.th/new_personweb/rules/2/rules-2-1.pdf">����Һ�ó�ؤ�ҡ� ��.</a></li>
					<li><a href="http://www.ku.ac.th/personal/conduct.html">����Һ�ó�Ҩ����</a></li>
					<li><a href="http://www.coe.or.th/co15law/law_codeofconduct.php">����Һ�ó�ԪҪվ���ǡ�</a></li>
					<li><a href="http://www.person.ku.ac.th/person_nap/nap_status.php?fact=%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C">�Դ�����â͵��˹��Ԫҡ��</a></li>
					<li><a href="https://misreg.csc.ku.ac.th/executive">�к����ʹ�ȼ�������</a></li>
					<li><a href="https://misreg.csc.ku.ac.th/advisor">�к����ʹ���Ҩ�������֡��</a></li>
					<li><a href="http://office.csc.ku.ac.th/personnel/">�к�ʹѺʹع��ú�ԡ�����ʹ��</a></li>
					<li><a href="http://ku-work.ku.ac.th/ku-person/login1.aspx">�к���§ҹ���Чҹ�Ҩ����</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/th/?page_id=1450">�͡��������š���Ԩ��㹪�����¹</a></li>
					<li><a title="�͡�������Ѻ�ؤ�ҡ�" href="http://kuse.csc.ku.ac.th/th/?page_id=1485">�͡�������Ѻ�ؤ�ҡ�</a></li>
				</ul>
			</div> -->
			<div class="col-sm-4">
				<h4>�к�ʹѺʹع�ӹѡ�ҹ</h4>
				<ul class="footer">
					<li><a href="https://fac-meeting.ku.ac.th/main.php?fac=fse&amp;org=1">e-meeting</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/~mis">e-travel</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/th/?page_id=1348">�������Ҿ�Ԩ�������</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/~fseqa/" target="_blank">�к���Сѹ�س�Ҿ</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/~fserd/" target="_blank">�к��Ԩ����к�ԡ���Ԫҡ��</a></li>
					<li><a href="https://research.rdi.ku.ac.th">�к��ҹ�������Ԩ�� ��.</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/th/?page_id=1383">�к�ʹѺʹع෤��������ʹ��</a></li>
					<li><a href="https://misreg.csc.ku.ac.th/cscreport/">�к���§ҹʶԵԡ���֡��</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/th/?page_id=1342">��èѴ��ä������</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/th/?page_id=1374">��ػ��û�Ъ����С�����û�ШӤ��</a></li>
				</ul>
			</div>
			<div class="col-sm-4">
				<!--<h4>�����ŷ����</h4>
				<ul class="footer">
					<li><a title="���餳���" href="http://kuse.csc.ku.ac.th/th/?page_id=1464">����ѭ�ѡɳ줳�</a></li>
					<li><a title="�մ����йӤ��" href="http://kuse.csc.ku.ac.th/th/?page_id=1468">�����йӤ��</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/th/wp-content/uploads/2014/07/��Ѻ��䢵����Է���Ъ��Ἱ�ط���ʵ��_18-����Ҿѹ��_2557-1.pdf">Ἱ�ط���ʵ��</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/th/wp-content/uploads/2014/07/��§ҹ�ʹ��������Է������ɵ���ʵ��-6.pdf">��º�¾Ѳ�Ҥ����.(2558-2562)</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/th/wp-content/uploads/2014/07/Ἱ�Ѳ�Ҥ���ǩ�Ѻ�ͧἹ�����.pdf">Ἱ�Ѳ�ҵ����º�¡�þѲ�Ҥ����.</a></li>
					<li><a style="line-height: 1.5;" href="http://kuse.csc.ku.ac.th/th/wp-content/uploads/2014/07/action-plan_57_��Ѻ-update-�-18-��-56.xlsx">Ἱ��Ժѵ��Ҫ��� �է�����ҳ 2557</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/th/wp-content/uploads/2014/07/6_Action-plan-2558-��Ѻ����ó�-11-11-57-1.xlsx">Ἱ��Ժѵ��Ҫ��� �է�����ҳ 2558</a></li>
					<li><a title="�����ž�鹰ҹ ��� ��.2557" href="http://kuse.csc.ku.ac.th/th/?page_id=1886">�����ž�鹰ҹ�ҹ��� ��. 2557</a></li>
				</ul>-->
				
				<h4>Ἱ�ط���ʵ��</h4>
				<ul class="footer">
					<li><a href="http://kuse.csc.ku.ac.th/page/content/37">Ἱ�ط���ʵ��</a></li>
					<!--li><a href="http://kuse.csc.ku.ac.th/kcfinder/upload/files/3_final _����觷ء�Ҥ��Чҹ .xlsx">Ἱ���ѵԡ�� ��Шӻէ�����ҳ 2560</a></li-->
				</ul>
				<!--h4>Ἱ�ط���ʵ�����</h4>
				<ul class="footer">
					<li><a href="http://kuse.csc.ku.ac.th/th/wp-content/uploads/2014/07/��Ѻ��䢵����Է���Ъ��Ἱ�ط���ʵ��_18-����Ҿѹ��_2557-1.pdf">Ἱ�ط���ʵ��</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/th/wp-content/uploads/2014/07/��§ҹ�ʹ��������Է������ɵ���ʵ��-6.pdf">��º�¾Ѳ�Ҥ����.(2558-2562)</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/th/wp-content/uploads/2014/07/Ἱ�Ѳ�Ҥ���ǩ�Ѻ�ͧἹ�����.pdf">Ἱ�Ѳ�ҵ����º�¡�þѲ�Ҥ����.</a></li>
					<li><a style="line-height: 1.5;" href="http://kuse.csc.ku.ac.th/th/wp-content/uploads/2014/07/action-plan_57_��Ѻ-update-�-18-��-56.xlsx">Ἱ��Ժѵ��Ҫ��� �է�����ҳ 2557</a></li>
					<li><a href="http://kuse.csc.ku.ac.th/th/wp-content/uploads/2014/07/6_Action-plan-2558-��Ѻ����ó�-11-11-57-1.xlsx">Ἱ��Ժѵ��Ҫ��� �է�����ҳ 2558</a></li>
					<li><a title="�����ž�鹰ҹ ��� ��.2557" href="http://kuse.csc.ku.ac.th/th/?page_id=1886">�����ž�鹰ҹ�ҹ��� ��. 2557</a></li>				</ul-->


			</div>
		</div>
	</div>
</footer>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1035032516555128";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
