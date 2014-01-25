<h2>Add A Review</h2>
<br />
<div class="row">
	<div class="col-md-10">
		<div class="panel panel-default">
			<div class="panel-heading">
		    <h3 class="panel-title">Enter your review below:</h3>
		  </div><!-- .panel-heading -->
			<div class="panel-body">
			<?php
				echo $this->Form->create('Review', array('action' => 'add'));
				echo '<div class="form-group">';
				echo $this->Form->input('car_id', array(
					'type' => 'select', 
					'label'=>'Car',
					'options' => $a,
					'empty' => 'Choose Cars', 
					'class' => 'form-control',
					'required' => 'false'));
				echo '<br />';
				echo $this->Form->input('fromsender', array('label'=>'From', 'disabled' => 'true', 'class' => 'form-control', 'default'=> $loggeduser));
				echo '<br />';
				echo $this->Form->input('title', array('required'=>'false', 'class' => 'form-control'));
				echo '<br />';
				echo $this->Form->input('body', array('required'=>'false', 'class' => 'form-control'));
				echo '<br />';
				echo $this->Form->input('ratings', array('type'=>'select', 'options' => array( 1 => '1 Star', 2 => '2 Stars', 3 => '3 Stars', 4 => '4 Stars', 5 => '5 Stars'), 'required'=>'false', 'class' => 'form-control', 'empty' => 'Rate Cars'));
				//echo $this->Form->radio('ratings', array('options' => array('1 Stars' => 'abc')));
				echo '</div>';
				echo '<br />';
				echo '<br />';
				
				echo $this->Form->submit('Create a Review', array('class' => "btn btn-primary"));
			?>
			<br />
				<button class="btn btn-default"><?php echo $this->Html->link('Cancel', array('action' => 'index')); ?></button>
			</div>
		</div>
	</div>
</div>