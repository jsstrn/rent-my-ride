<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active">
			<a href="#profile" data-toggle="tab">Profile</a>
		</li>
		<li><a href="#cars" data-toggle="tab">Cars</a></li>
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
							echo $this->Form->create('User', array('disabled' => 'true'));
							echo $this->Form->input('id', array('type' => 'hidden', 'disabled' => 'true'));
							echo $this->Form->input('username', array('required'=>'false', 'disabled' => 'true', 'class' => 'form-control')); ?>
							<p> Your username is for logging in and cannot be changed. </p>
							<?php 
								//echo $this->Form->input('password', array('required'=>'false', 'class' => 'form-control'));
							echo $this->Form->input('name', array('required'=>'false', 'class' => 'form-control','disabled' => 'true'));
							echo $this->Form->input('license', array('label' => 'Driver\'s License', 'required'=>'false', 'class' => 'form-control', 'disabled' => 'true'));
							echo $this->Form->input('email', array('required'=>'false', 'class' => 'form-control', 'disabled' => 'true'));
							echo $this->Form->input('mobile', array('required'=>'false', 'class' => 'form-control', 'disabled' => 'true'));
							echo $this->Form->input('address', array('required'=>'false', 'class' => 'form-control', 'disabled' => 'true'));
							echo $this->Form->input('postal_code', array('required'=>'false', 'class' => 'form-control', 'disabled' => 'true'));
							echo '</br>';

							echo $this->Html->link('Update', 'edit/' . $user['User']['id'], array('class' => 'btn btn-warning'));
							?>
						</div>

						<div class="col-md-4 col-sm-6">

							<div class="well">

								<h4>Extra Info</h4>
								<ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
									<!-- <li class="active"> -->
									<li>
										<a href="#cars" </a>
											<span class="badge pull-right"><?php echo count($user['Car']); ?></span>
											Cars owned
										</a>
									</li>

									<li><a href="<?php echo Router::url(array('controller'=>'comments', 'action'=>'index'))?>">
										<span class="badge pull-right"><?php echo count($username); ?></span>
										Sent Comments
									</a></li>
									<li>
										<a href="<?php echo Router::url(array('controller'=>'comments', 'action'=>'index'))?>">
											<span class="badge pull-right"><?php echo count($user['Comment']); ?></span>
											Received Comments
										</a>
									</li>
								</ul>

								<h4>Profile picture</h4>
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
			<form id="edit-profile2" >
				<fieldset>
					<div class="row">
						<div class="col-md-8 col-sm-6">
							<h3>You have <?php echo count($user['Car']);?> cars</h3>
							<?php $car = 1;
							$num = 0; 
							$n = ($user['Car']);
							foreach($n as $total): ?>
							<div class="panel panel-default"> 
								<div class="panel-heading">	
									<h3 class="panel-title">Car #<?php echo $car; ?></h3>
								</div>
								<div class="panel-body">
									<div class="col-md-3">
										<div> </br>
											<img src="<?php echo $this->webroot . $picture[$num]['Picture']['path'];?>" class="img-thumbnail center-block img-responsive">
										</div>
									</div>
									<div class="col-md-9">
										<table class="table table-hover">
											<tr></br>
												<td><strong>Brand</strong></td>
												<td><?php echo h($user['Car'][$num]['brand']); ?></td>
												<td><strong>Price</strong></td>
												<td><?php echo h($user['Car'][$num]['rate']); ?></td>
											</tr>
											<tr>
												<td><strong>License plate</strong></td>
												<td><?php echo h($user['Car'][$num]['license_plate']); ?></td>
												<td><strong>Engine Type</strong></td>
												<td><?php echo h($user['Car'][$num]['engine_type']); ?></td>
											</tr>
											<tr>
												<td><strong>Transmission</strong></td>
												<td><?php echo h($user['Car'][$num]['transmission']); ?></td>
												<td><strong>Capacity</strong></td>
												<td><?php echo h($user['Car'][$num]['engine_capacity']); ?></td>
											</tr></br>
										</table>
									</div>
								</div>
							</div>
							<?php $car ++; 
							$num ++; 
							endforeach;
							unset($total); ?>
						</div><!-- .col -->

						<div class="col-md-4 col-sm-6">
							<div class="well">

								<h4>Extra Info</h4>
								<ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
									<li class="active">

										<a href="#cars" </a>
											<span class="badge pull-right"><?php echo count($user['Car']); ?></span>
											Cars owned
										</a>
									</li>

									<li><a href="<?php echo Router::url(array('controller'=>'comments', 'action'=>'index'))?>">
										<span class="badge pull-right"><?php echo count($username); ?></span>
										Sent Comments
									</a></li>
									<li>
										<a href="<?php echo Router::url(array('controller'=>'comments', 'action'=>'index'))?>">
											<span class="badge pull-right"><?php echo count($user['Comment']); ?></span>
											Received Comments
										</a>
									</li>
								</ul>

								<h4>Profile picture</h4>
								<img class="featurette-image img-responsive center-block"
								<?php
								if (!$user['Upload']['path']) {
									echo 'data-src="holder.js/200x200"';
								} else {
									echo 'src="' . $this->webroot . $user['Upload']['path'] . '"';
								}?>>
							</div>
						</div><!-- .col -->
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
