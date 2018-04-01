class MapView {

	constructor(latitude, longitude) {
		var lat = '';
		var lon = '';
		if (latitude === null) {
			lat = -12.046374;
		} else {
			lat = latitude;
		}
		if (longitude === null) {
			lon = -77.042793;
		} else {
			lon = longitude;
		}

		var map = L.map('mapid').setView([lat, lon], 12);

		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
			maxZoom: 18,
		}).addTo(map);

		L.marker([lat, lon]).addTo(map)
			.bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
			.openPopup();
	}

}