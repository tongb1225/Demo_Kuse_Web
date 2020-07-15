@extends('layouts.header-footer')
@extends('layouts.containerMaster')
@extends('layouts.master')
@section('title','หลักสูตรที่เปิดสอน')
@section('topicHeader','หลักสูตรที่เปิดสอน')
@section('app-breadcrumb')


<div class="app-breadcrumb-item">
    <a href="#">หน้าหลัก</a>
  </div>
  <div class="app-breadcrumb-item">
    <a href="#">การเข้าศึกษา</a>
  </div>
  <div class="app-breadcrumb-item">
    <a href="#">หลักสูตรที่เปิดสอน</a>
  </div>
@endsection

@section('content')
<div class="container">
    <br><br>
    <h3 style="text-align: center;">บัณฑิตศึกษา</h3>
    <hr>
    <p style="font-size: 1.5em">ปัจจุบันคณะวิทยาศาสตร์และวิศวกรรมศาสตร์ เปิดทำการเรียนการสอนในระดับบัณฑิตศึกษา จำนวน 2 หลักสูตร คือ</p>

                  <ul style="font-size: 1.5em">
                        <li><a href="http://www.grad.ku.ac.th/curriculum/หลักสูตร-มคอ-ปริญญา-โท/">หลักสูตรวิศวกรรมศาสตรมหาบัณฑิต สาขาวิชาวิศวกรรมโยธา / วศ.ม.(วิศวกรรมโยธา)</a></li>
                        <li>หลักสูตรวิศวกรรมศาสตรมหาบัณฑิต สาขาวิชาการจัดการวิศวกรรมและเทคโนโลยี&nbsp;<span style="line-height: 1.6;">วศ.ม.(การจัดการวิศวกรรมและเทคโนโลยี)</span></li>
                    </ul>


                    <p style="font-size: 1.5em">โดยทั้ง 2 หลักสูตร มีรูปแบบหลักสูตรแบบ ก.2 (หลักสูตร 2 ปี) เรียนรายวิชาบังคับและรายวิชาเฉพาะเลือกของหลักสูตร รวมทั้งทำวิทยานิพนธ์ไม่น้อยกว่า 12 หน่วยกิต</p>


                    <p style="font-size: 1.5em">หลักสูตรวิศวกรรมศาสตรมหาบัณฑิต สาขาวิชาวิศวกรรมโยธา&nbsp;<br>
                        <span style="line-height: 1.6;">จัดการเรียนการสอนในวันเวลาราชการปกติ ตั้งแต่ 08.00 – 16.30 น. และหรือเสาร์ – อาทิตย์&nbsp;</span><br>
                        <span style="line-height: 1.6;">ปีละ 2 ภาคการศึกษา (ภาคต้น และ ภาคปลาย) &nbsp; รวม 4 ภาคการศึกษา</span></p>


                    <p style="font-size: 1.5em">หลักสูตรวิศวกรรมศาสตรมหาบัณฑิต สาขาวิชาการจัดการวิศวกรรมและเทคโนโลยี&nbsp;<br>
                        <span style="line-height: 1.6;">จัดการเรียนการสอนในรูปแบบโครงการพิเศษ โดยเรียนเฉพาะวันเสาร์และอาทิตย์ ตั้งแต่เวลา 09.00 – 16.00 น.&nbsp;</span><br>
                        <span style="line-height: 1.6;">ปีละ 2 ภาคการศึกษา (ภาคต้น และ ภาคปลาย) รวม 4 ภาคการศึกษา &nbsp;</span></p>

                    <p>&nbsp;</p>

                    <table border="0" cellpadding="0" cellspacing="0" class="table">
                        <tbody style="font-size: 1.5em">
                            <tr>
                                <td><span style="line-height: 20.8px;">วันเสาร์</span></td>
                                <td><span style="line-height: 20.8px;">คาบที่ &nbsp;&nbsp; &nbsp;1&nbsp;&nbsp; &nbsp;เวลา</span></td>
                                <td><span style="line-height: 20.8px;">09.00 – 12.00 น.</span></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><span style="line-height: 20.8px;">คาบที่ &nbsp;&nbsp; &nbsp;2&nbsp;&nbsp; &nbsp;เวลา&nbsp;</span></td>
                                <td><span style="line-height: 20.8px;">13.00 – 16.00 น.</span></td>
                            </tr>
                            <tr>
                                <td><span style="line-height: 20.8px;">วันอาทิตย์&nbsp;</span></td>
                                <td><span style="line-height: 20.8px;">คาบที่ &nbsp;&nbsp; &nbsp;1&nbsp;&nbsp; &nbsp;เวลา</span></td>
                                <td><span style="line-height: 20.8px;">09.00 – 12.00 น.</span></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><span style="line-height: 20.8px;">คาบที่ &nbsp;&nbsp; &nbsp;2&nbsp;&nbsp; &nbsp;เวลา&nbsp;</span></td>
                                <td><span style="line-height: 20.8px;">13.00 – 16.00 น.</span></td>
                            </tr>
                        </tbody>
                    </table>

</div>
</div>
@endsection
