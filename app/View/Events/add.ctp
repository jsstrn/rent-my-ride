<h1>Booking System</h1>

<?php date_default_timezone_set('Asia/Singapore') ;?>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Make a booking</h3>
		  </div>
		  <div class="panel-body">
		  	<?php
		  		if(!$user_name) {
		  			echo '<p class="text-center">You are not logged in. Please login to make a booking.<p>';
		  		} else {
		  			echo '<p class="text-center">Hello, ' . $user_name . '! You have selected a ' . $car['Car']['brand'] . '</p>';
		 		 	echo '<p class="text-center">Rental rate is $' . $car['Car']['rate'] . '/hr</p>';
		  		}
		  	?>
		  	<hr>
		  	<div class="form-horizontal" role="form">
		  		<?php
		  		echo $this->Form->create('Event', array('type' => 'post'));
		  		echo $this->Form->input('car_id', array('type' => 'hidden'));
		  		echo $this->Form->input('user_id', array('type' => 'hidden'));
		  		echo $this->Form->input('datetime_start', array('type' => 'hidden'));
		  		echo $this->Form->input('datetime_end', array('type' => 'hidden'));
		  		?>
		  	  <div class="form-group">
		  	    <label class="col-sm-3 control-label">Start date</label>
		  	    <div class="col-sm-9">
		  	    	<input name="myDate" class="form-control" type="date" value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>">
		  	    </div>
		  	  </div>
		  	  <hr>
		  	  <div class="form-group">
		  	    <label class="col-sm-3 control-label">Start time</label>
		  	    <div class="col-sm-9">
		  	    	<input name="myTime" class="form-control" type="time" step="900" value="08:00">
		  	    </div>
		  	  </div>
		  	  <div class="form-group">
		  	    <label class="col-sm-3 control-label">No. of hours</label>
		  	    <div class="col-sm-9">
		  	    	<?php echo $this->Form->input('interval', array('class'=>'form-control', 'label'=>false, 'type'=>'select',
		  	    		'options' => array(1 => '1 hour', 2 => '2 hours', 3 => '3 hours', 4 => '4 hours', 5 => '5 hours', 6 => '6 hours'))); ?>
		  	    </div>
		  	  </div>
		  	  <hr>
		  	  <div class="form-group">
		  	    <div class="col-sm-9 col-sm-offset-3">
		  	    	<div class="text-right">
		  	    		<?php 
		  	    		echo $this->Form->submit('Book Now', array('class'=>'btn btn-primary'));
		  	    		echo $this->Form->end();
		  	    		?>
		  	    	</div>
		  	    </div>
		  	  </div>
		  	</div>
		  </div><!-- #panel-body -->
		</div><!-- #panel-default -->
	</div><!-- #col -->
	<div class="col-md-6"></div>
</div><!-- #row -->

<script>
$( ".datepicker" ).datepicker();
</script>