$(window).load(function() {    
	$('.col-product').equalHeight();
	$('.col-subproduct').equalHeight();
	$('.col-blog').equalHeight();
	
	fluidvids.init({
		selector: ['iframe'],
		players: ['www.youtube.com', 'player.vimeo.com']
	});
});

$(window).resize(function(){
	$('.col-product').equalHeight();
	$('.col-subproduct').equalHeight();
	$('.col-blog').equalHeight();
});

$(document).ready(function(){
	$('.more_view a').click(function() {
    	var newImage = $(this).attr('href');
        $('#imageWrap img').attr({ src: newImage }); 
        $('#imageWrap a').attr({ href: newImage });
        return false;
    });
});