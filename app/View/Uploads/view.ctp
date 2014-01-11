<h2> <?php echo $Upload['file']['id']; ?> </h2>

<p> <?php echo $Upload['file']['name']; ?> </p>

<p> <?php echo $Upload['file']['type']; ?> </p>

<p> <?php echo $Upload['file']['size']; ?> </p>

<p> <?php echo $Upload['file']['data']; ?> </p>

<p> <small>Created on: <?php echo $Upload['file']['created']; ?> 

Last modified on: <?php echo $Upload['file']['modified']; ?> </p>
Upload
</br>

<?php echo $this->html->link('Back', array('action'=>'index')). " | " . 

$this->html->link('Edit', array('action'=>'edit', $Upload['file']['id'])). " | " . 
$this->html->link('Delete', array('action'=>'delete', $Upload['file']['id']), NULL, 'Are you sure you want to delete this image?'); ?>

<?php echo $this->Upload->view('File', $Upload['file']['id']); " | " . 
