<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
    <script>
      function initMap() {
        const center = { lat: 48.8566, lng: 2.3522 }; // Paris
        const map = new google.maps.Map(document.getElementById("map"), {
          center: center,
          zoom: 13,
        });

        const request = {
          location: center,
          radius: '5000',
          type: ['psychologist'],
        };

        const service = new google.maps.places.PlacesService(map);
        service.nearbySearch(request, (results, status) => {
          if (status === google.maps.places.PlacesServiceStatus.OK) {
            for (let i = 0; i < results.length; i++) {
              const place = results[i];
              const marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location,
              });

              const infowindow = new google.maps.InfoWindow({
                content: `<strong>${place.name}</strong><br>${place.vicinity}`,
              });

              marker.addListener('click', () => {
                infowindow.open(map, marker);
              });
            }
          }
        });
      }
    </script>
</head>
<body>
    <?php include 'header.php'; ?>
    <body onload="initMap()">
    <h1>Professsionnels à proximité</h1>
    <div id="map" style="height: 500px; width: 100%;"></div>
  </body>
</html>
</body>
</html>