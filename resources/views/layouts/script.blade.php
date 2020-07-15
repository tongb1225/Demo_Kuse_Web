<script src="/assets/vendor/jquery/jquery-3.4.1.min.js"></script>
  <script defer="" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
          integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
          crossorigin="anonymous"
          defer></script> -->

  <script  src="/assets/vendor/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script defer="" src="https://unpkg.com/swiper@5.3.8/js/swiper.min.js"></script>
  <script defer="" src="/assets/js/vendor/anime.min.js" type="text/javascript"></script>
  <script defer="" src="/assets/js/components/header.js" type="text/javascript"></script>
  <script defer="" src="/assets/js/components/footer.js" type="text/javascript"></script>

                  <script src="/assets/plugins/fancybox-master/dist/jquery.fancybox.min.js" type="text/javascript"></script>
                      <script src="/assets/js/comment/comment.js" type="text/javascript"></script>

  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d5a32e5655829f6" defer=""></script>
  <script defer="" crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v6.0&amp;appId=2867254383361033&amp;autoLogAppEvents=1"></script>
  <script>
  let Social = {
      section : '#section-social-stats',
      init : function(){
          var _this = this;
          $(document).ready(function(){
              _this.saveSocialStats('view','web');
              _this.getStats();
              _this.setEventEmbed();
          });

      },
      sharedEventHandler : function(event){
          var _this = this;
          if(event.type == 'addthis.menu.share'){
              var channel = event.data.service || '';
              Social.saveSocialStats('share',channel)
          }
      },

      saveSocialStats : function(type,channel){
          var mid = $('#social-mid').val();
          var mkey = $('#social-mkey').val();
          var did = $('#social-did').val();
          var category = $('#social-category').val();

          if(mid != '' && mkey != '' && did != ''){
              var data = {
                  type : type,
                  mid : mid,
                  mkey : mkey,
                  did : did,
                  channel : channel,
                  category : category
              };

              $.ajax({
                  url: '/th/social-stats/save',
                  method: 'post',
                  data: data,
                  success: function(resp){
                      //on success
                  }
              });
          }
      },
      getStats : function(){
          var _this =this;
          var mid = $('#social-mid').val();
          var mkey = $('#social-mkey').val();
          var did = $('#social-did').val();
          var category = $('#social-category').val();
          var data = {
                  mid : mid,
                  mkey : mkey,
                  did : did,
                  category : category
              };
          if(mid != '' && mkey != '' && did != ''){
              $.ajax({
                  url: '/social-stats/get?'+_this.parseParams(data),
                  method: 'get',
                  processData : false,
                  dataType : false,
                  success: function(resp){

                      if(resp.success){
                          if(resp.data != undefined){
                              var view = resp.data.view || 0;
                              var share = resp.data.share || 0;
                              $(_this.section).find('.counter.counter-views').html(view);
                              $(_this.section).find('.counter.counter-shares').html(share);
                          }
                      }
                  }
              });
          }
      },
      parseParams : function(params){
          if(params != undefined){
              var queryString = Object.keys(params).map(function(key) {
                  return key + '=' + encodeURIComponent(params[key]);
              }).join('&');
              return queryString;
          }

          return '';
      },
      setEventEmbed : function(){
          var btn = document.getElementById("ShowEmbed");

          if(btn){
              btn.addEventListener("click", function(){
                  var x = document.getElementById("WrapEmbed");
                  if (x.style.display === "none") {
                      x.style.display = "block";
                  } else {
                      x.style.display = "none";
                  }
              });
          }
      }

  };


  </script>

  <script>
  $(function(){
      Social.init();
      addthis.addEventListener('addthis.menu.share', Social.sharedEventHandler);

  })

  function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text().trim()).select();
        document.execCommand("copy");
        $temp.remove();
  }
  </script>
  <script>
  $(document).ready(function(){
    (function () {
      // News Swiper //
      var newsSwiper = new Swiper('.swiper-news', {
        slidesPerView: 5,
        slidesPerGroup: 5,
        spaceBetween: 5,
        centeredSlides: false,
        loop: false,
        freeMode: true,
        watchOverflow : true,
        pagination: {
          el: '.album-pagination',
          clickable: true
        }
      });

      var swiper = new Swiper('.swiper-vdo', {
          slidesPerView: 1,
          spaceBetween: 20,
          centeredSlides: false,
          //loop: false,
          //freeMode: true,
          pagination: {
            el: '.vdo-album-pagination',
            clickable: true,
          },
        });

      $('#ModalPhotoGallery').on('show.bs.modal', function (e) {
          var modal = $(this);
          var ref = $(e.relatedTarget).data('ref');
          modal.find('.carousel-item.cover-photo').removeClass('active');
          modal.find('[data-ref="'+ref+'"]').addClass('active');
      })

      var photoswiper = new Swiper('.swiper-photo', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
          });
     // $('.carousel').carousel();

      $('.swiper-vdo .vdo-slide').each(function(k,elm){
          var video = document.createElement('video');
          var canvas = document.createElement('canvas');
          var ctx = canvas.getContext("2d");
          video.preload = 'metadata';
          video.onloadedmetadata = function() {
              canvas.width = video.videoWidth;
              canvas.height = video.videoHeight;
              video.currentTime = 3;
          }

          video.ontimeupdate = function(){
              ctx.drawImage(video, 0, 0, video.videoWidth, video.videoHeight);
              var imgUrl = canvas.toDataURL();
              $(elm).find('img').attr('src',imgUrl);
          }

          video.src = $(elm).data('src');
      });

      $('.swiper-vdo .vdo-slide').on('click',function(e){
          $('.swiper-vdo .vdo-slide .video-thumbnail').removeClass('selected');
          $(this).find('.video-thumbnail').addClass('selected');
          var name = $(this).data('name');
          $('.vdo-main-name').text(name);
          var src = $(this).data('src');
          $('.vdo-container .video-main').attr('src',src).attr('autoplay',true);
      });

    })();

    });
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
