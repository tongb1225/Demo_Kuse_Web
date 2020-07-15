$(document).ready( function() {

	// Fixa navbar ao ultrapassa-lo
  var navbar = $('#navbar-main'),
		distance = navbar.offset().top,
    $window = $(window);

  $window.scroll(function() {
    if ($window.scrollTop() >= distance) {
      navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
      $("body").css("padding-top", "70px");
    } else {
      navbar.removeClass('navbar-fixed-top');
      $("body").css("padding-top", "0px");
    }
  });

	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');
			}
		}
		clickEvent = false;
	});

	$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
	});
});
