<h1>Add a car</h1>
<p>Enter the car details below to add a new car.</p>
<?php
	echo $this->Form->create('Car', array('type' => 'post'));
	echo $this->Form->input('license_plate');
	echo $this->Form->input('brand');
	echo $this->Form->input('model');
	echo $this->Form->input('transmission', array(
		'type' => 'select',
		'label' => 'Transmission',
		'options' => array('Automatic' => 'Automatic', 'Manual' => 'Manual'),
		'selected' => 'Automatic'
		));
	echo $this->Form->input('engine_type', array(
		'type' => 'select',
		'label' => 'Engine Type',
		'options' => array('Petrol' => 'Petrol', 'Diesel' => 'Diesel', 'Hybrid' => 'Hybrid'),
		'selected' => 'Petrol'
		));
	echo $this->Form->input('engine_capacity');
	echo $this->Form->input('image', array('type' => 'file'));
	echo '</fieldset>';
	echo $this->Form->submit('Add Car');
	echo $this->Form->button('Reset', array('type' => 'reset'));
	echo $this->Form->button('Cancel', array('type' => 'button', array('action' => 'index')));
?>