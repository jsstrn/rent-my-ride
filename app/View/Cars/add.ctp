<h2>Add a car</h2>
<?php
echo $this->Form->create('Car');
echo $this->Form->input('license_plate');
echo $this->Form->input('brand');
echo $this->Form->input('model');
echo $this->Form->input('transmission', array('options' => array('Automatic', 'Manual')));
echo $this->Form->input('engine_type', array('options' => array('Petrol', 'Diesel', 'Hybrid')));
echo $this->Form->input('engine_capacity');
echo $this->Form->end('Add Car');
?>