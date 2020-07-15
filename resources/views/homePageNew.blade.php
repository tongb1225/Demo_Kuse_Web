
@extends('layouts.header-footer')
@extends('layouts.containerMaster')
@extends('layouts.master')
@section('title','KUSE')
@section('topicHeader','คณะวิทยาศาสตร์และวิศวกรรมศาสตร์')
@section('app-breadcrumb')
<html lang="th" class="webp webp-alpha webp-animation webp-lossless ku-fz-sm"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>มหาวิทยาลัยเกษตรศาสตร์</title>

    <meta name="keywords" content="KU,Kasetsart University,มหาวิทยาลัยเกษตรศาสตร์">
<meta name="description" content="Kasetsart University is a public research university in Bangkok, Thailand">
<meta property="og:site_name" content="www.ku.ac.th">
<meta property="og:locale" content="th_TH">
<meta property="og:type" content="website">
<meta property="og:title" content="KU | มหาวิทยาลัยเกษตรศาสตร์ รอบรั้วชาวนนทรี">
<meta property="og:url" content="https://www.ku.ac.th/th/community-home">
<meta property="og:image" content="https://www.ku.ac.th/assets/KU_logo.png">
<meta property="og:description" content="Kasetsart University is a public research university in Bangkok, Thailand">
      <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/favicon/site.webmanifest">
    <!-- DeferJS -->
    <script async="" id="mopinionFeedbackScript" src="https://collect.mopinion.com/assets/surveys/2.0/js/survey.min.js?d=30032020"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript">
    /*@shinsenter/defer.js*/
    !function(e,o,t,n,i,r){function c(e,t){r?n(e,t||32):i.push(e,t)}function f(e,t,n,i){return t&&o.getElementById(t)||(i=o.createElement(e||'SCRIPT'),t&&(i.id=t),n&&(i.onload=n),o.head.appendChild(i)),i||{}}r=/p/.test(o.readyState),e.addEventListener('on'+t in e?t:'load',function(){for(r=1;i[0];)c(i.shift(),i.shift())}),c._=f,e.defer=c,e.deferscript=function(e,t,n,i){c(function(){f('',t,i).src=e},n)}}(this,document,'pageshow',setTimeout,[]),function(s,n){var a='IntersectionObserver',d='src',l='lazied',h='data-',m=h+l,y='load',p='forEach',b='getAttribute',g='setAttribute',v=Function(),I=s.defer||v,c=I._||v;function A(e,t){return[].slice.call((t||n).querySelectorAll(e))}function e(u){return function(e,t,o,r,c,f){I(function(n,t){function i(n){!1!==(r||v).call(n,n)&&((f||['srcset',d,'style'])[p](function(e,t){(t=n[b](h+e))&&n[g](e,t)}),A('SOURCE',n)[p](i),y in n&&n[y]()),n.className+=' '+(o||l)}t=a in s?(n=new s[a](function(e){e[p](function(e,t){e.isIntersecting&&(t=e.target)&&(n.unobserve(t),i(t))})},c)).observe.bind(n):i,A(e||u+'['+h+d+']:not(['+m+'])')[p](function(e){e[b](m)||(e[g](m,u),t(e))})},t)}}function t(){I(function(t,n,i,o,r){t=A((i='[type=deferjs]')+':not('+(o='[async]')+')').concat(A(i+o)),function e(){if(0!=t){for(o in(i=t.shift()).parentNode.removeChild(i),i.removeAttribute('type'),n=c(i.nodeName),i)'string'==typeof(r=i[o])&&n[o]!=r&&(n[o]=r);n[d]&&!n.hasAttribute('async')?n.onload=n.onerror=e:I(e,.1)}}()},4)}t(),s.deferstyle=function(t,n,e,i){I(function(e){(e=c('LINK',n,i)).rel='stylesheet',e.href=t},e)},s.deferimg=e('IMG'),s.deferiframe=e('IFRAME'),I.all=t}(this,document);
    </script>
    <!-- Bootstrap CSS and JS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="/assets/vendor/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/web_fonts.css" type="text/css">

    <!-- <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script> -->
    <!-- <script src="/assets/vendor/jquery/jquery-3.4.1.min.js"></script> -->

    <!-- Font Awesome -->
    <script type="text/javascript">
        deferstyle('https://use.fontawesome.com/releases/v5.8.1/css/all.css', 'fontawesome-css', 500);
        deferstyle('https://unpkg.com/swiper@5.3.8/css/swiper.min.css', 500);
    </script>

    <!-- Style for SwiperJS -->
   <!--  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css"> -->

    <!-- Style for preventing header's unfinished styled element to show when page load. -->
    <style type="text/css">#top-main-header { visibility: hidden}</style>

    <!-- Style for home -->
    <link rel="stylesheet" href="/assets/css/app.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/header.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/footer.css" type="text/css">

						<link href="/assets/css/home/home.css" rel="stylesheet">
					<link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">


<style>
    .set-ku-fz{
        color: #cacbcb!important;
    }
    .set-ku-fz.active{
        color: #8e961a!important;
    }
</style>
<!-- Style for preventing header's unfinished styled element to show when page load. -->
<!-- <style type="text/css">#top-main-header { visibility: hidden}</style> -->
<script type="text/javascript">
	//DO NOT REMOVE THIS!!
	const LANG = 'th';
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-2245169-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-2245169-1');
</script>


<body class=" mr-auto ml-auto" style="max-width: 100%" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
  <div>
<!---- header ---->
<header id="top-main-header" class="main-header fixed-top p-0 header white-navbar shrink scroll-up">
    <div class="d-flex justify-content-between h-100">
        <!-- Logo and Name -->
    <div class="logo-n-name position-relative d-flex align-items-center p-3">
      <div class="logo-lightning" style="opacity: 0; left: -70%;"></div>
      <a href="/th/community-home" class="ku-logo">
        <img src="/assets/images/header/KU_logo_62x62_th.svg" alt="KU Logo">
      </a>
      <div class="ku-logo-name">
        <a href="/th/community-home" class="">
          <img src="/assets/images/header/KU_name_logo_62x62.svg" alt="KU Logo">
        </a>
      </div>
    </div>



