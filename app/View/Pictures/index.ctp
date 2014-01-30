<h1>Image gallery</h1>

<p>This is a list of all gallery images.</p>

<p><?php echo $this->Html->link('Add a picture.', 'add/', array('class'=>'btn btn-primary')); ?></p>

<table>
	<tr>
		<th>Image</th>
	</tr>
	<?php $num = 1; ?>
	<?php foreach ($pictures as $picture): ?>
	<tr>
		<td><img src="<?php echo $this->webroot . $picture['Picture']['path'];?>"></td>
	</tr>
	<?php $num++; ?>
	<?php endforeach; ?>
	<?php unset($picture); ?>
</table>