// This function creates a standard table with column/rows
// Parameter Information
// objArray = Anytype of object array, like JSON results
// theme (optional) = A css class to add to the table (e.g. <table class="<theme>">
// enableHeader (optional) = Controls if you want to hide/show, default is show
function CreateTableView(objArray, theme, enableHeader) {
	// set optional theme parameter
	if (theme === undefined) {
		theme = 'mediumTable';
		//default theme
	}

	if (enableHeader === undefined) {
		enableHeader = true;
		//default enable headers
	}

	// If the returned data is an object do nothing, else try to parse
	var array = typeof objArray != 'object' ? JSON.parse(objArray) : objArray;

	var str = '<table data-role="table" data-mode="columntoggle" class="' + theme + '">';

	// table head
	if (enableHeader) {
		str += '<tbody><tr>';
		for (var index in array[0]) {
			str += '<td scope="col">' + index + '</td>';
		}
		str += '</tr>';
	}

	// table body
	for (var i = 0; i < array.length; i++) {
		str += (i % 2 == 0) ? '<tr class="alt">' : '<tr>';
		for (var index in array[i]) {
			str += '<td>' + array[i][index] + '</td>';
		}
		str += '</tr>';
	}
	str += '</tbody>'
	str += '</table>';
	return str;
}

function zoomIn()
{
    var Page = document.getElementById('Body');
    var zoom = parseInt(Page.style.zoom) + 10 +'%'
    Page.style.zoom = zoom;
    return false;
}
 
function zoomOut()
{
    var Page = document.getElementById('Body');
    var zoom = parseInt(Page.style.zoom) - 10 +'%'
    Page.style.zoom = zoom;
    return false;
}

// This function creates a details view table with column 1 as the header and column 2 as the details
// Parameter Information
// objArray = Anytype of object array, like JSON results
// theme (optional) = A css class to add to the table (e.g. <table class="<theme>">
// enableHeader (optional) = Controls if you want to hide/show, default is show
function CreateGallery(objArray) {
    
    // If the returned data is an object do nothing, else try to parse
    var array = typeof objArray != 'object' ? JSON.parse(objArray) : objArray;

	var str = '<div class="iscroll" id="galleryScroller" data-ajax="false" style="overflow: hidden;"><div class="scroller"><ul class="menu"> ';
	 
	for (var i = 0; i < array.length; i++) {
		str += (i % 3 == 0) ? '<li><ul class="section">' : ' ';
		for (var index in array[i]) {
			if (index == "PICTURE")
        	{
				str += '<li class="square"><a class="box gallery-item" href=\"data:image/gif;base64,' + array[i][index] +  '\">';
        		console.log(array[i][index]);
        		str += '<img src=\"data:image/gif;base64,' + array[i][index] +  '\"width="300" height="500" alt="embedded folder icon" />';
				str += ' </a></li>';
        	}
		}
		
		str += (i % 3 == 2) ? '</ul></li>' : ' ';
		
		if ( i == (array.length - 1)) {
			if ( i % 3 == 1) {
				str += '</ul></li>';
			} else if (i % 3 == 0) {
				str += '</ul></li>';
			}
		}
	}
     
	
	 str += '</ul></div></div>';
	 
    return str;
}

/*
 Author:
 Rahul Vagadiya (theunexpected1)
 http://rahulv.com
 */

