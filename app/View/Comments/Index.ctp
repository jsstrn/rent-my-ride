<h2>View all comments</h2>
<p>This is a list comments</p>

<button class="btn btn-lg btn-default"><?php echo $this->Html->link('Add a comment', array('action' => 'add')); ?></button>

<br><br>

<table class='table table-striped'>
	<tr>
		<th>#</th>
		<th>Title</th>
		<th>Body</th>
		<th>Actions</th>
	</tr>

	<?php $num = 1; ?>
	<?php foreach($posts as $post): ?>
	<tr>
		<td><?php echo $num; ?></td>
		<td><?php echo $post['Comment']['title']; ?></td>
		<td><?php echo $post['Comment']['body']; ?></td>
		<td><?php echo $this->html->link('View', array('action'=>'view', $post['Comment']['id'])) . " | " . 
			$this->html->link('Edit', array('action'=>'edit', $post['Comment']['id'])) . " | " . 
			$this->Html->link('Delete', array('action' => 'delete', $post['Comment']['id']), NULL, 'Are you sure you want to delete this comment?'); ?></td>
	</tr>
	<?php $num ++; ?>
	<?php endforeach; ?>
	<?php unset($post); ?>

	
</table>
