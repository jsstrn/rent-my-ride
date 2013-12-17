<h2>Search a car</h2>

<?php echo $this->Form->create('Car', array('type' => 'post', 'class' => 'form-inline')); ?>
<div class="col-xs-7">
<?php echo $this->Form->text('brand', array('class' => 'form-control', 'placeholder' => 'Search for a car')); ?>
</div>
<button type="submit" class="btn btn-success">Search</button>
<?php echo $this->Form->end(); ?>

<br>

<?php $num = 1; ?>
<?php foreach ($cars as $car): ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Car #<?php echo $num;?></h3>
  </div>
  <div class="panel-body">
   	<div class="col-md-3">
   		<img src="holder.js/200x200" class="img-thumbnail center-block">
   	</div>
	<div class="col-md-9">
		<table class="table table-hover">
			<tr>
				<td><strong>Brand</strong></td>
				<td><?php echo $car['Car']['brand']; ?></td>
				<td><strong>Model</strong></td>
				<td><?php echo $car['Car']['model']; ?></td>
			</tr>
			<tr>
				<td><strong>Text</strong></td>
				<td>-</td>
				<td><strong>Location</strong></td>
				<td>-</td>
			</tr>
			<tr>
				<td><strong>Type</strong></td>
				<td><?php echo $car['Car']['engine_type']; ?></td>
				<td><strong>Capacity</strong></td>
				<td><?php echo $car['Car']['engine_capacity']; ?></td>
			</tr>
			<tr>
				<td><strong>Transmission</strong></td>
				<td><?php echo $car['Car']['transmission']; ?></td>
				<td><strong>Price</strong></td>
				<td>-</td>
			</tr>
		</table>
		<div class="pull-right">
			<button class="btn btn-default">View Details</button>
			<button class="btn btn-primary">Book Now!</button>
		</div>
	</div>
  </div>
</div>
<?php $num++; ?>
<?php endforeach; ?>
<?php unset($car); ?>