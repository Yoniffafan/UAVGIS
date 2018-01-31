@extends('template')

@section('judul')
  Peta
@endsection

@section('isi')

        <div class="panel-body">
          <div id="map" style="width:100%;height:380px;"></div>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<script type="text/javascript">
function initialize() {

var mapOptions = {
    zoom: 5,
    center: new google.maps.LatLng(-1.7893, 117.9213),
    styles: [
           {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
           {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
           {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
           {
             featureType: 'administrative.locality',
             elementType: 'labels.text.fill',
             stylers: [{color: '#d59563'}]
           },
           {
             featureType: 'poi',
             elementType: 'labels.text.fill',
             stylers: [{color: '#d59563'}]
           },
           {
             featureType: 'poi.park',
             elementType: 'geometry',
             stylers: [{color: '#263c3f'}]
           },
           {
             featureType: 'poi.park',
             elementType: 'labels.text.fill',
             stylers: [{color: '#6b9a76'}]
           },
           {
             featureType: 'road',
             elementType: 'geometry',
             stylers: [{color: '#38414e'}]
           },
           {
             featureType: 'road',
             elementType: 'geometry.stroke',
             stylers: [{color: '#212a37'}]
           },
           {
             featureType: 'road',
             elementType: 'labels.text.fill',
             stylers: [{color: '#9ca5b3'}]
           },
           {
             featureType: 'road.highway',
             elementType: 'geometry',
             stylers: [{color: '#746855'}]
           },
           {
             featureType: 'road.highway',
             elementType: 'geometry.stroke',
             stylers: [{color: '#1f2835'}]
           },
           {
             featureType: 'road.highway',
             elementType: 'labels.text.fill',
             stylers: [{color: '#f3d19c'}]
           },
           {
             featureType: 'transit',
             elementType: 'geometry',
             stylers: [{color: '#2f3948'}]
           },
           {
             featureType: 'transit.station',
             elementType: 'labels.text.fill',
             stylers: [{color: '#d59563'}]
           },
           {
             featureType: 'water',
             elementType: 'geometry',
             stylers: [{color: '#17263c'}]
           },
           {
             featureType: 'water',
             elementType: 'labels.text.fill',
             stylers: [{color: '#515c6d'}]
           },
           {
             featureType: 'water',
             elementType: 'labels.text.stroke',
             stylers: [{color: '#17263c'}]
           }
         ]
};

var mapElement = document.getElementById('map');

var map = new google.maps.Map(mapElement, mapOptions);

setMarkers(map, officeLocations);

}

var officeLocations = [
@foreach ($fromDB as $databakar)
    ['{{ $databakar->nama }}', '{{ $databakar->lati }}', '{{ $databakar->longi }}', '{{ $databakar->tanggal }}', '{{ $databakar->ket }}' ],
@endforeach
];

function setMarkers(map, locations)
{
var globalPin = 'img/marker.png';

for (var i = 0; i < locations.length; i++) {

    var office = locations[i];
    var myLatLng = new google.maps.LatLng(office[1], office[2]);
    var infowindow = new google.maps.InfoWindow({content: contentString});

    var contentString =
        '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h5 id="firstHeading" class="firstHeading">'+ office[0] + '</h5>'+
        '<div id="bodyContent">'+
        '<p>' + office[3]+' </p>'+
        '<p>' + office[4]+' </p>'+
        '</div>'+
        '</div>';

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: office[0],
        icon:'img/marker.png'
    });

    google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
}
}

function getInfoCallback(map, content) {
var infowindow = new google.maps.InfoWindow({content: content});
return function() {
        infowindow.setContent(content);
        infowindow.open(map, this);
    };
}

initialize();
</script>
</div>

@endsection
