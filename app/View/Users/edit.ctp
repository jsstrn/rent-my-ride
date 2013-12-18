<h1>Update user details</h1>
<p>Update your details and click save.</p>
<?php
	echo $this->Form->create('User', array('type' => 'post'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('name', array('required'=>'false'));
	echo $this->Form->input('password', array('required'=>'false'));
	echo $this->Form->input('address', array('required'=>'false'));
	echo $this->Form->input('license', array('required'=>'false'));
	echo $this->Form->input('image', array('type' => 'file'));
	echo $this->Form->submit('Save');
	echo $this->Form->button('Cancel', array('type' => 'button','action' => '/index'));
?>