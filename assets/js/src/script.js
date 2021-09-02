floatingLabel.init();

/** ALL PAGE **/
var AllPage = function () {

	/** Plugin **/
	var pluginStart = function () {
		/** dotdotdot **/
		$('.dotdotdot').each(function(i, elm) {
			$(this).dotdotdot({
				watch: true,
				ellipsis: ' ...'
			});
		});
        /** end dotdotdot **/
        /** readmore **/
        if($('.readmore').length) {
            $('.readmore').each(function (index) {
                var $this = $(this),
                    height = $(this).attr('data-height');
                $this.attr('id', 'readmore-' + index );
                $('#readmore-' + index).readmore({
                    speed: 75,
                    collapsedHeight: eval(height),
                    moreLink: '<div class="readmore-text-link readmore-text-link-open"><a href="#open">Развернуть текст</a></div>',
                    lessLink: '<div class="readmore-text-link readmore-text-link-close"><a href="#open">Свернуть текст</a></div>'
                });
            });
        };
        /** end readmore **/

		/*tooltip*/
		$('[data-toggle="tooltip"]').tooltip();
		/*end tooltip*/
		/*select*/
		$(".js-select").select2({
			minimumResultsForSearch: Infinity,
			containerCssClass: ''
		});
		/*end select*/
		/*fancybox*/
		$('[data-fancybox], [rel="data-fancybox"]').fancybox({
			image : {
				preload : "auto",
				protect : true
			},
			buttons: [
				"zoom",
				'slideShow',
				'download',
				"thumbs",
				"close"
			],
			thumbs : {
				autoStart   : false, // Display thumbnails on opening
				hideOnClose : true   // Hide thumbnail grid when closing animation starts

			},
			touch : {
				vertical : 'auto'
			},
			ajax : {
				settings : {
					data : {
						fancybox : true
					}
				}
			},
			beforeShow : function( instance, current ) {}
		});
		$('[data-fancybox="ajax"]').fancybox({
			loop : false,
			toolbar : false,
			infobar : false,
			toolbar : false,
			hash : null,
			slideShow : false,
			modal : false,
			arrows : false,
			touch : false,
			afterShow : function( instance, current ) {
				$(".js-select").select2({minimumResultsForSearch: Infinity});
			}
		});
        $('[data-fancybox="modal"]').fancybox({
            modal: true,
            loop : false,
            toolbar : false,
            infobar : false,
            toolbar : false,
            hash : null,
            slideShow : false,
            arrows : false,
            touch : false,
            baseTpl:
                '<div class="fancybox-container fc-container" role="dialog" tabindex="-1">' +
                '<div class="fancybox-bg fancybox-bg-white"></div>' +
                '<div class="fancybox-inner">' +
                '<div class="fancybox-stage"></div>' +
                "</div>" +
                "</div>",
            beforeShow : function( instance, current ) {}
        });
		/*end fancybox*/
		/*
          * Replace all SVG images with inline SVG
          */
		jQuery('img.svg').each(function(){
			var $img = jQuery(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');

			jQuery.get(imgURL, function(data) {
				// Get the SVG tag, ignore the rest
				var $svg = jQuery(data).find('svg');

				// Add replaced image ID to the new SVG
				if(typeof imgID !== 'undefined') {
					$svg = $svg.attr('id', imgID);
				}
				// Add replaced image classes to the new SVG
				if(typeof imgClass !== 'undefined') {
					$svg = $svg.attr('class', imgClass+' replaced-svg');
				}

				// Remove any invalid XML tags as per http://validator.w3.org
				$svg = $svg.removeAttr('xmlns:a');

				// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
				if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
					$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
				}

				// Replace image with new SVG
				$img.replaceWith($svg);

			}, 'xml');

		});
		/*end svg*/

        /** Scroll To Box **/
        $(document).on('click','[data-scroll-box]',function(e){
            e.preventDefault();
            var $box = $($(this).data('scroll-box'));
            $('html, body').animate(
                {
                scrollTop : $box.offset().top
                },
                300,
                function(){

                }
            );
            return false;
        });
        /** End Scroll To Box **/


        $('input[type="file"]').change(function() {
            $(this).parent().parent().parent().find('label.file').text( $(this).val() );
        });

	}
	/** End Plugin **/



	/** Navbar **/
	var Navbar = function () {
		var WINDOW_WIDTH = $(window).width();

        /** Menu **/
        $(document).on('click', '.openMenu', function(){
            $('body').toggleClass('menu__active');
            return false;
        });
        /** End Menu **/

        /** Menu **/
        $(document).on('click', '.openSidebarLeft', function(){
            $('body').toggleClass('sidebar__active');
            return false;
        });
        /** End Menu **/



		/** Menu Catalog **/
		$(document).on('click', '.openMenuCatalog', function(){
			$('body').toggleClass('menucatalog__active');
			return false;
		});
		/** End Catalog **/

        $(".openMenuCatalog").hover(
            function () {
                $('body').addClass('menucatalog__active');
            },
            function () {

            }
        );

		$(window).on('load resize', function () {

		});

		if(!$('.mobilemenu').length){

		    $('#container').prepend(
		        '<a href="#close" class="mobilemenu__close openMenu"></a>' +
		        '<div class="mobilemenu">' +
                    '<div class="mobilemenu__row">' +
                        '<div class="mobilemenu__row-header"></div>' +
                        '<div class="mobilemenu__row-content mobilemenu__nav slinky"></div>' +
                        '<div class="mobilemenu__row-footer"></div>' +
                    '</div>' +
                '</div>'
            );



            /** Slinky **/
            $('.mobilemenu__nav').append(
                $('.header__nav').clone().removeAttr('class')
            );
            $('.mobilemenu__nav ul').prepend(
                '<li class="mobilemenu__nav-catalog">' +
                '<a href="/catalog/">Каталог продукции</a>' +
                '</li>'
            );
            $('.mobilemenu__nav-catalog').append(
                $('.megamenu__menu').clone().removeAttr('class')
            );
            var slinky = $('.slinky').slinky({
                title: true,
                resize: true
            });
            /** End Slinky **/

            /** Download **/
            $('.mobilemenu__row-footer').append(
                $('.megamenu__download').clone()
            );
            /** End Download **/

            /** Btn Decisions **/
            $('.mobilemenu__row-header').append(
                $('.header__btn-decisions').clone().removeClass('btn-opacity btn-sm').addClass('btn-block')
            );
            /** End Btn Decisions **/

            /** Contacts **/
            $('.mobilemenu__row-header').prepend(
                $('.header__contacts').clone()
            );
            /** End Contacts **/
        }


	}
	/** End Navbar **/

	/*--Init--*/
	return {
		init: function () {
			pluginStart();
			Navbar();
		}
	};
	/*--End Init--*/
}();
/** END ALL PAGE **/

