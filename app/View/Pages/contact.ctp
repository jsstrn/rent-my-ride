<div class="well">
<h2>Contact Us</h2>
Contact us here and we will email you back within 48hrs.
</br></br>

<?php

echo $this->Form->create();

echo $this->Form->input('name', array('label' => 'Name:', 'class'=>'form-control'));
echo '</br>';
echo $this->Form->input('email', array('label' => 'Email:', 'class'=>'form-control'));
echo '</br>';
echo $this->Form->input('message', array('label' => 'Message', 'class'=>'form-control', 'type' => 'textarea'));
echo '</br>';
echo $this->Form->submit('Send', array('class'=>'btn btn-primary'));


?>