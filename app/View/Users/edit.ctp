<h1>Update user details</h1>
<p>Update your details and click save.</p>
<?php
	echo $this->Form->create('User', array('type' => 'post'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('name');
	echo $this->Form->input('password');
	echo $this->Form->input('address');
	echo $this->Form->input('license');
	echo $this->Form->input('image', array('type' => 'file'));
	echo $this->Form->submit('Save');
	echo $this->Form->button('Cancel', array('type' => 'button', array('action' => 'index')));
?>