function initMap() {
	var styledMapType = new google.maps.StyledMapType(
		[
		  {elementType: 'geometry', stylers: [{color: '#333333'}]},
		  {elementType: 'labels.text.fill', stylers: [{color: '#333333'}]},
		  {elementType: 'labels.text.stroke', stylers: [{color: '#6d6d6d'}]},
		  {
				featureType: 'road',
				elementType: 'geometry',
				stylers: [{color: '#282828'}]
			},
		],
		{name: 'W&S Styled Map'}
		);

	var myLatLng = {lat: 20.689273, lng: -103.385242};
	var map = new google.maps.Map(document.getElementById('map-showroom'), {
		zoom: 18,
		mapTypeControlOptions: {
			mapTypeIds: ['styled_map']
		},
		center: myLatLng
	});

	map.mapTypes.set('styled_map', styledMapType);
	map.setMapTypeId('styled_map');

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		animation: google.maps.Animation.DROP,
		title: 'WOOD AND STONE SHOWROOM GUADALAJARA'
	});


	var wareshouseLatLng = {lat: 20.705980, lng: -103.458703};
	var map_warehouse = new google.maps.Map(document.getElementById('map-warehouse'), {
		zoom: 18,
		mapTypeControlOptions: {
			mapTypeIds: ['styled_map']
		},
		center: wareshouseLatLng
	});

	map_warehouse.mapTypes.set('styled_map', styledMapType);
	map_warehouse.setMapTypeId('styled_map');

	var marker = new google.maps.Marker({
		position: wareshouseLatLng,
		map: map_warehouse,
		animation: google.maps.Animation.DROP,
		title: 'BODEGA WOOD AND STONE GUADALAJARA'
	});


}

$(function() {
    console.log( "ready!" );

	/**
	   * jQuery function to prevent default anchor event and take the href * and the title to make a share popup
	   *
	   * @param  {[object]} e           [Mouse event]
	   * @param  {[integer]} intWidth   [Popup width defalut 500]
	   * @param  {[integer]} intHeight  [Popup height defalut 400]
	   * @param  {[boolean]} blnResize  [Is popup resizeabel default true]
	   */
	$.fn.customerPopup = function (e, intWidth, intHeight, blnResize) {

		// Prevent default anchor event
		e.preventDefault();

		// Set values for window
		intWidth = intWidth || '500';
		intHeight = intHeight || '400';
		strResize = (blnResize ? 'yes' : 'no');

		// Set title and open popup with focus on it
		var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'NATION - Share The Good News'),
			strParam = 'width=' + intWidth + ',height=' + intHeight + ',resizable=' + strResize,            
			objWindow = window.open(this.attr('href'), strTitle, strParam).focus();
	}
    
    $('.share-btn').on("click", function(e) { 
		$(this).customerPopup(e);
	});

    $('ul.sub-menu').removeClass('sub-menu').addClass('dropdown-menu');
	$('li.menu-item-has-children').children().attr('data-toggle', 'dropdown');

	$("ul.dropdown-menu li").on("click", function (e) {
	    e.stopPropagation();
	});

	$('.gallery-container').slick({
		dots: true,
		autoplay: true,
		autoplaySpeed: 5000,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true
	});

	$('.materials-gallery-container').slick({
		dots: true,
		autoplay: true,
		autoplaySpeed: 5000,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true
	});

	$('.main-banner-container').slick({
		dots: true,
		// autoplay: true,
		autoplaySpeed: 5000,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true
	});

	$('.icon-plus_.opened').on('click', function () {
		var current_post_ = $(this).attr('data-attibute');
		console.log( 'anchor -> a[data-attibute="' + current_post_  + '"]');
		$('.plus').removeClass('less');
		$("a[data-attibute='" + current_post_ + "']").removeClass('opened');
		$('.info-container').removeClass('more');
	});

	$('.icon-plus').on('click', function (){
		var current_post = $(this).attr('data-attibute');
		$('.info-container').removeClass('more');
		$('.plus').removeClass('less');
		$('.icon-plus').removeClass('opened');
		$(this).parent().addClass('less');
		$(this).toggleClass('opened');
		$('.info-container.' + current_post).toggleClass('more');
		// console.log(current_post);
	});


	/*validator*/
	$(function(){

		var formSettings = {
			singleError : function($field, rules){ 
				$field.closest('.form-group').removeClass('valid').addClass('error');
				$('.text-danger').fadeIn();
			},
			singleSuccess : function($field, rules){ 
				$field.closest('.form-group').removeClass('error').addClass('valid');
				$('.text-danger').fadeOut();
			},
			overallSuccess : function(){
				var form    	= $('#contactForm'),
					nombre		= form.find( "input[name='nombre']").val(),
					email		= form.find( "input[name='email']").val(),
					telefono	= form.find( "input[name='telefono']").val(),
					comentario	= form.find( "textarea[name='comentario']").val(),
					action		= form.attr( "action"),
					url			= action;

				var posting = $.post(
					url, { nombre: nombre, telefono: telefono, email: email, comentario: comentario }
				);
				posting.done(function( data ){
					console.log('email sent! \n' + data );
					$('#contactForm')[0].reset();
					$('.sent_mail_alert').fadeIn().delay(3000).fadeOut();
				});
			},
			overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
				autoDetect : true, debug : true
			};
		var $validate = $('#contactForm').validate(formSettings).data('validate');
	});
});