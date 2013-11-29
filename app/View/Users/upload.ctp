<?php

echo $this->Form->create($model = 'User', array('type' => 'file'));
echo $this->Form->input('picture', array('type' => 'file'));
echo $this->Form->end(__('Upload Image'));

?>