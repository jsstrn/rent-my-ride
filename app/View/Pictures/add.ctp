<h3>Upload or update pictures of your car</h3>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php
				echo $this->Form->create('Picture', array('type' => 'file'));
				?>
				<input class='form-control' type='file' name='uploader'>
			</div>
			<div class="panel-footer text-right">
				<?php 
				echo $this->Form->submit('Upload Image', array('class'=>'btn btn-default'));
				echo $this->Form->end();
				?>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<img
				<?php
					if (!$current_user['Picture']['path']) {
						echo 'data-src="holder.js/200x200';
					} else {
						echo 'src="' . $this->webroot . $current_user['Picture']['path'] . '"';
					}
				?>>
			</div>
		</div>
	</div>
</div>