var map = L.map('mapid').setView([51.505, -0.09], 13);
L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
  attribution: '© OpenStreetMap contributors'
}).addTo(map);
L.marker([51.5, -0.09]).addTo(map).bindPopup('A pretty CSS3 pop. Easily customizable.').openPopup();
