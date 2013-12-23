<h1>Booking System</h1>

<?php

echo 'My User ID is: ' . $user_id . '<br>';

echo 'My Car ID is: ' . $car['Car']['id'] . '<br>';

?>

<?php
echo $this->Form->create('Event', array());
echo $this->Form->input('car_id', array('type' => 'hidden'));
echo $this->Form->input('user_id', array('type' => 'hidden'));
echo $this->Form->input('date_start');
echo $this->Form->input('time_start');
echo $this->Form->input('date_end');
echo $this->Form->input('time_end');
echo $this->Form->submit('Book Now');
echo $this->Form->end();
?>

<div class="row">
	<div class="col-md-7">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Place your booking</h3>
		  </div>
		  <div class="panel-body">
		  	<form class="form-horizontal" role="form">
		  	  <div class="form-group">
		  	    <label class="col-sm-2 control-label">Start Date</label>
		  	    <div class="col-sm-10">
		  	      <input type="date" class="form-control">
		  	    </div>
		  	  </div>
		  	  <div class="form-group">
		  	    <label class="col-sm-2 control-label">Start Time</label>
		  	    <div class="col-sm-10">
		  	      <input type="time" class="form-control">
		  	    </div>
		  	  </div>
		  	  <hr>
		  	  <div class="form-group">
		  	    <label class="col-sm-2 control-label">End Date</label>
		  	    <div class="col-sm-10">
		  	      <input type="date" class="form-control">
		  	    </div>
		  	  </div>
		  	  <div class="form-group">
		  	    <label class="col-sm-2 control-label">End Time</label>
		  	    <div class="col-sm-10">
		  	      <input type="time" class="form-control">
		  	    </div>
		  	  </div>
		  	  <hr>
		  	  <div class="form-group">
		  	    <div class="col-sm-10 col-sm-offset-2">
		  	      <button type="submit" class="btn btn-default">Place Booking</button>
		  	    </div>
		  	  </div>
		  	</form>

		  </div><!-- #panel-body -->
		</div><!-- #panel-default -->
	</div><!-- #col -->
</div><!-- #row -->