/** HOME PAGE **/
var HomePage = function () {
	/* Slider */
	var Slider = function (options)
	{
		/** Swiper Intro **/
		if($('.intro-swiper').length) {
            var settings_swiper_intro = {
                    speed: 500,
                    slidesPerView: 1,
                    effect: 'fade',
                    spaceBetween: 0,
                    loop: false,
                    resistanceRatio: 0,
                    centeredSlides: false,
                    resizeReInit: true,
                    simulateTouch: false,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false
                    },
                    navigation: {
                        nextEl: '.intro-swiper .swiper-button-next',
                        prevEl: '.intro-swiper .swiper-button-prev',
                    },
                    pagination: {
                        el: '.intro-swiper .swiper-pagination',
                        clickable: true,
                        renderBullet: function (index, className) {
                            return '<span class="' + className + '"><svg viewBox="0 0 120 120"><g><circle class="default" cx="25" cy="25" r="20"></circle><circle class="default inner" cx="25" cy="25" r="20"></circle></g></svg></span>';
                        }
                    },
                    breakpoints: {
                        999: {
                            simulateTouch: false,
                        },
                    },
                    init: false
                },
                swiper_intro = new Swiper('.intro-swiper .carousel', settings_swiper_intro);

            swiper_intro.on('init slideChangeTransitionStart', function () {
                var image = $('.intro-swiper .swiper-slide-active').attr('data-slide-image'),
                    number = $('.intro-swiper .swiper-slide-active').attr('data-slide-number');

                $('.intro-swiper-image').css({
                    'background-image': 'url(' + image + ')'
                });

                $('.intro-swiper-current').text(number);

                if ($('.intro-swiper-number').length) {
                    $('.intro-swiper-number').html(
                        '<span>' +
                        eval(swiper_intro.realIndex + 1) +
                        '</span>' +
                        '<p>' +
                        swiper_intro.slides.length +
                        '</p>'
                    );
                }
            });
            swiper_intro.init();
        };
		/** End Swiper Intro **/

		/** Swiper Instabox **/
		var settings_swiper_instabox = {
				speed:					1500,
				slidesPerView: 			'auto',
				spaceBetween: 			15,
				watchOverflow: 			true,
				watchSlidesVisibility: 	true,
				simulateTouch: 			true,
                centerInsufficientSlides:   true,
                loop:                       true,
                centeredSlides:             true,
				navigation: {
					nextEl: 			'.instabox-swiper .swiper-button-next',
					prevEl: 			'.instabox-swiper .swiper-button-prev',
				},
				pagination: {
					el: 				'.instabox-swiper .swiper-pagination',
					clickable: 			true,
				},
				breakpoints: {
                    700: {
                        spaceBetween: 			    30,

                    },
                    1000: {
                        spaceBetween: 			    45,

                    }
				}
			},
			swiper_instabox = new Swiper('.instabox-swiper .carousel', settings_swiper_instabox);
		/** End Swiper Instabox **/

        /** Swiper Footer **/
        var settings_swiper_footer = {
                speed:					500,
                effect:                 'fade',
                slidesPerView: 			1,
                spaceBetween: 			0,
                watchOverflow: 			true,
                watchSlidesVisibility: 	true,
                simulateTouch: 			true,
                navigation: {
                    nextEl: 			'.footer-swiper .swiper-button-next',
                    prevEl: 			'.footer-swiper .swiper-button-prev',
                },
                pagination: {
                    el: 				'.footer-swiper .swiper-pagination',
                    type:               'fraction',
                },
            },
            swiper_footer = new Swiper('.footer-swiper .carousel', settings_swiper_footer);
        /** End Swiper Footer **/




	}
	/* End Slider */
	/*--Init--*/
	return {
		init: function () {
			Slider();
		}
	};
	/*--End Init--*/
}();
/** END HOME PAGE **/

