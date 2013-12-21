<h2> <?php echo $post['Post']['title']; ?> </h2>

<p> <?php echo $post['Post']['body']; ?> </p>

<p> <small>Created on: <?php echo $post['Post']['created']; ?> 

Last modified on: <?php echo $post['Post']['modified']; ?> </p>

</br>

<?php echo $this->html->link('Back', array('action'=>'index', $post['Post']['id'])); ?>
<?php echo $this->html->link('Edit', array('action'=>'edit', $post['Post']['id'])); ?>
<?php echo $this->html->link('Delete', array('action'=>'delete', $post['Post']['id']), NULL, 'Are you sure you want to delete?'); ?>