<?php
// generates the following <form id="UserAddForm" enctype="multipart/form-data" method="post" action="/users/add">
echo $this->Form->create('Upload', array('type' => 'file'));
?>
<input type='file' name='uploader'>
<?php 
echo $this->Form->submit('Upload Image');
echo $this->Form->end();
?>