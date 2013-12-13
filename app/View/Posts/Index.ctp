<h2>View all comments</h2>

<table>
	<tr>
		<th>Title</th>
        <th>Body</th>
	</tr>
	<?php foreach($posts as $post): ?>
	<tr>
		<td> <?php echo $this->html->link($post['Post']['title'], array('action'=>'view', $post['Post']['id'])); ; ?></td>
		<td> <?php echo $post['Post']['body']; ?></td>
	</tr>
	<?php endforeach; ?>

	
</table>