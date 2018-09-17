/**
 * Moves the map to display over Berlin
 *
 * @param  {H.Map} map      A HERE Map instance within the application
 
function moveMapToBxl() {
	map.setCenter({ lat: 50.8466, lng: 4.3528 });
	map.setZoom(8);
}
/**
   * Boilerplate map initialization code starts below:


//Step 1: initialize communication with the platform
var platform = new H.service.Platform({
	app_id: 'TEMHnEddZWWZINE21JJf',
	app_code: '0Ak_9Rplt_OPtI2AOyCQHg',
	useHTTPS: true
});
var pixelRatio = window.devicePixelRatio || 1;
var defaultLayers = platform.createDefaultLayers({
	tileSize: pixelRatio === 1 ? 256 : 512,
	ppi: pixelRatio === 1 ? undefined : 320
});

//Initialisation type de carte
var map = new H.Map(document.getElementById('map'), defaultLayers.normal.map, { pixelRatio: pixelRatio });

//interativité de la carte

var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

//affiche Travaux
//map.addLayer(defaultLayers.incidents);
// Create the default UI components
//var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
moveMapToBxl(map);

//function create logo + position
function situation(objet) {
	//Logo enSVG Color et forme a definir par la suite

	var svgMarkup =
		'<svg width="24" height="24" ' +
		'xmlns="http://www.w3.org/2000/svg">' +
		'<rect stroke="white" fill="' +
		objet.color +
		'" x="1" y="1" width="22" ' +
		'height="22" /><text x="12" y="18" font-size="12pt" ' +
		'font-family="Arial" font-weight="bold" text-anchor="middle" ' +
		'fill="white">' +
		objet.name[0] +
		'</text></svg>';

	// Create an icon, an object holding the latitude and longitude, and a marker:  ***********latitude and longitude
	var icon = new H.map.Icon(svgMarkup),
		coords = { lat: objet.lat, lng: objet.long },
		marker = new H.map.Marker(coords, { icon: icon });
	text = objet['name'];

	// Add the marker to the map and center the map at the location of the marker:

	map.addObject(marker);
	map.setCenter(coords);
}

  //////////////////////////////////////////////////////////////////////////////////////////////////
  */
function addMarkerToGroup(group, coordinate, html, objet) {
	//console.log(objet['color']);
	var svgMarkup =
		'<svg width="24" height="24" ' +
		'xmlns="http://www.w3.org/2000/svg">' +
		'<rect stroke="white" fill="' +
		objet.color +
		'" x="1" y="1" width="22" ' +
		'height="22" /><text x="12" y="18" font-size="12pt" ' +
		'font-family="Arial" font-weight="bold" text-anchor="middle" ' +
		'fill="white">' +
		objet.name[0] +
		'</text></svg>';
	var icon = new H.map.Icon(svgMarkup);
	var marker = new H.map.Marker(coordinate, { icon: icon });
	// add custom data to the marker
	marker.setData(html);
	group.addObject(marker);
}

/**
   * Add two markers showing the position of Liverpool and Manchester City football clubs.
   * Clicking on a marker opens an infobubble which holds HTML content related to the marker.
   * @param  {H.Map} map      A HERE Map instance within the application
   */
function addInfoBubble(map, objet) {
	var group = new H.map.Group();

	map.addObject(group);

	// add 'tap' event listener, that opens info bubble, to the group
	group.addEventListener(
		'tap',
		function(evt) {
			// event target is the marker itself, group is a parent event target
			// for all objects that it contains
			var bubble = new H.ui.InfoBubble(evt.target.getPosition(), {
				// read custom data
				content: evt.target.getData()
			});
			// show info bubble
			ui.addBubble(bubble);
		},
		false
	);

	addMarkerToGroup(
		group,
		{ lat: objet['lat'], lng: objet['long'] },
		'<div>' + objet['firstname'] + ' ' + objet['name'] + '<br>Statut:' + objet['statut'] + '</div>',
		objet
	);
}

/**
   * Boilerplate map initialization code starts below:
   */

// initialize communication with the platform
var platform = new H.service.Platform({
	app_id: 'devportal-demo-20180625',
	app_code: '9v2BkviRwi9Ot26kp2IysQ',
	useHTTPS: true
});
var pixelRatio = window.devicePixelRatio || 1;
var defaultLayers = platform.createDefaultLayers({
	tileSize: pixelRatio === 1 ? 256 : 512,
	ppi: pixelRatio === 1 ? undefined : 320
});

// initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('map'), defaultLayers.normal.map, {
	center: { lat: 50.8466, lng: 4.3528 },
	zoom: 7,
	pixelRatio: pixelRatio
});

// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// create default UI with layers provided by the platform
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
addInfoBubble(map);
