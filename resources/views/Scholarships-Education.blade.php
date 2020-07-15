@extends('layouts.header-footer')
@extends('layouts.containerMaster')
@extends('layouts.master')
@section('title','ทุนการศึกษา')
@section('topicHeader','ทุนการศึกษา')
@section('app-breadcrumb')


<div class="app-breadcrumb-item">
    <a href="#">หน้าหลัก</a>
  </div>
  <div class="app-breadcrumb-item">
    <a href="#">การเข้าศึกษา</a>
  </div>
  <div class="app-breadcrumb-item">
    <a href="#">ทุนการศึกษา</a>
  </div>
@endsection

@section('content')
<div class="container">
	<div class="row">
			  <div class="col-sm-12" id="content" >
                    <br>
                    <br>
                    <h2 align="center">ทุนการศึกษา</h2>
                    <hr>
                    <p style="font-size: 1.5em">นิสิตที่ศึกษาในมหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร อาจได้รับการจัดสรรทุนต่าง ๆ เพื่อแบ่งเบาภาระค่าใช้จ่ายของผู้ปกครอง ดังต่อไปนี้</p>

                    <ol style="font-size: 1.5em">
                        <li>ทุนเพชรพระพิรุณ : เป็นทุนยกเว้นค่าธรรมเนียมการศึกษาทั้งหมด (15,000 บาท/ภาคการศึกษา) จำนวน 8 ภาคการศึกษาหรือ 4 ปีการศึกษา ตามเงื่อนไขของการได้รับทุนเพชรพระพิรุณ <br>โดยผู้ที่ได้รับทุนจะต้องได้ผลการเรียนเฉลี่ยสะสมไม่น้อยกว่า 2.75 ต่อภาคการศึกษา
                            จึงจะได้รับทุนเพชรพระพิรุณต่อเนื่อง</li>
                        <li>กองทุนกู้ยืมทางการศึกษา (กยศ.) และกองทุนกู้ยืมที่ผูกติดกับรายได้ในอนาคต (กรอ.)</li>
                        <li>ทุนสมาคมศิษย์เก่ามหาวิทยาลัเกษตรศาสตร์</li>
                        <li>ทุนยกเว้นค่าธรรมเนียมการศึกษาในกรณีได้เกรด A จำนวน 5 รายวิชาขึ้นไป ที่มีหน่วยกิตรวมไม่น้อยกว่า 15 หน่วยกิต&nbsp;</li>
                        <li>ทุนจากหน่วยงานภาครัฐและเอกชนต่าง ๆ ตามวัตถุประสงค์ของผู้ให้ทุน</li>
                    </ol>
            </div>
     </div>
  </div>

@endsection
