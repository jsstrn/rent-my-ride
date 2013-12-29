<script type="text/javascript">
	var API = 'AIzaSyA5AkVMzStH2F21VpFIMfg3tXxcFOsHUxg';
</script>

<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5AkVMzStH2F21VpFIMfg3tXxcFOsHUxg&sensor=false">
</script>

<script type="text/javascript">
  function initialize() {
    var mapOptions = {
      center: new google.maps.LatLng(1.352083, 103.819836),
      zoom: 12
    };
    var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="map-canvas" style="width: 1100px; height: 700px; margin: 0 auto;"/>