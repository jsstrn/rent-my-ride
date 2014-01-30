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
		<th>User</th>
		<th>Actions</th>
	</tr>

	<?php $num = 1; ?>
	<?php foreach ($cars as $car): ?>
	<tr>
		<td><?php echo $num; ?></td>
		<td><?php echo $car['Car']['brand']; ?></td>
		<td><?php echo $car['Car']['model']; ?></td>
		<td><?php echo $car['Car']['transmission']; ?></td>
		<td><?php echo $car['Car']['engine_type']; ?></td>
		<td><?php echo $car['Car']['engine_capacity']; ?></td>
		<td><?php echo $car['Car']['license_plate']; ?></td>
		<?php foreach ($users as $user):?> 
				<?php if($car['Car']['user_id'] == $user['User']['id']){?><td><?php echo $user['User']['username'];?></td> <?php } ?>
				<?php endforeach; ?>
		<td><?php echo $this->Html->link('View', 'view/' . $car['Car']['id']) . " | " . 
			$this->Html->link('Edit', 'edit/' . $car['Car']['id']) . " | " . 
			$this->Form->postLink('Delete', 'delete/' . $car['Car']['id']); ?></td>
	</tr>
	<?php $num++; ?>
	<?php endforeach; ?>
	<?php unset($car); ?>

</table>