jQuery(document).ready(function() {

	"use strict";
	// Your custom js code goes here.

	jQuery("[data-target='tooltip']").tooltip();
	var btn = $('#gototopbutton');

	jQuery(window).scroll(function() {
	  if (jQuery(window).scrollTop() > 300) {
	    btn.addClass('show');
	  } else {
	    btn.removeClass('show');
	  }
	});

	btn.on('click', function(e) {
	  e.preventDefault();
	  jQuery('html, body').animate({scrollTop:0}, '300');
	});


});
