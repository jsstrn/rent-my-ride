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
<?php $ratings_total = 0; ?>
<?php foreach ($cars as $car): ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Car #<?php echo $num;?></h3>
  </div>
  <div class="panel-body">
   	<div class="col-md-3">
   		<img class="img-responsive center-block"
   		<?php
   		if (!$cars[$num - 1]['Picture']['path']) {
   			echo 'data-src="holder.js/200x200"';
   		} else {
   			echo 'src="' . $this->webroot . $cars[$num - 1]['Picture']['path'] . '"';
   		}?>>
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
				<td><strong>Owner</strong></td>
				<?php foreach ($users as $user):?> 
				<?php if($car['Car']['user_id'] == $user['User']['id']){?><td><?php echo $user['User']['username'];?></td> <?php } ?>
				<?php endforeach; ?>
			</tr>

		</table>
		<div class="well">
			<?php foreach ($reviews as $review):?>
			<?php if($car['Car']['id'] == $review['Review']['car_id'])
			{
				$ratings_total = $ratings_total + $review['Review']['ratings'];
				$counter++;
			}
			endforeach;
			
			if($counter == 0)
			{
				echo '<center><strong>Ratings: 0 Stars</strong></center>';
			}
			else
			{
				$average_ratings = $ratings_total / $counter;
				echo '<center><strong>Ratings:</strong> ' . '<strong>' . $average_ratings . ' Stars' .
				'</strong></center>'; 
				$counter = 0;
				$ratings_total = 0;
				$average_ratings = 0;
			}
			?>
		</div>
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
