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