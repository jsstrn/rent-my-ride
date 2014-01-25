<h1>Uploads listing</h1>

<p>This is a list of all uploaded images.</p>

<p><?php echo $this->Html->link('Add a profile picture.', 'add/', array('class'=>'btn btn-default')); ?></p>

<table>
	<tr>
		<th>Image</th>
	</tr>

	<?php $num = 1; ?>
	<?php foreach ($uploads as $upload): ?>
	<tr>
		<td><img src="<?php echo $this->webroot . $upload['Upload']['path'];?>"></td>
	</tr>
	<?php $num++; ?>
	<?php endforeach; ?>
	<?php unset($upload); ?>
</table>