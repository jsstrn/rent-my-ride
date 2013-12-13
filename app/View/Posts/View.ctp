<h2> <?php echo $post['Post']['title']; ?> </h2>

<p> <?php echo $post['Post']['body']; ?> </p>

<p> <small>Created on: <?php echo $post['Post']['created']; ?> 

Last modified on: <?php echo $post['Post']['modified']; ?> </p>

</br>

<?php echo $this->html->link('Go Back', array('action'=>'index', $post['Post']['id'])); ?>