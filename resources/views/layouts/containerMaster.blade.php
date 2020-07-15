<head>
   
    <title>@yield('title')</title>
</head>
<body>
  <div id="sub-menu-overlay" class="collapse"></div>
  </div><header class="app-breadcrumb-holder">
    <div class="container">
        <h1>@yield('topicHeader')</h1>

      <div class="app-breadcrumb">
        <div class="d-flex flex-wrap container px-0">

            @yield('app-breadcrumb')


        </div>
      </div>

    </div>
  </header>
  <div id="cms-detail" class="mpage-container">
@yield('content')
  <div class="container">
    <!--Attach File-->
    <div class="row sec-attach-files mt-5 pb-2">

        </div>
    <!--Attach File End-->
  <section id="section-social-stats" class="container-fluid">
    <div class="row">
        <div class="share-box mt-4 col-12 px-0">
          <div class="d-flex flex-wrap border-bottom pb-2 mb-3">

            {{-- <div class="fb-like icon-count d-flex fb_iframe_widget" data-href="http://158.108.216.45/th/faculty-of-science-and-engineering" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=2867254383361033&amp;container_width=0&amp;href=http%3A%2F%2F158.108.216.45%2Fth%2Ffaculty-of-science-and-engineering&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;size=large"><span style="vertical-align: bottom; width: 78px; height: 28px;"><iframe name="f31e4d3670abf5c" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v6.0/plugins/like.php?action=like&amp;app_id=2867254383361033&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Df188b36be3c53f4%26domain%3D158.108.216.45%26origin%3Dhttp%253A%252F%252F158.108.216.45%252Ff29eb848b78642%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2F158.108.216.45%2Fth%2Ffaculty-of-science-and-engineering&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;size=large" style="border: none; visibility: visible; width: 78px; height: 28px;" class=""></iframe></span></div> --}}

            <div class="icon-count">
              <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" fill="#74787b"></path>
    </svg>            <span class="counter counter-views">48</span>
            </div>

            <div class="mr-4 icon-count">
              <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
      <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b"></path>
      <path d="M0 0h24v24H0z" fill="none"></path>
    </svg>            <span class="counter counter-shares">3</span>
            </div>
            <div class="mt-2 mt-md-0">
            <div class="addthis_inline_share_toolbox_cnj8" data-url="http://158.108.216.45/th/faculty-of-science-and-engineering#" data-title="KU | มหาวิทยาลัยเกษตรศาสตร์ รอบรั้วชาวนนทรี" data-description="Kasetsart University is a public research university in Bangkok, Thailand" style="clear: both;"><div id="atstbx2" class="at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show" aria-labelledby="at-0b26acce-0f1f-4956-a535-6b2d9ab03779" role="region"><span id="at-0b26acce-0f1f-4956-a535-6b2d9ab03779" class="at4-visually-hidden">AddThis Sharing Buttons</span><div class="at-share-btn-elements"><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: rgb(59, 89, 152); border-radius: 38px;"><span class="at4-visually-hidden">Share to Facebook</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;"><title id="at-svg-facebook-1">Facebook</title><g><path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 38px;"><span class="at4-visually-hidden">Share to Twitter</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;"><title id="at-svg-twitter-2">Twitter</title><g><path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-messenger" style="background-color: rgb(0, 132, 255); border-radius: 38px;"><span class="at4-visually-hidden">Share to Messenger</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-messenger-3" class="at-icon at-icon-messenger" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;"><title id="at-svg-messenger-3">Messenger</title><g><path d="M16 6C9.925 6 5 10.56 5 16.185c0 3.205 1.6 6.065 4.1 7.932V28l3.745-2.056c1 .277 2.058.426 3.155.426 6.075 0 11-4.56 11-10.185C27 10.56 22.075 6 16 6zm1.093 13.716l-2.8-2.988-5.467 2.988 6.013-6.383 2.868 2.988 5.398-2.987-6.013 6.383z" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-lineme" style="background-color: rgb(0, 185, 0); border-radius: 38px;"><span class="at4-visually-hidden">Share to LINE</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-lineme-4" class="at-icon at-icon-lineme" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;"><title id="at-svg-lineme-4">LINE</title><g><path d="M27 14.927c0 1.97-.764 3.744-2.358 5.492-2.307 2.655-7.468 5.89-8.642 6.385-1.174.495-1-.315-.953-.593l.157-.94c.037-.282.075-.718-.035-.996-.125-.306-.612-.465-.97-.542-5.287-.7-9.2-4.395-9.2-8.807C5 10.005 9.935 6 16 6c6.066 0 11 4.005 11 8.927zm-13.235-2.38h-.772a.214.214 0 0 0-.214.215v4.793c0 .118.095.214.213.214h.772a.214.214 0 0 0 .214-.215v-4.793a.214.214 0 0 0-.215-.214zm5.31 0h-.77a.214.214 0 0 0-.215.215v2.848l-2.197-2.967a.235.235 0 0 0-.017-.023l-.014-.013-.003-.004c-.005-.003-.01-.006-.013-.01-.002 0-.003-.002-.005-.004l-.01-.008a.262.262 0 0 0-.018-.01c-.004 0-.006-.003-.008-.004a.605.605 0 0 0-.013-.005l-.007-.002a.106.106 0 0 0-.02-.005.098.098 0 0 0-.012-.003h-.01c-.003-.002-.006-.002-.01-.003-.004 0-.007 0-.01-.002h-.78a.214.214 0 0 0-.214.214v4.793c0 .118.095.214.214.214h.77a.214.214 0 0 0 .216-.215v-2.847l2.2 2.97c.014.022.033.04.053.053 0 .002.002.002.002.003l.014.008c0 .002.003.003.005.004l.01.005c.003 0 .007.002.01.004.003 0 .004 0 .007.002l.014.005s.002 0 .003.002a.206.206 0 0 0 .054.007h.772a.214.214 0 0 0 .214-.215v-4.793a.214.214 0 0 0-.214-.214zm-7.17 4.022H9.81V12.76a.214.214 0 0 0-.216-.214h-.77a.214.214 0 0 0-.216.214v4.793c0 .058.023.11.06.148l.003.003c.002 0 .003.002.005.003.038.036.09.06.147.06h3.083a.214.214 0 0 0 .214-.215v-.772a.214.214 0 0 0-.215-.214zm11.432-2.822a.214.214 0 0 0 .214-.214v-.77a.214.214 0 0 0-.213-.216h-3.082a.213.213 0 0 0-.15.06s0 .002-.002.003c0 .002-.003.003-.004.005a.214.214 0 0 0-.06.147v4.793c0 .057.023.11.06.148l.003.003.003.003c.04.036.09.06.148.06h3.083a.214.214 0 0 0 .214-.215v-.772a.214.214 0 0 0-.213-.214H21.24v-.812h2.097a.214.214 0 0 0 .214-.214v-.77a.214.214 0 0 0-.213-.216H21.24v-.81h2.097z" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-link" style="background-color: rgb(23, 139, 244); border-radius: 38px;"><span class="at4-visually-hidden">Share to Copy Link</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-link-5" class="at-icon at-icon-link" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;"><title id="at-svg-link-5">Copy Link</title><g><path d="M23.476 20.663c0-.324-.114-.6-.34-.825l-2.524-2.524a1.124 1.124 0 0 0-.826-.34c-.34 0-.63.13-.873.388.024.024.1.1.23.225s.217.212.26.26c.046.05.106.126.183.23a.976.976 0 0 1 .2.644c0 .325-.113.6-.34.827-.226.226-.5.34-.825.34-.12 0-.23-.015-.332-.043a.976.976 0 0 1-.31-.158 2.89 2.89 0 0 1-.23-.182 7.506 7.506 0 0 1-.26-.26l-.226-.23c-.267.25-.4.545-.4.885 0 .322.113.597.34.824l2.5 2.512c.218.218.493.328.825.328.323 0 .598-.106.825-.316l1.784-1.772a1.11 1.11 0 0 0 .34-.813zm-8.532-8.556c0-.323-.113-.598-.34-.825l-2.5-2.512a1.124 1.124 0 0 0-.825-.34c-.316 0-.59.11-.826.328L8.67 10.53a1.11 1.11 0 0 0-.34.813c0 .323.113.598.34.825l2.524 2.524c.22.22.494.328.825.328.34 0 .63-.126.873-.376-.024-.025-.1-.1-.23-.225a7.506 7.506 0 0 1-.26-.262 2.89 2.89 0 0 1-.183-.23.976.976 0 0 1-.2-.644c0-.323.113-.598.34-.825.226-.227.5-.34.824-.34a.976.976 0 0 1 .643.2c.106.077.183.137.23.182.05.044.137.13.262.26s.2.207.224.23c.267-.25.4-.545.4-.885zm10.862 8.556c0 .97-.344 1.792-1.032 2.464L22.99 24.9c-.67.67-1.492 1.006-2.463 1.006-.98 0-1.805-.344-2.476-1.032l-2.5-2.512c-.67-.67-1.006-1.493-1.006-2.463 0-.997.356-1.842 1.068-2.538l-1.068-1.068c-.696.712-1.538 1.068-2.525 1.068-.97 0-1.797-.34-2.476-1.02L7.02 13.82C6.34 13.138 6 12.314 6 11.343c0-.97.344-1.792 1.032-2.464l1.784-1.773c.67-.67 1.492-1.007 2.463-1.007.978 0 1.803.344 2.475 1.032l2.5 2.512c.67.67 1.007 1.492 1.007 2.463 0 .995-.356 1.84-1.068 2.537l1.068 1.068c.696-.712 1.537-1.068 2.524-1.068.97 0 1.797.34 2.476 1.02l2.524 2.523c.68.68 1.02 1.505 1.02 2.476z" fill-rule="evenodd"></path></g></svg></span></a></div></div></div>
            </div>


          </div>

                </div>
  </div>

  <input id="social-mid" type="hidden" value="541">
  <input id="social-mkey" type="hidden" value="m_page">
  <input id="social-did" type="hidden" value="270">
  <input id="social-category" type="hidden" value="">

  </section>
  <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>


  <div id="section-comment" class="row mt-4" data-mid="541" data-mkey="m_page" data-did="270">
  <!-- Comment load here -->
  </div>
  </div>

  </div>

