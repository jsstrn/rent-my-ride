<h2>Add a Comment</h2>
<?php
	echo $this->Form->create('Post', array('action' => 'add'));
	echo $this->Form->input('title');
	echo $this->Form->input('body');
	echo $this->Form->end('Create a Comment');
?>