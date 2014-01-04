<h2>Add a Comment</h2>
<?php
	echo $this->Form->create('Post', array('action' => 'add'));
	echo '<div class="form-group">';
	echo $this->Form->input('title', array('required'=>'false', 'class' => 'form-control'));
	echo $this->Form->input('body', array('required'=>'false', 'class' => 'form-control'));
	echo '</div>';
	echo $this->Form->submit('Create a Comment', array('class' => "btn btn-primary"));
?>
<br />
<button class="btn btn-default"><?php echo $this->Html->link('Cancel', array('action' => 'index')); ?></button>