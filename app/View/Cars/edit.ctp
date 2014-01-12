<h1>Update car details</h1>
<p>Update your car details and click save.</p>
<?php
	echo $this->Form->create('Car', array('type' => 'post'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('license_plate');
	echo $this->Form->input('brand');
	echo $this->Form->input('model');
	echo $this->Form->select('transmission', array('Automatic' => 'Automatic', 'Manual' => 'Manual'));
	echo $this->Form->select('engine_type', array('Petrol' => 'Petrol', 'Diesel' => 'Diesel', 'Hybrid' => 'Hybrid'));
	echo $this->Form->input('engine_capacity');
	// echo $this->Form->input('image', array('type' => 'file', 'name' => 'uploader'));
	echo "<input type='file' name='uploader'>";
	echo $this->Form->submit('Save');
	echo $this->Form->button('Cancel', array('type' => 'button', array('action' => 'index')));
	echo $this->Form->end();
?>