<!-- Menu -->
<div class="menu-area">
      <!-- Top Part Menu -->
      <div class="d-flex top-part justify-content-end">
        <!-- Account Menu -->

        <nav>
          <ul class="account-menu  no-bullets d-flex">
                      <li>
              <a href="/th/login" class="login-link">
                <span>
                  <i class="fas fa-user-alt mr-1"></i>
                  เข้าสู่ระบบ / สมัครสมาชิก                </span>
              </a>
            </li>
                      </ul>
        </nav>

        <!-- People Group Menu -->
        <nav>
          <ul class="people-group-menu no-bullets d-flex flex-nowrap">
          <li>
              <a class=" text-decoration-none   " href="/th/interested-to-studying"><span>ผู้สนใจเข้าศึกษา</span></a>
            </li>

            <li>
              <a class=" text-decoration-none  " href="/th/collegian"><span>นิสิตปัจจุบัน</span></a>
            </li>
            <li>
              <a class=" text-decoration-none  " href="/th/professor"><span>อาจารย์</span></a>
            </li>
            <li>
              <a class=" text-decoration-none  " href="/th/personnel"><span>บุคลากร</span></a>
            </li>
            <li>
              <a class=" text-decoration-none  " href="/th/guardian"><span>ผู้ปกครอง</span></a>
            </li>
            <li class="">
              <a class=" text-decoration-none  " href="/th/alumni"><span>ศิษย์เก่า</span></a>
            </li>
          </ul>
        </nav>



        <div class="d-flex page-options ml-2">
          <div>
            <ul class="no-bullets d-flex lang-selector">

              <li>
                                <a class="h-100 text-white bg-b2bb1c active" href="/th/community-home">TH</a>
                            </li>
                            <li>
                                <a class="h-100 text-white bg-006b67 " href="/en/community-home">EN</a>
				<!-- <a class="h-100 text-white bg-006b67 " href="https://www2.ku.ac.th/web2012/index.php?c=adms&m=changepage&page=home&lang=eng">EN</a> -->
                            </li>


            </ul>
          </div>
          <div class="text-size-selector">
            <ul class="no-bullets d-flex bg-black">
              <li class="cursor-pointer small-alphabet ml-2 d-flex justify-content-center align-items-end set-ku-fz active" name="ku-fz-sm">
                <span>ก</span>
              </li>
              <li class="cursor-pointer medium-alphabet d-flex justify-content-center align-items-end set-ku-fz" name="ku-fz-md">
                <span>ก</span>
              </li>
              <li class="cursor-pointer large-alphabet mr-2 d-flex justify-content-center align-items-end set-ku-fz" name="ku-fz-lg">
                <span>ก</span>
              </li>



            </ul>
          </div>
        </div>
      </div>



       <!-- Bottom Part Menu -->
       <div class="bottom-part d-flex justify-content-end pb-1">
        <div>
          <button type="button" class="header-sub-menu-btn menu__item mr-3" data-target="admission-heading-sub-menu" aria-expanded="false" aria-controls="admission-heading-sub-menu">
          การเข้าศึกษา            <i class="ml-1 fa fa-chevron-down icon"></i>
          </button>
        <div class="collapse sidenav-sub-menu"><div>
              <ul>
                                                      <li>
                                        <a href="/th/recruitment" target="_self" class=" ">
                                        การรับสมัครและคุณสมบัติผู้สมัคร                                        </a>
                                        </li>



                                                    <li>

                              <a href="#" class=" ">
                              ปฏิทินการศึกษา                              </a>

                              <ul>
                               <li>
   <a href="https://registrar.ku.ac.th/%e0%b8%9a%e0%b8%a3%e0%b8%b4%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%99%e0%b8%b4%e0%b8%aa%e0%b8%b4%e0%b8%95/%e0%b8%9b%e0%b8%8f%e0%b8%b4%e0%b8%97%e0%b8%b4%e0%b8%99%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%a8%e0%b8%b6%e0%b8%81%e0%b8%a9%e0%b8%b2-%e0%b8%a1%e0%b8%81/" target="_blank" class=" ">
                                        ระดับปริญญาตรี                                        </a>

  </li>
 <li>
   <a href="https://www.grad.ku.ac.th/%e0%b8%99%e0%b8%b4%e0%b8%aa%e0%b8%b4%e0%b8%95/%e0%b8%9b%e0%b8%8f%e0%b8%b4%e0%b8%97%e0%b8%b4%e0%b8%99%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%a8%e0%b8%b6%e0%b8%81%e0%b8%a9%e0%b8%b2/" target="_blank" class=" ">
                                        ระดับบัณฑิตศึกษา                                        </a>

  </li>
                              </ul>



                              </li>




                                                    <li>

                              <a href="#" class=" ">
                              ปฏิทินกิจกรรมนิสิตใหม่ ปีการศึกษา 2563                              </a>

                              <ul>
                               <li>
   <a href="https://admission.ku.ac.th/admmedia/announcements/2020/05/29/%E0%B8%9B%E0%B8%8F%E0%B8%97%E0%B8%99%E0%B8%81%E0%B8%88%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1_KU-80_-_new.pdf" target="_blank" class=" ">
                                        ระดับปริญญาตรี                                        </a>

  </li>
                              </ul>



                              </li>





                                        <li>
                                        <a href="/tuition-fees/" target="_self" class=" ">
                                        ค่าธรรมเนียมการศึกษา                                        </a>
                                        </li>



              </ul>
             </div></div></div>
        <div>
          <button type="button" class="header-sub-menu-btn menu__item mr-3" data-target="curriculum-heading-sub-menu" aria-expanded="false" aria-controls="curriculum-heading-sub-menu">
          หลักสูตร            <i class="ml-1 fa fa-chevron-down icon"></i>
          </button>
        <div class="collapse sidenav-sub-menu"><div>
              <ul>
                <li>
                  <a href="#">
                  จำแนก 10 สาขา ตาม ISCED                  </a>

                  <ul>
                                          <li>

                            <a class=" " href="/th/the-education" target="_self">
                                                   การศึกษา</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/art-and-humans" target="_self">
                                                   ศิลปะและมนุษย์</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/society-journal-information" target="_self">
                                                   สังคม, วารสาร, สารสนเทศ</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/business-administration-law" target="_self">
                                                   บริหารธุรกิจ กฎหมาย</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/natural-sciences-mathematics-statistics" target="_self">
                                                   วิทยาศาสตร์ ธรรมชาติ คณิตศาสตร์ สถิติ</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/information-technology-and-communication" target="_self">
                                                   เทคโนโลยีสารสนเทศ และการสื่อสาร</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/construction-industry-engineering" target="_self">
                                                   วิศวกรรม อุตสาหกรรม ก่อสร้าง</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/agriculture-forestry-veterinary-fisheries" target="_self">
                                                   เกษตร วนศาสตร์ ประมง สัตวแพทย์</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/health-and-welfare" target="_self">
                                                   สุขภาพ สวัสดิการ</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/service" target="_self">
                                                   งานบริการ</a>
                        </li>



                  </ul>
                </li>
              </ul>

              <ul>
                <li>
                  <a href="#">
                  จำแนกตามระดับการศึกษา                  </a>
                  <ul>
                                          <li class="">

                            <a class=" " href="/th/bachelor-degree" target="_self">

                        ปริญญาตรี</a></li>
                                                <li class="">

                            <a class=" " href="/th/master-s-degree" target="_self">

                        ปริญญาโท</a></li>
                                                <li class="">

                            <a class=" " href="/th/doctor-of-philosophy" target="_self">

                        ปริญญาเอก</a></li>
                                                <li class="">

                            <a class=" " href="/th/short-course" target="_self">

                        หลักสูตรระยะสั้น</a></li>
                                                <li class="">

                            <a class=" " href="/th/international-course" target="_self">

                        หลักสูตรนานาชาติ</a></li>
                                          </ul>
                </li>
              </ul>
             </div></div></div>
        <div>
          <button type="button" class="header-sub-menu-btn menu__item" data-target="fac-n-unit-heading-sub-menu" aria-expanded="false" aria-controls="fac-n-unit-heading-sub-menu">
          คณะและหน่วยงาน            <i class="ml-1 fa fa-chevron-down icon"></i>
          </button>
        <div class="collapse sidenav-sub-menu"><div>
              <ul>

                                        <li>
                                        <a href="/faculty-bangkhen/" target="_self" class=" ">
                                        บางเขน                                        </a>
                                        </li>



                                        <li>
                                        <a href="/faculty-kamphaeng-saen-campus/" target="_self" class=" ">
                                        วิทยาเขตกำแพงแสน                                        </a>
                                        </li>



                                        <li>
                                        <a href="/faculty-chalermphakiet-campus-sakon-nakhon/" target="_self" class=" ">
                                        วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร                                        </a>
                                        </li>



                                        <li>
                                        <a href="/faculty-sriracha-campus/" target="_self" class=" ">
                                        วิทยาเขตศรีราชา                                        </a>
                                        </li>



                                        <li>
                                        <a href="/faculty-suphanburi-campus-establishment-project/" target="_self" class=" ">
                                        โครงการจัดตั้งวิทยาเขตสุพรรณบุรี                                        </a>
                                        </li>



                                        <li>
                                        <a href="/faculty-associate-institution/" target="_self" class=" ">
                                        สถาบันสมทบ                                        </a>
                                        </li>


                                    </ul>
             </div></div></div>

        <div class="icon-btn-wrapper align-items-center">
          <div id="header-search-shield"></div>
          <button id="header-search-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
              <style>
                tspan { white-space:pre }
              </style>
              <path id="ic_mag" d="M23.79 22.77L17.96 16.94C19.52 15.14 20.47 12.8 20.47 10.23C20.47 4.59 15.88 0 10.23 0C4.59 0 0 4.59 0 10.23C0 15.87 4.59 20.47 10.23 20.47C12.8 20.47 15.15 19.52 16.95 17.95L22.78 23.79C22.92 23.92 23.1 24 23.29 24C23.47 24 23.65 23.93 23.79 23.79C24.07 23.51 24.07 23.05 23.79 22.77ZM1.43 10.23C1.43 5.38 5.38 1.44 10.23 1.44C15.08 1.44 19.03 5.38 19.03 10.23C19.03 15.08 15.08 19.03 10.23 19.03C5.38 19.03 1.43 15.09 1.43 10.23Z"></path>
            </svg>
          </button>
          <button id="header-search-close-btn">
            <svg viewBox="0 0 24 24">
              <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            </svg>
          </button>
        </div>
      </div>




      <!-- Full width Part Menu -->
      <nav class="full-width-part">
        <ul class="no-bullets">

        <li><button type="button" class="menu__item" data-target="ku-sub-menu-275" aria-expanded="false" aria-controls="ku-sub-menu-275">เกี่ยวกับ มก.</button><div class="collapse sidenav-sub-menu"><div>
          <ul>  <li><a href="/th/history-ku" target="_self">ประวัติ มก.</a></li><li><a href="/th/philosophy-vision-mission" target="_self">ปรัชญา วิสัยทัศน์ พันธกิจ</a></li><li><a href="/th/the-identity-of-ku" target="_self">สัญลักษณ์ มก.</a></li><li><a href="/th/university-information" target="_self">ข้อมูลมหาวิทยาลัย</a> <ul class="sub_3" style="margin-left: 20px;"><li>
                <a href="/th/campus-information" target="_self">ข้อมูลวิทยาเขต</a>
                </li><li>
                <a href="/th/statistical-data" target="_self">ข้อมูลสถิติ</a>
                </li><li>
                <a href="/th/world-university-rankings" target="_self">ผลการจัดอันดับมหาวิทยาลัยโลก</a>
                </li><li>
                <a href="/th/kustatute" target="_self">พระราชบัญญัติ มก.</a>
                </li></ul></li><li><a href="/th/gallery-and-vdo" target="_self">คลังภาพและวิดีโอ</a> <ul class="sub_3" style="margin-left: 20px;"></ul></li><li><a href="https://ku.ac.th/th/kulogo" target="_self">ดาวน์โหลด</a>  </li></ul>
          <ul> <li><a href="#">โครงสร้างมหาวิทยาลัย</a> <ul class="sub_3" style="margin-left: 20px;"><li>
                <a href="/th/organize-structure" target="_self">แผนผังโครงสร้างการบริหาร</a>
                </li><li>
                <a href="/th/section-structure" target="_self">แผนผังโครงสร้างส่วนงาน</a>
                </li><li>
                <a href="/th/university-council" target="_self">กรรมการสภามหาวิทยาลัย</a>
                </li><li>
                <a href="/th/university-affairs-board" target="_self">คณะกรรมการส่งเสริมกิจการมหาวิทยาลัย</a>
                </li><li>
                <a href="/th/university-administrators" target="_self">คณะผู้บริหารมหาวิทยาลัย</a>
                </li><li>
                <a href="/th/dean-and-director" target="_self">คณบดีและผู้อำนวยการ</a>
                </li><li>
                <a href="/th/president-s-palace" target="_self">ทำเนียบอธิการบดี</a>
                </li></ul>  </li></ul>
          <ul> <li><a href="/th/around-university-fence" target="_self">รอบรั้วมหาวิทยาลัย</a> <ul class="sub_3" style="margin-left: 20px;"><li>
                <a href="/th/landmark" target="_self">สถานที่สำคัญ</a>
                </li><li>
                <a href="/th/learning-resources" target="_self">แหล่งเรียนรู้</a>
                </li><li>
                <a href="/th/facility" target="_self">สิ่งอำนวยความสะดวก</a>
                </li><li>
                <a href="/th/sports-and-health" target="_self">กีฬาและสุขภาพ</a>
                </li><li>
                <a href="/th/ku-products" target="_self">ผลิตภัณฑ์ มก.</a>
                </li></ul>  </li></ul>

             </div></div></li><li><button type="button" class="menu__item" data-target="ku-sub-menu-274" aria-expanded="false" aria-controls="ku-sub-menu-274">วิจัยและนวัตกรรม</button><div class="collapse sidenav-sub-menu"><div>  <ul><li><a href="/th/research-information" target="_self">สารสนเทศงานวิจัย</a></li><li><a href="https://www3.rdi.ku.ac.th/?cat=22" target="_blank">รางวัลวิจัย</a></li><li><a href="/th/portfolio-research-product" target="_blank">ผลงานวิจัยสู่ภาคธุรกิจ</a></li><li><a href="https://www3.rdi.ku.ac.th/?cat=39" target="_blank">ผลงานวิจัย</a></li><li><a href="/th/research-station-center" target="_self">ศูนย์สถานีวิจัย</a></li><li><a href="#">วารสารวิทยาสารเกษตรศาสตร์</a> <ul class="sub_3" style="margin-left: 20px;"><li><a href="https://li01.tci-thaijo.org/index.php/anres/" target="_blank">Agriculture and Natural Resources (ANRES)</a></li><li><a href="https://so04.tci-thaijo.org/index.php/kjss" target="_blank">Kasetsart Journal of Social Sciences (KJSS)</a></li></ul></li><li></li></ul>  </div></div></li> <li> <button type="button" class="menu__item no-sub-menu" onclick="window.location.href='awards-and-pride'">
            รางวัลและความภาคภูมิใจ
          </button>
        </li><li><button type="button" class="menu__item" data-target="ku-sub-menu-313" aria-expanded="false" aria-controls="ku-sub-menu-313">บริการสังคม</button><div class="collapse sidenav-sub-menu"><div>  <ul><li><a href="/th/social-activities" target="_self">กิจกรรมเพื่อสังคม</a></li><li><a href="/th/knowledge-for-the-people" target="_self">องค์ความรู้เพื่อประชาชน</a></li></ul>  </div></div></li><li><button type="button" class="menu__item" data-target="ku-sub-menu-277" aria-expanded="false" aria-controls="ku-sub-menu-277">ทุนการศึกษา</button><div class="collapse sidenav-sub-menu"><div>  <ul><li><a href="/th/scholarships-at-ku" target="_self">ประเภททุนการศึกษา</a></li><li><a href="/th/scholarships" target="_self">ทุนการศึกษา ใน มก.</a></li><li><a href="/th/scholarships-abroad" target="_self">ทุนการศึกษาในต่างประเทศ</a></li><li><a href="/th/guidelines-for-participating" target="_self">แนวทางการเข้าร่วมกิจกรรมในต่างประเทศ</a></li></ul>  </div></div></li><li><button type="button" class="menu__item" data-target="ku-sub-menu-337" aria-expanded="false" aria-controls="ku-sub-menu-337">ข่าวสารและกิจกรรม</button><div class="collapse sidenav-sub-menu"><div>  <ul><li><a href="/th/news1" target="_self">ข่าวมหาวิทยาลัย</a></li><li><a href="/th/student-news" target="_self">ข่าวนิสิต</a></li><li><a href="/th/meeting-seminar-training-news" target="_self">ประชุม/สัมมนา/อบรม</a></li><li><a href="/th/education-news" target="_self">การศึกษา</a></li><li><a href="/th/award-news" target="_self">การรับรางวัล</a></li><li><a href="#">จัดซื้อจัดจ้าง</a> <ul class="sub_3" style="margin-left: 20px;"><li><a href="http://finance.ku.ac.th/index.php?option=com_content&amp;task=section&amp;id=14&amp;Itemid=74&amp;lang=th_TH" target="_blank">กองคลัง</a></li><li><a href="/th/central-procurement-ku" target="_self">หน่วยงานใน มก.</a></li></ul></li><li></li><li><a href="#">รับสมัครบุคลากร</a> <ul class="sub_3" style="margin-left: 20px;"><li><a href="/th/jobnews-ku" target="_self">ข่าวรับสมัครงาน</a></li><li><a href="https://ku.thaijobjob.com/" target="_blank">ระบบสมัครงานออนไลน์</a></li></ul></li><li></li><li><a href="/th/event-calendar" target="_blank">ปฏิทินกิจกรรม</a></li></ul>  </div></div></li><li><button type="button" class="menu__item" data-target="ku-sub-menu-278" aria-expanded="false" aria-controls="ku-sub-menu-278">ติดต่อ</button><div class="collapse sidenav-sub-menu"><div>  <ul><li><a href="/th/contact-address" target="_self">ที่อยู่ ติดต่อสอบถาม</a></li><li><a href="/th/phone-number" target="_self">หมายเลขโทรศัพท์</a></li><li><a href="/th/kasetsart-university-map" target="_self">แผนที่และการเดินทางมา มก.</a></li><li><a href="/car-service-routes-in-maha-vickya-sai/" target="_self">แผนที่และการเดินทางใน มก.</a></li><li><a href="https://directory.ku.ac.th/ver3/index.php" target="_blank">ค้นหาข้อมูลบุคลากร</a></li><li><a href="http://docs.google.com/forms/d/e/1FAIpQLSdCdbUvnTnxZe8N82gkqTRosJw3Q_-5N-I4hWoNt70P1yg_hQ/viewform" target="_blank">แจ้งเสนอแนะและร้องเรียน</a></li></ul>  </div></div></li>
        </ul>
      </nav>
      <!-- Full width part shield -->
      <div class="full-width-part-shield"></div>

      <!-- Dropdown -->
      <div class="header-dropdown-holder">
        <div class="header-dropdown__arrow">
          <div class="arrow-inner"></div>
        </div>
        <div class="header-dropdown__bg"></div>

        <div class="header-dropdown__wrap">
          <!-- Admission sub-menu -->
          <div class="header-dropdown-menu" id="admission-heading-sub-menu">
            <div class="header-dropdown-menu__content">
              <ul>
                                                      <li>
                                        <a href="/th/recruitment" target="_self" class=" ">
                                        การรับสมัครและคุณสมบัติผู้สมัคร                                        </a>
                                        </li>



                                                    <li>

                              <a href="#" class=" ">
                              ปฏิทินการศึกษา                              </a>

                              <ul>
                               <li>
   <a href="https://registrar.ku.ac.th/%e0%b8%9a%e0%b8%a3%e0%b8%b4%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%99%e0%b8%b4%e0%b8%aa%e0%b8%b4%e0%b8%95/%e0%b8%9b%e0%b8%8f%e0%b8%b4%e0%b8%97%e0%b8%b4%e0%b8%99%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%a8%e0%b8%b6%e0%b8%81%e0%b8%a9%e0%b8%b2-%e0%b8%a1%e0%b8%81/" target="_blank" class=" ">
                                        ระดับปริญญาตรี                                        </a>

  </li>
 <li>
   <a href="https://www.grad.ku.ac.th/%e0%b8%99%e0%b8%b4%e0%b8%aa%e0%b8%b4%e0%b8%95/%e0%b8%9b%e0%b8%8f%e0%b8%b4%e0%b8%97%e0%b8%b4%e0%b8%99%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%a8%e0%b8%b6%e0%b8%81%e0%b8%a9%e0%b8%b2/" target="_blank" class=" ">
                                        ระดับบัณฑิตศึกษา                                        </a>

  </li>
                              </ul>



                              </li>




                                                    <li>

                              <a href="#" class=" ">
                              ปฏิทินกิจกรรมนิสิตใหม่ ปีการศึกษา 2563                              </a>

                              <ul>
                               <li>
   <a href="https://admission.ku.ac.th/admmedia/announcements/2020/05/29/%E0%B8%9B%E0%B8%8F%E0%B8%97%E0%B8%99%E0%B8%81%E0%B8%88%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1_KU-80_-_new.pdf" target="_blank" class=" ">
                                        ระดับปริญญาตรี                                        </a>

  </li>
                              </ul>



                              </li>





                                        <li>
                                        <a href="/tuition-fees/" target="_self" class=" ">
                                        ค่าธรรมเนียมการศึกษา                                        </a>
                                        </li>



              </ul>
            </div>
          </div>

          <!-- Curriculum sub-menu -->
          <div class="header-dropdown-menu" id="curriculum-heading-sub-menu">
            <div class="header-dropdown-menu__content col-2">
              <ul>
                <li>
                  <a href="#">
                  จำแนก 10 สาขา ตาม ISCED                  </a>

                  <ul>
                                          <li>

                            <a class=" " href="/th/the-education" target="_self">
                                                   การศึกษา</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/art-and-humans" target="_self">
                                                   ศิลปะและมนุษย์</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/society-journal-information" target="_self">
                                                   สังคม, วารสาร, สารสนเทศ</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/business-administration-law" target="_self">
                                                   บริหารธุรกิจ กฎหมาย</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/natural-sciences-mathematics-statistics" target="_self">
                                                   วิทยาศาสตร์ ธรรมชาติ คณิตศาสตร์ สถิติ</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/information-technology-and-communication" target="_self">
                                                   เทคโนโลยีสารสนเทศ และการสื่อสาร</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/construction-industry-engineering" target="_self">
                                                   วิศวกรรม อุตสาหกรรม ก่อสร้าง</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/agriculture-forestry-veterinary-fisheries" target="_self">
                                                   เกษตร วนศาสตร์ ประมง สัตวแพทย์</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/health-and-welfare" target="_self">
                                                   สุขภาพ สวัสดิการ</a>
                        </li>
                                                <li>

                            <a class=" " href="/th/service" target="_self">
                                                   งานบริการ</a>
                        </li>



                  </ul>
                </li>
              </ul>

              <ul>
                <li>
                  <a href="#">
                  จำแนกตามระดับการศึกษา                  </a>
                  <ul>
                                          <li class="">

                            <a class=" " href="/th/bachelor-degree" target="_self">

                        ปริญญาตรี</a></li>
                                                <li class="">

                            <a class=" " href="/th/master-s-degree" target="_self">

                        ปริญญาโท</a></li>
                                                <li class="">

                            <a class=" " href="/th/doctor-of-philosophy" target="_self">

                        ปริญญาเอก</a></li>
                                                <li class="">

                            <a class=" " href="/th/short-course" target="_self">

                        หลักสูตรระยะสั้น</a></li>
                                                <li class="">

                            <a class=" " href="/th/international-course" target="_self">

                        หลักสูตรนานาชาติ</a></li>
                                          </ul>
                </li>
              </ul>
            </div>
          </div>

          <!-- Faculty and units sub-menu -->
          <div class="header-dropdown-menu" id="fac-n-unit-heading-sub-menu">
            <div class="header-dropdown-menu__content">
              <ul>

                                        <li>
                                        <a href="/faculty-bangkhen/" target="_self" class=" ">
                                        บางเขน                                        </a>
                                        </li>



                                        <li>
                                        <a href="/faculty-kamphaeng-saen-campus/" target="_self" class=" ">
                                        วิทยาเขตกำแพงแสน                                        </a>
                                        </li>



                                        <li>
                                        <a href="/faculty-chalermphakiet-campus-sakon-nakhon/" target="_self" class=" ">
                                        วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร                                        </a>
                                        </li>



                                        <li>
                                        <a href="/faculty-sriracha-campus/" target="_self" class=" ">
                                        วิทยาเขตศรีราชา                                        </a>
                                        </li>



                                        <li>
                                        <a href="/faculty-suphanburi-campus-establishment-project/" target="_self" class=" ">
                                        โครงการจัดตั้งวิทยาเขตสุพรรณบุรี                                        </a>
                                        </li>



                                        <li>
                                        <a href="/faculty-associate-institution/" target="_self" class=" ">
                                        สถาบันสมทบ                                        </a>
                                        </li>


                                    </ul>
            </div>
          </div>


          <div class="header-dropdown-menu" id="ku-sub-menu-274"><div class="header-dropdown-menu__content"> <ul><li><a href="/th/research-information" target="_self">สารสนเทศงานวิจัย</a></li><li><a href="https://www3.rdi.ku.ac.th/?cat=22" target="_blank">รางวัลวิจัย</a></li><li><a href="/th/portfolio-research-product" target="_blank">ผลงานวิจัยสู่ภาคธุรกิจ</a></li><li><a href="https://www3.rdi.ku.ac.th/?cat=39" target="_blank">ผลงานวิจัย</a></li><li><a href="/th/research-station-center" target="_self">ศูนย์สถานีวิจัย</a></li><li><a href="#">วารสารวิทยาสารเกษตรศาสตร์</a> <ul class="sub_3" style="margin-left: 20px;"><li><a href="https://li01.tci-thaijo.org/index.php/anres/" target="_blank">Agriculture and Natural Resources (ANRES)</a></li><li><a href="https://so04.tci-thaijo.org/index.php/kjss" target="_blank">Kasetsart Journal of Social Sciences (KJSS)</a></li></ul></li><li></li></ul> </div></div><div class="header-dropdown-menu" id="ku-sub-menu-313"><div class="header-dropdown-menu__content"> <ul><li><a href="/th/social-activities" target="_self">กิจกรรมเพื่อสังคม</a></li><li><a href="/th/knowledge-for-the-people" target="_self">องค์ความรู้เพื่อประชาชน</a></li></ul> </div></div><div class="header-dropdown-menu" id="ku-sub-menu-277"><div class="header-dropdown-menu__content"> <ul><li><a href="/th/scholarships-at-ku" target="_self">ประเภททุนการศึกษา</a></li><li><a href="/th/scholarships" target="_self">ทุนการศึกษา ใน มก.</a></li><li><a href="/th/scholarships-abroad" target="_self">ทุนการศึกษาในต่างประเทศ</a></li><li><a href="/th/guidelines-for-participating" target="_self">แนวทางการเข้าร่วมกิจกรรมในต่างประเทศ</a></li></ul> </div></div><div class="header-dropdown-menu" id="ku-sub-menu-337"><div class="header-dropdown-menu__content"> <ul><li><a href="/th/news1" target="_self">ข่าวมหาวิทยาลัย</a></li><li><a href="/th/student-news" target="_self">ข่าวนิสิต</a></li><li><a href="/th/meeting-seminar-training-news" target="_self">ประชุม/สัมมนา/อบรม</a></li><li><a href="/th/education-news" target="_self">การศึกษา</a></li><li><a href="/th/award-news" target="_self">การรับรางวัล</a></li><li><a href="#">จัดซื้อจัดจ้าง</a> <ul class="sub_3" style="margin-left: 20px;"><li><a href="http://finance.ku.ac.th/index.php?option=com_content&amp;task=section&amp;id=14&amp;Itemid=74&amp;lang=th_TH" target="_blank">กองคลัง</a></li><li><a href="/th/central-procurement-ku" target="_self">หน่วยงานใน มก.</a></li></ul></li><li></li><li><a href="#">รับสมัครบุคลากร</a> <ul class="sub_3" style="margin-left: 20px;"><li><a href="/th/jobnews-ku" target="_self">ข่าวรับสมัครงาน</a></li><li><a href="https://ku.thaijobjob.com/" target="_blank">ระบบสมัครงานออนไลน์</a></li></ul></li><li></li><li><a href="/th/event-calendar" target="_blank">ปฏิทินกิจกรรม</a></li></ul> </div></div><div class="header-dropdown-menu" id="ku-sub-menu-278"><div class="header-dropdown-menu__content"> <ul><li><a href="/th/contact-address" target="_self">ที่อยู่ ติดต่อสอบถาม</a></li><li><a href="/th/phone-number" target="_self">หมายเลขโทรศัพท์</a></li><li><a href="/th/kasetsart-university-map" target="_self">แผนที่และการเดินทางมา มก.</a></li><li><a href="/car-service-routes-in-maha-vickya-sai/" target="_self">แผนที่และการเดินทางใน มก.</a></li><li><a href="https://directory.ku.ac.th/ver3/index.php" target="_blank">ค้นหาข้อมูลบุคลากร</a></li><li><a href="http://docs.google.com/forms/d/e/1FAIpQLSdCdbUvnTnxZe8N82gkqTRosJw3Q_-5N-I4hWoNt70P1yg_hQ/viewform" target="_blank">แจ้งเสนอแนะและร้องเรียน</a></li></ul> </div></div>

          <!-- About KU -->
          <div class="header-dropdown-menu" id="ku-sub-menu-275" data-sub="ku-sub-menu-275">
          <div class="header-dropdown-menu__content col-3">
          <ul>  <li><a href="/th/history-ku" target="_self">ประวัติ มก.</a></li><li><a href="/th/philosophy-vision-mission" target="_self">ปรัชญา วิสัยทัศน์ พันธกิจ</a></li><li><a href="/th/the-identity-of-ku" target="_self">สัญลักษณ์ มก.</a></li><li><a href="/th/university-information" target="_self">ข้อมูลมหาวิทยาลัย</a> <ul class="sub_3" style="margin-left: 20px;"><li>
                <a href="/th/campus-information" target="_self">ข้อมูลวิทยาเขต</a>
                </li><li>
                <a href="/th/statistical-data" target="_self">ข้อมูลสถิติ</a>
                </li><li>
                <a href="/th/world-university-rankings" target="_self">ผลการจัดอันดับมหาวิทยาลัยโลก</a>
                </li><li>
                <a href="/th/kustatute" target="_self">พระราชบัญญัติ มก.</a>
                </li></ul></li><li><a href="/th/gallery-and-vdo" target="_self">คลังภาพและวิดีโอ</a> <ul class="sub_3" style="margin-left: 20px;"></ul></li><li><a href="https://ku.ac.th/th/kulogo" target="_self">ดาวน์โหลด</a>  </li></ul>
          <ul> <li><a href="#">โครงสร้างมหาวิทยาลัย</a> <ul class="sub_3" style="margin-left: 20px;"><li>
                <a href="/th/organize-structure" target="_self">แผนผังโครงสร้างการบริหาร</a>
                </li><li>
                <a href="/th/section-structure" target="_self">แผนผังโครงสร้างส่วนงาน</a>
                </li><li>
                <a href="/th/university-council" target="_self">กรรมการสภามหาวิทยาลัย</a>
                </li><li>
                <a href="/th/university-affairs-board" target="_self">คณะกรรมการส่งเสริมกิจการมหาวิทยาลัย</a>
                </li><li>
                <a href="/th/university-administrators" target="_self">คณะผู้บริหารมหาวิทยาลัย</a>
                </li><li>
                <a href="/th/dean-and-director" target="_self">คณบดีและผู้อำนวยการ</a>
                </li><li>
                <a href="/th/president-s-palace" target="_self">ทำเนียบอธิการบดี</a>
                </li></ul>  </li></ul>
          <ul> <li><a href="/th/around-university-fence" target="_self">รอบรั้วมหาวิทยาลัย</a> <ul class="sub_3" style="margin-left: 20px;"><li>
                <a href="/th/landmark" target="_self">สถานที่สำคัญ</a>
                </li><li>
                <a href="/th/learning-resources" target="_self">แหล่งเรียนรู้</a>
                </li><li>
                <a href="/th/facility" target="_self">สิ่งอำนวยความสะดวก</a>
                </li><li>
                <a href="/th/sports-and-health" target="_self">กีฬาและสุขภาพ</a>
                </li><li>
                <a href="/th/ku-products" target="_self">ผลิตภัณฑ์ มก.</a>
                </li></ul>  </li></ul>

            </div>
          </div>



          </div>



  </div>

