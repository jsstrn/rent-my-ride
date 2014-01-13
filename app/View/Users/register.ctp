<h1>Welcome To RmR Registration Page</h1>
<p>Register yourself below in order to fully access our applcation full functionality.</p>
<br />
<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
		    		<h3 class="panel-title">Enter details below:</h3>
		  		</div><!-- .panel-heading -->
		  		<div class="panel-body">
					<?php
					echo $this->Form->create('User', array('type' => 'post')); ?>
					<div class="form-group">
						<?php 
						echo $this->Form->input('username', array('required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('password', array('required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('confirm_password', array('type'=>'password','required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('name', array('required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('license', array('label' => 'Driver\'s License', 'required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('email', array('required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('mobile', array('required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('address', array('required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('postal_code', array('required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('picture', array('type' => 'file', 'class' => 'form-control')); ?>
					</div>
					<?php
					echo $this->Form->submit('Register!', array('class' => "btn btn-primary") );
					echo "<br />";
					echo $this->Form->button('Reset', array('type' => 'reset', 'class' => "btn btn-danger"));
					?> 
					<br />
					<br />
					<button class="btn btn-default"><?php echo $this->Html->link('Cancel', array('action' => 'index')); ?></button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php //echo $this->Form->button('Cancel', array('type' => 'button','action' => '/index'));
?>