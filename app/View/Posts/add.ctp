<h2>Add a Comment</h2>
<?php
	echo $this->Form->create('Post', array('action' => 'add'));
	echo $this->Form->input('title',array('required'=>'false'));
	echo $this->Form->input('body',array('required'=>'false'));
	echo $this->Form->end('Create a Comment');
?>