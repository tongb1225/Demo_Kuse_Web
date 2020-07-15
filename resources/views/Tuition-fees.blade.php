@extends('layouts.header-footer')
@extends('layouts.containerMaster')
@extends('layouts.master')
@section('title','ค่าธรรมเนียมการศึกษา')
@section('topicHeader','ค่าธรรมเนียมการศึกษา')
@section('app-breadcrumb')


<div class="app-breadcrumb-item">
    <a href="#">หน้าหลัก</a>
  </div>
  <div class="app-breadcrumb-item">
    <a href="#">การเข้าศึกษา</a>
  </div>
  <div class="app-breadcrumb-item">
    <a href="#">ค่าธรรมเนียมการศึกษา</a>
  </div>
@endsection

@section('content')
<div class="container">
	<div class="row">
			  <div class="col-sm-12" id="content">
                    <br>
                    <br>
                    <h2 align="center">ค่าธรรมเนียมการศึกษา</h2>
                    <hr>
                    <h3><span style="line-height: 1.6;">ภาคปกติ</span></h3>

                    <p style="font-size:1.5em">ค่าธรรมเนียมแบบเหมาจ่ายเบ็ดเสร็จ</p>

                    <table class="table" style="line-height: 20.8px;font-size:1.5em">
                      <tbody>
                          <tr>
                              <td><span style="line-height: 20.8px;">ภาคต้น</span></td>
                              <td><span style="line-height: 20.8px;">15,000 บาท</span></td>
                          </tr>
                          <tr>
                              <td><span style="line-height: 20.8px;">ภาคปลาย</span></td>
                              <td><span style="line-height: 20.8px;">15,000 บาท</span></td>
                          </tr>
                          <tr>
                              <td><span style="line-height: 20.8px;">ภาคฤดูร้อน (ถ้ามี)</span></td>
                              <td><span style="line-height: 20.8px;">3,500 บาท</span></td>
                          </tr>
                      </tbody>
                  </table>

                  <br>

                  <h3>โครงการปริญญาตรีภาคพิเศษ</h3>

                  <p style="font-size:1.5em">ค่าธรรมเนียมแบบเหมาจ่ายเบ็ดเสร็จ&nbsp;</p>

                  <table class="table" style="line-height: 20.8px;font-size:1.5em">
                      <tbody>
                          <tr>
                              <td><span style="line-height: 20.8px;">ภาคต้น</span></td>
                              <td><span style="line-height: 20.8px;">25,000 บาท</span></td>
                          </tr>
                          <tr>
                              <td><span style="line-height: 20.8px;">ภาคปลาย</span></td>
                              <td><span style="line-height: 20.8px;">25,000 บาท</span></td>
                          </tr>
                          <tr>
                              <td><span style="line-height: 20.8px;">ภาคฤดูร้อน (ถ้ามี)</span></td>
                              <td><span style="line-height: 20.8px;">8,000 บาท</span><br> &nbsp;
                              </td>
                          </tr>
                      </tbody>
                  </table>

                  <p style="font-size:1.5em">*ภาคฤดูร้อน เป็นภาคการศึกษาที่นิสิตเลือกที่จะเรียนหรือไม่ก็ได้&nbsp;</p>
                    
        </div>
     </div>
  </div>

@endsection