@extends('layouts.script')


<div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;"><iframe id="_atssh558" title="AddThis utility frame" src="https://s7.addthis.com/static/sh.f48a1a04fe8dbf021b4cda1d.html#rand=0.5190717762025157&amp;iit=1590323014134&amp;tmr=load%3D1590323014075%26core%3D1590323014121%26main%3D1590323014129%26ifr%3D1590323014138&amp;cb=0&amp;cdn=0&amp;md=0&amp;kw=KU%2CKasetsart%20University%2C%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C&amp;ab=-&amp;dh=158.108.216.45&amp;dr=&amp;du=http%3A%2F%2F158.108.216.45%2Fth%2Ffaculty-of-science-and-engineering%23&amp;href=http%3A%2F%2F158.108.216.45%2Fth%2Ffaculty-of-science-and-engineering&amp;dt=KU%20%7C%20%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C%20%E0%B8%A3%E0%B8%AD%E0%B8%9A%E0%B8%A3%E0%B8%B1%E0%B9%89%E0%B8%A7%E0%B8%8A%E0%B8%B2%E0%B8%A7%E0%B8%99%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B8%B5&amp;dbg=0&amp;cap=tc%3D0%26ab%3D0&amp;inst=1&amp;jsl=129&amp;prod=undefined&amp;lng=th&amp;ogt=description%2Cimage%2Curl%2Ctitle%2Ctype%3Dwebsite%2Clocale%2Csite_name&amp;pc=men&amp;pub=ra-5d5a32e5655829f6&amp;ssl=0&amp;sid=5eca6746bfcf835f&amp;srf=0.01&amp;ver=300&amp;xck=0&amp;xtr=0&amp;og=site_name%3Dwww.ku.ac.th%26locale%3Dth_TH%26type%3Dwebsite%26title%3DKU%2520%257C%2520%25E0%25B8%25A1%25E0%25B8%25AB%25E0%25B8%25B2%25E0%25B8%25A7%25E0%25B8%25B4%25E0%25B8%2597%25E0%25B8%25A2%25E0%25B8%25B2%25E0%25B8%25A5%25E0%25B8%25B1%25E0%25B8%25A2%25E0%25B9%2580%25E0%25B8%2581%25E0%25B8%25A9%25E0%25B8%2595%25E0%25B8%25A3%25E0%25B8%25A8%25E0%25B8%25B2%25E0%25B8%25AA%25E0%25B8%2595%25E0%25B8%25A3%25E0%25B9%258C%2520%25E0%25B8%25A3%25E0%25B8%25AD%25E0%25B8%259A%25E0%25B8%25A3%25E0%25B8%25B1%25E0%25B9%2589%25E0%25B8%25A7%25E0%25B8%258A%25E0%25B8%25B2%25E0%25B8%25A7%25E0%25B8%2599%25E0%25B8%2599%25E0%25B8%2597%25E0%25B8%25A3%25E0%25B8%25B5%26url%3Dhttp%253A%252F%252F158.108.216.45%252Fth%252Ffaculty-of-science-and-engineering%26image%3Dhttp%253A%252F%252F158.108.216.45%252Fassets%252FKU_logo.png%26description%3DKasetsart%2520University%2520is%2520a%2520public%2520research%2520university%2520in%2520Bangkok%252C%2520Thailand&amp;csi=undefined&amp;rev=v8.28.5-wp&amp;ct=1&amp;xld=1&amp;xd=1" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"></iframe></div><style id="service-icons-0"></style><div id="surveyContent"><div><div data-mop-page-url="http://158.108.216.45/th/faculty-of-science-and-engineering#"><div class="mopinion-survey-content" data-mop-form-type="modal"><button type="button" id="" class="btn-open-survey btn btn-primary tab tab-right survey-minty-green allow-button  " data-button-for="c09bc2dfbfbb8f6e40b0cb283319c7fd992f8e28" tabindex="0" style="opacity: 1; visibility: visible;"><i class="mopicon mopicon-commenting-o " aria-hidden="true" icon="fa-commenting-o"><svg viewBox="0 0 28 28"><path d="M10 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM16 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM22 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM14 6c-6.5 0-12 3.656-12 8 0 2.328 1.563 4.547 4.266 6.078l1.359 0.781-0.422 1.5c-0.297 1.109-0.688 1.969-1.094 2.688 1.578-0.656 3.016-1.547 4.297-2.672l0.672-0.594 0.891 0.094c0.672 0.078 1.359 0.125 2.031 0.125 6.5 0 12-3.656 12-8s-5.5-8-12-8zM28 14c0 5.531-6.266 10-14 10-0.766 0-1.531-0.047-2.266-0.125-2.047 1.813-4.484 3.094-7.187 3.781-0.562 0.156-1.172 0.266-1.781 0.344h-0.078c-0.313 0-0.594-0.25-0.672-0.594v-0.016c-0.078-0.391 0.187-0.625 0.422-0.906 0.984-1.109 2.109-2.047 2.844-4.656-3.219-1.828-5.281-4.656-5.281-7.828 0-5.516 6.266-10 14-10v0c7.734 0 14 4.484 14 10z" fill="currentColor"></path></svg></i><span>Feedback</span></button></div></div></div></div><div></div><div class="mopinion-survey-content" data-mop-form-type="modal"><div id="surveyWindowWrap" class="surveyWindowWrap " data-parent-for="c09bc2dfbfbb8f6e40b0cb283319c7fd992f8e28" style="position: fixed; z-index: -1; backface-visibility: hidden; transition: transform 0.3s ease 0s, visibility 0.225s ease 0s; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow-y: auto; width: 100%; min-height: 100%; visibility: hidden; pointer-events: none;"><iframe id="surveyWindow" class="surveyWindow " tabindex="-1" title="แบบประเมินเว็บไซต์ใหม่ feedback form" allowtransparancy="true" frameborder="false" style="width: 40%; height: 450px; border: none; border-radius: 2px; background: rgb(255, 255, 255); transition: transform 0.225s ease 0s, opacity 0.225s ease 0s, height 0.175s ease 0s; overflow: hidden; will-change: height; position: absolute; top: 50px; left: 0px; right: 0px; margin-left: auto; margin-right: auto; max-width: 480px; margin-bottom: 50px; box-shadow: rgba(0, 0, 0, 0.2) 0px 8px 17px 0px; transform: scale(0.95); opacity: 0;"></iframe><div></div></div></div><div data-mask-for="c09bc2dfbfbb8f6e40b0cb283319c7fd992f8e28" class="mopinion-survey-mask  " id="surveyMask" style="pointer-events: none; opacity: 0; visibility: hidden; transition: opacity 0.225s ease 0s, visibility 0.225s ease 0s; z-index: -1;"></div>

</body>