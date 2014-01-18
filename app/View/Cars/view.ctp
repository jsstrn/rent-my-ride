<h1>Car details</h1>
<table class='table'>
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
	<tr>
		<td>Map</td>
		<td><?php echo '<iframe width="560" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowtransparency="true" src="http://gothere.sg/maps#q:' . $car['Car']['postal_code'] . '"></iframe>'; ?></td>
	</tr>
</table>
<br>
<?php if ($current_user['group_id'] == 1)
		{
		   echo $this->html->link('Back', array('action'=>'index')). " | " .
		   $this->html->link('Edit', array('action'=>'edit', $car['Car']['id'])). " | " . 
           $this->html->link('Delete', array('action'=>'delete', $car['Car']['id']), NULL, 'Are you sure you want to delete this Car?'); 
        }
        else
        {
           echo $this->html->link('Back', array('action'=>'search')). " | " .
		   $this->html->link('Edit', array('action'=>'edit', $car['Car']['id'])). " | " . 
           $this->html->link('Delete', array('action'=>'delete', $car['Car']['id']), NULL, 'Are you sure you want to delete this Car?'); 
        }
        ?>