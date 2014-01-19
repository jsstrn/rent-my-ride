<h2>Report a problem to admin</h2>
<br />
<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Enter your complaint below:</h3>
		  </div><!-- .panel-heading -->
		  <div class="panel-body">
		  	<div class="row">
		  		<div class="col-sm-8">
		  			<?php
		  			echo $this->Form->create('Comment', array('type' => 'post'));
		  			echo $this->Form->input('heading', array('class'=>'form-control'));
		  			echo '<br>';
		  			echo $this->Form->input('body', array('class'=>'form-control', 'type' => 'textarea'));
		  			echo '<br>';
		  			echo $this->Form->submit('Submit Your Complaint', array('class'=>'btn btn-primary'));
		  			?>
		  			<br />
		  			<button class="btn btn-default"><?php echo $this->Html->link('Cancel', array('controller' => 'pages', 'action' => '/')); ?></button>
		  		</div>
		  	</div>
		  </div>
		</div>
	</div>
</div>