/** CATALOG PAGE **/
var CatalogPage = function () {

    /** Catalog **/
    var Catalog = function (options)
    {

        /** Swiper Catalog Menu **/
        var settings_swiper_catalogmenu = {
                speed:					1500,
                slidesPerView: 			'auto',
                spaceBetween: 			30,
                watchOverflow: 			true,
                watchSlidesVisibility: 	true,
                simulateTouch: 			true,
                navigation: {
                    nextEl: 			'.catalogmenu-swiper .swiper-button-next',
                    prevEl: 			'.catalogmenu-swiper .swiper-button-prev',
                },
                pagination: {
                    el: 				'.catalogmenu-swiper .swiper-pagination',
                    clickable: 			true,
                },
                breakpoints: {

                }
            },
            swiper_catalogmenu = new Swiper('.catalogmenu-swiper .carousel', settings_swiper_catalogmenu);
        /** End Swiper Catalog Menu **/

        /** Swiper Catalog Banners **/
        var settings_swiper_catalogbanners = {
                speed:					1500,
                slidesPerView: 			1,
                effect:                 'fade',
                spaceBetween: 			30,
                watchOverflow: 			true,
                watchSlidesVisibility: 	true,
                simulateTouch: 			true,
                autoplay: {
                    delay: 3000,
                },
                navigation: {
                    nextEl: 			'.catalog__banners .swiper-button-next',
                    prevEl: 			'.catalog__banners .swiper-button-prev',
                },
                pagination: {
                    el: 				'.catalog__banners .swiper-pagination',
                    clickable: 			true,
                },
                breakpoints: {

                }
            },
            swiper_catalobanners = new Swiper('.catalog__banners .swiper-container', settings_swiper_catalogbanners);
        /** End Swiper Catalog Banners **/


    }
    /** Catalog **/

    /** Product **/
    var Product = function (options)
    {

        /** Swiper Product Gallery **/
        var settings_swiper_productgallery = {
                speed:					1500,
                slidesPerView: 			1,
                spaceBetween: 			0,
                watchOverflow: 			true,
                watchSlidesVisibility: 	true,
                simulateTouch: 			true,
                effect:                 'fade',
                navigation: {
                    nextEl: 			'.product-swiper .swiper-button-next',
                    prevEl: 			'.product-swiper .swiper-button-prev',
                },
                pagination: {
                    el: 				'.product-swiper .swiper-pagination',
                    type:               'fraction',
                },
                breakpoints: {

                }
            },
            swiper_productgallery = new Swiper('.product-swiper .carousel', settings_swiper_productgallery);
        /** End Swiper Product Gallery **/

        /** Title **/
        if($('.product__title').length) {
            $('.product__row-start').prepend(
                $('.product__title').clone().addClass('hidden')
            )
        }
        /** End Title **/

    }
    /** Product **/


    /*--Init--*/
    return {
        init: function () {
            Catalog();
            Product();
        }
    };
    /*--End Init--*/
}();
/** END CATALOG PAGE **/

