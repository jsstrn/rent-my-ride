<h1>Uploads listing</h1>

<p>This is a list of all uploaded images.</p>

<p><?php echo $this->Html->link('Add a new image', 'add/'); ?></p>

<p>This is an <img src="../img/uploads/cars/default.png">image</p>

<table>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Path</th>
		<th>Image</th>
	</tr>

	<?php $num = 1; ?>
	<?php foreach ($uploads as $upload): ?>
	<tr>
		<td><?php echo $num; ?></td>
		<td><?php echo $upload['Upload']['name']; ?></td>
		<td><?php echo $upload['Upload']['path']; ?></td>
		<td><img src="<?php echo $upload['Upload']['path'];?>"></td>
	</tr>
	<?php $num++; ?>
	<?php endforeach; ?>
	<?php unset($upload); ?>
</table>