<h1>Contact us</h1>
<p>If you have any feebacks tell us here!</p>

<?php

echo $this->Form->input('Name', array('required'=>'false', 'class' => 'form-control'));
echo $this->Form->input('Email', array('required'=>'false', 'class' => 'form-control'));
echo $this->Form->input('Message', array('required'=>'false', 'class' => 'form-control'));

?>