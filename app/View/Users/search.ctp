<h2>Search a user</h2>

<div class="row">
	<div class="col-xs-6 col-md-10">
		<?php echo $this->Form->create('User', array('type' => 'post', 'class' => 'form-inline')); ?>
		<?php echo $this->Form->text('username', array('required'=>'false', 'class' => 'form-control input-lg', 'placeholder' => 'Search for a user, leave blank for all users')); ?>
	</div>
	<div class="col-xs-6 col-md-2">
		<button type="submit" class="btn btn-lg btn-success">Search</button>
		<?php echo $this->Form->end(); ?>
	</div>
</div>

<br>

<?php $num = 1; ?>
<?php foreach ($users as $user): ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">User #<?php echo $num;?></h3>
  </div>
  <div class="panel-body">
   	<div class="col-md-3">
   		<img src="holder.js/200x200" class="img-thumbnail center-block">
   	</div>
	<div class="col-md-9">
		<table class="table table-hover">
			<tr>
				<td><strong>Name</strong></td>
				<td><?php echo $user['User']['username']; ?></td>
				<td><strong>Address</strong></td>
				<td><?php echo $user['User']['address']; ?></td>
			</tr>
			<tr>
				<td><strong>E-mail</strong></td>
				<td><?php echo $user['User']['email']; ?></td>
				<td><strong>Mobile</strong></td>
				<td><?php echo $user['User']['mobile']; ?></td>
			</tr>
			<tr>
				<td><strong>License</strong></td>
				<td><?php echo $user['User']['license']; ?></td>
				<td><strong>Ratings</strong></td>
				<td>-</td>
			</tr>
		</table>
		<div class="pull-right">
			<form action="">
			</form>
			
		<?php // echo $this->Html->link('View Details', 'view/' . $user['User']['id']) ; ?>
			<button class="btn btn-default"><?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'])); ?></button>
				<?php //$this->Html->link('View', array('action' => 'view' , $user['User']['id'])); ?>
				<?php //echo $this->Form->('View', array('action' => 'view', $user['User']['id'])); ?>
				

			</button>
			<button class="btn btn-primary">Give Rating!</button>
			<button class="btn btn-primary">Give Comment!</button>
		</div>
	</div>
  </div>
</div>
<?php $num++; ?>
<?php endforeach; ?>
<?php unset($user); ?>