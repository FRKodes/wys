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
    $('ul.sub-menu').removeClass('sub-menu').addClass('dropdown-menu');
	$('.menu-item-has-children a').attr('data-toggle', 'dropdown');

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
		autoplay: true,
		autoplaySpeed: 5000,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true
	});

	$('.icon-plus').on('click', function (){
		$('.info-container').removeClass('more');
		$('.plus').removeClass('less');
		$('.icon-plus').removeClass('opened');
		$(this).parent().addClass('less');
		$(this).toggleClass('opened');
		var current_post = $(this).attr('data-attibute');
		$('.info-container.' + current_post).toggleClass('more');
		console.log(current_post);
	});
});