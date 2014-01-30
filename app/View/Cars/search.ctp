<h2>Search a car</h2>

<div class="row">
	<div class="col-xs-6 col-sm-10">
		<?php echo $this->Form->create('Car', array('type' => 'post', 'class' => 'form-inline')); ?>
		<?php echo $this->Form->text('search', array('class' => 'form-control', 'placeholder' => 'Search for a car, leave blank for all cars')); ?>

	</div>
	<div class="col-xs-6 col-sm-2">
		<button type="submit" class="btn btn-success form-control">Search</button>
		<?php echo $this->Form->end(); ?>
	</div>
</div>
<br>
<?php $num = 1; ?>
<?php $counter = 0; ?>
<?php foreach ($cars as $car): ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Car #<?php echo $num;?></h3>
  </div>
  <div class="panel-body">
   	<div class="col-md-3">
   		<img data-src="holder.js/200x200" class="img-thumbnail center-block" src="<?php echo $upload['Car']['image'];?>">
   		<?php // echo $car['Car']['image']; ?>
   	</div>

	<div class="col-md-9">
		<table class="table table-hover">
			<tr>
				<td><strong>Brand</strong></td>
				<td><?php echo $car['Car']['brand']; ?></td>
				<td><strong>Model</strong></td>
				<td><?php echo $car['Car']['model']; ?></td>
			</tr>
			<tr>
				<td><strong>License Plate</strong></td>
				<td><?php echo $car['Car']['license_plate']; ?></td>
				<td><strong>Location</strong></td>
				<td><?php echo $car['Car']['formatted_address']; ?></td>
			</tr>
			<tr>
				<td><strong>Type</strong></td>
				<td><?php echo $car['Car']['engine_type']; ?></td>
				<td><strong>Capacity</strong></td>
				<td><?php echo $car['Car']['engine_capacity']; ?></td>
			</tr>
			<tr>
				<td><strong>Transmission</strong></td>
				<td><?php echo $car['Car']['transmission']; ?></td>
				<td><strong>User</strong></td>
				<?php foreach ($users as $user):?> 
				<?php if($car['Car']['user_id'] == $user['User']['id']){?><td><?php echo $user['User']['username'];?></td> <?php } ?>
				<?php endforeach; ?>
			</tr>

		</table>
		<div class="pull-right">
			<?php echo $this->Html->link('View Details', 'view/' . $car['Car']['id'], array('class' => 'btn btn-default')) ;?>
			<?php echo $this->Html->link('Book Now', array(
				'controller' => 'events',
				'action' => 'add',
				$car['Car']['id']),
				array('class' => 'btn btn-primary'))
			;?>
			<?php echo $this->Html->link('Submit Review', array(
				'controller' => 'reviews',
				'action' => 'add',
				$car['Car']['id']),
				array('class' => 'btn btn-primary'))
			;?>
		</div>
	</div>
  </div>
</div>
<?php $num++; ?>
<?php endforeach; ?>
<?php unset($car); ?>
<?php unset($user); ?>
