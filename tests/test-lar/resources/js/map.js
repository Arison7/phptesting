const map = L.map('map').setView([52.2, 5.1], 7);

// Add the base tile layer
const tileLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

async function getMarkers() {
	const response = await fetch('/fetch');
	const data = await response.json();
	return data;
}
const powerPlants = getMarkers();
powerPlants.then(data => {
	const query = document.getElementById('query');
	data.forEach((powerPlant) => {
		let iconSketch = L.Icon.Default.extend({
			options : {
				className: 'is-red'
			}
		})
		let icon = new iconSketch();
		const newMarker = L.marker([powerPlant.postcode.latitude,powerPlant.postcode.longitude])
		.addTo(map);


		// Add click event listener to marker
		newMarker.on('click', function() {
			if(newMarker.options.icon.options.className === 'is-red'){
				newMarker.setIcon(L.Icon.Default.prototype);
				document.getElementById("input" + powerPlant.id).remove();
			}else{
				newMarker.setIcon(icon);
				let input = document.createElement('input');
				input.setAttribute("type", "hidden");
				input.setAttribute("name", "powerplants[]");
				input.setAttribute("value", powerPlant.id);
				input.setAttribute("id", "input" + powerPlant.id);
				query.appendChild(input);
			}
		});
	});
});