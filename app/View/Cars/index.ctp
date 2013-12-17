<h1>Car listing</h1>
<p>This is a list of all registered cars.</p>

<p><?php echo $this->Html->link('Add another car', 'add/'); ?></p>

<table class='table table-striped'>
	<tr>
		<th>#</th>
		<th>Brand</th>
		<th>Model</th>
		<th>Transmission</th>
		<th>Engine Type</th>
		<th>Engine Capacity</th>
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
		<td><?php echo $this->Html->link('View', 'view/' . $car['Car']['id']) . " | " . 
			$this->Html->link('Edit', 'edit/' . $car['Car']['id']) . " | " . 
			$this->Form->postLink('Delete', 'delete/' . $car['Car']['id']); ?></td>
	</tr>
	<?php $num++; ?>
	<?php endforeach; ?>
	<?php unset($car); ?>

</table>