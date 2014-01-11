<h1> View all image file</h1>
<p> This is a list of image by all user</p>


<button class="btn btn-lg btn-default"><?php echo $this->Html->link('Add image', array('action' => 'add')); ?></button>

<br><br>

<table class='table table-striped'>
	<tr>
		<th>#</th>
		<th>id</th>
		<th>user_id</th>
		<th>image</th>
		<th>Actions</th>
	</tr>

	<?php $num = 1; ?>
	<?php foreach($images as $image): ?>
	<tr>
		<td><?php echo $num; ?></td>
		<td><?php echo $image['image']['id']; ?></td>
		<td><?php echo $message['image']['user_id']; ?></td>
		<td><?php echo $this->html->link('View', array('action'=>'view', $message['image']['id'])) . " | " . 
			$this->html->link('Edit', array('action'=>'edit', $message['image']['id'])) . " | " . 
			$this->Html->link('Delete', array('action' => 'delete', $message['image']['id'])); ?></td>
	</tr>
	<?php $num ++; ?>
	<?php endforeach; ?>
	<?php unset($image); ?>
</table>