var myScroll;
$(document).ready(function() {
	try {
		MBP.hideUrlBarOnLoad();
	} catch(e) {
	}

	$(window).bind("resize", function() {
		$('ul.menu').removeClass('on');
		$('.square img, .company').removeClass('on');

		if (($('.ui-page-active.iscroll').length > 0) || ($('.ui-page-active .iscroll').length > 0)) {
			var scrollContainer;

			if ($('.ui-page-active.iscroll').length > 0) {
				scrollContainer = $('.ui-page-active.iscroll')
			} else {
				scrollContainer = $('.ui-page-active .iscroll')
			}

			if (!$(scrollContainer).is(':visible')) {
				return;
			}

			/*
			 if (($(scrollContainer).hasClass('doneIScroll'))){
			 return;
			 }
			 $(scrollContainer).addClass('doneIScroll');
			 */

			var totalWidth = 0;
			$(".section", scrollContainer).each(function() {

				var square = $(this).find('.square');
				$(square).width($(square).height());
				$(this).css('padding-right', $(square).css('margin-bottom'));
				$('img', square).addClass('on');

				//if its a company tile
				if ($(this).find('.company').length) {
					var nextPadding = $(this).parent().next().find('.square:first').css('margin-bottom');
					$(this).css('padding-right', nextPadding);

					totalWidth += $(this).find('img').width() + $(this).outerWidth();
				} else {
					totalWidth += $(this).outerWidth() + 5;
				}
			});

			console.log(totalWidth);
			$('.menu', scrollContainer).css({
				'width' : totalWidth
			});

			$('.company', scrollContainer).css({
				'height' : $('.menu', scrollContainer).height()
			});

			$('.ui-page-active .menu').css('left', parseInt($('.ui-page-active .company img').width()) + parseInt($('.ui-page-active .menu .square:first').css('margin-bottom')));

			//$('ul.menu', scrollContainer).addClass('on');
			//$('.square img, #menuPage .company').addClass('on');

			var companyWidth = parseInt($('.company img', scrollContainer).outerWidth()) || 0;
			$('.scroller', scrollContainer).css({
				'width' : parseInt($('.menu', scrollContainer).outerWidth()) + parseInt($('.menu', scrollContainer).css('padding-right')) + companyWidth
			});

			try {
				myScroll.destroy();
			} catch(e) {

			}

			//if windows
			if (AppUtility.mobile.detectWindowsPhone()) {
				if (!$('.windowsBG').length) {
					$(scrollContainer).prepend('<div class="windowsBG" style="position:fixed;width:100%;height:100%;background:#000;left:0;top:0;z-index:-1;"></div>');
				}
			} else {

				var scrollerID = $(scrollContainer).attr("id");

				myScroll = new iScroll(scrollerID, {
					momentum : true,
					hScroll : true,
					vScroll : true,
					hScrollbar : false,
					vScrollbar : false,
					onScrollMove : function() {
						$(scrollContainer).addClass("dragging");
						$('a', scrollContainer).each(function() {
							var href = $(this).attr('href');
							if (href.length > 0) {
								$(this).attr('data-href', href);
								$(this).attr('href', '');
							}
							if (!AppUtility.mobile.detect()) {
								if ($('a', scrollContainer).hasClass('gallery-item')) {
									$('a.gallery-item', scrollContainer).unbind().click(function() {
										return false;
									}).removeClass('photoswiped');
								}
							}

						});

					},
					onScrollEnd : function() {
						$(scrollContainer).removeClass("dragging");
						setTimeout(function() {
							$('a', scrollContainer).each(function() {
								var href = $(this).attr('data-href');
								$(this).attr('href', href);
							});
							if (!AppUtility.mobile.detect()) {
								if ($('a', scrollContainer).hasClass('gallery-item')) {
									$('a.gallery-item', scrollContainer).addClass('photoswiped').photoSwipe();
								}
							}

						}, 50);
					}
				});

			}

			$('ul.menu', scrollContainer).addClass('on');
			$('.company', scrollContainer).addClass('on');

			setTimeout(function() {

				$('.company', scrollContainer).css({
					'height' : $('.menu', scrollContainer).height()
				});

			}, 100);

		}
		//end if

	});
	//end window resize binding

	/*
	 window.ondeviceorientation = function(event) {
	 //var a = event.alpha;
	 var b = event.beta;
	 var g = event.gamma;
	 g *=-1;

	 $('.menu .square').css({
	 'transform': 'skewY(' + parseInt(g/10) + 'deg)',
	 '-webkit-transform': 'skewY(' + parseInt(g/10) + 'deg)',
	 '-moz-transform': 'skewY(' + parseInt(g/10) + 'deg)'

	 })
	 }
	 */

	/*
	 $(window).scroll(function(e){
	 var scrollValue = $(window).scrollLeft() + 100;
	 $('.menu').css({
	 'transform-origin': scrollValue + 'px center',
	 '-webkit-transform-origin': scrollValue + 'px center',
	 '-moz-transform-origin': scrollValue + 'px center'
	 });
	 })
	 */
});

var windowLoaded = false;

var dirIP = '192.168.1.109';

