<h1>Update user details</h1>
<br /><br />
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
		    		<h3 class="panel-title">Update your details and click Update.</h3>
		  		</div><!-- .panel-heading -->
		  		<div class="panel-body">
				
					<div class="form-group">
<?php 
  		echo $this->Form->create('User', array('type' => 'post'));
  		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('username', array('required'=>'false', 'disabled' => 'true', 'class' => 'form-control')); ?>
		<p> Your username is for logging in and cannot be changed. </p>
		<?php 
		//echo $this->Form->input('password', array('required'=>'false', 'class' => 'form-control'));
		echo $this->Form->input('name', array('required'=>'false', 'class' => 'form-control'));
		echo $this->Form->input('license', array('label' => 'Driver\'s License', 'required'=>'false', 'class' => 'form-control'));
		echo $this->Form->input('email', array('required'=>'false', 'class' => 'form-control'));
		echo $this->Form->input('mobile', array('required'=>'false', 'class' => 'form-control'));
		echo $this->Form->input('address', array('required'=>'false', 'class' => 'form-control'));
		echo $this->Form->input('postal_code', array('required'=>'false', 'class' => 'form-control'));
		echo '<div>';
		echo '</br>';
		echo $this->Form->submit('Update', array('class' => "btn btn-primary") );
		echo '</div>';
			?>
</br>
<?php if ($current_user['group_id'] == 1)
{
	echo $this->html->link('Back', array('action'=>'index'));
}
else
{
	echo $this->html->link('Back', array('action'=>'search'));
}
?>
					</div>
				</div>
			</div>
		</div>
	</div>