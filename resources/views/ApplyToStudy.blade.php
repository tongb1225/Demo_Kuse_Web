@extends('layouts.header-footer')
@extends('layouts.containerMaster')
@extends('layouts.master')
@section('title','KUSE HomePage')
@section('topicHeader','สมัครเข้าศึกษาต่อ')
@section('app-breadcrumb')

<div class="app-breadcrumb-item">
    <a href="#">หน้าหลัก</a>
  </div>
  <div class="app-breadcrumb-item">
    <a href="#">การเข้าศึกษา</a>
  </div>
  <div class="app-breadcrumb-item">
    <a href="#">สมัครเข้าศึกษาต่อ</a>
  </div>
@endsection

@section('content')
<div class="container">
	<div class="row">
			  <div class="col-sm-12" id="content" >
                    <br>
                    <br>
                    <h2 align="center">สมัครเข้าศึกษาต่อ</h2>
                    <hr>
                    <p style="font-size: 1.5em">ผู้ที่สนใจประสงค์ที่จะสมัครเข้าศึกษาต่อในสาขาวิชาต่าง ๆ ของคณะวิทยาศาสตร์และวิศวกรรมศาสตร์ มหาวิทยาลัยเกษตรศาสตร์ 
                        วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร ในโครงการต่าง ๆ สามารถคลิกเลือกสมัครได้ตามลิงค์ต่าง ๆ ดังนี้</p>

                    <ul style="font-size: 1.5em">
                        <li><a href="http://dbs.csc.ku.ac.th">สมัครเข้าศึกษาต่อโครงการขยายโอกาสทางการศึกษา มก.ฉกส.</a></li>
                        <li><a href="http://admission.ku.ac.th">สมัครเข้าศึกษาต่อโครงการ KU. Admission</a></li>
                        <li><a href="http://www.aupt.or.th">สมัครเข้าศึกษาต่อ Admission กลางของสมาคมอธิการบดีแห่งประเทศไทย</a></li>
                        <li><a href="http://dbs.csc.ku.ac.th">สมัครเข้าศึกษาต่อโครงการรับสมัครนิสิตพ้นสภาพ</a></li>
                        <li><a href="http://spe.csc.ku.ac.th">สมัครเข้าศึกษาต่อโครงการปริญญาตรีภาคพิเศษ&nbsp;</a></li>
                    </ul>

                    <p style="font-size: 1.5em"><span style="line-height: 20.8px;">หรือติดต่อประสานมายัง ผศ.พ.อ.อ.เพิ่มพล กุดจอมศรี&nbsp; หมายเลขโทรศัพท์ 08-1399-3024 หรือ&nbsp;</span><span style="line-height: 20.8px;">นางสาวสุมารินทร์ จันปุย หมายเลขโทรศัพท์ หมายเลขโทรศัพท์ 08-4028-0209</span></p>
            </div>
     </div>
  </div>

@endsection
