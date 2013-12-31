<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5AkVMzStH2F21VpFIMfg3tXxcFOsHUxg&sensor=false">
</script>

<script type="text/javascript">
  function initialize() {

    var position = new google.maps.LatLng(1.3024213, 103.839922);
    var image = "<?php echo $this->webroot ;?>img/map/pin-red.png";

    var mapOptions = {
      'center' : new google.maps.LatLng(1.352083, 103.819836),
      'zoom' : 12
    };

    var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);

    var marker = new google.maps.Marker({
      'position' : new google.maps.LatLng(1.3024213, 103.839922),
      'map' : map,
      'icon' : image
    });

    var marker2 = new google.maps.Marker({
      'position' : new google.maps.LatLng(1.348031, 103.928512),
      'map' : map,
      'icon' : image
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="map-canvas" style="width: 1100px; height: 700px; margin: 0 auto;"/>