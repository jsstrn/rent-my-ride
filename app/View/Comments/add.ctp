<h2>Add a Comment</h2>
<br />
<div class="row">
	<div class="col-md-10">
		<div class="panel panel-default">
			<div class="panel-heading">
		    <h3 class="panel-title">Enter your comments below:</h3>
		  </div><!-- .panel-heading -->
			<div class="panel-body">
			<?php
				echo $this->Form->create('Comment', array('action' => 'add'));
				echo '<div class="form-group">';
				echo $this->Form->input('user_id', array(
					'type' => 'select', 
					'label'=>'To',
					'options' => $a,
					'empty' => 'Choose Usernames', 
					'class' => 'form-control'));
				echo '<br />';
				echo $this->Form->input('fromsender', array('label'=>'From', 'disabled' => 'true', 'class' => 'form-control', 'default'=> $loggeduser));
				echo '<br />';
				echo $this->Form->input('title', array('required'=>'false', 'class' => 'form-control'));
				echo '<br />';
				echo $this->Form->input('body', array('required'=>'false', 'class' => 'form-control'));
				echo '</div>';
				echo '<br />';
				echo $this->Form->submit('Create a Comment', array('class' => "btn btn-primary"));
			?>
			<br />
				<button class="btn btn-default"><?php echo $this->Html->link('Cancel', array('action' => 'index')); ?></button>
			</div>
		</div>
	</div>
</div>