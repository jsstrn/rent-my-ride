<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active">
			<a href="#profile" data-toggle="tab">Profile</a>
		</li>
		<li><a href="#cars" data-toggle="tab">Cars</a></li>
		<li><a href="#sent" data-toggle="tab">Sent Comments</a></li>
		<li><a href="#received" data-toggle="tab">Received Comments</a></li>
	</ul>
	
	<br>
	<!-- Profile -->
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

							echo $this->Html->link(' Update', 'edit/' . $user['User']['id'], array('class' => 'btn btn-warning glyphicon glyphicon-pencil'));
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

									<li><a href="#sent">
										<span class="badge pull-right"><?php echo count($username); ?></span>
										Sent Comments
									</a></li>
									<li>
										<a href="#received">
											<span class="badge pull-right"><?php echo count($user['Comment']); ?></span>
											Received Comments
										</a>
									</li>
								</ul>

								<h4>Profile picture</h4>
								<img class="img-circle img-responsive"
								<?php
								if (!$user['Upload']['path']) {
									echo 'data-src="holder.js/300x300"';
								} else {
									echo 'src="' . $this->webroot . $user['Upload']['path'] . '"';
								}
								?>>
							</div>
						</div>
					</div>	
				</fieldset>
			</form>
		</div>

		<!-- Car -->
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
												<td><?php echo '$'.h($user['Car'][$num]['rate']).'.00'; ?></td>
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
										<div class="pull-right">
											<?php echo $this->Html->link(' View', array('controller' => 'cars', 'action' => 'view', $user['Car'][$num]['id']), array('class' => 'btn btn-info glyphicon glyphicon-eye-open')) ;?>
											<?php echo $this->Html->link(' Edit',
												array('controller' => 'cars', 'action' => 'edit', $user['Car'][$num]['id'] ),
												array('class' => 'btn btn-primary glyphicon glyphicon-pencil')); ?>
											<?php echo $this->Html->link(' Remove', 'cars/map', array('class' => 'btn btn-danger glyphicon glyphicon-trash', 'data-toggle' => "modal", 'data-target' => "#modal-delete")); ?>
										</div>
									</div>
								</div>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="model-label">Confirmation</h4>
										</div>
										<div class="modal-body">
											<p>Are you sure you want remove this car? This action cannot be undone.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
											<?php echo $this->Html->link('Remove this car',
												array('controller' => 'cars', 'action' => 'delete', $user['Car'][$num]['id']) ,
												array('class' => 'btn btn-danger')); ?>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
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

										<li><a href="#sent">
											<span class="badge pull-right"><?php echo count($username); ?></span>
											Sent Comments
										</a></li>
										<li>
											<a href="#received">
												<span class="badge pull-right"><?php echo count($user['Comment']); ?></span>
												Received Comments
											</a>
										</li>
									</ul>

									<h4>Profile picture</h4>
									<img class="img-circle img-responsive"
									<?php
									if (!$user['Upload']['path']) {
										echo 'src="' . $this->webroot . 'img/users/default.png"';
									} else {
										echo 'src="' . $this->webroot . $user['Upload']['path'] . '"';
									}
									?>>
								</div>
							</div><!-- .col -->
						</div>
					</fieldset>
				</form>
			</div>

			<!-- Received comments -->
			<div class="tab-pane" id="received">
				<form id="edit-profile2" >
					<fieldset>
						<div class="row">
							<div class="col-md-8 col-sm-6">
								<h3>You have <?php echo count($user['Comment']);?> received comments</h3>
								<?php $comment = 1;
								$num = 0; 
								$n = ($user['Comment']);
								foreach($n as $total): ?>
								<div class="panel panel-default"> 
									<div class="panel-heading">	
										<h3 class="panel-title">Received Comments #<?php echo $comment; ?></h3>
									</div>
									<div class="panel-body">
										<div class="col-md-12">
											<div> </br>
												<table class="table table-striped">
													<tr>
														<th>Title</th>
														<th>Body</th>
														<th>Sender</th>
													</tr>

													<tr>
														<td><?php echo $user['Comment'][$num]['title']; ?></td>
														<td><?php echo $user['Comment'][$num]['body']; ?></td>
														<td><?php echo $user['Comment'][$num]['fromsender']; ?></td>
													</table>	
												</div>
											</div>
										</div>
									</div>
										<?php $comment ++; 
										$num ++; 
										endforeach;
										unset($total); ?>
									</div><!-- .col -->

									<div class="col-md-4 col-sm-6">
										<div class="well">

											<h4>Extra Info</h4>
											<ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
												<li>

													<a href="#cars" </a>
														<span class="badge pull-right"><?php echo count($user['Car']); ?></span>
														Cars owned
													</a>
												</li>

												<li>
													<a href="#sent" </a>
														<span class="badge pull-right"><?php echo count($username); ?></span>
														Sent Comments
													</a></li>

													<li class="active">
														<a href="#received">
															<span class="badge pull-right"><?php echo count($user['Comment']); ?></span>
															Received Comments
														</a>
													</li>
												</ul>

												<h4>Profile picture</h4>
												<img class="img-circle img-responsive"
												<?php
												if (!$user['Upload']['path']) {
													echo 'src="' . $this->webroot . 'img/users/default.png"';
												} else {
													echo 'src="' . $this->webroot . $user['Upload']['path'] . '"';
												}
												?>>
											</div>
										</div><!-- .col -->
									</div>
								</fieldset>
							</form>
						</div>

						<!-- Sent comments -->
						<div class="tab-pane" id="sent">
							<form id="edit-profile2" >
								<fieldset>
									<div class="row">
										<div class="col-md-8 col-sm-6">
											<h3>You have <?php echo count($username);?> sent comments</h3>
											<?php $comment = 1;
											$num = 0; 
											$n = ($username);
											foreach($n as $total): ?>
											<div class="panel panel-default"> 
												<div class="panel-heading">	
													<h3 class="panel-title">Sent Comments #<?php echo $comment; ?></h3>
												</div>
												<div class="panel-body">
													<div class="col-md-12">
														<div> </br>
															<table class="table table-striped">
																<tr>
																	<th>Title</th>
																	<th>Body</th>
																	<th>Sender</th>
																</tr>

																<tr>
																	<td><?php echo $username[$num]['Comment']['title']; ?></td>
																	<td><?php echo $username[$num]['Comment']['body']; ?></td>
																	<td><?php echo $username[$num]['Comment']['fromsender']; ?></td>
																</table>	
															</div>
														</div>
													</div>
												</div>
													<?php $comment ++; 
													$num ++; 
													endforeach;
													unset($total); ?>
												</div><!-- .col -->

												<div class="col-md-4 col-sm-6">
													<div class="well">

														<h4>Extra Info</h4>
														<ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
															<li>

																<a href="#cars" </a>
																	<span class="badge pull-right"><?php echo count($user['Car']); ?></span>
																	Cars owned
																</a>
															</li>

															<li class="active">
																<a href="#sent" </a>
																	<span class="badge pull-right"><?php echo count($username); ?></span>
																	Sent Comments
																</a></li>
																<li>
																	<a href="#received">
																		<span class="badge pull-right"><?php echo count($user['Comment']); ?></span>
																		Received Comments
																	</a>
																</li>
															</ul>

															<h4>Profile picture</h4>
															<img class="img-circle img-responsive"
															<?php
															if (!$user['Upload']['path']) {
																echo 'src="' . $this->webroot . 'img/users/default.png"';
															} else {
																echo 'src="' . $this->webroot . $user['Upload']['path'] . '"';
															}
															?>>
														</div>
													</div><!-- .col -->
												</div>
											</fieldset>
										</form>
									</div>

									<div class="tab-pane" id="maps">
										<form id="edit-profile4" class="form-horizontal col-md-8">
											<fieldset>

												<div id="map-canvas" style="width: 1100px; height: 700px; margin: 0 auto;"/>



											</fieldset>
										</form>
									</div>
								</div>
							</div>
						</br>
