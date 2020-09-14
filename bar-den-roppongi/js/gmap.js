function initializeMap() {
    var latlng = new google.maps.LatLng(35.663795, 139.734153);
    var opt = {
      zoom: 17,
      center: latlng
    };

    var map = new google.maps.Map(document.getElementById('barMap'), opt);
    var marker = new google.maps.Marker({
        position: latlng,
        map : map,
        icon: {
            url: 'img/access_pin.png',
            scaledSize: new google.maps.Size(80, 45)
        },
    });

    var mapstyle = [{
        featureType: 'all',
        elementType: 'all',
        stylers: [
              { "hue": "#1900ff" },
              { "saturation": -96 },
              { "gamma": 1.34 }
            ]
        }];

    var mapname = { name: 'DEN - Roppongi' }
    var maptype = new google.maps.StyledMapType(mapstyle, mapname);
    map.mapTypes.set('mapp', maptype);
    map.setMapTypeId('mapp');
}