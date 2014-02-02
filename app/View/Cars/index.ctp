<h1>Car listing</h1>
<p>This is a list of all registered cars.</p>

<button class="btn btn-lg btn-default"><?php echo $this->Html->link('Add another car', 'add/'); ?></button>

<br><br>

<table class='table table-striped'>
	<tr>
		<th>#</th>
		<th>Brand</th>
		<th>Model</th>
		<th>Transmission</th>
		<th>Engine Type</th>
		<th>Engine Capacity</th>
		<th>License Plate</th>
		<th>Ratings</th>
		<th>Owner</th>
		<th>Actions</th>
	</tr>

	<?php $num = 1; ?>
	<?php $counter = 0; ?>
	<?php $ratings_total = 0; ?>
	<?php foreach ($cars as $car): ?>
	<tr>
		<td><?php echo $num; ?></td>
		<td><?php echo $car['Car']['brand']; ?></td>
		<td><?php echo $car['Car']['model']; ?></td>
		<td><?php echo $car['Car']['transmission']; ?></td>
		<td><?php echo $car['Car']['engine_type']; ?></td>
		<td><?php echo $car['Car']['engine_capacity']; ?></td>
		<td><?php echo $car['Car']['license_plate']; ?></td>
		<td><?php foreach ($reviews as $review):?>
			<?php if($car['Car']['id'] == $review['Review']['car_id'])
			{
				$ratings_total = $ratings_total + $review['Review']['ratings'];
				$counter++;
			}
			endforeach;

			if ($counter == 0) {
				echo '0 Stars';
			} else {
				$average_ratings = $ratings_total / $counter;
				echo $average_ratings . ' Stars' ; 
				$counter = 0;
				$ratings_total = 0;
				$average_ratings = 0;
			}
			?></td>
		<?php foreach ($users as $user):?> 
				<?php if($car['Car']['user_id'] == $user['User']['id']){?><td><?php echo $user['User']['username'];?></td> <?php } ?>
				<?php endforeach; ?>
		<td><?php echo $this->Html->link('View', 'view/' . $car['Car']['id']) . " | " . 
			$this->Html->link('Edit', 'edit/' . $car['Car']['id']) . " | " . 
			$this->Form->postLink('Delete', array('action' => 'delete', $car['Car']['id']),
				array('confirm' => 'Are you sure?')); ?></td>
	</tr>
	<?php $num++; ?>
	<?php endforeach; ?>
	<?php unset($car); ?>

</table>