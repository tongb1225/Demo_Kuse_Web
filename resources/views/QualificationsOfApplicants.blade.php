@extends('layouts.header-footer')
@extends('layouts.containerMaster')
@extends('layouts.master')
@section('title','คุณสมบัติของผู้สมัคร')
@section('topicHeader','คุณสมบัติของผู้สมัคร')
@section('app-breadcrumb')

<div class="app-breadcrumb-item">
    <a href="#">หน้าหลัก</a>
  </div>
  <div class="app-breadcrumb-item">
    <a href="#">การเข้าศึกษา</a>
  </div>
  <div class="app-breadcrumb-item">
    <a href="#">คุณสมบัติของผู้สมัคร</a>
  </div>
@endsection

@section('content')
<div class="container">
	<div class="row">
			  <div class="col-sm-12" id="content">
                    <br>
                    <br>
                    <h2 align="center">คุณสมบัติของผู้สมัคร</h2>
                    <hr>
                    <ol style="font-size: 1.5em;">
                        <li>สำเร็จการศึกษาหรือกำลังศึกษาอยู่ในชั้นปีสุดท้ายในระดับชั้นมัธยมศึกษาตอนปลาย (ม.6) หรือระดับประกาศนียบัตรวิชาชีพ (ปวช.) หรือเทียบเท่า</li>
                        <li>มีผลการเรียนเฉลี่ยตามข้อ 1 ตามข้อกำหนดของหลักสูตร/สาขาวิชาที่รับสมัคร</li>
                        <li>ข้อกำหนดเพิ่มเติมเฉพาะสาขาวิชา (ถ้ามี)</li>
                        <li>เป็นไปตามคุณสมบัติว่าด้วยการศึกษาขั้นปริญญาตรี มหาวิทยาลัยเกษตรศาสตร์</li>
                    </ol>
                    <hr>
                    <p style="font-size: 1.5em" align="center">
                      (หมายเหตุ : คุณสมบัติของผู้สมัครอาจเปลี่ยนแปลงตามปีการศึกษาที่รับสมัคร รายละเอียดเพิ่มเติม)<br>
                      <a class="badge badge-danger" target="_self" href="http://dbs.csc.ku.ac.th" >คลิก</a>
                    </p>
                    
        </div>
     </div>
  </div>

@endsection