</div>



        <!-- Sidenav Button -->
        <div class="sidenav-button mr-3">
      <button id="sidenav-search-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <style>
            tspan { white-space:pre }
          </style>
          <path id="ic_mag" d="M23.79 22.77L17.96 16.94C19.52 15.14 20.47 12.8 20.47 10.23C20.47 4.59 15.88 0 10.23 0C4.59 0 0 4.59 0 10.23C0 15.87 4.59 20.47 10.23 20.47C12.8 20.47 15.15 19.52 16.95 17.95L22.78 23.79C22.92 23.92 23.1 24 23.29 24C23.47 24 23.65 23.93 23.79 23.79C24.07 23.51 24.07 23.05 23.79 22.77ZM1.43 10.23C1.43 5.38 5.38 1.44 10.23 1.44C15.08 1.44 19.03 5.38 19.03 10.23C19.03 15.08 15.08 19.03 10.23 19.03C5.38 19.03 1.43 15.09 1.43 10.23Z"></path>
        </svg>
      </button>
      <button id="sidenav-search-close-btn">
        <svg viewBox="0 0 24 24">
          <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
        </svg>
      </button>
      <button id="sidenav-toggle-btn">
      <svg viewBox="0 0 100 100" width="31" height="24">
        <rect x="-20%" y="0%" width="140%" height="7.4" fill="#292929"></rect>
        <rect x="-20%" y="46%" width="140%" height="7.4" fill="#292929"></rect>
       <rect x="-20%" y="92.5%" width="140%" height="7.4" fill="#292929"></rect>
      </svg>
      </button>
    </div>


  <!-- Sidenav overlay -->
  <div class="sidenav-overlay"></div>


 <!-- Search box -->
 <div id="header-search-area" style="display: block;">

<div class="header-search-box">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col">
        <h2 class="text-center">ค้นหาข้อมูลภายในเว็บไซต์</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col">
        <form class="header-search-form" action="/th/search">
          <div class="row justify-content-center no-gutters">

            <div class="input col-10 col-md-8 col-lg-6 mt-3 mt-lg-0">
              <input id="header-search-input" type="text" name="headKeySearch" placeholder="คุณต้องการค้นหาอะไร?" aria-label="ค้นหา" required="">
            </div>
            <div class="col-2 col-md-1 mt-3 mt-lg-0">
              <button class="search-btn" type="submit" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17" width="17" height="17">
                  <style>
                    tspan {
                      white-space: pre;
                    }
                    .shp0 {
                      fill: #ffffff;
                    }
                  </style>
                  <path id="ic_mag" class="shp0" d="M16.82 16.13L12.7 12C13.8 10.73 14.47 9.06 14.47 7.25C14.47 3.25 11.23 0 7.24 0C3.24 0 0 3.25 0 7.25C0 11.24 3.25 14.5 7.24 14.5C9.05 14.5 10.71 13.83 11.98 12.72L16.11 16.85C16.2 16.95 16.34 17 16.46 17C16.59 17 16.72 16.95 16.82 16.85C17.02 16.65 17.02 16.33 16.82 16.13ZM1.01 7.25C1.01 3.81 3.8 1.02 7.23 1.02C10.66 1.02 13.45 3.81 13.45 7.25C13.45 10.68 10.66 13.48 7.23 13.48C3.8 13.48 1.01 10.69 1.01 7.25Z"></path>
                </svg>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

</div></header>


<div id="sub-menu-overlay" class="collapse"></div>
</div>
<!-- Banner -->

<!-- Herobanner -->
<!-- Banner -->

<div class="main-carousel ml-auto mr-auto">
    <div class="main-carousel ml-auto mr-auto">
        <div class="swiper-container swiper-banner many-slide swiper-container-initialized swiper-container-horizontal">
            <!-- Wrapper -->
            <div class="swiper-wrapper active" style="transition-duration: 0ms; transform: translateX(-7544px);"><div class="swiper-slide position-relative swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 1886px;">
                                          <picture>
                        <!-- Small device -->
                        <source media="(max-width: 768px)" srcset="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_7cd564d893cca052a8bb799ebd098273.jpg">
                        <!-- Large device -->
                        <source media="(min-width: 768.7px)" srcset="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_a41d7eee47ca555eef290cba1847d55f.jpg">
                        <!-- Fallback -->
                        <img src="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_a41d7eee47ca555eef290cba1847d55f.jpg" alt="อาคารจักร">
                    </picture>






                </div>
                <!-- Slides -->
                                <div class="swiper-slide position-relative swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 1886px;">
                                          <picture>
                        <!-- Small device -->
                        <source media="(max-width: 768px)" srcset="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_f28170f1f4f3413bd5941e961cb096ff.jpg">
                        <!-- Large device -->
                        <source media="(min-width: 768.7px)" srcset="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_912605823e2381cd35e2c0743c811e89.jpg">
                        <!-- Fallback -->
                        <img src="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_912605823e2381cd35e2c0743c811e89.jpg" alt="สวมใส่เสื้อเหลืองตลอดเดือน กค.">
                    </picture>






                </div>

                               <div class="swiper-slide position-relative" data-swiper-slide-index="1" style="width: 1886px;">
                    <a href="https://ku.ac.th/th/news1/view/%E0%B9%82%E0%B8%9B%E0%B8%A3%E0%B8%94%E0%B9%80%E0%B8%81%E0%B8%A5%E0%B9%89%E0%B8%B2-%E0%B8%AF-%E0%B9%81%E0%B8%95%E0%B9%88%E0%B8%87%E0%B8%95%E0%B8%B1%E0%B9%89%E0%B8%87-%E0%B8%99%E0%B8%B2%E0%B8%A2%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81-%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%A3%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B9%8C%E0%B8%A3%E0%B8%B1%E0%B8%95%E0%B8%99%E0%B9%8C-%E0%B8%AD%E0%B8%98%E0%B8%B4%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9A%E0%B8%94%E0%B8%B5%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B8%84%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88-15" target="_blank">                      <picture>
                        <!-- Small device -->
                        <source media="(max-width: 768px)" srcset="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_a80f1274c3c05686d3c5f7359770a593.jpg">
                        <!-- Large device -->
                        <source media="(min-width: 768.7px)" srcset="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_4dc99c3da218375ee498be816b42e95b.jpg">
                        <!-- Fallback -->
                        <img src="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_4dc99c3da218375ee498be816b42e95b.jpg" alt="โปรดเกล้าฯ แต่งตั้งอธิการบดีคนที่ 15">
                    </picture>





                    </a>
                </div>

                               <div class="swiper-slide position-relative swiper-slide-prev" data-swiper-slide-index="2" style="width: 1886px;">
                                          <picture>
                        <!-- Small device -->
                        <source media="(max-width: 768px)" srcset="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_b86d384f89e89652067f450f000156f3.jpg">
                        <!-- Large device -->
                        <source media="(min-width: 768.7px)" srcset="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_a46c4f69e9329449835baeda861f4453.jpg">
                        <!-- Fallback -->
                        <img src="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_a46c4f69e9329449835baeda861f4453.jpg" alt="ภาพหอประชุม">
                    </picture>






                </div>

                               <div class="swiper-slide position-relative swiper-slide-active" data-swiper-slide-index="3" style="width: 1886px;">
                                          <picture>
                        <!-- Small device -->
                        <source media="(max-width: 768px)" srcset="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_7cd564d893cca052a8bb799ebd098273.jpg">
                        <!-- Large device -->
                        <source media="(min-width: 768.7px)" srcset="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_a41d7eee47ca555eef290cba1847d55f.jpg">
                        <!-- Fallback -->
                        <img src="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_a41d7eee47ca555eef290cba1847d55f.jpg" alt="อาคารจักร">
                    </picture>






                </div>


            <div class="swiper-slide position-relative swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 1886px;">
                                          <picture>
                        <!-- Small device -->
                        <source media="(max-width: 768px)" srcset="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_f28170f1f4f3413bd5941e961cb096ff.jpg">
                        <!-- Large device -->
                        <source media="(min-width: 768.7px)" srcset="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_912605823e2381cd35e2c0743c811e89.jpg">
                        <!-- Fallback -->
                        <img src="https://www.ku.ac.th/web-upload/202007/m_banner/23/img_912605823e2381cd35e2c0743c811e89.jpg" alt="สวมใส่เสื้อเหลืองตลอดเดือน กค.">
                    </picture>






                </div></div>
            <div class="swiper-lazy-preloader invisible"></div>

                        <!-- Pagination -->
            <div class="swiper-pagination banner-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
            <!-- Navigation buttons -->
            <div class="swiper-button-prev hero-banner-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
            <div class="swiper-button-next hero-banner-next" tabindex="0" role="button" aria-label="Next slide"></div>


        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
</div>
<!-- Herobanner End -->


<!-- Around Ku -->
<div id="around-ku-comp">

<h1 class="around-ku-h1 text-center mt-4">ข่าวสารและกิจกรรม</h1>
<div class="around-ku mb-5 aos-init aos-animate" data-aos="fade-up">
  <div class="links-wrapper border-top d-flex justify-content-center">
    <ul id="na-tab" class="no-bullets nav nav-tabs d-flex flex-wrap pl-0 mb-0 border-0" role="tablist">

                        <li class="nav-item active ">
                    <a id="na-u-news-tab-389" href="#na-u-news-tab-content-389" class="w-100 h-100 active" data-toggle="tab" role="tab" aria-controls="na-u-news-tab-content-389" aria-selected="true" data-swiper-init="true" data-swiper-container="ku-news-swiper-389" data-swiper-next-btn="ku-new-next-btn-389" data-swiper-prev-btn="ku-new-prev-btn-389">

                    ข่าวมหาวิทยาลัย
                    </a>
                    <div class="small-green"></div>
                </li>

                                <li class="nav-item  ">
                    <a id="na-u-news-tab-339" href="#na-u-news-tab-content-339" class="w-100 h-100 " data-toggle="tab" role="tab" aria-controls="na-u-news-tab-content-339" aria-selected="false" data-swiper-init="false" data-swiper-container="ku-news-swiper-339" data-swiper-next-btn="ku-new-next-btn-339" data-swiper-prev-btn="ku-new-prev-btn-339">

                    ข่าวนิสิต
                    </a>
                    <div class="small-green"></div>
                </li>

                                <li class="nav-item  ">
                    <a id="na-u-news-tab-422" href="#na-u-news-tab-content-422" class="w-100 h-100 " data-toggle="tab" role="tab" aria-controls="na-u-news-tab-content-422" aria-selected="false" data-swiper-init="false" data-swiper-container="ku-news-swiper-422" data-swiper-next-btn="ku-new-next-btn-422" data-swiper-prev-btn="ku-new-prev-btn-422">

                    ประชุม/สัมมนา/อบรม
                    </a>
                    <div class="small-green"></div>
                </li>

                                <li class="nav-item  ">
                    <a id="na-u-news-tab-340" href="#na-u-news-tab-content-340" class="w-100 h-100 " data-toggle="tab" role="tab" aria-controls="na-u-news-tab-content-340" aria-selected="false" data-swiper-init="false" data-swiper-container="ku-news-swiper-340" data-swiper-next-btn="ku-new-next-btn-340" data-swiper-prev-btn="ku-new-prev-btn-340">

                    การศึกษา
                    </a>
                    <div class="small-green"></div>
                </li>

                            <li><a href="/th/central-procurement-ku" class="w-100 h-100"> จัดซื้อจัดจ้าง </a><div class="small-green"></div></li>
                            <li><a href="/jobnews-ku/" target="_blank" class="w-100 h-100"> รับสมัครบุคลากร </a><div class="small-green"></div></li>
                        <li>
                <a href="/th/event-calendar" class="w-100 h-100">ปฏิทินกิจกรรม</a>
                <div class="small-green"></div>
            </li>

                </ul>
  </div>



  <div class="tab-content" id="na-news-and-act-tab-content">
     <!-- University News Tab Content-->
<div class="tab-pane fade  show active " id="na-u-news-tab-content-389" role="tabpanel" aria-labelledby="na-u-news-tab">
                        <!-- News Swiper -->
                        <div class="swiper-container swiper-news ku-news-swiper-389 swiper-container-initialized swiper-container-horizontal swiper-container-free-mode">
                            <div class="swiper-wrapper">




<div class="swiper-slide news-slide p-1 swiper-slide-visible swiper-slide-active" style="margin-right: 30px;">
<a href="https://www.ku.ac.th/th/news1/view/%E0%B8%82%E0%B8%AD%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B8%8D%E0%B8%AD%E0%B8%B8%E0%B8%94%E0%B8%AB%E0%B8%99%E0%B8%B8%E0%B8%99%E0%B8%AA%E0%B8%B4%E0%B8%99%E0%B8%84%E0%B9%89%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%A3%E0%B8%B0%E0%B8%A5%E0%B8%B6%E0%B8%81-%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%9A%E0%B8%84%E0%B8%A3%E0%B8%B1%E0%B8%A7%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%97%E0%B8%AD%E0%B8%87%E0%B9%81%E0%B8%94%E0%B8%87" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/400x300/web-upload/202007/m_news/389/thumbnail_b506eb8b6700922ab07caf7619255ffc.png" alt="ขอเชิญอุดหนุนสินค้าที่ระลึก ครอบครัวคุณทองแดง" class="swiper-lazy swiper-lazy-loaded">
            </div>
            <div class="content ">
              <div class="news-title">ขอเชิญอุดหนุนสินค้าที่ระลึก ครอบครัวคุณทองแดง</div>
              <div class="pt-2">
                <p>
                ขอเชิญอุดหนุนสินค้าที่ระลึก ครอบครัวคุณทองแดง สั่งซื้อทางออนไลน์ได้ หรือที่ศูนย์หนังสือมหาวิทยาลัยเกษตรศาสตร์ โทรศัพท์ 02 579 9597 , 02 942 8063-7                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">17 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>287</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>2</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 swiper-slide-visible swiper-slide-next" style="margin-right: 30px;">
<a href="https://www.ku.ac.th/th/news1/view/%E0%B8%99%E0%B8%B4%E0%B8%AA%E0%B8%B4%E0%B8%95%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%9A%E0%B8%B8%E0%B8%84%E0%B8%A5%E0%B8%B2%E0%B8%81%E0%B8%A3-%E0%B8%A1%E0%B8%81-%E0%B8%AA%E0%B8%B1%E0%B9%88%E0%B8%87%E0%B8%88%E0%B8%AD%E0%B8%87-Ipad-%E0%B9%81%E0%B8%A5%E0%B8%B0-Notebook-%E0%B8%A3%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%9E%E0%B8%B4%E0%B9%80%E0%B8%A8%E0%B8%A9" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/400x300/web-upload/202007/m_news/389/thumbnail_8f1a334220773996527d7e191d0dbc4d.png" alt="นิสิตและบุคลากร มก. สั่งจอง Ipad และ Notebook ราคาพิเศษ" class="swiper-lazy swiper-lazy-loaded">
            </div>
            <div class="content ">
              <div class="news-title">นิสิตและบุคลากร มก. สั่งจอง Ipad และ Notebook ราคาพิเศษ</div>
              <div class="pt-2">
                <p>
                เฉพาะ Lenovo และ Huawei ขยายเวลาถึง 31 กรกฎาคม 2563                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">30 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>10651</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>20</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 swiper-slide-visible" style="margin-right: 30px;">
<a href="https://www.ku.ac.th/th/news1/view/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%A7%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%B4%E0%B8%94%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B9%82%E0%B8%A5%E0%B8%81-%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%9E%E0%B8%9A%E0%B8%84%E0%B8%A3%E0%B8%B1%E0%B9%89%E0%B8%87%E0%B9%81%E0%B8%A3%E0%B8%81%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B9%84%E0%B8%97%E0%B8%A2" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/400x300/web-upload/202006/m_news/389/thumbnail_aaa243148c8ad0ef724f30cbf133a035.png" alt="การเวกชนิดใหม่ของโลก และที่พบครั้งแรกในประเทศไทย" class="swiper-lazy swiper-lazy-loaded">
            </div>
            <div class="content ">
              <div class="news-title">การเวกชนิดใหม่ของโลก และที่พบครั้งแรกในประเทศไทย</div>
              <div class="pt-2">
                <p>
                ค้นพบโดย อาจารย์และนิสิตปริญญาโท คณะวนศาสตร์                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">19 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>260</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>2</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 swiper-slide-visible" style="margin-right: 30px;">
<a href="https://www.ku.ac.th/th/news1/view/%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%AA%E0%B8%A1%E0%B8%B1%E0%B8%84%E0%B8%A3%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B9%80%E0%B8%8A%E0%B9%88%E0%B8%B2%E0%B8%9E%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%88%E0%B8%B1%E0%B8%94%E0%B8%95%E0%B8%B1%E0%B9%89%E0%B8%87%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B9%89%E0%B8%B2-%E0%B8%AD%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3-KU-Mini-Shop" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/400x300/web-upload/202006/m_news/389/thumbnail_bb6373ad58e6e75cc0efd405730d1871.png" alt="รับสมัครผู้เช่าพื้นที่จัดตั้งร้านค้า อาคาร KU Mini Shop" class="swiper-lazy swiper-lazy-loaded">
            </div>
            <div class="content ">
              <div class="news-title">รับสมัครผู้เช่าพื้นที่จัดตั้งร้านค้า อาคาร KU Mini Shop</div>
              <div class="pt-2">
                <p>
                บริเวณ โรงอาหารกลาง 1 ตั้งแต่บัดนี้ จนถึงวันที่ 31 กรกฎาคม 2563                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">22 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>324</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>4</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 swiper-slide-visible" style="margin-right: 30px;">
<a href="https://www.ku.ac.th/th/news1/view/KU-Work-amp-amp-Learn-from-Home" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/400x300/web-upload/202007/m_news/389/thumbnail_5e7110f888d54d51663aa13154aa3440.png" alt="KU Work &amp; Learn from Home" class="swiper-lazy swiper-lazy-loaded">
            </div>
            <div class="content ">
              <div class="news-title">KU Work &amp; Learn from Home</div>
              <div class="pt-2">
                <p>
                เทคโนโลยีดิจิทัลมาช่วยในการเรียนการสอน การสอบ การประชุม และกิจกรรมต่าง ๆ ของ มก.                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">8 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>112</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>1</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 swiper-slide-visible" style="margin-right: 30px;">
<a href="https://www.ku.ac.th/th/news1/view/%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99-%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A3%E0%B8%B9%E0%B9%89-%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1-%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/400x300/web-upload/202006/m_news/389/thumbnail_a16e34d94c0f4448ee0e789588260d66.png" alt="มาตรการป้องกัน ความรู้ กิจกรรม ของมหาวิทยาลัยเกษตรศาสตร์" class="swiper-lazy swiper-lazy-loaded">
            </div>
            <div class="content ">
              <div class="news-title">มาตรการป้องกัน ความรู้ กิจกรรม ของมหาวิทยาลัยเกษตรศาสตร์</div>
              <div class="pt-2">
                <p>
                มาตรการป้องกัน ความรู้ กิจกรรม ของ มก. เกี่ยวกับไวรัสโคโรน่าสายพันธุ์ใหม่ 2019 (COVID-19)                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">5 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>177</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 swiper-slide-visible" style="margin-right: 30px;">
