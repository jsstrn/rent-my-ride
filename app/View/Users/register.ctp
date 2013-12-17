<h2>Welcome To RmR Registration Page</h2>
<h1>Register yourself below in order to fully access our applcation full functionality.</h1>

<?php
echo $this->Form->create('User', array('action' => 'register'));
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('name');
echo $this->Form->input('license', array('label' => 'Driver\'s License'));
echo $this->Form->input('email');
echo $this->Form->input('mobile');
echo $this->Form->input('address');
echo $this->Form->input('postal_code');
echo $this->Form->input('picture', array('type' => 'file'));
echo $this->Form->end('Register!');
?>