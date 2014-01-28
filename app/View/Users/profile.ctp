<div class="tabbable">
	<ul class="nav nav-tabs">
	  <li class="active">
	    <a href="#profile" data-toggle="tab">Profile</a>
	  </li>
	  <li><a href="#cars" data-toggle="tab">Cars</a></li>
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

			
			

			<div class="tab-pane" id="cars">
				<form id="edit-profile2" class="form-horizontal col-md-12">
					<fieldset>
						<div class="row">
								<div class="panel panel-default">
						  			<div class="panel-heading">
						    			<h3 class="panel-title">You have X cars</h3>
						  			</div>
						  			<div class="panel-body">
								   				<div class="col-md-3">
								   				<img src="holder.js/150x150" class="img-thumbnail center-block">
								   				</div>
								   		<div class="col-md-9">	
										<table class="table table-hover">
											<tr>
												<td><strong>Brand</strong></td>
												<td><?php echo h($user['Car']['0']['brand']); ?></td>
												<td><strong>Model</strong></td>
												<td><?php echo h($user['Car']['0']['model']); ?></td>
											</tr>
											<tr>
												<td><strong>License plate</strong></td>
												<td><?php echo h($user['Car']['0']['license_plate']); ?></td>
												<td><strong>Engine Type</strong></td>
												<td><?php echo h($user['Car']['0']['engine_type']); ?></td>
											</tr>
											<tr>
												<td><strong>Transmission</strong></td>
												<td><?php echo h($user['Car']['0']['transmission']); ?></td>
												<td><strong>Capacity</strong></td>
												<td><?php echo h($user['Car']['0']['engine_capacity']); ?></td>
											</tr>
											<tr>
												<td><strong>Text</strong></td>
												<td><?php echo h($user['Car']['0']['brand']); ?></td>
												<td><strong>Price</strong></td>
												<td><?php echo h($user['Car']['0']['rate']); ?></td>
											</tr>
										</table>
										<div class="pull-right">
											<button class="btn btn-default">View Details</button>
										</div>
										</div>
									
					  				
									</div>
								</div>	
						</div>
					</fieldset>
				</form>
			</div>

			<div class="tab-pane" id="settings">
				<form id="edit-profile3" class="form-horizontal col-md-8">
					<fieldset>
						<div class="row">
							<div class="col-md-8 col-sm-6">
								
							</div>
						

							<div class="col-md-4 col-sm-6">

						      		<div class="well">
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
						      			
						      		</div>
							</div>
						</div>	
					</fieldset>
				</form>
			</div>

			<div class="tab-pane" id="maps">
				<form id="edit-profile4" class="form-horizontal col-md-8">
					<fieldset>
						
							
								
								<?php echo '<iframe width="1109" height="570" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowtransparency="true" src="http://gothere.sg/maps#q:' . $user['User']['postal_code'] . '"></iframe>'; ?>
								
							
					</fieldset>
				</form>
			</div>

		</div>
</div>
</br>
