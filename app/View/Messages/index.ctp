<h1>View all messages</h1>
<p>This is a list messages by all user</p>

<button class="btn btn-lg btn-default"><?php echo $this->Html->link('Add messages', array('action' => 'add')); ?></button>

<br><br>

<table class='table table-striped'>
	<tr>
		<th>#</th>
		<th>Subject</th>
		<th>Body</th>
		<th>Actions</th>
	</tr>

	<?php $num = 1; ?>
	<?php foreach($messages as $message): ?>
	<tr>
		<td><?php echo $num; ?></td>
		<td><?php echo $message['Message']['title']; ?></td>
		<td><?php echo $message['Message']['body']; ?></td>
		<td><?php echo $this->html->link('View', array('action'=>'view', $message['Message']['id'])) . " | " . 
			$this->html->link('Edit', array('action'=>'edit', $message['Message']['id'])) . " | " . 
			$this->Html->link('Delete', array('action' => 'delete', $message['Message']['id'])); ?></td>
	</tr>
	<?php $num ++; ?>
	<?php endforeach; ?>
	<?php unset($messages); ?>
</table>