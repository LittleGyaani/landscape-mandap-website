jQuery(document).ready(function() {

	"use strict";
	// Your custom js code goes here.

	//Base API URL
	var base_API_URL = "api/web/requests/";

	jQuery("[data-target='tooltip']").tooltip();
	var btn = $('#gototopbutton');

	jQuery(window).scroll(function() {
		if (jQuery(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});

	// 	jQuery('#navbar').css('z-index',9999);

	btn.on('click', function(e) {
		e.preventDefault();
		jQuery('html, body').animate({scrollTop:0}, '300');
	});

	//window.onscroll = function() {myFunction()};

	// // Get the navbar
	// var navbar = document.getElementById("navbar");
	//
	// // Get the offset position of the navbar
	// var sticky = navbar.offsetTop;
	//
	// // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
	// function myFunction() {
	//
	// 	if (window.pageYOffset >= sticky && (screen.width >= 480)) {
	// 		navbar.classList.add("sticky")
	// 	} else {
	// 		navbar.classList.remove("sticky");
	// 	}
	// }
	// $(".imgblur").mousemove(function(){
	// 	$(".centerTitle").css("visibility", "hidden");
	// });
	// $(".imgblur").mouseout(function(){
	// 	$(".centerTitle").css("visibility", "visible");
	// });

	jQuery(window).load(function() {

		jQuery('#loading').hide();

	});

	function inVisible(element) {
		//Checking if the element is
		//visible in the viewport
		var WindowTop = $(window).scrollTop();
		var WindowBottom = WindowTop + $(window).height();
		var ElementTop = element.offset().top;
		var ElementBottom = ElementTop + element.height();
		//animating the element if it is
		//visible in the viewport
		if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
		animate(element);
	}

	function animate(element) {
		//Animating the element if not animated before
		if (!element.hasClass('ms-animated')) {
			var maxval = element.data('max');
			var html = element.html();
			element.addClass("ms-animated");
			$({
				countNum: element.html()
			}).animate({
				countNum: maxval
			}, {
				//duration 5 seconds
				duration: 5000,
				easing: 'linear',
				step: function() {
					element.html(Math.floor(this.countNum) + html);
				},
				complete: function() {
					element.html(this.countNum + html);
				}
			});
		}

	}

	//When the document is ready
	$(function() {
		//This is triggered when the
		//user scrolls the page
		$(window).scroll(function() {
			//Checking if each items to animate are
			//visible in the viewport
			$("h2[data-max]").each(function() {
				inVisible($(this));
			});
		})
	});

	$(window).on('scroll', function () {
		var sticky = $(".sticky-header");
		var scroll = $(window).scrollTop();
		if (scroll < 265) {
			sticky.removeClass("sticky");
		} else {
			sticky.addClass("sticky");
		}
	});

	//Enable Light Gallery with initial options
	lightGallery(document.getElementById('gallery'), {
		mode: 'lg-fade',
		// cssEasing : 'cubic-bezier(0.25, 0, 0.25, 1)',
		// getCaptionFromTitleOrAlt: true,
		// counter: true,
		// progressBar: true,
		// fullScreen: true,
		// pager: true,
		zoom: true,
		escKey: true
	});

	//Booking Form
	jQuery('#venueBooking').submit(function(e){

		var booking_date = $('#booking-date').val();

		if(booking_date != ""){

			$.ajax({

				type: 'POST',
				url: base_API_URL+'venue-booking',
				data: $(this).serialize(),
				dataType: 'JSON',
				beforeSend: function(){$('#progress').show(300);},
				success: function(bookingResponse){
					// console.log(bookingResponse);
					if(bookingResponse.resp === "success"){
						$('#progress').hide();
						Swal.fire({ title:"Booking Enquiry Sent.", text: bookingResponse.message, type: "success", timer: 1000, showConfirmButton: !1  });
	            window.setTimeout(function(){
	              location.reload();
	            } ,1500);

					}
				}

			});

		}else{

			alert('Please choose booking date');
			$('#booking-date').focus();

		}

		e.preventDefault();
	});

	//Contact Form
	jQuery('#contactForm').submit(function(e){

		var booking_date = $('#booking-date').val();

		if(booking_date != ""){

			$.ajax({

				type: 'POST',
				url: base_API_URL+'send-contact-enquiry',
				data: $(this).serialize(),
				dataType: 'JSON',
				beforeSend: function(){$('#progress').show(300);},
				success: function(contactEnquriyResponse){
					// console.log(bookingResponse);
					if(contactEnquriyResponse.resp === "success"){
						$('#progress').hide();
						Swal.fire({ title:"General Enquiry Sent.", text: contactEnquriyResponse.message, type: "success", timer: 1000, showConfirmButton: !1  });
	            window.setTimeout(function(){
	              location.reload();
	            } ,1500);
					}
				}

			});

		}else{

			Swal.fire({
			  type: 'error',
			  title: 'Oops...',
			  text: 'Something went wrong!',
			});

			$('#contactForm')[0].reset();

		}

		e.preventDefault();
	});

	//Opotions for Air Date Picker
	$('#booking-date').datepicker({
		language: 'en',
		minDate: new Date(), // Now can select only dates, which goes after today
		autoClose: true,
		clearButton: true,
		startDate: new Date(),
		dateFormat: 'dd/mm/yyyy'
	})

	//     jQuery('.image-popup').click(function(){
	// 	var zindex = $('#navbar').css('z-index');

	// 	if(zindex === 9999)
	// 		jQuery('#navbar').css('z-index',0);
	// 	else
	// 		jQuery('#navbar').css('z-index',9999);
	// 	return false;
	// });

});
