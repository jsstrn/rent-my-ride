<h1>Add a new user</h1>
<br /><br />
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
		    		<h3 class="panel-title">Enter the user details below to add a new user:</h3>
		  		</div><!-- .panel-heading -->
		  		<div class="panel-body">
					<?php echo $this->Form->create('User', array('type' => 'post'));?>
					<div class="form-group">
						<?php echo $this->Form->input('group_id', array(
							'type' => 'select', 
							'label' => 'Role', 
							'options' => array('1' => 'Admin', '2' => 'User'),
							'empty' => 'Choose one',
							'required'=>'false',
							'class' => 'form-control'
						));
						echo "<br />";
						echo $this->Form->input('username', array('required'=>'false', 'class' => 'form-control'));
						echo "<br />";
						echo $this->Form->input('password', array('required'=>'false', 'class' => 'form-control'));
						echo "<br />";
						echo $this->Form->input('confirm_password', array('type'=>'password','required'=>'false', 'class' => 'form-control'));
						echo "<br />";
						echo $this->Form->input('name', array('required'=>'false', 'class' => 'form-control'));
						echo "<br />";
						echo $this->Form->input('license', array('label' => 'Driver\'s License', 'required'=>'false', 'class' => 'form-control'));
						echo "<br />";
						echo $this->Form->input('email', array('required'=>'false', 'class' => 'form-control'));
						echo "<br />";
						echo $this->Form->input('mobile', array('required'=>'false', 'class' => 'form-control'));
						echo "<br />";
						echo $this->Form->input('address', array('required'=>'false', 'class' => 'form-control'));
						echo "<br />";
						echo $this->Form->input('postal_code', array('required'=>'false', 'class' => 'form-control'));
						echo "<br />";
						//echo $this->Form->input('picture', array('type' => 'file', 'class' => 'form-control'));
					?>
					</div>
					<br />
					<br />
					<?php
					echo '<div class="col-md-2">';
					echo $this->Form->submit('Add User', array('class' => "btn btn-primary") );
		  			echo '</div>';
		  			echo '<div class="col-md-2">';
		  			echo $this->Form->button('Reset', array('type' => 'reset', 'class' => "btn btn-danger"));
		 		 	echo '</div>';
					?>
					<div class="col-md-2">
					<button class="btn btn-default"><?php echo $this->Html->link('Cancel', array('action' => 'index')); ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>