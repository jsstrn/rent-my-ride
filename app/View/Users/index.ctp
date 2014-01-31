<h1>Users listing</h1>
<p>This is a list of all registered users.</p>

<button class="btn btn-lg btn-default"><?php echo $this->Html->link('Add a new user', array('action' => 'add')); ?></button>

<br><br>

<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Address</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>License</th>
		<th>Role</th>
		<th>Actions</th>
	</tr>

	<?php $num = 1; ?>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $num; ?></td>
		<td><?php echo $user['User']['name']; ?></td>
		<td><?php echo $user['User']['address']; ?></td>
		<td><?php echo $user['User']['email']; ?></td>
		<td><?php echo $user['User']['mobile']; ?></td>
		<td><?php echo $user['User']['license']; ?></td>
		<?php if($user['User']['group_id'] == 1)
		{
			echo '<td>Admin</td>'; 
		}
		else
		{
			echo '<td>User</td>';
		}
		?>
		<td><?php echo $this->Html->link('View', 'view/' . $user['User']['id']) . " | " . 
			$this->Html->link('Edit', 'edit/' . $user['User']['id']) . " | " . 
			$this->Form->postLink('Delete',
				array('action' => 'delete', $user['User']['id']),
				array('confirm' => 'Are you sure?')); 
				?></td>
	</tr>
	<?php $num++; ?>
	<?php endforeach; ?>
	<?php unset($user); ?>
</table>