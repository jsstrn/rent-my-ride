<h2>Add a car</h2>
<?php
echo $this->Form->create('Car', array('type' => 'post'));
echo $this->Form->input('license_plate');
echo $this->Form->input('brand');
echo $this->Form->input('model');
echo $this->Form->select('transmission', array('Automatic' => 'Automatic', 'Manual' => 'Manual'));
echo $this->Form->select('engine_type', array('Petrol' => 'Petrol', 'Diesel' => 'Diesel', 'Hybrid' => 'Hybrid'));
echo $this->Form->input('engine_capacity');
echo $this->Form->input('image', array('type' => 'file'));
echo $this->Form->submit('Add Car');
echo $this->Form->button('Reset', array('type' => 'reset'));
echo $this->Form->button('Cancel', array('type' => 'button', 'action' => 'index'));
?>