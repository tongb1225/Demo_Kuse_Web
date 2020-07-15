"use strict";

let Comment = {
		mid 		: '',
		mkey 		: '',
		did 		: '',
		section 	: '#section-comment',
		sectionList : '#section-comment-list',
		form 		: '#form-comment',
		pageInfo	: '#comment-page-info',
		btnLoadmore : '#comment-btn-loadmore',
		firstUrl 	: '/comment/index',
		listUrl 	: '/comment/load_comment',
		createUrl	: '/th/comment/create',
		init 		: function(section,config){
			var _this = this;
			if(config == undefined){
				config = {};
			}
			_this.section = section || _this.section;
			_this.mid = config.mid || $(section).data('mid');
			_this.mkey= config.mkey || $(section).data('mkey');
			_this.did = config.did || $(section).data('did');
			$.getScript( "/assets/vendor/shave/jquery.shave.min.js" )
			  .done(function( script, textStatus ) {
				  _this.getFirst();
			  })
			  .fail(function( jqxhr, settings, exception ) {
				  console.log( "Triggered ajaxError handler." );
			});
			
		},

		getFirst : function(){
			var _this = this;
			$.ajax({
				url : _this.firstUrl,
				type : 'get',
				data : {
					mkey : _this.mkey,
					mid  : _this.mid,
					did  : _this.did
				},
				success : function(resp){
					if(resp.success){
						$(_this.section).html(resp.data.html);
						_this.dotdotdot();
						_this.setForm();
					}
				}
			});
		},
		
		dotdotdot : function(){
			var aText = {
					textMore_en : '... Show more',
					textLess_en : 'Show less',
					textMore_th : '... อ่านเพิ่ม' ,
					textLess_th : 'แสดงน้อยลง',
			};
			var textMore = 'textMore_'+LANG;
			var textLess = 'textLess_'+LANG;
			$('.comment-box .comment-content').shave(100, { 
				classname: 'text-more', 
				character: '<a class="more" href="javascript:void(0);">'+aText[textMore]+'</a>',
				spaces : false
			});
			$('.comment-box .comment-content .js-shave-char a').click(function(e){
				var a = $(this);
				if(a.hasClass('more')){
					a.closest('.comment-content').css('max-height','none');
					a.closest('.comment-content').find('.text-more').insertBefore(a).show();
					a.removeClass('more').addClass('less').text(aText[textLess]);
				}else{
					a.closest('.comment-content').css('max-height','100px');
					a.closest('.comment-content').find('.text-more').hide();
					a.removeClass('less').addClass('more').text(aText[textMore]);
				}
			});
		},

		setForm	: function(){
			var _this = this;
			$(_this.form).on('submit',function(e){
				e.preventDefault();
				_this.create();
			});
			
			$(_this.btnLoadmore).on('click',function(e){
				e.preventDefault();
				_this.loadMore();
			});
			
		},
		create : function(){
			var _this = this;
			var form = $(_this.form);
			form.find('button[type="submit"]').prop('disabled',true);
			$.ajax({
				url : _this.createUrl,
				type : 'post',
				data : form.serialize(),
				success : function(resp){
					if(resp.success){
						_this.getList();
						
						form.find('[name="message"]').val('');
						var alert = $('<div class="alert alert-success">'+resp.message+'</div>');
						form.find('.alert-message').html(alert);
						form.trigger('reset');
						setTimeout(function(){
							window.location.hash = _this.form;
						},500);
						
						setTimeout(function(){
							alert.remove();
						},3000);
					}
				},
				complete : function(){
					form.find('button[type="submit"]').prop('disabled',false);
				}
			});
		},
		getList : function(){
			var _this = this;
			var page = 1;
			$.ajax({
				url : _this.listUrl,
				type : 'get',
				data : {
					mkey : _this.mkey,
					mid  : _this.mid,
					did  : _this.did,
					startPage : page
				},
				success : function(resp){
					if(resp.success){
						$(_this.sectionList).html(resp.data.html);
						$(_this.pageInfo).data('currentpage',page);
						$(_this.pageInfo).data('totalresults',resp.data.pageInfo.totalResults);
						$(_this.section).find('.comment-count').text(resp.data.pageInfo.totalResults)
						_this.dotdotdot();
						_this.checkBtnLoadMore();
					}
				}
			});
		},
		loadMore : function(){
			var _this = this;
			var page = $(_this.pageInfo).data('currentpage')+1;
			var loader = $('<div class="text-center"><i class="fas fa-circle-notch fa-spin"></i></div>');
			loader.insertBefore(_this.btnLoadmore);
			$.ajax({
				url : _this.listUrl,
				type : 'get',
				data : {
					mkey : _this.mkey,
					mid  : _this.mid,
					did  : _this.did,
					startPage : page,
				},
				success : function(resp){
					if(resp.success){
						$(_this.sectionList).append(resp.data.html);
						$(_this.pageInfo).data('currentpage',page);
						$(_this.pageInfo).data('totalresults',resp.data.pageInfo.totalResults);
						$(_this.section).find('.comment-count').text(resp.data.pageInfo.totalResults)
						_this.dotdotdot();
						_this.checkBtnLoadMore();
					}
				},
				complete : function(){
					loader.remove();
				}
			});
		},
		
		checkBtnLoadMore : function(){
			var _this = this;
			var currentPage = $(_this.pageInfo).data('currentpage');
			var totalPage = $(_this.pageInfo).data('totalpage');
			if(totalPage > currentPage){
				$(_this.btnLoadmore).show();
			}else{
				$(_this.btnLoadmore).hide();
			}
		}
};