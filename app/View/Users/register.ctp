<h1>Welcome To RmR Registration Page</h1>
<h3>Register yourself below in order to fully access our applcation full functionality.</h3>
<br />
<?php
echo $this->Form->create('User', array('action' => 'register'));
echo $this->Form->input('username', array('required'=>'false'));
echo $this->Form->input('password', array('required'=>'false'));
echo $this->Form->input('confirm_password', array('type'=>'password','required'=>'false'));
echo $this->Form->input('name', array('required'=>'false'));
echo $this->Form->input('license', array('label' => 'Driver\'s License', 'required'=>'false'));
echo $this->Form->input('email', array('required'=>'false'));
echo $this->Form->input('mobile', array('required'=>'false'));
echo $this->Form->input('address', array('required'=>'false'));
echo $this->Form->input('postal_code', array('required'=>'false'));
echo $this->Form->input('picture', array('type' => 'file'));
echo $this->Form->end('Register!');
echo $this->Form->button('Reset', array('type' => 'reset'));
?> 
<br />
<br />
<button class="btn btn-default"><?php echo $this->Html->link('Cancel', array('action' => 'index')); ?></button>
<br />
<br />
<?php //echo $this->Form->button('Cancel', array('type' => 'button','action' => '/index'));
?>