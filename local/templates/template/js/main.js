function is_mobile() {
	return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
}
$(window).on('load', function() {
	 if (!is_mobile()) {
			NProgress.configure({
			parent: '.loader-content'
			});
			NProgress.start();
			NProgress.done();
			setTimeout(function() {
				$('.wrapper-loader').fadeOut(200);
			}, 500);
		}
	var heightHead = $('.ui-header').outerHeight();
	jQuery(window).on("resize", function() {
		heightHead = +parseInt($('.ui-header').outerHeight());
	});
	jQuery(window).on("scroll load", function() {
		if ($(window).scrollTop() > heightHead) {
			 $('.ui-header').addClass('fixed-menu');
			 setTimeout(function() {
			 	$('.ui-header').addClass('scroll-transform');
			 }, 100);
		} else {
			$('.ui-header').removeClass('fixed-menu');
			$('.ui-header').removeClass('scroll-transform');
		}
		if ($(window).scrollTop() > $(window).height()) {
			$('.scroll-to-top').addClass('scroll-to-top-visible');
		} else {
			$('.scroll-to-top').removeClass('scroll-to-top-visible');
		}	
	});
	var animLine  = function() {
			if($('.brand-collections_tab-names').length){
				var act = $('.brand-collections_tab-names li.active');
				var menuHead = jQuery('.brand-collections_tab-names');
				var left_pos = act.offset().left - menuHead.offset().left;
				var el_width = act.outerWidth();
				$('.anim-line').css({
					'width': el_width,
					'left': left_pos,
				});
			}
		} 
		animLine();
});

