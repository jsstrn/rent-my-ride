<h1>User details</h1>
<table class='table'>
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
</table

<hr>

</br>

<?php if ($current_user['group_id'] == 1)
		{
		   echo $this->html->link('Back', array('action'=>'index')). " | " . 
		   $this->html->link('Edit', array('action'=>'edit', $user['User']['id'])). " | " . 
           $this->html->link('Delete', array('action'=>'delete', $user['User']['id']), NULL, 'Are you sure you want to delete this user?'); 
        }
        else
        {
           echo $this->html->link('Back', array('action'=>'search')). " | " . 
		   $this->html->link('Edit', array('action'=>'edit', $user['User']['id'])). " | " . 
           $this->html->link('Delete', array('action'=>'delete', $user['User']['id']), NULL, 'Are you sure you want to delete this user?'); 
		}
    	?>