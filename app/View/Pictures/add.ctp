<h3>Upload or update pictures of your car</h3>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php
				echo $this->Form->create('Picture', array('type' => 'file'));
				echo $this->Form->input('car_id', array(
					'type' => 'select',
					'label' => 'Select your car ',
					'class' => 'form-control',
					'options' => $myCars,
					));
				?>
				<br>
				<input class='form-control' type='file' name='uploader'>
			</div>
			<div class="panel-footer text-right">
				<?php 
				echo $this->Form->submit('Upload Image', array('class'=>'btn btn-primary'));
				echo $this->Form->end();
				?>
			</div>
		</div>
	</div>
	<div class="col-md-4">
	</div>
</div>