<a href="https://www.ku.ac.th/th/news1/view/%E0%B8%A7%E0%B8%B2%E0%B8%AA%E0%B8%B8%E0%B8%81%E0%B8%A3%E0%B8%B5%E0%B8%AD%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%9C%E0%B8%B2%E0%B8%87-%E0%B8%9E%E0%B8%B7%E0%B8%8A%E0%B8%8A%E0%B8%99%E0%B8%B4%E0%B8%94%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B9%82%E0%B8%A5%E0%B8%81%E0%B9%82%E0%B8%94%E0%B8%A2%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%9E%E0%B8%A4%E0%B8%81%E0%B8%A9%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/400x300/web-upload/202006/m_news/389/thumbnail_2952585cf44d1377419fb2fc63bfc767.png" alt="*วาสุกรีอุ้มผาง* พืชชนิดใหม่ของโลกโดยนักพฤกษศาสตร์ เกษตร" class="swiper-lazy swiper-lazy-loaded">
            </div>
            <div class="content ">
              <div class="news-title">*วาสุกรีอุ้มผาง* พืชชนิดใหม่ของโลกโดยนักพฤกษศาสตร์ เกษตร</div>
              <div class="pt-2">
                <p>
                *วาสุกรีอุ้มผาง*
พืชชนิดใหม่ของโลกโดยนักพฤกษศาสตร์ เกษตร
New Plant Species discovered by #TeamBotKU                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">29 พฤษภาคม 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>115</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>4</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 swiper-slide-visible" style="margin-right: 30px;">
<a href="https://www.ku.ac.th/th/news1/view/%E0%B9%80%E0%B8%84%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%AB%E0%B8%A1%E0%B8%B2%E0%B8%A2%E0%B8%99%E0%B8%B4%E0%B8%AA%E0%B8%B4%E0%B8%95-%E0%B8%A1%E0%B8%81-%E0%B8%AA%E0%B8%B1%E0%B9%88%E0%B8%87%E0%B8%8B%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B8%AD%E0%B8%AD%E0%B8%99%E0%B9%84%E0%B8%A5%E0%B8%99%E0%B9%8C%E0%B9%84%E0%B8%94%E0%B9%89%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%99%E0%B8%B5%E0%B9%88-%E0%B8%AA%E0%B9%88%E0%B8%87%E0%B8%9F%E0%B8%A3%E0%B8%B5%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/400x300/web-upload/202006/m_news/389/thumbnail_b4ad4b099bce82d6cb52e10ec82101be.png" alt="เครื่องหมายนิสิต มก. สั่งซื้อออนไลน์ได้แล้วที่นี่ ส่งฟรีทั่วประเทศ" class="swiper-lazy swiper-lazy-loaded">
            </div>
            <div class="content ">
              <div class="news-title">เครื่องหมายนิสิต มก. สั่งซื้อออนไลน์ได้แล้วที่นี่ ส่งฟรีทั่วประเทศ</div>
              <div class="pt-2">
                <p>
                ศูนย์หนังสือ จำหน่ายเครื่องหมายนิสิต มก. สั่งออนไลน์ ส่งฟรีทั่วประเทศ                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">9 เมษายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>69</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 swiper-slide-visible" style="margin-right: 30px;">
<a href="https://www.ku.ac.th/th/news1/view/KU-Job-Fair-amp-amp-Education-2020" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/400x300/web-upload/202003/m_news/389/thumbnail_016b7c1feafb80a8f4586501a17b2ed5.png" alt="KU Job Fair &amp; Education 2020" class="swiper-lazy swiper-lazy-loaded">
            </div>
            <div class="content ">
              <div class="news-title">KU Job Fair &amp; Education 2020</div>
              <div class="pt-2">
                <p>
                ประกาศคณะกรรมการคัดเลือกภาคเอกชนเข้าร่วมจัดงาน KU Job Fair &amp; Education 2020                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">16 กุมภาพันธ์ 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>34</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>



                          </div>

                            <!--<div class="swiper-button-prev swiper-news-prev-btn ku-new-prev-btn-389"></div>
                            <div class="swiper-button-next swiper-news-next-btn ku-new-next-btn-389"></div>-->
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="all-news-text">
                                                        <a href="/th/news1">ข่าวทั้งหมด <i class="fas fa-chevron-right"></i></a>
                                                    </div>
                    </div>
 <!-- University News Tab Content-->
<div class="tab-pane fade  " id="na-u-news-tab-content-339" role="tabpanel" aria-labelledby="na-u-news-tab">
                        <!-- News Swiper -->
                        <div class="swiper-container swiper-news ku-news-swiper-339">
                            <div class="swiper-wrapper">




<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/student-news/view/%E0%B8%A1%E0%B8%B9%E0%B8%A5%E0%B8%99%E0%B8%B4%E0%B8%98%E0%B8%B4%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B9%80%E0%B8%9B%E0%B8%B4%E0%B8%94%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%AA%E0%B8%A1%E0%B8%B1%E0%B8%84%E0%B8%A3%E0%B8%97%E0%B8%B8%E0%B8%99%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A8%E0%B8%B6%E0%B8%81%E0%B8%A9%E0%B8%B2" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202007/m_news/339/thumbnail_f32ed58efeb3f624c7a0192d030bee2e.png" alt="มูลนิธิมหาวิทยาลัยเกษตรศาสตร์ เปิดรับสมัครทุนการศึกษา" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">มูลนิธิมหาวิทยาลัยเกษตรศาสตร์ เปิดรับสมัครทุนการศึกษา</div>
              <div class="pt-2">
                <p>
                สำหรับนิสิต ป.ตรี โท ทุกสาขาวิชา ที่ขาดแคลนทุนทรัพย์ ประจำภาคต้น ปีการศึกษา 2563                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">13 กรกฎาคม 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>30</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/student-news/view/KU-Happy-Place-Center-KU-80" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202007/m_news/339/thumbnail_ab673843f122f0d705a9c362593d02df.png" alt="KU Happy Place Center KU 80" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">KU Happy Place Center KU 80</div>
              <div class="pt-2">
                <p>
                บริการให้คำปรึกษาเชิงจิตวิทยา Online โดยพี่ๆ นักแนะแนวการศึกษาและอาชีพ                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">8 กรกฎาคม 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>72</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/student-news/view/%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B8%8D%E0%B8%8A%E0%B8%A7%E0%B8%99%E0%B8%99%E0%B8%B4%E0%B8%AA%E0%B8%B4%E0%B8%95-%E0%B8%94%E0%B8%B2%E0%B8%A7%E0%B8%99%E0%B9%8C%E0%B9%82%E0%B8%AB%E0%B8%A5%E0%B8%94%E0%B9%81%E0%B8%AD%E0%B8%9B%E0%B8%9E%E0%B8%A5%E0%B8%B4%E0%B9%80%E0%B8%84%E0%B8%8A%E0%B8%B1%E0%B8%99" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202007/m_news/339/thumbnail_52e2b79078f40567e6970eb1b0807b0e.png" alt="เชิญชวนนิสิต ดาวน์โหลดแอปพลิเคชัน" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">เชิญชวนนิสิต ดาวน์โหลดแอปพลิเคชัน</div>
              <div class="pt-2">
                <p>
                เชิญชวนนิสิต ดาวน์โหลดแอปพลิเคชัน NisitKU และ InsideKU
เพื่อใช้งานระบบสารสนเทศนิสิต และติดตามข้อมูลข่าวสารของมหาวิทยาลัย                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">3 กรกฎาคม 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>312</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>1</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/student-news/view/%E0%B8%A0%E0%B8%B2%E0%B8%84%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%8A%E0%B8%B5%E0%B8%A7%E0%B9%80%E0%B8%84%E0%B8%A1%E0%B8%B5-%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B9%80%E0%B8%9B%E0%B8%B4%E0%B8%94%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2-01402101" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202007/m_news/339/thumbnail_4b67fa6345e6754031a20811e574b1c7.png" alt="ภาควิชาชีวเคมี คณะวิทยาศาสตร์ เปิดรายวิชา 01402101" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">ภาควิชาชีวเคมี คณะวิทยาศาสตร์ เปิดรายวิชา 01402101</div>
              <div class="pt-2">
                <p>
                การรู้เท่าทันผลิตภัณฑ์เสริมความงาม Beauty products Literacy                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">3 กรกฎาคม 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>176</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>2</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/student-news/view/%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%B9%E0%B8%A5%E0%B8%82%E0%B9%88%E0%B8%B2%E0%B8%A7%E0%B8%AA%E0%B8%B2%E0%B8%A3-%E0%B8%AA%E0%B8%B3%E0%B8%AB%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%99%E0%B8%B4%E0%B8%AA%E0%B8%B4%E0%B8%95%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88-KU80" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202006/m_news/339/thumbnail_5ac9b71e8dbbebb1b1dfba7fd0ddb9eb.png" alt="ข้อมูลข่าวสาร สำหรับนิสิตใหม่ KU80" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">ข้อมูลข่าวสาร สำหรับนิสิตใหม่ KU80</div>
              <div class="pt-2">
                <p>
                ขั้นตอนการขึ้นทะเบียน ปฏิทินกิจกรรม และรายละเอียดต่าง ๆ สำหรับนิสิตใหม่ KU80                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">9 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>690</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>3</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/student-news/view/%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%AA%E0%B8%A1%E0%B8%B1%E0%B8%84%E0%B8%A3%E0%B8%97%E0%B8%B8%E0%B8%99%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A8%E0%B8%B6%E0%B8%81%E0%B8%A9%E0%B8%B2-%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%B3%E0%B8%9B%E0%B8%B5%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A8%E0%B8%B6%E0%B8%81%E0%B8%A9%E0%B8%B2-2563" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202006/m_news/339/thumbnail_064817ed21409238ea68ab4b717a67ac.png" alt="รับสมัครทุนการศึกษา ประจำปีการศึกษา 2563" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">รับสมัครทุนการศึกษา ประจำปีการศึกษา 2563</div>
              <div class="pt-2">
                <p>
                สำหรับนิสิต ป.ตรี ชั้นปีที่ 2 ขึ้นไป ทุกวิทยาเขต ตั้งแต่บัดนี้ จนถึง 30 กรกฎาคม 2563                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">22 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>152</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>2</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/student-news/view/%E0%B9%81%E0%B8%9A%E0%B8%9A%E0%B8%AA%E0%B8%B3%E0%B8%A3%E0%B8%A7%E0%B8%88%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%95%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%8A%E0%B9%88%E0%B8%A7%E0%B8%A2%E0%B9%80%E0%B8%AB%E0%B8%A5%E0%B8%B7%E0%B8%AD%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%99%E0%B8%B4%E0%B8%AA%E0%B8%B4%E0%B8%95%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202006/m_news/339/thumbnail_47a12913cdf195ab3ea5203c8935afe6.png" alt="แบบสำรวจความต้องการความช่วยเหลือของนิสิตมหาวิทยาลัยเกษตรศาสตร์" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">แบบสำรวจความต้องการความช่วยเหลือของนิสิตมหาวิทยาลัยเกษตรศาสตร์</div>
              <div class="pt-2">
                <p>
                แบบสำรวจความต้องการความช่วยเหลือของนิสิตมหาวิทยาลัยเกษตรศาสตร์ สำหรับนิสิตชั้นปีที่ 1 (KU 80) ทุกวิทยาเขต                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">16 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>68</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/student-news/view/%E0%B8%A5%E0%B8%87%E0%B8%97%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%82%E0%B8%AD%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B8%E0%B8%99%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A8%E0%B8%B6%E0%B8%81%E0%B8%A9%E0%B8%B2%E0%B8%AA%E0%B8%B3%E0%B8%AB%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%99%E0%B8%B4%E0%B8%AA%E0%B8%B4%E0%B8%95%E0%B8%9E%E0%B8%B4%E0%B8%81%E0%B8%B2%E0%B8%A3-%E0%B8%9B%E0%B8%B5%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A8%E0%B8%B6%E0%B8%81%E0%B8%A9%E0%B8%B2-2563" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202006/m_news/339/thumbnail_0040f2d878dbe1debc4a158c1e4ead27.png" alt="ลงทะเบียนขอรับทุนการศึกษาสำหรับนิสิตพิการ ปีการศึกษา 2563" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">ลงทะเบียนขอรับทุนการศึกษาสำหรับนิสิตพิการ ปีการศึกษา 2563</div>
              <div class="pt-2">
                <p>
                ลงทะเบียนขอรับทุนการศึกษาสำหรับนิสิตพิการ ปีการศึกษา 2563                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">12 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>57</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/student-news/view/%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%98%E0%B8%B8%E0%B8%A3%E0%B8%81%E0%B8%B4%E0%B8%88-%E0%B8%A1%E0%B8%AD%E0%B8%9A%E0%B8%97%E0%B8%B8%E0%B8%99%E0%B8%AA%E0%B8%B3%E0%B8%AB%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%99%E0%B8%B4%E0%B8%AA%E0%B8%B4%E0%B8%95%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%98%E0%B8%B8%E0%B8%A3%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%97%E0%B8%B8%E0%B8%81%E0%B8%8A%E0%B8%B1%E0%B9%89%E0%B8%99%E0%B8%9B%E0%B8%B5" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202006/m_news/339/thumbnail_20fc9fc5aa79328d17f3f559099a16f9.png" alt="คณะบริหารธุรกิจ มอบทุนสำหรับนิสิตคณะบริหารธุรกิจทุกชั้นปี" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">คณะบริหารธุรกิจ มอบทุนสำหรับนิสิตคณะบริหารธุรกิจทุกชั้นปี</div>
              <div class="pt-2">
                <p>
                ที่ได้รับผลกระทบจากการแพร่ระบาดของโรคโควิด-19                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">8 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>41</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/student-news/view/%E0%B8%81%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%99%E0%B8%B4%E0%B8%AA%E0%B8%B4%E0%B8%95%E0%B8%9B%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B9%81%E0%B8%9A%E0%B8%9A%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%99%E0%B8%B4%E0%B8%AA%E0%B8%B4%E0%B8%95" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202006/m_news/339/thumbnail_ebd33ea6e92cb0ed068dc3734348e15a.png" alt="กองกิจการนิสิตปรับรูปแบบการบริการนิสิต" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">กองกิจการนิสิตปรับรูปแบบการบริการนิสิต</div>
              <div class="pt-2">
                <p>
                ”การขอรับเงินกองทุนสวัสดิภาพนิสิต” ในสถานการณ์การแพร่ระบาดของโรค Covid-19                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">29 พฤษภาคม 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>56</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>



                          </div>

                            <!--<div class="swiper-button-prev swiper-news-prev-btn ku-new-prev-btn-339"></div>
                            <div class="swiper-button-next swiper-news-next-btn ku-new-next-btn-339"></div>-->
                        </div>
                        <div class="all-news-text">
                                                        <a href="/th/student-news">ข่าวทั้งหมด <i class="fas fa-chevron-right"></i></a>
                                                    </div>
                    </div>
 <!-- University News Tab Content-->
<div class="tab-pane fade  " id="na-u-news-tab-content-422" role="tabpanel" aria-labelledby="na-u-news-tab">
                        <!-- News Swiper -->
                        <div class="swiper-container swiper-news ku-news-swiper-422">
                            <div class="swiper-wrapper">




<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/meeting-seminar-training-news/view/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%8A%E0%B8%B8%E0%B8%A1%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%99%E0%B8%B2%E0%B8%99%E0%B8%B2%E0%B8%8A%E0%B8%B2%E0%B8%95%E0%B8%B4-The-2nd-TOURIST-International-Conferrence" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202007/m_news/422/thumbnail_3326cefb2b401f6df0755aa52d19c218.png" alt="การประชุมวิชาการนานาชาติ The 2nd TOURIST International Conferrence" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">การประชุมวิชาการนานาชาติ The 2nd TOURIST International Conferrence</div>
              <div class="pt-2">
                <p>
                ระหว่างวันที่ 20 - 21 กรกฎาคม 2563
ณ Ramada Plaza by Wyndham Bangkok                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">14 กรกฎาคม 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>2</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/meeting-seminar-training-news/view/%E0%B9%82%E0%B8%84%E0%B8%A3%E0%B8%87%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AD%E0%B8%9A%E0%B8%A3%E0%B8%A1-Talent-Mobility" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202007/m_news/422/thumbnail_854378f5813be27118c61dc5aad46285.png" alt="โครงการอบรม Talent Mobility" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">โครงการอบรม Talent Mobility</div>
              <div class="pt-2">
                <p>
                วันที่ 5-7 สิงหาคม เวลา 9.00 - 16.00 น. ณ ห้องประชุม 507 ชั้น 5 อาคารวิจัยและพัฒนา                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">10 กรกฎาคม 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>61</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/meeting-seminar-training-news/view/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9C%E0%B8%A5%E0%B8%B4%E0%B8%95%E0%B8%9E%E0%B8%B7%E0%B8%8A%E0%B8%95%E0%B8%B2%E0%B8%A1%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%9A%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%90%E0%B8%B2%E0%B8%99-GAP-%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%88%E0%B8%B1%E0%B8%94%E0%B8%97%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%9A-GMP-HACCP" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202007/m_news/422/thumbnail_398456eb5a9eebb6e626c00f57083d89.png" alt="การผลิตพืชตามระบบมาตรฐาน GAP และการจัดทำระบบ GMP/HACCP" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">การผลิตพืชตามระบบมาตรฐาน GAP และการจัดทำระบบ GMP/HACCP</div>
              <div class="pt-2">
                <p>
                รุ่นที่ 6 ระหว่างวันที่ 5 - 7 สิงหาคม 2563 คณะเกษตร กำแพงแสน มหาวิทยาลัยเกษตรศาสตร์                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">2 กรกฎาคม 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>109</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>1</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/meeting-seminar-training-news/view/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%83%E0%B8%8A%E0%B9%89%E0%B9%80%E0%B8%97%E0%B8%84%E0%B8%99%E0%B8%B4%E0%B8%84%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%81%E0%B8%A5%E0%B8%B2%E0%B8%A2%E0%B8%9E%E0%B8%B1%E0%B8%99%E0%B8%98%E0%B8%B8%E0%B9%8C%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%AB%E0%B8%A5%E0%B8%B2%E0%B8%81%E0%B8%AB%E0%B8%A5%E0%B8%B2%E0%B8%A2%E0%B8%97%E0%B8%B2%E0%B8%87%E0%B8%9E%E0%B8%B1%E0%B8%99%E0%B8%98%E0%B8%B8%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202007/m_news/422/thumbnail_0356c9800e53e588e8c297f698491e32.png" alt="การใช้เทคนิคการกลายพันธุ์เพื่อสร้างความหลากหลายทางพันธุกรรม" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">การใช้เทคนิคการกลายพันธุ์เพื่อสร้างความหลากหลายทางพันธุกรรม</div>
              <div class="pt-2">
                <p>
                วันที่ 13-14 สิงหาคม พ.ศ. 2563 ณ ศูนย์วิจัยนิวเคลียร์เทคโนโลยี คณะวิทยาศาสตร์ มก.                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">1 กรกฎาคม 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>58</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/meeting-seminar-training-news/view/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%8A%E0%B8%B8%E0%B8%A1%E0%B8%97%E0%B8%B2%E0%B8%87%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B8%B0%E0%B8%94%E0%B8%B1%E0%B8%9A%E0%B8%99%E0%B8%B2%E0%B8%99%E0%B8%B2%E0%B8%8A%E0%B8%B2%E0%B8%95%E0%B8%B4-%E0%B8%A0%E0%B8%B2%E0%B8%A9%E0%B8%B2%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%A7%E0%B8%B1%E0%B8%92%E0%B8%99%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%84%E0%B8%97%E0%B8%A2" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202006/m_news/422/thumbnail_c6e4fd174b41616c13755c320f393b12.png" alt="การประชุมทางวิชาการระดับนานาชาติ ภาษาและวัฒนธรรมไทย" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">การประชุมทางวิชาการระดับนานาชาติ ภาษาและวัฒนธรรมไทย</div>
              <div class="pt-2">
                <p>
                หัวข้อ “ภาษาและวัฒนธรรมไทยในวิถีโลกสมัยใหม่” (Thai in the Modern World)  17 – 18 ธันวาคม 2563                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">24 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>56</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/meeting-seminar-training-news/view/%E0%B9%80%E0%B8%97%E0%B8%84%E0%B8%99%E0%B8%B4%E0%B8%84%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%9E%E0%B8%B2%E0%B8%B0%E0%B9%80%E0%B8%A5%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%87%E0%B9%80%E0%B8%99%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%A2%E0%B8%B7%E0%B9%88%E0%B8%AD-%E0%B8%A3%E0%B8%B8%E0%B9%88%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88-54" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202007/m_news/422/thumbnail_6fbd1260f19c16abef569f3050d5cbdc.png" alt="เทคนิคการเพาะเลี้ยงเนื้อเยื่อ รุ่นที่ 54" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">เทคนิคการเพาะเลี้ยงเนื้อเยื่อ รุ่นที่ 54</div>
              <div class="pt-2">
                <p>
                ระหว่างวันที่ 19-21 สิงหาคม 2563
