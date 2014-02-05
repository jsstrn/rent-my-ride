<h1>Uploads listing</h1>

<p>This is a list of all uploaded images.</p>

<p><?php echo $this->Html->link('Add a profile picture.', 'add/', array('class'=>'btn btn-default')); ?></p>

<table>
	<tr>
		<th>Image</th>
	</tr>

	<?php $num = 1; ?>
	<?php foreach ($uploads as $upload): ?>
	<div class="row">
		<div class="col-md-4">
			<div class="well">
				<img class="img-responsive center-block"
				<?php
				if (!$upload['Upload']['path']) {
					echo $this->webroot . 'img/users/default.png"';
				} else {
					echo 'src="' . $this->webroot . $upload['Upload']['path'] . '"';
				}?>>
			</div>			
		</div>
	</div>
	<?php $num++; ?>
	<?php endforeach; ?>
	<?php unset($upload); ?>
</table>