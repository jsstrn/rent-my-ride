<h2>Search a user</h2>

<div class="row">
	<div class="col-xs-6 col-md-10">
		<?php echo $this->Form->create('User', array('type' => 'post', 'class' => 'form-inline')); ?>
		<?php echo $this->Form->text('search', array('required'=>'false', 'class' => 'form-control input-lg', 'placeholder' => 'Search for a user, leave blank for all users')); ?>
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
   		<img class="center-block"
   		<?php
   		if (!$user['Upload']['path']) {
   			echo 'data-src="holder.js/200x200"';
   		} else {
   			echo 'src="' . $this->webroot . $user['Upload']['path'] . '"';
   		}?>>
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
				<td><strong>Username</strong></td>
				<td><?php echo $user['User']['username']; ?></td>
			</tr>
			<tr>
				<td><strong>Role</strong></td>
				<?php if($user['User']['group_id'] == 1)
				{
					echo '<td>Admin</td>'; 
				}
				else
				{
					echo '<td>User</td>';
				}
				?>
				<td></td>
				<td></td>
			</tr>
		</table>
		<div class="pull-right">
			<form action="">
			</form>
			
			<button class="btn btn-info" onclick="window.location.href='<?php echo Router::url(array('controller'=>'users', 'action'=>'view', $user['User']['id']))?>'">View</button>
			</button>
			<button class="btn btn-primary" onclick="window.location.href='<?php echo Router::url(array('controller'=>'comments', 'action'=>'add', $user['User']['id']))?>'">Give Comment!</button>
		</div>
	</div>
  </div>
</div>
<?php $num++; ?>
<?php endforeach; ?>
<?php unset($user); ?>