ณ ศูนย์ปฏิบัติการวิจัยและเรือนปลูกพืชทดลอง
คณะเกษตร มก.กำแพงแสน                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">24 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>121</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>2</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/meeting-seminar-training-news/view/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AD%E0%B8%9A%E0%B8%A3%E0%B8%A1-%E0%B8%9B%E0%B8%B8%E0%B9%8B%E0%B8%A2%E0%B8%AD%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B9%8C%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%9B%E0%B8%B8%E0%B9%8B%E0%B8%A2%E0%B8%8A%E0%B8%B5%E0%B8%A7%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B9%89%E0%B8%B2" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202007/m_news/422/thumbnail_f7d7ab5647dd8093cb3f4854fceed52d.png" alt="การอบรม ปุ๋ยอินทรีย์และปุ๋ยชีวภาพเพื่อการค้า" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">การอบรม ปุ๋ยอินทรีย์และปุ๋ยชีวภาพเพื่อการค้า</div>
              <div class="pt-2">
                <p>
                วันที่ 26 - 28 สิงหาคม 2563 ณ ศูนย์ปฏิบัติการวิจัยและเรือนปลูกพืชทดลอง คณะเกษตร กำแพงแสน                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">23 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>92</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/meeting-seminar-training-news/view/ISMYCO2020-amp-amp-ICM2020" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202006/m_news/422/thumbnail_67e98cc88157106fc2b7d3af2eaa8add.png" alt="ISMYCO2020 &amp; ICM2020" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">ISMYCO2020 &amp; ICM2020</div>
              <div class="pt-2">
                <p>
                International Symposium of Mycotoxicology 2020 &amp; International Conference of Mycotoxicology and Food Security 2020 in Bangkok                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">8 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>46</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/meeting-seminar-training-news/view/%E0%B8%A1%E0%B8%81-%E0%B8%A3%E0%B9%88%E0%B8%A7%E0%B8%A1%E0%B8%81%E0%B8%B1%E0%B8%9A-COURSERA-%E0%B9%80%E0%B8%9B%E0%B8%B4%E0%B8%94%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B8%AD%E0%B8%AD%E0%B8%99%E0%B9%84%E0%B8%A5%E0%B8%99%E0%B9%8C-%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%A1%E0%B8%B5%E0%B8%84%E0%B9%88%E0%B8%B2%E0%B9%83%E0%B8%8A%E0%B9%89%E0%B8%88%E0%B9%88%E0%B8%B2%E0%B8%A2" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202006/m_news/422/thumbnail_5b1d694205b339ea139321c363d7af9d.png" alt="มก. ร่วมกับ COURSERA เปิดหลักสูตรออนไลน์ ไม่มีค่าใช้จ่าย" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">มก. ร่วมกับ COURSERA เปิดหลักสูตรออนไลน์ ไม่มีค่าใช้จ่าย</div>
              <div class="pt-2">
                <p>
                มากกว่า 4,000 หลักสูตร พัฒนาศักยภาพอาจารย์และนิสิต                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">1 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>87</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>


<div class="swiper-slide news-slide p-1 ">
<a href="https://www.ku.ac.th/th/meeting-seminar-training-news/view/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%8A%E0%B8%B8%E0%B8%A1%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B8%B0%E0%B8%94%E0%B8%B1%E0%B8%9A%E0%B8%8A%E0%B8%B2%E0%B8%95%E0%B8%B4%E0%B9%80%E0%B8%84%E0%B8%A3%E0%B8%B7%E0%B8%AD%E0%B8%82%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A3%E0%B9%88%E0%B8%A7%E0%B8%A1%E0%B8%A1%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3-%E0%B8%A7%E0%B8%B4%E0%B8%88%E0%B8%B1%E0%B8%A2" class="card-hover-effect">
<div>
            <div class="img">
                    <img src="/assets/images/common/image.svg" data-src="/400x300/web-upload/202006/m_news/422/thumbnail_61a4a5c03a72a21b5559a8f2f82a43af.png" alt="การประชุมวิชาการระดับชาติเครือข่ายความร่วมมมือวิชาการ-วิจัย" class="swiper-lazy">
            </div>
            <div class="content ">
              <div class="news-title">การประชุมวิชาการระดับชาติเครือข่ายความร่วมมมือวิชาการ-วิจัย</div>
              <div class="pt-2">
                <p>
                หัวข้อ : พลังแห่งนวัตกรรมมนุษยศาสตร์และสังคมศาสตร์ วันที่ 17-18 กันยายน 2563                </p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date">1 มิถุนายน 2563</div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
  </svg>                  </span>
                  <span>34</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>                  </span>
                  <span>0</span>
                </span>
              </div>
            </div>

  </a>
</div>



                          </div>

                            <!--<div class="swiper-button-prev swiper-news-prev-btn ku-new-prev-btn-422"></div>
                            <div class="swiper-button-next swiper-news-next-btn ku-new-next-btn-422"></div>-->
                        </div>
                        <div class="all-news-text">
                                                        <a href="/th/meeting-seminar-training-news">ข่าวทั้งหมด <i class="fas fa-chevron-right"></i></a>
                                                    </div>
                    </div>
 <!-- University News Tab Content-->
<div class="tab-pane fade  " id="na-u-news-tab-content-340" role="tabpanel" aria-labelledby="na-u-news-tab">
                        <!-- News Swiper -->
                        <div class="swiper-container swiper-news ku-news-swiper-340">
                            <div class="swiper-wrapper">



<h3>ไม่พบข้อมูล</h3>

                          </div>

                            <!--<div class="swiper-button-prev swiper-news-prev-btn ku-new-prev-btn-340"></div>
                            <div class="swiper-button-next swiper-news-next-btn ku-new-next-btn-340"></div>-->
                        </div>
                        <div class="all-news-text">
                                                    </div>
                    </div>


<!-- Procurement News Tab Content -->
<div class="tab-pane fade" id="na-u-news-tab-content-342" role="tabpanel" aria-labelledby="na-procurement-tab">
    <section id="Download">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 mt-md-0">
                    <div class="download-table">

   <!-- Download Table -->
   <div class="table-header" style="display:none;">
                            <div class="col-name">ชื่อไฟล์</div>
                            <div class="col-view d-none d-md-flex">อ่าน</div>
                            <div class="col-size d-none d-md-flex">ขนาด</div>
                            <div class="col-download d-none d-md-flex">ดาวน์โหลด</div>
                        </div>







                    </div>
                </div>
            </div>

            <!-- All Download News -->
            <div class="all-news-text mt-3">


            </div>
        </div>
    </section>
</div>






<!-- Procurement News Tab Content -->
<div class="tab-pane fade" id="na-u-news-tab-content-343" role="tabpanel" aria-labelledby="na-procurement-tab">
    <section id="Download">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 mt-md-0">
                    <div class="download-table">

   <!-- Download Table -->
   <div class="table-header" style="display:none;">
                            <div class="col-name">ชื่อไฟล์</div>
                            <div class="col-view d-none d-md-flex">อ่าน</div>
                            <div class="col-size d-none d-md-flex">ขนาด</div>
                            <div class="col-download d-none d-md-flex">ดาวน์โหลด</div>
                        </div>







                    </div>
                </div>
            </div>

            <!-- All Download News -->
            <div class="all-news-text mt-3">


            </div>
        </div>
    </section>
</div>





    </div>


</div>

<!-- News and activity small device version. -->
<div class="accordion around-ku-accordion" id="ku-news-n-activities-accordion" data-init="false" data-news-limit="4" data-breakpoint="750">
  </div>
</div>


<!-- Bus Station Swiper -->
<div id="bus-station-comp">
<!-- Around Uni -->
<div class="around-uni bus-station ku-check-webp aos-init webp" data-aos="fade-up" data-aos-once="false">
    <div class="bg-wrapper"></div>
    <div class="bg-wrapper-2"></div>
    <div>
    <div class="section-heading d-flex justify-content-center py-xl-5 py-3">
        <div class="ku">KU</div>
        <div class="d-flex align-items-center">
            <h1>
                <a href="/th/around-university-fence">
                    <div class="more-btn header-box corner-green-light bg-black text-white d-inline-block header-box-animated header-box-animated-light w-100">
                        <i class="fa fa-arrow-up"></i>
                        <span class="btn-text pr-3 d-flex align-items-center justify-content-center h-100">รอบรั้วมหาวิทยาลัย</span>
                    </div>
                </a>
            </h1>
        </div>
    </div>
    </div>
</div></div>

<!-- KU Four Side -->
<div id="ku-sides-comp">
<div class="ku-sides ku-check-webp d-flex flex-wrap aos-init webp" data-aos="fade-up">
    <!-- Each Policy -->
        <div class="side-01">
            <div class="bg-wrapper"></div>
            <h2 class="text-black">มหาวิทยาลัยสีเขียว</h2>
            <div class="hover-text-content">
                <h2>มหาวิทยาลัย<br class="two-line-u">สีเขียว</h2>
                                    <p class="full-content">
                    เกษตรศาสตร์ มีพื้นที่เขียวสดใส หนาแน่น<br>
                    เป็นป่าในเมือง (URBAN FOREST)<br>
                    เกษตรในเมือง (URBAN AGRICULTURE)<br>
                    ที่นับรวมกันได้ประมาณ 1,400 ไร่
                </p>
                <p class="short-content">
                    มีพื้นที่เขียวสดใส หนาแน่น<br>
                    เป็นป่าในเมือง เกษตรในเมือง
                </p>




            </div>
            <div class="hover-mask">
                <div class="top-mask"></div>
                <div class="bottom-mask"></div>
            </div>
        </div>
        <div class="side-02">
            <div class="bg-wrapper"></div>
            <h2 class="text-white">มหาวิทยาลัยการวิจัย</h2>
            <div class="hover-text-content">
                <h2>มหาวิทยาลัย<br class="two-line-u">การวิจัย</h2>
                                <p class="full-content">
                    ไม่ได้มีเป้าหมายเพียงแค่เป็น<br>
                    มหาวิทยาลัยชั้นนำทางด้านการวิจัยเท่านั้น<br>แต่ KU มุ่งเน้นทำงานวิจัย<br>เพื่อสร้างความกินดีอยู่ดี<br>ให้กับประชาชนในประเทศชาติ
                </p>
                <p class="short-content">
                    มุ่งเน้นทำงานวิจัย<br>เพื่อสร้างความกินดีอยู่ดี<br>ให้กับประชาชนในประเทศ
                </p>
                            </div>
            <div class="hover-mask">
                <div class="top-mask"></div>
                <div class="bottom-mask"></div>
            </div>
        </div>
        <div class="side-03">
            <div class="bg-wrapper"></div>
            <h2 class="text-black">มหาวิทยาลัยความสุข</h2>
            <div class="hover-text-content">
                <h2>มหาวิทยาลัย<br class="two-line-u">ความสุข</h2>
                                    <p class="full-content">
                    KU ไม่ได้มีเพียงความรู้เชิงวิชาการ<br>
                    แต่ยังมีพื้นที่กิจกรรม<br>ที่จะช่วยเปิดประสบการณ์<br>และพบเรื่องราวใหม่ในชีวิต<br>เพื่อสร้างความสุขให้กับนิสิตทุกคน
                </p>
                <p class="short-content">
                    เปิดประสบการณ์<br>และพบเรื่องราวใหม่ในชีวิต
                </p>


            </div>
            <div class="hover-mask">
                <div class="top-mask"></div>
                <div class="bottom-mask"></div>
            </div>
        </div>
        <div class="side-04">
            <div class="bg-wrapper"></div>
            <h2 class="text-white">
               <span class="d-block">มหาวิทยาลัย</span><span class="d-block">รับผิดชอบต่อสังคม</span>            </h2>
            <div class="hover-text-content">
                <h2>
                   มหาวิทยาลัย<br class="two-line-u">รับผิดชอบต่อสังคม                </h2>
                                    <p class="full-content">
                    ร่วมมือกับชุมชน เพื่อความกินดีอยู่ดี<br>และความสุขอย่างยั่งยืน<br>มองปัญหาในภาพกว้าง<br>แก้ไขจากปัญหาจุดเล็กๆ<br>และสร้างเครือข่ายขยายผล
                </p>
                <p class="short-content">
                    ร่วมมือกับชุมชน<br>แก้ไขปัญหาและขยายผล
                </p>


            </div>
            <div class="hover-mask">
                <div class="top-mask"></div>
                <div class="bottom-mask"></div>
            </div>
        </div>
        <div class="side-05">
            <div class="bg-wrapper"></div>
            <h2 class="text-black">มหาวิทยาลัยดิจิทัล</h2>
            <div class="hover-text-content">
                <h2>  มหาวิทยาลัย<br class="two-line-u">ดิจิทัล</h2>

                    <p class="full-content">
                    พร้อมที่จะเปลี่ยนแปลง<br>และผลักดันในการใช้ระบบสารสนเทศใหม่<br>เพื่อการทำงานแบบไร้กระดาษ ( Paperless)<br>สะดวก รวดเร็ว ปลอดภัย<br>และนำไปสู่การพัฒนา<br>บริการด้าน AI อย่างต่อเนื่อง
                </p>
                <p class="short-content">
                    เปลี่ยนแปลง และผลักดัน<br>เพื่อทำงานร่วมกับ<br>ระบบสารสนเทศที่ทันสมัย
                </p>


            </div>
            <div class="hover-mask">
                <div class="top-mask"></div>
                <div class="bottom-mask"></div>
            </div>
        </div>
        <div class="side-06">
            <div class="bg-wrapper"></div>
            <h2 class="text-white">มหาวิทยาลัยระดับโลก</h2>
            <div class="hover-text-content">
                <h2>  มหาวิทยาลัย<br class="two-line-u">ระดับโลก</h2>
                                    <p class="full-content">
                    ไม่ว่าใครก็เรียนได้ ด้วยการพัฒนา<br>หลักสูตรที่เพิ่มทักษะการเรียนรู้ และส่งเสริม<br>การเรียนรู้ตลอดชีวิต<br>(LIFELONG LEARNING)<br>เพื่อนำไปสู่ยกระดับการศึกษาไทย<br>ให้ก้าวไกลสู่ระดับโลก
                </p>
                <p class="short-content">
                    ยกระดับการศึกษาไทย<br>ให้ก้าวไกลสู่ระดับโลก
                </p>



            </div>
            <div class="hover-mask">
                <div class="top-mask"></div>
                <div class="bottom-mask"></div>
            </div>
        </div>
</div></div>

<div id="fac-n-cur-comp">
<div class="fac-n-cur d-flex justify-content-end align-items-center ku-check-webp aos-init webp" data-aos="fade-up">
    <div class="bg-wrapper rellax" data-rellax-percentage="0.5" data-rellax-speed="-1"></div>
    <div class="gradient-wrapper"></div>
    <div class="content-wrapper">
        <div>
            <h2>คณะและหลักสูตร</h2>
        </div>
        <p>
            <span class="university-name d-block">มหาวิทยาลัยเกษตรศาสตร์</span>
            <span class="desc d-block mt-1">
                มุ่งเน้นบัณฑิตศึกษา วิจัยขั้นสูง พัฒนาวิชาการ บริการวิชาพื้นฐาน บริหารโครงการพิเศษ ประสานความร่วมมือกับนานาชาติ            </span>
        </p>
        <article class="d-flex">
            <div class="pt-2 pb-1">
                <span id="fac-n-cur-count-one" class="number-count d-block right-separator">0</span>
                <span class="academic d-inline-block">คณะ</span>
            </div>
            <div class="pt-2 pb-1">
                <span id="fac-n-cur-count-two" class="number-count d-block right-separator">0</span>
                <span class="academic d-inline-block text-nowrap">วิทยาลัย</span>
            </div>
            <div class="pt-2 pb-1">
                <span id="fac-n-cur-count-three" class="number-count d-block">0</span>
                <span class="academic d-inline-block">หลักสูตร</span>
            </div>


        </article>
        <span class="d-block mt-1">ข้อมูล ณ ปีการศึกษา 2562</span>
        <!--<a href="/th/faculty-bangkhen">
            <div class="more-btn header-box corner-green-light bg-black text-white d-inline-block header-box-animated">
                <i class="fa fa-arrow-up"></i>
                <span class="btn-text pr-3 d-flex align-items-center h-100">คณะและหลักสูตรทั้งหมด</span>
            </div>
        </a>-->
    </div>
</div>

</div>


<!-- Research -->
<div id="research-comp">
<div class="ku-research position-relative aos-init" data-aos="fade-up">
    <div class="wrapper">
    <article>
        <p>
            <span class="d-block achievement-text">ผลงานงานวิจัยและนวัตกรรม</span>
            <span class="d-block pt-2"><span class="number-count" style="font-size:6rem;">0</span> <span class="unit">ผลงาน</span></span>
        </p>
        <a href="/th/research-information">
            <div class="visit-btn header-box corner-green-light bg-black d-flex align-items-center header-box-animated header-box-animated-dark">
                <i class="fa fa-arrow-up"></i>
                <span class="text">เยี่ยมชมงานวิจัยทั้งหมด</span>
            </div>
        </a>
    </article>
    </div>
    <div class="bg-wrapper ku-check-webp webp"></div>
    <div class="bg-wrapper-2 ku-check-webp rellax webp" data-rellax-percentage="0.5" data-rellax-speed="-1"></div>
</div></div>

