<h1>Booking System</h1>

<?php
echo 'My User ID is: ' . $user_id . '<br>';
echo 'My Car ID is: ' . $car['Car']['id'] . '<br>';
?>

<?php
echo $this->Form->create('Event', array());
echo $this->Form->input('car_id', array('type' => 'hidden'));
echo $this->Form->input('user_id', array('type' => 'hidden'));
echo $this->Form->input('date_start', array('class' => 'datepicker'));
echo $this->Form->input('time_start');
echo $this->Form->input('date_end');
echo $this->Form->input('time_end');
echo $this->Form->submit('Book Now');
echo $this->Form->end();
?>

<div class="datepicker"></div>

<input class="datepicker" type="text">

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Place your booking</h3>
		  </div>
		  <div class="panel-body">
		  	<form class="form-horizontal" role="form">
		  		<?php
		  		echo $this->Form->create('Event', array());
		  		echo $this->Form->input('car_id', array('type' => 'hidden'));
		  		echo $this->Form->input('user_id', array('type' => 'hidden'));
		  		?>
		  	  <div class="form-group">
		  	    <label class="col-sm-2 control-label">Start Date</label>
		  	    <div class="col-sm-10">
		  	    	<?php echo $this->Form->input('date_start', array('class'=>'form-control', 'label'=>false)); ?>
		  	    </div>
		  	  </div>
		  	  <div class="form-group">
		  	    <label class="col-sm-2 control-label">Start Time</label>
		  	    <div class="col-sm-10">
		  	    	<?php echo $this->Form->select('time_start',
		  	    		array('8am to 9am', '9am to 10am', '10am to 11am', '11am to 12pm', '12pm to 1pm'),
		  	    		array('class'=>'form-control')); ?>
		  	    </div>
		  	  </div>
		  	  <hr>
		  	  <div class="form-group">
		  	    <label class="col-sm-2 control-label">End Date</label>
		  	    <div class="col-sm-10">

		  	    </div>
		  	  </div>
		  	  <div class="form-group">
		  	    <label class="col-sm-2 control-label">End Time</label>
		  	    <div class="col-sm-10">
		  	    	<?php echo $this->Form->input('time_end', array('class'=>'form-control', 'label'=>false)); ?>
		  	    </div>
		  	  </div>
		  	  <hr>
		  	  <div class="form-group">
		  	    <div class="col-sm-10 col-sm-offset-2">
		  	    	<div class="text-right">
		  	    		<?php 
		  	    		echo $this->Form->submit('Book Now', array('class'=>'btn btn-primary'));
		  	    		echo $this->Form->end();
		  	    		?>
		  	    	</div>
		  	    </div>
		  	  </div>
		  	</form>
		  </div><!-- #panel-body -->
		</div><!-- #panel-default -->
	</div><!-- #col -->
	<div class="col-md-3"></div>
</div><!-- #row -->

<script>
$( ".datepicker" ).datepicker();
</script>