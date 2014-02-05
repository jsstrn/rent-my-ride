<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5AkVMzStH2F21VpFIMfg3tXxcFOsHUxg&sensor=false">
</script>

<script type="text/javascript">

function initialize() {

	var position = new google.maps.LatLng(1.3024213, 103.839922);
	var image = "<?php echo $this->webroot ;?>img/map/pin-red.png";

	var mapOptions = {
		'center' : new google.maps.LatLng(1.352083, 103.819836),
		'zoom' : 12
	};

	var map = new google.maps.Map(document.getElementById("map-canvas"),
		mapOptions);

	<?php $num = 0; 
	foreach ($cars as $car): ?>

	var marker = new google.maps.Marker({
		'position' : new google.maps.LatLng(<?php echo $car[$num]['Car']['lat']; ?>, <?php echo $car[$num]['Car']['lng']; ?>),
		'map' : map,
		'icon' : image,
		'animation' : google.maps.Animation.DROP
	});

	var infowindow = new google.maps.InfoWindow({
		content: '<?php echo $user['User']['username'] .' `s'; ?> Cars'
	});

	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(marker.get('map'), marker);
	});

	<?php $num++; ?>
	<?php endforeach; ?>
	<?php unset($car); ?>

}

google.maps.event.addDomListener(window, 'load', initialize);

/*if (activeTab == '#map-canvas') { 
	google.maps.event.trigger(map, 'resize');
	var center = new google.maps.LatLng(1.352083,103.819836);
		map.setCenter(center);
	map.setZoom( map.getZoom() );
}*/

</script>

<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active">
			<a href="#profile" data-toggle="tab">Profile</a>
		</li>
		<li><a href="#cars" data-toggle="tab">Cars</a></li>
		<li><a href="#maps" data-toggle="tab">My Car location</a></li>
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
											<?php echo $this->Html->link('Edit this car',
												array('controller' => 'cars', 'action' => 'edit', $user['Car'][$num]['id'] ),
												array('class' => 'btn btn-primary')); ?>
											<?php echo $this->Html->link('Remove this car', 'cars/map', array('class' => 'btn btn-danger', 
											'data-toggle' => "modal", 'data-target' => "#modal-delete")); ?>
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
												array('controller' => 'car', 'action' => 'delete', $user['Car'][$num]['id']) ,
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

						<div id="map-canvas" style="width: 1100px; height: 700px; margin: 0 auto;"/>

					</fieldset>
				</form>
			</div>
		</div>
	</div>
</br>
