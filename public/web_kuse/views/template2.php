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
	<link rel="stylesheet" href="<?=base_url();?>css/style2.css">
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
				<div class="col-sm-6" style="font-size:12px;">คณะวิทยาศาสตร์และวิศวกรรมศาสตร์ มหาวิทยาลัยเกษตรศาสตร์ </div>
				<div class="col-sm-6">
					<span class="pull-right social">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-rss fa-stack-1x fa-inverse"></i>
						</span>
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span>
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span>
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
						</span>
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
							<img src="<?=base_url()?>images/fselogo2.png" style="height:100px; width: auto;">
						</div>
						<div class="col-sm-10" style="color:#327CCB;padding-top:15px;">
							<div style="font-size:2.2em;">ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์</div>
							<div style="font-size:1.2em;">มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 text-right" style="line-height: 100px;">
					<i class="fa fa-phone"></i> (+66) 42-725033 &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fax"></i> (+66) 42-725034
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
	      	<li class="active"><a href="<?=base_url()?>page_ee/">หน้าแรก</a></li>
					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">เกี่ยวกับสาขา <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?=base_url()?>page/content/25">บุคลากรสาขา</a></li>
							<li><a href="<?=base_url()?>page/content/24">หลักสูตร</a></li>
							<li><a href="<?=base_url()?>page/content/23">แผนการศึกษา</a></li>
	          </ul>
        	</li>

					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ศึกษาต่อ <span class="caret"></span></a>
	          <ul class="dropdown-menu">

							<li style="padding:3px 20px;font-size:1.2em;color:#327CCB;"><b>ระดับปริญญาตรี</b></li>
							<li><a href="<?=base_url()?>page/content/38">หลักสูตรที่เปิดสอน</a></li>
							<li><a href="<?=base_url()?>page/content/39">ช่องทางการรับเข้าศึกษาต่อ</a></li>
							<li><a href="<?=base_url()?>page/content/40">คุณสมบัติของผู้สมัคร</a></li>
							<li><a href="<?=base_url()?>page/content/41">ค่าธรรมเนียมการศึกษา</a></li>
							<li><a href="<?=base_url()?>page/content/42">สมัครเข้าศึกษาต่อ</a></li>
							<li><a href="<?=base_url()?>page/content/43">ทุนการศึกษา</a></li>
							<li><a href="<?=base_url()?>page/content/44">หอพัก</a></li>
							<li><a href="<?=base_url()?>page/content/45">ลิงค์ที่เกี่ยวข้อง</a></li>
							<li role="separator" class="divider"></li>
							<li style="padding:3px 20px;font-size:1.2em;color:#327CCB;"><b>ระดับบัณฑิตศึกษา</b></li>
							<li><a href="<?=base_url()?>page/content/46">หลักสูตรที่เปิดสอน</a></li>
							<li><a href="<?=base_url()?>page/content/47">ช่องทางการรับเข้าศึกษาต่อ</a></li>
							<li><a href="<?=base_url()?>page/content/48">คุณสมบัติของผู้สมัคร</a></li>
							<li><a href="<?=base_url()?>page/content/49">ค่าธรรมเนียมการศึกษา</a></li>
							<li><a href="<?=base_url()?>page/content/50">สมัครเข้าศึกษาต่อ</a></li>
							<li><a href="<?=base_url()?>page/content/51">ทุนการศึกษา</a></li>
							<li><a href="<?=base_url()?>page/content/52">ลิงค์ที่เกี่ยวข้อง</a></li>
							<li role="separator" class="divider"></li>
							<li style="padding:3px 20px;font-size:1.2em;color:#327CCB;"><b>โครงการพิเศษ</b></li>
							<li><a href="<?=base_url()?>page/content/53">ระดับปริญญาโท</a></li>
							<li><a href="<?=base_url()?>page/content/54">ระดับปริญญาตรี</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">ภาพกิจกรรมคณะ</a></li>
							<li><a href="http://office.csc.ku.ac.th/woodland">วนานันทอุทยาน</a></li>
	          </ul>
        	</li>

					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">นิสิต <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li style="padding:3px 20px;font-size:1.2em;color:#327CCB;"><b>ระบบสารสนเทศ</b></li>
							<li><a href="https://misreg.csc.ku.ac.th/student/">ระบบสารสนเทศนิสิต</a></li>
							<li><a href="http://misweb.csc.ku.ac.th/stdmanual">คู่มือนิสิตออนไลน์</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/ku8/">รายงานนิสิตลงทะเบียนเรียน (KU8)</a></li>
							<li><a href="http://office.csc.ku.ac.th/student/index.php?option=com_content&view=article&id=114&Itemid=151">ตารางเรียน</a></li>
							<li><a href="http://office.csc.ku.ac.th/student/index.php?option=com_content&view=article&id=115&Itemid=152">ตารางสอบ</a></li>
							<li><a href="http://office.csc.ku.ac.th/student/index.php?option=com_content&view=article&id=363&amp;Itemid=477">ปฏิทินการศึกษา (Update)</a></li>
							<li><a href="http://misreg.csc.ku.ac.th/fsespt/exam/exam_nisit/search.php">ระบบตรวจสอบเลขที่นั่งสอบ</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/report/greport/cscgradereport_search.php">รายงานสถานะการบันทึกเกรด</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/ku5/report_ku7.php">รายงานสถานะ KU7</a></li>
							<li><a href="http://nisit.kasetsart.org/WebFormList_Student.aspx?campus=4&head=2">ตรวจสอบชั่วโมงกิจกรรม</a></li>
							<li><a href="https://eassess.ku.ac.th/index-2.php">ระบบประเมินการสอน</a></li>
							<li><a href="https://regis.ku.ac.th/AssessKU-V2/">ระบบประเมินความพึงพอใจต่อ มก.</a></li>
							<li><a href="http://dbs.csc.ku.ac.th:8080/eval_graduate/404.html">ระบบประเมินโครงการบัณฑิตยุคใหม่</a></li>
							<li><a href="https://docs.google.com/forms/d/1wRkerB9ZyNtwGcadqvkJoiHNJVVUWhY_yrxc1Wx5lek/viewform?c=0&w=1">ระบบประเมินรายวิชาตามเกณฑ์มาตรฐานการเรียนรู้</a></li>
							<li><a href="http://office.csc.ku.ac.th/student/index.php?option=com_content&view=article&id=116&Itemid=155">ดาวน์โหลดแบบฟอร์ม</a></li>
							<li role="separator" class="divider"></li>
							<li style="padding:3px 20px;font-size:1.2em;color:#327CCB;"><b>หน่วยงานที่เกี่ยวข้อง</b></li>
							<li><a href="http://reg.csc.ku.ac.th/">งานทะเบียนและประมวลผล</a></li>
							<li><a href="http://office.csc.ku.ac.th/dsa/">งานกิจการนิสิต</a></li>
	          </ul>
        	</li>

					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">บุคลากร <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li style="padding:3px 20px;font-size:1.2em;color:#327CCB;"><b>สำหรับหน่วยงาน</b></li>
							<li><a href="https://misreg.csc.ku.ac.th/studentdata/">ระบบฐานข้อมูลนิสิต</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/ku8/">รายงานนิสิตลงทะเบียนเรียน (KU8)</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/autoforms">ระบบกำหนดค่าธรรมเนียมการศึกษา/ค่าหอพัก</a></li>
							<li><a href="http://dbs.csc.ku.ac.th:8080/LockStd/LoginPage.jsp">ระบบกำหนดสิทธิ์การลงทะเบียน</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/course">ระบบบันทึกข้อมูลรายวิชา</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/cscreport/">ระบบรายงานสถิติอื่นๆ</a></li>
							<li><a href="https://misreg.csc.ku.ac.th/reserve_room">ระบบจองห้องออนไลน์</a></li>
							<li><a href="http://dbs.csc.ku.ac.th:8080/graduate/Formlogin.jsp">ระบบยื่นใบขอจบการศึกษา</a></li>
							<li style="padding:3px 20px;font-size:1.2em;color:#327CCB;"><b>การเรียน/การสอน/การสอบ</b></li>
							<li><a href="http://misreg.csc.ku.ac.th/fsespt/exam/exam_teacher/">ระบบตรวจสอบห้องสอบ</a></li>
							<li><a href="http://office.csc.ku.ac.th/student/index.php?option=com_content&view=article&id=114&Itemid=151">ตารางเรียน</a></li>
							<li><a href="http://office.csc.ku.ac.th/student/index.php?option=com_content&view=article&id=115&Itemid=152">ตารางสอบ</a></li>
							<li role="separator" class="divider"></li>
							<li style="padding:3px 20px;font-size:1.2em;color:#327CCB;"><b>สำหรับผู้บริหาร</b></li>
							<li><a href="http://nisitmis.csc.ku.ac.th/emis/executive/">สารสนเทศสำหรับผู้บริหาร</a></li>
							<li role="separator" class="divider"></li>
							<li style="padding:3px 20px;font-size:1.2em;color:#327CCB;"><b>สำหรับอาจารย์</b></li>
							<li><a href="https://misreg.csc.ku.ac.th/ku5">ระบบบันทึกเกรดออนไลน์ (KU5)</a></li>
							<li><a href="http://nisitmis.csc.ku.ac.th/webapp2/GPA/">ระบบแก้ไขระดับคะแนนนิสิต (KU7)</a></li>
							<li><a href="https://eassess.ku.ac.th/">ระบบประเมินการเรียนการสอน</a></li>
							<li><a href="http://cslink.csc.ku.ac.th/index.php?option=com_content&view=article&id=10&Itemid=12">ดาวน์โหลดแบบฟอร์ม</a></li>
							<li><a href="http://nisitmis.csc.ku.ac.th/emis/advisor/">ระบบอาจารย์ที่ปรึกษา</a></li>
	          </ul>
        	</li>
          <li><a href="<?=base_url()?>user/login">ศิษย์เก่า</a></li>
					<li><a href="<?=base_url()?>">ภาพกิจกรรมสาขา</a></li>
          <li><a href="<?=base_url()?>page/contact">ติดต่อ</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div>
	</nav>

	<?=$this->load->view($main)?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h4>ติดต่อเรา</h4>
					<strong>คณะวิทยาศาสตร์และวิศวกรรมศาสตร์</strong><br>
					มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร<br>
					เลขที่ 59/5 หมู่ 1  ถนน วปรอ. 366<br>
					ตำบลเชียงเครือ อำเภอเมือง<br>
					จังหวัดสกลนคร รหัสไปรษณีย์  47000<br>
					โทรศัพท์ 0-4272-5033<br>
					โทรสาร 0-4272-5034<br>
					โทรศัพท์ เคลื่อนที่ 08-1739-1541<br>
					<br>
					<strong>Faculty of Science and Engineering</strong> <br>
					Kasetsart University, Chalermphrakiat Sakon Nakhon Province Campus<br>
					59/5 Moo1 Chiangkrua Muang Sakon Nakhon 47000. THAILAND,<br>
					Telephone:  (+66)-42-725033, <br>
					Facsimile: :  (+66)-42-725034<br>
				<!-- <h4>สารสนเทศนิสิต</h4>
				<ul class="footer">
					<li><a href="https://misreg.csc.ku.ac.th/studentdata/">เข้าสู่ระบบสารสนเทศนิสิต</a></li>
					<li><a href="http://e-learning.csc.ku.ac.th" target="_blank">บทเรียนออนไลน์ (e-learning)</a></li>
					<li><a href="http://misweb.csc.ku.ac.th/stdmanual/">คู่มือนิสิตออนไลน์</a></li>
					<li><a href="https://eassess.ku.ac.th/">ประเมินการสอนผ่านระบบออนไลน์</a></li>
					<li><a href="https://regis.ku.ac.th/AssessKU-V2">ประเมินความพึงพอใจของนิสิตต่อ มก.</a></li>
					<li><a title="เอกสารสำหรับนิสิต" href="http://fse.csc.ku.ac.th/th/?page_id=1518">เอกสารสำหรับนิสิต</a></li>
				</ul> -->
			</div>
			<!-- <div class="col-sm-3">
				<h4>สำหรับคณาจารย์และบุคลากร</h4>
				<ul class="footer">
					<li><a href="http://www.person.ku.ac.th/new_personweb/rules/2/rules-2-1.pdf">จรรยาบรรณบุคลากร มก.</a></li>
					<li><a href="http://www.ku.ac.th/personal/conduct.html">จรรยาบรรณอาจารย์</a></li>
					<li><a href="http://www.coe.or.th/co15law/law_codeofconduct.php">จรรยาบรรณวิชาชีพวิศวกร</a></li>
					<li><a href="http://www.person.ku.ac.th/person_nap/nap_status.php?fact=%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C">ติดตามการขอตำแหน่งวิชาการ</a></li>
					<li><a href="https://misreg.csc.ku.ac.th/executive">ระบบสารสนเทศผู้บริหาร</a></li>
					<li><a href="https://misreg.csc.ku.ac.th/advisor">ระบบสารสนเทศอาจารย์ที่ปรึกษา</a></li>
					<li><a href="http://office.csc.ku.ac.th/personnel/">ระบบสนับสนุนการบริการสารสนเทศ</a></li>
					<li><a href="http://ku-work.ku.ac.th/ku-person/login1.aspx">ระบบรายงานภาระงานอาจารย์</a></li>
					<li><a href="http://fse.csc.ku.ac.th/th/?page_id=1450">เอกสารเผยแพร่ผลการวิจัยในชั้นเรียน</a></li>
					<li><a title="เอกสารสำหรับบุคลากร" href="http://fse.csc.ku.ac.th/th/?page_id=1485">เอกสารสำหรับบุคลากร</a></li>
				</ul>
			</div> -->
			<div class="col-sm-4">
				<h4>ระบบสนับสนุนสำนักงาน</h4>
				<ul class="footer">
					<li><a href="https://fac-meeting.ku.ac.th/main.php?fac=fse&amp;org=1">e-meeting</a></li>
					<li><a href="http://fse.csc.ku.ac.th/~mis">e-travel</a></li>
					<li><a href="http://fse.csc.ku.ac.th/th/?page_id=1348">ประมวลภาพกิจกรรมคณะ</a></li>
					<li><a href="http://fse.csc.ku.ac.th/~fseqa/" target="_blank">ระบบประกันคุณภาพ</a></li>
					<li><a href="http://fse.csc.ku.ac.th/~fserd/" target="_blank">ระบบวิจัยและบริการวิชาการ</a></li>
					<li><a href="https://research.rdi.ku.ac.th">ระบบฐานข้อมูลวิจัย มก.</a></li>
					<li><a href="http://fse.csc.ku.ac.th/th/?page_id=1383">ระบบสนับสนุนเทคโนโลยีสารสนเทศ</a></li>
					<li><a href="https://misreg.csc.ku.ac.th/cscreport/">ระบบรายงานสถิติการศึกษา</a></li>
					<li><a href="http://fse.csc.ku.ac.th/th/?page_id=1342">การจัดการความรู้</a></li>
					<li><a href="http://fse.csc.ku.ac.th/th/?page_id=1374">สรุปการประชุมคณะกรรมการประจำคณะ</a></li>
				</ul>
			</div>
			<div class="col-sm-4">
				<h4>ข้อมูลทั่วไป</h4>
				<ul class="footer">
					<li><a title="โลโก้คณะวว" href="http://fse.csc.ku.ac.th/th/?page_id=1464">ตราสัญลักษณ์คณะ</a></li>
					<li><a title="วีดีโอแนะนำคณะ" href="http://fse.csc.ku.ac.th/th/?page_id=1468">สื่อแนะนำคณะ</a></li>
					<li><a href="http://fse.csc.ku.ac.th/th/wp-content/uploads/2014/07/ฉบับแก้ไขตามมติที่ประชุมแผนยุทธศาสตร์_18-กุมภาพันธ์_2557-1.pdf">แผนยุทธศาสตร์</a></li>
					<li><a href="http://fse.csc.ku.ac.th/th/wp-content/uploads/2014/07/รายงานเสนอสภามหาวิทยาลัยเกษตรศาสตร์-6.pdf">นโยบายพัฒนาคณะวว.(2558-2562)</a></li>
					<li><a href="http://fse.csc.ku.ac.th/th/wp-content/uploads/2014/07/แผนพัฒนาคณะววฉบับกองแผนส่งให้.pdf">แผนพัฒนาตามนโยบายการพัฒนาคณะวว.</a></li>
					<li><a style="line-height: 1.5;" href="http://fse.csc.ku.ac.th/th/wp-content/uploads/2014/07/action-plan_57_ฉบับ-update-ณ-18-ธค-56.xlsx">แผนปฏิบัติราชการ ปีงบประมาณ 2557</a></li>
					<li><a href="http://fse.csc.ku.ac.th/th/wp-content/uploads/2014/07/6_Action-plan-2558-ฉบับสมบูรณ์-11-11-57-1.xlsx">แผนปฏิบัติราชการ ปีงบประมาณ 2558</a></li>
					<li><a title="ข้อมูลพื้นฐาน คณะ วว.2557" href="http://fse.csc.ku.ac.th/th/?page_id=1886">ข้อมูลพื้นฐานฐานคณะ วว. 2557</a></li>
				</ul>
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