<div class="footer-section">
    <!-- Color decoration at the top -->
    <div class="d-flex">
        <div class="h-5px w-50 bg-green-light2"></div>
        <div class="h-5px w-50 bg-green"></div>
    </div>
      <!-- Link with icons -->

    <div class="icon-link position-relative d-flex justify-content-center align-items-center pt-4 pb-4 border-bottom">
        <!-- Slider menu container -->
        <div class="swiper-footer-icon-link-prev ml-2 mr-2 swiper-button-disabled swiper-button-lock" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8px" height="12px">
        <path fill-rule="evenodd" fill="rgb(0, 107, 103)" d="M6.487,12.000 L8.000,10.600 L3.027,6.000 L8.000,1.400 L6.487,0.000 L0.000,6.000 L6.487,12.000 Z"></path>
        </svg>
        </div>
        <div class="swiper-container swiper-footer-icon-link swiper-container-initialized swiper-container-horizontal">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper swiper-wrapper-center">
    <div class="border-right menu swiper-slide swiper-slide-active">
 <a class="d-flex align-items-center text-black" href="http://kucouncil.ku.ac.th/" target="_self">

      <span class="icon-podium mr-3">
              <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
              <!-- Generator: Adobe Illustrator 22.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

              <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 58.999998 94.000002" xml:space="preserve" sodipodi:docname="ic_footer1.svg" width="59" height="94" inkscape:version="0.92.4 (5da689c313, 2019-01-14)">
                <metadata id="metadata53">
                  <rdf:rdf><cc:work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type></cc:work></rdf:rdf>
                </metadata>
                <defs id="defs51"></defs>
                <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1378" inkscape:window-height="655" id="namedview49" showgrid="false" inkscape:zoom="0.35871243" inkscape:cx="-275.80844" inkscape:cy="47.050006" inkscape:window-x="2308" inkscape:window-y="180" inkscape:window-maximized="0" inkscape:current-layer="Layer_1"></sodipodi:namedview>
                <style type="text/css" id="style2">
                  .st0 {
                    fill: #b2bc35;
                  }
                </style>
                <g id="g46" transform="translate(-391.5,-250.7)">
                  <g id="g6">
                    <path class="st0" d="m 441.7,338.5 h -41.6 l -2.9,-52.3 h 47.5 z m -39.7,-2 h 37.8 l 2.7,-48.3 h -43.2 z" id="path4" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g10">
                    <path class="st0" d="m 446.5,344.7 h -51.2 v -8.2 h 51.2 z m -49.2,-2 h 47.2 v -4.2 h -47.2 z" id="path8" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g14">
                    <path class="st0" d="m 398.2,294.5 c -0.4,0 -1,0 -1.8,-0.2 l -0.6,-0.1 -4.3,-10 v -12.4 h 59 v 12.4 l -4.3,10 -0.6,0.1 c -2.5,0.4 -2.8,0 -3.1,-0.2 l -0.4,-0.3 v -0.5 l 2,0.1 c 0,-0.5 -0.4,-0.9 -0.6,-0.9 0.2,0 0.7,0 1.2,-0.1 l 3.7,-8.6 v -10 h -55 v 10 l 3.7,8.6 c 0.5,0.1 1,0.1 1.2,0.1 -0.2,0 -0.7,0.4 -0.6,0.9 l 2,-0.1 -0.3,0.9 c -0.1,0.1 -0.3,0.3 -1.2,0.3 z" id="path12" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g18">
                    <path class="st0" d="m 421.2,262.7 c -2.5,0 -4.5,-2 -4.5,-4.5 v -3 c 0,-2.5 2,-4.5 4.5,-4.5 2.5,0 4.5,2 4.5,4.5 v 3 c 0,2.5 -2,4.5 -4.5,4.5 z m 0,-10 c -1.4,0 -2.5,1.1 -2.5,2.5 v 3 c 0,1.4 1.1,2.5 2.5,2.5 1.4,0 2.5,-1.1 2.5,-2.5 v -3 c 0,-1.4 -1.1,-2.5 -2.5,-2.5 z" id="path16" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g22">
                    <rect x="420.20001" y="261.70001" class="st0" width="2" height="11.2" id="rect20" style="fill:#b2bc35"></rect>
                  </g>
                  <g id="g44">
                    <g id="g32">
                      <g id="g26">
                        <polygon class="st0" points="399.3,264 402.5,260.2 404,261.5 401.3,264.7 401.3,272.9 399.3,272.9 " id="polygon24" style="fill:#b2bc35"></polygon>
                      </g>
                      <g id="g30">
                        <path class="st0" d="m 406.1,262.6 c -0.5,0 -1,-0.1 -1.5,-0.3 v 0 c -2.3,-0.8 -3.5,-3.4 -2.7,-5.8 l 1,-2.8 c 0.4,-1.1 1.2,-2 2.3,-2.5 1.1,-0.5 2.3,-0.6 3.4,-0.2 1.1,0.4 2,1.2 2.5,2.3 0.5,1.1 0.6,2.3 0.2,3.4 l -1,2.8 c -0.7,2 -2.4,3.1 -4.2,3.1 z m -0.9,-2.1 c 1.3,0.5 2.7,-0.2 3.2,-1.5 l 1,-2.8 c 0.2,-0.6 0.2,-1.3 -0.1,-1.9 -0.3,-0.6 -0.8,-1.1 -1.4,-1.3 -0.6,-0.2 -1.3,-0.2 -1.9,0.1 -0.6,0.3 -1.1,0.8 -1.3,1.4 l -1,2.8 c -0.5,1.2 0.2,2.7 1.5,3.2 z" id="path28" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                      </g>
                    </g>
                    <g id="g42">
                      <g id="g36">
                        <polygon class="st0" points="440.8,264.7 438,261.5 439.5,260.2 442.8,264 442.8,272.9 440.8,272.9 " id="polygon34" style="fill:#b2bc35"></polygon>
                      </g>
                      <g id="g40">
                        <path class="st0" d="m 436,262.6 c -1.8,0 -3.6,-1.1 -4.2,-3 l -1,-2.8 c -0.4,-1.1 -0.4,-2.3 0.2,-3.4 0.5,-1.1 1.4,-1.9 2.5,-2.3 1.1,-0.4 2.3,-0.4 3.4,0.2 1.1,0.5 1.9,1.4 2.3,2.5 l 1,2.8 c 0.8,2.3 -0.4,4.9 -2.7,5.8 v 0 c -0.5,0.1 -1,0.2 -1.5,0.2 z m -1.1,-9.8 c -0.3,0 -0.6,0.1 -0.8,0.2 -0.6,0.2 -1.1,0.7 -1.4,1.3 -0.3,0.6 -0.3,1.3 -0.1,1.9 l 1,2.8 c 0.5,1.3 1.9,2 3.2,1.5 v 0 c 0.6,-0.2 1.1,-0.7 1.4,-1.3 0.3,-0.6 0.3,-1.3 0.1,-1.9 l -1,-2.8 c -0.2,-0.6 -0.7,-1.1 -1.3,-1.4 -0.3,-0.2 -0.7,-0.3 -1.1,-0.3 z" id="path38" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </span>
            <span class="icon-menu-name">
              <span class="d-block">สภามหาวิทยาลัย</span>
            </span>    </a>
</div>
    <div class="border-right menu swiper-slide swiper-slide-next">
 <a class="d-flex align-items-center text-black" href="/operation-plan-and-action-plan-of-ku/" target="_blank">

      <span class="icon-hat mr-3">
              <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
              <!-- Generator: Adobe Illustrator 22.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

              <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 70.499998 53.000001" xml:space="preserve" sodipodi:docname="ic_footer2.svg" width="70.5" height="53" inkscape:version="0.92.4 (5da689c313, 2019-01-14)">
                <metadata id="metadata35">
                  <rdf:rdf><cc:work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type></cc:work></rdf:rdf>
                </metadata>
                <defs id="defs33"></defs>
                <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1232" inkscape:window-height="623" id="namedview31" showgrid="false" inkscape:zoom="0.35871243" inkscape:cx="-269.60844" inkscape:cy="25.950006" inkscape:window-x="2529" inkscape:window-y="350" inkscape:window-maximized="0" inkscape:current-layer="Layer_1"></sodipodi:namedview>
                <style type="text/css" id="style2">
                  .st0 {
                    fill: #b2bc35;
                  }
                </style>
                <g id="g28" transform="translate(-385.3,-270.6)">
                  <g id="g6">
                    <path class="st0" d="m 420.1,306.5 -34.8,-19 34.8,-16.9 35.7,17.1 z m -30.4,-18.9 30.5,16.6 31.3,-16.5 -31.3,-15 z" id="path4" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g10">
                    <path class="st0" d="m 420.6,320.4 c -8.9,0 -22.2,-1.7 -22.2,-6.3 v -20 h 2 v 20 c 0,1.4 7.1,4.3 20.2,4.3 13.1,0 20.2,-2.8 20.2,-4.3 v -19.2 h 2 v 19.2 c 0,4.6 -13.2,6.3 -22.2,6.3 z" id="path8" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g14">
                    <path class="st0" d="m 420.6,314.7 c -8.9,0 -22.2,-1.7 -22.2,-6.3 h 2 c 0,1.4 7.1,4.3 20.2,4.3 13.1,0 20.2,-2.8 20.2,-4.3 h 2 c 0,4.7 -13.2,6.3 -22.2,6.3 z" id="path12" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g18">
                    <path class="st0" d="m 420.6,289.5 c -2.3,0 -4.1,-1.1 -4.1,-2.6 0,-1.5 1.8,-2.6 4.1,-2.6 2.3,0 4.1,1.1 4.1,2.6 0,1.5 -1.8,2.6 -4.1,2.6 z m -2.1,-2.5 c 0.2,0.2 0.9,0.6 2,0.6 1.1,0 1.9,-0.4 2,-0.6 -0.2,-0.2 -0.9,-0.6 -2,-0.6 -1.1,0 -1.8,0.4 -2,0.6 z" id="path16" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g22">
                    <path class="st0" d="m 448.1,323.6 c -1.9,0 -3.5,-1.6 -3.5,-3.5 0,-1.9 1.6,-3.5 3.5,-3.5 1.9,0 3.5,1.6 3.5,3.5 0,1.9 -1.5,3.5 -3.5,3.5 z m 0,-5 c -0.8,0 -1.5,0.7 -1.5,1.5 0,0.8 0.7,1.5 1.5,1.5 0.8,0 1.5,-0.7 1.5,-1.5 0,-0.8 -0.6,-1.5 -1.5,-1.5 z" id="path20" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g26">
                    <polygon class="st0" points="447.1,291.5 423.5,288 423.8,286 449.1,289.8 449.1,317.6 447.1,317.6 " id="polygon24" style="fill:#b2bc35"></polygon>
                  </g>
                </g>
              </svg>
            </span>
            <span class="icon-menu-name">
              <span class="d-block">แผนยุทธศาสตร์</span>
              <span class="d-block">และแผนปฏิบัติการ</span>
            </span>    </a>
