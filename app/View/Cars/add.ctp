<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5AkVMzStH2F21VpFIMfg3tXxcFOsHUxg&sensor=false"></script>
<script>
var geocoder;

function codeAddress() {
  var address = document.getElementById('address').value;
  var geocoder = new google.maps.Geocoder();

  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      var lat = results[0].geometry.location.lat();
      var lng = results[0].geometry.location.lng();
      var fadd = results[0].formatted_address;
      document.getElementById('DisplayAddress').value = fadd;
      document.getElementById('CarFormattedAddress').value = fadd;
      document.getElementById('CarLat').value = lat;
      document.getElementById('CarLng').value = lng;
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
		    <h3 class="panel-title">Your car details</h3>
		  </div><!-- .panel-heading -->
		  <div class="panel-body">
		  	<div class="row">
		  		<div class="col-sm-8">
		  			<?php
		  			echo '<input class="form-control" id="address" type="text" placeholder="Type Your Car\'s Location" autofocus="true">';
		  			echo '<br>';
		  			echo $this->Form->create('Car', array('type' => 'post'));
		  			echo '<textarea class="form-control" id="DisplayAddress" row="2" placeholder="Address" disabled></textarea>';
		  			echo $this->Form->input('formatted_address', $options = array('class'=>'form-control', 'type'=>'hidden'));
		  			echo $this->Form->input('lat', $options = array('class'=>'form-control', 'type'=>'hidden'));
		  			echo $this->Form->input('lng', $options = array('class'=>'form-control', 'type'=>'hidden'));
		  			?>
		  		</div>
		  		<div class="col-sm-4">
		  			<?php
		  			echo '<button class="btn btn-default form-contol" type="button" onclick="codeAddress()">Get Location</button>';
		  			?>
		  		</div>
		  	</div>
		  	<?php
		  	echo '<hr>';
		  		
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
		  		echo $this->Form->input('rate', array('class'=>'form-control'));
		  		echo '<br>';
		  		
		  		echo $this->Form->submit('Add Your Car', array('class'=>'btn btn-primary'));
		  		echo '<br />';
		  		echo $this->Form->button('Reset Form', array('type' => 'reset', 'class'=>'btn btn-danger'));
		  		echo '<br /><br />';
		  		if ($current_user['group_id'] == 1)
				{
		  			echo '<button class="btn btn-default">' . $this->Html->link('Cancel', array('action' => 'index')) .'</button>';
		  		}
		  		else
		  		{
		  			echo '<button class="btn btn-default">' . $this->Html->link('Cancel', array('action' => 'search')) .'</button>';
		  		}
		  		echo $this->Form->end();
		  	?>
		  </div><!-- .panel-body -->
		</div><!-- .panel-default -->
	</div><!-- .col -->
</div><!-- .row -->


