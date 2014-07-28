(function($, Drupal) {

	$(document).ready(function() {

		$('#recent-work2').not('.wide-region').everslider({
		mode : 'carousel',
		moveSlides : 1,
		slideEasing : 'easeInOutCubic',
		slideDuration : 700,
		navigation : true,
		keyboard : true,
		nextNav : '<span class="next-arrow">Next</span>',
		prevNav : '<span class="prev-arrow">Next</span>',
		tickerAutoStart : true,
		tickerHover : true,
		tickerTimeout : 3500,

		itemWidth : 270,
		itemMargin : 20,
		afterSlide: function(){ 
			$('.over_pic').each(function(){
				$(this).css('height',  $( $( $(this).parent().find("img")['0'] )['0']).outerHeight() + 'px' );
			});
		},
		slidesReady: function(){ 
          setTimeout(function(){
            $('.home-text h1 span').addClass('show');
                  $('.over_pic').each(function(){
                    $(this).css('height',  $( $( $(this).parent().find("img")['0'] )['0']).outerHeight() + 'px' );
                  });
              }, 2000);
            }
		});
	});
	
	$(document).ready(function() {
		$('#fullwidth_slider').everslider({
			mode: 'carousel',
			moveSlides: 1,
			slideEasing: 'easeInOutCubic',
			slideDuration: 700,
			navigation: true,
			keyboard: true,
			nextNav: '<span class="alt-arrow">Next</span>',
			prevNav: '<span class="alt-arrow">Next</span>',
			ticker: true,
			tickerAutoStart: false,
			tickerHover: true,
			tickerTimeout: 2000
		});
	});
	
	$(document).ready(function() {
		jQuery('#relaciones li:gt(3)').hide();
		jQuery('#showLess').hide();
		var items = $("#relaciones li").size();
		var shown =  3;
		
		jQuery('#loadMore').on('click',function() {
			jQuery('#showLess').show();
			shown = jQuery('#relaciones li:visible').size()+4;
			
			if(shown < items) {jQuery('#relaciones li:lt('+shown+')').slideDown('slow');}
			else {jQuery('#relaciones li:lt('+items+')').slideDown('slow');
				jQuery('#loadMore').hide();
			}
			
			jQuery('#showLess').on('click', function(){
				jQuery('#relaciones li').not(':lt(4)').slideUp('slow');
				jQuery(this).hide();
				jQuery('#loadMore').show();
			});	
		});
	});
	
	$(document).ready(function(){
		$('.lang-es .breadcrumbs a:contains("With Whom")').text("Con Quien");
		$(".section-blog .breadcrumbs li").eq(2).remove();
		$('.page-taxonomy-term .breadcrumbs li:contains("Taxonomias")').remove();
		$('.has-icon').click(function(event) {event.preventDefault();});
	});	

})(jQuery, Drupal);


