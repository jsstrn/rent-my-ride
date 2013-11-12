<h1>List of all cars</h1>
<table>
	<tr>
		<th>#</th>
		<th>Brand</th>
		<th>Model</th>
		<th>Transmission</th>
		<th>Engine Type</th>
		<th>Engine Capacity</th>
	</tr>

	<?php foreach ($cars as $car): ?>
	<tr>
		<td><?php echo $this->Html->link($car['Car']['id'], array('controller' => 'cars', 'action' => 'view', $car['Car']['id'])) ; ?></td>
		<td><?php echo $car['Car']['brand']; ?></td>
		<td><?php echo $car['Car']['model']; ?></td>
		<td><?php echo $car['Car']['transmission']; ?></td>
		<td><?php echo $car['Car']['engine_type']; ?></td>
		<td><?php echo $car['Car']['engine_capacity']; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($car); ?>

</table>