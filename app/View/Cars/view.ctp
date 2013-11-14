<h1>Car details</h1>
<table>
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>
	<tr>
		<td>Brand</td>
		<td><?php echo h($car['Car']['brand']) ?></td>
	</tr>
	<tr>
		<td>Model</td>
		<td><?php echo h($car['Car']['model']) ?></td>
	</tr>
	<tr>
		<td>Transmission</td>
		<td><?php echo h($car['Car']['transmission']) ?></td>
	</tr>
	<tr>
		<td>Engine Type</td>
		<td><?php echo h($car['Car']['engine_type']) ?></td>
	</tr>
	<tr>
		<td>Engine Capacity</td>
		<td><?php echo h($car['Car']['engine_capacity']) ?></td>
	</tr>
</table>
<br>
<p><?php echo $this->Html->link('Back', array('controller' => 'cars', 'action' => 'index')); ?></p>