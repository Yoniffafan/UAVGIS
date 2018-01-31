@extends('template')

@section('judul')
  Tambah Data
@endsection

@section('isi')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
          <div class="form-area">
              <form role="form">
              <br style="clear:both">
                          <h3 style="margin-bottom: 25px; text-align: center;">Input Data</h3>
                  <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="datepicker" name="tanggal" placeholder="Tanggal" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="longi" name="longi" placeholder="longitude" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="lati" name="lati" placeholder="latitude" required>
                </div>
                          <div class="form-group">
                          <textarea class="form-control" type="textarea" id="message" placeholder="Keterangan" maxlength="140" rows="7"></textarea>
                              <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                          </div>

              <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Data</button>
              </form>
          </div>
      </div>
      <div class="col-md-6">
        <div class="container-fluid">
          <h3 style="margin-bottom: 25px; text-align: center;">Select from Map</h3>
          <div id="map" style="width:90%;height:380px;"></div>

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
        '<a href=detail.php?id='+office[0]+'>Info Detail</a>'+
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
      </div>
    </div>
  </div>
@endsection