jQuery(document).ready(function($) {
	 if (is_mobile()) {
	  	setTimeout(function() {
	  		$('.wrapper-loader').fadeOut(150);
	  	}, 600);
	  }
	lazyLoad($('body'));
	if($('.product-card_fixed-panel').length && $(window).width()< 575){
		$('.main-footer').addClass('is-pad');
	}
	$(".hamburger").on("click", function() {
		$(this).toggleClass('is-active');
		$('.head_fixed-menu').toggleClass('is-open');
		$('.bg-overlay').fadeToggle(200);
		if (is_mobile()) {
			$('html').toggleClass('is-hidden');
		}
	});

	$('.menu-text').on("click", function() {
		$(".hamburger").toggleClass('is-active');
		$('.head_fixed-menu').toggleClass('is-open');
		$('.bg-overlay').fadeIn(200);
		if (is_mobile()) {
			$('html').toggleClass('is-hidden');
		}
	});

	$('.fixed-menu_close-btn').on("click", function() {
		$(".hamburger").toggleClass('is-active');
		$('.head_fixed-menu').removeClass('is-open');
		$('.bg-overlay').fadeOut(200);
		if (is_mobile()) {
			$('html').toggleClass('is-hidden');
		}
	});
	$('.bg-overlay').on("click", function() {
		$(this).fadeOut(200);
		$(".hamburger").removeClass('is-active');
		$('.head_fixed-menu').removeClass('is-open');
		if (is_mobile()) {
			$('html').toggleClass('is-hidden');
		}
	});
	

	$('.search-form_input').focus(function() {
		$(this).closest('.search-form').addClass('is-active');
	});
	$('.js_phone-icon').on("click", function() {
			$('.dropdown-phone').slideToggle(200);
	});
	 $('body').on("touchend, click", function(e) {
	 	if( $(e.target).closest(".search-form").length) return;
	 	$('.search-form').removeClass('is-active');
	 });

	$('.main-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		arrows: false
	});

	$('.main-slider').on('afterChange', function(event, slick, i) {
		var item = $('.main-slider').slick('slickCurrentSlide')
		$(".main-slider_dots li").removeClass('active');
		$(".main-slider_dots li").eq(item).addClass('active');
	});

	$(".main-slider_dots li").click(function(e) {
		$(".main-slider_dots li").removeClass('active');
		$(this).addClass('active');
		var slide = $(this).data('id');
		$('.main-slider').slick('slickGoTo', slide);
	});
	if($(window).width()> 575){
		$('.category-slider').slick({
			variableWidth: true,
			infinity: false,
			slidesToScroll: 1,
			appendArrows: $('.category-counter'),
			responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			}, ]
		});
	}
	$('.brand-collections_slider').each(function() {
		var counter = $(this).closest('.wrapper_brand-collections_slider').find('.brand-collections_counter');
		$(this).slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			centerMode: true,
			centerPadding: '16%',
			appendArrows: counter,
			responsive: [{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					centerPadding: '15%',
				}
			}, {
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					centerPadding: '10%',
				}
			}, ]
		});
	});
	if (!is_mobile()) {
	  	$('.category-slider').hover(function() {
				$('.category-counter').addClass('is-visible');
			}, function() {
				$('.category-counter').removeClass('is-visible');
			});
			$('.brand-collections_slider').hover(function() {
				$('.brand-collections_counter').addClass('is-visible');
			}, function() {
				$('.brand-collections_counter').removeClass('is-visible');
			});
	  }
	if($(window).width()> 575){
		$('.product-slider').slick({
			variableWidth: true,
			infinity: false,
			slidesToScroll: 1,
			responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			}, ]
		});
	}

	$('.interior-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		fade: true
	});

	$('.category-mod_slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		fade: true
	});
	$('.product-card_slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		fade: true
	});
	$('.brand-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		fade: true
	});
	if($(window).width()> 575){
		$('.viewed-products_slider').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			}, 
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			}, 
			]
		});
	}
	/*$('.product-item_fav').on("click", function() {
		$(this).toggleClass('is-active');
	});
	$('.product-card_fav').on("click", function() {
		$(this).toggleClass('is-active');
	});
	$('.product-card_fixed-fav').on("click", function() {
		$(this).toggleClass('is-active');
	});*/
	$('.footer-menu_show-menu').on("click", function() {
		if ($(this).find('.text').html() == 'Свернуть') {
      $('.footer-column').removeClass('is-active');
      $(this).find('.text').text('Развернуть');
      $(this).removeClass('is-active');
    } else {
      $('.footer-column').addClass('is-active');
      $(this).find('.text').text('Свернуть');
      $(this).addClass('is-active');
    }
		return false;
	});
	$('.js-select').selectric({
			maxHeight: 300,
			disableOnMobile: false,
			nativeOnMobile: false,
		});
		$('.tab-container').on('click', '.tab:not(.active)', function() {
			$(this).addClass('active').siblings().removeClass('active')
			$(this).closest('.tab-container').find('.tab-item').removeClass('is-visible').eq($(this).index()).addClass('is-visible');
			if($('.anim-line').length){
				var act = $('.brand-collections_tab-names li.active');
				var menuHead = jQuery('.brand-collections_tab-names');
				var left_pos = act.offset().left - menuHead.offset().left;
				var el_width = act.outerWidth();
				$('.anim-line').stop(false, false).animate({
				  'left': left_pos,
				  'width': el_width
				}, 300);
			}

		});
			
	$(".fancybox").fancybox({
		afterLoad: function(instance, current) {
			if (!is_mobile()) {
				$('.fixed-menu').addClass('is-overflow');
				$('.scroll-to-top').addClass('is-hidden');
			}
		},
		afterClose: function(instance, current) {
			if (!is_mobile()) {
				$('.fixed-menu').removeClass('is-overflow');
				$('.scroll-to-top').removeClass('is-hidden');
			}
		}
	});
	if (!is_mobile()) {
		$('.js-modal').on('show.bs.modal', function(event) {
			$('.fixed-menu').addClass('is-overflow');
			$('.scroll-to-top').addClass('is-hidden');
		});
		$('.js-modal').on('hidden.bs.modal', function(event) {
			$('.fixed-menu').removeClass('is-overflow');
			$('.scroll-to-top').removeClass('is-hidden');
		});
	}
	$('.form-control').focus(function() {
		$(this).closest('.form-group').addClass('focus');
		$(this).closest('.form-group').find('.input_delete-text').addClass('is-visible');
	});
	$('.form-control').blur(function() {
		if ($(this).val().length == 0) {
			$(this).closest('.form-group').removeClass('focus');
			$(this).closest('.form-group').find('.input_delete-text').removeClass('is-visible');
		}
	});
	$('.input_delete-text').on("click", function() {
		$(this).closest('.form-group').find('.form-control').val(' ');
		$(this).closest('.form-group').removeClass('focus');
		$(this).removeClass('is-visible');
	});
	$('form').find('.form-control').each(function() {
		if ($(this).val().length > 1) {
			$(this).closest('.form-group').addClass('focus');
			$(this).closest('.form-group').find('.input_delete-text').addClass('is-visible');
		}
	})
	$('.order-good_th-collapse-btn').on('click', function() {
		$(this).closest('.order-good').toggleClass('is-active');
	});
	$('.order-good_mobile-btn').on("click", function() {
		if ($(this).find('.text').html() == 'Свернуть') {
			$(this).closest('.order-good').removeClass('is-active');
			$(this).find('.text').text('Детали');
		} else {
			$(this).closest('.order-good').addClass('is-active');
			$(this).find('.text').text('Свернуть');
		}
	});
	$(document).on("click",'.delivery-item', function(e) {
		if($(e.target).closest(".input-radio").length) return false;
		var active = false;
    if($(this).hasClass('is-active')) active = true;
    $('.delivery-item.is-active').removeClass('is-active');
    if(!active) $(this).addClass('is-active');
		if($(this).hasClass('is-active')){
			$(this).find('.input-radio').prop('checked',"checked").change();
		} else{
			$(this).find('.input-radio').prop('checked',false);
		}
	});

	$(document).on("click",'.payment-item', function(e) {
		if($(e.target).closest(".input-radio").length) return false;
		var active = false;
    if($(this).hasClass('is-active')) active = true;
    $('.payment-item.is-active').removeClass('is-active');
    if(!active) $(this).addClass('is-active');
		if($(this).hasClass('is-active')){
			$(this).find('.input-radio').prop('checked',"checked");
		} else{
			$(this).find('.input-radio').prop('checked',false);
		}
	});
	
	if ($('.js_scroll-box').length) {
		jQuery(window).on("scroll load resize", function() {
			if ($(window).width() > 991) {
				var r_det = $('.unified_right-column').offset().top;
				var w_top = $(window).scrollTop();
				var r_top = $('.unified_right-column').outerHeight();
				var r_height = $('.js_scroll-box').outerHeight();
				var h_eighbor = $('.unified_left-column').outerHeight();
				if (h_eighbor > r_height) {
					if (w_top >= r_det) {
						$('.js_scroll-box').addClass('is-sticky');
					} else {
						$('.js_scroll-box').removeClass('is-sticky');
					}
					if (w_top + r_height >= (r_top + r_det)) {
						$('.js_scroll-box').addClass('is-static');
					} else {
						$('.js_scroll-box').removeClass('is-static');
					}
				}
			}
		});
	}
	$(document).on("click",'.js_form-submit', function() {
		var jhis = $(this).closest('form');
		$(jhis).find('.requiredField').removeClass('input-error');
		$(jhis).find('.error').remove();
		var error = 0;
		$(jhis).find('.requiredField').each(function() {
			if ($(this).hasClass('callback-phone')) {
				if ($(this).val().length < 10) {
					$(this).after('<span class="error">Введите номер телефона</span>');
					$(this).addClass('input-error');
					error = 1;
				}
			} else if ($(this).hasClass('callback-name')) {
				if ($(this).val().length < 3) {
					$(this).addClass('input-error');
					$(this).after('<span class="error">Заполните поле имя</span>');
					error = 2;
				}
			}else if ($(this).hasClass('callback-text')) {
				if ($(this).val().length < 4) {
					$(this).addClass('input-error');
					$(this).after('<span class="error">Заполните поле</span>');
					error = 3;
				}
			}else if ($(this).hasClass('callback-email')) {
				var emailReg = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
				if (emailReg.test($(this).val()) === false) {
					$(this).addClass('input-error');
					$(this).after('<span class="error">Введите корректный E-mail</span>');
					error = 4;
				}
			}
		});
		if (error == 0) {
			/***отправка формы**/
		} else {
			if(jhis.hasClass('checkout-form')){
				var hHead = $('.ui-header').outerHeight();
				var myOffset = $(jhis).find('.error').offset().top;
				$('html, body').animate({
					scrollTop: myOffset - hHead- 75
				}, 1000);
			}
			return false;
		}
	});
	$('.scroll-to-top').on('click', function() {
		$('html, body').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	$('input[type="tel"]').inputmask("+7 (999) 999 99 99", {
		"clearIncomplete": true,
		showMaskOnHover: false,
	});
});
function lazyLoad($content) {
		$content.find('img[data-src], source[data-src], audio[data-src], iframe[data-src]').each(function() {
			$(this).attr('src', $(this).data('src'));
			$(this).removeAttr('data-src');
			if ($(this).is('source')) {
				$(this).closest('video').get(0).load();
			}
		});
	}

/*
if ($('#map').length) {
	YaMapsShown = false;
	$(window).on("scroll load resize", function() {
		if (!YaMapsShown) {
			if ($(window).scrollTop() + $(window).height() > $('#map').offset().top - 500) {
				showYaMaps();
				YaMapsShown = true;
			}
		}
	});

	function showYaMaps() {
		var script = document.createElement("script");
		script.type = "text/javascript";
		script.src = "https://api-maps.yandex.ru/2.1/?lang=ru_RU";
		document.getElementById("map").appendChild(script);
		script.onload = function() {
			ymaps.ready(init);
			var myMap, myMap2,
				myPlacemark2;

			function init() {
				myMap = new ymaps.Map("map", {
					center: [59.94899156416814,30.3044955],
					zoom: 16,
					behaviors: ['default', 'scrollZoom'],
				});
				myMap.behaviors.disable('scrollZoom');
				myMap.geoObjects.add(new ymaps.Placemark([59.94899156416814,30.3044955], {
					iconCaption: 'Зоологический пер., д.3',
				}, {
					preset: 'islands#redCircleDotIcon',
				}));
			}
		}
	}
}*/