</div>
    <div class="border-right menu swiper-slide">
 <a class="d-flex align-items-center text-black" href="http://webmail.ku.ac.th" target="_self">

      <span class="icon-earth mr-3">
              <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
              <!-- Generator: Adobe Illustrator 22.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

              <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 57.600573 57.6" xml:space="preserve" sodipodi:docname="ic_footer4.svg" width="57.600574" height="57.599998" inkscape:version="0.92.4 (5da689c313, 2019-01-14)">
                <metadata id="metadata35">
                  <rdf:rdf><cc:work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type></cc:work></rdf:rdf>
                </metadata>
                <defs id="defs33"></defs>
                <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="800" inkscape:window-height="480" id="namedview31" showgrid="false" inkscape:zoom="0.35871243" inkscape:cx="-275.90844" inkscape:cy="22.974509" inkscape:window-x="2234" inkscape:window-y="248" inkscape:window-maximized="0" inkscape:current-layer="Layer_1"></sodipodi:namedview>
                <style type="text/css" id="style2">
                  .st0 {
                    fill: #b2bc35;
                  }
                </style>
                <g id="g28" transform="translate(-391.6,-268.6)">
                  <g id="g6">
                    <path class="st0" d="m 420.4,326.2 c -15.9,0 -28.8,-12.9 -28.8,-28.8 0,-15.9 12.9,-28.8 28.8,-28.8 15.9,0 28.8,12.9 28.8,28.8 0.1,15.9 -12.9,28.8 -28.8,28.8 z m 0,-55.7 c -14.8,0 -26.8,12 -26.8,26.8 0,14.8 12,26.8 26.8,26.8 14.8,0 26.8,-12 26.8,-26.8 0,-14.8 -12,-26.8 -26.8,-26.8 z" id="path4" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g10">
                    <path class="st0" d="m 396.6,290.7 c -0.2,0 -0.5,0 -0.7,-0.1 -1.2,-0.4 -1.6,-1.6 -1.9,-2.3 l 1.9,-0.7 c 0.1,0.3 0.4,1 0.6,1.1 0.2,0.1 0.7,-0.2 1,-0.7 0.1,-0.2 0.3,-0.4 0.4,-0.7 0.3,-0.6 0.7,-1.2 1.3,-1.7 0.2,-0.2 0.4,-0.3 0.7,-0.5 0.3,-0.2 0.5,-0.3 0.6,-0.5 0,-0.1 0.1,-0.2 0.1,-0.3 0,-0.1 0.1,-0.3 0.2,-0.4 0.6,-1.3 1.9,-1.9 3,-2.3 h 0.1 c 0.7,-0.3 1.5,-0.7 1.6,-1.3 0,-0.1 0,-0.2 0,-0.2 0,-0.3 0,-0.8 0.3,-1.3 0.2,-0.3 0.4,-0.4 0.6,-0.5 l 0.1,-0.1 c 0.3,-0.3 0.3,-1 0.1,-1.6 -0.1,-0.2 -0.2,-0.4 -0.2,-0.6 -0.3,-0.7 -0.6,-1.6 -0.5,-2.5 l 2,0.2 c 0,0.5 0.2,1.1 0.4,1.7 0.1,0.2 0.2,0.5 0.3,0.7 0.5,1.6 0.3,3 -0.7,3.8 -0.1,0.1 -0.1,0.1 -0.2,0.2 0,0 0,0 -0.1,0.1 0,0.1 0,0.2 0,0.2 0,0.1 0,0.3 0,0.4 -0.1,1.2 -1.1,2.2 -2.8,2.9 l -0.1,0.1 c -0.8,0.3 -1.6,0.7 -1.9,1.2 0,0.1 -0.1,0.2 -0.1,0.2 -0.1,0.2 -0.1,0.4 -0.3,0.7 -0.3,0.6 -0.9,0.9 -1.3,1.2 -0.2,0.1 -0.3,0.2 -0.5,0.3 -0.3,0.3 -0.5,0.7 -0.8,1.1 -0.1,0.3 -0.3,0.5 -0.5,0.8 -0.7,0.7 -1.6,1.4 -2.7,1.4 z" id="path8" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g14">
                    <path class="st0" d="m 417,279.3 c -0.6,0 -1.1,-0.1 -1.6,-0.2 -0.2,0 -0.4,-0.1 -0.6,-0.1 -0.2,0 -0.4,0 -0.7,-0.1 -0.7,-0.1 -1.6,-0.1 -2.3,-0.5 -0.7,-0.4 -1.3,-1.1 -1.6,-1.8 -0.2,-0.6 -0.1,-1.3 0.2,-1.8 0.1,-0.2 0.2,-0.4 0.4,-0.5 0.1,-0.1 0.1,-0.2 0.2,-0.2 0,-0.1 0,-0.3 0,-0.4 l 0.2,-2.8 2,0.1 -0.2,2.8 c 0,0.3 0,0.7 -0.2,1.1 -0.1,0.3 -0.3,0.5 -0.5,0.7 -0.1,0.1 -0.1,0.1 -0.2,0.2 0,0.1 0,0.1 0,0.2 0.1,0.2 0.3,0.5 0.5,0.6 0.4,0.2 1,0.3 1.6,0.3 0.2,0 0.5,0 0.7,0.1 0.2,0 0.5,0.1 0.7,0.1 0.6,0.1 1.2,0.2 1.7,0.1 0.3,-0.1 0.5,-0.3 0.7,-0.5 0,-0.1 0.1,-0.1 0,-0.2 l -0.4,-1.1 1.2,-0.2 c 0.9,-0.1 1.8,-0.3 2.6,-0.6 0.7,-0.3 1.3,-0.8 1.4,-1.4 0.1,-0.3 0.3,-0.8 0.8,-1.1 0.4,-0.2 0.7,-0.2 0.9,-0.2 1.3,0 2.6,-0.5 3.6,-1.3 l 1.3,1.5 c -1.3,1.1 -3,1.8 -4.7,1.8 -0.4,1.1 -1.3,2 -2.5,2.6 -0.7,0.3 -1.5,0.5 -2.2,0.6 -0.1,0.2 -0.1,0.4 -0.3,0.7 -0.4,0.7 -1.2,1.2 -2,1.4 -0.1,0.1 -0.4,0.1 -0.7,0.1 z" id="path12" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g18">
                    <path class="st0" d="m 405.3,321.8 c -0.3,-1.6 -1,-3.1 -2,-4.3 l -0.1,-0.2 c -0.6,-0.7 -1.4,-1.6 -1.3,-2.9 0.1,-0.8 0.5,-1.4 0.9,-1.8 0.2,-0.2 0.3,-0.4 0.4,-0.6 0.2,-0.4 0.3,-1 0.3,-1.6 0.1,-0.6 0.1,-1.3 0,-1.8 -0.2,-0.8 -1,-1.5 -1.8,-2.2 -0.7,-0.6 -1.4,-1.2 -2,-2.1 -0.4,-0.5 -0.6,-1.1 -0.8,-1.7 -0.5,-1.1 -0.8,-1.8 -1.4,-2 -0.1,0 -0.2,-0.1 -0.3,-0.1 -0.3,-0.1 -0.6,-0.1 -0.9,-0.3 -1.3,-0.7 -1.3,-2.3 -1.3,-3.4 v -0.1 c 0,-0.9 -0.2,-1.5 -0.5,-1.9 -0.3,-0.3 -0.8,-0.5 -1.1,-0.3 l -1.1,-1.7 c 1.1,-0.7 2.8,-0.4 3.8,0.7 0.6,0.8 0.9,1.8 0.9,3.2 v 0.1 c 0,0.6 0,1.5 0.3,1.6 0.1,0 0.2,0.1 0.4,0.1 0.2,0 0.3,0.1 0.5,0.1 1.5,0.5 2.1,1.9 2.6,3.2 0.2,0.5 0.4,1 0.7,1.4 0.4,0.6 1,1.1 1.6,1.6 1,0.8 2.1,1.7 2.5,3.2 0.3,0.9 0.2,1.8 0.1,2.6 -0.1,0.7 -0.1,1.6 -0.6,2.4 -0.2,0.3 -0.4,0.6 -0.6,0.8 -0.2,0.3 -0.5,0.6 -0.5,0.8 0,0.4 0.4,0.9 0.8,1.3 l 0.1,0.2 c 1.3,1.5 2.1,3.3 2.5,5.3 z" id="path16" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g22">
                    <path class="st0" d="m 420.4,323 c 0,0 -0.1,0 0,0 -1.1,-0.1 -1.8,-1 -2,-2.4 -0.1,-1.3 -0.2,-2.7 -0.1,-4 0,-1 0.1,-2.1 1,-2.8 0.1,-0.1 0.3,-0.2 0.4,-0.3 0.1,0 0.2,-0.1 0.2,-0.2 0,-0.1 0,-0.3 0,-0.4 l 0.1,-3.2 c 0,-1.2 0.1,-2.2 -0.4,-3 -0.2,-0.4 -0.5,-0.6 -0.8,-0.7 -0.2,0 -0.4,-0.1 -0.6,-0.1 -0.1,0 -0.2,0 -0.4,0 -1.2,-0.1 -2.3,-0.5 -3.3,-0.9 -0.3,-0.1 -0.9,-0.3 -1.3,-0.8 -0.3,-0.5 -0.4,-1 -0.4,-1.3 0,-0.1 0,-0.2 0,-0.3 0,-0.2 -0.1,-0.4 -0.3,-0.6 -0.2,-0.3 -0.3,-0.7 -0.4,-1.1 -0.4,-2.1 1.6,-3.7 2.4,-4.2 l 3.6,-2.7 c 0.3,-0.2 0.6,-0.5 1,-0.6 1.3,-0.7 2.8,-0.4 3.8,-0.2 0.6,0.1 2.1,0.4 2.6,1.7 0.1,0.3 0.1,0.5 0.2,0.7 0,0.1 0,0.2 0.1,0.3 0,0.1 0.2,0.3 1,0.4 l 4.2,0.9 c 0.3,0.1 0.5,0.1 0.6,0.1 -0.1,-0.1 -0.2,-0.3 -0.2,-0.5 -0.3,-0.6 -0.7,-1.5 -0.1,-2.4 l 0.3,-0.4 2.7,-0.1 c 0,0 0,0 0.1,0 0.1,-0.6 -0.2,-1.3 -0.7,-1.7 -0.5,-0.4 -1.2,-0.5 -1.8,-0.2 -0.2,0.1 -0.2,0.1 -0.2,0.1 0,0 0,0.1 0,0.1 0,0.2 -0.1,0.3 -0.2,0.5 -0.5,1 -1.7,1.3 -2.7,1 -0.5,-0.1 -1,-0.4 -1.3,-0.6 -0.1,-0.1 -0.3,-0.2 -0.4,-0.2 -0.9,-0.5 -2,-0.7 -3.2,-0.8 -1.5,-0.2 -3.1,-0.5 -4.5,-1.5 -0.2,-0.2 -0.6,-0.5 -0.7,-1 -0.3,-1.1 0.5,-2 1.5,-2.3 0.9,-0.3 1.7,-0.2 2.5,-0.2 0.8,0 1.6,0.1 2.1,-0.2 0.3,-0.2 0.6,-0.4 0.9,-0.7 0.2,-0.1 0.3,-0.3 0.5,-0.4 1.4,-1.2 3.4,-1.8 5.2,-1.6 0.1,-0.6 0,-1 -0.2,-1.2 -0.2,-0.2 -0.9,-0.1 -1.4,0 l -0.3,0.1 c -1.6,0.2 -3.1,0 -4.6,-0.6 -0.2,-0.1 -0.9,-0.4 -1.1,-1.1 -0.1,-0.5 0,-0.9 0.1,-1.1 l 0.9,-2.1 0.3,-0.2 c 2.8,-1.8 6.7,-1.6 9.2,0.4 l 0.2,0.2 c 0.5,0.4 1.3,1.1 1.7,0.9 0.2,-0.1 0.3,-0.5 0.5,-0.8 l 0.1,-0.3 c 0.5,-1.2 1.4,-1.9 2.3,-1.8 l -0.1,2 c 0,0 -0.2,0.2 -0.3,0.5 l -0.1,0.2 c -0.2,0.6 -0.5,1.4 -1.3,1.8 -1.5,0.9 -3,-0.3 -3.9,-1.1 l -0.2,-0.2 c -1.8,-1.4 -4.5,-1.6 -6.6,-0.4 l -0.5,1.2 c 1.1,0.4 2.2,0.5 3.3,0.3 h 0.3 c 0.8,-0.1 2,-0.3 2.9,0.4 0.9,0.7 1.2,1.9 0.9,3.4 0,0.2 -0.1,0.7 -0.6,1.1 -0.5,0.4 -1.1,0.3 -1.4,0.3 -1.4,-0.2 -2.8,0.3 -3.9,1.1 -0.1,0.1 -0.3,0.2 -0.4,0.4 -0.4,0.3 -0.8,0.7 -1.3,1 -1,0.5 -2.2,0.5 -3.1,0.5 -0.6,0 -1.2,0 -1.7,0.1 0.9,0.5 2,0.7 3.2,0.9 1.3,0.2 2.6,0.4 3.8,1 0.2,0.1 0.3,0.2 0.5,0.3 0.3,0.2 0.6,0.4 0.8,0.4 0.2,0.1 0.3,0 0.4,0 0,0 0,-0.1 0,-0.1 0.1,-0.2 0.1,-0.3 0.2,-0.5 0.2,-0.4 0.6,-0.8 1.2,-1 1.2,-0.5 2.7,-0.3 3.8,0.5 1.1,0.8 1.6,2.2 1.4,3.6 -0.1,0.5 -0.3,0.9 -0.6,1.2 -0.5,0.4 -1,0.4 -1.3,0.4 l -1.2,0.1 c 0,0 0,0 0,0.1 0.3,0.6 0.7,1.5 0.2,2.4 -0.3,0.6 -1.1,1.2 -2.8,0.9 l -4.2,-0.9 c -0.6,-0.1 -2,-0.4 -2.5,-1.6 -0.1,-0.3 -0.2,-0.5 -0.2,-0.7 0,-0.1 0,-0.2 -0.1,-0.3 0,-0.1 -0.3,-0.3 -1.1,-0.5 -1,-0.2 -1.9,-0.3 -2.6,0 -0.2,0.1 -0.4,0.3 -0.7,0.4 l -3.6,2.7 c -1.2,0.9 -1.8,1.7 -1.6,2.3 0,0.2 0.1,0.4 0.3,0.6 0.2,0.3 0.3,0.7 0.4,1.1 0,0.2 0,0.3 0.1,0.5 0,0.1 0,0.3 0,0.4 0,0 0.2,0.1 0.3,0.1 0.9,0.3 1.8,0.7 2.7,0.7 h 0.3 c 0.3,0 0.7,0 1.1,0.1 0.8,0.2 1.5,0.8 2,1.7 0.7,1.3 0.7,2.9 0.6,4.1 l 0.1,2.9 c 0,0.4 0,1 -0.4,1.5 -0.2,0.3 -0.5,0.5 -0.8,0.7 -0.1,0 -0.1,0.1 -0.2,0.1 -0.3,0.2 -0.3,0.8 -0.3,1.4 0,1.3 0,2.5 0.1,3.8 0,0.2 0,0.3 0.1,0.4 0,0 0.1,-0.1 0.1,-0.1 1.6,-1.5 3.1,-3.1 4.5,-4.8 0.1,-0.2 0.3,-0.4 0.4,-0.6 0,-0.2 -0.1,-0.6 -0.2,-0.9 -0.2,-0.7 -0.5,-1.7 0.2,-2.6 0.7,-0.9 1.8,-0.8 2.6,-0.7 0.3,0 0.6,0 0.8,0 0.7,-0.1 1.3,-0.9 1.8,-1.7 0.3,-0.4 0.5,-0.8 0.6,-1.2 0.1,-0.6 -0.3,-1.2 -0.8,-2 -0.5,-0.8 -1,-1.6 -1.2,-2.7 -0.1,-1.1 0.4,-2.3 1.3,-2.9 1,-0.7 2.4,-0.7 3.4,0.1 0.7,0.6 1,1.4 1.2,2 0.1,0.2 0.2,0.5 0.3,0.7 0.2,0.5 0.6,0.8 1,0.9 0.1,0 0.3,0 0.4,-0.1 0.1,-0.1 0.1,-0.1 0.1,-0.2 0,-0.2 -0.3,-0.6 -0.6,-0.9 -0.4,-0.5 -0.9,-1 -1.1,-1.8 -0.2,-0.8 0,-1.6 0.6,-2.3 0.7,-0.8 1.7,-1.2 2.7,-1.1 1.3,0.1 2.6,1 3.6,2.4 0.7,0.9 1,1.8 1.2,2.6 0.2,1.6 -0.4,3 -1,4.3 -0.3,0.7 -0.6,1.3 -0.8,1.9 1.2,-0.2 2.3,-0.5 3.4,-0.9 l 0.7,1.9 c -1.3,0.5 -2.7,0.9 -4.2,1.1 -0.2,0 -0.7,0.1 -1.2,-0.1 -0.7,-0.4 -1,-1.2 -0.8,-2.2 0.2,-0.9 0.6,-1.6 0.9,-2.4 0.5,-1.1 1,-2.2 0.8,-3.2 -0.1,-0.5 -0.3,-1.1 -0.8,-1.7 -0.5,-0.7 -1.2,-1.5 -2.2,-1.6 -0.3,0 -0.8,0.1 -1,0.4 -0.1,0.1 -0.2,0.3 -0.2,0.5 0.1,0.3 0.3,0.6 0.6,0.9 0.5,0.6 1.2,1.3 1.1,2.3 0,0.6 -0.3,1.2 -0.9,1.6 -0.6,0.5 -1.3,0.7 -2,0.6 -1.1,-0.2 -2,-0.9 -2.5,-2 -0.1,-0.3 -0.2,-0.6 -0.3,-0.9 -0.2,-0.5 -0.3,-0.9 -0.5,-1.1 -0.2,-0.2 -0.6,-0.2 -0.9,0 -0.3,0.2 -0.5,0.7 -0.4,1.1 0.1,0.6 0.4,1.2 0.8,1.8 0.6,0.9 1.3,2 1.1,3.3 -0.1,0.8 -0.6,1.5 -0.9,2 -0.5,0.8 -1.5,2.3 -3.2,2.5 -0.4,0.1 -0.8,0 -1.2,0 -0.3,0 -0.7,-0.1 -0.8,0 0,0.1 0.1,0.6 0.2,0.8 0.2,0.5 0.4,1.2 0.2,1.9 -0.1,0.6 -0.5,1.1 -0.8,1.4 -1.4,1.8 -3,3.5 -4.7,5 -0.2,0.3 -0.7,0.8 -1.5,0.8 z m 14,-29.2 z" id="path20" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g26">
                    <path class="st0" d="m 422.2,286.8 c -0.1,0 -0.1,0 0,0 -1.1,0 -1.9,-0.7 -2.4,-1.1 -0.3,-0.3 -0.8,-0.6 -1,-1.2 -0.3,-0.8 0,-1.8 0.6,-2.4 0.5,-0.5 1.1,-0.8 1.6,-1 v 0.1 c 0.8,-0.1 1.5,0 2.2,0.1 0.2,0.1 0.5,0.1 0.8,0.3 0.4,0.3 0.6,0.7 0.7,1.3 0.2,0.9 0.1,1.8 -0.4,2.5 -0.3,0.9 -1.2,1.4 -2.1,1.4 z m -1,-3.6 c -0.2,0.1 -0.3,0.2 -0.4,0.3 -0.1,0.1 -0.2,0.3 -0.2,0.3 0,0.1 0.3,0.3 0.4,0.4 0.4,0.3 0.8,0.6 1.1,0.6 0.2,0 0.5,-0.2 0.6,-0.4 0.2,-0.3 0.2,-0.7 0.1,-1.1 0,0 0,0 0,0 v 0 c -0.5,-0.2 -1,-0.2 -1.6,-0.1 z m 1.7,0 z" id="path24" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                </g>
              </svg>
            </span>
            <span class="icon-menu-name">
              <span class="d-block">จดหมาย อิเล็กทรอนิกส์</span>
              <span class="d-block">เกษตรศาสตร์</span>
            </span>    </a>
</div>
    <div class="border-right menu swiper-slide">
 <a class="d-flex align-items-center text-black" href="http://ita.ku.ac.th" target="_self">

      <span class="icon-mouse mr-3">
              <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
              <!-- Generator: Adobe Illustrator 22.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

              <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 64.800001 65.6" xml:space="preserve" sodipodi:docname="ic_footer3.svg" width="64.800003" height="65.599998" inkscape:version="0.92.4 (5da689c313, 2019-01-14)">
                <metadata id="metadata31">
                  <rdf:rdf><cc:work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type></cc:work></rdf:rdf>
                </metadata>
                <defs id="defs29"></defs>
                <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="800" inkscape:window-height="480" id="namedview27" showgrid="false" inkscape:zoom="2.0291839" inkscape:cx="-12.873699" inkscape:cy="50.667662" inkscape:window-x="2428" inkscape:window-y="447" inkscape:window-maximized="0" inkscape:current-layer="Layer_1"></sodipodi:namedview>
                <style type="text/css" id="style2">
                  .st0 {
                    fill: #b2bc35;
                  }
                </style>
                <g id="g24" transform="translate(-388.1,-264.3)">
                  <g id="g6">
                    <path class="st0" d="m 442.9,327.2 h -12.5 c -5.5,0 -9.9,-4.5 -9.9,-9.9 v -19.1 c 0,-8.7 7.1,-15.9 15.9,-15.9 h 1.3 c 8.4,0 15.2,6.8 15.2,15.2 v 19.8 c 0,5.4 -4.5,9.9 -10,9.9 z m -6.5,-42.8 c -7.6,0 -13.7,6.2 -13.7,13.7 v 19.1 c 0,4.3 3.5,7.8 7.8,7.8 H 443 c 4.3,0 7.8,-3.5 7.8,-7.8 v -19.8 c 0,-7.2 -5.9,-13.1 -13.1,-13.1 h -1.3 z" id="path4" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g10">
                    <path class="st0" d="m 401.7,329.9 h -1.8 c -5,0 -9.1,-4.1 -9.1,-9.1 v -11.2 h 2 v 11.2 c 0,3.9 3.2,7.1 7.1,7.1 h 1.8 c 3.9,0 7.1,-3.2 7.1,-7.1 v -43.4 c 0,-7.2 5.9,-13.1 13.1,-13.1 h 2.7 c 7.2,0 13.1,5.9 13.1,13.1 v 6.2 h -2 v -6.2 c 0,-6.1 -5,-11.1 -11.1,-11.1 h -2.7 c -6.1,0 -11.1,5 -11.1,11.1 v 43.4 c 0,5 -4.1,9.1 -9.1,9.1 z" id="path8" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g14">
                    <polygon class="st0" points="388.1,305.5 390.1,305.5 390.1,308.6 392.7,308.6 392.7,305.5 394.7,305.5 394.7,310.6 388.1,310.6 " id="polygon12" style="fill:#b2bc35"></polygon>
                  </g>
                  <g id="g18">
                    <polygon class="st0" points="422,299 422,298 452.1,298 452.1,300 422,300 " id="polygon16" style="fill:#b2bc35"></polygon>
                  </g>
                  <g id="g22">
                    <rect x="435.70001" y="292.70001" class="st0" width="2" height="12" id="rect20" style="fill:#b2bc35"></rect>
                  </g>
                </g>
              </svg>
            </span>
            <span class="icon-menu-name">
              <span class="d-block">KU ITA</span>
              <span class="d-block">คุณธรรมความโปร่งใส</span>
            </span>    </a>
</div>
    <div class="menu swiper-slide">
 <a class="d-flex align-items-center text-black" href="/related-links" target="_self">

      <span class="icon-chain mr-3">
              <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
              <!-- Generator: Adobe Illustrator 22.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

              <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 57.931826 51.762147" xml:space="preserve" sodipodi:docname="ic_footer6.svg" width="57.931828" height="51.762146" inkscape:version="0.92.4 (5da689c313, 2019-01-14)">
                <metadata id="metadata23">
                  <rdf:rdf><cc:work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type></cc:work></rdf:rdf>
                </metadata>
                <defs id="defs21"></defs>
                <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="800" inkscape:window-height="480" id="namedview19" showgrid="false" inkscape:zoom="0.35871243" inkscape:cx="-276.29253" inkscape:cy="26.050006" inkscape:window-x="2325" inkscape:window-y="238" inkscape:window-maximized="0" inkscape:current-layer="Layer_1"></sodipodi:namedview>
                <style type="text/css" id="style2">
                  .st0 {
                    fill: #b2bc35;
                  }
                </style>
                <g id="g12" transform="translate(-391.98409,-271.93785)">
                  <g id="g6">
                    <path class="st0" d="m 402.8,323.7 c -0.3,0 -0.6,0 -0.9,0 -2.5,-0.2 -4.8,-1.4 -6.4,-3.4 l -1.3,-1.5 c -3.4,-4 -2.8,-10 1.2,-13.4 l 12.3,-10.2 c 4,-3.3 10,-2.8 13.4,1.2 l 1.3,1.5 c 1.6,1.9 2.4,4.4 2.1,6.9 -0.2,2.5 -1.4,4.8 -3.4,6.4 l -0.6,-0.8 0.6,0.8 -12.3,10.2 c -1.7,1.5 -3.8,2.3 -6,2.3 z m 11,-28.8 c -1.8,0 -3.4,0.6 -4.8,1.7 l -12.3,10.2 c -3.2,2.6 -3.6,7.4 -1,10.6 l 1.3,1.5 c 1.3,1.5 3.1,2.5 5.1,2.7 2,0.2 3.9,-0.4 5.5,-1.7 l 12.3,-10.2 c 3.2,-2.6 3.6,-7.4 1,-10.6 l -1.3,-1.5 c -1.3,-1.5 -3.1,-2.5 -5.1,-2.7 -0.2,0.1 -0.5,0 -0.7,0 z" id="path4" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                  <g id="g10">
                    <path class="st0" d="m 428.2,302.6 c -2.7,0 -5.4,-1.2 -7.3,-3.4 l -1.3,-1.5 c -3.4,-4 -2.8,-10 1.2,-13.4 l 12.3,-10.2 c 1.9,-1.6 4.4,-2.4 6.9,-2.1 2.5,0.2 4.8,1.4 6.4,3.4 l 1.3,1.5 c 3.4,4 2.8,10 -1.2,13.4 l -12.3,10.2 c -1.7,1.4 -3.9,2.1 -6,2.1 z m 11,-28.8 c -1.8,0 -3.4,0.6 -4.8,1.7 l -12.3,10.2 c -1.5,1.3 -2.5,3.1 -2.7,5.1 -0.2,2 0.4,4 1.7,5.5 l 1.3,1.5 c 2.6,3.2 7.4,3.6 10.6,1 l 12.3,-10.2 c 3.2,-2.6 3.6,-7.4 1,-10.6 l -1.3,-1.5 c -1.3,-1.5 -3.1,-2.5 -5.1,-2.7 -0.3,0 -0.5,0 -0.7,0 z" id="path8" inkscape:connector-curvature="0" style="fill:#b2bc35"></path>
                  </g>
                </g>
                <g id="g16" transform="translate(-391.98409,-271.93785)">
                  <rect x="412" y="296.79999" transform="matrix(0.7686,-0.6397,0.6397,0.7686,-93.0736,338.2054)" class="st0" width="18" height="2" id="rect14" style="fill:#b2bc35"></rect>
                </g>
              </svg>
            </span>
            <span class="icon-menu-name pl-2">
              <span class="d-block">ลิงก์ด่วน</span>
            </span>    </a>