var App = {
	init : function() {

		if (windowLoaded) {
			$(window).trigger("resize");
		}

		$(window).load(function() {
			windowLoaded = true;
			$(window).trigger("resize");
		});

		//initialize flexsliders
		$('.flexslider').each(function() {
			if ($(this).find('li').length > 1) {

				$(this).not('.slidered').addClass('slidered').flexslider({
					animation : "slide",
					controlNav : true
				});
			}
		});

		//initiate photoswipe
		try {
			var options = {};
			$('a.gallery-item:not(.photoswiped)').addClass('photoswiped').photoSwipe(options);
		} catch(e) {

		}

		$('.toggleMapHeight:not(.clickBound)').addClass('clickBound').click(function(e) {
			e.preventDefault();

			if ($(this).hasClass('opened')) {
				console.log("here");
				$('.map').empty().removeClass('large');
				$(this).removeClass('opened').removeClass('notransform');
			} else {
				$('.map').empty().addClass('large');
				$(this).addClass('opened')
			}

			var btn = $(this);

			setTimeout(function() {
				App.refreshMaps();
				//$(btn).text($(btn).attr('data-opened')).addClass('notransform');
			}, 700);
		});

		this.Forms.bind();
		this.refreshMaps();

	},

	refreshMaps : function() {

		$('.map').each(function() {
			var me = $(this);
			var locationTitle = $(this).attr('data-location');
			var myId = $(me).attr('id');
			var geocoder = new google.maps.Geocoder();
			geocoder.geocode({
				address : locationTitle
			}, function(locResult) {
				var latVal = locResult[0].geometry.location.lat();
				var longVal = locResult[0].geometry.location.lng();
				App.initializeMap(myId, locationTitle, latVal, longVal);
			});
		});
	},

	initializeMap : function(locationVal, titleVal, latVal, longVal) {
		var latlng = new google.maps.LatLng(latVal, longVal);
		var settings = {
			zoom : 13,
			center : latlng,
			mapTypeControl : false,
			mapTypeControlOptions : {
				style : google.maps.MapTypeControlStyle.DROPDOWN_MENU
			},
			navigationControl : false,
			navigationControlOptions : {
				style : google.maps.NavigationControlStyle.SMALL
			},
			streetViewControl : false,
			zoomControl : true,
			mapTypeId : google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById(locationVal), settings);

		var nibrasPos = new google.maps.LatLng(latVal, longVal);
		var nibrasMarker = new google.maps.Marker({
			position : nibrasPos,
			map : map,
			title : titleVal
		});

	},

	Forms : {

		bind : function() {
			// Add required class to inputs
			$(':input[required]').addClass('required');

			// Block submit if there are invalid classes found
			$('form:not(.html5enhanced)').addClass("html5enhanced").submit(function() {
				var formEl = this;
				$('input,textarea').each(function() {
					App.Forms.validate(this);
				});

				if (($(this).find(".invalid").length) == 0) {
					// Delete all placeholder text
					$('input,textarea').each(function() {
						if ($(this).val() == $(this).attr('placeholder'))
							$(this).val('');
					});

					$(this).each(function() {
						if ($(this).find("input[type=submit]:focus").attr("name") == "buttonSubmit") {
							$.ajax({
								url : 'http://' + dirIP + '/PlantsDiary/www/register_plant.php',
								type : 'POST',
								data: new FormData(this),
									processData: false, 
									contentType: false,
								success : function(r) {
									if (r == "success") {
										$(".successMessage").slideDown('fast');

										$(formEl).find('input[type="text"], input[type="email"], input[type="tel"], select').val('');
	
										$(formEl).find('textarea').val('');
										setTimeout(function() {
											$(".successMessage").slideUp('fast');
										}, 4000);
										alert('Información almacenada en la base de datos');
										
									}
								}
							});

						}

						if ($(this).find("input[type=submit]:focus").attr("name") == "buttonList") {
							$.ajax({
								url : 'http://' + dirIP + '/PlantsDiary/www/mostrar.php',
								type : 'POST',
								data : $(formEl).serialize(),
								beforeSend : function() {
									$("#resultado").html('<img align="middle"  style="padding-left:150px;"  src="img/ajax-loader.gif">');
								},
								success : function(datos) {
									$(".successMessage").slideDown('fast');

									$("#resultado").html(CreateTableView(datos, "CSSTableGenerator", true));
									setTimeout(function() {
										$(".successMessage").slideUp('fast');
									}, 4000);
								}
							});
						}

							if ($(this).find("input[type=submit]:focus").attr("name") == "buttonGallery") {
							$.ajax({
								url : 'http://' + dirIP + '/PlantsDiary/www/mostrar_galeria.php',
								type : 'POST',
								data : $(formEl).serialize(),
								beforeSend : function() {
									$("#result").html('<img align="middle"  style="padding-left:150px;"  src="img/ajax-loader.gif">');
								},
								success : function(datos) {
									$(".successMessage").slideDown('fast');
									
									$("#result").html(String(CreateGallery(datos)));
									$(window).resize();
									setTimeout(function() {
										$(".successMessage").slideUp('fast');
									}, 4000);
								}
							});
						}

					});

					return false;
				} else {
					return false;
				}
			});

		},
		is_email : function(value) {
			return (/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/).test(value);
		},
		is_url : function(value) {
			return (/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i).test(value);
		},
		is_number : function(value) {
			return ( typeof (value) === 'number' || typeof (value) === 'string') && value !== '' && !isNaN(value);
		},
		validate : function(element) {
			var $$ = $(element);
			var validator = element.getAttribute('type');
			// Using pure javascript because jQuery always returns text in none HTML5 browsers
			var valid = true;
			var apply_class_to = $$;

			var required = element.getAttribute('required') == null ? false : true;
			switch(validator) {
			case 'email':
				valid = App.Forms.is_email($$.val());
				break;
			case 'url':
				valid = App.Forms.is_url($$.val());
				break;
			case 'number':
				valid = App.Forms.is_number($$.val());
				break;
			}

			// Extra required validation
			if (valid && required && $$.val().replace($$.attr('placeholder'), '') == '') {
				valid = false;
			}

			// Set input to valid of invalid
			if (valid || (!required && $$.val() == '')) {
				apply_class_to.removeClass('invalid');
				apply_class_to.addClass('valid');
				return true;
			} else {
				apply_class_to.removeClass('valid');
				apply_class_to.addClass('invalid');
				return false;
			}
		}
	}

};

$(document).ready(function() {

});

var pageChange = function() {
	App.init();
	//alert("pc");
	//App.init();
}

$(document).bind('pagechange', pageChange);

$('div').live('pagehide', function(event, ui) {
	var page = jQuery(event.target);

	if (page.attr('data-cache') == 'never') {
		page.remove();
	};
});

