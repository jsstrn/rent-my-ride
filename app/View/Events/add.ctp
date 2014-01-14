<h1>Booking System</h1>

<?php
echo 'My User ID is: ' . $user_id . '<br>';
echo 'My Car ID is: ' . $car['Car']['id'] . '<br>';
?>

<?php
/*
echo $this->Form->create('Event', array());
echo $this->Form->input('car_id', array('type' => 'hidden'));
echo $this->Form->input('user_id', array('type' => 'hidden'));
echo $this->Form->input('date_start', array('class' => 'datepicker'));
echo $this->Form->input('time_start');
echo $this->Form->input('date_end');
echo $this->Form->input('time_end');
echo $this->Form->submit('Book Now');
echo $this->Form->end();
*/
?>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Make a booking</h3>
		  </div>
		  <div class="panel-body">
		  	<?php
		  		if(!$user_name) {
		  			echo '<p class="text-center">You are logged in. Please login to make a booking.<p>';
		  		} else {
		  			echo '<p class="text-center">Hello ' . $user_name . '! You have selected a ' . $car['Car']['brand'] . '.</p>';
		  		}
		  	?>
		  	<hr>
		  	<form class="form-horizontal" role="form">
		  		<?php
		  		echo $this->Form->create('Event', array());
		  		echo $this->Form->input('car_id', array('type' => 'hidden'));
		  		echo $this->Form->input('user_id', array('type' => 'hidden'));
		  		?>
		  	  <div class="form-group">
		  	    <label class="col-sm-3 control-label">Start date</label>
		  	    <div class="col-sm-9">
		  	    	<?php echo $this->Form->input('date', array(
		  	    		'class' => 'form-control',
		  	    		'label' => false,
		  	    		'type' => 'date',
		  	    		'dateFormat' => 'YMD',
		  	    		'separator' => '-',
		  	    		'minYear' => date('Y'),
		  	    		'maxYear' => date('Y')
		  	    		)); ?>
		  	    </div>
		  	  </div>
		  	  <hr>
		  	  <div class="form-group">
		  	    <label class="col-sm-3 control-label">Start time</label>
		  	    <div class="col-sm-9">
		  	    	<?php echo $this->Form->input('time', array(
		  	    		'class' => 'form-control',
		  	    		'label' => false,
		  	    		'type' => 'time',
		  	    		'timeFormat' => '24',
		  	    		'interval' => '15')
		  	    		); ?>
		  	    </div>
		  	  </div>
		  	  <div class="form-group">
		  	    <label class="col-sm-3 control-label">No. of hours</label>
		  	    <div class="col-sm-9">
		  	    	<?php echo $this->Form->input('interval', array('class'=>'form-control', 'label'=>false, 'type'=>'select',
		  	    		'options' => array(1, 2, 3, 4, 5, 6))); ?>
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
		  	</form>
		  </div><!-- #panel-body -->
		</div><!-- #panel-default -->
	</div><!-- #col -->
	<div class="col-md-3"></div>
</div><!-- #row -->

<script>
$( ".datepicker" ).datepicker();
</script>