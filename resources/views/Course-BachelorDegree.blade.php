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
    <div class="col-sm-12" id="content">
        <br><br>
    <h2 style="text-align: center;">ปริญญาตรี</h2>
    <hr>
    <h3 style="text-align: center;">ภาคปกติ</h3>
    <table class="table table-bordered table-sm" >
        <thead align="center"  style="background-color:#853c42;color:white;">
            <tr >
                <td rowspan="2"  style="vertical-align: middle;">ชื่อหลักสูตร</td>
                <td colspan="4" >หลักสูตร(ปี)</td>
                {{-- <th colspan="2" scope="colgroup">หลักสูตรนานาชาติ</th> --}}
            </tr>
            <tr align="center">
                <td >2554</td>
                <td >2555</td>
                <td >2556</td>
                <td >2560</td>
            </tr>
        </thead>
        <tbody align="center">
           
           
            
                <th scope="row">หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมไฟฟ้า / วศ.บ.(วิศวกรรมไฟฟ้า)</th>
                <td>&nbsp;</td>
                <td align="center">
                    <a href="web_kuse/upload/files/หลักสูตรวิศวกรรมศาสตรบัณฑิต  สาขาวิชาวิศวกรรมไฟฟ้า  ปรับปรุง 2555.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"> </a>
                </td>
                <td>&nbsp;</td>
                <td align="center"><a href="web_kuse/upload/files/หลักสูตรวิศวกรรมไฟฟ้า 2560-นิสิต.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"> </a></td>
            </tr>
            <tr>
                <th scope="row">หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ / วศ.บ.(วิศวกรรมคอมพิวเตอร์)</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td align="center"><a href="web_kuse/upload/files/หลักสูตรวิศวกรรมศาสตรบัณฑิต  สาขาวิชาวิศวกรรมคอมพิวเตอร์  ปรับปรุง 2556.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"> </a></td>
                <td align="center"><a href="web_kuse/upload/files/หลักสูตรวิศวกรรมศาสตรบัณฑิต  สาขาวิชาวิศวกรรมคอมพิวเตอร์  ปรับปรุง 2560.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"> </a></td>
            </tr>
            <tr>
                <th scope="row">หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมโยธา / วศ.บ.(วิศวกรรมโยธา)</th>
                <td>&nbsp;</td>
                <td align="center">
                    <a href="web_kuse/upload/files/หลักสูตรวิสวกรรมศาสตรบัณฑิต  สาขาวิชาวิศวกรรมโยธา  ปรับปรุง 2555.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"></a>
                </td>
                <td>&nbsp;</td>
                <td align="center">
                    <a href="web_kuse/upload/files/หลักสูตรวิสวกรรมศาสตรบัณฑิต  สาขาวิชาวิศวกรรมโยธา ปรับปรุง 2560.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"></a>
                </td>
            </tr>
            <tr>
                <th scope="row">หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมเครื่องกลและการผลิต / วศ.บ.(เครื่องกลและการผลิต)</th>
                <td>&nbsp;</td>
                <td align="center">
                    <a href="web_kuse/upload/files/หลักสูตรวิศวกรรศาสตรบัณพิต  สาขาวิชาวิศวกรรมเครื่องกลและการผลิต  ปรับปรุง 2555.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"></a>
                </td>
                <td>&nbsp;</td>
                <td align="center">
                    <a href="web_kuse/upload/files/หลักสูตรวิศวกรรศาสตรบัณพิต  สาขาวิชาวิศวกรรมเครื่องกลและการผลิต ปรับปรุง 2560.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"></a>
                </td>
            </tr>
            <tr>
                <th scope="row">หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมอุตสาหการ / วศ.บ.(วิศวกรรมอุตสาหการ)</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td align="center">
                    <a href="web_kuse/upload/files/หลักสูตรวิศวกรรมศาสตรบัณฑิต  สาขาวิชาวิศวกรรมอุตสาหการ  ปรับปรุง 2556.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"> </a>
                </td>
                <td align="center">
                    <a href="web_kuse/upload/files/หลักสูตรวิศวกรรมศาสตรบัณฑิต  สาขาวิชาวิศวกรรมอุตสาหการ  ปรับปรุง 2560.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"> </a>
                </td>
            </tr>
            <tr>
                <th scope="row">หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ / วท.บ.(วิทยาการคอมพิวเตอร์)</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td align="center">
                    <a href="web_kuse/upload/files/CS60_reEnsemble.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"> </a>
                </td>
            </tr>
            <tr>
                <th scope="row">หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ / วท.บ.(เทคโนโลยีสารสนเทศ)</th>
                <td align="center">
                    <a href="web_kuse/upload/files/IT54_miniBook.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"> </a>
                </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td align="center">
                    <a href="web_kuse/upload/files/IT59_miniBook.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"> </a>
                </td>
            </tr>
            <tr>
                <th scope="row">หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาเคมีประยุกต์ / วท.บ.(เคมีประยุกต์)</th>
                <td>&nbsp;</td>
                <td align="center"> 
                    <a href="web_kuse/upload/files/หลักสูตรวิทยาศาสตรบัณฑิต  สาขาวิชาเคมีประยุกต์ ปรับปรุง 2555.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"></a>
                </td>
                <td>&nbsp;</td>
                <td align="center"> 
                    <a href="web_kuse/upload/files/หลักสูตรวิทยาศาสตรบัณฑิต  สาขาวิชาเคมีประยุกต์ ปรับปรุง 2560.pdf"><img src="web-html/assets/images/download/icon/icon_pdf.png" style="width:20px;"></a>
                </td>
            </tr>
        </tbody>
    </table>
    <hr>
    <h3 align="center">โครงการปริญญาตรีภาคพิเศษ</h3>
    <table class="table table-bordered  table-md">
        <thead style="background-color:#853c42;color:white;">
            <tr align="center">
                <td  colspan="2" >ชื่อหลักสูตร</td>
        </thead>
        <tbody align="center">
            <tr>
                <td ><a  href="http://spe.csc.ku.ac.th/" >หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมไฟฟ้า / วศ.บ.(วิศวกรรมไฟฟ้า)</a></td>
            </tr>
            <tr>
                <td ><a  href="http://spe.csc.ku.ac.th/" >หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมโยธา / วศ.บ.(วิศวกรรมโยธา)</a></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection
