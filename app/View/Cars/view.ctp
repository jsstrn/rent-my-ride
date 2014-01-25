<h1>Car details</h1>
<hr></hr>
<div class='row'>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
   				<table class='table'>
				<tr>
					<td><strong>Brand</strong></td>
					<td><?php echo h($car['Car']['brand']) ?></td>
					<td><strong>Model</strong></td>
					<td><?php echo h($car['Car']['model']) ?></td>
				</tr>
				<tr>
					<td><strong>Transmission</strong></td>
					<td><?php echo h($car['Car']['transmission']) ?></td>
					<td><strong>Engine Type</strong></td>
					<td><?php echo h($car['Car']['engine_type']) ?></td>
				</tr>
				<tr>
					<td><strong>Engine Capacity</strong></td>
					<td><?php echo h($car['Car']['engine_capacity']) ?></td>
					<td><strong>Rates</strong></td>
					<td><?php echo '$'.h($car['Car']['rate']).'.00' ?></td>
				</tr>
				</table>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo '<iframe width="520" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowtransparency="true" src="http://gothere.sg/maps#q:' . $car['Car']['postal_code'] . '"></iframe>'; ?>
			</div>
		</div>
	</div>
</div>

	
		<?php foreach ($review as $reviews): ?>
		<div class='row'>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<strong><?php echo h($reviews['Review']['title']) ?></strong>
						<hr></hr>
						<p><?php echo h($reviews['Review']['body']) ?></p>
						<hr></hr>
						<p><small>Commented By: <?php echo h($reviews['Review']['fromsender'])?></small>&nbsp;&nbsp;
						<small>Created On: <?php echo h($reviews['Review']['created'])?></small></p>
						<br />
						<strong>Ratings: <?php echo h($reviews['Review']['ratings']) ?></strong>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>



<div class='row'>

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
</div>


