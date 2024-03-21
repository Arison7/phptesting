const map = L.map('map').setView([51.505, -0.09], 13);
// Add the base tile layer
const tileLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Sample marker data
const markerData = [
	{ coords: [51.5, -0.09], name: 'Marker 1' },
	{ coords: [51.51, -0.1], name: 'Marker 2' },
	{ coords: [51.49, -0.1], name: 'Marker 3' }
];

// Add markers to the map
markerData.forEach(function(marker) {
	const newMarker = L.marker(marker.coords).addTo(map).bindPopup(marker.name);

	// Add click event listener to marker
	newMarker.on('click', function() {
		alert('Marker ' + marker.name + ' clicked!');
		// You can perform any JavaScript action you want here
	});
});