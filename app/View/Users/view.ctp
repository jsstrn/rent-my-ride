<h1>User details</h1>
<table>
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo h($user['User']['name']) ?></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><?php echo h($user['User']['address']) ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo h($user['User']['email']) ?></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><?php echo h($user['User']['mobile']) ?></td>
	</tr>
	<tr>
		<td>License</td>
		<td><?php echo h($user['User']['license']) ?></td>
	</tr>
	<tr>
		<td>Map</td>
		<td><?php echo '<iframe width="560" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowtransparency="true" src="http://gothere.sg/maps#q:' . $user['User']['postal_code'] . '"></iframe>'; ?></td>
	</tr>
</table>
<br>
<p><?php echo $this->Html->link('Back', array('controller' => 'users', 'action' => 'index')); ?></p>