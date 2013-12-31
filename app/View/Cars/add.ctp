<!--
<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5AkVMzStH2F21VpFIMfg3tXxcFOsHUxg&sensor=false">
</script>
<script type="text/javascript">

var geocoder = new google.maps.Geocoder();

function codeAddress() {

	alert("I've been clicked!");
  var address = document.getElementById('CarLocation').value;

  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      var lat = results[0].geometry.location;
      var lng = results[0].geometry.location.lng;
      alert('Lat: ' + lat + ' Lng: ' + lng);
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
-->


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5AkVMzStH2F21VpFIMfg3tXxcFOsHUxg&sensor=false"></script>
<script>
var geocoder;

function codeAddress() {
  var address = document.getElementById('address').value;
  var geocoder = new google.maps.Geocoder();

  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      var location = results[0].geometry.location;
      var fadd = results[0].formatted_address;
      alert(location + fadd);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}
</script>

<h1>Add your car</h1>
<p>Enter the car details below to add a new car.</p>

<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Add your car</h3>
		  </div><!-- .panel-heading -->
		  <div class="panel-body">
		  	<div class="row">
		  		<div class="col-sm-8">
		  			<?php
		  			echo '<input class="form-control" id="address" type="text" placeholder="Type Your Car\'s Location" autofocus="true">';
		  			?>
		  		</div>
		  		<div class="col-sm-4">
		  			<?php
		  			echo '<input class="btn btn-default" type="button" value="Get Location" onclick="codeAddress()">';
		  			?>
		  		</div>
		  	</div>
		  	<?php
		  	echo '<hr>';
		  		echo $this->Form->create('Car', array('type' => 'post'));
		  		echo $this->Form->input('license_plate', array('class'=>'form-control'));
		  		echo '<br>';
		  		echo $this->Form->input('brand', array('class'=>'form-control'));
		  		echo '<br>';
		  		echo $this->Form->input('model', array('class'=>'form-control'));
		  		echo '<br>';
		  		echo $this->Form->input('transmission', array(
		  			'class' => 'form-control',
		  			'type' => 'select',
		  			'label' => 'Transmission',
		  			'options' => array('Automatic' => 'Automatic', 'Manual' => 'Manual'),
		  			'selected' => 'Automatic'
		  			));
		  		echo '<br>';
		  		echo $this->Form->input('engine_type', array(
		  			'class' => 'form-control',
		  			'type' => 'select',
		  			'label' => 'Engine Type',
		  			'options' => array('Petrol' => 'Petrol', 'Diesel' => 'Diesel', 'Hybrid' => 'Hybrid'),
		  			'selected' => 'Petrol'
		  			));
		  		echo '<br>';
		  		echo $this->Form->input('engine_capacity', array('class'=>'form-control'));
		  		echo '<br>';
		  		echo $this->Form->input('image', array('class'=>'form-control', 'type' => 'file'));
		  		echo '<br>';
		  	?>
		  	<div class="row">
		  		<div class="col-sm-9 text-right">
		  			<?php echo $this->Form->button('Reset', array('type' => 'reset', 'class'=>'btn btn-danger')); ?>
		  		</div>
		  		<div class="col-sm-3 text-right">
		  			<?php
		  			echo $this->Form->submit('Add Your Car', array('class'=>'btn btn-primary'));
		  			echo $this->Form->end();
		  			?>
		  		</div>
		  	</div>
		  </div><!-- .panel-body -->
		</div><!-- .panel-default -->
	</div><!-- .col -->
</div><!-- .row -->

