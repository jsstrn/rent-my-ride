<div class="tabbable">
	<ul class="nav nav-tabs">
	  <li class="active">
	    <a href="#profile" data-toggle="tab">Profile</a>
	  </li>
	  <li><a href="#settings" data-toggle="tab">Settings</a></li>
	  <li><a href="#maps" data-toggle="tab">Maps</a></li>
	</ul>
	
	<br>
	
		<div class="tab-content">
			<div class="tab-pane active" id="profile">
			<form id="edit-profile">
				<fieldset>
					<div class="row">
						<div class="col-md-8 col-sm-6">
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
								echo '</br>';
								echo $this->Form->submit('Update', array('class' => "btn btn-primary") );
									?>
						</div>

						<div class="col-md-4 col-sm-6">

					      		<div class="well">

					      			<h4>Extra Info</h4>

									<p>This is your account page...</p>
										
										
									<p> To insert additional information here...or maybe user picture?</p>
									<img class="featurette-image img-responsive center-block"
									<?php
									if (!$user['Upload']['path']) {
										echo 'data-src="holder.js/200x200"';
									} else {
										echo 'src="' . $this->webroot . $user['Upload']['path'] . '"';
									}?>>
					      		</div>
						</div>
					</div>	
				</fieldset>
			</form>
			</div>
			
			<div class="tab-pane" id="settings">
				<form id="edit-profile2" class="form-horizontal col-md-8">
					<fieldset>
						
						<h4>Stacked Navigation</h4>
						<br />

						<ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
						        <li class="active">
						        	<a href="javascript:;">
						        		<span class="badge pull-right"><?php echo $comments_total; ?></span>
						        		Home
						        	</a>
						        </li>

						        <li><a href="javascript:;">Profile</a></li>
						        <li>
						        	<a href="javascript:;">
						        		<span class="badge pull-right">3</span>
						        		Messages
						        	</a>
						        </li>
						 </ul>
						
					</fieldset>
				</form>
			</div>

			<div class="tab-pane" id="maps">
				<form id="edit-profile3" class="form-horizontal col-md-8">
					<fieldset>
						
						Testing 2!!!!
						
					</fieldset>
				</form>
			</div>

		</div>
</div>
</br>
