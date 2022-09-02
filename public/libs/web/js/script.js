(function($) {

	"use strict";


	//Update Header Style and Scroll to Top
	function headerStyle() {
		if($('.main-header').length){
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.main-header');
			var scrollLink = $('.scroll-top');
			if (windowpos >= 110) {
				siteHeader.addClass('fixed-header');
				scrollLink.addClass('open');
			} else {
				siteHeader.removeClass('fixed-header');
				scrollLink.removeClass('open');
			}
		}
	}

	headerStyle();


	//Submenu Dropdown Toggle
	if($('.main-header li.dropdown ul').length){
		$('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

	}

	//Mobile Nav Hide Show
	if($('.mobile-menu').length){

		$('.mobile-menu .menu-box').mCustomScrollbar();

		var mobileMenuContent = $('.main-header .menu-area .main-menu').html();
		$('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
		$('.sticky-header .main-menu').append(mobileMenuContent);

		//Dropdown Button
		$('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
			$(this).toggleClass('open');
			$(this).prev('ul').slideToggle(500);
		});
		//Dropdown Button
		$('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('.megamenu').slideToggle(900);
		});
		//Menu Toggle Btn
		$('.mobile-nav-toggler').on('click', function() {
			$('body').addClass('mobile-menu-visible');
		});

		//Menu Toggle Btn
		$('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
			$('body').removeClass('mobile-menu-visible');
		});
	}


	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1000);

		});
	}

	// Elements Animation
	if($('.wow').length){
		var wow = new WOW({
		mobile:       false
		});
		wow.init();
	}

	//Contact Form Validation
	if($('#contact-form').length){
		$('#contact-form').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true
				},
				subject: {
					required: true
				},
				message: {
					required: true
				}
			}
		});
	}

	//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {

			var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');

			if($(this).hasClass('active')!==true){
				$(outerBox).find('.accordion .acc-btn').removeClass('active');
			}

			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);
			}
		});
	}

	//two-column-carousel
	if ($('.two-column-carousel').length) {
			$('.two-column-carousel').owlCarousel({
			loop:false,
			items: 2,
			margin:30,
			dots: false,
			nav:false,
			smartSpeed: 3000,
			autoplay: 2000,
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:2
				},
				1920:{
					items:2
				},

			}
		});
	}

	//two-column-carousel
	if ($('.schedule-tech').length) {
			$('.schedule-tech').owlCarousel({
			loop:false,
			items: 5,
			margin:30,
			dots: false,
			nav:false,
			smartSpeed: 1000,
			autoplay: 2000,
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:5
				},
				1920:{
					items:5
				},

			}
		});
	}

	// function for style switcher
	function swithcerMenu() {
	    if ($('.switch_menu').length) {

	        $('.switch_btn button').on('click', function() {
	            $('.switcher').toggleClass('switcher-show')
	        });

	        $("#myonoffswitch").on('click', function() {
	            $(".fixed").toggleClass("static");
	        });

	        $("#boxed").on('click', function() {
	            $(".main_page").addClass("active_boxlayout");
	            $('body').addClass('bg')
	        });
	        $("#full_width").on('click', function() {
	            $(".main_page").removeClass("active_boxlayout");
	            $('body').removeClass('bg')
	        });
	    };
	}


	//service Tabs
	if($('.service-tab').length){
		$('.service-tab .service-tab-btns .p-tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));

			if ($(target).hasClass('actve-tab')){
				return false;
			}else{
				$('.service-tab .service-tab-btns .p-tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				$('.service-tab .p-tabs-content .p-tab').removeClass('active-tab');
				$(target).addClass('active-tab');
			}
		});
	}



	if($('.timer').length){
	   $(function(){
		    $('[data-countdown]').each(function() {
		   var $this = $(this), finalDate = $(this).data('countdown');
		   $this.countdown(finalDate, function(event) {
		     $this.html(event.strftime('%D days %H:%M:%S'));
		   });
		 });
		});

	   $('.cs-countdown').countdown('').on('update.countdown', function(event) {
		  var $this = $(this).html(event.strftime('<div class="count-col"><span>%D</span><h6>days</h6></div> <div class="count-col"><span>%H</span><h6>Hours</h6></div> <div class="count-col"><span>%M</span><h6>Minutes</h6></div> <div class="count-col"><span>%S</span><h6>Seconds</h6></div>'));
		});
	}


	if ($('.testimonial-style-three .bxslider').length) {
		$('.testimonial-style-three .bxslider').bxSlider({
	        nextSelector: '.testimonial-style-three #slider-next',
	        prevSelector: '.testimonial-style-three #slider-prev',
	        nextText: '<i class="fa fa-angle-right"></i>',
	        prevText: '<i class="fa fa-angle-left"></i>',
	        mode: 'fade',
	        auto: 'true',
	        speed: '700',
	        pagerCustom: '.testimonial-style-three .slider-pager .thumb-box'
	    });
	};



	/*	=========================================================================
	When document is Scrollig, do
	========================================================================== */

	jQuery(document).on('ready', function () {
		(function ($) {
			// add your functions
			swithcerMenu();
		})(jQuery);
	});



	/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */

	$(window).on('scroll', function() {
		headerStyle();
	});



	/* ==========================================================================
   When document is loaded, do
   ========================================================================== */

	$(window).on('load', function() {

	    $('#handle-preloader').fadeOut();
        $('.preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({'overflow':'visible'});

	});


	$('.js-anchor-link').click(function(e){
		e.preventDefault();
		var target = $($(this).attr('href'));
		if(target.length){
		  var scrollTo = target.offset().top;
		  $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
		}
	});


	var isEditing = false,
	tempNameValue = "",
	tempEmailValue = "",
	tempDataValue = "";

	// Handles live/dynamic element events, i.e. for newly created edit buttons
	$(document).on('click', '.edit', function() {
		var parentRow = $(this).closest('tr'),
			tableBody = parentRow.closest('tbody'),
			tdName = parentRow.children('td.name'),
			tdEmail = parentRow.children('td.email'),
			tdData = parentRow.children('td.data');

		if (isEditing) {
			var nameInput = tableBody.find('input[name="name"]'),
				dataInputEmail = tableBody.find('input[name="email"]'),
				dataInput = tableBody.find('input[name="data"]'),
				tdNameInput = nameInput.closest('td'),
				tdDataInput = dataInput.closest('td'),
				tdInputEmail = dataInputEmail.closest('td'),
				currentEdit = tdNameInput.parent().find('td.edit');

			if ($(this).is(currentEdit)) {
				// Save new values as static html
				var tdNameValue = nameInput.prop('value'),
					tdEmailValue = dataInputEmail.prop('value'),
					tdDataValue = dataInput.prop('value');

				tdNameInput.empty();
				tdInputEmail.empty();
				tdDataInput.empty();

				tdNameInput.html(tdNameValue);
				tdInputEmail.html(tdEmailValue);
				tdDataInput.html(tdDataValue);
			} else {
				// Restore previous html values
				tdNameInput.empty();
				tdInputEmail.empty();
				tdDataInput.empty();

				tdNameInput.html(tempNameValue);
				tdInputEmail.html(tempEmailValue);
				tdDataInput.html(tempDataValue);
			}


			// Display static row
			currentEdit.html('<i class="fas fa-edit"></i> Editar');
			isEditing = false;
		} else {
			// Display editable input row
			isEditing = true;
			$(this).html('<i class="fas fa-save"></i> Salvar');

			var tdNameValue = tdName.html(),
				tdEmailValue = tdEmail.html(),
				tdDataValue = tdData.html();

			// Save current html values for canceling an edit
			tempNameValue = tdNameValue;
			tempEmailValue = tdEmailValue;
			tempDataValue = tdDataValue;

			// Remove existing html values
			tdName.empty();
			tdEmail.empty();
			tdData.empty();

			// Create input forms
			tdName.html('<input type="text" name="name" value="' + tdNameValue + '">');
			tdEmail.html('<input type="text" name="email" value="' + tdEmailValue + '">');
			tdData.html('<input type="text" name="data" value="' + tdDataValue + '">');
		}
	});

	// Handles live/dynamic element events, i.e. for newly created trash buttons
	$(document).on('click', '.trash', function() {
		// Turn off editing if row is current input
		if (isEditing) {
			var parentRow = $(this).closest('tr'),
				tableBody = parentRow.closest('tbody'),
				tdInput = tableBody.find('input').closest('td'),
				currentEdit = tdInput.parent().find('td.edit'),
				thisEdit = parentRow.find('td.edit');

			if (thisEdit.is(thisEdit)) {
				isEditing = false;
			}
		}

		// Remove selected row from table
		$(this).closest('tr').remove();
	});

	$('.new-row').on('click', function() {
		var tableBody = $(this).closest('tbody'),
			trNew = '<tr class="participantes"><td class="name"><input type="text" name="name" value=""></td><td class="email"><input type="text" name="email" value=""></td><td class="data"><input type="text" name="data" value=""></td><td class="edit"><i class="fas fa-save"></i> Salvar</td><td class="trash"><i class="fa fa-ban" aria-hidden="true"></i> Apagar</td></tr>';

		if (isEditing) {
			var nameInput = tableBody.find('input[name="name"]'),
				dataInputEmail = tableBody.find('input[name="email"]'),
				dataInput = tableBody.find('input[name="data"]'),
				tdNameInput = nameInput.closest('td'),
				tdEmailInput = dataInputEmail.closest('td'),
				tdDataInput = dataInput.closest('td'),
				currentEdit = tdNameInput.parent().find('td.edit');

			// Get current input values for newly created input cases
			var newNameInput = nameInput.prop('value'),
				newDataInput = dataInput.prop('value'),
				newEmailInput = dataInputEmail.prop('value');

			// Restore previous html values
			tdNameInput.empty();
			tdDataInput.empty();
			tdEmailInput.empty();

			tdNameInput.html(newNameInput);
			tdDataInput.html(newDataInput);
			tdEmailInput.html(newEmailInput);

			// Display static row
			currentEdit.html('Edit');
		}

		isEditing = true;
		tableBody.find('tr:last').before(trNew);
	});

	if(document.querySelector("#submit-feira-ideias") != null)  {
		document.querySelector("#submit-feira-ideias").addEventListener("click", e => {
			event.preventDefault();
			saveFeiraIdeias();
		});
	}


	function saveFeiraIdeias() {
			//Loop over th and crate column Header array
		const columnHeader = Array.prototype.map.call(
			document.querySelectorAll("#contact-form > div:nth-child(2) > table th"),
			th => {
			return th.innerHTML;
			}
		);
			//Loop over tr elements inside table body and create the object with key being the column header and value the table data.
		const tableContent = Object.values(
			document.querySelectorAll("#contact-form > div:nth-child(2) > table tbody tr")
		).map(tr => {
			const tableRow = Object.values(tr.querySelectorAll("td")).reduce(
			(accum, curr, i) => {
				const obj = { ...accum };
				obj[columnHeader[i]] = curr.innerHTML;
				return obj;
			},
			{}
			);
			return tableRow;
		});

		var remove_last_obj = tableContent.pop();
		console.log(tableContent);
		//console.log(Object.keys(tableContent).length);

		if(Object.keys(tableContent).length <= 1) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'É necessário no mínimo 1 pessoa!',
				showConfirmButton: false,
				timer: 2900
			})
		}else if(Object.keys(tableContent).length >= 2){
			Swal.fire({
				icon: 'info',
				title: 'Oops...',
				text: 'Apenas 1 participante por projeto!',
				showConfirmButton: false,
				timer: 2900
			})
		} else {
			var nome_grupo = $('input[name="nome_grupo"]').val();
			var descricao_grupo_feira_ideias = $('#descricao_grupo_feira_ideias').val();
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			if($('#regulamento').is(':checked') && $('#privacidade').is(':checked')) {

				$.ajax({
					type: 'POST',
					url: "/feira-de-ideias/salvar",
					data: {nome_grupo: nome_grupo, descricao_grupo_feira_ideias: descricao_grupo_feira_ideias, participantes: tableContent},
					enctype: 'multipart/form-data',
					success: function(data){
						console.log(data);

						if (data.status == 422) {
							const errors = data.errors
							const firstItem = Object.keys(errors)[0]
							const firstItemDOM = document.getElementById(firstItem)
							const firstErrorMessage = errors[firstItem][0]
							// scroll to the error message
							firstItemDOM.scrollIntoView()
							clearErrors()
							// show the error message
							firstItemDOM.insertAdjacentHTML('afterend', `<div class="text-danger">${firstErrorMessage}</div>`)
							// highlight the form control with the error
							firstItemDOM.classList.add('border', 'border-danger')
						} else if(data.status == 200){

							Swal.fire({
								icon: 'success',
								title: 'Sucesso',
								text: 'Grupo criado com sucesso!',
								showConfirmButton: false,
								timer: 2900

							})
							clearErrors();
							$('#contact-form')[0].reset();
							$("#contact-form > div:nth-child(2) > table tbody .participantes").remove();
						} else if(data.status == 400) {
							Swal.fire({
								icon: 'info',
								title: 'Desculpe!',
								text: 'O limite de grupo para esse evento ja foi preenchido!',
								showConfirmButton: false,
								timer: 3900

							})
						} else if (data.status == 500) {
							Swal.fire({
								icon: 'info',
								title: 'Desculpe!',
								text: 'Participante com campos vazio!',
								showConfirmButton: false,
								timer: 2900
							})
						}
					},
					error: function(xhr){
						console.log(xhr)
					}
				});
			} else {
				Swal.fire({
					icon: 'info',
					title: 'Oops...',
					text: 'Aceite todos os termos!',
					showConfirmButton: false,
					timer: 2900
				})
			}
		}
	}


	if(document.querySelector("#submit-ideathon") != null)  {
		document.querySelector("#submit-ideathon").addEventListener("click", e => {
			event.preventDefault();
			saveIdeathon();
		});
	}


	function saveIdeathon() {

		//Loop over th and crate column Header array
		const columnHeader = Array.prototype.map.call(
			document.querySelectorAll("#contact-form > div:nth-child(3) > table th"),
			th => {
				return th.innerHTML;
			}
		);
			//Loop over tr elements inside table body and create the object with key being the column header and value the table data.
		const tableContent = Object.values(
			document.querySelectorAll("#contact-form > div:nth-child(3) > table tbody tr")
		).map(tr => {
			const tableRow = Object.values(tr.querySelectorAll("td")).reduce(
			(accum, curr, i) => {
				const obj = { ...accum };
				obj[columnHeader[i]] = curr.innerHTML;
				return obj;
			},
			{}
			);
			return tableRow;
		});

		var remove_last_obj = tableContent.pop();
		//console.log(tableContent);
		//console.log( Object.keys(tableContent).length);

		if(Object.keys(tableContent).length <= 3) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'É necessário no mínimo  pessoas por grupo!',
				showConfirmButton: false,
				timer: 2900
			})
		} else if(Object.keys(tableContent).length >= 7){
			Swal.fire({
				icon: 'info',
				title: 'Oops...',
				text: 'Apenas 6 participantes por grupo!',
				showConfirmButton: false,
				timer: 2900
			})
		} else {
			var nome_grupo = $('input[name="nome_grupo"]').val();
			var descricao_grupo_ideathon = $('#descricao_grupo_ideathon').val();
			var solucao_problema = $('#solucao_problema').val();
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			if($('#regulamento').is(':checked') && $('#privacidade').is(':checked')) {
				$.ajax({
					type: 'POST',
					url: "/ideathon/salvar",
					data: {nome_grupo: nome_grupo, solucao_problema: solucao_problema, descricao_grupo_ideathon: descricao_grupo_ideathon, participantes: tableContent},
					enctype: 'multipart/form-data',
					success: function(data){
						console.log(data);
                        return false;

						if (data.status == 422) {
							const errors = data.errors
							const firstItem = Object.keys(errors)[0]
							const firstItemDOM = document.getElementById(firstItem)
							const firstErrorMessage = errors[firstItem][0]
							// scroll to the error message
							firstItemDOM.scrollIntoView()
							clearErrors()
							// show the error message
							firstItemDOM.insertAdjacentHTML('afterend', `<div class="text-danger">${firstErrorMessage}</div>`)
							// highlight the form control with the error
							firstItemDOM.classList.add('border', 'border-danger')
						} else if(data.status == 200){

							Swal.fire({
								icon: 'success',
								title: 'Sucesso',
								text: 'Grupo criado com sucesso!',
								showConfirmButton: false,
								timer: 2900
							})

							clearErrors();
							$('#contact-form')[0].reset();
							$("#contact-form > div:nth-child(3) > table tbody .participantes").remove();
						}else if(data.status == 400) {
							Swal.fire({
								icon: 'info',
								title: 'Desculpe!',
								text: 'O limite de grupo para esse evento ja foi preenchido!',
								showConfirmButton: false,
								timer: 2900

							})
						} else if (data.status == 500) {
							Swal.fire({
								icon: 'info',
								title: 'Desculpe!',
								text: 'Participante com campos vazio!',
								showConfirmButton: false,
								timer: 2900
							})
						}
					},
					error: function(xhr){
						console.log(xhr)
					}
				});
			} else {
				Swal.fire({
					icon: 'info',
					title: 'Oops...',
					text: 'Aceite todos os Termos!',
					showConfirmButton: false,
					timer: 2900
				})
			}

		}
	}


	function clearErrors() {
		// remove all error messages
		const errorMessages = document.querySelectorAll('.text-danger')
		errorMessages.forEach((element) => element.textContent = '')
		// remove all form controls with highlighted error text box
		const formControls = document.querySelectorAll('.form-control')
		formControls.forEach((element) => element.classList.remove('border', 'border-danger'))
	}

})(window.jQuery);
