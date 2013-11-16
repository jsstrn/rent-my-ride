<h1>Add a new user</h1>
<p>Enter the user details below to add a new user.</p>
<?php
	echo $this->Form->create('User', array('type' => 'post'));
	echo $this->Form->input('role', array(
		'type' => 'select', 
		'label' => 'Role', 
		'options' => array('Admin' => 'Admin', 'User' => 'User'),
		'empty' => 'Choose one'
		));
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->input('name');
	echo $this->Form->input('license', array('label' => 'Driver\'s License'));
	echo $this->Form->input('email');
	echo $this->Form->input('mobile');
	echo $this->Form->input('address');
	echo $this->Form->input('postal_code');
	echo $this->Form->input('picture', array('type' => 'file'));
	echo $this->Form->submit('Add User');
	echo $this->Form->button('Reset', array('type' => 'reset'));
	echo $this->Form->button('Cancel', array('type' => 'button', array('action' => 'index')));
?>