/** DOUR CUPE PAGE **/
var DourCupePage = function () {

    /** Slider **/
    var Slider = function (options)
    {

        /** Swiper Materials Gallery **/
        if($('.dour__cupe-materials--swiper').length) {
            var settings_swiper_materials = {
                    speed:					    1500,
                    slidesPerView: 			    1,
                    spaceBetween: 			    30,
                    navigation: {
                        nextEl: 			'.dour__cupe-materials--swiper .swiper-button-next',
                        prevEl: 			'.dour__cupe-materials--swiper .swiper-button-prev',
                    },
                    pagination: {
                        el: 				'.dour__cupe-materials--swiper .swiper-pagination',
                    },
                    breakpoints: {
                        1000: {
                            slidesPerView: 			2,
                        },
                    },
                },
                swiper_materials = new Swiper('.dour__cupe-materials--swiper .carousel', settings_swiper_materials);
        }
        /** End Swiper Materials Gallery **/


    }
    /** Slider **/

    /** Form **/
    var Form = function (options) {

        $('.dour__cupe-variants [type="checkbox"]').change(function () {
            var $val = $(this).val();
            if ($(this).prop('checked')) {
                var box = $('.dour__cupe-formone form');
                $('html, body').animate({scrollTop: $('.dour__cupe-formone').offset().top}, 300);
                $('.dour__cupe-formone input[name="insert"]').val($('.dour__cupe-formone input[name="insert"]').val() + ', ' + $val);
                return false;
            } else {
                $('.dour__cupe-formone input[name="insert"]').val($('.dour__cupe-formone input[name="insert"]').val().replace(', ' + $val, ''));
            };
        });
    }
    /** Form **/

    /*--Init--*/
    return {
        init: function () {
            Slider();
            Form();
        }
    };
    /*--End Init--*/
}();
/** END DOUR CUPE PAGE **/

/** REZKA ZERKAL PAGE **/
var RezkaPage = function () {

    /** Form **/
    var Form = function (options) {

        $(document).on('submit', '.rezkaForm', function (event) {

            if( !$('#rezkaFormProcess').val().length ){
                $('html, body').animate({
                    scrollTop: $('#rezkaProcess').offset().top
                }, 300);
                return false;
            }

            if( !$('#rezkaFormMaterial').val().length ){
                $('html, body').animate({
                    scrollTop: $('#rezkaMaterial').offset().top
                }, 300);
                return false;
            }

        });

        $(document).on('click', '#rezkaProcessNext', function (event) {
            $('html, body').animate({
                scrollTop: $('#rezkaMaterial').offset().top
            }, 300);
            return false;
        });

        /**
         * Checkbox
         */
        $(document).on('change','.rezkaProcess input[type="checkbox"]',function(e){

            var $inp = $('#rezkaFormProcess'),
                text = $(this).val();

            if ($(this).prop('checked')) {
                $inp.val($inp.val() + text + ', ');
            }else{
                $inp.val($inp.val().replace(text + ', ', ''));
            }

        });

        /**
         * Checkbox
         */
        $(document).on('change','.rezkaMaterial input[type="checkbox"]',function(e){
            var $inp = $('#rezkaFormMaterial'),
                text = $(this).val();

            if ($(this).prop('checked')) {
                $inp.val($inp.val() + text + ', ');
            }else{
                $inp.val($inp.val().replace(text + ', ', ''));
            }
        });






    }
    /** Form **/

    /*--Init--*/
    return {
        init: function () {
            Form();
        }
    };
    /*--End Init--*/
}();
/** END REZKA ZERKAL PAGE **/

/** SOLUTIONS PAGE **/
var SolutionsPage = function () {

    /** Slider **/
    var Slider = function (options) {

        /** Swiper Solutions **/
        var settings_swiper_solutions = {
                speed:					800,
                slidesPerView: 			1,
                spaceBetween: 			15,
                watchOverflow: 			true,
                watchSlidesVisibility: 	true,
                simulateTouch: 			true,
                centerInsufficientSlides:   true,
                loop:                       true,
                centeredSlides:             true,
                navigation: {
                    nextEl: 			'.solutions__intro-slider .swiper-button-next',
                    prevEl: 			'.solutions__intro-slider .swiper-button-prev',
                },
                pagination: {
                    el: 				'.solutions__intro-slider .swiper-pagination',
                    type:               'fraction',
                },
                breakpoints: {
                    600: {
                        spaceBetween: 			    15,
                        slidesPerView: 			3,

                    },
                }
            },
            swiper_solutions = new Swiper('.solutions__intro-slider .swiper-container', settings_swiper_solutions);
        /** End Swiper Solutions **/

    }
    /** Slider **/

    /*--Init--*/
    return {
        init: function () {
            Slider();
        }
    };
    /*--End Init--*/
}();
/** END SOLUTIONS PAGE **/

jQuery(document).ready(function() {
	AllPage.init();
	HomePage.init();
    CatalogPage.init();
    DourCupePage.init();
    RezkaPage.init();
    SolutionsPage.init();
});
