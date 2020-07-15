
@extends('layouts.header-footer')
@extends('layouts.containerMaster')
@extends('layouts.master')
@section('title','KUSE')
@section('topicHeader','คณะวิทยาศาสตร์และวิศวกรรมศาสตร์')
@section('app-breadcrumb')

<div class="app-breadcrumb-item">
    <a href="#">หน้าหลัก</a>
  </div>

@endsection

@section('content')
    {{-- <link href="/web-html/assets/css/faculty/faculty.css" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="{{ URL::asset('/web-html/assets/css/faculty/faculty.css') }}">
    <div id="Faculty">
    <section class="container-fluid faculty-heading" style="
                background-image: url(/web-html/assets/images/faculty/agriculture/คณะวิทยาศาสตร์และวิศวกรรมศาสตร์-จังหวัดสกลนคร.jpg);
            ">
    <div class="header-wrapper">
    <h1>คณะวิทยาศาสตร์และวิศวกรรมศาสตร์</h1>
    <span class="highlight">8</span> <span class="subtitle">สาขาวิชา</span></div>
    </section>

    <section class="container-fluid faculty-features text-white" style="background-image: url(/web-upload/filecenter/admin_mmmmhtml/Science-and-Engineering/Science-and-Engineering.jpg)">
    <div class="container">
    <div class="row">
    <div class="col-12 col-md-8 px-0 px-md-inherit">
    <div class="title mt-5 mt-md-0"><span>เป็นเลิศในการบูรณาการ<span>เทคโนโลยีเพื่อศาสตร์แห่งแผ่นดิน</span></div>
    </div>
    </div>
    </div>
    </section>

    <section class="container-fluid faculty-media pt-5">
    <div class="container">
    <div class="row">
    <div class="col-12 col-md-6 order-1 order-md-0 px-0 px-md-inherit mt-5 mt-md-0">
    <h2>สร้างทักษะ</h2>

    <div class="subtitle d-none d-md-block" >ที่แตกต่างจาก<br>
    หลักสูตรคณะวิทยาศาสตร์และวิศวกรรมศาสตร์ทั่วไป</div>

    {{-- <div class="subtitle d-block d-md-none">ที่แตกต่างจาก..<br>หลักสูตร
    คณะวิทยาศาสตร์และวิศวกรรมศาสตร์ทั่วไป</div> --}}

    <p >คณะวิทยาศาสตร์และวิศวกรรมศาสตร์ <br>เป็นเลิศในการบูรณาการเทคโนโลยีเพื่อศาสตร์แห่งแผ่นดิน</p>

    <div class="subtopic">สาขาวิชา</div>

    <ul >
        <li><a href="http://kuse.csc.ku.ac.th/page_ee/index" target="_blank">สาขาวิชาวิศวกรรมไฟฟ้า</a></li>
        <li><a href="http://kuse.csc.ku.ac.th/page_ee/index" target="_blank">สาขาวิชาวิศวกรรมคอมพิวเตอร์</a></li>
        <li><a href="http://me.csc.ku.ac.th/mme/" target="_blank">สาขาวิชาวิศวกรรมเครื่องกลและการผลิต</a></li>
        <li><a href="http://kuse.csc.ku.ac.th" target="_blank">สาขาวิชาวิศวกรรมสิ่งแวดล้อมเพื่อการพัฒนาอย่างยั่งยืน </a></li>
        <li><a href="https://sites.google.com/ku.th/kucis" target="_blank">สาขาวิชาเทคโนโลยีสารสนเทศ</a></li>
        <li><a href="https://sites.google.com/ku.th/kucis" target="_blank">สาขาวิชาวิทยาการคอมพิวเตอร์</a></li>
        <li><a href="http://kuse.csc.ku.ac.th/~sc/home/" target="_blank">สาขาวิชาเคมีประยุกต์</a></li>
        <li><a href="http://kuse.csc.ku.ac.th" target="_blank">สาขาวิชาการจัดการวิศวกรรมและเทคโนโลยี (ป.โท) </a></li>
    </ul>
    </div>

    <div class="col-12 col-md-5 offset-md-1 order-0 order-md-1 px-0 px-md-inherit">
    <div class="media-wrapper">
    <div class="media media-gallery">
    <div class="media-title">อัลบั้มภาพคณะวิทยาศาสตร์และวิศวกรรมศาสตร์ มก.ฉกส</div>

    <div class="swiper-container media-gallery-swiper swiper-container-initialized swiper-container-horizontal">
    <div class="swiper-wrapper" style=" transition-duration: 0ms;  transform: translate3d(0px, 0px, 0px);">
    <div class="swiper-slide media-gallery-slide swiper-slide-active" style="width: 496px;"><img src="web_kuse/upload/images/img-home/1.jpg"></div>

    <div class="swiper-slide media-gallery-slide swiper-slide-next" style="width: 496px;"><img src="web_kuse/upload/images/img-home/2.jpg"></div>

    <div class="swiper-slide media-gallery-slide" style="width: 496px;"><img src="web_kuse/upload/images/img-home/3.jpg"></div>    

    <div class="swiper-slide media-gallery-slide" style="width: 496px;"><img src="/web_kuse/upload/images/img-home/6.jpg"></div>

    <div class="swiper-slide media-gallery-slide" style="width: 496px;"><img src="web_kuse/upload/images/img-home/7.jpg"></div> 
    </div>
    <!-- Add Arrows -->

    <div aria-disabled="false" aria-label="Next slide" class="swiper-button-next" role="button" tabindex="0">&nbsp;</div>

    <div aria-disabled="true" aria-label="Previous slide" class="swiper-button-prev swiper-button-disabled" role="button" tabindex="0">&nbsp;</div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
</div>
    </div>

    <div class="all-news-text"><a href="#">ดูภาพทั้งหมด </a></div>
    </div>
    </div>
    </div>
    </div>
    </section>

    <section class="faculty-courses" style="
                background-image: url(/web-upload/filecenter/facility/de002.png);
                max-width: 1600px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 0px;
            ">
    <div class="container">
    <div class="row">
    <div class="col-12 col-lg-6">
    <div class="row">
    <div class="col-12 col-md-6">
    <div class="button-wrapper"><a class="course-link button button-green" href="/ac-in-faculty-of-science-and-engineering/"><img src="/web-html/assets/images/faculty/logo1.png"> หลักสูตรภายในคณะ </a></div>

    <div class="button-wrapper"><a class="course-link button button-gray" href="/tuition-fees/"><img src="/web-html/assets/images/faculty/logo3.png"> ค่าเล่าเรียน </a></div>

    <div class="button-wrapper"><a class="course-link button button-yellow" href="#"><img src="/web-html/assets/images/faculty/logo6.png"> ปฏิทินการศึกษา </a></div>
    </div>

    <div class="col-12 col-md-6">
    <div class="button-wrapper"><a class="course-link button button-green-light" href="/recruitment/"><img src="/web-html/assets/images/faculty/logo4.png"> การรับสมัครและคุณสมบัติผู้สมัคร</a></div>

    <div class="button-wrapper"><a class="course-link button button-black" href="/scholarships/"><img src="/web-html/assets/images/faculty/logo5.png"> ทุนการศึกษา </a></div>

    <div class="button-wrapper"><a class="course-link button button-brown" href="#"><img src="/web-upload/filecenter/admin_html1/1.png">ผลงานคณะ</a></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

    <section class="container-fluid faculty-register">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-12 col-md-4">
    <div class="d-flex flex-column">
    <h2>ข้อมูลการติดต่อ</h2>
    <span class="mb-3" >คณะวิทยาศาสตร์และวิศวกรรมศาสตร์
                        <br>มหาวิทยาลัยเกษตรศาสตร์ <br>วิทยาเขตเฉลิมพระเกียรติ 
                        จังหวัดสกลนคร
                        <br>เลขที่ 59/5 หมู่ 1 ถนน วปรอ. 366
                        ตำบลเชียงเครือ อำเภอเมือง
                        จังหวัดสกลนคร รหัสไปรษณีย์ 47000
                        </span> 
    <span><strong>โทร. 0-4272-5033 </strong></span>
    <span><strong>โทรสาร 0-4272-5034</strong></span>
    <span><strong>โทรศัพท์เคลื่อนที่ 08-1739-1541</strong></span>
                        
                        
</div>
    </div>

    <div class="col12 col-md-5 offset-0 offset-md-1 offset-xl-3"><a class="button button-green" href="#">สนใจสมัครเข้าเรียน <strong class="underline-white ml-2">คลิกที่นี่</strong></a></div>
    </div>
    </div>
    </section>
    </div>

@endsection


