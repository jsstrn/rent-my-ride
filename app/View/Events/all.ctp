<h1>Events listing</h1>
<p>This is a list of all bookings.</p>

<table class='table table-striped'>
	<tr>
		<th>#</th>
		<th>Start Date</th>
		<th>End Date</th>
		<th>Interval</th>
		<th>Booked by</th>
		<th>Actions</th>
	</tr>

	<?php $num = 1; ?>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?php echo $num; ?></td>
		<td><?php echo $event['Event']['datetime_start']; ?></td>
		<td><?php echo $event['Event']['datetime_end']; ?></td>
		<td><?php echo $event['Event']['interval']; ?></td>
		<td><?php echo $event['User']['name']; ?></td>
		<td><?php echo $this->Html->link('View', 'view/' . $event['Event']['id']) . " | " . 
			$this->Html->link('Edit', 'edit/' . $event['Event']['id']) . " | " . 
			$this->Form->postLink('Delete', 'delete/' . $event['Event']['id']); ?></td>
	</tr>
	<?php $num++; ?>
	<?php endforeach; ?>
	<?php unset($event); ?>

</table>