</div>


            </div>
            <!-- If we need navigation buttons -->
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <div class="swiper-footer-icon-link-next ml-2 mr-2 swiper-button-disabled swiper-button-lock" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8px" height="12px">
             <path fill-rule="evenodd" fill="rgb(0, 107, 103)" d="M1.513,-0.001 L-0.000,1.399 L4.973,6.000 L-0.000,10.599 L1.513,11.999 L8.000,6.000 L1.513,-0.001 Z"></path>
         </svg>
    </div>
    </div>

    <!-- Info links -->


    <div class="info-links">
        <nav class="d-flex flex-wrap justify-content-start ml-auto mr-auto mt-5">
            <div class="mb-3">
                <span class="d-block link-group pl-3 arrow-tip-bullet">รอบรั้วมหาวิทยาลัย</span>
                <div class="d-flex flex-wrap">
                    <ul class="no-bullets pl-3 pr-3">
                        <li><a href="/th/landmark">สถานที่สำคัญ</a></li>
                        <li><a href="/th/learning-resources">แหล่งเรียนรู้</a></li>
                        <li><a href="/th/facility">สิ่งอำนวยความสะดวก</a></li>
                        <li><a href="/th/sports-and-health">กีฬาและสุขภาพ</a></li>
                        <li><a href="/th/ku-products">ผลิตภัณฑ์ มก.</a></li>
                    </ul>
                </div>
            </div>
            <div class="mb-3">
                <span class="d-block link-group pl-3 arrow-tip-bullet">ข้อมูลทั่วไป</span>
                <ul class="no-bullets pl-3">
                <li><a href="https://login.ku.ac.th/">การเข้าใช้อินเตอร์เน็ต</a></li>
                    <li><a href="/th/instructions-for-using-email">ข้อปฏิบัติในการใช้ e-mail มก.</a></li>

                    <!--<li><a href="/th/academic-knowledge">องค์ความรู้ทางวิชาการ</a></li>-->
                    <li><a href="http://live.ku.ac.th/" target="_blank">ถ่ายทอดสด</a></li>
                    <!--<li><a href="/th/event-calendar" >ปฏิทินกิจกรรม</a></li>-->
                    <li><a href="https://ocs.ku.ac.th/ku_computer_policy/Cyber/" target="_blank"><span class="">นโยบายการใช้งานเครือข่าย มก.</span></a></li>
                    <li><a href="https://ocs.ku.ac.th/ku_computer_policy/Cyber/policy/dataprivacy.pdf" target="_blank"><span class="">นโยบายคุ้มครองข้อมูลส่วนบุคคล</span></a></li>
                    <!--<li><a href="#">ดูทั้งหมด</a></li>-->


                </ul>
            </div>
            <div class="mb-3">
                <span class="d-block link-group pl-3 arrow-tip-bullet">ลิงก์ที่เกี่ยวข้อง</span>
                <ul class="no-bullets pl-3">
                <!--<li><a href="/th/phone-number">โทรฉุกเฉิน</a></li>-->
                    <li><a href="/th/phone-number">หมายเลขโทรศัพท์</a></li>
                    <li><a href="/th/related-links">ลิงก์ด่วน</a></li>
                    <li><a href="/th/car-service-routes-in-maha-vickya-sai">แผนที่ มก.</a></li>
                    <li><a href="/th/sitemap">แผนผังเว็บไซต์</a></li>
                   	<li>
                      <a href="https://www2.ku.ac.th" target="_blank">เว็บไซต์เดิม</a>
                    </li>
                  <!--<li><a href="#">ดูทั้งหมด</a></li>-->

                </ul>
            </div>
            <div class="mb-3">
                <span class="d-block link-group pl-3 arrow-tip-bullet">วิทยาเขต</span>
                <ul class="no-bullets pl-3">
                <li><a href="/th/faculty-bangkhen">บางเขน</a></li>
                    <li><a href="/th/faculty-kamphaeng-saen-campus">วิทยาเขตกําแพงแสน</a></li>
                    <li><a href="/th/faculty-chalermphakiet-campus-sakon-nakhon"><span class="d-block">วิทยาเขตเฉลิมพระเกียรติ</span>จังหวัดสกลนคร</a></li>
                    <li><a href="/th/faculty-sriracha-campus">วิทยาเขตศรีราชา</a></li>
                    <li><a href="/th/faculty-suphanburi-campus-establishment-project">โครงการจัดตั้งวิทยาเขตสุพรรณบุรี</a></li>
                    <!--<li><a href="/th/associate-institution">สถาบันสมทบ</a></li>-->




                    <!--<li><a href="#">ดูทั้งหมด</a></li>-->

                </ul>
            </div>


        </nav>
    </div>

    <!-- End Info links -->

  <!-- Subscription and other home links -->
  <div class="subscription-n-home-links">
    <div class="bg-wrapper d-flex">
      <div></div>
      <div></div>
    </div>

    <div class="content-wrapper">
      <!-- subscription -->
      <a href="http://pr.ku.ac.th/web_new/prkunews63/main63.html" class="news-letter" target="_blank">
        <div class="m-3">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="51px" height="39px">
            <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M47.442,39.000 L3.558,39.000 C1.596,39.000 -0.000,37.399 -0.000,35.431 L-0.000,3.578 C-0.000,1.609 1.596,0.008 3.558,0.008 L47.442,0.008 C49.404,0.008 51.000,1.609 51.000,3.578 L51.000,35.431 C51.000,37.399 49.404,39.000 47.442,39.000 ZM49.814,3.578 C49.814,2.265 48.750,1.198 47.442,1.198 L3.558,1.198 C2.250,1.198 1.186,2.265 1.186,3.578 L1.186,35.431 C1.186,36.743 2.250,37.810 3.558,37.810 L47.442,37.810 C48.750,37.810 49.814,36.743 49.814,35.431 L49.814,3.578 ZM34.066,22.434 L34.917,21.606 L47.963,35.090 L47.112,35.919 L34.066,22.434 ZM3.178,4.034 L3.939,3.121 L25.540,21.238 L46.262,3.129 L47.041,4.026 L25.556,22.802 L3.178,4.034 ZM17.030,22.434 L3.984,35.919 L3.132,35.090 L16.179,21.606 L17.030,22.434 Z"></path>
          </svg>
        </div>
        <article class="d-inline-block">
          <div class="link-name">จดหมายข่าวชาวเกษตร</div>
          <div class="link-desc">
            คุณสามารถติดตามจดหมายข่าวชาวม.เกษตรได้ที่นี่          </div>
        </article>
      </a>

      <!-- Other Home Links -->
      <!-- Other Home Links -->
      <div class="home-links">


        <a href="/th/newcomer-home" class="home-link newcomer-link ku-check-webp webp">
          <div class="bg-wrapper"><div></div></div>
          <div class="text-link">
            <span>newcomer</span>
            <span>zone</span>
          </div>
        </a>

        <a href="/th/partner-home" class="home-link partner-link ku-check-webp webp">
          <div class="bg-wrapper"><div></div></div>
          <div class="text-link">
            <span>partner</span>
            <span>zone</span>
          </div>
        </a>
      </div>



      <!-- Note -->
      <a href=" https://www.youtube.com/channel/UC1Lx-uL4ln8JXEdTDxep7GA" class="chancellor-letter" target="_blank">
        <div class="m-3">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="43px" height="43px">
            <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M42.050,5.957 L13.787,35.808 L13.648,35.677 L5.029,39.984 L8.845,31.157 L8.706,31.027 L36.969,1.175 C37.607,0.501 38.474,0.115 39.409,0.088 C40.337,0.053 41.230,0.397 41.907,1.033 C43.307,2.352 43.371,4.560 42.050,5.957 ZM7.574,37.295 L12.665,34.752 L9.828,32.082 L7.574,37.295 ZM10.502,30.975 L13.735,34.017 L35.821,10.690 L32.588,7.648 L10.502,30.975 ZM33.460,6.726 L36.693,9.769 L38.269,8.105 L35.036,5.062 L33.460,6.726 ZM41.035,1.955 C40.144,1.115 38.734,1.156 37.893,2.045 L35.908,4.141 L39.141,7.183 L41.125,5.087 C41.966,4.199 41.926,2.793 41.035,1.955 ZM6.864,7.611 L23.378,7.611 L23.378,8.878 L6.864,8.878 L6.864,7.611 ZM6.864,15.738 L6.864,14.471 L20.177,14.471 L20.177,15.738 L6.864,15.738 ZM6.864,10.988 L23.378,10.988 L23.378,12.255 L6.864,12.255 L6.864,10.988 ZM28.857,3.795 C28.857,2.398 27.718,1.262 26.316,1.262 L3.818,1.262 C2.417,1.262 1.278,2.398 1.278,3.795 L1.278,39.194 C1.278,40.591 2.417,41.727 3.818,41.727 L26.316,41.727 C27.718,41.727 28.857,40.591 28.857,39.194 L28.857,23.653 L30.127,23.653 L30.127,39.194 C30.127,41.289 28.418,42.994 26.316,42.994 L3.818,42.994 C1.717,42.994 0.008,41.289 0.008,39.194 L0.008,3.795 C0.008,1.700 1.717,-0.004 3.818,-0.004 L26.316,-0.004 C28.418,-0.004 30.127,1.700 30.127,3.795 L30.127,7.189 L28.857,7.189 L28.857,3.795 Z"></path>
          </svg>
        </div>
        <article class="d-inline-block">
          <div class="link-name">KU Channel</div>
        </article>
      </a>
    </div>
  </div>


  <!-- Footer of Footer (social)-->
  <div class="fin">
    <div class="content-wrapper d-flex">
    <a href="/th/community-home" class="ku-logo"></a>
      <div class="link-content text-white mr-2">
        <!-- Contact info -->
        <div class="contact-info d-flex align-items-center">
          เลขที่ 50 ถนนงามวงศ์วาน แขวงลาดยาว เขตจตุจักร กรุงเทพฯ 10900&nbsp;
          <span class="tel-num">โทรศัพท์ +66 (0) 2942 8200-45</span>
        </div>

        <!-- Social contact links -->
        <div class="social-section d-flex  ">
          <div class="social-button-small facebook">
            <a href="https://www.facebook.com/KasetsartUniversity" target="_blank"><i class="fab fa-facebook-f"></i></a>
          </div>
          <div class="social-button-small twitter">
            <a href="https://twitter.com/kasetsart_ku?s=09" target="_blank"><i class="fab fa-twitter"></i></a>
          </div>
          <div class="social-button-small pinterest">
            <a href="https://www.instagram.com/kasetsart_ku/" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
     <!--     <div class="social-button-small fb-msg">
            <a href="#" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
          </div>-->
          <div class="social-button-small youtube">
            <a href="https://www.youtube.com/channel/UC1Lx-uL4ln8JXEdTDxep7GA" target="_blank"><i class="fab fa-youtube"></i></a>
          </div>

          <div class="social-button-small">
            <a href="mailto:www@ku.ac.th"><i class="fas fa-envelope"></i></a>
          </div>
        </div>

        <!-- License -->
        <div class="ku-license">
         สงวนลิขสิทธิ์ © 2020 มหาวิทยาลัยเกษตรศาสตร์        </div>

        <!-- Usage Plicy -->
        <ul class="web-usage-policy no-bullets d-flex justify-content-center pl-0 mb-0">
          <li class="ml-3 mr-3">
            <a href="/th/website-policy">เงื่อนไขการใช้งานเว็บไซต์</a>
          </li>
          <li class="ml-3 mr-3"><a href="/th/secure-policy">ข้อตกลงด้านสิทธิ์ใช้งาน</a></li>
          <!-- <li class="ml-3"><a href="/th/personal-policy">นโยบายความเป็นส่วนตัว</a></li> -->
        </ul>
      </div>
    </div>
  </div>


</div>

<style>
.cookie-policy {
    position: fixed;
    bottom: 0;
    background-color: #ffff;
    z-index: 9999;
    font-size: 1.3rem;
    border-top: solid 4px #006664;
    color: #006664;
}

.cookie-policy button {
	font-size: 1.2rem;
}

.cookie-policy a {
    text-decoration: underline;
    color: #b2bb1c;
}
</style>
<div class="cookie-policy row col-12 m-0 p-0" style="display: none;">
    <div class="container-fluid content-wrapper d-flex justify-content-start justify-content-md-between align-items-center py-2 flex-column flex-md-row">
    <div>
    เราใช้คุกกี้ในการให้บริการและปรับปรุงบริการของเรา ตลอดจนเพิ่มประสิทธิภาพให้แก่ประสบการณ์การเรียกดูข้อมูลของคุณ หากคุณใช้งานเว็ปไซต์ของเราต่อ ถือว่าคุณยินยอมให้มีการใช้งานคุกกี้    </div>
    <a href="/th/cookies">เรียนรู้เพิ่มเติมที่นี่</a>
    <button id="btn-accept-cookie" type="button" class="btn btn-sm bg-green text-white px-3 py-1">ยอมรับ</button>
    </div>
</div>
<script src="/assets/vendor/jquery/jquery-3.4.1.min.js"></script>
<script defer="" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"
        defer></script> -->

<script defer="" src="/assets/vendor/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script defer="" src="https://unpkg.com/swiper@5.3.8/js/swiper.min.js"></script>
<script defer="" src="/assets/js/vendor/anime.min.js" type="text/javascript"></script>
<script defer="" src="/assets/js/components/header.js" type="text/javascript"></script>
<script defer="" src="/assets/js/components/footer.js" type="text/javascript"></script>


<!-- Script for home -->
<script defer="" src="/assets/js/components/news-and-activities.js" type="text/javascript"></script>
<script defer="" src="/assets/js/components/research.bundle.js" type="text/javascript"></script>
<script defer="" src="/assets/js/home/home.js" type="text/javascript"></script>
<script defer="" src="/assets/js/components/bus-station.js" type="text/javascript"></script>
<script defer="" src="/assets/js/components/hero-banner.js" type="text/javascript"></script>
<script defer="" src="/assets/js/vendor/rellax.min.js" type="text/javascript"></script>
<script defer="" src="/assets/js/components/fac-n-cur.bundle.js" type="text/javascript"></script>

<script defer="" src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    (function() {
        window.addEventListener("load", function() {
            setTimeout(function() {
                //Fix KU letter size problem which distort herobanner display //
                var target = document.querySelector('.around-uni.bus-station .ku.small');
                if (target) {
                    target.classList.remove('small');
                }
            }, 500);

            AOS.init();
        });
    })();
</script>


<!-- Modernizr checking webp -->
<script src="/assets/js/vendor/modernizr-webp.js" type="text/javascript" defer=""></script>
<script>
    (function() {

        window.addEventListener("load", function() {
            const mediaGallery = document.querySelector('.media-gallery-swiper');
            if(mediaGallery){
            	const mediaGallerySwiper = new Swiper('.media-gallery-swiper', {
            		    navigation: {
            		      nextEl: '.swiper-button-next',
            		      prevEl: '.swiper-button-prev'
            		    }
            	});
            }

        	setKuFZ();
        	//setFeedback();

            setTimeout(function() {
                //Check webp support//
                var kuCheckWebpElList = document.querySelectorAll(".ku-check-webp");
                if (!kuCheckWebpElList.length) {
                    return;
                }
                Modernizr.on(
                    "webp",
                    function(result) {
                        var kuIfWebpClass;
                        if (result) {
                            // supported
                            kuIfWebpClass = "webp";
                        } else {
                            // not-supported
                            kuIfWebpClass = "no-webp";
                        }
                        for (var i = 0; i < kuCheckWebpElList.length; i++) {
                            kuCheckWebpElList[i].classList.add(kuIfWebpClass);
                        }
                    }
                );
            }, 500);

        });
    })();

   $( document ).ready(function() {
        $('.set-ku-fz').click(function(){
            $('.set-ku-fz').removeClass('active');
            $(this).addClass('active');
            $('html').removeClass('ku-fz-sm ku-fz-md ku-fz-lg');
            $('html').addClass($(this).attr('name'));
            localStorage.setItem("ku-fz", $(this).attr('name'));
        });

        var input = document.getElementById("header-search-input");
        if(input){
          input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                location.href = '/th/search?keySearch='+encodeURIComponent(input.value);
            }
        });
        }

        checkAcceptCookie();
    });

    function setKuFZ(){
                if(localStorage.getItem("ku-fz"))
            {
                let _kufz =localStorage.getItem("ku-fz");
                $('.set-ku-fz').removeClass('active');
                $('.set-ku-fz[name='+_kufz+']').addClass('active');
                $('html').removeClass('ku-fz-sm ku-fz-md ku-fz-lg');
                $('html').addClass(_kufz);
                localStorage.setItem("ku-fz", _kufz);
            }else{
                $('.set-ku-fz').removeClass('active');
                $('.set-ku-fz [name=ku-fz-md]').addClass('active');
                $('html').removeClass('ku-fz-sm ku-fz-md ku-fz-lg');
                $('html').addClass("ku-fz-md");
                localStorage.setItem("ku-fz", "ku-fz-md");
            }

    }

    function checkAcceptCookie(){
    	var section = document.querySelector('.cookie-policy');
		if(localStorage.getItem("ku-cookie-accepted")){
			section.style.display = 'none';
		}else{
			section.style.display = 'flex';
			var button = document.getElementById('btn-accept-cookie');
			button.addEventListener('click',function(){
				localStorage.setItem("ku-cookie-accepted", 1);
				section.style.display = 'none';
			});
		}
    }

</script>

<script type="text/javascript">
(function(){
	var id="arzokq4xru6xfo2rk1yd6e1l2ro2pmmxhsv";
	var js=document.createElement("script");
	js.setAttribute("type","text/javascript");
	js.setAttribute("src","//deploy.mopinion.com/js/pastease.js");
	document.getElementsByTagName("head")[0].appendChild(js);
	var t=setInterval(function(){try{new Pastease.load(id);
	clearInterval(t)}catch(e){}},50);
	document.addEventListener('mopinion_will_show', function(e) {
		var iframe = document.getElementById('surveyWindow');
		var idoc = iframe.contentDocument;
		var branding = idoc.getElementById('branding');
		if(branding){
			branding.style.display="none";
		}else{
			var css=idoc.createElement('style');
			css.append('#branding {display:none;}');
			idoc.head.appendChild(css);
		}
	});

})();
</script>



<div id="surveyContent"><div><div data-mop-page-url="https://www.ku.ac.th/th/community-home"><div class="mopinion-survey-content" data-mop-form-type="modal"><button type="button" id="" class="btn-open-survey btn btn-primary tab tab-right survey-minty-green allow-button  " data-button-for="c09bc2dfbfbb8f6e40b0cb283319c7fd992f8e28" tabindex="0" style="opacity: 1; visibility: visible;"><i class="mopicon mopicon-commenting-o " aria-hidden="true" icon="fa-commenting-o"><svg viewBox="0 0 28 28"><path d="M10 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM16 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM22 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM14 6c-6.5 0-12 3.656-12 8 0 2.328 1.563 4.547 4.266 6.078l1.359 0.781-0.422 1.5c-0.297 1.109-0.688 1.969-1.094 2.688 1.578-0.656 3.016-1.547 4.297-2.672l0.672-0.594 0.891 0.094c0.672 0.078 1.359 0.125 2.031 0.125 6.5 0 12-3.656 12-8s-5.5-8-12-8zM28 14c0 5.531-6.266 10-14 10-0.766 0-1.531-0.047-2.266-0.125-2.047 1.813-4.484 3.094-7.187 3.781-0.562 0.156-1.172 0.266-1.781 0.344h-0.078c-0.313 0-0.594-0.25-0.672-0.594v-0.016c-0.078-0.391 0.187-0.625 0.422-0.906 0.984-1.109 2.109-2.047 2.844-4.656-3.219-1.828-5.281-4.656-5.281-7.828 0-5.516 6.266-10 14-10v0c7.734 0 14 4.484 14 10z" fill="currentColor"></path></svg></i><span>Feedback</span></button></div></div></div></div><div></div><div class="mopinion-survey-content" data-mop-form-type="modal"><div id="surveyWindowWrap" class="surveyWindowWrap " data-parent-for="c09bc2dfbfbb8f6e40b0cb283319c7fd992f8e28" style="position: fixed; z-index: -1; backface-visibility: hidden; transition: transform 0.3s ease 0s, visibility 0.225s ease 0s; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow-y: auto; width: 100%; min-height: 100%; visibility: hidden; pointer-events: none;"><iframe id="surveyWindow" class="surveyWindow " tabindex="-1" title="แบบประเมินเว็บไซต์ใหม่ feedback form" allowtransparancy="true" frameborder="false" style="width: 40%; height: 0px; border: none; border-radius: 2px; background: rgb(255, 255, 255); transition: transform 0.225s ease 0s, opacity 0.225s ease 0s, height 0.175s ease 0s; overflow: hidden; will-change: height; position: absolute; top: 50px; left: 0px; right: 0px; margin-left: auto; margin-right: auto; max-width: 480px; margin-bottom: 50px; box-shadow: rgba(0, 0, 0, 0.2) 0px 8px 17px 0px; transform: scale(0.95); opacity: 0;"></iframe><div></div></div></div><div data-mask-for="c09bc2dfbfbb8f6e40b0cb283319c7fd992f8e28" class="mopinion-survey-mask  " id="surveyMask" style="pointer-events: none; opacity: 0; visibility: hidden; transition: opacity 0.225s ease 0s, visibility 0.225s ease 0s; z-index: -1;"></div></body></html>
