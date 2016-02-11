var mapID = document.getElementById('map-canvas');

// Get data attributes from #map-canvas for the map
var mapDataLat = mapID.getAttribute('data-lat');
var mapDataLng = mapID.getAttribute('data-lng');
var mapDataAddress = mapID.getAttribute('data-address');
var mapDataAddrTop= mapID.getAttribute('data-addr-top');
var mapDataAddrBot = mapID.getAttribute('data-addr-bot');


// *** FUNCTION ***

 function initMap() {
    /**
     * Create a new StyledMapType object, passing it the array of styles,
     * as well as the name to be displayed on the map type control.
     */
    //var styledMap = new google.maps.StyledMapType(_default, {name: "Atlantic Bay Map"});
    
    /* define basic map options */
    var mapOptions = {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: true,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        },
        draggable: true,
        scrollwheel: false,
        zoom: 17,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL,
            position: google.maps.ControlPosition.DEFAULT
        },
        panControl: true,
        panControlOptions: {
            position: google.maps.ControlPosition.DEFAULT
        },
        streetViewControl: false,
        scaleControl: false,
        overviewMapControl: false,
        center: new google.maps.LatLng(mapDataLat, mapDataLng)
    };
    
    //map.mapTypes.set('map_style', styledMap);
    //map.setMapTypeId('map_style');
    
    /* create info box */
    var infoContent = '<div class="window-content"><p>' + mapDataAddrTop + '<br>' + mapDataAddrBot + '</p><p><a href="https://www.google.com/maps/dir/Current+Location/' + mapDataAddress + '" target="_blank">Get Directions</a></p></div>';

    var infowindow = new google.maps.InfoWindow({
        content: infoContent
    });
    
    /*variables for the marker */
    var icon = {
        path: 'M16.5,51s-16.5-25.119-16.5-34.327c0-9.2082,7.3873-16.673,16.5-16.673,9.113,0,16.5,7.4648,16.5,16.673,0,9.208-16.5,34.327-16.5,34.327zm0-27.462c3.7523,0,6.7941-3.0737,6.7941-6.8654,0-3.7916-3.0418-6.8654-6.7941-6.8654s-6.7941,3.0737-6.7941,6.8654c0,3.7916,3.0418,6.8654,6.7941,6.8654z',
        anchor: new google.maps.Point(16.5, 51),
        //fillColor: '#FF0000',
        fillColor: /*'#009fd4',*/'#004953',
        fillOpacity: 0.9,
        strokeWeight: 0,
        scale: 0.66
    };
    
    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(mapDataLat, mapDataLng),
        /*
        place: {
            location: new google.maps.LatLng(mapDataLat, mapDataLng),
            placeId: 'ChIJ1fs5wbzquokRzoRTnsnhLlU',
            //query: 'Google, Sydney, Australia'
        },
        */
        map: map,
        icon: icon,
        title: 'Atlantic Bay Corporate Office',
        animation: google.maps.Animation.DROP
    });

    infowindow.open(map,marker);
    
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });
}
google.maps.event.addDomListener(window, 'resize', initMap);
google.maps.event.addDomListener(window, 'load', initMap);
