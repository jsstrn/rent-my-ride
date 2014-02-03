<h3>Upload or update your profile picture</h3>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php
				echo $this->Form->create('Upload', array('type' => 'file'));
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
				<img class="img-responsive center-block"
				<?php
					if (!$current_user['Upload']['path']) {
						echo 'data-src="holder.js/200x200';
					} else {
						echo 'src="' . $this->webroot . $current_user['Upload']['path'] . '"';
					}
				?>>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>