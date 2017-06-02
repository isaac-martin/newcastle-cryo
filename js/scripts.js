(function ($, root, undefined) {

	//ratio for featured img on blog
	$.fn.ratioimg = function(){
		var width = $(this).width();
		var height = width/2.1
		this.css({height: height});
	}



$(document).ready(function(){
	$('.c-hamburger').click(function() {
		$(this).toggleClass("is-active");
		$('nav').toggleClass("active");
	});

	$('#subForm').ajaxChimp();
	$().forms();
	$( ".single-hero" ).ratioimg();
	$( ".featured-img-cont" ).ratioimg();
	$(".featured-img-cont").lazyload({
      effect : "fadeIn"
  });
	$(".mgmt-single").hover(function(){
		 $(this).toggleClass("ol-active");  //Toggle the active class to the area is hovered
 	});
	$('.modal').modal();
	$("#prpl-menu").sticky({
		topSpacing:85,
		zIndex: 99
	});
	$('select').material_select();
	$('.datepicker').pickadate({
	 selectMonths: true, // Creates a dropdown to control month
	 selectYears: 3, // Creates a dropdown of 15 years to control year
	 container: 'body',
  min: true
 });

 $('#prpl-menu a').click(function() {
	 console.log('clicked');
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top-'150'
            }, 1000);
            return false;
        }
    }
});
});

})(jQuery, this);
