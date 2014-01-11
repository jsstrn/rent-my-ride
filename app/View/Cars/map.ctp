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

    <?php $num = 1; ?>
    <?php foreach ($cars as $car): ?>

    var marker<?php echo $num; ?> = new google.maps.Marker({
     'position' : new google.maps.LatLng(<?php echo $car['Car']['lat']; ?>, <?php echo $car['Car']['lng']; ?>),
      'map' : map,
      'icon' : image,
      'animation' : google.maps.Animation.DROP
    });
    <?php $num++; ?>
    <?php endforeach; ?>
    <?php unset($car); ?>
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="map-canvas" style="width: 1100px; height: 700px; margin: 0 auto;"/>
