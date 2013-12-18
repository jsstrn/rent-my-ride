<h1>Welcome To RmR Registration Page</h1>
<h3>Register yourself below in order to fully access our applcation full functionality.</h3>

<?php
echo $this->Form->create('User', array('action' => 'register'));
echo $this->Form->input('username', array('required'=>'false'));
echo $this->Form->input('password', array('required'=>'false'));
echo $this->Form->input('name', array('required'=>'false'));
echo $this->Form->input('license', array('label' => 'Driver\'s License', 'required'=>'false'));
echo $this->Form->input('email', array('required'=>'false'));
echo $this->Form->input('mobile', array('required'=>'false'));
echo $this->Form->input('address', array('required'=>'false'));
echo $this->Form->input('postal_code', array('required'=>'false'));
echo $this->Form->input('picture', array('type' => 'file'));
echo $this->Form->end('Register!');
echo $this->Form->button('Reset', array('type' => 'reset'));
echo $this->Form->button('Cancel', array('type' => 'button','action' => '/index'));
?>