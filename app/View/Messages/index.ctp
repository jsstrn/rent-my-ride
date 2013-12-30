Username:

<input type="text"></input>

<button class="btn btn-primary">Click me</button>

<?php 

echo $messages;

echo $test;

echo $this->Form->create();
echo $this->Form->input('username');
echo $this->Form->submit('Click me', array(
	'class' => 'btn btn-success'));
?>