<h1>User profile</h1>
<br /><br />
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
		    		<h3 class="panel-title">User details</h3>
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
		echo $this->Form->input('name', array('required'=>'false', 'disabled' => 'true', 'class' => 'form-control'));
		echo $this->Form->input('license', array('label' => 'Driver\'s License', 'disabled' => 'true','required'=>'false', 'class' => 'form-control'));
		echo $this->Form->input('email', array('required'=>'false', 'disabled' => 'true','class' => 'form-control'));
		echo $this->Form->input('mobile', array('required'=>'false', 'disabled' => 'true','class' => 'form-control'));
		echo $this->Form->input('address', array('required'=>'false', 'disabled' => 'true','class' => 'form-control'));
		echo $this->Form->input('postal_code', array('required'=>'false', 'disabled' => 'true','class' => 'form-control'));
		?>
</br>

</br>


<?php if ($current_user['group_id'] == 1)
		{
		   echo $this->html->link('Back', array('action'=>'index')). " | " . 
		   $this->html->link('Edit', array('action'=>'edit', $user['User']['id'])). " | " . 
           $this->html->link('Delete', array('action'=>'delete', $user['User']['id']), NULL, 'Are you sure you want to delete this user?'); 
        }
        else
        {
           echo $this->html->link('Back', array('action'=>'search')). " | " . 
		   $this->html->link('Edit', array('action'=>'edit', $user['User']['id'])). " | " . 
           $this->html->link('Delete', array('action'=>'delete', $user['User']['id']), NULL, 'Are you sure you want to delete this user?'); 
		}
    	?>
						</div>
				</div>
			</div>
		</div>

    	<div class="col-md-4">

      		<div class="well">

      			<h4>Extra Info</h4>

				<p>This is your account page...</p>
					
					
				<p> To insert additional information here...or maybe user picture?</p>
				<img class="featurette-image img-responsive" src="http://www.placehold.it/500" alt="Generic placeholder image">
      		</div>
								
	      </div> <!-- /span4 -->
	  </div>
	
	<div>
	  <?php echo '<iframe width="749" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowtransparency="true" src="http://gothere.sg/maps#q:' . $user['User']['postal_code'] . '"></iframe>'; ?>
	</div>
	      
